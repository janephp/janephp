<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class SystemFtpList
{
    /**
     * Total FTP count
     *
     * @var int
     */
    public int $totalCount;
    /**
     * Indicates whether there are more FTPs after the list that is currently displayed
     *
     * @var bool
     */
    public bool $hasMore;
    /**
     * Index of the first FTP returned out of the complete FTP list
     *
     * @var int
     */
    public int $firstIndex;
    /**
     * @var CommonRbacMetadata
     */
    public CommonRbacMetadata $extra;
    /**
     * @var list<SystemFtp>
     */
    public array $list;
}