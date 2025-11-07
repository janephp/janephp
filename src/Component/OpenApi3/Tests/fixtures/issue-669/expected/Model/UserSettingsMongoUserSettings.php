<?php

namespace Jane\Generated\DigitalOcean\Model;

class UserSettingsMongoUserSettings extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A list of databases to which the user should have access. When the database is set to `admin`, the user will have access to all databases based on the user's role i.e. a user with the role `readOnly` assigned to the `admin` database will have read access to all databases.
     *
     * @var list<string>
     */
    protected $databases;
    /**
     * The role to assign to the user with each role mapping to a MongoDB built-in role.  `readOnly` maps to a [read](https://www.mongodb.com/docs/manual/reference/built-in-roles/#mongodb-authrole-read) role. `readWrite` maps to a [readWrite](https://www.mongodb.com/docs/manual/reference/built-in-roles/#mongodb-authrole-readWrite) role. `dbAdmin` maps to a [dbAdmin](https://www.mongodb.com/docs/manual/reference/built-in-roles/#mongodb-authrole-dbAdmin) role.
     *
     * @var string
     */
    protected $role;
    /**
     * A list of databases to which the user should have access. When the database is set to `admin`, the user will have access to all databases based on the user's role i.e. a user with the role `readOnly` assigned to the `admin` database will have read access to all databases.
     *
     * @return list<string>
     */
    public function getDatabases(): array
    {
        return $this->databases;
    }
    /**
     * A list of databases to which the user should have access. When the database is set to `admin`, the user will have access to all databases based on the user's role i.e. a user with the role `readOnly` assigned to the `admin` database will have read access to all databases.
     *
     * @param list<string> $databases
     *
     * @return self
     */
    public function setDatabases(array $databases): self
    {
        $this->initialized['databases'] = true;
        $this->databases = $databases;
        return $this;
    }
    /**
     * The role to assign to the user with each role mapping to a MongoDB built-in role.  `readOnly` maps to a [read](https://www.mongodb.com/docs/manual/reference/built-in-roles/#mongodb-authrole-read) role. `readWrite` maps to a [readWrite](https://www.mongodb.com/docs/manual/reference/built-in-roles/#mongodb-authrole-readWrite) role. `dbAdmin` maps to a [dbAdmin](https://www.mongodb.com/docs/manual/reference/built-in-roles/#mongodb-authrole-dbAdmin) role.
     *
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }
    /**
     * The role to assign to the user with each role mapping to a MongoDB built-in role.  `readOnly` maps to a [read](https://www.mongodb.com/docs/manual/reference/built-in-roles/#mongodb-authrole-read) role. `readWrite` maps to a [readWrite](https://www.mongodb.com/docs/manual/reference/built-in-roles/#mongodb-authrole-readWrite) role. `dbAdmin` maps to a [dbAdmin](https://www.mongodb.com/docs/manual/reference/built-in-roles/#mongodb-authrole-dbAdmin) role.
     *
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
}