<?php

namespace Github\Exception;

class ReposGetAllTopicsUnsupportedMediaTypeException extends \RuntimeException implements ClientException
{
    private $responsePreviewHeaderMissing;
    public function __construct(\Github\Model\ResponsePreviewHeaderMissing $responsePreviewHeaderMissing)
    {
        parent::__construct('Preview Header Missing', 415);
        $this->responsePreviewHeaderMissing = $responsePreviewHeaderMissing;
    }
    public function getResponsePreviewHeaderMissing()
    {
        return $this->responsePreviewHeaderMissing;
    }
}