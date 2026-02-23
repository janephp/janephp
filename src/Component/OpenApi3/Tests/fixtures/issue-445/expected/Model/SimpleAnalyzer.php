<?php

namespace PicturePark\API\Model;

class SimpleAnalyzer extends AnalyzerBase
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The analyzer type: Simple
     *
     * @var string
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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The analyzer type: Simple
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The suffix for the analyzed field: simple.
     *
     * @return string|null
     */
    public function getFieldSuffix(): ?string
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
    public function setFieldSuffix(?string $fieldSuffix): self
    {
        $this->initialized['fieldSuffix'] = true;
        $this->fieldSuffix = $fieldSuffix;
        return $this;
    }
}