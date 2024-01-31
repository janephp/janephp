<?php

namespace Github\Model;

class AuthorizationsAuthorizationIdPatchBody extends \ArrayObject
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
     * A list of scopes to add to this authorization.
     *
     * @var string[]
     */
    protected $addScopes;
    /**
     * A list of scopes to remove from this authorization.
     *
     * @var string[]
     */
    protected $removeScopes;
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
     * A list of scopes to add to this authorization.
     *
     * @return string[]
     */
    public function getAddScopes() : array
    {
        return $this->addScopes;
    }
    /**
     * A list of scopes to add to this authorization.
     *
     * @param string[] $addScopes
     *
     * @return self
     */
    public function setAddScopes(array $addScopes) : self
    {
        $this->initialized['addScopes'] = true;
        $this->addScopes = $addScopes;
        return $this;
    }
    /**
     * A list of scopes to remove from this authorization.
     *
     * @return string[]
     */
    public function getRemoveScopes() : array
    {
        return $this->removeScopes;
    }
    /**
     * A list of scopes to remove from this authorization.
     *
     * @param string[] $removeScopes
     *
     * @return self
     */
    public function setRemoveScopes(array $removeScopes) : self
    {
        $this->initialized['removeScopes'] = true;
        $this->removeScopes = $removeScopes;
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