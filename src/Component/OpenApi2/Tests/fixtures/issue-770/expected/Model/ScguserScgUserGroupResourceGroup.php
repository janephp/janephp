<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ScguserScgUserGroupResourceGroup
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
     * the identifier of the SCG resource group
     *
     * @var string
     */
    protected $id;
    /**
     * the type of SCG resource group
     *
     * @var string
     */
    protected $type;
    /**
     * the name of the SCG resource group
     *
     * @var string
     */
    protected $name;
    /**
     * the identifier of the SCG resource group
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * the identifier of the SCG resource group
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * the type of SCG resource group
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * the type of SCG resource group
     *
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
     * the name of the SCG resource group
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * the name of the SCG resource group
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
}