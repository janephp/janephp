<?php

namespace Docker\Api\Model;

class TaskSpecContainerSpecPrivilegesSELinuxContext
{
    /**
     * Disable SELinux
     *
     * @var bool
     */
    protected $disable;
    /**
     * SELinux user label
     *
     * @var string
     */
    protected $user;
    /**
     * SELinux role label
     *
     * @var string
     */
    protected $role;
    /**
     * SELinux type label
     *
     * @var string
     */
    protected $type;
    /**
     * SELinux level label
     *
     * @var string
     */
    protected $level;
    /**
     * Disable SELinux
     *
     * @return bool
     */
    public function getDisable() : bool
    {
        return $this->disable;
    }
    /**
     * Disable SELinux
     *
     * @param bool $disable
     *
     * @return self
     */
    public function setDisable(bool $disable) : self
    {
        $this->disable = $disable;
        return $this;
    }
    /**
     * SELinux user label
     *
     * @return string
     */
    public function getUser() : string
    {
        return $this->user;
    }
    /**
     * SELinux user label
     *
     * @param string $user
     *
     * @return self
     */
    public function setUser(string $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * SELinux role label
     *
     * @return string
     */
    public function getRole() : string
    {
        return $this->role;
    }
    /**
     * SELinux role label
     *
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role) : self
    {
        $this->role = $role;
        return $this;
    }
    /**
     * SELinux type label
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * SELinux type label
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * SELinux level label
     *
     * @return string
     */
    public function getLevel() : string
    {
        return $this->level;
    }
    /**
     * SELinux level label
     *
     * @param string $level
     *
     * @return self
     */
    public function setLevel(string $level) : self
    {
        $this->level = $level;
        return $this;
    }
}