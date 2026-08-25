<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class UserSettingsAclItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * An identifier for the ACL. Will be computed after the ACL is created/updated.
     *
     * @var string
     */
    protected $id;
    /**
     * A regex for matching the topic(s) that this ACL should apply to.
     *
     * @var string
     */
    protected $topic;
    /**
     * Permission set applied to the ACL. 'consume' allows for messages to be consumed from the topic. 'produce' allows for messages to be published to the topic. 'produceconsume' allows for both 'consume' and 'produce' permission. 'admin' allows for 'produceconsume' as well as any operations to administer the topic (delete, update).
     *
     * @var string
     */
    protected $permission;
    /**
     * An identifier for the ACL. Will be computed after the ACL is created/updated.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * An identifier for the ACL. Will be computed after the ACL is created/updated.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * A regex for matching the topic(s) that this ACL should apply to.
     *
     * @return string
     */
    public function getTopic(): string
    {
        return $this->topic;
    }
    /**
     * A regex for matching the topic(s) that this ACL should apply to.
     *
     * @param string $topic
     *
     * @return self
     */
    public function setTopic(string $topic): self
    {
        $this->initialized['topic'] = true;
        $this->topic = $topic;
        return $this;
    }
    /**
     * Permission set applied to the ACL. 'consume' allows for messages to be consumed from the topic. 'produce' allows for messages to be published to the topic. 'produceconsume' allows for both 'consume' and 'produce' permission. 'admin' allows for 'produceconsume' as well as any operations to administer the topic (delete, update).
     *
     * @return string
     */
    public function getPermission(): string
    {
        return $this->permission;
    }
    /**
     * Permission set applied to the ACL. 'consume' allows for messages to be consumed from the topic. 'produce' allows for messages to be published to the topic. 'produceconsume' allows for both 'consume' and 'produce' permission. 'admin' allows for 'produceconsume' as well as any operations to administer the topic (delete, update).
     *
     * @param string $permission
     *
     * @return self
     */
    public function setPermission(string $permission): self
    {
        $this->initialized['permission'] = true;
        $this->permission = $permission;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'topic' => ['topic', 'getTopic', 'setTopic'], 'permission' => ['permission', 'getPermission', 'setPermission']];
    }
}