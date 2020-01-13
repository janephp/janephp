<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class DetailedTweetFields
{
    /**
     * Engagement metrics for the Tweet at the time of the request.
     *
     * @var DetailedTweetFieldsStats
     */
    protected $stats;
    /**
     * 
     *
     * @var ContextAnnotation[]
     */
    protected $contextAnnotation;
    /**
     * Indicates if this Tweet contains URLs marked as sensitive, for example content suitable for mature audiences.
     *
     * @var bool
     */
    protected $possiblySensitive;
    /**
     * Language of the Tweet, if detected by Twitter. Returned as a BCP47 language tag.
     *
     * @var string
     */
    protected $lang;
    /**
     * The name of the app the user Tweeted from.
     *
     * @var string
     */
    protected $source;
    /**
     * Engagement metrics for the Tweet at the time of the request.
     *
     * @return DetailedTweetFieldsStats
     */
    public function getStats() : DetailedTweetFieldsStats
    {
        return $this->stats;
    }
    /**
     * Engagement metrics for the Tweet at the time of the request.
     *
     * @param DetailedTweetFieldsStats $stats
     *
     * @return self
     */
    public function setStats(DetailedTweetFieldsStats $stats) : self
    {
        $this->stats = $stats;
        return $this;
    }
    /**
     * 
     *
     * @return ContextAnnotation[]
     */
    public function getContextAnnotation() : array
    {
        return $this->contextAnnotation;
    }
    /**
     * 
     *
     * @param ContextAnnotation[] $contextAnnotation
     *
     * @return self
     */
    public function setContextAnnotation(array $contextAnnotation) : self
    {
        $this->contextAnnotation = $contextAnnotation;
        return $this;
    }
    /**
     * Indicates if this Tweet contains URLs marked as sensitive, for example content suitable for mature audiences.
     *
     * @return bool
     */
    public function getPossiblySensitive() : bool
    {
        return $this->possiblySensitive;
    }
    /**
     * Indicates if this Tweet contains URLs marked as sensitive, for example content suitable for mature audiences.
     *
     * @param bool $possiblySensitive
     *
     * @return self
     */
    public function setPossiblySensitive(bool $possiblySensitive) : self
    {
        $this->possiblySensitive = $possiblySensitive;
        return $this;
    }
    /**
     * Language of the Tweet, if detected by Twitter. Returned as a BCP47 language tag.
     *
     * @return string
     */
    public function getLang() : string
    {
        return $this->lang;
    }
    /**
     * Language of the Tweet, if detected by Twitter. Returned as a BCP47 language tag.
     *
     * @param string $lang
     *
     * @return self
     */
    public function setLang(string $lang) : self
    {
        $this->lang = $lang;
        return $this;
    }
    /**
     * The name of the app the user Tweeted from.
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * The name of the app the user Tweeted from.
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source) : self
    {
        $this->source = $source;
        return $this;
    }
}