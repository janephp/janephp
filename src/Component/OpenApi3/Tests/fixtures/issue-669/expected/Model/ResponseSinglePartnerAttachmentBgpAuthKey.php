<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseSinglePartnerAttachmentBgpAuthKey extends \ArrayObject
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
     * @var array<string, mixed>
     */
    protected $bgpAuthKey;
    /**
     * @return array<string, mixed>
     */
    public function getBgpAuthKey(): iterable
    {
        return $this->bgpAuthKey;
    }
    /**
     * @param array<string, mixed> $bgpAuthKey
     *
     * @return self
     */
    public function setBgpAuthKey(iterable $bgpAuthKey): self
    {
        $this->initialized['bgpAuthKey'] = true;
        $this->bgpAuthKey = $bgpAuthKey;
        return $this;
    }
}