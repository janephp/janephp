<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class SystemFtpTestResponse
{
    /**
     * The status of http request
     *
     * @var bool
     */
    public bool $success;
    /**
     * The error message of http request
     *
     * @var string
     */
    public string $error;
    /**
     * The testing result
     *
     * @var bool
     */
    public bool $data;
    /**
     * The extra info
     *
     * @var string
     */
    public string $extra;
}