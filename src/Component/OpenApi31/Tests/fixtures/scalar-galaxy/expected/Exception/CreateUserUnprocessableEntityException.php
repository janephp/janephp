<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Exception;

class CreateUserUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Jane\Component\OpenApi31\Tests\Expected\Model\UnprocessableEntity
     */
    private $unprocessableEntity;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Component\OpenApi31\Tests\Expected\Model\UnprocessableEntity $unprocessableEntity, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unprocessable Entity');
        $this->unprocessableEntity = $unprocessableEntity;
        $this->response = $response;
    }
    public function getUnprocessableEntity(): \Jane\Component\OpenApi31\Tests\Expected\Model\UnprocessableEntity
    {
        return $this->unprocessableEntity;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}