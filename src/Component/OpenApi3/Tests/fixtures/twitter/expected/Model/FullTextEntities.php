<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class FullTextEntities extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['urls'] = true;
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
        $this->initialized['hashtags'] = true;
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
        $this->initialized['mentions'] = true;
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
        $this->initialized['cashtags'] = true;
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
        $this->initialized['annotations'] = true;
        $this->annotations = $annotations;
        return $this;
    }
}