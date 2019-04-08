<?php

declare(strict_types=1);

namespace Jane\JsonSchemaRuntime;

use League\Uri\AbstractUri;
use League\Uri\Http;
use League\Uri\Schemes\Http as HttpLegacy;
use League\Uri\Parser;
use League\Uri\UriParser;
use Rs\Json\Pointer;
use Symfony\Component\Yaml\Yaml;

/**
 * Deal with a Json Reference.
 */
class Reference
{
    private $resolved;

    private $referenceUri;

    private $originUri;

    private $mergedUri;

    public function __construct(string $reference, string $origin)
    {
        if (class_exists(Parser::class)) {
            $uriParse = new Parser();
        } else {
            $uriParse = new UriParser();
        }

        $http = class_exists(Http::class) ? Http::class : HttpLegacy::class;

        $originParts = $uriParse->parse($origin);
        $referenceParts = parse_url($reference);
        $mergedParts = array_merge($originParts, $referenceParts);

        if (\array_key_exists('path', $referenceParts)) {
            $mergedParts['path'] = $this->joinPath(\dirname($originParts['path']), $referenceParts['path']);
        }

        $this->referenceUri = $http::createFromString($reference);
        $this->originUri = $http::createFromString($origin);
        $this->mergedUri = $http::createFromComponents($mergedParts);
    }

    /**
     * Resolve a JSON Reference.
     *
     * @param callable $deserializeCallback
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
        // @TODO Better handling of getting the content of a file
        $json = file_get_contents((string) $this->mergedUri->withFragment(''));

        if (!json_decode($json) || JSON_ERROR_NONE !== json_last_error()) {
            $decoded = Yaml::parse($json, Yaml::PARSE_OBJECT | Yaml::PARSE_OBJECT_FOR_MAP | Yaml::PARSE_DATETIME | Yaml::PARSE_EXCEPTION_ON_INVALID_TYPE);
            $json = json_encode($decoded);
        }

        $pointer = new Pointer($json);

        if ('' === $this->mergedUri->getFragment()) {
            return json_decode($json);
        }

        return $pointer->get($this->mergedUri->getFragment());
    }

    /**
     * Return true if reference and origin are in the same document.
     *
     * @return bool
     */
    public function isInCurrentDocument()
    {
        return
            $this->mergedUri->getScheme() === $this->originUri->getScheme()
            &&
            $this->mergedUri->getHost() === $this->originUri->getHost()
            &&
            $this->mergedUri->getPort() === $this->originUri->getPort()
            &&
            $this->mergedUri->getPath() === $this->originUri->getPath()
            &&
            $this->mergedUri->getQuery() === $this->originUri->getQuery()
        ;
    }

    /**
     * @return AbstractUri|\League\Uri\Schemes\Generic\AbstractUri
     */
    public function getMergedUri()
    {
        return $this->mergedUri;
    }

    /**
     * @return AbstractUri|\League\Uri\Schemes\Generic\AbstractUri
     */
    public function getReferenceUri()
    {
        return $this->referenceUri;
    }

    /**
     * @return AbstractUri|\League\Uri\Schemes\Generic\AbstractUri
     */
    public function getOriginUri()
    {
        return $this->originUri;
    }

    /**
     * Join path like unix path join :.
     *
     *   a/b + c => a/b/c
     *   a/b + /c => /c
     *   a/b/c + .././d => a/b/d
     *
     * @param array ...$paths
     *
     * @return string
     */
    private function joinPath(...$paths)
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
}
