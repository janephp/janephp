<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class CompliancePreDefinedSearchesPredefinedSearchesItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $categoryName;
    /**
     * @var string
     */
    public string $productName;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var int
     */
    public int $confidence;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'categoryName' => 'categoryName', 'productName' => 'productName', 'description' => 'description', 'confidence' => 'confidence'];
    }
}