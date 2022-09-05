<?php

namespace PicturePark\API\Model;

class ContentSchemaCondition extends BusinessRuleCondition
{
    /**
     * Content schema id to match on.
     *
     * @var string|null
     */
    protected $schemaId;
    /**
     * Content schema id to match on.
     *
     * @return string|null
     */
    public function getSchemaId() : ?string
    {
        return $this->schemaId;
    }
    /**
     * Content schema id to match on.
     *
     * @param string|null $schemaId
     *
     * @return self
     */
    public function setSchemaId(?string $schemaId) : self
    {
        $this->schemaId = $schemaId;
        return $this;
    }
}