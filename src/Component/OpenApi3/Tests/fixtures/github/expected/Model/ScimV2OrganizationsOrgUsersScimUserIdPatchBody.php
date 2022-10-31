<?php

namespace Github\Model;

class ScimV2OrganizationsOrgUsersScimUserIdPatchBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string[]
     */
    protected $schemas;
    /**
     * Set of operations to be performed
     *
     * @var ScimV2OrganizationsOrgUsersScimUserIdPatchBodyOperationsItem[]
     */
    protected $operations;
    /**
     * 
     *
     * @return string[]
     */
    public function getSchemas() : array
    {
        return $this->schemas;
    }
    /**
     * 
     *
     * @param string[] $schemas
     *
     * @return self
     */
    public function setSchemas(array $schemas) : self
    {
        $this->initialized['schemas'] = true;
        $this->schemas = $schemas;
        return $this;
    }
    /**
     * Set of operations to be performed
     *
     * @return ScimV2OrganizationsOrgUsersScimUserIdPatchBodyOperationsItem[]
     */
    public function getOperations() : array
    {
        return $this->operations;
    }
    /**
     * Set of operations to be performed
     *
     * @param ScimV2OrganizationsOrgUsersScimUserIdPatchBodyOperationsItem[] $operations
     *
     * @return self
     */
    public function setOperations(array $operations) : self
    {
        $this->initialized['operations'] = true;
        $this->operations = $operations;
        return $this;
    }
}