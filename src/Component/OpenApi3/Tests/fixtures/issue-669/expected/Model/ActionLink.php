<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ActionLink implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique numeric ID that can be used to identify and reference an action.
     *
     * @var int
     */
    public int $id;
    /**
     * A string specifying the type of the related action.
     *
     * @var string
     */
    public string $rel;
    /**
     * A URL that can be used to access the action.
     *
     * @var string
     */
    public string $href;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'rel' => 'rel', 'href' => 'href'];
    }
}