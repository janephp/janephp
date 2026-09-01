<?php

namespace Jane\Component\OpenApi31\JsonSchema\Model;

/**
 * Discriminator Object of the OpenAPI vocabulary, supporting inheritance and
 * polymorphism on top of the JSON Schema 2020-12 document model.
 */
class Discriminator
{
    /**
     * @var string|null
     */
    public ?string $propertyName;

    /**
     * @var array<string, string>|null
     */
    public ?array $mapping;
}
