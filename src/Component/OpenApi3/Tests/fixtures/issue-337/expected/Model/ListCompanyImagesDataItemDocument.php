<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ListCompanyImagesDataItemDocument implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $imageType;
    /**
     * @var string
     */
    public string $imageCode;
    /**
     * @var string
     */
    public string $description;
    public function definedProperties(): array
    {
        return ['imageType' => 'imageType', 'imageCode' => 'imageCode', 'description' => 'description'];
    }
}