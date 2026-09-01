<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ApiStatisticsEvent extends ApplicationEvent implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array<string, int>|null
     */
    public ?iterable $requestsPerClient;
    public function definedProperties(): array
    {
        return ['requestsPerClient' => 'requestsPerClient'];
    }
}