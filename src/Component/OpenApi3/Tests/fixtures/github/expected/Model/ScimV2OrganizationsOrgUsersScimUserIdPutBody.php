<?php

namespace Github\Model;

class ScimV2OrganizationsOrgUsersScimUserIdPutBody extends \ArrayObject
{
    /**
     * 
     *
     * @var string[]
     */
    protected $schemas;
    /**
     * 
     *
     * @var string
     */
    protected $displayName;
    /**
     * 
     *
     * @var string
     */
    protected $externalId;
    /**
     * 
     *
     * @var string[]
     */
    protected $groups;
    /**
     * 
     *
     * @var bool
     */
    protected $active;
    /**
     * Configured by the admin. Could be an email, login, or username
     *
     * @var string
     */
    protected $userName;
    /**
     * 
     *
     * @var ScimV2OrganizationsOrgUsersScimUserIdPutBodyName
     */
    protected $name;
    /**
     * user emails
     *
     * @var ScimV2OrganizationsOrgUsersScimUserIdPutBodyEmailsItem[]
     */
    protected $emails;
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
        $this->schemas = $schemas;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDisplayName() : string
    {
        return $this->displayName;
    }
    /**
     * 
     *
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName(string $displayName) : self
    {
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExternalId() : string
    {
        return $this->externalId;
    }
    /**
     * 
     *
     * @param string $externalId
     *
     * @return self
     */
    public function setExternalId(string $externalId) : self
    {
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getGroups() : array
    {
        return $this->groups;
    }
    /**
     * 
     *
     * @param string[] $groups
     *
     * @return self
     */
    public function setGroups(array $groups) : self
    {
        $this->groups = $groups;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getActive() : bool
    {
        return $this->active;
    }
    /**
     * 
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
     * Configured by the admin. Could be an email, login, or username
     *
     * @return string
     */
    public function getUserName() : string
    {
        return $this->userName;
    }
    /**
     * Configured by the admin. Could be an email, login, or username
     *
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(string $userName) : self
    {
        $this->userName = $userName;
        return $this;
    }
    /**
     * 
     *
     * @return ScimV2OrganizationsOrgUsersScimUserIdPutBodyName
     */
    public function getName() : ScimV2OrganizationsOrgUsersScimUserIdPutBodyName
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param ScimV2OrganizationsOrgUsersScimUserIdPutBodyName $name
     *
     * @return self
     */
    public function setName(ScimV2OrganizationsOrgUsersScimUserIdPutBodyName $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * user emails
     *
     * @return ScimV2OrganizationsOrgUsersScimUserIdPutBodyEmailsItem[]
     */
    public function getEmails() : array
    {
        return $this->emails;
    }
    /**
     * user emails
     *
     * @param ScimV2OrganizationsOrgUsersScimUserIdPutBodyEmailsItem[] $emails
     *
     * @return self
     */
    public function setEmails(array $emails) : self
    {
        $this->emails = $emails;
        return $this;
    }
}