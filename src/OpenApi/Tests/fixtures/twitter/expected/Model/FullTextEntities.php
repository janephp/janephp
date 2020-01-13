<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class FullTextEntities
{
    /**
     * 
     *
     * @var UrlEntity[]
     */
    protected $urls;
    /**
     * 
     *
     * @var HashtagEntity[]
     */
    protected $hashtags;
    /**
     * 
     *
     * @var MentionEntity[]
     */
    protected $mentions;
    /**
     * 
     *
     * @var CashtagEntity[]
     */
    protected $cashtags;
    /**
     * 
     *
     * @var FullTextEntitiesAnnotationsItem[]
     */
    protected $annotations;
    /**
     * 
     *
     * @return UrlEntity[]
     */
    public function getUrls() : array
    {
        return $this->urls;
    }
    /**
     * 
     *
     * @param UrlEntity[] $urls
     *
     * @return self
     */
    public function setUrls(array $urls) : self
    {
        $this->urls = $urls;
        return $this;
    }
    /**
     * 
     *
     * @return HashtagEntity[]
     */
    public function getHashtags() : array
    {
        return $this->hashtags;
    }
    /**
     * 
     *
     * @param HashtagEntity[] $hashtags
     *
     * @return self
     */
    public function setHashtags(array $hashtags) : self
    {
        $this->hashtags = $hashtags;
        return $this;
    }
    /**
     * 
     *
     * @return MentionEntity[]
     */
    public function getMentions() : array
    {
        return $this->mentions;
    }
    /**
     * 
     *
     * @param MentionEntity[] $mentions
     *
     * @return self
     */
    public function setMentions(array $mentions) : self
    {
        $this->mentions = $mentions;
        return $this;
    }
    /**
     * 
     *
     * @return CashtagEntity[]
     */
    public function getCashtags() : array
    {
        return $this->cashtags;
    }
    /**
     * 
     *
     * @param CashtagEntity[] $cashtags
     *
     * @return self
     */
    public function setCashtags(array $cashtags) : self
    {
        $this->cashtags = $cashtags;
        return $this;
    }
    /**
     * 
     *
     * @return FullTextEntitiesAnnotationsItem[]
     */
    public function getAnnotations() : array
    {
        return $this->annotations;
    }
    /**
     * 
     *
     * @param FullTextEntitiesAnnotationsItem[] $annotations
     *
     * @return self
     */
    public function setAnnotations(array $annotations) : self
    {
        $this->annotations = $annotations;
        return $this;
    }
}