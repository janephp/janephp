<?php

namespace PicturePark\API\Model;

class ShareOutputEmbed extends ShareOutputBase
{
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
        $this->token = $token;
        return $this;
    }
}