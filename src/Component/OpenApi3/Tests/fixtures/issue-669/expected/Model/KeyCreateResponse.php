<?php

namespace Jane\Generated\DigitalOcean\Model;

class KeyCreateResponse extends \ArrayObject
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
     * The secret key used to access the bucket. We return secret keys only once upon creation. Make sure to copy the key and securely store it.
     *
     * @var string
     */
    protected $secretKey;
    /**
     * The access key's name.
     *
     * @var string
     */
    protected $name;
    /**
     * The list of permissions for the access key.
     *
     * @var list<Grant>
     */
    protected $grants = array();
    /**
     * The Access Key ID used to access a bucket.
     *
     * @var string
     */
    protected $accessKey;
    /**
     * The date and time the key was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * The secret key used to access the bucket. We return secret keys only once upon creation. Make sure to copy the key and securely store it.
     *
     * @return string
     */
    public function getSecretKey(): string
    {
        return $this->secretKey;
    }
    /**
     * The secret key used to access the bucket. We return secret keys only once upon creation. Make sure to copy the key and securely store it.
     *
     * @param string $secretKey
     *
     * @return self
     */
    public function setSecretKey(string $secretKey): self
    {
        $this->initialized['secretKey'] = true;
        $this->secretKey = $secretKey;
        return $this;
    }
    /**
     * The access key's name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The access key's name.
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
    /**
     * The list of permissions for the access key.
     *
     * @return list<Grant>
     */
    public function getGrants(): array
    {
        return $this->grants;
    }
    /**
     * The list of permissions for the access key.
     *
     * @param list<Grant> $grants
     *
     * @return self
     */
    public function setGrants(array $grants): self
    {
        $this->initialized['grants'] = true;
        $this->grants = $grants;
        return $this;
    }
    /**
     * The Access Key ID used to access a bucket.
     *
     * @return string
     */
    public function getAccessKey(): string
    {
        return $this->accessKey;
    }
    /**
     * The Access Key ID used to access a bucket.
     *
     * @param string $accessKey
     *
     * @return self
     */
    public function setAccessKey(string $accessKey): self
    {
        $this->initialized['accessKey'] = true;
        $this->accessKey = $accessKey;
        return $this;
    }
    /**
     * The date and time the key was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date and time the key was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
}