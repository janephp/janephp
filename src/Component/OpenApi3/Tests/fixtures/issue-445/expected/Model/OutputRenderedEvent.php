<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class OutputRenderedEvent extends ApplicationEvent implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $outputId;
    /**
     * @var string|null
     */
    public ?string $contentId;
    /**
     * @var string|null
     */
    public ?string $outputFormatId;
    /**
     * @var string
     */
    public string $renderingState;
    public function definedProperties(): array
    {
        return ['outputId' => 'outputId', 'contentId' => 'contentId', 'outputFormatId' => 'outputFormatId', 'renderingState' => 'renderingState'];
    }
}