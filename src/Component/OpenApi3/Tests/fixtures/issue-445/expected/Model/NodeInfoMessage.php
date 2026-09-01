<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class NodeInfoMessage extends Message implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $nodeId;
    /**
     * @var string|null
     */
    public ?string $hostName;
    /**
     * @var \DateTime
     */
    public \DateTime $lastResponseTime;
    /**
     * @var string|null
     */
    public ?string $serviceName;
    /**
     * @var string|null
     */
    public ?string $fileVersion;
    /**
     * @var string|null
     */
    public ?string $productVersion;
    /**
     * @var string|null
     */
    public ?string $release;
    /**
     * @var string|null
     */
    public ?string $logLevel;
    public function definedProperties(): array
    {
        return ['nodeId' => 'nodeId', 'hostName' => 'hostName', 'lastResponseTime' => 'lastResponseTime', 'serviceName' => 'serviceName', 'fileVersion' => 'fileVersion', 'productVersion' => 'productVersion', 'release' => 'release', 'logLevel' => 'logLevel'];
    }
}