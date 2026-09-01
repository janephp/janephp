<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class EnqueueTaggingAction extends BusinessRuleAction implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Options to use while tagging.
     *
     * @var TaggingOptionsBase|null
     */
    public ?TaggingOptionsBase $options;
    public function definedProperties(): array
    {
        return ['options' => 'options'];
    }
}