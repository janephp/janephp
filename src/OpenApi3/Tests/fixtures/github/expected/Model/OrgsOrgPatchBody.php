<?php

namespace Github\Model;

class OrgsOrgPatchBody
{
    /**
     * Billing email address. This address is not publicized.
     *
     * @var string
     */
    protected $billingEmail;
    /**
     * The company name.
     *
     * @var string
     */
    protected $company;
    /**
     * The publicly visible email address.
     *
     * @var string
     */
    protected $email;
    /**
     * The Twitter username of the company.
     *
     * @var string
     */
    protected $twitterUsername;
    /**
     * The location.
     *
     * @var string
     */
    protected $location;
    /**
     * The shorthand name of the company.
     *
     * @var string
     */
    protected $name;
    /**
     * The description of the company.
     *
     * @var string
     */
    protected $description;
    /**
     * Toggles whether an organization can use organization projects.
     *
     * @var bool
     */
    protected $hasOrganizationProjects;
    /**
     * Toggles whether repositories that belong to the organization can use repository projects.
     *
     * @var bool
     */
    protected $hasRepositoryProjects;
    /**
    * Default permission level members have for organization repositories:  
    \* `read` - can pull, but not push to or administer this repository.  
    \* `write` - can pull and push, but not administer this repository.  
    \* `admin` - can pull, push, and administer this repository.  
    \* `none` - no permissions granted by default.
    *
    * @var string
    */
    protected $defaultRepositoryPermission = 'read';
    /**
    * Toggles the ability of non-admin organization members to create repositories. Can be one of:  
    \* `true` - all organization members can create repositories.  
    \* `false` - only organization owners can create repositories.  
    Default: `true`  
    **Note:** A parameter can override this parameter. See `members_allowed_repository_creation_type` in this table for details. **Note:** A parameter can override this parameter. See `members_allowed_repository_creation_type` in this table for details.
    *
    * @var bool
    */
    protected $membersCanCreateRepositories = true;
    /**
    * Toggles whether organization members can create internal repositories, which are visible to all enterprise members. You can only allow members to create internal repositories if your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+. Can be one of:  
    \* `true` - all organization members can create internal repositories.  
    \* `false` - only organization owners can create internal repositories.  
    Default: `true`. For more information, see "[Restricting repository creation in your organization](https://help.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
    *
    * @var bool
    */
    protected $membersCanCreateInternalRepositories;
    /**
    * Toggles whether organization members can create private repositories, which are visible to organization members with permission. Can be one of:  
    \* `true` - all organization members can create private repositories.  
    \* `false` - only organization owners can create private repositories.  
    Default: `true`. For more information, see "[Restricting repository creation in your organization](https://help.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
    *
    * @var bool
    */
    protected $membersCanCreatePrivateRepositories;
    /**
    * Toggles whether organization members can create public repositories, which are visible to anyone. Can be one of:  
    \* `true` - all organization members can create public repositories.  
    \* `false` - only organization owners can create public repositories.  
    Default: `true`. For more information, see "[Restricting repository creation in your organization](https://help.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
    *
    * @var bool
    */
    protected $membersCanCreatePublicRepositories;
    /**
    * Specifies which types of repositories non-admin organization members can create. Can be one of:  
    \* `all` - all organization members can create public and private repositories.  
    \* `private` - members can create private repositories. This option is only available to repositories that are part of an organization on GitHub Enterprise Cloud.  
    \* `none` - only admin members can create repositories.  
    **Note:** This parameter is deprecated and will be removed in the future. Its return value ignores internal repositories. Using this parameter overrides values set in `members_can_create_repositories`. See [this note](https://developer.github.com/v3/orgs/#members_can_create_repositories) for details.
    *
    * @var string
    */
    protected $membersAllowedRepositoryCreationType;
    /**
     * 
     *
     * @var string
     */
    protected $blog;
    /**
     * Billing email address. This address is not publicized.
     *
     * @return string
     */
    public function getBillingEmail() : string
    {
        return $this->billingEmail;
    }
    /**
     * Billing email address. This address is not publicized.
     *
     * @param string $billingEmail
     *
     * @return self
     */
    public function setBillingEmail(string $billingEmail) : self
    {
        $this->billingEmail = $billingEmail;
        return $this;
    }
    /**
     * The company name.
     *
     * @return string
     */
    public function getCompany() : string
    {
        return $this->company;
    }
    /**
     * The company name.
     *
     * @param string $company
     *
     * @return self
     */
    public function setCompany(string $company) : self
    {
        $this->company = $company;
        return $this;
    }
    /**
     * The publicly visible email address.
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * The publicly visible email address.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * The Twitter username of the company.
     *
     * @return string
     */
    public function getTwitterUsername() : string
    {
        return $this->twitterUsername;
    }
    /**
     * The Twitter username of the company.
     *
     * @param string $twitterUsername
     *
     * @return self
     */
    public function setTwitterUsername(string $twitterUsername) : self
    {
        $this->twitterUsername = $twitterUsername;
        return $this;
    }
    /**
     * The location.
     *
     * @return string
     */
    public function getLocation() : string
    {
        return $this->location;
    }
    /**
     * The location.
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location) : self
    {
        $this->location = $location;
        return $this;
    }
    /**
     * The shorthand name of the company.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The shorthand name of the company.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * The description of the company.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The description of the company.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Toggles whether an organization can use organization projects.
     *
     * @return bool
     */
    public function getHasOrganizationProjects() : bool
    {
        return $this->hasOrganizationProjects;
    }
    /**
     * Toggles whether an organization can use organization projects.
     *
     * @param bool $hasOrganizationProjects
     *
     * @return self
     */
    public function setHasOrganizationProjects(bool $hasOrganizationProjects) : self
    {
        $this->hasOrganizationProjects = $hasOrganizationProjects;
        return $this;
    }
    /**
     * Toggles whether repositories that belong to the organization can use repository projects.
     *
     * @return bool
     */
    public function getHasRepositoryProjects() : bool
    {
        return $this->hasRepositoryProjects;
    }
    /**
     * Toggles whether repositories that belong to the organization can use repository projects.
     *
     * @param bool $hasRepositoryProjects
     *
     * @return self
     */
    public function setHasRepositoryProjects(bool $hasRepositoryProjects) : self
    {
        $this->hasRepositoryProjects = $hasRepositoryProjects;
        return $this;
    }
    /**
    * Default permission level members have for organization repositories:  
    \* `read` - can pull, but not push to or administer this repository.  
    \* `write` - can pull and push, but not administer this repository.  
    \* `admin` - can pull, push, and administer this repository.  
    \* `none` - no permissions granted by default.
    *
    * @return string
    */
    public function getDefaultRepositoryPermission() : string
    {
        return $this->defaultRepositoryPermission;
    }
    /**
    * Default permission level members have for organization repositories:  
    \* `read` - can pull, but not push to or administer this repository.  
    \* `write` - can pull and push, but not administer this repository.  
    \* `admin` - can pull, push, and administer this repository.  
    \* `none` - no permissions granted by default.
    *
    * @param string $defaultRepositoryPermission
    *
    * @return self
    */
    public function setDefaultRepositoryPermission(string $defaultRepositoryPermission) : self
    {
        $this->defaultRepositoryPermission = $defaultRepositoryPermission;
        return $this;
    }
    /**
    * Toggles the ability of non-admin organization members to create repositories. Can be one of:  
    \* `true` - all organization members can create repositories.  
    \* `false` - only organization owners can create repositories.  
    Default: `true`  
    **Note:** A parameter can override this parameter. See `members_allowed_repository_creation_type` in this table for details. **Note:** A parameter can override this parameter. See `members_allowed_repository_creation_type` in this table for details.
    *
    * @return bool
    */
    public function getMembersCanCreateRepositories() : bool
    {
        return $this->membersCanCreateRepositories;
    }
    /**
    * Toggles the ability of non-admin organization members to create repositories. Can be one of:  
    \* `true` - all organization members can create repositories.  
    \* `false` - only organization owners can create repositories.  
    Default: `true`  
    **Note:** A parameter can override this parameter. See `members_allowed_repository_creation_type` in this table for details. **Note:** A parameter can override this parameter. See `members_allowed_repository_creation_type` in this table for details.
    *
    * @param bool $membersCanCreateRepositories
    *
    * @return self
    */
    public function setMembersCanCreateRepositories(bool $membersCanCreateRepositories) : self
    {
        $this->membersCanCreateRepositories = $membersCanCreateRepositories;
        return $this;
    }
    /**
    * Toggles whether organization members can create internal repositories, which are visible to all enterprise members. You can only allow members to create internal repositories if your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+. Can be one of:  
    \* `true` - all organization members can create internal repositories.  
    \* `false` - only organization owners can create internal repositories.  
    Default: `true`. For more information, see "[Restricting repository creation in your organization](https://help.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
    *
    * @return bool
    */
    public function getMembersCanCreateInternalRepositories() : bool
    {
        return $this->membersCanCreateInternalRepositories;
    }
    /**
    * Toggles whether organization members can create internal repositories, which are visible to all enterprise members. You can only allow members to create internal repositories if your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+. Can be one of:  
    \* `true` - all organization members can create internal repositories.  
    \* `false` - only organization owners can create internal repositories.  
    Default: `true`. For more information, see "[Restricting repository creation in your organization](https://help.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
    *
    * @param bool $membersCanCreateInternalRepositories
    *
    * @return self
    */
    public function setMembersCanCreateInternalRepositories(bool $membersCanCreateInternalRepositories) : self
    {
        $this->membersCanCreateInternalRepositories = $membersCanCreateInternalRepositories;
        return $this;
    }
    /**
    * Toggles whether organization members can create private repositories, which are visible to organization members with permission. Can be one of:  
    \* `true` - all organization members can create private repositories.  
    \* `false` - only organization owners can create private repositories.  
    Default: `true`. For more information, see "[Restricting repository creation in your organization](https://help.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
    *
    * @return bool
    */
    public function getMembersCanCreatePrivateRepositories() : bool
    {
        return $this->membersCanCreatePrivateRepositories;
    }
    /**
    * Toggles whether organization members can create private repositories, which are visible to organization members with permission. Can be one of:  
    \* `true` - all organization members can create private repositories.  
    \* `false` - only organization owners can create private repositories.  
    Default: `true`. For more information, see "[Restricting repository creation in your organization](https://help.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
    *
    * @param bool $membersCanCreatePrivateRepositories
    *
    * @return self
    */
    public function setMembersCanCreatePrivateRepositories(bool $membersCanCreatePrivateRepositories) : self
    {
        $this->membersCanCreatePrivateRepositories = $membersCanCreatePrivateRepositories;
        return $this;
    }
    /**
    * Toggles whether organization members can create public repositories, which are visible to anyone. Can be one of:  
    \* `true` - all organization members can create public repositories.  
    \* `false` - only organization owners can create public repositories.  
    Default: `true`. For more information, see "[Restricting repository creation in your organization](https://help.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
    *
    * @return bool
    */
    public function getMembersCanCreatePublicRepositories() : bool
    {
        return $this->membersCanCreatePublicRepositories;
    }
    /**
    * Toggles whether organization members can create public repositories, which are visible to anyone. Can be one of:  
    \* `true` - all organization members can create public repositories.  
    \* `false` - only organization owners can create public repositories.  
    Default: `true`. For more information, see "[Restricting repository creation in your organization](https://help.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
    *
    * @param bool $membersCanCreatePublicRepositories
    *
    * @return self
    */
    public function setMembersCanCreatePublicRepositories(bool $membersCanCreatePublicRepositories) : self
    {
        $this->membersCanCreatePublicRepositories = $membersCanCreatePublicRepositories;
        return $this;
    }
    /**
    * Specifies which types of repositories non-admin organization members can create. Can be one of:  
    \* `all` - all organization members can create public and private repositories.  
    \* `private` - members can create private repositories. This option is only available to repositories that are part of an organization on GitHub Enterprise Cloud.  
    \* `none` - only admin members can create repositories.  
    **Note:** This parameter is deprecated and will be removed in the future. Its return value ignores internal repositories. Using this parameter overrides values set in `members_can_create_repositories`. See [this note](https://developer.github.com/v3/orgs/#members_can_create_repositories) for details.
    *
    * @return string
    */
    public function getMembersAllowedRepositoryCreationType() : string
    {
        return $this->membersAllowedRepositoryCreationType;
    }
    /**
    * Specifies which types of repositories non-admin organization members can create. Can be one of:  
    \* `all` - all organization members can create public and private repositories.  
    \* `private` - members can create private repositories. This option is only available to repositories that are part of an organization on GitHub Enterprise Cloud.  
    \* `none` - only admin members can create repositories.  
    **Note:** This parameter is deprecated and will be removed in the future. Its return value ignores internal repositories. Using this parameter overrides values set in `members_can_create_repositories`. See [this note](https://developer.github.com/v3/orgs/#members_can_create_repositories) for details.
    *
    * @param string $membersAllowedRepositoryCreationType
    *
    * @return self
    */
    public function setMembersAllowedRepositoryCreationType(string $membersAllowedRepositoryCreationType) : self
    {
        $this->membersAllowedRepositoryCreationType = $membersAllowedRepositoryCreationType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBlog() : string
    {
        return $this->blog;
    }
    /**
     * 
     *
     * @param string $blog
     *
     * @return self
     */
    public function setBlog(string $blog) : self
    {
        $this->blog = $blog;
        return $this;
    }
}