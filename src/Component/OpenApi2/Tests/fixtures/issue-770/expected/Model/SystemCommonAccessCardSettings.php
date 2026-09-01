<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class SystemCommonAccessCardSettings
{
    /**
     * @var bool
     */
    public bool $cacAuthEnabled;
    /**
     * @var string
     */
    public string $cacAuthOcspServerUri;
    /**
     * The Trusted CA Certificate profile UUID for CAC Login
     *
     * @var string
     */
    public string $cacAuthRootCACertificate;
    /**
     * @var string
     */
    public string $cacAuthUserName;
    /**
     * The Admin AAA profile UUID for CAC Login
     *
     * @var string
     */
    public string $cacAuthAaaServer;
}