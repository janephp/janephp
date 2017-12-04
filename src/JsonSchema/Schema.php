<?php

namespace Jane\JsonSchema;

use Jane\JsonSchema\Generator\File;
use Jane\JsonSchema\Guesser\Guess\ClassGuess;

class Schema
{
    /** @var string Origin of the schema (file or url path) */
    private $origin;

    /** @var string Namespace wanted for this schema */
    private $namespace;

    /** @var string Directory where to put files */
    private $directory;

    /** @var string Name of the root object in the schema (if needed) */
    private $rootName;

    /** @var ClassGuess[] List of classes associated to this schema */
    private $classes = [];

    /** @var string[] A list of references this schema is registered to */
    private $references;

    /** @var File[] A list of references this schema is registered to */
    private $files = [];

    /** @var mixed Parsed schema */
    private $parsed;

    /**
     * Schema constructor.
     *
     * @param string $origin
     * @param string $namespace
     * @param string $directory
     * @param string $rootName
     */
    public function __construct($origin, $namespace, $directory, $rootName)
    {
        $this->origin = $this->fixPath($origin);
        $this->namespace = $namespace;
        $this->directory = $directory;
        $this->rootName = $rootName;
        $this->references = [$this->origin];
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @return string
     */
    public function getDirectory()
    {
        return $this->directory;
    }

    /**
     * @return string
     */
    public function getRootName()
    {
        return $this->rootName;
    }

    public function addClass($reference, $class)
    {
        $this->classes[$reference] = $class;
    }

    public function getClass($reference)
    {
        if (array_key_exists($reference, $this->classes)) {
            return $this->classes[$reference];
        }

        if (array_key_exists($reference . '#', $this->classes)) {
            return $this->classes[$reference . '#'];
        }

        return null;
    }

    /**
     * @return ClassGuess[]
     */
    public function getClasses()
    {
        return $this->classes;
    }

    public function addFile(File $file)
    {
        $this->files[] = $file;
    }

    public function getFiles()
    {
        return $this->files;
    }

    public function addReference($reference)
    {
        $this->references[] = $reference;
    }

    public function hasReference($reference)
    {
        return in_array($reference, $this->references, true);
    }

    /**
     * @return mixed
     */
    public function getParsed()
    {
        return $this->parsed;
    }

    /**
     * @param mixed $parsed
     */
    public function setParsed($parsed)
    {
        $this->parsed = $parsed;
    }

    private function fixPath($path)
    {
        $path = preg_replace('#([^:]){1}/{2,}#', '$1/', $path);

        if ('/' === $path) {
            return '/';
        }

        $pathParts = [];
        foreach (explode('/', rtrim($path, '/')) as $part) {
            if ('.' === $part) {
                continue;
            }

            if ('..' === $part && count($pathParts) > 0) {
                array_pop($pathParts);
                continue;
            }

            $pathParts[] = $part;
        }

        return implode('/', $pathParts);
    }
}
