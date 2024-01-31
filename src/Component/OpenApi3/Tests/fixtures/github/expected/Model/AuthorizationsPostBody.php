<?php

namespace Github\Model;

class AuthorizationsPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A list of scopes that this authorization is in.
     *
     * @var string[]|null
     */
    protected $scopes;
    /**
     * A note to remind you what the OAuth token is for.
     *
     * @var string
     */
    protected $note;
    /**
     * A URL to remind you what app the OAuth token is for.
     *
     * @var string
     */
    protected $noteUrl;
    /**
     * The OAuth app client key for which to create the token.
     *
     * @var string
     */
    protected $clientId;
    /**
     * The OAuth app client secret for which to create the token.
     *
     * @var string
     */
    protected $clientSecret;
    /**
     * A unique string to distinguish an authorization from others created for the same client ID and user.
     *
     * @var string
     */
    protected $fingerprint;
    /**
     * A list of scopes that this authorization is in.
     *
     * @return string[]|null
     */
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    /**
     * A list of scopes that this authorization is in.
     *
     * @param string[]|null $scopes
     *
     * @return self
     */
    public function setScopes(?array $scopes) : self
    {
        $this->initialized['scopes'] = true;
        $this->scopes = $scopes;
        return $this;
    }
    /**
     * A note to remind you what the OAuth token is for.
     *
     * @return string
     */
    public function getNote() : string
    {
        return $this->note;
    }
    /**
     * A note to remind you what the OAuth token is for.
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote(string $note) : self
    {
        $this->initialized['note'] = true;
        $this->note = $note;
        return $this;
    }
    /**
     * A URL to remind you what app the OAuth token is for.
     *
     * @return string
     */
    public function getNoteUrl() : string
    {
        return $this->noteUrl;
    }
    /**
     * A URL to remind you what app the OAuth token is for.
     *
     * @param string $noteUrl
     *
     * @return self
     */
    public function setNoteUrl(string $noteUrl) : self
    {
        $this->initialized['noteUrl'] = true;
        $this->noteUrl = $noteUrl;
        return $this;
    }
    /**
     * The OAuth app client key for which to create the token.
     *
     * @return string
     */
    public function getClientId() : string
    {
        return $this->clientId;
    }
    /**
     * The OAuth app client key for which to create the token.
     *
     * @param string $clientId
     *
     * @return self
     */
    public function setClientId(string $clientId) : self
    {
        $this->initialized['clientId'] = true;
        $this->clientId = $clientId;
        return $this;
    }
    /**
     * The OAuth app client secret for which to create the token.
     *
     * @return string
     */
    public function getClientSecret() : string
    {
        return $this->clientSecret;
    }
    /**
     * The OAuth app client secret for which to create the token.
     *
     * @param string $clientSecret
     *
     * @return self
     */
    public function setClientSecret(string $clientSecret) : self
    {
        $this->initialized['clientSecret'] = true;
        $this->clientSecret = $clientSecret;
        return $this;
    }
    /**
     * A unique string to distinguish an authorization from others created for the same client ID and user.
     *
     * @return string
     */
    public function getFingerprint() : string
    {
        return $this->fingerprint;
    }
    /**
     * A unique string to distinguish an authorization from others created for the same client ID and user.
     *
     * @param string $fingerprint
     *
     * @return self
     */
    public function setFingerprint(string $fingerprint) : self
    {
        $this->initialized['fingerprint'] = true;
        $this->fingerprint = $fingerprint;
        return $this;
    }
}