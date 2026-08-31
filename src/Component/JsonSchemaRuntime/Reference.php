<?php

declare(strict_types=1);

namespace Jane\Component\JsonSchemaRuntime;

use Jane\Component\JsonSchemaRuntime\Exception\InvalidReferenceException;
use Jane\Component\JsonSchemaRuntime\Exception\ReferenceDecodeException;
use Jane\Component\JsonSchemaRuntime\Exception\ReferenceFetchException;
use Jane\Component\JsonSchemaRuntime\Exception\ReferencePointerException;
use League\Uri\Http;
use League\Uri\UriString;
use Psr\Http\Message\UriInterface;
use Rs\Json\Pointer;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;

/**
 * Deal with a JSON Reference.
 */
class Reference
{
    private static array $fileCache = [];
    private static array $pointerCache = [];
    private static array $arrayCache = [];

    private static bool $allowExternalRefs = false;
    private static array $allowedExternalHosts = [];
    private static bool $followRedirects = false;
    private static array $allowedLocalRefRoots = [];

    /**
     * league/uri v7 static factories, detected once per process: composer
     * allows both ^6.7.2 and ^7.4, and method_exists() must not run on every
     * single Reference construction.
     */
    private static ?bool $uriHasNewFactory = null;
    private static ?bool $uriHasFromComponentsFactory = null;

    private string|int|float|bool|array|null $resolved = null;
    private Http $referenceUri;
    private Http $originUri;
    private Http $mergedUri;

    public function __construct(string $reference, string $origin)
    {
        $reference = $this->fixPath($reference);
        $origin = $this->fixPath($origin);
        $originParts = UriString::parse($origin);
        $referenceParts = parse_url($reference);
        $mergedParts = array_merge($originParts, $referenceParts);

        if (\array_key_exists('path', $referenceParts)) {
            $mergedParts['path'] = $this->joinPath(\dirname($originParts['path']), $referenceParts['path']);
        }

        self::$uriHasNewFactory ??= method_exists(Http::class, 'new');
        self::$uriHasFromComponentsFactory ??= method_exists(Http::class, 'fromComponents');

        try {
            $this->referenceUri = self::$uriHasNewFactory ? Http::new($reference) : Http::createFromString($reference);
            $this->originUri = self::$uriHasNewFactory ? Http::new($origin) : Http::createFromString($origin);
            $this->mergedUri = self::$uriHasFromComponentsFactory ? Http::fromComponents($mergedParts) : Http::createFromComponents($mergedParts);
        } catch (\Throwable $exception) {
            throw new InvalidReferenceException(\sprintf('Unable to parse reference "%s" against origin "%s".', $reference, $origin), 0, $exception);
        }
    }

    public static function allowExternalRefs(bool $allow = true): void
    {
        self::$allowExternalRefs = $allow;
    }

    public static function setAllowedExternalHosts(array $hosts): void
    {
        self::$allowedExternalHosts = $hosts;
    }

    public static function setAllowedLocalRefRoots(array $roots): void
    {
        self::$allowedLocalRefRoots = $roots;
    }

    /**
     * Allow (or forbid) following HTTP redirects when fetching external
     * references. Disabled by default: an allowlisted host must not be able
     * to bounce the fetch to an arbitrary, possibly non allowlisted host.
     */
    public static function setFollowRedirects(bool $allow = true): void
    {
        self::$followRedirects = $allow;
    }

    public static function resetConfig(): void
    {
        self::$allowExternalRefs = false;
        self::$allowedExternalHosts = [];
        self::$followRedirects = false;
        self::$allowedLocalRefRoots = [];
    }

    /**
     * Resolve a JSON Reference.
     *
     * @return mixed Return the json value (deserialized) referenced
     */
    public function resolve(?callable $deserializeCallback = null)
    {
        if (null === $deserializeCallback) {
            $deserializeCallback = function ($data) { return $data; };
        }

        if (null === $this->resolved) {
            $this->resolved = $this->doResolve();
        }

        return $deserializeCallback($this->resolved);
    }

    /**
     * Resolve a JSON Reference for a Schema.
     *
     * @return string|int|float|bool|array|null Return the json value referenced
     */
    protected function doResolve(): string|int|float|bool|array|null
    {
        $fragment = (string) $this->mergedUri->withFragment('');
        $reference = \sprintf('%s_%s', $fragment, $this->mergedUri->getFragment());

        $this->validateReference($fragment);

        if (!\array_key_exists($fragment, self::$fileCache)) {
            self::$fileCache[$fragment] = $this->fetchAndNormalizeContents($fragment);
        }

        if (!\array_key_exists($reference, self::$arrayCache)) {
            if ('' === $this->mergedUri->getFragment()) {
                $array = json_decode(self::$fileCache[$fragment], true);
            } else {
                try {
                    if (!\array_key_exists($fragment, self::$pointerCache)) {
                        self::$pointerCache[$fragment] = new Pointer(self::$fileCache[$fragment]);
                    }

                    $pointer = self::$pointerCache[$fragment]->get($this->mergedUri->getFragment());
                } catch (\Throwable $exception) {
                    throw new ReferencePointerException(\sprintf('Unable to resolve pointer "%s" in reference document "%s".', $this->mergedUri->getFragment(), $fragment), 0, $exception);
                }

                $array = json_decode(json_encode($pointer), true);
            }

            self::$arrayCache[$reference] = $array;
        }

        return self::$arrayCache[$reference];
    }

