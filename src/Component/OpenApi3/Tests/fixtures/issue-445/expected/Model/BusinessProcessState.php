<?php

namespace PicturePark\API\Model;

class BusinessProcessState
{
    /**
     * State of the business process
     *
     * @var string
     */
    public string $state;
    /**
     * Date and time of when the state transition was performed.
     *
     * @var \DateTime
     */
    public \DateTime $timestamp;
    /**
     * Eventual error associated to the state transition.
     *
     * @var ErrorResponse|null
     */
    public ?ErrorResponse $error;
}