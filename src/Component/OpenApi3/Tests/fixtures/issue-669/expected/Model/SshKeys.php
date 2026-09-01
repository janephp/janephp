<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class SshKeys implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique identification number for this key. Can be used to embed a specific SSH key into a Droplet.
     *
     * @var int
     */
    public int $id;
    /**
     * A unique identifier that differentiates this key from other keys using a format that SSH recognizes. The fingerprint is created when the key is added to your account.
     *
     * @var string
     */
    public string $fingerprint;
    /**
     * The entire public key string that was uploaded. Embedded into the root user's `authorized_keys` file if you include this key during Droplet creation.
     *
     * @var string
     */
    public string $publicKey;
    /**
     * A human-readable display name for this key, used to easily identify the SSH keys when they are displayed.
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'fingerprint' => 'fingerprint', 'publicKey' => 'public_key', 'name' => 'name'];
    }
}