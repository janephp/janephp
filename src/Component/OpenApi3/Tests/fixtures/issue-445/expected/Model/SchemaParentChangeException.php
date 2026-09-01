<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class SchemaParentChangeException implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $traceLevel;
    /**
     * @var string|null
     */
    public ?string $traceId;
    /**
     * @var string|null
     */
    public ?string $traceJobId;
    /**
     * @var int
     */
    public int $httpStatusCode;
    /**
     * @var string|null
     */
    public ?string $exceptionMessage;
    /**
     * @var string
     */
    public string $kind;
    /**
     * @var string|null
     */
    public ?string $customerId;
    /**
     * @var string|null
     */
    public ?string $customerAlias;
    /**
     * @var string|null
     */
    public ?string $userId;
    /**
     * @var string|null
     */
    public ?string $schemaId;
    /**
     * @var string|null
     */
    public ?string $oldSchemaParentId;
    /**
     * @var string|null
     */
    public ?string $newSchemaParentId;
    public function definedProperties(): array
    {
        return ['traceLevel' => 'traceLevel', 'traceId' => 'traceId', 'traceJobId' => 'traceJobId', 'httpStatusCode' => 'httpStatusCode', 'exceptionMessage' => 'exceptionMessage', 'kind' => 'kind', 'customerId' => 'customerId', 'customerAlias' => 'customerAlias', 'userId' => 'userId', 'schemaId' => 'schemaId', 'oldSchemaParentId' => 'oldSchemaParentId', 'newSchemaParentId' => 'newSchemaParentId'];
    }
}