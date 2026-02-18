<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneCreateDiffServProfile
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
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var ZoneUplinkDiffServ
     */
    protected $uplinkDiffServ;
    /**
     * @var ZoneDownlinkDiffServ
     */
    protected $downlinkDiffServ;
    /**
     * Preserved list
     *
     * @var list<string>
     */
    protected $preservedList;
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
     * @return ZoneUplinkDiffServ
     */
    public function getUplinkDiffServ(): ZoneUplinkDiffServ
    {
        return $this->uplinkDiffServ;
    }
    /**
     * @param ZoneUplinkDiffServ $uplinkDiffServ
     *
     * @return self
     */
    public function setUplinkDiffServ(ZoneUplinkDiffServ $uplinkDiffServ): self
    {
        $this->initialized['uplinkDiffServ'] = true;
        $this->uplinkDiffServ = $uplinkDiffServ;
        return $this;
    }
    /**
     * @return ZoneDownlinkDiffServ
     */
    public function getDownlinkDiffServ(): ZoneDownlinkDiffServ
    {
        return $this->downlinkDiffServ;
    }
    /**
     * @param ZoneDownlinkDiffServ $downlinkDiffServ
     *
     * @return self
     */
    public function setDownlinkDiffServ(ZoneDownlinkDiffServ $downlinkDiffServ): self
    {
        $this->initialized['downlinkDiffServ'] = true;
        $this->downlinkDiffServ = $downlinkDiffServ;
        return $this;
    }
    /**
     * Preserved list
     *
     * @return list<string>
     */
    public function getPreservedList(): array
    {
        return $this->preservedList;
    }
    /**
     * Preserved list
     *
     * @param list<string> $preservedList
     *
     * @return self
     */
    public function setPreservedList(array $preservedList): self
    {
        $this->initialized['preservedList'] = true;
        $this->preservedList = $preservedList;
        return $this;
    }
}