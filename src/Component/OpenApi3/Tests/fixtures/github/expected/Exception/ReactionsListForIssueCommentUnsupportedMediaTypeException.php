<?php

namespace Github\Exception;

class ReactionsListForIssueCommentUnsupportedMediaTypeException extends UnsupportedMediaTypeException
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