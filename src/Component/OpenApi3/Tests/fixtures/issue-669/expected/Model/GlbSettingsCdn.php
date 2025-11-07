<?php

namespace Jane\Generated\DigitalOcean\Model;

class GlbSettingsCdn extends \ArrayObject
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
     * A boolean flag to enable CDN caching.
     *
     * @var bool
     */
    protected $isEnabled;
    /**
     * A boolean flag to enable CDN caching.
     *
     * @return bool
     */
    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }
    /**
     * A boolean flag to enable CDN caching.
     *
     * @param bool $isEnabled
     *
     * @return self
     */
    public function setIsEnabled(bool $isEnabled): self
    {
        $this->initialized['isEnabled'] = true;
        $this->isEnabled = $isEnabled;
        return $this;
    }
}