<?php

namespace Jane\Component\OpenApi3\Tests\Client\Model;

class Error extends \ArrayObject
{
    /**
<<<<<<< HEAD
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
||||||| parent of 6c3127df5 (Update fixtures for tests)
     * 
     *
=======
>>>>>>> 6c3127df5 (Update fixtures for tests)
     * @var string
     */
    protected $message;
    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
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
}