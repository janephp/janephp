<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CaleaCaleaMacListRq
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
     * @var list<string>
     */
    protected $macList;
    /**
     * @return list<string>
     */
    public function getMacList(): array
    {
        return $this->macList;
    }
    /**
     * @param list<string> $macList
     *
     * @return self
     */
    public function setMacList(array $macList): self
    {
        $this->initialized['macList'] = true;
        $this->macList = $macList;
        return $this;
    }
}