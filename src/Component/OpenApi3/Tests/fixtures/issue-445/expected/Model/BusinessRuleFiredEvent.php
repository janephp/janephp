<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class BusinessRuleFiredEvent extends ApplicationEvent implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<BusinessRuleFiredEventDetail>|null
     */
    public ?array $details;
    public function definedProperties(): array
    {
        return ['details' => 'details'];
    }
}