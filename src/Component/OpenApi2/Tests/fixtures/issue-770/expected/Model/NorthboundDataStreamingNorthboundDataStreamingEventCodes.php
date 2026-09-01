<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class NorthboundDataStreamingNorthboundDataStreamingEventCodes
{
    /**
     * Total Northbound Data Streaming accepted event code count
     *
     * @var int
     */
    public int $totalCount;
    /**
     * Indicates whether there are more Northbound Data Streaming accepted event codes after the currently displayed list
     *
     * @var bool
     */
    public bool $hasMore;
    /**
     * Index of the first event code returned from the complete event code set
     *
     * @var int
     */
    public int $firstIndex;
    /**
     * @var list<NorthboundDataStreamingNorthboundDataStreamingEventCodesListItem>
     */
    public array $list;
}