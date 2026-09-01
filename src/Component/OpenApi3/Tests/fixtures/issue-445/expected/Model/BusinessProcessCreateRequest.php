<?php

namespace PicturePark\API\Model;

class BusinessProcessCreateRequest
{
    /**
     * Indicates if the system starting the business process supports cancellation.
     *
     * @var bool
     */
    public bool $supportsCancellation;
    /**
     * Notification data to send to the user when creating the business process.
     * Set to null to not create a notification.
     *
     * @var BusinessProcessNotificationUpdate|null
     */
    public ?BusinessProcessNotificationUpdate $notification;
    /**
     * Initial state of the business process.
     *
     * @var string
     */
    public string $initialState;
}