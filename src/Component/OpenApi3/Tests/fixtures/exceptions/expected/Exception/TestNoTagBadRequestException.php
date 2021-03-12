<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class TestNoTagBadRequestException extends BadRequestException
{
    private $_message;
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\Model\Message $message)
    {
        parent::__construct('Bad request on test exception', 400);
        $this->_message = $message;
    }
    public function getMessage()
    {
        return $this->_message;
    }
}