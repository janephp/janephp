<?php

namespace Github\Model;

class ScimUser extends \ArrayObject
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
     * SCIM schema used.
     *
     * @var list<string>
     */
    protected $schemas;
    /**
     * Unique identifier of an external identity
     *
     * @var string
     */
    protected $id;
    /**
     * The ID of the User.
     *
     * @var string|null
     */
    protected $externalId;
    /**
     * Configured by the admin. Could be an email, login, or username
     *
     * @var string|null
     */
    protected $userName;
    /**
     * 
     *
     * @var ScimUserName
     */
    protected $name;
    /**
     * user emails
     *
     * @var list<ScimUserEmailsItem>
     */
    protected $emails;
    /**
     * The active status of the User.
     *
     * @var bool
     */
    protected $active;
    /**
     * 
     *
     * @var ScimUserMeta
     */
    protected $meta;
    /**
     * The ID of the organization.
     *
     * @var int
     */
    protected $organizationId;
    /**
     * Set of operations to be performed
     *
     * @var list<ScimUserOperationsItem>
     */
    protected $operations;
    /**
     * associated groups
     *
     * @var list<ScimUserGroupsItem>
     */
    protected $groups;
    /**
     * SCIM schema used.
     *
     * @return list<string>
     */
    public function getSchemas() : array
    {
        return $this->schemas;
    }
    /**
     * SCIM schema used.
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
     * Unique identifier of an external identity
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Unique identifier of an external identity
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The ID of the User.
     *
     * @return string|null
     */
    public function getExternalId() : ?string
    {
        return $this->externalId;
    }
    /**
     * The ID of the User.
     *
     * @param string|null $externalId
     *
     * @return self
     */
    public function setExternalId(?string $externalId) : self
    {
        $this->initialized['externalId'] = true;
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * Configured by the admin. Could be an email, login, or username
     *
     * @return string|null
     */
    public function getUserName() : ?string
    {
        return $this->userName;
    }
    /**
     * Configured by the admin. Could be an email, login, or username
     *
     * @param string|null $userName
     *
     * @return self
     */
    public function setUserName(?string $userName) : self
    {
        $this->initialized['userName'] = true;
        $this->userName = $userName;
        return $this;
    }
    /**
     * 
     *
     * @return ScimUserName
     */
    public function getName() : ScimUserName
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param ScimUserName $name
     *
     * @return self
     */
    public function setName(ScimUserName $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * user emails
     *
     * @return list<ScimUserEmailsItem>
     */
    public function getEmails() : array
    {
        return $this->emails;
    }
    /**
     * user emails
     *
     * @param list<ScimUserEmailsItem> $emails
     *
     * @return self
     */
    public function setEmails(array $emails) : self
    {
        $this->initialized['emails'] = true;
        $this->emails = $emails;
        return $this;
    }
    /**
     * The active status of the User.
     *
     * @return bool
     */
    public function getActive() : bool
    {
        return $this->active;
    }
    /**
     * The active status of the User.
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active) : self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return ScimUserMeta
     */
    public function getMeta() : ScimUserMeta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param ScimUserMeta $meta
     *
     * @return self
     */
    public function setMeta(ScimUserMeta $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
    /**
     * The ID of the organization.
     *
     * @return int
     */
    public function getOrganizationId() : int
    {
        return $this->organizationId;
    }
    /**
     * The ID of the organization.
     *
     * @param int $organizationId
     *
     * @return self
     */
    public function setOrganizationId(int $organizationId) : self
    {
        $this->initialized['organizationId'] = true;
        $this->organizationId = $organizationId;
        return $this;
    }
    /**
     * Set of operations to be performed
     *
     * @return list<ScimUserOperationsItem>
     */
    public function getOperations() : array
    {
        return $this->operations;
    }
    /**
     * Set of operations to be performed
     *
     * @param list<ScimUserOperationsItem> $operations
     *
     * @return self
     */
    public function setOperations(array $operations) : self
    {
        $this->initialized['operations'] = true;
        $this->operations = $operations;
        return $this;
    }
    /**
     * associated groups
     *
     * @return list<ScimUserGroupsItem>
     */
    public function getGroups() : array
    {
        return $this->groups;
    }
    /**
     * associated groups
     *
     * @param list<ScimUserGroupsItem> $groups
     *
     * @return self
     */
    public function setGroups(array $groups) : self
    {
        $this->initialized['groups'] = true;
        $this->groups = $groups;
        return $this;
    }
}