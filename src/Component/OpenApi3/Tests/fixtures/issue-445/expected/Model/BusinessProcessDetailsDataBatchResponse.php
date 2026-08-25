<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class BusinessProcessDetailsDataBatchResponse extends BusinessProcessDetailsDataBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
    public function getDocType(): string
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
    public function setDocType(string $docType): self
    {
        $this->initialized['docType'] = true;
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
    public function setResponse($response): self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['docType' => ['docType', 'getDocType', 'setDocType'], 'response' => ['response', 'getResponse', 'setResponse']];
    }
}