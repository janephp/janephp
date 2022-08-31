<?php

namespace PicturePark\API\Model;

class MetadataValuesSchemaItemRemoveCommand extends MetadataValuesChangeCommandBase
{
    /**
     * The ID of the schema to which the operation scope is addressed.
     *
     * @var string
     */
    protected $schemaId;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
    * The path of the field relative to the Content or Layer schema values defined by the schemaId property.
    (i.e. add a team (existing list item) to the work information of a person: fieldPath = "workInfo.teams", schemaId = "PersonLayer").
    *
    * @var string
    */
    protected $fieldPath;
    /**
     * The field namespace.
     *
     * @var string
     */
    protected $fieldNamespace;
    /**
     * The ID of the list item to be removed.
     *
     * @var string
     */
    protected $referenceId;
    /**
     * The ID of the schema to which the operation scope is addressed.
     *
     * @return string
     */
    public function getSchemaId() : string
    {
        return $this->schemaId;
    }
    /**
     * The ID of the schema to which the operation scope is addressed.
     *
     * @param string $schemaId
     *
     * @return self
     */
    public function setSchemaId(string $schemaId) : self
    {
        $this->schemaId = $schemaId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
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
        $this->fieldPath = $fieldPath;
        return $this;
    }
    /**
     * The field namespace.
     *
     * @return string
     */
    public function getFieldNamespace() : string
    {
        return $this->fieldNamespace;
    }
    /**
     * The field namespace.
     *
     * @param string $fieldNamespace
     *
     * @return self
     */
    public function setFieldNamespace(string $fieldNamespace) : self
    {
        $this->fieldNamespace = $fieldNamespace;
        return $this;
    }
    /**
     * The ID of the list item to be removed.
     *
     * @return string
     */
    public function getReferenceId() : string
    {
        return $this->referenceId;
    }
    /**
     * The ID of the list item to be removed.
     *
     * @param string $referenceId
     *
     * @return self
     */
    public function setReferenceId(string $referenceId) : self
    {
        $this->referenceId = $referenceId;
        return $this;
    }
}