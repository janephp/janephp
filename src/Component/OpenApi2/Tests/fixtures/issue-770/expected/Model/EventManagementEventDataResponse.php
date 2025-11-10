<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class EventManagementEventDataResponse
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
     * The status of http request
     *
     * @var bool
     */
    protected $success;
    /**
     * The error message of http request
     *
     * @var string
     */
    protected $error;
    /**
     * @var EventManagementEventDataList
     */
    protected $data;
    /**
     * Extra information for event management setting
     *
     * @var string
     */
    protected $extra;
    /**
     * The status of http request
     *
     * @return bool
     */
    public function getSuccess(): bool
    {
        return $this->success;
    }
    /**
     * The status of http request
     *
     * @param bool $success
     *
     * @return self
     */
    public function setSuccess(bool $success): self
    {
        $this->initialized['success'] = true;
        $this->success = $success;
        return $this;
    }
    /**
     * The error message of http request
     *
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }
    /**
     * The error message of http request
     *
     * @param string $error
     *
     * @return self
     */
    public function setError(string $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
    /**
     * @return EventManagementEventDataList
     */
    public function getData(): EventManagementEventDataList
    {
        return $this->data;
    }
    /**
     * @param EventManagementEventDataList $data
     *
     * @return self
     */
    public function setData(EventManagementEventDataList $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * Extra information for event management setting
     *
     * @return string
     */
    public function getExtra(): string
    {
        return $this->extra;
    }
    /**
     * Extra information for event management setting
     *
     * @param string $extra
     *
     * @return self
     */
    public function setExtra(string $extra): self
    {
        $this->initialized['extra'] = true;
        $this->extra = $extra;
        return $this;
    }
}