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
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var Image|null
     */
    protected $iconOneOf;
    /**
     * @var Image|null
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
     * @return Image|null
     */
    public function getIconAnyOf(): ?Image
    {
        return $this->iconAnyOf;
    }
    /**
     * @param Image|null $iconAnyOf
     *
     * @return self
     */
    public function setIconAnyOf(?Image $iconAnyOf): self
    {
        $this->initialized['iconAnyOf'] = true;
        $this->iconAnyOf = $iconAnyOf;
        return $this;
    }
}