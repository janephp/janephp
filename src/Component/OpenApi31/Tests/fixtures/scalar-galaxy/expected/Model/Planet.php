<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class Planet
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
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var string
     */
    protected $type;
    /**
     * A score from 0 to 1 indicating potential habitability
     *
     * @var float
     */
    protected $habitabilityIndex;
    /**
     * @var PlanetPhysicalProperties
     */
    protected $physicalProperties;
    /**
     * Atmospheric composition
     *
     * @var list<PlanetAtmosphereItem>
     */
    protected $atmosphere;
    /**
     * @var \DateTime
     */
    protected $discoveredAt;
    /**
     * @var string|null
     */
    protected $image;
    /**
     * @var list<Satellite>
     */
    protected $satellites;
    /**
     * A user
     *
     * @var User
     */
    protected $creator;
    /**
     * @var list<string>
     */
    protected $tags;
    /**
     * @var \DateTime
     */
    protected $lastUpdated;
    /**
     * URL which gets invoked upon a successful operation
     *
     * @var string
     */
    protected $successCallbackUrl;
    /**
     * URL which gets invoked upon a failed operation
     *
     * @var string
     */
    protected $failureCallbackUrl;
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
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
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
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
     * A score from 0 to 1 indicating potential habitability
     *
     * @return float
     */
    public function getHabitabilityIndex(): float
    {
        return $this->habitabilityIndex;
    }
    /**
     * A score from 0 to 1 indicating potential habitability
     *
     * @param float $habitabilityIndex
     *
     * @return self
     */
    public function setHabitabilityIndex(float $habitabilityIndex): self
    {
        $this->initialized['habitabilityIndex'] = true;
        $this->habitabilityIndex = $habitabilityIndex;
        return $this;
    }
    /**
     * @return PlanetPhysicalProperties
     */
    public function getPhysicalProperties(): PlanetPhysicalProperties
    {
        return $this->physicalProperties;
    }
    /**
     * @param PlanetPhysicalProperties $physicalProperties
     *
     * @return self
     */
    public function setPhysicalProperties(PlanetPhysicalProperties $physicalProperties): self
    {
        $this->initialized['physicalProperties'] = true;
        $this->physicalProperties = $physicalProperties;
        return $this;
    }
    /**
     * Atmospheric composition
     *
     * @return list<PlanetAtmosphereItem>
     */
    public function getAtmosphere(): array
    {
        return $this->atmosphere;
    }
    /**
     * Atmospheric composition
     *
     * @param list<PlanetAtmosphereItem> $atmosphere
     *
     * @return self
     */
    public function setAtmosphere(array $atmosphere): self
    {
        $this->initialized['atmosphere'] = true;
        $this->atmosphere = $atmosphere;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getDiscoveredAt(): \DateTime
    {
        return $this->discoveredAt;
    }
    /**
     * @param \DateTime $discoveredAt
     *
     * @return self
     */
    public function setDiscoveredAt(\DateTime $discoveredAt): self
    {
        $this->initialized['discoveredAt'] = true;
        $this->discoveredAt = $discoveredAt;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }
    /**
     * @param string|null $image
     *
     * @return self
     */
    public function setImage(?string $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
     * @return list<Satellite>
     */
    public function getSatellites(): array
    {
        return $this->satellites;
    }
    /**
     * @param list<Satellite> $satellites
     *
     * @return self
     */
    public function setSatellites(array $satellites): self
    {
        $this->initialized['satellites'] = true;
        $this->satellites = $satellites;
        return $this;
    }
    /**
     * A user
     *
     * @return User
     */
    public function getCreator(): User
    {
        return $this->creator;
    }
    /**
     * A user
     *
     * @param User $creator
     *
     * @return self
     */
    public function setCreator(User $creator): self
    {
        $this->initialized['creator'] = true;
        $this->creator = $creator;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * @param list<string> $tags
     *
     * @return self
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getLastUpdated(): \DateTime
    {
        return $this->lastUpdated;
    }
    /**
     * @param \DateTime $lastUpdated
     *
     * @return self
     */
    public function setLastUpdated(\DateTime $lastUpdated): self
    {
        $this->initialized['lastUpdated'] = true;
        $this->lastUpdated = $lastUpdated;
        return $this;
    }
    /**
     * URL which gets invoked upon a successful operation
     *
     * @return string
     */
    public function getSuccessCallbackUrl(): string
    {
        return $this->successCallbackUrl;
    }
    /**
     * URL which gets invoked upon a successful operation
     *
     * @param string $successCallbackUrl
     *
     * @return self
     */
    public function setSuccessCallbackUrl(string $successCallbackUrl): self
    {
        $this->initialized['successCallbackUrl'] = true;
        $this->successCallbackUrl = $successCallbackUrl;
        return $this;
    }
    /**
     * URL which gets invoked upon a failed operation
     *
     * @return string
     */
    public function getFailureCallbackUrl(): string
    {
        return $this->failureCallbackUrl;
    }
    /**
     * URL which gets invoked upon a failed operation
     *
     * @param string $failureCallbackUrl
     *
     * @return self
     */
    public function setFailureCallbackUrl(string $failureCallbackUrl): self
    {
        $this->initialized['failureCallbackUrl'] = true;
        $this->failureCallbackUrl = $failureCallbackUrl;
        return $this;
    }
}