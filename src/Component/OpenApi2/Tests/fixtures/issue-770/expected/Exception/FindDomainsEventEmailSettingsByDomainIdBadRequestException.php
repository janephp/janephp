<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception;

class FindDomainsEventEmailSettingsByDomainIdBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \Psr\Http\Message\ResponseInterface|null
         */
        private readonly ?\Psr\Http\Message\ResponseInterface $response = null
    )
    {
        parent::__construct('Bad Request');
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}