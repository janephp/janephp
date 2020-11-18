<?php

namespace PicturePark\API\Model;

class SortField
{
    /**
     * The path of the field ({schemaId}.{fieldId})
     *
     * @var string
     */
    protected $path;
    /**
     * The translated name of the field to be shown in the UI.
     *
     * @var mixed
     */
    protected $names;
    /**
     * The path of the field ({schemaId}.{fieldId})
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * The path of the field ({schemaId}.{fieldId})
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->path = $path;
        return $this;
    }
    /**
     * The translated name of the field to be shown in the UI.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * The translated name of the field to be shown in the UI.
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names) : self
    {
        $this->names = $names;
        return $this;
    }
}