<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception;

class CreateUserUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UnprocessableEntity
         */
        private readonly \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UnprocessableEntity $unprocessableEntity,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Unprocessable Entity');
    }
    public function getUnprocessableEntity(): \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UnprocessableEntity
    {
        return $this->unprocessableEntity;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}