<?php

namespace Jane\Generated\DigitalOcean\Model;

class UserSettings extends \ArrayObject
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
     * For Postgres clusters, set to `true` for a user with replication rights.
     * This option is not currently supported for other database engines.
     * 
     *
     * @var bool
     */
    protected $pgAllowReplication;
    /**
     * ACLs (Access Control Lists) specifying permissions on index within a OpenSearch cluster.
     *
     * @var list<UserSettingsOpensearchAclItem>
     */
    protected $opensearchAcl;
    /**
     * ACLs (Access Control Lists) specifying permissions on topics within a Kafka cluster.
     *
     * @var list<UserSettingsAclItem>
     */
    protected $acl;
    /**
     * MongoDB-specific settings for the user. This option is not currently supported for other database engines.
     *
     * @var UserSettingsMongoUserSettings
     */
    protected $mongoUserSettings;
    /**
     * For Postgres clusters, set to `true` for a user with replication rights.
     * This option is not currently supported for other database engines.
     * 
     *
     * @return bool
     */
    public function getPgAllowReplication(): bool
    {
        return $this->pgAllowReplication;
    }
    /**
    * For Postgres clusters, set to `true` for a user with replication rights.
    This option is not currently supported for other database engines.
    
    *
    * @param bool $pgAllowReplication
    *
    * @return self
    */
    public function setPgAllowReplication(bool $pgAllowReplication): self
    {
        $this->initialized['pgAllowReplication'] = true;
        $this->pgAllowReplication = $pgAllowReplication;
        return $this;
    }
    /**
     * ACLs (Access Control Lists) specifying permissions on index within a OpenSearch cluster.
     *
     * @return list<UserSettingsOpensearchAclItem>
     */
    public function getOpensearchAcl(): array
    {
        return $this->opensearchAcl;
    }
    /**
     * ACLs (Access Control Lists) specifying permissions on index within a OpenSearch cluster.
     *
     * @param list<UserSettingsOpensearchAclItem> $opensearchAcl
     *
     * @return self
     */
    public function setOpensearchAcl(array $opensearchAcl): self
    {
        $this->initialized['opensearchAcl'] = true;
        $this->opensearchAcl = $opensearchAcl;
        return $this;
    }
    /**
     * ACLs (Access Control Lists) specifying permissions on topics within a Kafka cluster.
     *
     * @return list<UserSettingsAclItem>
     */
    public function getAcl(): array
    {
        return $this->acl;
    }
    /**
     * ACLs (Access Control Lists) specifying permissions on topics within a Kafka cluster.
     *
     * @param list<UserSettingsAclItem> $acl
     *
     * @return self
     */
    public function setAcl(array $acl): self
    {
        $this->initialized['acl'] = true;
        $this->acl = $acl;
        return $this;
    }
    /**
     * MongoDB-specific settings for the user. This option is not currently supported for other database engines.
     *
     * @return UserSettingsMongoUserSettings
     */
    public function getMongoUserSettings(): UserSettingsMongoUserSettings
    {
        return $this->mongoUserSettings;
    }
    /**
     * MongoDB-specific settings for the user. This option is not currently supported for other database engines.
     *
     * @param UserSettingsMongoUserSettings $mongoUserSettings
     *
     * @return self
     */
    public function setMongoUserSettings(UserSettingsMongoUserSettings $mongoUserSettings): self
    {
        $this->initialized['mongoUserSettings'] = true;
        $this->mongoUserSettings = $mongoUserSettings;
        return $this;
    }
}