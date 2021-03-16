<?php

namespace Jane\OpenApi3\Tests\Expected\Exception;

class TestNoTagCustom600Exception extends Custom600Exception
{
    private $messageObject;
    public function __construct(\Jane\OpenApi3\Tests\Expected\Model\Message $message)
    {
        parent::__construct('New update available', 600);
        $this->messageObject = $message;
    }
    public function getMessageObject()
    {
        return $this->messageObject;
    }
}