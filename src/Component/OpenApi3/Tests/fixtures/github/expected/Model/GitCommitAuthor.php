<?php

namespace Github\Model;

class GitCommitAuthor extends \ArrayObject
{
    /**
     * Timestamp of the commit
     *
     * @var \DateTime
     */
    protected $date;
    /**
     * Git email address of the user
     *
     * @var string
     */
    protected $email;
    /**
     * Name of the git user
     *
     * @var string
     */
    protected $name;
    /**
     * Timestamp of the commit
     *
     * @return \DateTime
     */
    public function getDate() : \DateTime
    {
        return $this->date;
    }
    /**
     * Timestamp of the commit
     *
     * @param \DateTime $date
     *
     * @return self
     */
    public function setDate(\DateTime $date) : self
    {
        $this->date = $date;
        return $this;
    }
    /**
     * Git email address of the user
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * Git email address of the user
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Name of the git user
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the git user
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
}