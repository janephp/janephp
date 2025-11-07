<?php

namespace Jane\Generated\DigitalOcean\Model;

class ReservedIpActionType extends \ArrayObject
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
     * The type of action to initiate for the reserved IP.
     *
     * @var string
     */
    protected $type;
    /**
     * The type of action to initiate for the reserved IP.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of action to initiate for the reserved IP.
     *
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->initialized['type'] = true;
        $this->type = $type;
    }
}