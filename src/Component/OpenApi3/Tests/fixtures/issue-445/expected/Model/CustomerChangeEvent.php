<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class CustomerChangeEvent extends ApplicationEvent implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $documentType;
    /**
     * Lifecycle
     *
     * @var string
     */
    public string $lifeCycle;
    public function definedProperties(): array
    {
        return ['documentType' => 'documentType', 'lifeCycle' => 'lifeCycle'];
    }
}