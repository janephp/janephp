<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityModifyGuestPass
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
     * Is Disabled
     *
     * @var string
     */
    protected $isDisabled;
    /**
     * Is Disabled
     *
     * @return string
     */
    public function getIsDisabled(): string
    {
        return $this->isDisabled;
    }
    /**
     * Is Disabled
     *
     * @param string $isDisabled
     *
     * @return self
     */
    public function setIsDisabled(string $isDisabled): self
    {
        $this->initialized['isDisabled'] = true;
        $this->isDisabled = $isDisabled;
        return $this;
    }
}