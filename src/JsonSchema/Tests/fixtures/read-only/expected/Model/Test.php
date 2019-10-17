<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class Test
{
    /**
     * 
     *
     * @var string
     */
    protected $token;
    /**
     * 
     *
     * @var string
     */
    protected $email;
    public function __construct(\Jane\JsonSchema\Tests\Expected\Proxy\ProxyTest $proxy = null)
    {
        if ($proxy instanceof \Jane\JsonSchema\Tests\Expected\Proxy\ProxyTest) {
            $properties = $proxy->__properties();
            $this->{'token'} = $properties['__token'];
            $this->{'email'} = $properties['email'];
        }
    }
    /**
     * 
     *
     * @return string
     */
    public function getToken() : string
    {
        return $this->token;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
}