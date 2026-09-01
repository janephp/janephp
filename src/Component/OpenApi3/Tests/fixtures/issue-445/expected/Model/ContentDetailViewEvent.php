<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ContentDetailViewEvent extends ApplicationEvent implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<string>|null
     */
    public ?array $contentIds;
    public function definedProperties(): array
    {
        return ['contentIds' => 'contentIds'];
    }
}