<?php

namespace Github\Model;

class ReposOwnerRepoPullsPullNumberReviewsPostBody extends \ArrayObject
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
     * The SHA of the commit that needs a review. Not using the latest commit SHA may render your review comment outdated if a subsequent commit modifies the line you specify as the `position`. Defaults to the most recent commit in the pull request when you do not specify a value.
     *
     * @var string
     */
    protected $commitId;
    /**
     * **Required** when using `REQUEST_CHANGES` or `COMMENT` for the `event` parameter. The body text of the pull request review.
     *
     * @var string
     */
    protected $body;
    /**
     * The review action you want to perform. The review actions include: `APPROVE`, `REQUEST_CHANGES`, or `COMMENT`. By leaving this blank, you set the review action state to `PENDING`, which means you will need to [submit the pull request review](https://developer.github.com/v3/pulls/reviews/#submit-a-review-for-a-pull-request) when you are ready.
     *
     * @var string
     */
    protected $event;
    /**
     * Use the following table to specify the location, destination, and contents of the draft review comment.
     *
     * @var ReposOwnerRepoPullsPullNumberReviewsPostBodyCommentsItem[]
     */
    protected $comments;
    /**
     * The SHA of the commit that needs a review. Not using the latest commit SHA may render your review comment outdated if a subsequent commit modifies the line you specify as the `position`. Defaults to the most recent commit in the pull request when you do not specify a value.
     *
     * @return string
     */
    public function getCommitId() : string
    {
        return $this->commitId;
    }
    /**
     * The SHA of the commit that needs a review. Not using the latest commit SHA may render your review comment outdated if a subsequent commit modifies the line you specify as the `position`. Defaults to the most recent commit in the pull request when you do not specify a value.
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
     * **Required** when using `REQUEST_CHANGES` or `COMMENT` for the `event` parameter. The body text of the pull request review.
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * **Required** when using `REQUEST_CHANGES` or `COMMENT` for the `event` parameter. The body text of the pull request review.
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
     * The review action you want to perform. The review actions include: `APPROVE`, `REQUEST_CHANGES`, or `COMMENT`. By leaving this blank, you set the review action state to `PENDING`, which means you will need to [submit the pull request review](https://developer.github.com/v3/pulls/reviews/#submit-a-review-for-a-pull-request) when you are ready.
     *
     * @return string
     */
    public function getEvent() : string
    {
        return $this->event;
    }
    /**
     * The review action you want to perform. The review actions include: `APPROVE`, `REQUEST_CHANGES`, or `COMMENT`. By leaving this blank, you set the review action state to `PENDING`, which means you will need to [submit the pull request review](https://developer.github.com/v3/pulls/reviews/#submit-a-review-for-a-pull-request) when you are ready.
     *
     * @param string $event
     *
     * @return self
     */
    public function setEvent(string $event) : self
    {
        $this->initialized['event'] = true;
        $this->event = $event;
        return $this;
    }
    /**
     * Use the following table to specify the location, destination, and contents of the draft review comment.
     *
     * @return ReposOwnerRepoPullsPullNumberReviewsPostBodyCommentsItem[]
     */
    public function getComments() : array
    {
        return $this->comments;
    }
    /**
     * Use the following table to specify the location, destination, and contents of the draft review comment.
     *
     * @param ReposOwnerRepoPullsPullNumberReviewsPostBodyCommentsItem[] $comments
     *
     * @return self
     */
    public function setComments(array $comments) : self
    {
        $this->initialized['comments'] = true;
        $this->comments = $comments;
        return $this;
    }
}