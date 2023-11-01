<?php

namespace Docker\Api\Model;

class TaskSpecContainerSpecPrivilegesSELinuxContext
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
        $this->initialized['disable'] = true;
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
        $this->initialized['user'] = true;
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
        $this->initialized['role'] = true;
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
        $this->initialized['type'] = true;
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
        $this->initialized['level'] = true;
        $this->level = $level;
        return $this;
    }
}