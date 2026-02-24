<?php

namespace PicturePark\API\Model;

class XmpField
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Path of the field in XMP.
     *
     * @var string|null
     */
    protected $path;
    /**
     * Indicates if the field can be written to.
     *
     * @var bool
     */
    protected $isWritable;
    /**
     * Data type of the field.
     *
     * @var mixed
     */
    protected $dataType;
    /**
     * Path of the field in XMP.
     *
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }
    /**
     * Path of the field in XMP.
     *
     * @param string|null $path
     *
     * @return self
     */
    public function setPath(?string $path): self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * Indicates if the field can be written to.
     *
     * @return bool
     */
    public function getIsWritable(): bool
    {
        return $this->isWritable;
    }
    /**
     * Indicates if the field can be written to.
     *
     * @param bool $isWritable
     *
     * @return self
     */
    public function setIsWritable(bool $isWritable): self
    {
        $this->initialized['isWritable'] = true;
        $this->isWritable = $isWritable;
        return $this;
    }
    /**
     * Data type of the field.
     *
     * @return mixed
     */
    public function getDataType()
    {
        return $this->dataType;
    }
    /**
     * Data type of the field.
     *
     * @param mixed $dataType
     *
     * @return self
     */
    public function setDataType($dataType): self
    {
        $this->initialized['dataType'] = true;
        $this->dataType = $dataType;
        return $this;
    }
}