<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ContentDownloadEvent extends ApplicationEvent implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<DownloadTrackingInfo>|null
     */
    public ?array $downloadInfos;
    /**
     * @var int
     */
    public int $fileSize;
    /**
     * @var string|null
     */
    public ?string $shareToken;
    /**
     * @var string|null
     */
    public ?string $range;
    public function definedProperties(): array
    {
        return ['downloadInfos' => 'downloadInfos', 'fileSize' => 'fileSize', 'shareToken' => 'shareToken', 'range' => 'range'];
    }
}