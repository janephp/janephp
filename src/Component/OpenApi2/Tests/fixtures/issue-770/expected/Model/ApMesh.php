<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApMesh
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
     * mesh mode
     *
     * @var string
     */
    protected $meshMode;
    /**
     * Uplink selection
     *
     * @var string
     */
    protected $uplinkSelection;
    /**
     * MAC address of the neighbor AP
     *
     * @var list<string>
     */
    protected $meshUplinkEntryList;
    /**
     * The radio being used to establish mesh link with available neighbor
     *
     * @var string
     */
    protected $uplinkRadio;
    /**
     * mesh mode
     *
     * @return string
     */
    public function getMeshMode(): string
    {
        return $this->meshMode;
    }
    /**
     * mesh mode
     *
     * @param string $meshMode
     *
     * @return self
     */
    public function setMeshMode(string $meshMode): self
    {
        $this->initialized['meshMode'] = true;
        $this->meshMode = $meshMode;
        return $this;
    }
    /**
     * Uplink selection
     *
     * @return string
     */
    public function getUplinkSelection(): string
    {
        return $this->uplinkSelection;
    }
    /**
     * Uplink selection
     *
     * @param string $uplinkSelection
     *
     * @return self
     */
    public function setUplinkSelection(string $uplinkSelection): self
    {
        $this->initialized['uplinkSelection'] = true;
        $this->uplinkSelection = $uplinkSelection;
        return $this;
    }
    /**
     * MAC address of the neighbor AP
     *
     * @return list<string>
     */
    public function getMeshUplinkEntryList(): array
    {
        return $this->meshUplinkEntryList;
    }
    /**
     * MAC address of the neighbor AP
     *
     * @param list<string> $meshUplinkEntryList
     *
     * @return self
     */
    public function setMeshUplinkEntryList(array $meshUplinkEntryList): self
    {
        $this->initialized['meshUplinkEntryList'] = true;
        $this->meshUplinkEntryList = $meshUplinkEntryList;
        return $this;
    }
    /**
     * The radio being used to establish mesh link with available neighbor
     *
     * @return string
     */
    public function getUplinkRadio(): string
    {
        return $this->uplinkRadio;
    }
    /**
     * The radio being used to establish mesh link with available neighbor
     *
     * @param string $uplinkRadio
     *
     * @return self
     */
    public function setUplinkRadio(string $uplinkRadio): self
    {
        $this->initialized['uplinkRadio'] = true;
        $this->uplinkRadio = $uplinkRadio;
        return $this;
    }
}