<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class PortalDetectionProfilePortalDetectionPattern
{
    /**
     * @var string
     */
    public string $name;
    /**
     * Portal detection and suppression pattern type
     *
     * @var string
     */
    public string $patternType;
    /**
     * Portal detection and suppression pattern for user agent
     *
     * @var string
     */
    public string $userAgentPattern;
    /**
     * HTTP status codes
     *
     * @var int
     */
    public int $httpCode;
    /**
     * HTTP response body
     *
     * @var string
     */
    public string $httpResponseBody;
}