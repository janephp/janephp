<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class Token
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
    protected $token;
    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }
    /**
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