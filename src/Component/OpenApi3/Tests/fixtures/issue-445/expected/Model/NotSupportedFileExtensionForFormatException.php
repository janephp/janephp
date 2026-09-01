<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class NotSupportedFileExtensionForFormatException implements AdditionalPropertiesInterface
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
    public ?string $extension;
    /**
     * @var string|null
     */
    public ?string $formatKind;
    /**
     * @var string|null
     */
    public ?string $outputFormatId;
    public function definedProperties(): array
    {
        return ['traceLevel' => 'traceLevel', 'traceId' => 'traceId', 'traceJobId' => 'traceJobId', 'httpStatusCode' => 'httpStatusCode', 'exceptionMessage' => 'exceptionMessage', 'kind' => 'kind', 'customerId' => 'customerId', 'customerAlias' => 'customerAlias', 'userId' => 'userId', 'extension' => 'extension', 'formatKind' => 'formatKind', 'outputFormatId' => 'outputFormatId'];
    }
}