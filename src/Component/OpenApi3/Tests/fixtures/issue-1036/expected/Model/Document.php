<?php

namespace Jane\Component\OpenApi3\Tests\ExpectedIssue1036\Model;

use Jane\Component\OpenApi3\Tests\ExpectedIssue1036\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\ExpectedIssue1036\Runtime\AdditionalPropertiesInterface;
class Document implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $id;
    public function definedProperties(): array
    {
        return ['id' => 'id'];
    }
}