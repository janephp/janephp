<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCreateTrafficClassProfile
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
     * @var list<CommonTrafficClassRef>
     */
    protected $trafficClasses;
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
     * @return list<CommonTrafficClassRef>
     */
    public function getTrafficClasses(): array
    {
        return $this->trafficClasses;
    }
    /**
     * @param list<CommonTrafficClassRef> $trafficClasses
     *
     * @return self
     */
    public function setTrafficClasses(array $trafficClasses): self
    {
        $this->initialized['trafficClasses'] = true;
        $this->trafficClasses = $trafficClasses;
        return $this;
    }
}