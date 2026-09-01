<?php

namespace PicturePark\API\Model;

class ContentFileUpdateRequest
{
    /**
     * ID of the file transfer to use to replace the content file.
     *
     * @var string
     */
    public string $fileTransferId;
}