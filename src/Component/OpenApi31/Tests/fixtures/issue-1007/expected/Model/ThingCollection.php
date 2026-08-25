<?php

namespace Jane\Component\OpenApi31\Tests\Issue1007\Model;

class ThingCollection
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
     * @var OpenSchema
     */
    protected $default;
    /**
     * @var ExplicitOpenSchema
     */
    protected $open;
    /**
     * @var ClosedSchema
     */
    protected $closed;
    /**
     * @var TypedMapSchema
     */
    protected $typedMap;
    /**
     * @return OpenSchema
     */
    public function getDefault(): OpenSchema
    {
        return $this->default;
    }
    /**
     * @param OpenSchema $default
     *
     * @return self
     */
    public function setDefault(OpenSchema $default): self
    {
        $this->initialized['default'] = true;
        $this->default = $default;
        return $this;
    }
    /**
     * @return ExplicitOpenSchema
     */
    public function getOpen(): ExplicitOpenSchema
    {
        return $this->open;
    }
    /**
     * @param ExplicitOpenSchema $open
     *
     * @return self
     */
    public function setOpen(ExplicitOpenSchema $open): self
    {
        $this->initialized['open'] = true;
        $this->open = $open;
        return $this;
    }
    /**
     * @return ClosedSchema
     */
    public function getClosed(): ClosedSchema
    {
        return $this->closed;
    }
    /**
     * @param ClosedSchema $closed
     *
     * @return self
     */
    public function setClosed(ClosedSchema $closed): self
    {
        $this->initialized['closed'] = true;
        $this->closed = $closed;
        return $this;
    }
    /**
     * @return TypedMapSchema
     */
    public function getTypedMap(): TypedMapSchema
    {
        return $this->typedMap;
    }
    /**
     * @param TypedMapSchema $typedMap
     *
     * @return self
     */
    public function setTypedMap(TypedMapSchema $typedMap): self
    {
        $this->initialized['typedMap'] = true;
        $this->typedMap = $typedMap;
        return $this;
    }
}