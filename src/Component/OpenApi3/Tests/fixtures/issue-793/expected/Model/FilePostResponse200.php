<?php

namespace Jane\Component\OpenApi3\Tests\ExpectedIssue793\Model;

use Jane\Component\OpenApi3\Tests\ExpectedIssue793\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\ExpectedIssue793\Runtime\AdditionalPropertiesInterface;
class FilePostResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $statusCode;
    public function definedProperties(): array
    {
        return ['statusCode' => 'status_code'];
    }
}