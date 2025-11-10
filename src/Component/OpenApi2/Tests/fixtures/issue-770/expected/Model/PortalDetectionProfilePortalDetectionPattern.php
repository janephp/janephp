<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class PortalDetectionProfilePortalDetectionPattern
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $name;
    /**
     * Portal detection and suppression pattern type
     *
     * @var string
     */
    protected $patternType;
    /**
     * Portal detection and suppression pattern for user agent
     *
     * @var string
     */
    protected $userAgentPattern;
    /**
     * HTTP status codes
     *
     * @var int
     */
    protected $httpCode;
    /**
     * HTTP response body
     *
     * @var string
     */
    protected $httpResponseBody;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Portal detection and suppression pattern type
     *
     * @return string
     */
    public function getPatternType(): string
    {
        return $this->patternType;
    }
    /**
     * Portal detection and suppression pattern type
     *
     * @param string $patternType
     *
     * @return self
     */
    public function setPatternType(string $patternType): self
    {
        $this->initialized['patternType'] = true;
        $this->patternType = $patternType;
        return $this;
    }
    /**
     * Portal detection and suppression pattern for user agent
     *
     * @return string
     */
    public function getUserAgentPattern(): string
    {
        return $this->userAgentPattern;
    }
    /**
     * Portal detection and suppression pattern for user agent
     *
     * @param string $userAgentPattern
     *
     * @return self
     */
    public function setUserAgentPattern(string $userAgentPattern): self
    {
        $this->initialized['userAgentPattern'] = true;
        $this->userAgentPattern = $userAgentPattern;
        return $this;
    }
    /**
     * HTTP status codes
     *
     * @return int
     */
    public function getHttpCode(): int
    {
        return $this->httpCode;
    }
    /**
     * HTTP status codes
     *
     * @param int $httpCode
     *
     * @return self
     */
    public function setHttpCode(int $httpCode): self
    {
        $this->initialized['httpCode'] = true;
        $this->httpCode = $httpCode;
        return $this;
    }
    /**
     * HTTP response body
     *
     * @return string
     */
    public function getHttpResponseBody(): string
    {
        return $this->httpResponseBody;
    }
    /**
     * HTTP response body
     *
     * @param string $httpResponseBody
     *
     * @return self
     */
    public function setHttpResponseBody(string $httpResponseBody): self
    {
        $this->initialized['httpResponseBody'] = true;
        $this->httpResponseBody = $httpResponseBody;
        return $this;
    }
}