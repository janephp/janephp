<?php

namespace Jane\Component\OpenApiCommon\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\JsonSchema\EnumGuesser as BaseEnumGuesser;

class EnumGuesser extends BaseEnumGuesser
{
    public function __construct(
        private readonly string $schemaClass,
        ?Naming $naming = null,
    ) {
        parent::__construct($naming ?? new Naming());
    }

    protected function getSchemaClass(): string
    {
        return $this->schemaClass;
    }
}
