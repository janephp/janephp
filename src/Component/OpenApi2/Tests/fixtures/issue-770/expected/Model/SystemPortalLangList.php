<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemPortalLangList
{
    /**
     * Total portal name count
     *
     * @var int
     */
    public int $totalCount;
    /**
     * Indicates whether there are more portal names after the list that is currently displayed
     *
     * @var bool
     */
    public bool $hasMore;
    /**
     * Index of the first portal names returned out of the complete portal names list
     *
     * @var int
     */
    public int $firstIndex;
    /**
     * @var list<SystemPortalLang>
     */
    public array $list;
}