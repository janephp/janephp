<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class AddAvcSignaturePackageV2DownloadAndInstallLastCheckedBadRequestException extends BadRequestException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Bad Request');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}