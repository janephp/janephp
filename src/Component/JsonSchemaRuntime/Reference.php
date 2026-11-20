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
    private ReferenceResolver $resolver;

    public function __construct(string $reference, string $origin, ?ReferenceResolver $resolver = null)
    {
        $this->resolver = $resolver ?? ReferenceResolver::default();
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

    /**
     * Resolve a JSON Reference.
     *
     * @return mixed Return the json value (deserialized) referenced
     */
    public function resolve(?callable $deserializeCallback = null)
    {
        if (null === $this->resolved) {
            $this->resolved = $this->doResolve();
        }

        if (null === $deserializeCallback) {
            return $this->resolved;
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

        $location = $this->validateReference($fragment);

        if (!$this->resolver->hasFile($fragment)) {
            $this->resolver->setFile($fragment, $this->fetchAndNormalizeContents($fragment, $location));
        }

        if (!$this->resolver->hasArray($reference)) {
            if ('' === $this->mergedUri->getFragment()) {
                $array = json_decode($this->resolver->getFile($fragment), true);
            } else {
                try {
                    if (!$this->resolver->hasPointer($fragment)) {
                        $this->resolver->setPointer($fragment, new Pointer($this->resolver->getFile($fragment)));
                    }

                    $pointer = $this->resolver->getPointer($fragment)->get($this->mergedUri->getFragment());
                } catch (\Throwable $exception) {
                    throw new ReferencePointerException(\sprintf('Unable to resolve pointer "%s" in reference document "%s".', $this->mergedUri->getFragment(), $fragment), 0, $exception);
                }

                $array = json_decode(json_encode($pointer), true);
            }

            $this->resolver->setArray($reference, $array);
        }

        return $this->resolver->getArray($reference);
    }

    /**
     * Fetch the referenced document and normalize its contents to JSON.
     *
     * JSON is tried first (valid JSON roots such as "[]" / "0" / "null" must
     * not be misrouted through the YAML parser); YAML is the fallback for
     * YAML documents.
     *
     * @param string $fragment document identifier, used in messages
     * @param string $location what is actually read: the validated filesystem
     *                         path for a local document, the URL otherwise
     */
    private function fetchAndNormalizeContents(string $fragment, string $location): string
    {
        // Redirects are not followed by default (see setFollowRedirects()): an
        // allowlisted host must not be able to bounce the fetch to an
        // arbitrary (possibly non allowlisted) host.
        $context = stream_context_create([
            'http' => ['follow_location' => $this->resolver->followsRedirects() ? 1 : 0],
        ]);

        // $http_response_header is populated by the HTTP stream wrapper in
        // this very scope (overwriting this default), and is left empty for
        // every other wrapper: initialize it so the read below is always safe.
        $http_response_header = [];

        $contents = @file_get_contents($location, false, $context);

        if (false === $contents) {
            throw new ReferenceFetchException(\sprintf('Unable to fetch reference document "%s".', $fragment));
        }

        if (!$this->resolver->followsRedirects()) {
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
                Yaml::PARSE_OBJECT_FOR_MAP | Yaml::PARSE_DATETIME | Yaml::PARSE_EXCEPTION_ON_INVALID_TYPE);
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

    /**
     * @return string the location to read the document from: the validated
     *                filesystem path for a local reference, the URL otherwise
     */
    private function validateReference(string $fragment): string
    {
        $scheme = $this->mergedUri->getScheme();

        $allowedSchemes = ['', 'http', 'https', 'file'];
        if (!\in_array($scheme, $allowedSchemes, true)) {
            throw new InvalidReferenceException(\sprintf('Reference scheme "%s" is not allowed. Allowed schemes: http, https, file (or local path without scheme).', $scheme));
        }

        if ('' === $scheme || 'file' === $scheme) {
            return $this->validateLocalPath($fragment);
        }

        $this->validateRemoteRef();

        return $fragment;
    }

    /**
     * Check a local reference against the allowed directories.
     *
     * The path is derived once from the parsed URI and that very path is both
     * checked and returned for reading, so what is validated is what is read.
     */
    private function validateLocalPath(string $fragment): string
    {
        $path = $this->toLocalPath($this->mergedUri);

        if (null === $path) {
            throw new InvalidReferenceException(\sprintf('Local reference "%s" must not name a host: use a plain path or "file://localhost/path".', $fragment));
        }

        $normalized = $this->canonicalizeLocalPath($path);
        $allowedBases = $this->getAllowedLocalBases();

        foreach ($allowedBases as $base) {
            if ($normalized === $base || str_starts_with($normalized, $base . '/')) {
                return $normalized;
            }
        }

        throw new InvalidReferenceException(\sprintf('Local reference "%s" resolves outside the allowed directories [%s]. Add its location to "allowed-local-ref-roots" in your Jane configuration.', $fragment, implode(', ', $allowedBases)));
    }

    /**
     * Filesystem path designated by a schemeless or "file" URI, or null when
     * the URI names anything but the local machine.
     */
    private function toLocalPath(UriInterface $uri): ?string
    {
        $scheme = strtolower($uri->getScheme());
        $host = strtolower($uri->getHost());

        if ('' !== $scheme && 'file' !== $scheme) {
            return null;
        }

        if ('' !== $uri->getUserInfo() || null !== $uri->getPort()) {
            return null;
        }

        if ('' !== $host && ('file' !== $scheme || 'localhost' !== $host)) {
            return null;
        }

        $path = $uri->getPath();

        if ('' !== $uri->getQuery()) {
            $path .= '?' . $uri->getQuery();
        }

        // "file:///C:/dir/file.json" designates "C:/dir/file.json".
        if ('file' === $scheme && 1 === preg_match('#^/[a-zA-Z]:/#', $path)) {
            $path = substr($path, 1);
        }

        return $path;
    }

    /**
     * Absolute, normalized form of a local path. A relative path is resolved
     * against the working directory, as the filesystem functions do.
     */
    private function canonicalizeLocalPath(string $path): string
    {
        $path = str_replace('\\', '/', $path);

        if (!str_starts_with($path, '/') && 1 !== preg_match('#^[a-zA-Z]:/#', $path)) {
            $workingDirectory = getcwd();

            if (false === $workingDirectory) {
                throw new InvalidReferenceException(\sprintf('Unable to resolve relative local reference "%s": the working directory is not available.', $path));
            }

            $path = rtrim(str_replace('\\', '/', $workingDirectory), '/') . '/' . $path;
        }

        $real = file_exists($path) ? realpath($path) : false;

        return str_replace('\\', '/', false !== $real ? $real : $this->normalizePath($path));
    }

    /**
     * Directories a local reference may resolve into: the directory of the referencing
     * document, plus every root explicitly allowed through "allowed-local-ref-roots".
     *
     * @return string[]
     */
    private function getAllowedLocalBases(): array
    {
        $bases = [];

        // Only a local referencing document lends its directory: the path of a
        // remote document says nothing about the local filesystem.
        $originPath = $this->toLocalPath($this->originUri);

        if (null !== $originPath) {
            // An empty or root origin path degenerates to an empty base directory,
            // which authorizes absolute paths only: containment logic still runs,
            // there is just no meaningful directory to stay under.
            $baseDir = \dirname($originPath);
            $bases[] = \in_array($baseDir, ['', '/', '\\'], true) ? '' : rtrim($this->canonicalizeLocalPath($baseDir), '/');
        }

        foreach ($this->resolver->getAllowedLocalRefRoots() as $root) {
            if (!\is_string($root) || '' === $root) {
                continue;
            }

            $root = str_replace('\\', '/', $root);
            $realRoot = is_dir($root) ? realpath($root) : false;

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
        if (!$this->resolver->allowsExternalRefs()) {
            throw new InvalidReferenceException('External (HTTP/HTTPS) references are not allowed. Set "allow-external-refs" to true in your Jane configuration to enable them, or use "external-ref-allowed-hosts" to restrict to specific hosts.');
        }

        if ([] !== $this->resolver->getAllowedExternalHosts()) {
            $host = $this->mergedUri->getHost();
            $allowed = false;

            foreach ($this->resolver->getAllowedExternalHosts() as $allowedHost) {
                if ($host === $allowedHost || str_ends_with($host, '.' . $allowedHost)) {
                    $allowed = true;
                    break;
                }
            }

            if (!$allowed) {
                throw new InvalidReferenceException(\sprintf('Remote reference host "%s" is not allowed. Must be one of: %s.', $host, implode(', ', $this->resolver->getAllowedExternalHosts())));
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
