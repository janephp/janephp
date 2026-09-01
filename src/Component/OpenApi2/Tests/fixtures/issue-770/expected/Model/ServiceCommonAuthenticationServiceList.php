<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ServiceCommonAuthenticationServiceList
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
     * @var list<ServiceCommonAuthenticationService>
     */
    public array $list;
}