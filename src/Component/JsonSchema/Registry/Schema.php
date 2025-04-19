<?php

namespace Jane\Component\JsonSchema\Registry;

use Jane\Component\JsonSchema\Generator\File;
use Jane\Component\JsonSchema\Guesser\Guess\ArrayType;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\ObjectType;

class Schema implements SchemaInterface
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

    /** @var array Relation between models */
    protected $relations = [];

    public function __construct(string $origin, string $namespace, string $directory, string $rootName)
    {
        $this->origin = $this->fixPath($origin);
        $this->namespace = $namespace;
        $this->directory = $directory;
        $this->rootName = $rootName;
        $this->references = [$this->origin];
    }

    public function getOrigin(): string
    {
        return $this->origin;
    }

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    public function getDirectory(): string
    {
        return $this->directory;
    }

    public function getRootName(): string
    {
        return $this->rootName;
    }

    public function addClass(string $reference, ClassGuess $class): void
    {
        $this->classes[urldecode($reference)] = $class;
    }

    public function removeClass(string $reference): void
    {
        unset($this->classes[urldecode($reference)]);
    }

    public function getClass($reference): ?ClassGuess
    {
        $reference = urldecode($reference);

        if (\array_key_exists($reference, $this->classes)) {
            return $this->classes[$reference];
        }

        if (\array_key_exists($reference . '#', $this->classes)) {
            return $this->classes[$reference . '#'];
        }

        return null;
    }

    /**
     * @return array{0: ClassGuess, 1: string}|null
     */
    public function findPropertyClass(string $sourceObject, string $propertyObject): ?array
    {
        $referencePart = \sprintf('%s/properties/%s', $sourceObject, $propertyObject);

        foreach ($this->classes as $class) {
            if (str_contains($class->getReference(), $referencePart)) {
                return [$class, $class->getReference()];
            }
        }

        return null;
    }

    /**
     * @return ClassGuess[]
     */
    public function getClasses(): array
    {
        return $this->classes;
    }

    public function addFile(File $file): void
    {
        $this->files[] = $file;
    }

    public function getFiles(): array
    {
        return $this->files;
    }

    public function addReference(string $reference): void
    {
        $this->references[] = $reference;
    }

    public function hasReference(string $reference): bool
    {
        return \in_array($reference, $this->references, true);
    }

    public function getParsed()
    {
        return $this->parsed;
    }

    public function setParsed($parsed): void
    {
        $this->parsed = $parsed;
    }

    public function addRelation(string $model, string $needs): void
    {
        if ($needs === $model) {
            return;
        }

        if (!\array_key_exists($model, $this->relations)) {
            $this->relations[$model] = [];
        }

        $this->relations[$model][] = $needs;
    }

    public function relationExists($model): bool
    {
        return \array_key_exists($model, $this->relations);
    }

    public function addClassRelations(ClassGuess $classGuess): void
    {
        $baseModel = $classGuess->getName();
        if ($this->relationExists($baseModel)) {
            return;
        }

        foreach ($classGuess->getProperties() as $property) {
            // second condition is here to avoid mapping PHP classes such as \DateTime
            /** @var ObjectType $objectType */
            if (($objectType = $property->getType()) instanceof ObjectType
                && '\\' !== substr($objectType->getClassName(), 0, 1)) {
                $this->addRelation($baseModel, $objectType->getClassName());
            }

            if (($arrayType = $property->getType()) instanceof ArrayType
                && ($itemType = $arrayType->getItemType()) instanceof ObjectType
                && '\\' !== substr($itemType->getClassName(), 0, 1)) {
                $this->addRelation($baseModel, $itemType->getClassName());
            }
        }
    }

    private function fixPath(string $path): string
    {
        if ('\\' === \DIRECTORY_SEPARATOR) {
            $path = lcfirst(str_replace(\DIRECTORY_SEPARATOR, '/', $path));
        }
        $path = preg_replace('#([^:]){1}/{2,}#', '$1/', $path);

        if ('/' === $path) {
            return '/';
        }

        $pathParts = [];
        foreach (explode('/', rtrim($path, '/')) as $part) {
            if ('.' === $part) {
                continue;
            }

            if ('..' === $part && \count($pathParts) > 0) {
                array_pop($pathParts);
                continue;
            }

            $pathParts[] = $part;
        }

        return implode('/', $pathParts);
    }
}
