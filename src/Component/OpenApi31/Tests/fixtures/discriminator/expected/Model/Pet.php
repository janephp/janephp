<?php

namespace Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model;

use Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Runtime\AdditionalPropertiesInterface;
class Pet implements AdditionalPropertiesInterface
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
    protected $petType;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->initialized['name'] = true;
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getPetType(): string
    {
        return $this->petType;
    }
    /**
     * @param string $petType
     */
    public function setPetType(string $petType)
    {
        $this->initialized['petType'] = true;
        $this->petType = $petType;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'petType' => ['petType', 'getPetType', 'setPetType']];
    }
}