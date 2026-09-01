<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportDirectorsPreviousDirectorsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $gender;
    /**
     * @var string
     */
    public string $directorType;
    /**
     * @var list<string>
     */
    public array $positions;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'gender' => 'gender', 'directorType' => 'directorType', 'positions' => 'positions'];
    }
}