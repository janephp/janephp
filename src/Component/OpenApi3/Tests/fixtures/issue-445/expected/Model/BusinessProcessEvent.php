<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class BusinessProcessEvent extends ApplicationEvent implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $businessProcessId;
    /**
     * @var string|null
     */
    public ?string $lifeCycle;
    /**
     * @var string|null
     */
    public ?string $state;
    public function definedProperties(): array
    {
        return ['businessProcessId' => 'businessProcessId', 'lifeCycle' => 'lifeCycle', 'state' => 'state'];
    }
}