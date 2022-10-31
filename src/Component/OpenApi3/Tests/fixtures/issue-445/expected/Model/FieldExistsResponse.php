<?php

namespace PicturePark\API\Model;

class FieldExistsResponse
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
     * Indicates if a field with the specified ID currently exists.
     *
     * @var bool
     */
    protected $exists;
    /**
    * Indicates if a field with the specified ID was previously used.
    A field ID that was previously in use cannot be used again.
    *
    * @var bool
    */
    protected $previouslyUsed;
    /**
    * If the field does already exist or has already existed, this will contain the ID
    of the schema containing it. It case of parent-child schemas, a field ID
    has to be unique across the schema hierarchy.
    *
    * @var string|null
    */
    protected $schemaId;
    /**
     * Indicates if a field with the specified ID currently exists.
     *
     * @return bool
     */
    public function getExists() : bool
    {
        return $this->exists;
    }
    /**
     * Indicates if a field with the specified ID currently exists.
     *
     * @param bool $exists
     *
     * @return self
     */
    public function setExists(bool $exists) : self
    {
        $this->initialized['exists'] = true;
        $this->exists = $exists;
        return $this;
    }
    /**
    * Indicates if a field with the specified ID was previously used.
    A field ID that was previously in use cannot be used again.
    *
    * @return bool
    */
    public function getPreviouslyUsed() : bool
    {
        return $this->previouslyUsed;
    }
    /**
    * Indicates if a field with the specified ID was previously used.
    A field ID that was previously in use cannot be used again.
    *
    * @param bool $previouslyUsed
    *
    * @return self
    */
    public function setPreviouslyUsed(bool $previouslyUsed) : self
    {
        $this->initialized['previouslyUsed'] = true;
        $this->previouslyUsed = $previouslyUsed;
        return $this;
    }
    /**
    * If the field does already exist or has already existed, this will contain the ID
    of the schema containing it. It case of parent-child schemas, a field ID
    has to be unique across the schema hierarchy.
    *
    * @return string|null
    */
    public function getSchemaId() : ?string
    {
        return $this->schemaId;
    }
    /**
    * If the field does already exist or has already existed, this will contain the ID
    of the schema containing it. It case of parent-child schemas, a field ID
    has to be unique across the schema hierarchy.
    *
    * @param string|null $schemaId
    *
    * @return self
    */
    public function setSchemaId(?string $schemaId) : self
    {
        $this->initialized['schemaId'] = true;
        $this->schemaId = $schemaId;
        return $this;
    }
}