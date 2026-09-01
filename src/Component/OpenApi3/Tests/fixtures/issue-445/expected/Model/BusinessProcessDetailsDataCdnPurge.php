<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class BusinessProcessDetailsDataCdnPurge extends BusinessProcessDetailsDataBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Serialized CDN configuration.
     *
     * @var string
     */
    public string $serializedCdnConfiguration;
    /**
     * Jobs that were processed in the operation.
     *
     * @var list<CdnPurgeJobBase>
     */
    public array $jobs;
    public function definedProperties(): array
    {
        return ['serializedCdnConfiguration' => 'serializedCdnConfiguration', 'jobs' => 'jobs'];
    }
}