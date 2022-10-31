<?php

namespace PicturePark\API\Model;

class MetadataField
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Path to the field in metadata.
     *
     * @var string
     */
    protected $path;
    /**
    * Indicates if the field can act as target for a mapping.
    If field is read-only, it can only act as source of a mapping.
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
     * A list of field IDs that can be used as a key field when a tagbox is mapped.
     *
     * @var string[]|null
     */
    protected $availableKeyFields;
    /**
     * Path to the field in metadata.
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * Path to the field in metadata.
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
    * Indicates if the field can act as target for a mapping.
    If field is read-only, it can only act as source of a mapping.
    *
    * @return bool
    */
    public function getIsWritable() : bool
    {
        return $this->isWritable;
    }
    /**
    * Indicates if the field can act as target for a mapping.
    If field is read-only, it can only act as source of a mapping.
    *
    * @param bool $isWritable
    *
    * @return self
    */
    public function setIsWritable(bool $isWritable) : self
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
    public function setDataType($dataType) : self
    {
        $this->initialized['dataType'] = true;
        $this->dataType = $dataType;
        return $this;
    }
    /**
     * A list of field IDs that can be used as a key field when a tagbox is mapped.
     *
     * @return string[]|null
     */
    public function getAvailableKeyFields() : ?array
    {
        return $this->availableKeyFields;
    }
    /**
     * A list of field IDs that can be used as a key field when a tagbox is mapped.
     *
     * @param string[]|null $availableKeyFields
     *
     * @return self
     */
    public function setAvailableKeyFields(?array $availableKeyFields) : self
    {
        $this->initialized['availableKeyFields'] = true;
        $this->availableKeyFields = $availableKeyFields;
        return $this;
    }
}