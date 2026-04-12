<?php

namespace Jane\Component\OpenApiCommon\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\JsonSchema\EnumGuesser as BaseEnumGuesser;

class EnumGuesser extends BaseEnumGuesser
{
    private string $schemaClass;

    public function __construct(string $schemaClass, ?Naming $naming = null)
    {
        $this->schemaClass = $schemaClass;
        parent::__construct($naming ?? new Naming());
    }

    protected function getSchemaClass(): string
    {
        return $this->schemaClass;
    }
}
