<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ShareEmbedUpdateRequest extends ShareBaseUpdateRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
}