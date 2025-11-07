<?php

namespace Jane\Generated\DigitalOcean\Model;

class NfsListResponse extends \ArrayObject
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
}