<?php

namespace Github\Model;

class IssueEventDismissedReview
{
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var int
     */
    protected $reviewId;
    /**
     * 
     *
     * @var string|null
     */
    protected $dismissalMessage;
    /**
     * 
     *
     * @var string|null
     */
    protected $dismissalCommitId;
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReviewId() : int
    {
        return $this->reviewId;
    }
    /**
     * 
     *
     * @param int $reviewId
     *
     * @return self
     */
    public function setReviewId(int $reviewId) : self
    {
        $this->reviewId = $reviewId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDismissalMessage() : ?string
    {
        return $this->dismissalMessage;
    }
    /**
     * 
     *
     * @param string|null $dismissalMessage
     *
     * @return self
     */
    public function setDismissalMessage(?string $dismissalMessage) : self
    {
        $this->dismissalMessage = $dismissalMessage;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDismissalCommitId() : ?string
    {
        return $this->dismissalCommitId;
    }
    /**
     * 
     *
     * @param string|null $dismissalCommitId
     *
     * @return self
     */
    public function setDismissalCommitId(?string $dismissalCommitId) : self
    {
        $this->dismissalCommitId = $dismissalCommitId;
        return $this;
    }
}