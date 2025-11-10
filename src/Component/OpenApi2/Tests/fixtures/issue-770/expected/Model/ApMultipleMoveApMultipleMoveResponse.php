<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApMultipleMoveApMultipleMoveResponse
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
     * Number of AP moved successfully.
     *
     * @var int
     */
    protected $successApCount;
    /**
     * @var ApMultipleMoveApMultipleMoveResponseFailAps
     */
    protected $failAps;
    /**
     * Number of AP moved successfully.
     *
     * @return int
     */
    public function getSuccessApCount(): int
    {
        return $this->successApCount;
    }
    /**
     * Number of AP moved successfully.
     *
     * @param int $successApCount
     *
     * @return self
     */
    public function setSuccessApCount(int $successApCount): self
    {
        $this->initialized['successApCount'] = true;
        $this->successApCount = $successApCount;
        return $this;
    }
    /**
     * @return ApMultipleMoveApMultipleMoveResponseFailAps
     */
    public function getFailAps(): ApMultipleMoveApMultipleMoveResponseFailAps
    {
        return $this->failAps;
    }
    /**
     * @param ApMultipleMoveApMultipleMoveResponseFailAps $failAps
     *
     * @return self
     */
    public function setFailAps(ApMultipleMoveApMultipleMoveResponseFailAps $failAps): self
    {
        $this->initialized['failAps'] = true;
        $this->failAps = $failAps;
        return $this;
    }
}