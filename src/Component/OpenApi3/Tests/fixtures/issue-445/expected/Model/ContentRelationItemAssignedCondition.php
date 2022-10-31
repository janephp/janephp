<?php

namespace PicturePark\API\Model;

class ContentRelationItemAssignedCondition extends BusinessRuleCondition
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
     * Content id that should be matched against.
     *
     * @var string|null
     */
    protected $contentId;
    /**
     * JSON path to the field
     *
     * @var string|null
     */
    protected $fieldPath;
    /**
     * Content id that should be matched against.
     *
     * @return string|null
     */
    public function getContentId() : ?string
    {
        return $this->contentId;
    }
    /**
     * Content id that should be matched against.
     *
     * @param string|null $contentId
     *
     * @return self
     */
    public function setContentId(?string $contentId) : self
    {
        $this->initialized['contentId'] = true;
        $this->contentId = $contentId;
        return $this;
    }
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