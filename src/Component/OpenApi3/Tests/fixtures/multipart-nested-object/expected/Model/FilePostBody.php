<?php

namespace Jane\Component\OpenApi3\Tests\Expected\MultipartNestedObject\Model;

use Jane\Component\OpenApi3\Tests\Expected\MultipartNestedObject\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\MultipartNestedObject\Runtime\AdditionalPropertiesInterface;
class FilePostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|resource|\Psr\Http\Message\StreamInterface
     */
    public $fichier;
    /**
     * @var FilePostBodyItem
     */
    public FilePostBodyItem $item;
    public function definedProperties(): array
    {
        return ['fichier' => 'fichier', 'item' => 'item'];
    }
}