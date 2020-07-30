<?php

namespace Github\Model;

class ReposOwnerRepoContentsPathPutBody
{
    /**
     * The commit message.
     *
     * @var string
     */
    protected $message;
    /**
     * The new file content, using Base64 encoding.
     *
     * @var string
     */
    protected $content;
    /**
     * **Required if you are updating a file**. The blob SHA of the file being replaced.
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
     * The person that committed the file. Default: the authenticated user.
     *
     * @var ReposOwnerRepoContentsPathPutBodyCommitter
     */
    protected $committer;
    /**
     * The author of the file. Default: The `committer` or the authenticated user if you omit `committer`.
     *
     * @var ReposOwnerRepoContentsPathPutBodyAuthor
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
     * The new file content, using Base64 encoding.
     *
     * @return string
     */
    public function getContent() : string
    {
        return $this->content;
    }
    /**
     * The new file content, using Base64 encoding.
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content) : self
    {
        $this->content = $content;
        return $this;
    }
    /**
     * **Required if you are updating a file**. The blob SHA of the file being replaced.
     *
     * @return string
     */
    public function getSha() : string
    {
        return $this->sha;
    }
    /**
     * **Required if you are updating a file**. The blob SHA of the file being replaced.
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
     * The person that committed the file. Default: the authenticated user.
     *
     * @return ReposOwnerRepoContentsPathPutBodyCommitter
     */
    public function getCommitter() : ReposOwnerRepoContentsPathPutBodyCommitter
    {
        return $this->committer;
    }
    /**
     * The person that committed the file. Default: the authenticated user.
     *
     * @param ReposOwnerRepoContentsPathPutBodyCommitter $committer
     *
     * @return self
     */
    public function setCommitter(ReposOwnerRepoContentsPathPutBodyCommitter $committer) : self
    {
        $this->committer = $committer;
        return $this;
    }
    /**
     * The author of the file. Default: The `committer` or the authenticated user if you omit `committer`.
     *
     * @return ReposOwnerRepoContentsPathPutBodyAuthor
     */
    public function getAuthor() : ReposOwnerRepoContentsPathPutBodyAuthor
    {
        return $this->author;
    }
    /**
     * The author of the file. Default: The `committer` or the authenticated user if you omit `committer`.
     *
     * @param ReposOwnerRepoContentsPathPutBodyAuthor $author
     *
     * @return self
     */
    public function setAuthor(ReposOwnerRepoContentsPathPutBodyAuthor $author) : self
    {
        $this->author = $author;
        return $this;
    }
}