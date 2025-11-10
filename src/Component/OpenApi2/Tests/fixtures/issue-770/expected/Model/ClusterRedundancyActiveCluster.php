<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ClusterRedundancyActiveCluster
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Priority of target active cluster
     *
     * @var int
     */
    protected $priority;
    /**
     * Password of admin account of target active cluster
     *
     * @var string
     */
    protected $targetClusterAdminPassword;
    /**
     * Management entry list of target active cluster
     *
     * @var list<ClusterRedundancyManagementEntry>
     */
    protected $managementEntryList;
    /**
     * Priority of target active cluster
     *
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }
    /**
     * Priority of target active cluster
     *
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;
        return $this;
    }
    /**
     * Password of admin account of target active cluster
     *
     * @return string
     */
    public function getTargetClusterAdminPassword(): string
    {
        return $this->targetClusterAdminPassword;
    }
    /**
     * Password of admin account of target active cluster
     *
     * @param string $targetClusterAdminPassword
     *
     * @return self
     */
    public function setTargetClusterAdminPassword(string $targetClusterAdminPassword): self
    {
        $this->initialized['targetClusterAdminPassword'] = true;
        $this->targetClusterAdminPassword = $targetClusterAdminPassword;
        return $this;
    }
    /**
     * Management entry list of target active cluster
     *
     * @return list<ClusterRedundancyManagementEntry>
     */
    public function getManagementEntryList(): array
    {
        return $this->managementEntryList;
    }
    /**
     * Management entry list of target active cluster
     *
     * @param list<ClusterRedundancyManagementEntry> $managementEntryList
     *
     * @return self
     */
    public function setManagementEntryList(array $managementEntryList): self
    {
        $this->initialized['managementEntryList'] = true;
        $this->managementEntryList = $managementEntryList;
        return $this;
    }
}