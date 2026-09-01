<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception;

class UpdatePlanesDpTunnelSettingUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct(
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface|null
         */
        private readonly ?\Symfony\Contracts\HttpClient\ResponseInterface $response = null
    )
    {
        parent::__construct('Unprocessable Entity - Business rule violation');
    }
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}