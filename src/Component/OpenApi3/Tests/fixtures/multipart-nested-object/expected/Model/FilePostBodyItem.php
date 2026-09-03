<?php

namespace Jane\Component\OpenApi3\Tests\Expected\MultipartNestedObject\Model;

use Jane\Component\OpenApi3\Tests\Expected\MultipartNestedObject\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\MultipartNestedObject\Runtime\AdditionalPropertiesInterface;
class FilePostBodyItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $itemId;
    /**
     * @var string
     */
    public string $itemType;
    public function definedProperties(): array
    {
        return ['itemId' => 'itemId', 'itemType' => 'itemType'];
    }
}