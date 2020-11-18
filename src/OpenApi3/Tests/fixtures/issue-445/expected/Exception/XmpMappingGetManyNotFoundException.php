<?php

namespace PicturePark\API\Exception;

class XmpMappingGetManyNotFoundException extends \RuntimeException implements ClientException
{
    private $pictureparkNotFoundException;
    public function __construct(\PicturePark\API\Model\PictureparkNotFoundException $pictureparkNotFoundException)
    {
        parent::__construct('Entity not found', 404);
        $this->pictureparkNotFoundException = $pictureparkNotFoundException;
    }
    public function getPictureparkNotFoundException()
    {
        return $this->pictureparkNotFoundException;
    }
}