<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class GdprReport
{
    /**
     * Client mac
     *
     * @var string
     */
    public string $clientMac;
    /**
     * Request action
     *
     * @var string
     */
    public string $action;
    /**
     * @var GdprFtp
     */
    public GdprFtp $ftp;
}