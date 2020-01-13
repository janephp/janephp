<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class FullTextEntitiesAnnotationsItem
{
    /**
     * Index (zero-based) at which position this entity starts.
     *
     * @var int
     */
    protected $start;
    /**
     * Index (zero-based) at which position this entity ends.
     *
     * @var int
     */
    protected $end;
    /**
     * Confidence factor for annotation type.
     *
     * @var float
     */
    protected $probability;
    /**
     * Annotation type.
     *
     * @var string
     */
    protected $type;
    /**
     * Text used to determine annotation.
     *
     * @var string
     */
    protected $normalizedText;
    /**
     * Index (zero-based) at which position this entity starts.
     *
     * @return int
     */
    public function getStart() : int
    {
        return $this->start;
    }
    /**
     * Index (zero-based) at which position this entity starts.
     *
     * @param int $start
     *
     * @return self
     */
    public function setStart(int $start) : self
    {
        $this->start = $start;
        return $this;
    }
    /**
     * Index (zero-based) at which position this entity ends.
     *
     * @return int
     */
    public function getEnd() : int
    {
        return $this->end;
    }
    /**
     * Index (zero-based) at which position this entity ends.
     *
     * @param int $end
     *
     * @return self
     */
    public function setEnd(int $end) : self
    {
        $this->end = $end;
        return $this;
    }
    /**
     * Confidence factor for annotation type.
     *
     * @return float
     */
    public function getProbability() : float
    {
        return $this->probability;
    }
    /**
     * Confidence factor for annotation type.
     *
     * @param float $probability
     *
     * @return self
     */
    public function setProbability(float $probability) : self
    {
        $this->probability = $probability;
        return $this;
    }
    /**
     * Annotation type.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Annotation type.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Text used to determine annotation.
     *
     * @return string
     */
    public function getNormalizedText() : string
    {
        return $this->normalizedText;
    }
    /**
     * Text used to determine annotation.
     *
     * @param string $normalizedText
     *
     * @return self
     */
    public function setNormalizedText(string $normalizedText) : self
    {
        $this->normalizedText = $normalizedText;
        return $this;
    }
}