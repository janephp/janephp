<?php

namespace PicturePark\API\Exception;

class XmpMappingUpdateNotFoundException extends NotFoundException
{
    /**
     * @var \PicturePark\API\Model\PictureparkNotFoundException
     */
    private $pictureparkNotFoundException;
    public function __construct(\PicturePark\API\Model\PictureparkNotFoundException $pictureparkNotFoundException)
    {
        parent::__construct('Entity not found', 404);
        $this->pictureparkNotFoundException = $pictureparkNotFoundException;
    }
    public function getPictureparkNotFoundException() : \PicturePark\API\Model\PictureparkNotFoundException
    {
        return $this->pictureparkNotFoundException;
    }
}