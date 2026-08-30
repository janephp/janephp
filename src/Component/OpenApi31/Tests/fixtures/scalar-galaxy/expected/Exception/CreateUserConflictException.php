<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception;

class CreateUserConflictException extends ConflictException
{
    /**
     * @var \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Conflict
     */
    private $conflict;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Conflict $conflict, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Conflict');
        $this->conflict = $conflict;
        $this->response = $response;
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