<?php

namespace PicturePark\API\Model;

class MetadataValuesSchemaItemAddCommand extends MetadataValuesChangeCommandBase
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
    * The path of the field relative to the Content or Layer schema values defined by the schemaId property.
    (i.e. add a team (existing list item) to the work information of a person: fieldPath = "workInfo.teams", schemaId = "PersonLayer").
    *
    * @var string
    */
    protected $fieldPath;
    /**
     * The field namespace
     *
     * @var string
     */
    protected $fieldNamespace;
    /**
     * The ID of the list item to be added.
     *
     * @var string
     */
    protected $referenceId;
    /**
    * The path of the field relative to the Content or Layer schema values defined by the schemaId property.
    (i.e. add a team (existing list item) to the work information of a person: fieldPath = "workInfo.teams", schemaId = "PersonLayer").
    *
    * @return string
    */
    public function getFieldPath() : string
    {
        return $this->fieldPath;
    }
    /**
    * The path of the field relative to the Content or Layer schema values defined by the schemaId property.
    (i.e. add a team (existing list item) to the work information of a person: fieldPath = "workInfo.teams", schemaId = "PersonLayer").
    *
    * @param string $fieldPath
    *
    * @return self
    */
    public function setFieldPath(string $fieldPath) : self
    {
        $this->initialized['fieldPath'] = true;
        $this->fieldPath = $fieldPath;
        return $this;
    }
    /**
     * The field namespace
     *
     * @return string
     */
    public function getFieldNamespace() : string
    {
        return $this->fieldNamespace;
    }
    /**
     * The field namespace
     *
     * @param string $fieldNamespace
     *
     * @return self
     */
    public function setFieldNamespace(string $fieldNamespace) : self
    {
        $this->initialized['fieldNamespace'] = true;
        $this->fieldNamespace = $fieldNamespace;
        return $this;
    }
    /**
     * The ID of the list item to be added.
     *
     * @return string
     */
    public function getReferenceId() : string
    {
        return $this->referenceId;
    }
    /**
     * The ID of the list item to be added.
     *
     * @param string $referenceId
     *
     * @return self
     */
    public function setReferenceId(string $referenceId) : self
    {
        $this->initialized['referenceId'] = true;
        $this->referenceId = $referenceId;
        return $this;
    }
}