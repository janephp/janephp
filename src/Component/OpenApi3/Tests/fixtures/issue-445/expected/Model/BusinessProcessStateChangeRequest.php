<?php

namespace PicturePark\API\Model;

class BusinessProcessStateChangeRequest
{
    /**
     * The new state of the business process.
     *
     * @var string
     */
    public string $state;
    /**
     * The new life cycle of the business process.
     *
     * @var string
     */
    public string $lifeCycle;
    /**
     * An optional notification update to be posted together with the transition.
     *
     * @var BusinessProcessNotificationUpdate|null
     */
    public ?BusinessProcessNotificationUpdate $notification;
}