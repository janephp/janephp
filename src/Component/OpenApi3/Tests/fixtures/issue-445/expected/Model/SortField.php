<?php

namespace PicturePark\API\Model;

class SortField
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
    public function getPath(): string
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
    public function setPath(string $path): self
    {
        $this->initialized['path'] = true;
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
    public function setNames($names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
}