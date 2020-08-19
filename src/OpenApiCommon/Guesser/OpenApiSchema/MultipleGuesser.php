<?php

namespace Jane\OpenApiCommon\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\MultipleGuesser as BaseMultipleGuesser;

class MultipleGuesser extends BaseMultipleGuesser
{
    use SchemaClassTrait;

    public function __construct(string $schemaClass, array $bannedTypes = [])
    {
        $this->schemaClass = $schemaClass;
        $this->bannedTypes = $bannedTypes;
    }
}
