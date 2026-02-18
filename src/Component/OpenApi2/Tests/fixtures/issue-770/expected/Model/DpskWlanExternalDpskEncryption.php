<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpskWlanExternalDpskEncryption
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
     * Encryption method
     *
     * @var string
     */
    protected $method;
    /**
     * Encryption algorithm. This only applies to WPA2 and WPA mixed mode.
     *
     * @var string
     */
    protected $algorithm;
    /**
     * Passphrase. This only applies to WPA2 and WPA mixed mode.
     *
     * @var string
     */
    protected $passphrase;
    /**
     * Encryption mfp
     *
     * @var string
     */
    protected $mfp;
    /**
     * Encryption method
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
    /**
     * Encryption method
     *
     * @param string $method
     *
     * @return self
     */
    public function setMethod(string $method): self
    {
        $this->initialized['method'] = true;
        $this->method = $method;
        return $this;
    }
    /**
     * Encryption algorithm. This only applies to WPA2 and WPA mixed mode.
     *
     * @return string
     */
    public function getAlgorithm(): string
    {
        return $this->algorithm;
    }
    /**
     * Encryption algorithm. This only applies to WPA2 and WPA mixed mode.
     *
     * @param string $algorithm
     *
     * @return self
     */
    public function setAlgorithm(string $algorithm): self
    {
        $this->initialized['algorithm'] = true;
        $this->algorithm = $algorithm;
        return $this;
    }
    /**
     * Passphrase. This only applies to WPA2 and WPA mixed mode.
     *
     * @return string
     */
    public function getPassphrase(): string
    {
        return $this->passphrase;
    }
    /**
     * Passphrase. This only applies to WPA2 and WPA mixed mode.
     *
     * @param string $passphrase
     *
     * @return self
     */
    public function setPassphrase(string $passphrase): self
    {
        $this->initialized['passphrase'] = true;
        $this->passphrase = $passphrase;
        return $this;
    }
    /**
     * Encryption mfp
     *
     * @return string
     */
    public function getMfp(): string
    {
        return $this->mfp;
    }
    /**
     * Encryption mfp
     *
     * @param string $mfp
     *
     * @return self
     */
    public function setMfp(string $mfp): self
    {
        $this->initialized['mfp'] = true;
        $this->mfp = $mfp;
        return $this;
    }
}