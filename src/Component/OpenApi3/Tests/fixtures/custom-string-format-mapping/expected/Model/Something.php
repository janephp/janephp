<?php

namespace Jane\Component\OpenApi3\Tests\Expected\CustomStringFormatMapping\Model;

use Jane\Component\OpenApi3\Tests\Expected\CustomStringFormatMapping\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\CustomStringFormatMapping\Runtime\AdditionalPropertiesInterface;
class Something implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $id;
    /**
     * @var \Symfony\Component\Uid\UuidV4
     */
    public \Symfony\Component\Uid\UuidV4 $uuid;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'uuid' => 'uuid'];
    }
}