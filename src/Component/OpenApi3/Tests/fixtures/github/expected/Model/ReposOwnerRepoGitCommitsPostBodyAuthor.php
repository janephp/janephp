<?php

namespace Github\Model;

class ReposOwnerRepoGitCommitsPostBodyAuthor extends \ArrayObject
{
    /**
     * The name of the author (or committer) of the commit
     *
     * @var string
     */
    protected $name;
    /**
     * The email of the author (or committer) of the commit
     *
     * @var string
     */
    protected $email;
    /**
     * Indicates when this commit was authored (or committed). This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *
     * @var string
     */
    protected $date;
    /**
     * The name of the author (or committer) of the commit
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the author (or committer) of the commit
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
    /**
     * The email of the author (or committer) of the commit
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * The email of the author (or committer) of the commit
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
     * Indicates when this commit was authored (or committed). This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * Indicates when this commit was authored (or committed). This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date) : self
    {
        $this->date = $date;
        return $this;
    }
}