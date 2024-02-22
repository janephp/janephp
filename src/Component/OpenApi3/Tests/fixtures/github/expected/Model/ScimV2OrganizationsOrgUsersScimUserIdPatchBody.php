<?php

namespace Github\Model;

class ScimV2OrganizationsOrgUsersScimUserIdPatchBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var list<string>
     */
    protected $schemas;
    /**
     * Set of operations to be performed
     *
     * @var list<ScimV2OrganizationsOrgUsersScimUserIdPatchBodyOperationsItem>
     */
    protected $operations;
    /**
     * 
     *
     * @return list<string>
     */
    public function getSchemas() : array
    {
        return $this->schemas;
    }
    /**
     * 
     *
     * @param list<string> $schemas
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
     * @return list<ScimV2OrganizationsOrgUsersScimUserIdPatchBodyOperationsItem>
     */
    public function getOperations() : array
    {
        return $this->operations;
    }
    /**
     * Set of operations to be performed
     *
     * @param list<ScimV2OrganizationsOrgUsersScimUserIdPatchBodyOperationsItem> $operations
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