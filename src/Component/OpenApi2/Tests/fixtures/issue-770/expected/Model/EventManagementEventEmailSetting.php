<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class EventManagementEventEmailSetting
{
    /**
     * Enable/Disable Email sending function
     *
     * @var bool
     */
    public bool $emailEnabled;
    /**
     * E-mail recipients
     *
     * @var string
     */
    public string $mailTo;
}