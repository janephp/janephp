<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class MemberDetails implements AdditionalPropertiesInterface
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
     * @var string
     */
    public string $surname;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var string
     */
    public string $email;
    /**
     * @var string
     */
    public string $role;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'firstname' => 'firstname', 'lastname' => 'lastname', 'surname' => 'surname', 'description' => 'description', 'email' => 'email', 'role' => 'role'];
    }
}