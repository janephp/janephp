<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class PeopleSearchSuccessResult implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $totalSize;
    /**
     * @var list<PeopleSearchSuccessResultDirectorsItem>
     */
    public array $directors;
    public function definedProperties(): array
    {
        return ['totalSize' => 'totalSize', 'directors' => 'directors'];
    }
}