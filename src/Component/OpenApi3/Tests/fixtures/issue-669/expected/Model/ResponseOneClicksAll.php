<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseOneClicksAll extends \ArrayObject
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
     * @var list<OneClicks>
     */
    protected $n1Clicks;
    /**
     * @return list<OneClicks>
     */
    public function get1Clicks(): array
    {
        return $this->n1Clicks;
    }
    /**
     * @param list<OneClicks> $n1Clicks
     *
     * @return self
     */
    public function set1Clicks(array $n1Clicks): self
    {
        $this->initialized['n1Clicks'] = true;
        $this->n1Clicks = $n1Clicks;
        return $this;
    }
}