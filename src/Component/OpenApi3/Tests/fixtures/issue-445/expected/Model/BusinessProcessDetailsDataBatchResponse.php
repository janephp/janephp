<?php

namespace PicturePark\API\Model;

class BusinessProcessDetailsDataBatchResponse extends BusinessProcessDetailsDataBase
{
    /**
     * The DocType on which the operation was performed.
     *
     * @var string
     */
    protected $docType;
    /**
     * The response of the batch operation.
     *
     * @var mixed
     */
    protected $response;
    /**
     * The DocType on which the operation was performed.
     *
     * @return string
     */
    public function getDocType() : string
    {
        return $this->docType;
    }
    /**
     * The DocType on which the operation was performed.
     *
     * @param string $docType
     *
     * @return self
     */
    public function setDocType(string $docType) : self
    {
        $this->docType = $docType;
        return $this;
    }
    /**
     * The response of the batch operation.
     *
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }
    /**
     * The response of the batch operation.
     *
     * @param mixed $response
     *
     * @return self
     */
    public function setResponse($response) : self
    {
        $this->response = $response;
        return $this;
    }
}