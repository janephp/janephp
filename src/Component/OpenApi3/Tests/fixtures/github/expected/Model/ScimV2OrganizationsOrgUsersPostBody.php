<?php

namespace Github\Model;

class ScimV2OrganizationsOrgUsersPostBody extends \ArrayObject
{
    /**
     * Configured by the admin. Could be an email, login, or username
     *
     * @var string
     */
    protected $userName;
    /**
     * 
     *
     * @var ScimV2OrganizationsOrgUsersPostBodyName
     */
    protected $name;
    /**
     * user emails
     *
     * @var ScimV2OrganizationsOrgUsersPostBodyEmailsItem[]
     */
    protected $emails;
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
     * @return ScimV2OrganizationsOrgUsersPostBodyName
     */
    public function getName() : ScimV2OrganizationsOrgUsersPostBodyName
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param ScimV2OrganizationsOrgUsersPostBodyName $name
     *
     * @return self
     */
    public function setName(ScimV2OrganizationsOrgUsersPostBodyName $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * user emails
     *
     * @return ScimV2OrganizationsOrgUsersPostBodyEmailsItem[]
     */
    public function getEmails() : array
    {
        return $this->emails;
    }
    /**
     * user emails
     *
     * @param ScimV2OrganizationsOrgUsersPostBodyEmailsItem[] $emails
     *
     * @return self
     */
    public function setEmails(array $emails) : self
    {
        $this->emails = $emails;
        return $this;
    }
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
}