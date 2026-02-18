<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApgroupAddMembers
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
     * List of apMac
     *
     * @var list<ApgroupApGroupMember>
     */
    protected $memberList;
    /**
     * List of apMac
     *
     * @return list<ApgroupApGroupMember>
     */
    public function getMemberList(): array
    {
        return $this->memberList;
    }
    /**
     * List of apMac
     *
     * @param list<ApgroupApGroupMember> $memberList
     *
     * @return self
     */
    public function setMemberList(array $memberList): self
    {
        $this->initialized['memberList'] = true;
        $this->memberList = $memberList;
        return $this;
    }
}