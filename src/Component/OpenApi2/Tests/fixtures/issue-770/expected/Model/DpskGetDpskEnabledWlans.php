<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class DpskGetDpskEnabledWlans
{
    /**
     * Total DPSK enabled WLAN count of the zone
     *
     * @var int
     */
    public int $totalCount;
    /**
     * Indicates whether there are more DPSK enabled WLANs after the list that is currently displayed
     *
     * @var bool
     */
    public bool $hasMore;
    /**
     * Index of the first DPSK enabled WLAN returned out of the complete WLAN list
     *
     * @var int
     */
    public int $firstIndex;
    /**
     * @var list<DpskGetDpskEnabledWlansListItem>
     */
    public array $list;
}