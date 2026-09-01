<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class DocumentFormatBase extends FormatBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
}