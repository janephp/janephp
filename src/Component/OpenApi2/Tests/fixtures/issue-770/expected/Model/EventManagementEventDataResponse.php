<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class EventManagementEventDataResponse
{
    /**
     * The status of http request
     *
     * @var bool
     */
    public bool $success;
    /**
     * The error message of http request
     *
     * @var string
     */
    public string $error;
    /**
     * @var EventManagementEventDataList
     */
    public EventManagementEventDataList $data;
    /**
     * Extra information for event management setting
     *
     * @var string
     */
    public string $extra;
}