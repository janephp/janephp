<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class CdnPurgeJobByUri extends CdnPurgeJobBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $uri;
    public function definedProperties(): array
    {
        return ['uri' => 'uri'];
    }
}