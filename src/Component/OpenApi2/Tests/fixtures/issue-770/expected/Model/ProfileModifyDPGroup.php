<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileModifyDPGroup
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
     * DP Group name
     *
     * @var string
     */
    protected $name;
    /**
     * The description of the DP Group
     *
     * @var mixed
     */
    protected $description;
    /**
     * @var list<string>
     */
    protected $dpGroupList;
    /**
     * DP Group name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * DP Group name
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
     * The description of the DP Group
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * The description of the DP Group
     *
     * @param mixed $description
     *
     * @return self
     */
    public function setDescription($description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getDpGroupList(): array
    {
        return $this->dpGroupList;
    }
    /**
     * @param list<string> $dpGroupList
     *
     * @return self
     */
    public function setDpGroupList(array $dpGroupList): self
    {
        $this->initialized['dpGroupList'] = true;
        $this->dpGroupList = $dpGroupList;
        return $this;
    }
}