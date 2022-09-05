<?php

namespace PicturePark\API\Model;

class SimpleAnalyzer extends AnalyzerBase
{
    /**
     * The analyzer type: Simple
     *
     * @var mixed
     */
    protected $type;
    /**
     * The suffix for the analyzed field: simple.
     *
     * @var string|null
     */
    protected $fieldSuffix;
    /**
     * The analyzer type: Simple
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * The analyzer type: Simple
     *
     * @param mixed $type
     *
     * @return self
     */
    public function setType($type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * The suffix for the analyzed field: simple.
     *
     * @return string|null
     */
    public function getFieldSuffix() : ?string
    {
        return $this->fieldSuffix;
    }
    /**
     * The suffix for the analyzed field: simple.
     *
     * @param string|null $fieldSuffix
     *
     * @return self
     */
    public function setFieldSuffix(?string $fieldSuffix) : self
    {
        $this->fieldSuffix = $fieldSuffix;
        return $this;
    }
}