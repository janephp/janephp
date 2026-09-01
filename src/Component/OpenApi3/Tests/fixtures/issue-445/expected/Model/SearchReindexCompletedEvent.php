<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class SearchReindexCompletedEvent extends ApplicationEvent implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $searchIndex;
    /**
     * @var int
     */
    public int $items;
    /**
     * @var string
     */
    public string $duration;
    public function definedProperties(): array
    {
        return ['searchIndex' => 'searchIndex', 'items' => 'items', 'duration' => 'duration'];
    }
}