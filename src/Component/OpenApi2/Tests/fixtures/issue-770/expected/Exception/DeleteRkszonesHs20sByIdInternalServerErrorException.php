<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class DeleteRkszonesHs20sByIdInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Internal Server Error');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}