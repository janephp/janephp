<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ShareBasicUpdateRequest extends ShareBaseUpdateRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
}