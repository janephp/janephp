<?php

namespace Github\Model;

class ReposOwnerRepoPullsPullNumberReviewsReviewIdEventsPostBody extends \ArrayObject
{
    /**
     * The body text of the pull request review
     *
     * @var string
     */
    protected $body;
    /**
     * The review action you want to perform. The review actions include: `APPROVE`, `REQUEST_CHANGES`, or `COMMENT`. When you leave this blank, the API returns _HTTP 422 (Unrecognizable entity)_ and sets the review action state to `PENDING`, which means you will need to re-submit the pull request review using a review action.
     *
     * @var string
     */
    protected $event;
    /**
     * The body text of the pull request review
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * The body text of the pull request review
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(string $body) : self
    {
        $this->body = $body;
        return $this;
    }
    /**
     * The review action you want to perform. The review actions include: `APPROVE`, `REQUEST_CHANGES`, or `COMMENT`. When you leave this blank, the API returns _HTTP 422 (Unrecognizable entity)_ and sets the review action state to `PENDING`, which means you will need to re-submit the pull request review using a review action.
     *
     * @return string
     */
    public function getEvent() : string
    {
        return $this->event;
    }
    /**
     * The review action you want to perform. The review actions include: `APPROVE`, `REQUEST_CHANGES`, or `COMMENT`. When you leave this blank, the API returns _HTTP 422 (Unrecognizable entity)_ and sets the review action state to `PENDING`, which means you will need to re-submit the pull request review using a review action.
     *
     * @param string $event
     *
     * @return self
     */
    public function setEvent(string $event) : self
    {
        $this->event = $event;
        return $this;
    }
}