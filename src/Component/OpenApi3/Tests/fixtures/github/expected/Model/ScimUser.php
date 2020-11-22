<?php

namespace Github\Model;

class ScimUser
{
    /**
     * SCIM schema used.
     *
     * @var string[]
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
     * @var ScimUserEmailsItem[]
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
     * @var ScimUserOperationsItem[]
     */
    protected $operations;
    /**
     * associated groups
     *
     * @var ScimUserGroupsItem[]
     */
    protected $groups;
    /**
     * SCIM schema used.
     *
     * @return string[]
     */
    public function getSchemas() : array
    {
        return $this->schemas;
    }
    /**
     * SCIM schema used.
     *
     * @param string[] $schemas
     *
     * @return self
     */
    public function setSchemas(array $schemas) : self
    {
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
        $this->name = $name;
        return $this;
    }
    /**
     * user emails
     *
     * @return ScimUserEmailsItem[]
     */
    public function getEmails() : array
    {
        return $this->emails;
    }
    /**
     * user emails
     *
     * @param ScimUserEmailsItem[] $emails
     *
     * @return self
     */
    public function setEmails(array $emails) : self
    {
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
        $this->organizationId = $organizationId;
        return $this;
    }
    /**
     * Set of operations to be performed
     *
     * @return ScimUserOperationsItem[]
     */
    public function getOperations() : array
    {
        return $this->operations;
    }
    /**
     * Set of operations to be performed
     *
     * @param ScimUserOperationsItem[] $operations
     *
     * @return self
     */
    public function setOperations(array $operations) : self
    {
        $this->operations = $operations;
        return $this;
    }
    /**
     * associated groups
     *
     * @return ScimUserGroupsItem[]
     */
    public function getGroups() : array
    {
        return $this->groups;
    }
    /**
     * associated groups
     *
     * @param ScimUserGroupsItem[] $groups
     *
     * @return self
     */
    public function setGroups(array $groups) : self
    {
        $this->groups = $groups;
        return $this;
    }
}