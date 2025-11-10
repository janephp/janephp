<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpProfileDpDhcpProfileOptionSpaceInstance
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
     * @var string
     */
    protected $name;
    /**
     * @var list<DpProfileDpDhcpProfileOptionInstance>
     */
    protected $options;
    /**
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
     * @return list<DpProfileDpDhcpProfileOptionInstance>
     */
    public function getOptions(): array
    {
        return $this->options;
    }
    /**
     * @param list<DpProfileDpDhcpProfileOptionInstance> $options
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
}