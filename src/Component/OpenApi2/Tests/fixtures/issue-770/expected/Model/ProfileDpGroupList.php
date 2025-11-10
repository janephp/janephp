<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileDpGroupList
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
     * @var list<ProfileReturnDPGroup>
     */
    protected $list;
    /**
     * @return list<ProfileReturnDPGroup>
     */
    public function getList(): array
    {
        return $this->list;
    }
    /**
     * @param list<ProfileReturnDPGroup> $list
     *
     * @return self
     */
    public function setList(array $list): self
    {
        $this->initialized['list'] = true;
        $this->list = $list;
        return $this;
    }
}