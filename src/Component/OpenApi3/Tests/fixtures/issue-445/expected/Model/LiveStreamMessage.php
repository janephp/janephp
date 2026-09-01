<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class LiveStreamMessage extends Message implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $customerId;
    /**
     * @var string|null
     */
    public ?string $customerAlias;
    /**
     * @var \DateTime
     */
    public \DateTime $timestamp;
    /**
     * @var string|null
     */
    public ?string $scope;
    /**
     * @var DocumentChange|null
     */
    public ?DocumentChange $documentChange;
    /**
     * @var ApplicationEvent|null
     */
    public ?ApplicationEvent $applicationEvent;
    public function definedProperties(): array
    {
        return ['customerId' => 'customerId', 'customerAlias' => 'customerAlias', 'timestamp' => 'timestamp', 'scope' => 'scope', 'documentChange' => 'documentChange', 'applicationEvent' => 'applicationEvent'];
    }
}