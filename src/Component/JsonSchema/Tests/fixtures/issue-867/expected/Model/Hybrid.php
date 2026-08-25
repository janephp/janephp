<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

use Jane\Component\JsonSchema\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Hybrid implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $attachment;
    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getAttachment(): ?string
    {
        return $this->attachment;
    }
    /**
     * @param string|null $attachment
     *
     * @return self
     */
    public function setAttachment(?string $attachment): self
    {
        $this->initialized['attachment'] = true;
        $this->attachment = $attachment;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'attachment' => ['_attachment', 'getAttachment', 'setAttachment']];
    }
}