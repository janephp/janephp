<?php

namespace Github\Model;

class ScimV2OrganizationsOrgUsersScimUserIdPutBody extends \ArrayObject
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
     * @var list<string>
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
     * @var list<ScimV2OrganizationsOrgUsersScimUserIdPutBodyEmailsItem>
     */
    protected $emails;
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
        $this->initialized['displayName'] = true;
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
        $this->initialized['externalId'] = true;
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getGroups() : array
    {
        return $this->groups;
    }
    /**
     * 
     *
     * @param list<string> $groups
     *
     * @return self
     */
    public function setGroups(array $groups) : self
    {
        $this->initialized['groups'] = true;
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
        $this->initialized['active'] = true;
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
        $this->initialized['userName'] = true;
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
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * user emails
     *
     * @return list<ScimV2OrganizationsOrgUsersScimUserIdPutBodyEmailsItem>
     */
    public function getEmails() : array
    {
        return $this->emails;
    }
    /**
     * user emails
     *
     * @param list<ScimV2OrganizationsOrgUsersScimUserIdPutBodyEmailsItem> $emails
     *
     * @return self
     */
    public function setEmails(array $emails) : self
    {
        $this->initialized['emails'] = true;
        $this->emails = $emails;
        return $this;
    }
}