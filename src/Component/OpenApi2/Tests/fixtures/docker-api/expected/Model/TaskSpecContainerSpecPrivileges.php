<?php

namespace Docker\Api\Model;

class TaskSpecContainerSpecPrivileges
{
    /**
     * CredentialSpec for managed service account (Windows only)
     *
     * @var TaskSpecContainerSpecPrivilegesCredentialSpec
     */
    public TaskSpecContainerSpecPrivilegesCredentialSpec $credentialSpec;
    /**
     * SELinux labels of the container
     *
     * @var TaskSpecContainerSpecPrivilegesSELinuxContext
     */
    public TaskSpecContainerSpecPrivilegesSELinuxContext $sELinuxContext;
}