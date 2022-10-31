<?php

namespace Github\Model;

class ReposOwnerRepoGitTagsPostBodyTagger extends \ArrayObject
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
     * The name of the author of the tag
     *
     * @var string
     */
    protected $name;
    /**
     * The email of the author of the tag
     *
     * @var string
     */
    protected $email;
    /**
     * When this object was tagged. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *
     * @var string
     */
    protected $date;
    /**
     * The name of the author of the tag
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the author of the tag
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
     * The email of the author of the tag
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * The email of the author of the tag
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
     * When this object was tagged. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * When this object was tagged. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date) : self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
}