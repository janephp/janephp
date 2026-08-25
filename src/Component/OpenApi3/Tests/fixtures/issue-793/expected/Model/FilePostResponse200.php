<?php

namespace Jane\Component\OpenApi3\Tests\ExpectedIssue793\Model;

use Jane\Component\OpenApi3\Tests\ExpectedIssue793\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\ExpectedIssue793\Runtime\AdditionalPropertiesInterface;
class FilePostResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var int
     */
    protected $statusCode;
    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
    /**
     * @param int $statusCode
     *
     * @return self
     */
    public function setStatusCode(int $statusCode): self
    {
        $this->initialized['statusCode'] = true;
        $this->statusCode = $statusCode;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['statusCode' => ['status_code', 'getStatusCode', 'setStatusCode']];
    }
}