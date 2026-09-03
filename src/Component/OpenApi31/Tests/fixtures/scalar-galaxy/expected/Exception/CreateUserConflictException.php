<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception;

class CreateUserConflictException extends ConflictException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Conflict
         */
        private readonly \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Conflict $conflict,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Conflict');
    }
    public function getConflict(): \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Conflict
    {
        return $this->conflict;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}