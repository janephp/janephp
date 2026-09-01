<?php

namespace Docker\Api\Model;

class TaskSpecContainerSpecPrivilegesSELinuxContext
{
    /**
     * Disable SELinux
     *
     * @var bool
     */
    public bool $disable;
    /**
     * SELinux user label
     *
     * @var string
     */
    public string $user;
    /**
     * SELinux role label
     *
     * @var string
     */
    public string $role;
    /**
     * SELinux type label
     *
     * @var string
     */
    public string $type;
    /**
     * SELinux level label
     *
     * @var string
     */
    public string $level;
}