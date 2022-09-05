<?php

namespace PicturePark\API\Model;

class DocumentStillFormat extends FormatBase
{
    /**
     * 
     *
     * @var string|null
     */
    protected $extension;
    /**
     * Allows resizing of the image.
     *
     * @var mixed|null
     */
    protected $resizeAction;
    /**
     * 
     *
     * @return string|null
     */
    public function getExtension() : ?string
    {
        return $this->extension;
    }
    /**
     * 
     *
     * @param string|null $extension
     *
     * @return self
     */
    public function setExtension(?string $extension) : self
    {
        $this->extension = $extension;
        return $this;
    }
    /**
     * Allows resizing of the image.
     *
     * @return mixed
     */
    public function getResizeAction()
    {
        return $this->resizeAction;
    }
    /**
     * Allows resizing of the image.
     *
     * @param mixed $resizeAction
     *
     * @return self
     */
    public function setResizeAction($resizeAction) : self
    {
        $this->resizeAction = $resizeAction;
        return $this;
    }
}