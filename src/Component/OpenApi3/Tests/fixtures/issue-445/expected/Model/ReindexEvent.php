<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ReindexEvent extends ApplicationEvent implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $indexId;
    /**
     * @var string
     */
    public string $state;
    public function definedProperties(): array
    {
        return ['indexId' => 'indexId', 'state' => 'state'];
    }
}