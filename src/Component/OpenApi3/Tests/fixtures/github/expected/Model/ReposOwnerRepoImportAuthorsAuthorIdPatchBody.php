<?php

namespace Github\Model;

class ReposOwnerRepoImportAuthorsAuthorIdPatchBody extends \ArrayObject
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
     * The new Git author email.
     *
     * @var string
     */
    protected $email;
    /**
     * The new Git author name.
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $remoteId;
    /**
     * The new Git author email.
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * The new Git author email.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * The new Git author name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The new Git author name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRemoteId() : string
    {
        return $this->remoteId;
    }
    /**
     * 
     *
     * @param string $remoteId
     *
     * @return self
     */
    public function setRemoteId(string $remoteId) : self
    {
        $this->initialized['remoteId'] = true;
        $this->remoteId = $remoteId;
        return $this;
    }
}