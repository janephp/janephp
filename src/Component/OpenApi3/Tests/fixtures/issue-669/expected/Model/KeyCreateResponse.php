<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class KeyCreateResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The secret key used to access the bucket. We return secret keys only once upon creation. Make sure to copy the key and securely store it.
     *
     * @var string
     */
    public string $secretKey;
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
        return ['secretKey' => 'secret_key', 'name' => 'name', 'grants' => 'grants', 'accessKey' => 'access_key', 'createdAt' => 'created_at'];
    }
}