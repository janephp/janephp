<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppLogDestinationLogtailSpec extends \ArrayObject
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
     * Logtail token.
     *
     * @var string
     */
    protected $token;
    /**
     * Logtail token.
     *
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }
    /**
     * Logtail token.
     *
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }
}