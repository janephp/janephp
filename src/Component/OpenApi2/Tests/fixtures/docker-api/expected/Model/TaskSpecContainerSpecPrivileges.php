<?php

namespace Docker\Api\Model;

class TaskSpecContainerSpecPrivileges
{
    /**
     * CredentialSpec for managed service account (Windows only)
     *
     * @var TaskSpecContainerSpecPrivilegesCredentialSpec
     */
    protected $credentialSpec;
    /**
     * SELinux labels of the container
     *
     * @var TaskSpecContainerSpecPrivilegesSELinuxContext
     */
    protected $sELinuxContext;
    /**
     * CredentialSpec for managed service account (Windows only)
     *
     * @return TaskSpecContainerSpecPrivilegesCredentialSpec
     */
    public function getCredentialSpec() : TaskSpecContainerSpecPrivilegesCredentialSpec
    {
        return $this->credentialSpec;
    }
    /**
     * CredentialSpec for managed service account (Windows only)
     *
     * @param TaskSpecContainerSpecPrivilegesCredentialSpec $credentialSpec
     *
     * @return self
     */
    public function setCredentialSpec(TaskSpecContainerSpecPrivilegesCredentialSpec $credentialSpec) : self
    {
        $this->credentialSpec = $credentialSpec;
        return $this;
    }
    /**
     * SELinux labels of the container
     *
     * @return TaskSpecContainerSpecPrivilegesSELinuxContext
     */
    public function getSELinuxContext() : TaskSpecContainerSpecPrivilegesSELinuxContext
    {
        return $this->sELinuxContext;
    }
    /**
     * SELinux labels of the container
     *
     * @param TaskSpecContainerSpecPrivilegesSELinuxContext $sELinuxContext
     *
     * @return self
     */
    public function setSELinuxContext(TaskSpecContainerSpecPrivilegesSELinuxContext $sELinuxContext) : self
    {
        $this->sELinuxContext = $sELinuxContext;
        return $this;
    }
}