<?php

namespace Github\Model;

class ReposOwnerRepoPullsPullNumberReviewsReviewIdDismissalsPutBody extends \ArrayObject
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
     * The message for the pull request review dismissal
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var string
     */
    protected $event;
    /**
     * The message for the pull request review dismissal
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * The message for the pull request review dismissal
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
     * 
     *
     * @return string
     */
    public function getEvent() : string
    {
        return $this->event;
    }
    /**
     * 
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
}