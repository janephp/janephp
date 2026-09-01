<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class FilePostBody implements AdditionalPropertiesInterface
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