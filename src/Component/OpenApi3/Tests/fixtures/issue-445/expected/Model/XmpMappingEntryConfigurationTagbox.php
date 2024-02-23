<?php

namespace PicturePark\API\Model;

class XmpMappingEntryConfigurationTagbox extends XmpMappingEntryConfigurationBase
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
     * IDs of key fields.
     *
     * @var list<string>
     */
    protected $keyFieldIds;
    /**
     * Indicates if lookup shall be performed case sensitive.
     *
     * @var bool
     */
    protected $caseSensitive;
    /**
     * Indicates if child schemas should also be included.
     *
     * @var bool
     */
    protected $includeAllSchemaChildren;
    /**
     * IDs of key fields.
     *
     * @return list<string>
     */
    public function getKeyFieldIds() : array
    {
        return $this->keyFieldIds;
    }
    /**
     * IDs of key fields.
     *
     * @param list<string> $keyFieldIds
     *
     * @return self
     */
    public function setKeyFieldIds(array $keyFieldIds) : self
    {
        $this->initialized['keyFieldIds'] = true;
        $this->keyFieldIds = $keyFieldIds;
        return $this;
    }
    /**
     * Indicates if lookup shall be performed case sensitive.
     *
     * @return bool
     */
    public function getCaseSensitive() : bool
    {
        return $this->caseSensitive;
    }
    /**
     * Indicates if lookup shall be performed case sensitive.
     *
     * @param bool $caseSensitive
     *
     * @return self
     */
    public function setCaseSensitive(bool $caseSensitive) : self
    {
        $this->initialized['caseSensitive'] = true;
        $this->caseSensitive = $caseSensitive;
        return $this;
    }
    /**
     * Indicates if child schemas should also be included.
     *
     * @return bool
     */
    public function getIncludeAllSchemaChildren() : bool
    {
        return $this->includeAllSchemaChildren;
    }
    /**
     * Indicates if child schemas should also be included.
     *
     * @param bool $includeAllSchemaChildren
     *
     * @return self
     */
    public function setIncludeAllSchemaChildren(bool $includeAllSchemaChildren) : self
    {
        $this->initialized['includeAllSchemaChildren'] = true;
        $this->includeAllSchemaChildren = $includeAllSchemaChildren;
        return $this;
    }
}