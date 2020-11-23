<?php

namespace Jane\Component\OpenApiCommon\Guesser\OpenApiSchema;

trait SchemaClassTrait
{
    /** @var string */
    private $schemaClass;

    public function __construct(string $schemaClass)
    {
        $this->schemaClass = $schemaClass;
    }

    protected function getSchemaClass(): string
    {
        return $this->schemaClass;
    }
}
