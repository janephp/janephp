<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class XmpWritebackCompletedEvent extends ApplicationEvent implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $outputDocId;
    public function definedProperties(): array
    {
        return ['outputDocId' => 'outputDocId'];
    }
}