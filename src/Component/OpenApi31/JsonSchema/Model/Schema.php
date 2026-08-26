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
    protected $discriminator;

    public function getDiscriminator(): ?Discriminator
    {
        return $this->discriminator;
    }

    public function setDiscriminator(?Discriminator $discriminator): self
    {
        $this->initialized['discriminator'] = true;
        $this->discriminator = $discriminator;

        return $this;
    }
}
