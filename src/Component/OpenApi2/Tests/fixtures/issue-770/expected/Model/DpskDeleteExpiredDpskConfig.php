<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpskDeleteExpiredDpskConfig
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
     * Delete expired DPSK interval of the Zone.
     *
     * @var string
     */
    protected $deleteExpiredDpsk;
    /**
     * Delete expired DPSK interval of the Zone.
     *
     * @return string
     */
    public function getDeleteExpiredDpsk(): string
    {
        return $this->deleteExpiredDpsk;
    }
    /**
     * Delete expired DPSK interval of the Zone.
     *
     * @param string $deleteExpiredDpsk
     *
     * @return self
     */
    public function setDeleteExpiredDpsk(string $deleteExpiredDpsk): self
    {
        $this->initialized['deleteExpiredDpsk'] = true;
        $this->deleteExpiredDpsk = $deleteExpiredDpsk;
        return $this;
    }
}