<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Account implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $id;
    /**
     * @var string
     */
    public string $firstname;
    /**
     * @var string
     */
    public string $lastname;
    /**
     * @var Country|null
     */
    public ?Country $countryOfBirth;
    /**
     * @var Country
     */
    public Country $country;
    /**
     * @var Country|list<Country>|null
     */
    public $nationality;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'firstname' => 'firstname', 'lastname' => 'lastname', 'countryOfBirth' => 'countryOfBirth', 'country' => 'country', 'nationality' => 'nationality'];
    }
}