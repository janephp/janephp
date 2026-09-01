<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class UserSettings implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * For Postgres clusters, set to `true` for a user with replication rights.
     * This option is not currently supported for other database engines.
     * 
     *
     * @var bool
     */
    public bool $pgAllowReplication;
    /**
     * ACLs (Access Control Lists) specifying permissions on index within a OpenSearch cluster.
     *
     * @var list<UserSettingsOpensearchAclItem>
     */
    public array $opensearchAcl;
    /**
     * ACLs (Access Control Lists) specifying permissions on topics within a Kafka cluster.
     *
     * @var list<UserSettingsAclItem>
     */
    public array $acl;
    /**
     * MongoDB-specific settings for the user. This option is not currently supported for other database engines.
     *
     * @var UserSettingsMongoUserSettings
     */
    public UserSettingsMongoUserSettings $mongoUserSettings;
    public function definedProperties(): array
    {
        return ['pgAllowReplication' => 'pg_allow_replication', 'opensearchAcl' => 'opensearch_acl', 'acl' => 'acl', 'mongoUserSettings' => 'mongo_user_settings'];
    }
}