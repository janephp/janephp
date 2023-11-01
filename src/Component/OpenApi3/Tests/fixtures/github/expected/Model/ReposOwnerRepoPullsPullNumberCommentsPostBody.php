<?php

namespace Github\Model;

class ReposOwnerRepoPullsPullNumberCommentsPostBody extends \ArrayObject
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
     * The text of the review comment.
     *
     * @var string
     */
    protected $body;
    /**
     * The SHA of the commit needing a comment. Not using the latest commit SHA may render your comment outdated if a subsequent commit modifies the line you specify as the `position`.
     *
     * @var string
     */
    protected $commitId;
    /**
     * The relative path to the file that necessitates a comment.
     *
     * @var string
     */
    protected $path;
    /**
     * **Required without `comfort-fade` preview**. The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. For help finding the position value, read the note above.
     *
     * @var int
     */
    protected $position;
    /**
     * **Required with `comfort-fade` preview**. In a split diff view, the side of the diff that the pull request's changes appear on. Can be `LEFT` or `RIGHT`. Use `LEFT` for deletions that appear in red. Use `RIGHT` for additions that appear in green or unchanged lines that appear in white and are shown for context. For a multi-line comment, side represents whether the last line of the comment range is a deletion or addition. For more information, see "[Diff view options](https://help.github.com/en/articles/about-comparing-branches-in-pull-requests#diff-view-options)" in the GitHub Help documentation.
     *
     * @var string
     */
    protected $side;
    /**
     * **Required with `comfort-fade` preview**. The line of the blob in the pull request diff that the comment applies to. For a multi-line comment, the last line of the range that your comment applies to.
     *
     * @var int
     */
    protected $line;
    /**
     * **Required when using multi-line comments**. To create multi-line comments, you must use the `comfort-fade` preview header. The `start_line` is the first line in the pull request diff that your multi-line comment applies to. To learn more about multi-line comments, see "[Commenting on a pull request](https://help.github.com/en/articles/commenting-on-a-pull-request#adding-line-comments-to-a-pull-request)" in the GitHub Help documentation.
     *
     * @var int
     */
    protected $startLine;
    /**
     * **Required when using multi-line comments**. To create multi-line comments, you must use the `comfort-fade` preview header. The `start_side` is the starting side of the diff that the comment applies to. Can be `LEFT` or `RIGHT`. To learn more about multi-line comments, see "[Commenting on a pull request](https://help.github.com/en/articles/commenting-on-a-pull-request#adding-line-comments-to-a-pull-request)" in the GitHub Help documentation. See `side` in this table for additional context.
     *
     * @var string
     */
    protected $startSide;
    /**
     * 
     *
     * @var int
     */
    protected $inReplyTo;
    /**
     * The text of the review comment.
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * The text of the review comment.
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(string $body) : self
    {
        $this->initialized['body'] = true;
        $this->body = $body;
        return $this;
    }
    /**
     * The SHA of the commit needing a comment. Not using the latest commit SHA may render your comment outdated if a subsequent commit modifies the line you specify as the `position`.
     *
     * @return string
     */
    public function getCommitId() : string
    {
        return $this->commitId;
    }
    /**
     * The SHA of the commit needing a comment. Not using the latest commit SHA may render your comment outdated if a subsequent commit modifies the line you specify as the `position`.
     *
     * @param string $commitId
     *
     * @return self
     */
    public function setCommitId(string $commitId) : self
    {
        $this->initialized['commitId'] = true;
        $this->commitId = $commitId;
        return $this;
    }
    /**
     * The relative path to the file that necessitates a comment.
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * The relative path to the file that necessitates a comment.
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * **Required without `comfort-fade` preview**. The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. For help finding the position value, read the note above.
     *
     * @return int
     */
    public function getPosition() : int
    {
        return $this->position;
    }
    /**
     * **Required without `comfort-fade` preview**. The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. For help finding the position value, read the note above.
     *
     * @param int $position
     *
     * @return self
     */
    public function setPosition(int $position) : self
    {
        $this->initialized['position'] = true;
        $this->position = $position;
        return $this;
    }
    /**
     * **Required with `comfort-fade` preview**. In a split diff view, the side of the diff that the pull request's changes appear on. Can be `LEFT` or `RIGHT`. Use `LEFT` for deletions that appear in red. Use `RIGHT` for additions that appear in green or unchanged lines that appear in white and are shown for context. For a multi-line comment, side represents whether the last line of the comment range is a deletion or addition. For more information, see "[Diff view options](https://help.github.com/en/articles/about-comparing-branches-in-pull-requests#diff-view-options)" in the GitHub Help documentation.
     *
     * @return string
     */
    public function getSide() : string
    {
        return $this->side;
    }
    /**
     * **Required with `comfort-fade` preview**. In a split diff view, the side of the diff that the pull request's changes appear on. Can be `LEFT` or `RIGHT`. Use `LEFT` for deletions that appear in red. Use `RIGHT` for additions that appear in green or unchanged lines that appear in white and are shown for context. For a multi-line comment, side represents whether the last line of the comment range is a deletion or addition. For more information, see "[Diff view options](https://help.github.com/en/articles/about-comparing-branches-in-pull-requests#diff-view-options)" in the GitHub Help documentation.
     *
     * @param string $side
     *
     * @return self
     */
    public function setSide(string $side) : self
    {
        $this->initialized['side'] = true;
        $this->side = $side;
        return $this;
    }
    /**
     * **Required with `comfort-fade` preview**. The line of the blob in the pull request diff that the comment applies to. For a multi-line comment, the last line of the range that your comment applies to.
     *
     * @return int
     */
    public function getLine() : int
    {
        return $this->line;
    }
    /**
     * **Required with `comfort-fade` preview**. The line of the blob in the pull request diff that the comment applies to. For a multi-line comment, the last line of the range that your comment applies to.
     *
     * @param int $line
     *
     * @return self
     */
    public function setLine(int $line) : self
    {
        $this->initialized['line'] = true;
        $this->line = $line;
        return $this;
    }
    /**
     * **Required when using multi-line comments**. To create multi-line comments, you must use the `comfort-fade` preview header. The `start_line` is the first line in the pull request diff that your multi-line comment applies to. To learn more about multi-line comments, see "[Commenting on a pull request](https://help.github.com/en/articles/commenting-on-a-pull-request#adding-line-comments-to-a-pull-request)" in the GitHub Help documentation.
     *
     * @return int
     */
    public function getStartLine() : int
    {
        return $this->startLine;
    }
    /**
     * **Required when using multi-line comments**. To create multi-line comments, you must use the `comfort-fade` preview header. The `start_line` is the first line in the pull request diff that your multi-line comment applies to. To learn more about multi-line comments, see "[Commenting on a pull request](https://help.github.com/en/articles/commenting-on-a-pull-request#adding-line-comments-to-a-pull-request)" in the GitHub Help documentation.
     *
     * @param int $startLine
     *
     * @return self
     */
    public function setStartLine(int $startLine) : self
    {
        $this->initialized['startLine'] = true;
        $this->startLine = $startLine;
        return $this;
    }
    /**
     * **Required when using multi-line comments**. To create multi-line comments, you must use the `comfort-fade` preview header. The `start_side` is the starting side of the diff that the comment applies to. Can be `LEFT` or `RIGHT`. To learn more about multi-line comments, see "[Commenting on a pull request](https://help.github.com/en/articles/commenting-on-a-pull-request#adding-line-comments-to-a-pull-request)" in the GitHub Help documentation. See `side` in this table for additional context.
     *
     * @return string
     */
    public function getStartSide() : string
    {
        return $this->startSide;
    }
    /**
     * **Required when using multi-line comments**. To create multi-line comments, you must use the `comfort-fade` preview header. The `start_side` is the starting side of the diff that the comment applies to. Can be `LEFT` or `RIGHT`. To learn more about multi-line comments, see "[Commenting on a pull request](https://help.github.com/en/articles/commenting-on-a-pull-request#adding-line-comments-to-a-pull-request)" in the GitHub Help documentation. See `side` in this table for additional context.
     *
     * @param string $startSide
     *
     * @return self
     */
    public function setStartSide(string $startSide) : self
    {
        $this->initialized['startSide'] = true;
        $this->startSide = $startSide;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInReplyTo() : int
    {
        return $this->inReplyTo;
    }
    /**
     * 
     *
     * @param int $inReplyTo
     *
     * @return self
     */
    public function setInReplyTo(int $inReplyTo) : self
    {
        $this->initialized['inReplyTo'] = true;
        $this->inReplyTo = $inReplyTo;
        return $this;
    }
}