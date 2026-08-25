<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NfsListResponse implements AdditionalPropertiesInterface
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
     * @var list<NfsResponse>
     */
    protected $shares;
    /**
     * @return list<NfsResponse>
     */
    public function getShares(): array
    {
        return $this->shares;
    }
    /**
     * @param list<NfsResponse> $shares
     *
     * @return self
     */
    public function setShares(array $shares): self
    {
        $this->initialized['shares'] = true;
        $this->shares = $shares;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['shares' => ['shares', 'getShares', 'setShares']];
    }
}