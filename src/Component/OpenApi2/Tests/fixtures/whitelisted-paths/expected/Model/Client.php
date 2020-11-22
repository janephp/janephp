<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class Client
{
    /**
     * Unique ID for the client.
     *
     * @var int
     */
    protected $id;
    /**
     * A textual description of the client.
     *
     * @var string
     */
    protected $name;
    /**
     * Whether the client is active or archived.
     *
     * @var bool
     */
    protected $isActive;
    /**
     * The physical address for the client.
     *
     * @var string
     */
    protected $address;
    /**
     * Used to build a URL to your client’s invoice dashboard:https://{ACCOUNT_SUBDOMAIN}.harvestapp.com/client/invoices/{statement_key}
     *
     * @var string
     */
    protected $statementKey;
    /**
     * The currency code associated with this client.
     *
     * @var string
     */
    protected $currency;
    /**
     * Date and time the client was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Date and time the client was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Unique ID for the client.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique ID for the client.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * A textual description of the client.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * A textual description of the client.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Whether the client is active or archived.
     *
     * @return bool
     */
    public function getIsActive() : bool
    {
        return $this->isActive;
    }
    /**
     * Whether the client is active or archived.
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive) : self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * The physical address for the client.
     *
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }
    /**
     * The physical address for the client.
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Used to build a URL to your client’s invoice dashboard:https://{ACCOUNT_SUBDOMAIN}.harvestapp.com/client/invoices/{statement_key}
     *
     * @return string
     */
    public function getStatementKey() : string
    {
        return $this->statementKey;
    }
    /**
     * Used to build a URL to your client’s invoice dashboard:https://{ACCOUNT_SUBDOMAIN}.harvestapp.com/client/invoices/{statement_key}
     *
     * @param string $statementKey
     *
     * @return self
     */
    public function setStatementKey(string $statementKey) : self
    {
        $this->statementKey = $statementKey;
        return $this;
    }
    /**
     * The currency code associated with this client.
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * The currency code associated with this client.
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency) : self
    {
        $this->currency = $currency;
        return $this;
    }
    /**
     * Date and time the client was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the client was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Date and time the client was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the client was last updated.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}