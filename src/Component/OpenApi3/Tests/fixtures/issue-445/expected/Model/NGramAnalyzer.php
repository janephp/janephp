<?php

namespace PicturePark\API\Model;

class NGramAnalyzer extends AnalyzerBase
{
    /**
     * The analyzer type: NGram
     *
     * @var mixed
     */
    protected $type;
    /**
     * The suffix for the analyzed field: ngram.
     *
     * @var string|null
     */
    protected $fieldSuffix;
    /**
     * The analyzer type: NGram
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * The analyzer type: NGram
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
     * The suffix for the analyzed field: ngram.
     *
     * @return string|null
     */
    public function getFieldSuffix() : ?string
    {
        return $this->fieldSuffix;
    }
    /**
     * The suffix for the analyzed field: ngram.
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