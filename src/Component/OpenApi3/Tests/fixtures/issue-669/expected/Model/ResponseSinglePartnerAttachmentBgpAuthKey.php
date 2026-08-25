<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseSinglePartnerAttachmentBgpAuthKey implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    public function definedProperties(): array
    {
        return ['bgpAuthKey' => ['bgp_auth_key', 'getBgpAuthKey', 'setBgpAuthKey']];
    }
}