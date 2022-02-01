<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class TestNoTagCustom600Exception extends Custom600Exception
{
    /**
     * @var \Jane\Component\OpenApi3\Tests\Expected\Model\Message
     */
    private $messageObject;
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\Model\Message $message)
    {
        parent::__construct('New update available', 600);
        $this->messageObject = $message;
    }
    public function getMessageObject() : \Jane\Component\OpenApi3\Tests\Expected\Model\Message
    {
        return $this->messageObject;
    }
}