<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class UserSettingsAclItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An identifier for the ACL. Will be computed after the ACL is created/updated.
     *
     * @var string
     */
    public string $id;
    /**
     * A regex for matching the topic(s) that this ACL should apply to.
     *
     * @var string
     */
    public string $topic;
    /**
     * Permission set applied to the ACL. 'consume' allows for messages to be consumed from the topic. 'produce' allows for messages to be published to the topic. 'produceconsume' allows for both 'consume' and 'produce' permission. 'admin' allows for 'produceconsume' as well as any operations to administer the topic (delete, update).
     *
     * @var string
     */
    public string $permission;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'topic' => 'topic', 'permission' => 'permission'];
    }
}