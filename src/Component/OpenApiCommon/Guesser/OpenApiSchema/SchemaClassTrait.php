<?php

namespace Jane\Component\OpenApiCommon\Guesser\OpenApiSchema;

trait SchemaClassTrait
{
    private string $schemaClass;

    public function __construct(string $schemaClass, ?bool $defaultAdditionalProperties = null)
    {
        $this->schemaClass = $schemaClass;
        $this->defaultAdditionalProperties = $defaultAdditionalProperties;
    }

    protected function getSchemaClass(): string
    {
        return $this->schemaClass;
    }
}
