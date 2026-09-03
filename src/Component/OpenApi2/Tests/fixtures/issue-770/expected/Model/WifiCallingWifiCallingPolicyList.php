<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class WifiCallingWifiCallingPolicyList
{
    /**
     * @var int
     */
    public int $totalCount;
    /**
     * @var bool
     */
    public bool $hasMore;
    /**
     * @var int
     */
    public int $firstIndex;
    /**
     * @var CommonRbacMetadata
     */
    public CommonRbacMetadata $extra;
    /**
     * @var list<WifiCallingWifiCallingPolicy>
     */
    public array $list;
}