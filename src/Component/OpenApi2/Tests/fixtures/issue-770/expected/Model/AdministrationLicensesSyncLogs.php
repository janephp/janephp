<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationLicensesSyncLogs
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
     * sync license result
     *
     * @var string
     */
    protected $syncResult;
    /**
     * license sync log's create time
     *
     * @var string
     */
    protected $createDateTime;
    /**
     * sync license result
     *
     * @return string
     */
    public function getSyncResult(): string
    {
        return $this->syncResult;
    }
    /**
     * sync license result
     *
     * @param string $syncResult
     *
     * @return self
     */
    public function setSyncResult(string $syncResult): self
    {
        $this->initialized['syncResult'] = true;
        $this->syncResult = $syncResult;
        return $this;
    }
    /**
     * license sync log's create time
     *
     * @return string
     */
    public function getCreateDateTime(): string
    {
        return $this->createDateTime;
    }
    /**
     * license sync log's create time
     *
     * @param string $createDateTime
     *
     * @return self
     */
    public function setCreateDateTime(string $createDateTime): self
    {
        $this->initialized['createDateTime'] = true;
        $this->createDateTime = $createDateTime;
        return $this;
    }
}