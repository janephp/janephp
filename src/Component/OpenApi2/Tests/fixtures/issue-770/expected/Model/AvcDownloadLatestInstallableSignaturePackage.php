<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AvcDownloadLatestInstallableSignaturePackage
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
     * The message of current download process
     *
     * @var string
     */
    protected $message;
    /**
     * The state of current download process
     *
     * @var string
     */
    protected $state;
    /**
     * @var AvcLatestInstallableSignaturePackage
     */
    protected $latestInstallable;
    /**
     * The message of current download process
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * The message of current download process
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * The state of current download process
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * The state of current download process
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * @return AvcLatestInstallableSignaturePackage
     */
    public function getLatestInstallable(): AvcLatestInstallableSignaturePackage
    {
        return $this->latestInstallable;
    }
    /**
     * @param AvcLatestInstallableSignaturePackage $latestInstallable
     *
     * @return self
     */
    public function setLatestInstallable(AvcLatestInstallableSignaturePackage $latestInstallable): self
    {
        $this->initialized['latestInstallable'] = true;
        $this->latestInstallable = $latestInstallable;
        return $this;
    }
}