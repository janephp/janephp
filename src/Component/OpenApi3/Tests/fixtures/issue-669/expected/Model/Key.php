<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Key implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The access key's name.
     *
     * @var string
     */
    public string $name;
    /**
     * The list of permissions for the access key.
     *
     * @var list<Grant>
     */
    public array $grants = array();
    /**
     * The Access Key ID used to access a bucket.
     *
     * @var string
     */
    public string $accessKey;
    /**
     * The date and time the key was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'grants' => 'grants', 'accessKey' => 'access_key', 'createdAt' => 'created_at'];
    }
}