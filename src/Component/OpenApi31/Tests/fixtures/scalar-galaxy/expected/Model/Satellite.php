<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class Satellite
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
     * Diameter in kilometers
     *
     * @var float
     */
    protected $diameter;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var SatelliteOrbit
     */
    protected $orbit;
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
     * Diameter in kilometers
     *
     * @return float
     */
    public function getDiameter(): float
    {
        return $this->diameter;
    }
    /**
     * Diameter in kilometers
     *
     * @param float $diameter
     *
     * @return self
     */
    public function setDiameter(float $diameter): self
    {
        $this->initialized['diameter'] = true;
        $this->diameter = $diameter;
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
     * @return SatelliteOrbit
     */
    public function getOrbit(): SatelliteOrbit
    {
        return $this->orbit;
    }
    /**
     * @param SatelliteOrbit $orbit
     *
     * @return self
     */
    public function setOrbit(SatelliteOrbit $orbit): self
    {
        $this->initialized['orbit'] = true;
        $this->orbit = $orbit;
        return $this;
    }
}