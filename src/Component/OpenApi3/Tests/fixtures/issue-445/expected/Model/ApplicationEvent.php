<?php

namespace PicturePark\API\Model;

class ApplicationEvent
{
    /**
     * @var \DateTime
     */
    public \DateTime $timestamp;
    /**
     * @var string
     */
    public string $kind;
}