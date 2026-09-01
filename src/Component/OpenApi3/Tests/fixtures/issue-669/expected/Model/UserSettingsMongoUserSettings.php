<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class UserSettingsMongoUserSettings implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A list of databases to which the user should have access. When the database is set to `admin`, the user will have access to all databases based on the user's role i.e. a user with the role `readOnly` assigned to the `admin` database will have read access to all databases.
     *
     * @var list<string>
     */
    public array $databases;
    /**
     * The role to assign to the user with each role mapping to a MongoDB built-in role.  `readOnly` maps to a [read](https://www.mongodb.com/docs/manual/reference/built-in-roles/#mongodb-authrole-read) role. `readWrite` maps to a [readWrite](https://www.mongodb.com/docs/manual/reference/built-in-roles/#mongodb-authrole-readWrite) role. `dbAdmin` maps to a [dbAdmin](https://www.mongodb.com/docs/manual/reference/built-in-roles/#mongodb-authrole-dbAdmin) role.
     *
     * @var string
     */
    public string $role;
    public function definedProperties(): array
    {
        return ['databases' => 'databases', 'role' => 'role'];
    }
}