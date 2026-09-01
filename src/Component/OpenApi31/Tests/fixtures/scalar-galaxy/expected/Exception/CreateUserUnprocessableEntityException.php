<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Exception;

class CreateUserUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi31\Tests\Expected\Model\UnprocessableEntity
         */
        private readonly \Jane\Component\OpenApi31\Tests\Expected\Model\UnprocessableEntity $unprocessableEntity,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Unprocessable Entity');
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