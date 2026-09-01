<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class PlanetsPlanetIdImagePostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The image file to upload
     *
     * @var string|resource|\Psr\Http\Message\StreamInterface
     */
    public $image;
    public function definedProperties(): array
    {
        return ['image' => 'image'];
    }
}