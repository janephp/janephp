<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class NorthboundDataStreamingNorthboundDataStreamingProfileList extends \ArrayObject
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
     * @var list<NorthboundDataStreamingNorthboundDataStreamingProfile>
     */
    protected $list;
    /**
     * @var NorthboundDataStreamingNorthboundDataStreamingProfileListExtra
     */
    protected $extra;
    /**
     * @return list<NorthboundDataStreamingNorthboundDataStreamingProfile>
     */
    public function getList(): array
    {
        return $this->list;
    }
    /**
     * @param list<NorthboundDataStreamingNorthboundDataStreamingProfile> $list
     *
     * @return self
     */
    public function setList(array $list): self
    {
        $this->initialized['list'] = true;
        $this->list = $list;
        return $this;
    }
    /**
     * @return NorthboundDataStreamingNorthboundDataStreamingProfileListExtra
     */
    public function getExtra(): NorthboundDataStreamingNorthboundDataStreamingProfileListExtra
    {
        return $this->extra;
    }
    /**
     * @param NorthboundDataStreamingNorthboundDataStreamingProfileListExtra $extra
     *
     * @return self
     */
    public function setExtra(NorthboundDataStreamingNorthboundDataStreamingProfileListExtra $extra): self
    {
        $this->initialized['extra'] = true;
        $this->extra = $extra;
        return $this;
    }
}