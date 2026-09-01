<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class VendorSpecificAttributeProfileList
{
    /**
     * Total number of the profiles
     *
     * @var int
     */
    public int $totalCount;
    /**
     * Indicates whether there are more profiles after the list that is currently displayed
     *
     * @var bool
     */
    public bool $hasMore;
    /**
     * Index of the first profile returned out of the profile list
     *
     * @var int
     */
    public int $firstIndex;
    /**
     * Information list of the vendor specific attribute profile
     *
     * @var list<VendorSpecificAttributeProfileListListItem>
     */
    public array $list;
}