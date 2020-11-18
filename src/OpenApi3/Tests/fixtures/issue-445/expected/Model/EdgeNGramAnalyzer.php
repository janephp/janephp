<?php

namespace PicturePark\API\Model;

class EdgeNGramAnalyzer
{
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * The analyzer type: EdgeNGram
     *
     * @var mixed
     */
    protected $type;
    /**
     * The suffix for the analyzed field: edgengram.
     *
     * @var string|null
     */
    protected $fieldSuffix;
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
     * The analyzer type: EdgeNGram
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * The analyzer type: EdgeNGram
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
     * The suffix for the analyzed field: edgengram.
     *
     * @return string|null
     */
    public function getFieldSuffix() : ?string
    {
        return $this->fieldSuffix;
    }
    /**
     * The suffix for the analyzed field: edgengram.
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