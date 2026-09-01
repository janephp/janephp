<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ReferenceUpdateException implements AdditionalPropertiesInterface
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
     * This is the source of the reference.
     *
     * @var string|null
     */
    public ?string $referenceItemId;
    /**
     * This is the DocType of the source of the reference.
     *
     * @var string|null
     */
    public ?string $referenceType;
    /**
     * These exceptions describe why the source metadata item could not be updated.
     *
     * @var list<PictureparkException>|null
     */
    public ?array $exceptions;
    public function definedProperties(): array
    {
        return ['traceLevel' => 'traceLevel', 'traceId' => 'traceId', 'traceJobId' => 'traceJobId', 'httpStatusCode' => 'httpStatusCode', 'exceptionMessage' => 'exceptionMessage', 'kind' => 'kind', 'customerId' => 'customerId', 'customerAlias' => 'customerAlias', 'userId' => 'userId', 'referenceItemId' => 'referenceItemId', 'referenceType' => 'referenceType', 'exceptions' => 'exceptions'];
    }
}