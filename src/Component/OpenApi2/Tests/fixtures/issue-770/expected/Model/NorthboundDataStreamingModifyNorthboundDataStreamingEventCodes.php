<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class NorthboundDataStreamingModifyNorthboundDataStreamingEventCodes
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
     * @var list<int>
     */
    protected $northboundDataStreamingAcceptedEventCodes;
    /**
     * @return list<int>
     */
    public function getNorthboundDataStreamingAcceptedEventCodes(): array
    {
        return $this->northboundDataStreamingAcceptedEventCodes;
    }
    /**
     * @param list<int> $northboundDataStreamingAcceptedEventCodes
     *
     * @return self
     */
    public function setNorthboundDataStreamingAcceptedEventCodes(array $northboundDataStreamingAcceptedEventCodes): self
    {
        $this->initialized['northboundDataStreamingAcceptedEventCodes'] = true;
        $this->northboundDataStreamingAcceptedEventCodes = $northboundDataStreamingAcceptedEventCodes;
        return $this;
    }
}