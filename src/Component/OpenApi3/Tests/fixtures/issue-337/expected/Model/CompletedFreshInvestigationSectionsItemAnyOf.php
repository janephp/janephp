<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class CompletedFreshInvestigationSectionsItemAnyOf implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $content;
    /**
     * @var string
     */
    public string $contentType;
    /**
     * @var string
     */
    public string $creationDate;
    /**
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['content' => 'content', 'contentType' => 'contentType', 'creationDate' => 'creationDate', 'name' => 'name'];
    }
}