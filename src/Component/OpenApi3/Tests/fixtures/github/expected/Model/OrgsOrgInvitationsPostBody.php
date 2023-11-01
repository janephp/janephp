<?php

namespace Github\Model;

class OrgsOrgInvitationsPostBody extends \ArrayObject
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
     * **Required unless you provide `email`**. GitHub user ID for the person you are inviting.
     *
     * @var int
     */
    protected $inviteeId;
    /**
     * **Required unless you provide `invitee_id`**. Email address of the person you are inviting, which can be an existing GitHub user.
     *
     * @var string
     */
    protected $email;
    /**
    * Specify role for new member. Can be one of:  
    \* `admin` - Organization owners with full administrative rights to the organization and complete access to all repositories and teams.  
    \* `direct_member` - Non-owner organization members with ability to see other members and join teams by invitation.  
    \* `billing_manager` - Non-owner organization members with ability to manage the billing settings of your organization.
    *
    * @var string
    */
    protected $role = 'direct_member';
    /**
     * Specify IDs for the teams you want to invite new members to.
     *
     * @var int[]
     */
    protected $teamIds;
    /**
     * **Required unless you provide `email`**. GitHub user ID for the person you are inviting.
     *
     * @return int
     */
    public function getInviteeId() : int
    {
        return $this->inviteeId;
    }
    /**
     * **Required unless you provide `email`**. GitHub user ID for the person you are inviting.
     *
     * @param int $inviteeId
     *
     * @return self
     */
    public function setInviteeId(int $inviteeId) : self
    {
        $this->initialized['inviteeId'] = true;
        $this->inviteeId = $inviteeId;
        return $this;
    }
    /**
     * **Required unless you provide `invitee_id`**. Email address of the person you are inviting, which can be an existing GitHub user.
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * **Required unless you provide `invitee_id`**. Email address of the person you are inviting, which can be an existing GitHub user.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
    * Specify role for new member. Can be one of:  
    \* `admin` - Organization owners with full administrative rights to the organization and complete access to all repositories and teams.  
    \* `direct_member` - Non-owner organization members with ability to see other members and join teams by invitation.  
    \* `billing_manager` - Non-owner organization members with ability to manage the billing settings of your organization.
    *
    * @return string
    */
    public function getRole() : string
    {
        return $this->role;
    }
    /**
    * Specify role for new member. Can be one of:  
    \* `admin` - Organization owners with full administrative rights to the organization and complete access to all repositories and teams.  
    \* `direct_member` - Non-owner organization members with ability to see other members and join teams by invitation.  
    \* `billing_manager` - Non-owner organization members with ability to manage the billing settings of your organization.
    *
    * @param string $role
    *
    * @return self
    */
    public function setRole(string $role) : self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * Specify IDs for the teams you want to invite new members to.
     *
     * @return int[]
     */
    public function getTeamIds() : array
    {
        return $this->teamIds;
    }
    /**
     * Specify IDs for the teams you want to invite new members to.
     *
     * @param int[] $teamIds
     *
     * @return self
     */
    public function setTeamIds(array $teamIds) : self
    {
        $this->initialized['teamIds'] = true;
        $this->teamIds = $teamIds;
        return $this;
    }
}