<?php

namespace Github\Model;

class ReposOwnerRepoGitCommitsPostBody extends \ArrayObject
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
     * The commit message
     *
     * @var string
     */
    protected $message;
    /**
     * The SHA of the tree object this commit points to
     *
     * @var string
     */
    protected $tree;
    /**
     * The SHAs of the commits that were the parents of this commit. If omitted or empty, the commit will be written as a root commit. For a single parent, an array of one SHA should be provided; for a merge commit, an array of more than one should be provided.
     *
     * @var list<string>
     */
    protected $parents;
    /**
     * Information about the author of the commit. By default, the `author` will be the authenticated user and the current date. See the `author` and `committer` object below for details.
     *
     * @var ReposOwnerRepoGitCommitsPostBodyAuthor
     */
    protected $author;
    /**
     * Information about the person who is making the commit. By default, `committer` will use the information set in `author`. See the `author` and `committer` object below for details.
     *
     * @var ReposOwnerRepoGitCommitsPostBodyCommitter
     */
    protected $committer;
    /**
     * The [PGP signature](https://en.wikipedia.org/wiki/Pretty_Good_Privacy) of the commit. GitHub adds the signature to the `gpgsig` header of the created commit. For a commit signature to be verifiable by Git or GitHub, it must be an ASCII-armored detached PGP signature over the string commit as it would be written to the object database. To pass a `signature` parameter, you need to first manually create a valid PGP signature, which can be complicated. You may find it easier to [use the command line](https://git-scm.com/book/id/v2/Git-Tools-Signing-Your-Work) to create signed commits.
     *
     * @var string
     */
    protected $signature;
    /**
     * The commit message
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * The commit message
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * The SHA of the tree object this commit points to
     *
     * @return string
     */
    public function getTree() : string
    {
        return $this->tree;
    }
    /**
     * The SHA of the tree object this commit points to
     *
     * @param string $tree
     *
     * @return self
     */
    public function setTree(string $tree) : self
    {
        $this->initialized['tree'] = true;
        $this->tree = $tree;
        return $this;
    }
    /**
     * The SHAs of the commits that were the parents of this commit. If omitted or empty, the commit will be written as a root commit. For a single parent, an array of one SHA should be provided; for a merge commit, an array of more than one should be provided.
     *
     * @return list<string>
     */
    public function getParents() : array
    {
        return $this->parents;
    }
    /**
     * The SHAs of the commits that were the parents of this commit. If omitted or empty, the commit will be written as a root commit. For a single parent, an array of one SHA should be provided; for a merge commit, an array of more than one should be provided.
     *
     * @param list<string> $parents
     *
     * @return self
     */
    public function setParents(array $parents) : self
    {
        $this->initialized['parents'] = true;
        $this->parents = $parents;
        return $this;
    }
    /**
     * Information about the author of the commit. By default, the `author` will be the authenticated user and the current date. See the `author` and `committer` object below for details.
     *
     * @return ReposOwnerRepoGitCommitsPostBodyAuthor
     */
    public function getAuthor() : ReposOwnerRepoGitCommitsPostBodyAuthor
    {
        return $this->author;
    }
    /**
     * Information about the author of the commit. By default, the `author` will be the authenticated user and the current date. See the `author` and `committer` object below for details.
     *
     * @param ReposOwnerRepoGitCommitsPostBodyAuthor $author
     *
     * @return self
     */
    public function setAuthor(ReposOwnerRepoGitCommitsPostBodyAuthor $author) : self
    {
        $this->initialized['author'] = true;
        $this->author = $author;
        return $this;
    }
    /**
     * Information about the person who is making the commit. By default, `committer` will use the information set in `author`. See the `author` and `committer` object below for details.
     *
     * @return ReposOwnerRepoGitCommitsPostBodyCommitter
     */
    public function getCommitter() : ReposOwnerRepoGitCommitsPostBodyCommitter
    {
        return $this->committer;
    }
    /**
     * Information about the person who is making the commit. By default, `committer` will use the information set in `author`. See the `author` and `committer` object below for details.
     *
     * @param ReposOwnerRepoGitCommitsPostBodyCommitter $committer
     *
     * @return self
     */
    public function setCommitter(ReposOwnerRepoGitCommitsPostBodyCommitter $committer) : self
    {
        $this->initialized['committer'] = true;
        $this->committer = $committer;
        return $this;
    }
    /**
     * The [PGP signature](https://en.wikipedia.org/wiki/Pretty_Good_Privacy) of the commit. GitHub adds the signature to the `gpgsig` header of the created commit. For a commit signature to be verifiable by Git or GitHub, it must be an ASCII-armored detached PGP signature over the string commit as it would be written to the object database. To pass a `signature` parameter, you need to first manually create a valid PGP signature, which can be complicated. You may find it easier to [use the command line](https://git-scm.com/book/id/v2/Git-Tools-Signing-Your-Work) to create signed commits.
     *
     * @return string
     */
    public function getSignature() : string
    {
        return $this->signature;
    }
    /**
     * The [PGP signature](https://en.wikipedia.org/wiki/Pretty_Good_Privacy) of the commit. GitHub adds the signature to the `gpgsig` header of the created commit. For a commit signature to be verifiable by Git or GitHub, it must be an ASCII-armored detached PGP signature over the string commit as it would be written to the object database. To pass a `signature` parameter, you need to first manually create a valid PGP signature, which can be complicated. You may find it easier to [use the command line](https://git-scm.com/book/id/v2/Git-Tools-Signing-Your-Work) to create signed commits.
     *
     * @param string $signature
     *
     * @return self
     */
    public function setSignature(string $signature) : self
    {
        $this->initialized['signature'] = true;
        $this->signature = $signature;
        return $this;
    }
}