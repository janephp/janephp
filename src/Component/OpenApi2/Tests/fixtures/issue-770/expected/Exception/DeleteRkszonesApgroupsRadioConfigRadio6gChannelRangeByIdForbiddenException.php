<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class DeleteRkszonesApgroupsRadioConfigRadio6gChannelRangeByIdForbiddenException extends ForbiddenException
{
    public function __construct(
        /**
         * @var \Psr\Http\Message\ResponseInterface|null
         */
        private readonly ?\Psr\Http\Message\ResponseInterface $response = null
    )
    {
        parent::__construct('Forbidden - Lack of admin privilege');
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}