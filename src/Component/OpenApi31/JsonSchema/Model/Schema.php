<?php

namespace Jane\Component\OpenApi31\JsonSchema\Model;

/**
 * Schema Object of the OpenAPI 3.1 vocabulary: the JSON Schema 2020-12
 * document model extended with the OpenAPI Discriminator Object.
 */
class Schema extends \Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema
{
    /**
     * @var \Jane\Component\OpenApi31\JsonSchema\Model\Discriminator|null
     */
    public ?\Jane\Component\OpenApi31\JsonSchema\Model\Discriminator $discriminator;
}
