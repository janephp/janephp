<?php

namespace Jane\Component\OpenApiCommon\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Guesser\JsonSchema\SimpleTypeGuesser as BaseSimpleTypeGuesser;

class SimpleTypeGuesser extends BaseSimpleTypeGuesser
{
    use SchemaClassTrait;

    /** @var array<string, array<string>> */
    protected array $excludeFormat = [
        'string' => [
            'date-time',
            'binary',
        ],
    ];

    public function __construct(string $schemaClass, ?array $typesSupported = null)
    {
        $this->schemaClass = $schemaClass;
        if (null !== $typesSupported) {
            $this->typesSupported = $typesSupported;
        }
    }
}
