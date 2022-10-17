<?php

namespace Github\Model;

class OrgMembershipPermissions extends \ArrayObject
{
    /**
     * 
     *
     * @var bool
     */
    protected $canCreateRepository;
    /**
     * 
     *
     * @return bool
     */
    public function getCanCreateRepository() : bool
    {
        return $this->canCreateRepository;
    }
    /**
     * 
     *
     * @param bool $canCreateRepository
     *
     * @return self
     */
    public function setCanCreateRepository(bool $canCreateRepository) : self
    {
        $this->canCreateRepository = $canCreateRepository;
        return $this;
    }
}