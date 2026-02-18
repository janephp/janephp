<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApCloudOnBoardingSyncResult
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
     * Number of synced provisions APs
     *
     * @var int
     */
    protected $syncedCount;
    /**
     * @var ApCloudOnBoardingSyncResultFailAps
     */
    protected $failAps;
    /**
     * Number of synced provisions APs
     *
     * @return int
     */
    public function getSyncedCount(): int
    {
        return $this->syncedCount;
    }
    /**
     * Number of synced provisions APs
     *
     * @param int $syncedCount
     *
     * @return self
     */
    public function setSyncedCount(int $syncedCount): self
    {
        $this->initialized['syncedCount'] = true;
        $this->syncedCount = $syncedCount;
        return $this;
    }
    /**
     * @return ApCloudOnBoardingSyncResultFailAps
     */
    public function getFailAps(): ApCloudOnBoardingSyncResultFailAps
    {
        return $this->failAps;
    }
    /**
     * @param ApCloudOnBoardingSyncResultFailAps $failAps
     *
     * @return self
     */
    public function setFailAps(ApCloudOnBoardingSyncResultFailAps $failAps): self
    {
        $this->initialized['failAps'] = true;
        $this->failAps = $failAps;
        return $this;
    }
}