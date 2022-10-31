<?php

namespace PicturePark\API\Model;

class NGramTransformation extends BusinessRuleTransformation
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
        $this->initialized['size'] = true;
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
        $this->initialized['minWordLength'] = true;
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
        $this->initialized['maxWordLength'] = true;
        $this->maxWordLength = $maxWordLength;
        return $this;
    }
}