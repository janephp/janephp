<?php

namespace Jane\OpenApi3\Tests\Expected\Exception;

class TestNoTagBadRequestException extends BadRequestException
{
    private $messageObject;
    public function __construct(\Jane\OpenApi3\Tests\Expected\Model\Message $message)
    {
        parent::__construct('Bad request on test exception', 400);
        $this->messageObject = $message;
    }
    public function getMessageObject()
    {
        return $this->messageObject;
    }
}