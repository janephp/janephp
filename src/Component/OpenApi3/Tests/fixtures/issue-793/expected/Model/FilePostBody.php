<?php

namespace Jane\Component\OpenApi3\Tests\ExpectedIssue793\Model;

use Jane\Component\OpenApi3\Tests\ExpectedIssue793\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\ExpectedIssue793\Runtime\AdditionalPropertiesInterface;
class FilePostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|resource|\Psr\Http\Message\StreamInterface
     */
    public $file;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var string|resource|\Psr\Http\Message\StreamInterface|null
     */
    public $fileNullable;
    public function definedProperties(): array
    {
        return ['file' => 'file', 'description' => 'description', 'fileNullable' => 'fileNullable'];
    }
}