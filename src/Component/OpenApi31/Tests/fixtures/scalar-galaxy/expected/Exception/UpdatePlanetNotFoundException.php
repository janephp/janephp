<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Exception;

class UpdatePlanetNotFoundException extends NotFoundException
{
    /**
     * @var \Jane\Component\OpenApi31\Tests\Expected\Model\NotFoundError
     */
    private $notFoundError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Component\OpenApi31\Tests\Expected\Model\NotFoundError $notFoundError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->notFoundError = $notFoundError;
        $this->response = $response;
    }
    public function getNotFoundError(): \Jane\Component\OpenApi31\Tests\Expected\Model\NotFoundError
    {
        return $this->notFoundError;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}