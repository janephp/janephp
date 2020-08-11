<?php

namespace Github\Model;

class AuthorizationsClientsClientIdFingerprintPutBody
{
    /**
     * The OAuth app client secret for which to create the token.
     *
     * @var string
     */
    protected $clientSecret;
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
        $this->clientSecret = $clientSecret;
        return $this;
    }
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
        $this->noteUrl = $noteUrl;
        return $this;
    }
}