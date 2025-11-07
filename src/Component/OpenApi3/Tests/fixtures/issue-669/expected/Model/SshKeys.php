<?php

namespace Jane\Generated\DigitalOcean\Model;

class SshKeys extends \ArrayObject
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
     * A unique identification number for this key. Can be used to embed a  specific SSH key into a Droplet.
     *
     * @var int
     */
    protected $id;
    /**
     * A unique identifier that differentiates this key from other keys using  a format that SSH recognizes. The fingerprint is created when the key is added to your account.
     *
     * @var string
     */
    protected $fingerprint;
    /**
     * The entire public key string that was uploaded. Embedded into the root user's `authorized_keys` file if you include this key during Droplet creation.
     *
     * @var string
     */
    protected $publicKey;
    /**
     * A human-readable display name for this key, used to easily identify the SSH keys when they are displayed.
     *
     * @var string
     */
    protected $name;
    /**
     * A unique identification number for this key. Can be used to embed a  specific SSH key into a Droplet.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * A unique identification number for this key. Can be used to embed a  specific SSH key into a Droplet.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * A unique identifier that differentiates this key from other keys using  a format that SSH recognizes. The fingerprint is created when the key is added to your account.
     *
     * @return string
     */
    public function getFingerprint(): string
    {
        return $this->fingerprint;
    }
    /**
     * A unique identifier that differentiates this key from other keys using  a format that SSH recognizes. The fingerprint is created when the key is added to your account.
     *
     * @param string $fingerprint
     *
     * @return self
     */
    public function setFingerprint(string $fingerprint): self
    {
        $this->initialized['fingerprint'] = true;
        $this->fingerprint = $fingerprint;
        return $this;
    }
    /**
     * The entire public key string that was uploaded. Embedded into the root user's `authorized_keys` file if you include this key during Droplet creation.
     *
     * @return string
     */
    public function getPublicKey(): string
    {
        return $this->publicKey;
    }
    /**
     * The entire public key string that was uploaded. Embedded into the root user's `authorized_keys` file if you include this key during Droplet creation.
     *
     * @param string $publicKey
     *
     * @return self
     */
    public function setPublicKey(string $publicKey): self
    {
        $this->initialized['publicKey'] = true;
        $this->publicKey = $publicKey;
        return $this;
    }
    /**
     * A human-readable display name for this key, used to easily identify the SSH keys when they are displayed.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * A human-readable display name for this key, used to easily identify the SSH keys when they are displayed.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}