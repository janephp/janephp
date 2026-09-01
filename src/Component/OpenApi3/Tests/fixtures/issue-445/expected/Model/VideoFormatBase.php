<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class VideoFormatBase extends FormatBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
}