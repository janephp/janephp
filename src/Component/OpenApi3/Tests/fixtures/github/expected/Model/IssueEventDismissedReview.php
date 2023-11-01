<?php

namespace Github\Model;

class IssueEventDismissedReview extends \ArrayObject
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
        $this->initialized['state'] = true;
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
        $this->initialized['reviewId'] = true;
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
        $this->initialized['dismissalMessage'] = true;
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
        $this->initialized['dismissalCommitId'] = true;
        $this->dismissalCommitId = $dismissalCommitId;
        return $this;
    }
}