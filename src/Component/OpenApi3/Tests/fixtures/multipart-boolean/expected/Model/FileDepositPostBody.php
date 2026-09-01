<?php

namespace Jane\Component\OpenApi3\Tests\ExpectedMultiPartBoolean\Model;

use Jane\Component\OpenApi3\Tests\ExpectedMultiPartBoolean\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\ExpectedMultiPartBoolean\Runtime\AdditionalPropertiesInterface;
class FileDepositPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|resource|\Psr\Http\Message\StreamInterface
     */
    public $fichier;
    /**
     * @var bool
     */
    public bool $valid;
    public function definedProperties(): array
    {
        return ['fichier' => 'fichier', 'valid' => 'valid'];
    }
}