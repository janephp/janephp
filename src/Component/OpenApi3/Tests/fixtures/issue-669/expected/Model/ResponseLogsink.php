<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseLogsink extends \ArrayObject
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
     * @var LogsinkSchema
     */
    protected $sink;
    /**
     * @return LogsinkSchema
     */
    public function getSink(): LogsinkSchema
    {
        return $this->sink;
    }
    /**
     * @param LogsinkSchema $sink
     *
     * @return self
     */
    public function setSink(LogsinkSchema $sink): self
    {
        $this->initialized['sink'] = true;
        $this->sink = $sink;
        return $this;
    }
}