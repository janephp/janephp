<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemApMacOUIList
{
    /**
     * Total AP MAC OUI count
     *
     * @var int
     */
    public int $totalCount;
    /**
     * Indicates whether there are more AP MAC OUIs after the list that is currently displayed
     *
     * @var bool
     */
    public bool $hasMore;
    /**
     * Index of the first AP MAC OUI returned out of the complete AP MAC OUI list
     *
     * @var int
     */
    public int $firstIndex;
    /**
     * @var list<SystemApMacOUI>
     */
    public array $list;
}