<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonApManagementVlan
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
     * Vlan Mode of the zone
     *
     * @var string
     */
    protected $mode = 'KEEP';
    /**
     * Vlan id of the zone
     *
     * @var int
     */
    protected $id = '1';
    /**
     * Vlan Mode of the zone
     *
     * @return string
     */
    public function getMode(): string
    {
        return $this->mode;
    }
    /**
     * Vlan Mode of the zone
     *
     * @param string $mode
     *
     * @return self
     */
    public function setMode(string $mode): self
    {
        $this->initialized['mode'] = true;
        $this->mode = $mode;
        return $this;
    }
    /**
     * Vlan id of the zone
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Vlan id of the zone
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
}