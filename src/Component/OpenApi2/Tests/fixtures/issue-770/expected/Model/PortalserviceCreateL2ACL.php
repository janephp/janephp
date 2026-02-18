<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class PortalserviceCreateL2ACL
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
     * restriction of the L2 Access Control, ALLOW: Only allow all stations listed below, BLOCK:Only block all stations listed below
     *
     * @var string
     */
    protected $restriction;
    /**
     * @var list<string>
     */
    protected $ruleMacs;
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
     * restriction of the L2 Access Control, ALLOW: Only allow all stations listed below, BLOCK:Only block all stations listed below
     *
     * @return string
     */
    public function getRestriction(): string
    {
        return $this->restriction;
    }
    /**
     * restriction of the L2 Access Control, ALLOW: Only allow all stations listed below, BLOCK:Only block all stations listed below
     *
     * @param string $restriction
     *
     * @return self
     */
    public function setRestriction(string $restriction): self
    {
        $this->initialized['restriction'] = true;
        $this->restriction = $restriction;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getRuleMacs(): array
    {
        return $this->ruleMacs;
    }
    /**
     * @param list<string> $ruleMacs
     *
     * @return self
     */
    public function setRuleMacs(array $ruleMacs): self
    {
        $this->initialized['ruleMacs'] = true;
        $this->ruleMacs = $ruleMacs;
        return $this;
    }
}