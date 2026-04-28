<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class Container
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * @var Image|null
     */
    protected $iconOneOf;
    /**
     * @var Image|null
     */
    protected $iconAnyOf;

    public function getIconOneOf(): ?Image
    {
        return $this->iconOneOf;
    }

    public function setIconOneOf(?Image $iconOneOf): self
    {
        $this->initialized['iconOneOf'] = true;
        $this->iconOneOf = $iconOneOf;

        return $this;
    }

    public function getIconAnyOf(): ?Image
    {
        return $this->iconAnyOf;
    }

    public function setIconAnyOf(?Image $iconAnyOf): self
    {
        $this->initialized['iconAnyOf'] = true;
        $this->iconAnyOf = $iconAnyOf;

        return $this;
    }
}
