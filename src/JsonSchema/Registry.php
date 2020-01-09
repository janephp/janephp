<?php

namespace Jane\JsonSchema;

use Jane\JsonSchema\Guesser\Guess\ClassGuess;
use League\Uri\Http;

class Registry
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

    public function addSchema(Schema $schema): void
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
}
