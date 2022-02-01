<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class TestNoTagBadRequestException extends BadRequestException
{
    /**
     * @var \Jane\Component\OpenApi3\Tests\Expected\Model\Message
     */
    private $messageObject;
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\Model\Message $message)
    {
        parent::__construct('Bad request on test exception');
        $this->messageObject = $message;
    }
    public function getMessageObject() : \Jane\Component\OpenApi3\Tests\Expected\Model\Message
    {
        return $this->messageObject;
    }
}