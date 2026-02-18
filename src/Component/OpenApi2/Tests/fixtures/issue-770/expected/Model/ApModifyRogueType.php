<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApModifyRogueType
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
     * rogue mac list
     *
     * @var list<string>
     */
    protected $rogueMacList;
    /**
     * rogue mac list
     *
     * @return list<string>
     */
    public function getRogueMacList(): array
    {
        return $this->rogueMacList;
    }
    /**
     * rogue mac list
     *
     * @param list<string> $rogueMacList
     *
     * @return self
     */
    public function setRogueMacList(array $rogueMacList): self
    {
        $this->initialized['rogueMacList'] = true;
        $this->rogueMacList = $rogueMacList;
        return $this;
    }
}