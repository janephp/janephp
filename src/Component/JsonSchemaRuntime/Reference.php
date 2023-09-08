<?php

declare(strict_types=1);

namespace Jane\Component\JsonSchemaRuntime;

use League\Uri\Http;
use League\Uri\UriString;
use Psr\Http\Message\UriInterface;
use Rs\Json\Pointer;
use Symfony\Component\Yaml\Yaml;

/**
 * Deal with a Json Reference.
 */
class Reference
{
    private static $fileCache = [];
    private static $pointerCache = [];
    private static $arrayCache = [];

    private $resolved;

    private $referenceUri;

    private $originUri;

    private $mergedUri;

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

    /**
     * Resolve a JSON Reference.
     *
     * @return mixed Return the json value (deserialized) referenced
     */
    public function resolve(callable $deserializeCallback = null)
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
     * @return mixed Return the json value referenced
     */
    protected function doResolve()
    {
        $fragment = (string) $this->mergedUri->withFragment('');
        $reference = sprintf('%s_%s', $fragment, $this->mergedUri->getFragment());

        if (!\array_key_exists($fragment, self::$fileCache)) {
            $contents = file_get_contents($fragment);

            if (!json_decode($contents, true) || JSON_ERROR_NONE !== json_last_error()) {
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
