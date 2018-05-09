<?php

namespace Jane\JsonSchema;

use Jane\JsonSchema\Guesser\Guess\ClassGuess;
use League\Uri\Http;

class Registry
{
    /** @var Schema[] */
    private $schemas = [];

    public function addSchema(Schema $schema)
    {
        $this->schemas[] = $schema;
    }

    public function getSchema($reference): ?Schema
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
