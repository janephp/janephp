<?php

namespace Jane\JsonSchema;

use League\Uri\Schemes\Http;

class Registry
{
    /** @var Schema[] */
    private $schemas = [];

    public function addSchema(Schema $schema)
    {
        $this->schemas[] = $schema;
    }

    public function getSchema($reference)
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
    public function getSchemas()
    {
        return $this->schemas;
    }

    public function hasClass($classReference)
    {
        return null !== $this->getClass($classReference);
    }

    public function getClass($classReference)
    {
        $schema = $this->getSchema($classReference);

        if (null === $schema) {
            return null;
        }

        return $schema->getClass($classReference);
    }
}
