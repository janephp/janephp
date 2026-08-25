<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class BusinessProcessNotificationUpdateRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The title the message that is shown to the user should have.
     *
     * @var array<string, string>
     */
    protected $title;
    /**
     * The message shown to the user.
     *
     * @var array<string, string>
     */
    protected $message;
    /**
     * An optional navigation link that allows the user to jump to a page giving more information
     * about the process.
     *
     * @var string|null
     */
    protected $navigationLink;
    /**
     * The event type of the notification.
     *
     * @var string
     */
    protected $eventType;
    /**
     * The title the message that is shown to the user should have.
     *
     * @return array<string, string>
     */
    public function getTitle(): iterable
    {
        return $this->title;
    }
    /**
     * The title the message that is shown to the user should have.
     *
     * @param array<string, string> $title
     *
     * @return self
     */
    public function setTitle(iterable $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * The message shown to the user.
     *
     * @return array<string, string>
     */
    public function getMessage(): iterable
    {
        return $this->message;
    }
    /**
     * The message shown to the user.
     *
     * @param array<string, string> $message
     *
     * @return self
     */
    public function setMessage(iterable $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * An optional navigation link that allows the user to jump to a page giving more information
     * about the process.
     *
     * @return string|null
     */
    public function getNavigationLink(): ?string
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
    public function setNavigationLink(?string $navigationLink): self
    {
        $this->initialized['navigationLink'] = true;
        $this->navigationLink = $navigationLink;
        return $this;
    }
    /**
     * The event type of the notification.
     *
     * @return string
     */
    public function getEventType(): string
    {
        return $this->eventType;
    }
    /**
     * The event type of the notification.
     *
     * @param string $eventType
     *
     * @return self
     */
    public function setEventType(string $eventType): self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['title' => ['title', 'getTitle', 'setTitle'], 'message' => ['message', 'getMessage', 'setMessage'], 'navigationLink' => ['navigationLink', 'getNavigationLink', 'setNavigationLink'], 'eventType' => ['eventType', 'getEventType', 'setEventType']];
    }
}