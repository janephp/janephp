<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ShareEmbedCreateRequest extends ShareBaseCreateRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
}