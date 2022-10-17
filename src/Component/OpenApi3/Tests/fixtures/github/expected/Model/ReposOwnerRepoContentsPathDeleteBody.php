<?php

namespace Github\Model;

class ReposOwnerRepoContentsPathDeleteBody extends \ArrayObject
{
    /**
     * The commit message.
     *
     * @var string
     */
    protected $message;
    /**
     * The blob SHA of the file being replaced.
     *
     * @var string
     */
    protected $sha;
    /**
     * The branch name. Default: the repository’s default branch (usually `master`)
     *
     * @var string
     */
    protected $branch;
    /**
     * object containing information about the committer.
     *
     * @var ReposOwnerRepoContentsPathDeleteBodyCommitter
     */
    protected $committer;
    /**
     * object containing information about the author.
     *
     * @var ReposOwnerRepoContentsPathDeleteBodyAuthor
     */
    protected $author;
    /**
     * The commit message.
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * The commit message.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * The blob SHA of the file being replaced.
     *
     * @return string
     */
    public function getSha() : string
    {
        return $this->sha;
    }
    /**
     * The blob SHA of the file being replaced.
     *
     * @param string $sha
     *
     * @return self
     */
    public function setSha(string $sha) : self
    {
        $this->sha = $sha;
        return $this;
    }
    /**
     * The branch name. Default: the repository’s default branch (usually `master`)
     *
     * @return string
     */
    public function getBranch() : string
    {
        return $this->branch;
    }
    /**
     * The branch name. Default: the repository’s default branch (usually `master`)
     *
     * @param string $branch
     *
     * @return self
     */
    public function setBranch(string $branch) : self
    {
        $this->branch = $branch;
        return $this;
    }
    /**
     * object containing information about the committer.
     *
     * @return ReposOwnerRepoContentsPathDeleteBodyCommitter
     */
    public function getCommitter() : ReposOwnerRepoContentsPathDeleteBodyCommitter
    {
        return $this->committer;
    }
    /**
     * object containing information about the committer.
     *
     * @param ReposOwnerRepoContentsPathDeleteBodyCommitter $committer
     *
     * @return self
     */
    public function setCommitter(ReposOwnerRepoContentsPathDeleteBodyCommitter $committer) : self
    {
        $this->committer = $committer;
        return $this;
    }
    /**
     * object containing information about the author.
     *
     * @return ReposOwnerRepoContentsPathDeleteBodyAuthor
     */
    public function getAuthor() : ReposOwnerRepoContentsPathDeleteBodyAuthor
    {
        return $this->author;
    }
    /**
     * object containing information about the author.
     *
     * @param ReposOwnerRepoContentsPathDeleteBodyAuthor $author
     *
     * @return self
     */
    public function setAuthor(ReposOwnerRepoContentsPathDeleteBodyAuthor $author) : self
    {
        $this->author = $author;
        return $this;
    }
}