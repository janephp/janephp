<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanWlanSchedule
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
     * Type of WLAN schedule
     *
     * @var string
     */
    protected $type = 'AlwaysOn';
    /**
     * Identifier of the schedule profile. At least one ID or name is required in the request.
     *
     * @var string
     */
    protected $id;
    /**
     * Name of the schedule profile. At least one ID or name is required in the request.
     *
     * @var string
     */
    protected $name;
    /**
     * Type of WLAN schedule
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of WLAN schedule
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Identifier of the schedule profile. At least one ID or name is required in the request.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the schedule profile. At least one ID or name is required in the request.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Name of the schedule profile. At least one ID or name is required in the request.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the schedule profile. At least one ID or name is required in the request.
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