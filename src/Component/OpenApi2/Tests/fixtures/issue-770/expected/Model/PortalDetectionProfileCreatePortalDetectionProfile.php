<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class PortalDetectionProfileCreatePortalDetectionProfile
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
     * The pattern profiles for portal detection and suppression
     *
     * @var list<PortalDetectionProfilePortalDetectionPattern>
     */
    protected $portalDetectionPatterns;
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
     * The pattern profiles for portal detection and suppression
     *
     * @return list<PortalDetectionProfilePortalDetectionPattern>
     */
    public function getPortalDetectionPatterns(): array
    {
        return $this->portalDetectionPatterns;
    }
    /**
     * The pattern profiles for portal detection and suppression
     *
     * @param list<PortalDetectionProfilePortalDetectionPattern> $portalDetectionPatterns
     *
     * @return self
     */
    public function setPortalDetectionPatterns(array $portalDetectionPatterns): self
    {
        $this->initialized['portalDetectionPatterns'] = true;
        $this->portalDetectionPatterns = $portalDetectionPatterns;
        return $this;
    }
}