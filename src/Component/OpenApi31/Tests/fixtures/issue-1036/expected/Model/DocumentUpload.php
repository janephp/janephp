<?php

namespace Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Model;

use Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Runtime\AdditionalPropertiesInterface;
class DocumentUpload implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|resource|\Psr\Http\Message\StreamInterface
     */
    public $file;
    /**
     * @var string|resource|\Psr\Http\Message\StreamInterface
     */
    public $preview;
    /**
     * @var string
     */
    public string $note;
    public function definedProperties(): array
    {
        return ['file' => 'file', 'preview' => 'preview', 'note' => 'note'];
    }
}