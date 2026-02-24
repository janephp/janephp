<?php

namespace PicturePark\API\Model;

class InternalRecipient
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
     * User information of recipient.
     *
     * @var mixed
     */
    protected $recipient;
    /**
     * Recipient specific token.
     *
     * @var string|null
     */
    protected $token;
    /**
     * URL to access the share for this recipient.
     *
     * @var string|null
     */
    protected $url;
    /**
     * User information of recipient.
     *
     * @return mixed
     */
    public function getRecipient()
    {
        return $this->recipient;
    }
    /**
     * User information of recipient.
     *
     * @param mixed $recipient
     *
     * @return self
     */
    public function setRecipient($recipient): self
    {
        $this->initialized['recipient'] = true;
        $this->recipient = $recipient;
        return $this;
    }
    /**
     * Recipient specific token.
     *
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }
    /**
     * Recipient specific token.
     *
     * @param string|null $token
     *
     * @return self
     */
    public function setToken(?string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }
    /**
     * URL to access the share for this recipient.
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     * URL to access the share for this recipient.
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
}