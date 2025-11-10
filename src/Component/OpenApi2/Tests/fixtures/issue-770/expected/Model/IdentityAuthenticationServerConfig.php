<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityAuthenticationServerConfig
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
     * server id
     *
     * @var string
     */
    protected $id;
    /**
     * server name
     *
     * @var string
     */
    protected $name;
    /**
     * server type
     *
     * @var string
     */
    protected $type;
    /**
     * Is local server
     *
     * @var bool
     */
    protected $local;
    /**
     * Authentication server type
     *
     * @var string
     */
    protected $aUTHENTICATIONSERVERTYPE;
    /**
     * Authentication server name
     *
     * @var string
     */
    protected $aUTHENTICATIONSERVERNAME;
    /**
     * Authentication server id
     *
     * @var string
     */
    protected $aUTHENTICATIONSERVERID;
    /**
     * server id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * server id
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
     * server name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * server name
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
     * server type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * server type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Is local server
     *
     * @return bool
     */
    public function getLocal(): bool
    {
        return $this->local;
    }
    /**
     * Is local server
     *
     * @param bool $local
     *
     * @return self
     */
    public function setLocal(bool $local): self
    {
        $this->initialized['local'] = true;
        $this->local = $local;
        return $this;
    }
    /**
     * Authentication server type
     *
     * @return string
     */
    public function getAUTHENTICATIONSERVERTYPE(): string
    {
        return $this->aUTHENTICATIONSERVERTYPE;
    }
    /**
     * Authentication server type
     *
     * @param string $aUTHENTICATIONSERVERTYPE
     *
     * @return self
     */
    public function setAUTHENTICATIONSERVERTYPE(string $aUTHENTICATIONSERVERTYPE): self
    {
        $this->initialized['aUTHENTICATIONSERVERTYPE'] = true;
        $this->aUTHENTICATIONSERVERTYPE = $aUTHENTICATIONSERVERTYPE;
        return $this;
    }
    /**
     * Authentication server name
     *
     * @return string
     */
    public function getAUTHENTICATIONSERVERNAME(): string
    {
        return $this->aUTHENTICATIONSERVERNAME;
    }
    /**
     * Authentication server name
     *
     * @param string $aUTHENTICATIONSERVERNAME
     *
     * @return self
     */
    public function setAUTHENTICATIONSERVERNAME(string $aUTHENTICATIONSERVERNAME): self
    {
        $this->initialized['aUTHENTICATIONSERVERNAME'] = true;
        $this->aUTHENTICATIONSERVERNAME = $aUTHENTICATIONSERVERNAME;
        return $this;
    }
    /**
     * Authentication server id
     *
     * @return string
     */
    public function getAUTHENTICATIONSERVERID(): string
    {
        return $this->aUTHENTICATIONSERVERID;
    }
    /**
     * Authentication server id
     *
     * @param string $aUTHENTICATIONSERVERID
     *
     * @return self
     */
    public function setAUTHENTICATIONSERVERID(string $aUTHENTICATIONSERVERID): self
    {
        $this->initialized['aUTHENTICATIONSERVERID'] = true;
        $this->aUTHENTICATIONSERVERID = $aUTHENTICATIONSERVERID;
        return $this;
    }
}