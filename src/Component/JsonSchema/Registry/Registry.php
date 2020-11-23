<?php

namespace Jane\Component\JsonSchema\Registry;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use League\Uri\Http;

class Registry implements RegistryInterface
{
    /** @var string[] */
    protected $outputDirectories = [];

    /** @var Schema[] */
    protected $schemas = [];

    public function addOutputDirectory(string $outputDirectory): void
    {
        $this->outputDirectories[] = $outputDirectory;
    }

    /**
     * @return string[]
     */
    public function getOutputDirectories(): array
    {
        return $this->outputDirectories;
    }

    public function addSchema(SchemaInterface $schema): void
    {
        $this->schemas[] = $schema;
    }

    public function getSchema(string $reference): ?Schema
    {
        $uri = Http::createFromString($reference);
        $schemaUri = (string) $uri->withFragment('');

        foreach ($this->schemas as $schema) {
            if ($schema->hasReference($schemaUri)) {
                return $schema;
            }
        }

        return null;
    }

    /**
     * @return Schema[]
     */
    public function getSchemas(): array
    {
        return $this->schemas;
    }

    public function hasClass(string $classReference): bool
    {
        return null !== $this->getClass($classReference);
    }

    public function getClass(string $classReference): ?ClassGuess
    {
        $schema = $this->getSchema($classReference);

        if (null === $schema) {
            return null;
        }

        return $schema->getClass($classReference);
    }

    public function getOptionsHash(): string
    {
        return md5(json_encode([]));
    }
}
