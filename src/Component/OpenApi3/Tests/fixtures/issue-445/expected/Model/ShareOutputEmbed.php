<?php

namespace PicturePark\API\Model;

class ShareOutputEmbed extends ShareOutputBase
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Share token for the shared output.
     *
     * @var string|null
     */
    protected $token;
    /**
     * Share token for the shared output.
     *
     * @return string|null
     */
    public function getToken() : ?string
    {
        return $this->token;
    }
    /**
     * Share token for the shared output.
     *
     * @param string|null $token
     *
     * @return self
     */
    public function setToken(?string $token) : self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }
}