    /**
     * Fetch the referenced document and normalize its contents to JSON.
     *
     * JSON is tried first (valid JSON roots such as "[]" / "0" / "null" must
     * not be misrouted through the YAML parser); YAML is the fallback for
     * YAML documents.
     */
    private function fetchAndNormalizeContents(string $fragment): string
    {
        // Redirects are not followed by default (see setFollowRedirects()): an
        // allowlisted host must not be able to bounce the fetch to an
        // arbitrary (possibly non allowlisted) host.
        $context = stream_context_create([
            'http' => ['follow_location' => self::$followRedirects ? 1 : 0],
        ]);

        // $http_response_header is populated by the HTTP stream wrapper in
        // this very scope (overwriting this default), and is left empty for
        // every other wrapper: initialize it so the read below is always safe.
        $http_response_header = [];

        $contents = @file_get_contents($fragment, false, $context);

        if (false === $contents) {
            throw new ReferenceFetchException(\sprintf('Unable to fetch reference document "%s".', $fragment));
        }

        if (!self::$followRedirects) {
            $statusCode = $this->lastHttpStatusCode($http_response_header);

            if (null !== $statusCode && $statusCode >= 300 && $statusCode < 400) {
                throw new ReferenceFetchException(\sprintf('Reference document "%s" answered with HTTP status %d: redirects are not followed when fetching external references (set "external-ref-follow-redirects" to true to enable them).', $fragment, $statusCode));
            }
        }

        try {
            json_decode($contents, true, 512, \JSON_THROW_ON_ERROR);

            return $contents;
        } catch (\JsonException) {
            // Not JSON: fall back to YAML parsing below.
        }

        try {
            $decoded = Yaml::parse($contents,
                Yaml::PARSE_OBJECT | Yaml::PARSE_OBJECT_FOR_MAP | Yaml::PARSE_DATETIME | Yaml::PARSE_EXCEPTION_ON_INVALID_TYPE);
        } catch (ParseException $exception) {
            throw new ReferenceDecodeException(\sprintf('Unable to parse reference document "%s": content is neither valid JSON nor valid YAML.', $fragment), 0, $exception);
        }

        $encoded = json_encode($decoded);

        if (false === $encoded) {
            throw new ReferenceDecodeException(\sprintf('Unable to convert reference document "%s" back to JSON.', $fragment));
        }

        return $encoded;
    }

    /**
     * HTTP status of the last fetch, parsed from the headers populated by the
     * HTTP stream wrapper ($http_response_header, local to the fetch call).
     *
     * @param array<string> $responseHeaders
     */
    private function lastHttpStatusCode(array $responseHeaders): ?int
    {
        $statusLine = null;

        foreach ($responseHeaders as $header) {
            if (str_starts_with($header, 'HTTP/')) {
                $statusLine = $header;
            }
        }

        if (null === $statusLine || !preg_match('#^HTTP/\S+\s+(\d{3})#', $statusLine, $matches)) {
            return null;
        }

        return (int) $matches[1];
    }

    /**
     * Return true if reference and origin are in the same document.
     */
    public function isInCurrentDocument(): bool
    {
        return
            $this->mergedUri->getScheme() === $this->originUri->getScheme()
            && $this->mergedUri->getHost() === $this->originUri->getHost()
            && $this->mergedUri->getPort() === $this->originUri->getPort()
            && $this->mergedUri->getPath() === $this->originUri->getPath()
            && $this->mergedUri->getQuery() === $this->originUri->getQuery()
        ;
    }

    public function getMergedUri(): UriInterface
    {
        return $this->mergedUri;
    }

    public function getReferenceUri(): UriInterface
    {
        return $this->referenceUri;
    }

    public function getOriginUri(): UriInterface
    {
        return $this->originUri;
    }

    private function validateReference(string $fragment): void
    {
        $scheme = $this->mergedUri->getScheme();

        $allowedSchemes = ['', 'http', 'https', 'file'];
        if (!\in_array($scheme, $allowedSchemes, true)) {
            throw new InvalidReferenceException(\sprintf('Reference scheme "%s" is not allowed. Allowed schemes: http, https, file (or local path without scheme).', $scheme));
        }

        if ('' === $scheme || 'file' === $scheme) {
            $this->validateLocalPath($fragment);
        }

        if (\in_array($scheme, ['http', 'https'], true)) {
            $this->validateRemoteRef();
        }
    }

