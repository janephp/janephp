<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemFriendlyNameLangList
{
    /**
     * Total count of FriendlyName of language
     *
     * @var int
     */
    public int $totalCount;
    /**
     * Indicates whether there are more FriendlyName of language after the list that is currently displayed
     *
     * @var bool
     */
    public bool $hasMore;
    /**
     * Index of the first FriendlyName of language returned out of the complete FTP list
     *
     * @var int
     */
    public int $firstIndex;
    /**
     * @var list<SystemFriendlyNameLang>
     */
    public array $list;
}