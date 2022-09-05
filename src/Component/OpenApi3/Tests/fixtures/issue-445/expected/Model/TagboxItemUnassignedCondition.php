<?php

namespace PicturePark\API\Model;

class TagboxItemUnassignedCondition extends BusinessRuleCondition
{
    /**
     * JSON path to the field
     *
     * @var string|null
     */
    protected $fieldPath;
    /**
     * Ref Id of the list item that was unassigned from the tagbox
     *
     * @var string|null
     */
    protected $refId;
    /**
     * JSON path to the field
     *
     * @return string|null
     */
    public function getFieldPath() : ?string
    {
        return $this->fieldPath;
    }
    /**
     * JSON path to the field
     *
     * @param string|null $fieldPath
     *
     * @return self
     */
    public function setFieldPath(?string $fieldPath) : self
    {
        $this->fieldPath = $fieldPath;
        return $this;
    }
    /**
     * Ref Id of the list item that was unassigned from the tagbox
     *
     * @return string|null
     */
    public function getRefId() : ?string
    {
        return $this->refId;
    }
    /**
     * Ref Id of the list item that was unassigned from the tagbox
     *
     * @param string|null $refId
     *
     * @return self
     */
    public function setRefId(?string $refId) : self
    {
        $this->refId = $refId;
        return $this;
    }
}