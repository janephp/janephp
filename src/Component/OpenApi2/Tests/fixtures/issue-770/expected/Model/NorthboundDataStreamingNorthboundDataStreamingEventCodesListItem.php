<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class NorthboundDataStreamingNorthboundDataStreamingEventCodesListItem
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
     * Northbound Data Streaming accepted event code
     *
     * @var int
     */
    protected $code;
    /**
     * Northbound Data Streaming accepted event type
     *
     * @var string
     */
    protected $type;
    /**
     * Northbound Data Streaming accepted event code
     *
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }
    /**
     * Northbound Data Streaming accepted event code
     *
     * @param int $code
     *
     * @return self
     */
    public function setCode(int $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Northbound Data Streaming accepted event type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Northbound Data Streaming accepted event type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}