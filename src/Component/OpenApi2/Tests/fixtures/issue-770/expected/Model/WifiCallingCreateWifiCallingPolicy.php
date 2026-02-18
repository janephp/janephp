<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WifiCallingCreateWifiCallingPolicy
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
     * Identifier of the System (root) domain or partner managed domain to which the Wi-Fi calling policy belongs
     *
     * @var string
     */
    protected $domainId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * QoS priority of the Wi-Fi calling policy
     *
     * @var string
     */
    protected $priority;
    /**
     * ePDG list of the Wi-Fi calling policy
     *
     * @var list<WifiCallingEpdg>
     */
    protected $epdgs;
    /**
     * Identifier of the System (root) domain or partner managed domain to which the Wi-Fi calling policy belongs
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Identifier of the System (root) domain or partner managed domain to which the Wi-Fi calling policy belongs
     *
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
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
     * QoS priority of the Wi-Fi calling policy
     *
     * @return string
     */
    public function getPriority(): string
    {
        return $this->priority;
    }
    /**
     * QoS priority of the Wi-Fi calling policy
     *
     * @param string $priority
     *
     * @return self
     */
    public function setPriority(string $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;
        return $this;
    }
    /**
     * ePDG list of the Wi-Fi calling policy
     *
     * @return list<WifiCallingEpdg>
     */
    public function getEpdgs(): array
    {
        return $this->epdgs;
    }
    /**
     * ePDG list of the Wi-Fi calling policy
     *
     * @param list<WifiCallingEpdg> $epdgs
     *
     * @return self
     */
    public function setEpdgs(array $epdgs): self
    {
        $this->initialized['epdgs'] = true;
        $this->epdgs = $epdgs;
        return $this;
    }
}