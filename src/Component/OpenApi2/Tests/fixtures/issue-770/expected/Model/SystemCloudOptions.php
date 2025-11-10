<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemCloudOptions
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
     * @var bool
     */
    protected $apCloudOnboardingEnabled;
    /**
     * @var bool
     */
    protected $isRuckusCloudOnboarded;
    /**
     * @return bool
     */
    public function getApCloudOnboardingEnabled(): bool
    {
        return $this->apCloudOnboardingEnabled;
    }
    /**
     * @param bool $apCloudOnboardingEnabled
     *
     * @return self
     */
    public function setApCloudOnboardingEnabled(bool $apCloudOnboardingEnabled): self
    {
        $this->initialized['apCloudOnboardingEnabled'] = true;
        $this->apCloudOnboardingEnabled = $apCloudOnboardingEnabled;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsRuckusCloudOnboarded(): bool
    {
        return $this->isRuckusCloudOnboarded;
    }
    /**
     * @param bool $isRuckusCloudOnboarded
     *
     * @return self
     */
    public function setIsRuckusCloudOnboarded(bool $isRuckusCloudOnboarded): self
    {
        $this->initialized['isRuckusCloudOnboarded'] = true;
        $this->isRuckusCloudOnboarded = $isRuckusCloudOnboarded;
        return $this;
    }
}