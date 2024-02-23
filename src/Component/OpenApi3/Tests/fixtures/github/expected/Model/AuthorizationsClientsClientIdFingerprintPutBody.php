<?php

namespace Github\Model;

class AuthorizationsClientsClientIdFingerprintPutBody extends \ArrayObject
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
     * The OAuth app client secret for which to create the token.
     *
     * @var string
     */
    protected $clientSecret;
    /**
     * A list of scopes that this authorization is in.
     *
     * @var list<string>|null
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
     * A list of scopes that this authorization is in.
     *
     * @return list<string>|null
     */
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    /**
     * A list of scopes that this authorization is in.
     *
     * @param list<string>|null $scopes
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
}