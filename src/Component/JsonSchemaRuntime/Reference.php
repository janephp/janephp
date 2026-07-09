<?php

declare(strict_types=1);

namespace Jane\Component\JsonSchemaRuntime;

use League\Uri\Http;
use League\Uri\UriString;
use Psr\Http\Message\UriInterface;
use Rs\Json\Pointer;
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

    private string|array|null $resolved = null;
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

        $this->referenceUri = method_exists(Http::class, 'new') ? Http::new($reference) : Http::createFromString($reference);
        $this->originUri = method_exists(Http::class, 'new') ? Http::new($origin) : Http::createFromString($origin);
        $this->mergedUri = method_exists(Http::class, 'fromComponents') ? Http::fromComponents($mergedParts) : Http::createFromComponents($mergedParts);
    }

    public static function allowExternalRefs(bool $allow = true): void
    {
        self::$allowExternalRefs = $allow;
    }

    public static function setAllowedExternalHosts(array $hosts): void
    {
        self::$allowedExternalHosts = $hosts;
    }

    public static function resetConfig(): void
    {
        self::$allowExternalRefs = false;
        self::$allowedExternalHosts = [];
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
     * @return string|array Return the json value referenced
     */
    protected function doResolve(): string|array
    {
        $fragment = (string) $this->mergedUri->withFragment('');
        $reference = \sprintf('%s_%s', $fragment, $this->mergedUri->getFragment());

        $this->validateReference($fragment);

        if (!\array_key_exists($fragment, self::$fileCache)) {
            $contents = file_get_contents($fragment);

            if (!json_decode($contents, true) || \JSON_ERROR_NONE !== json_last_error()) {
                $decoded = Yaml::parse($contents,
                    Yaml::PARSE_OBJECT | Yaml::PARSE_OBJECT_FOR_MAP | Yaml::PARSE_DATETIME | Yaml::PARSE_EXCEPTION_ON_INVALID_TYPE);
                $contents = json_encode($decoded);
            }

            self::$fileCache[$fragment] = $contents;
        }

        if (!\array_key_exists($reference, self::$arrayCache)) {
            if ('' === $this->mergedUri->getFragment()) {
                $array = json_decode(self::$fileCache[$fragment], true);
            } else {
                if (!\array_key_exists($fragment, self::$pointerCache)) {
                    self::$pointerCache[$fragment] = new Pointer(self::$fileCache[$fragment]);
                }

                $array = json_decode(json_encode(self::$pointerCache[$fragment]->get($this->mergedUri->getFragment())), true);
            }

            self::$arrayCache[$reference] = $array;
        }

        return self::$arrayCache[$reference];
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
            throw new \RuntimeException(\sprintf('Reference scheme "%s" is not allowed. Allowed schemes: http, https, file (or local path without scheme).', $scheme));
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

        if ('' === $originPath || '/' === $originPath) {
            return;
        }

        $basePath = @realpath(\dirname($originPath));

        if (false === $basePath) {
            $basePath = \dirname($originPath);
        }

        $basePath = rtrim($basePath, '/\\');

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

        if ('' === $normalized || !str_starts_with($normalized, $basePath)) {
            throw new \RuntimeException(\sprintf('Local reference "%s" resolves outside the allowed directory "%s". Path traversal is not allowed.', $fragment, $basePath));
        }
    }

    private function validateRemoteRef(): void
    {
        if (!self::$allowExternalRefs) {
            throw new \RuntimeException('External (HTTP/HTTPS) references are not allowed. Set "allow-external-refs" to true in your Jane configuration to enable them, or use "external-ref-allowed-hosts" to restrict to specific hosts.');
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
                throw new \RuntimeException(\sprintf('Remote reference host "%s" is not allowed. Must be one of: %s.', $host, implode(', ', self::$allowedExternalHosts)));
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
