<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ClientQueryTcWithQuota
{
    /**
     * @var string
     */
    public string $tcName;
    /**
     * @var string
     */
    public string $tcMaxQuota;
    /**
     * @var string
     */
    public string $tcRemainingQuota;
}