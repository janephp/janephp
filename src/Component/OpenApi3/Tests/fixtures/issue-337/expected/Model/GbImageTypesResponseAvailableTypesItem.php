<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbImageTypesResponseAvailableTypesItem implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $imageType;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var list<string>
     */
    protected $availableFormats;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getImageType(): string
    {
        return $this->imageType;
    }
    /**
     * @param string $imageType
     *
     * @return self
     */
    public function setImageType(string $imageType): self
    {
        $this->initialized['imageType'] = true;
        $this->imageType = $imageType;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getAvailableFormats(): array
    {
        return $this->availableFormats;
    }
    /**
     * @param list<string> $availableFormats
     *
     * @return self
     */
    public function setAvailableFormats(array $availableFormats): self
    {
        $this->initialized['availableFormats'] = true;
        $this->availableFormats = $availableFormats;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'imageType' => ['imageType', 'getImageType', 'setImageType'], 'description' => ['description', 'getDescription', 'setDescription'], 'availableFormats' => ['availableFormats', 'getAvailableFormats', 'setAvailableFormats']];
    }
}