<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ListCompanyImages implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $totalSize;
    /**
     * @var list<ListCompanyImagesDataItem>
     */
    public array $data;
    public function definedProperties(): array
    {
        return ['totalSize' => 'totalSize', 'data' => 'data'];
    }
}