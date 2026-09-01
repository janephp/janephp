<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class BusinessProcessDetails extends BusinessProcess implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Details for the business process.
     *
     * @var BusinessProcessDetailsDataBase|null
     */
    public ?BusinessProcessDetailsDataBase $details;
    public function definedProperties(): array
    {
        return ['details' => 'details'];
    }
}