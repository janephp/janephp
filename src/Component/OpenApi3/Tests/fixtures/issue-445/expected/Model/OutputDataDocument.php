<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class OutputDataDocument extends OutputDataBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Number of document's pages.
     *
     * @var int
     */
    public int $pageCount;
    public function definedProperties(): array
    {
        return ['pageCount' => 'pageCount'];
    }
}