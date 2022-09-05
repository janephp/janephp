<?php

namespace PicturePark\API\Model;

class XmpMappingEntryConfigurationTagbox extends XmpMappingEntryConfigurationBase
{
    /**
     * IDs of key fields.
     *
     * @var string[]
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
     * @return string[]
     */
    public function getKeyFieldIds() : array
    {
        return $this->keyFieldIds;
    }
    /**
     * IDs of key fields.
     *
     * @param string[] $keyFieldIds
     *
     * @return self
     */
    public function setKeyFieldIds(array $keyFieldIds) : self
    {
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
        $this->includeAllSchemaChildren = $includeAllSchemaChildren;
        return $this;
    }
}