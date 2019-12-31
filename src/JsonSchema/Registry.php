<?php

namespace Jane\JsonSchema;

use Jane\JsonSchema\Guesser\Guess\ClassGuess;
use League\Uri\Http;
use League\Uri\Schemes\Http as HttpLegacy;

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

    public function getSchema($reference): ?Schema
    {
        $uri = class_exists(Http::class) ? Http::createFromString($reference) : HttpLegacy::createFromString($reference);
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

    public function hasClass($classReference): bool
    {
        return null !== $this->getClass($classReference);
    }

    public function getClass($classReference): ?ClassGuess
    {
        $schema = $this->getSchema($classReference);

        if (null === $schema) {
            return null;
        }

        return $schema->getClass($classReference);
    }
}
