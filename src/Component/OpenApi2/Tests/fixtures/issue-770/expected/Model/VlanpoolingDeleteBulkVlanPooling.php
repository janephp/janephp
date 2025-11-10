<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class VlanpoolingDeleteBulkVlanPooling
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
    protected $idList;
    /**
     * @return list<string>
     */
    public function getIdList(): array
    {
        return $this->idList;
    }
    /**
     * @param list<string> $idList
     *
     * @return self
     */
    public function setIdList(array $idList): self
    {
        $this->initialized['idList'] = true;
        $this->idList = $idList;
        return $this;
    }
}