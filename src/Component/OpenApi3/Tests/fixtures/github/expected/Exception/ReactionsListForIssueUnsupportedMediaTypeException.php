<?php

namespace Github\Exception;

class ReactionsListForIssueUnsupportedMediaTypeException extends UnsupportedMediaTypeException
{
    /**
     * @var \Github\Model\ResponsePreviewHeaderMissing
     */
    private $responsePreviewHeaderMissing;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\ResponsePreviewHeaderMissing $responsePreviewHeaderMissing, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Preview Header Missing');
        $this->responsePreviewHeaderMissing = $responsePreviewHeaderMissing;
        $this->response = $response;
    }
    public function getResponsePreviewHeaderMissing() : \Github\Model\ResponsePreviewHeaderMissing
    {
        return $this->responsePreviewHeaderMissing;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}