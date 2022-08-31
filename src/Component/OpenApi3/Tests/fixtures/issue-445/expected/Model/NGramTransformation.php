<?php

namespace PicturePark\API\Model;

class NGramTransformation extends BusinessRuleTransformation
{
    /**
     * Optional trace log reference ID set by the system when EnableTracing is set to true on the associated rule.
     *
     * @var string|null
     */
    protected $traceRefId;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
    * Maximum size of n-grams to produce.
    Settings this to 3 will produce unigrams, bigrams, trigrams.
    *
    * @var int
    */
    protected $size;
    /**
     * Minimum length of a word to be considered.
     *
     * @var int
     */
    protected $minWordLength;
    /**
     * Maximum length of a word to be considered.
     *
     * @var int|null
     */
    protected $maxWordLength;
    /**
     * Optional trace log reference ID set by the system when EnableTracing is set to true on the associated rule.
     *
     * @return string|null
     */
    public function getTraceRefId() : ?string
    {
        return $this->traceRefId;
    }
    /**
     * Optional trace log reference ID set by the system when EnableTracing is set to true on the associated rule.
     *
     * @param string|null $traceRefId
     *
     * @return self
     */
    public function setTraceRefId(?string $traceRefId) : self
    {
        $this->traceRefId = $traceRefId;
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
    * Maximum size of n-grams to produce.
    Settings this to 3 will produce unigrams, bigrams, trigrams.
    *
    * @return int
    */
    public function getSize() : int
    {
        return $this->size;
    }
    /**
    * Maximum size of n-grams to produce.
    Settings this to 3 will produce unigrams, bigrams, trigrams.
    *
    * @param int $size
    *
    * @return self
    */
    public function setSize(int $size) : self
    {
        $this->size = $size;
        return $this;
    }
    /**
     * Minimum length of a word to be considered.
     *
     * @return int
     */
    public function getMinWordLength() : int
    {
        return $this->minWordLength;
    }
    /**
     * Minimum length of a word to be considered.
     *
     * @param int $minWordLength
     *
     * @return self
     */
    public function setMinWordLength(int $minWordLength) : self
    {
        $this->minWordLength = $minWordLength;
        return $this;
    }
    /**
     * Maximum length of a word to be considered.
     *
     * @return int|null
     */
    public function getMaxWordLength() : ?int
    {
        return $this->maxWordLength;
    }
    /**
     * Maximum length of a word to be considered.
     *
     * @param int|null $maxWordLength
     *
     * @return self
     */
    public function setMaxWordLength(?int $maxWordLength) : self
    {
        $this->maxWordLength = $maxWordLength;
        return $this;
    }
}