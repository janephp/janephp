<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppsImageSourceSpecDeployOnPush extends \ArrayObject
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
     * Whether to automatically deploy new images. Can only be used for images hosted in DOCR and can only be used with an image tag, not a specific digest.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * Whether to automatically deploy new images. Can only be used for images hosted in DOCR and can only be used with an image tag, not a specific digest.
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * Whether to automatically deploy new images. Can only be used for images hosted in DOCR and can only be used with an image tag, not a specific digest.
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
}