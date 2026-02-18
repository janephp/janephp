<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class GdprReport
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
     * Client mac
     *
     * @var string
     */
    protected $clientMac;
    /**
     * Request action
     *
     * @var string
     */
    protected $action;
    /**
     * @var GdprFtp
     */
    protected $ftp;
    /**
     * Client mac
     *
     * @return string
     */
    public function getClientMac(): string
    {
        return $this->clientMac;
    }
    /**
     * Client mac
     *
     * @param string $clientMac
     *
     * @return self
     */
    public function setClientMac(string $clientMac): self
    {
        $this->initialized['clientMac'] = true;
        $this->clientMac = $clientMac;
        return $this;
    }
    /**
     * Request action
     *
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }
    /**
     * Request action
     *
     * @param string $action
     *
     * @return self
     */
    public function setAction(string $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;
        return $this;
    }
    /**
     * @return GdprFtp
     */
    public function getFtp(): GdprFtp
    {
        return $this->ftp;
    }
    /**
     * @param GdprFtp $ftp
     *
     * @return self
     */
    public function setFtp(GdprFtp $ftp): self
    {
        $this->initialized['ftp'] = true;
        $this->ftp = $ftp;
        return $this;
    }
}