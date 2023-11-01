<?php

namespace PicturePark\API\Model;

class ContentRelationItemsChangedCondition extends BusinessRuleCondition
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
     * JSON path to the field
     *
     * @var string|null
     */
    protected $fieldPath;
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
        $this->initialized['fieldPath'] = true;
        $this->fieldPath = $fieldPath;
        return $this;
    }
}