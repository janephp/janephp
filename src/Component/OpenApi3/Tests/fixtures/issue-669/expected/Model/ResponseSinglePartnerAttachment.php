<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseSinglePartnerAttachment extends \ArrayObject
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
     * @var PartnerAttachment
     */
    protected $partnerAttachment;
    /**
     * @return PartnerAttachment
     */
    public function getPartnerAttachment(): PartnerAttachment
    {
        return $this->partnerAttachment;
    }
    /**
     * @param PartnerAttachment $partnerAttachment
     *
     * @return self
     */
    public function setPartnerAttachment(PartnerAttachment $partnerAttachment): self
    {
        $this->initialized['partnerAttachment'] = true;
        $this->partnerAttachment = $partnerAttachment;
        return $this;
    }
}