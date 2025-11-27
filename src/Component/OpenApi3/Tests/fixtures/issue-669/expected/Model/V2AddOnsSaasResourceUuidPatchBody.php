<?php

namespace Jane\Generated\DigitalOcean\Model;

class V2AddOnsSaasResourceUuidPatchBody extends \ArrayObject
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
     * The new name for the add-on resource.
     *
     * @var string
     */
    protected $name;
    /**
     * The new name for the add-on resource.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The new name for the add-on resource.
     *
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
}