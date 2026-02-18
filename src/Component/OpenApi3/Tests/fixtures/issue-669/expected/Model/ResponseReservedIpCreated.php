<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseReservedIpCreated extends \ArrayObject
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
     * @var ReservedIp
     */
    protected $reservedIp;
    /**
     * @var ResponseReservedIpCreatedLinks
     */
    protected $links;
    /**
     * @return ReservedIp
     */
    public function getReservedIp(): ReservedIp
    {
        return $this->reservedIp;
    }
    /**
     * @param ReservedIp $reservedIp
     *
     * @return self
     */
    public function setReservedIp(ReservedIp $reservedIp): self
    {
        $this->initialized['reservedIp'] = true;
        $this->reservedIp = $reservedIp;
        return $this;
    }
    /**
     * @return ResponseReservedIpCreatedLinks
     */
    public function getLinks(): ResponseReservedIpCreatedLinks
    {
        return $this->links;
    }
    /**
     * @param ResponseReservedIpCreatedLinks $links
     *
     * @return self
     */
    public function setLinks(ResponseReservedIpCreatedLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
}