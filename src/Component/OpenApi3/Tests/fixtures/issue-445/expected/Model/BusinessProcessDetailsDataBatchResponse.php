<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class BusinessProcessDetailsDataBatchResponse extends BusinessProcessDetailsDataBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The DocType on which the operation was performed.
     *
     * @var string
     */
    public string $docType;
    /**
     * The response of the batch operation.
     *
     * @var BatchResponse
     */
    public BatchResponse $response;
    public function definedProperties(): array
    {
        return ['docType' => 'docType', 'response' => 'response'];
    }
}