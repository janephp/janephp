<?php

namespace Github\Model;

class TeamsTeamIdPatchBody extends \ArrayObject
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
     * The name of the team.
     *
     * @var string
     */
    protected $name;
    /**
     * The description of the team.
     *
     * @var string
     */
    protected $description;
    /**
    * The level of privacy this team should have. Editing teams without specifying this parameter leaves `privacy` intact. The options are:  
    **For a non-nested team:**  
    \* `secret` - only visible to organization owners and members of this team.  
    \* `closed` - visible to all members of this organization.  
    **For a parent or child team:**  
    \* `closed` - visible to all members of this organization.
    *
    * @var string
    */
    protected $privacy;
    /**
    * **Deprecated**. The permission that new repositories will be added to the team with when none is specified. Can be one of:  
    \* `pull` - team members can pull, but not push to or administer newly-added repositories.  
    \* `push` - team members can pull and push, but not administer newly-added repositories.  
    \* `admin` - team members can pull, push and administer newly-added repositories.
    *
    * @var string
    */
    protected $permission = 'pull';
    /**
     * The ID of a team to set as the parent team.
     *
     * @var int|null
     */
    protected $parentTeamId;
    /**
     * The name of the team.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the team.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The description of the team.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The description of the team.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
    * The level of privacy this team should have. Editing teams without specifying this parameter leaves `privacy` intact. The options are:  
    **For a non-nested team:**  
    \* `secret` - only visible to organization owners and members of this team.  
    \* `closed` - visible to all members of this organization.  
    **For a parent or child team:**  
    \* `closed` - visible to all members of this organization.
    *
    * @return string
    */
    public function getPrivacy() : string
    {
        return $this->privacy;
    }
    /**
    * The level of privacy this team should have. Editing teams without specifying this parameter leaves `privacy` intact. The options are:  
    **For a non-nested team:**  
    \* `secret` - only visible to organization owners and members of this team.  
    \* `closed` - visible to all members of this organization.  
    **For a parent or child team:**  
    \* `closed` - visible to all members of this organization.
    *
    * @param string $privacy
    *
    * @return self
    */
    public function setPrivacy(string $privacy) : self
    {
        $this->initialized['privacy'] = true;
        $this->privacy = $privacy;
        return $this;
    }
    /**
    * **Deprecated**. The permission that new repositories will be added to the team with when none is specified. Can be one of:  
    \* `pull` - team members can pull, but not push to or administer newly-added repositories.  
    \* `push` - team members can pull and push, but not administer newly-added repositories.  
    \* `admin` - team members can pull, push and administer newly-added repositories.
    *
    * @return string
    */
    public function getPermission() : string
    {
        return $this->permission;
    }
    /**
    * **Deprecated**. The permission that new repositories will be added to the team with when none is specified. Can be one of:  
    \* `pull` - team members can pull, but not push to or administer newly-added repositories.  
    \* `push` - team members can pull and push, but not administer newly-added repositories.  
    \* `admin` - team members can pull, push and administer newly-added repositories.
    *
    * @param string $permission
    *
    * @return self
    */
    public function setPermission(string $permission) : self
    {
        $this->initialized['permission'] = true;
        $this->permission = $permission;
        return $this;
    }
    /**
     * The ID of a team to set as the parent team.
     *
     * @return int|null
     */
    public function getParentTeamId() : ?int
    {
        return $this->parentTeamId;
    }
    /**
     * The ID of a team to set as the parent team.
     *
     * @param int|null $parentTeamId
     *
     * @return self
     */
    public function setParentTeamId(?int $parentTeamId) : self
    {
        $this->initialized['parentTeamId'] = true;
        $this->parentTeamId = $parentTeamId;
        return $this;
    }
}