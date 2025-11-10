<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonSshPublicKeyRef
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
    protected $keyLabel;
    /**
     * @var string
     */
    protected $keyContent;
    /**
     * @var string
     */
    protected $fingerprint;
    /**
     * @return string
     */
    public function getKeyLabel(): string
    {
        return $this->keyLabel;
    }
    /**
     * @param string $keyLabel
     *
     * @return self
     */
    public function setKeyLabel(string $keyLabel): self
    {
        $this->initialized['keyLabel'] = true;
        $this->keyLabel = $keyLabel;
        return $this;
    }
    /**
     * @return string
     */
    public function getKeyContent(): string
    {
        return $this->keyContent;
    }
    /**
     * @param string $keyContent
     *
     * @return self
     */
    public function setKeyContent(string $keyContent): self
    {
        $this->initialized['keyContent'] = true;
        $this->keyContent = $keyContent;
        return $this;
    }
    /**
     * @return string
     */
    public function getFingerprint(): string
    {
        return $this->fingerprint;
    }
    /**
     * @param string $fingerprint
     *
     * @return self
     */
    public function setFingerprint(string $fingerprint): self
    {
        $this->initialized['fingerprint'] = true;
        $this->fingerprint = $fingerprint;
        return $this;
    }
}