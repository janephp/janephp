<?php

namespace PicturePark\API\Model;

class BusinessProcessNotificationUpdateRequest
{
    /**
     * The title the message that is shown to the user should have.
     *
     * @var mixed
     */
    protected $title;
    /**
     * The message shown to the user.
     *
     * @var mixed
     */
    protected $message;
    /**
    * An optional navigation link that allows the user to jump to a page giving more information
    about the process.
    *
    * @var string|null
    */
    protected $navigationLink;
    /**
     * The event type of the notification.
     *
     * @var mixed
     */
    protected $eventType;
    /**
     * The title the message that is shown to the user should have.
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * The title the message that is shown to the user should have.
     *
     * @param mixed $title
     *
     * @return self
     */
    public function setTitle($title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * The message shown to the user.
     *
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * The message shown to the user.
     *
     * @param mixed $message
     *
     * @return self
     */
    public function setMessage($message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
    * An optional navigation link that allows the user to jump to a page giving more information
    about the process.
    *
    * @return string|null
    */
    public function getNavigationLink() : ?string
    {
        return $this->navigationLink;
    }
    /**
    * An optional navigation link that allows the user to jump to a page giving more information
    about the process.
    *
    * @param string|null $navigationLink
    *
    * @return self
    */
    public function setNavigationLink(?string $navigationLink) : self
    {
        $this->navigationLink = $navigationLink;
        return $this;
    }
    /**
     * The event type of the notification.
     *
     * @return mixed
     */
    public function getEventType()
    {
        return $this->eventType;
    }
    /**
     * The event type of the notification.
     *
     * @param mixed $eventType
     *
     * @return self
     */
    public function setEventType($eventType) : self
    {
        $this->eventType = $eventType;
        return $this;
    }
}