    private function validateLocalPath(string $fragment): void
    {
        $originPath = $this->originUri->getPath();

        // An empty or root origin path degenerates to an empty base directory,
        // which authorizes absolute paths only: containment logic still runs,
        // there is just no meaningful directory to stay under.
        $basePath = @realpath(\dirname($originPath));

        if (false === $basePath) {
            $basePath = \dirname($originPath);
        }

        $basePath = rtrim(str_replace('\\', '/', $basePath), '/');

        $path = $fragment;
        if (str_starts_with($path, 'file://')) {
            $path = substr($path, 7);
        }

        if (!str_starts_with($path, '/') && !preg_match('#^[a-zA-Z]:/#', $path)) {
            $path = $basePath . '/' . $path;
        }

        $normalized = @realpath($path);
        if (false === $normalized) {
            $normalized = $this->normalizePath($path);
        }

        $normalized = str_replace('\\', '/', $normalized);

        $allowedBases = $this->getAllowedLocalBases($basePath);

        foreach ($allowedBases as $base) {
            if ($normalized === $base || str_starts_with($normalized, $base . '/')) {
                return;
            }
        }

        throw new InvalidReferenceException(\sprintf('Local reference "%s" resolves outside the allowed directories [%s]. Add its location to "allowed-local-ref-roots" in your Jane configuration.', $fragment, implode(', ', $allowedBases)));
    }

    /**
     * Directories a local reference may resolve into: the directory of the referencing
     * document, plus every root explicitly allowed through "allowed-local-ref-roots".
     *
     * @return string[]
     */
    private function getAllowedLocalBases(string $basePath): array
    {
        $bases = [$basePath];

        foreach (self::$allowedLocalRefRoots as $root) {
            if (!\is_string($root) || '' === $root) {
                continue;
            }

            $root = str_replace('\\', '/', $root);
            $realRoot = @realpath($root);

            $root = false !== $realRoot ? str_replace('\\', '/', $realRoot) : $this->normalizePath($root);

            if ('' === $root) {
                continue;
            }

            $bases[] = rtrim($root, '/');
        }

        return array_values(array_unique($bases));
    }

    private function validateRemoteRef(): void
    {
        if (!self::$allowExternalRefs) {
            throw new InvalidReferenceException('External (HTTP/HTTPS) references are not allowed. Set "allow-external-refs" to true in your Jane configuration to enable them, or use "external-ref-allowed-hosts" to restrict to specific hosts.');
        }

        if ([] !== self::$allowedExternalHosts) {
            $host = $this->mergedUri->getHost();
            $allowed = false;

            foreach (self::$allowedExternalHosts as $allowedHost) {
                if ($host === $allowedHost || str_ends_with($host, '.' . $allowedHost)) {
                    $allowed = true;
                    break;
                }
            }

            if (!$allowed) {
                throw new InvalidReferenceException(\sprintf('Remote reference host "%s" is not allowed. Must be one of: %s.', $host, implode(', ', self::$allowedExternalHosts)));
            }
        }
    }

    private function normalizePath(string $path): string
    {
        $parts = explode('/', str_replace('\\', '/', $path));
        $resolved = [];

        foreach ($parts as $part) {
            if ('.' === $part || '' === $part) {
                continue;
            }

            if ('..' === $part) {
                if ([] !== $resolved) {
                    array_pop($resolved);
                }
                continue;
            }

            $resolved[] = $part;
        }

        $prefix = '';
        if (str_starts_with($path, '/')) {
            $prefix = '/';
        }

        return $prefix . implode('/', $resolved);
    }

    /**
     * Join path like unix path join :.
     *
     *   a/b + c => a/b/c
     *   a/b + /c => /c
     *   a/b/c + .././d => a/b/d
     */
    private function joinPath(...$paths): string
    {
        $resultPath = null;

        foreach ($paths as $path) {
            if (null === $resultPath || (!empty($path) && '/' === $path[0])) {
                $resultPath = $path;
            } else {
                $resultPath = $resultPath . '/' . $path;
            }
        }

        $resultPath = preg_replace('~/{2,}~', '/', $resultPath);

        if ('/' === $resultPath) {
            return '/';
        }

        $resultPathParts = [];
        foreach (explode('/', rtrim($resultPath, '/')) as $part) {
            if ('.' === $part) {
                continue;
            }

            if ('..' === $part && \count($resultPathParts) > 0) {
                array_pop($resultPathParts);
                continue;
            }

            $resultPathParts[] = $part;
        }

        return implode('/', $resultPathParts);
    }

    private function fixPath(string $path): string
    {
        if ('\\' === \DIRECTORY_SEPARATOR) {
            $path = lcfirst(str_replace(\DIRECTORY_SEPARATOR, '/', $path));
        }

        return $path;
    }
}
