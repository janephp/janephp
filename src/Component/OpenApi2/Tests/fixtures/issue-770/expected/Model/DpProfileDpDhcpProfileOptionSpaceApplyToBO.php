<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpProfileDpDhcpProfileOptionSpaceApplyToBO
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
    protected $spaceId;
    /**
     * name
     *
     * @var string
     */
    protected $name;
    /**
     * appliedPoolNames
     *
     * @var list<string>
     */
    protected $appliedPoolNames;
    /**
     * options
     *
     * @var list<DpProfileDpDhcpProfileOptionBO>
     */
    protected $options;
    /**
     * description
     *
     * @var string
     */
    protected $description;
    /**
     * @return string
     */
    public function getSpaceId(): string
    {
        return $this->spaceId;
    }
    /**
     * @param string $spaceId
     *
     * @return self
     */
    public function setSpaceId(string $spaceId): self
    {
        $this->initialized['spaceId'] = true;
        $this->spaceId = $spaceId;
        return $this;
    }
    /**
     * name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * name
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
    /**
     * appliedPoolNames
     *
     * @return list<string>
     */
    public function getAppliedPoolNames(): array
    {
        return $this->appliedPoolNames;
    }
    /**
     * appliedPoolNames
     *
     * @param list<string> $appliedPoolNames
     *
     * @return self
     */
    public function setAppliedPoolNames(array $appliedPoolNames): self
    {
        $this->initialized['appliedPoolNames'] = true;
        $this->appliedPoolNames = $appliedPoolNames;
        return $this;
    }
    /**
     * options
     *
     * @return list<DpProfileDpDhcpProfileOptionBO>
     */
    public function getOptions(): array
    {
        return $this->options;
    }
    /**
     * options
     *
     * @param list<DpProfileDpDhcpProfileOptionBO> $options
     *
     * @return self
     */
    public function setOptions(array $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    /**
     * description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * description
     *
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
}