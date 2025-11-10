<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AaaTestAAAServerSingleResult
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
     * @var string
     */
    protected $aaaTesting;
    /**
     * @return string
     */
    public function getAaaTesting(): string
    {
        return $this->aaaTesting;
    }
    /**
     * @param string $aaaTesting
     *
     * @return self
     */
    public function setAaaTesting(string $aaaTesting): self
    {
        $this->initialized['aaaTesting'] = true;
        $this->aaaTesting = $aaaTesting;
        return $this;
    }
}