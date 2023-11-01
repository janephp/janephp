<?php

namespace PicturePark\API\Model;

class ContentFileUpdateRequest
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * ID of the file transfer to use to replace the content file.
     *
     * @var string
     */
    protected $fileTransferId;
    /**
     * ID of the file transfer to use to replace the content file.
     *
     * @return string
     */
    public function getFileTransferId() : string
    {
        return $this->fileTransferId;
    }
    /**
     * ID of the file transfer to use to replace the content file.
     *
     * @param string $fileTransferId
     *
     * @return self
     */
    public function setFileTransferId(string $fileTransferId) : self
    {
        $this->initialized['fileTransferId'] = true;
        $this->fileTransferId = $fileTransferId;
        return $this;
    }
}