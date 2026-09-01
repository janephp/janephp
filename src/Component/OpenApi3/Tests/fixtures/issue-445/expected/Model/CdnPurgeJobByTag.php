<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class CdnPurgeJobByTag extends CdnPurgeJobBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The tag that should be purged.
     *
     * @var string
     */
    public string $tag;
    public function definedProperties(): array
    {
        return ['tag' => 'tag'];
    }
}