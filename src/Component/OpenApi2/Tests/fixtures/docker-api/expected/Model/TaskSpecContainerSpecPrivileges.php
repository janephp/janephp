<?php

namespace Docker\Api\Model;

class TaskSpecContainerSpecPrivileges
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
        $this->initialized['credentialSpec'] = true;
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
        $this->initialized['sELinuxContext'] = true;
        $this->sELinuxContext = $sELinuxContext;
        return $this;
    }
}