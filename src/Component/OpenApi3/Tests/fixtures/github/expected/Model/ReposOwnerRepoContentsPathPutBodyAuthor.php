<?php

namespace Github\Model;

class ReposOwnerRepoContentsPathPutBodyAuthor extends \ArrayObject
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
     * The name of the author or committer of the commit. You'll receive a `422` status code if `name` is omitted.
     *
     * @var string
     */
    protected $name;
    /**
     * The email of the author or committer of the commit. You'll receive a `422` status code if `email` is omitted.
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @var string
     */
    protected $date;
    /**
     * The name of the author or committer of the commit. You'll receive a `422` status code if `name` is omitted.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the author or committer of the commit. You'll receive a `422` status code if `name` is omitted.
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
     * The email of the author or committer of the commit. You'll receive a `422` status code if `email` is omitted.
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * The email of the author or committer of the commit. You'll receive a `422` status code if `email` is omitted.
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
     * 
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * 
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