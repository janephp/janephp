<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemSecuritySetting
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
     * Captcha setting
     *
     * @var bool
     */
    protected $captchaEnabled;
    /**
     * @var int
     */
    protected $maxInteractiveConcurrentSessions;
    /**
     * @var int
     */
    protected $maxPublicApiConcurrentSessions;
    /**
     * @var int
     */
    protected $absoluteSessionTimeout;
    /**
     * SSH authentication method
     *
     * @var string
     */
    protected $sshAuthMethod;
    /**
     * Captcha setting
     *
     * @return bool
     */
    public function getCaptchaEnabled(): bool
    {
        return $this->captchaEnabled;
    }
    /**
     * Captcha setting
     *
     * @param bool $captchaEnabled
     *
     * @return self
     */
    public function setCaptchaEnabled(bool $captchaEnabled): self
    {
        $this->initialized['captchaEnabled'] = true;
        $this->captchaEnabled = $captchaEnabled;
        return $this;
    }
    /**
     * @return int
     */
    public function getMaxInteractiveConcurrentSessions(): int
    {
        return $this->maxInteractiveConcurrentSessions;
    }
    /**
     * @param int $maxInteractiveConcurrentSessions
     *
     * @return self
     */
    public function setMaxInteractiveConcurrentSessions(int $maxInteractiveConcurrentSessions): self
    {
        $this->initialized['maxInteractiveConcurrentSessions'] = true;
        $this->maxInteractiveConcurrentSessions = $maxInteractiveConcurrentSessions;
        return $this;
    }
    /**
     * @return int
     */
    public function getMaxPublicApiConcurrentSessions(): int
    {
        return $this->maxPublicApiConcurrentSessions;
    }
    /**
     * @param int $maxPublicApiConcurrentSessions
     *
     * @return self
     */
    public function setMaxPublicApiConcurrentSessions(int $maxPublicApiConcurrentSessions): self
    {
        $this->initialized['maxPublicApiConcurrentSessions'] = true;
        $this->maxPublicApiConcurrentSessions = $maxPublicApiConcurrentSessions;
        return $this;
    }
    /**
     * @return int
     */
    public function getAbsoluteSessionTimeout(): int
    {
        return $this->absoluteSessionTimeout;
    }
    /**
     * @param int $absoluteSessionTimeout
     *
     * @return self
     */
    public function setAbsoluteSessionTimeout(int $absoluteSessionTimeout): self
    {
        $this->initialized['absoluteSessionTimeout'] = true;
        $this->absoluteSessionTimeout = $absoluteSessionTimeout;
        return $this;
    }
    /**
     * SSH authentication method
     *
     * @return string
     */
    public function getSshAuthMethod(): string
    {
        return $this->sshAuthMethod;
    }
    /**
     * SSH authentication method
     *
     * @param string $sshAuthMethod
     *
     * @return self
     */
    public function setSshAuthMethod(string $sshAuthMethod): self
    {
        $this->initialized['sshAuthMethod'] = true;
        $this->sshAuthMethod = $sshAuthMethod;
        return $this;
    }
}