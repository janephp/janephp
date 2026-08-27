<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Container implements AdditionalPropertiesInterface
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
     * @var Image|null
     */
    protected $iconOneOf;
    /**
     * @var ContainerIconAnyOfAnyOf|null
     */
    protected $iconAnyOf;
    /**
     * @return Image|null
     */
    public function getIconOneOf(): ?Image
    {
        return $this->iconOneOf;
    }
    /**
     * @param Image|null $iconOneOf
     *
     * @return self
     */
    public function setIconOneOf(?Image $iconOneOf): self
    {
        $this->initialized['iconOneOf'] = true;
        $this->iconOneOf = $iconOneOf;
        return $this;
    }
    /**
     * @return ContainerIconAnyOfAnyOf|null
     */
    public function getIconAnyOf(): ?ContainerIconAnyOfAnyOf
    {
        return $this->iconAnyOf;
    }
    /**
     * @param ContainerIconAnyOfAnyOf|null $iconAnyOf
     *
     * @return self
     */
    public function setIconAnyOf(?ContainerIconAnyOfAnyOf $iconAnyOf): self
    {
        $this->initialized['iconAnyOf'] = true;
        $this->iconAnyOf = $iconAnyOf;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['iconOneOf' => ['iconOneOf', 'getIconOneOf', 'setIconOneOf'], 'iconAnyOf' => ['iconAnyOf', 'getIconAnyOf', 'setIconAnyOf']];
    }
}