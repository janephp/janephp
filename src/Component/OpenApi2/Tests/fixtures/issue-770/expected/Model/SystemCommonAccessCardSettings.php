<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemCommonAccessCardSettings
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
    protected $cacAuthEnabled;
    /**
     * @var string
     */
    protected $cacAuthOcspServerUri;
    /**
     * The Trusted CA Certificate profile UUID for CAC Login
     *
     * @var string
     */
    protected $cacAuthRootCACertificate;
    /**
     * @var string
     */
    protected $cacAuthUserName;
    /**
     * The Admin AAA profile UUID for CAC Login
     *
     * @var string
     */
    protected $cacAuthAaaServer;
    /**
     * @return bool
     */
    public function getCacAuthEnabled(): bool
    {
        return $this->cacAuthEnabled;
    }
    /**
     * @param bool $cacAuthEnabled
     *
     * @return self
     */
    public function setCacAuthEnabled(bool $cacAuthEnabled): self
    {
        $this->initialized['cacAuthEnabled'] = true;
        $this->cacAuthEnabled = $cacAuthEnabled;
        return $this;
    }
    /**
     * @return string
     */
    public function getCacAuthOcspServerUri(): string
    {
        return $this->cacAuthOcspServerUri;
    }
    /**
     * @param string $cacAuthOcspServerUri
     *
     * @return self
     */
    public function setCacAuthOcspServerUri(string $cacAuthOcspServerUri): self
    {
        $this->initialized['cacAuthOcspServerUri'] = true;
        $this->cacAuthOcspServerUri = $cacAuthOcspServerUri;
        return $this;
    }
    /**
     * The Trusted CA Certificate profile UUID for CAC Login
     *
     * @return string
     */
    public function getCacAuthRootCACertificate(): string
    {
        return $this->cacAuthRootCACertificate;
    }
    /**
     * The Trusted CA Certificate profile UUID for CAC Login
     *
     * @param string $cacAuthRootCACertificate
     *
     * @return self
     */
    public function setCacAuthRootCACertificate(string $cacAuthRootCACertificate): self
    {
        $this->initialized['cacAuthRootCACertificate'] = true;
        $this->cacAuthRootCACertificate = $cacAuthRootCACertificate;
        return $this;
    }
    /**
     * @return string
     */
    public function getCacAuthUserName(): string
    {
        return $this->cacAuthUserName;
    }
    /**
     * @param string $cacAuthUserName
     *
     * @return self
     */
    public function setCacAuthUserName(string $cacAuthUserName): self
    {
        $this->initialized['cacAuthUserName'] = true;
        $this->cacAuthUserName = $cacAuthUserName;
        return $this;
    }
    /**
     * The Admin AAA profile UUID for CAC Login
     *
     * @return string
     */
    public function getCacAuthAaaServer(): string
    {
        return $this->cacAuthAaaServer;
    }
    /**
     * The Admin AAA profile UUID for CAC Login
     *
     * @param string $cacAuthAaaServer
     *
     * @return self
     */
    public function setCacAuthAaaServer(string $cacAuthAaaServer): self
    {
        $this->initialized['cacAuthAaaServer'] = true;
        $this->cacAuthAaaServer = $cacAuthAaaServer;
        return $this;
    }
}