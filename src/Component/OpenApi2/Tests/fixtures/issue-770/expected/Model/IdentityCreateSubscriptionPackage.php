<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityCreateSubscriptionPackage
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
     * Domain Id
     *
     * @var string
     */
    protected $domainId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * Expiration interval
     *
     * @var string
     */
    protected $expirationInterval;
    /**
     * Expiration value
     *
     * @var int
     */
    protected $expirationValue;
    /**
     * Domain Id
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain Id
     *
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
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
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Expiration interval
     *
     * @return string
     */
    public function getExpirationInterval(): string
    {
        return $this->expirationInterval;
    }
    /**
     * Expiration interval
     *
     * @param string $expirationInterval
     *
     * @return self
     */
    public function setExpirationInterval(string $expirationInterval): self
    {
        $this->initialized['expirationInterval'] = true;
        $this->expirationInterval = $expirationInterval;
        return $this;
    }
    /**
     * Expiration value
     *
     * @return int
     */
    public function getExpirationValue(): int
    {
        return $this->expirationValue;
    }
    /**
     * Expiration value
     *
     * @param int $expirationValue
     *
     * @return self
     */
    public function setExpirationValue(int $expirationValue): self
    {
        $this->initialized['expirationValue'] = true;
        $this->expirationValue = $expirationValue;
        return $this;
    }
}