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
     * @var list<UrlEntity>
     */
    protected $urls;
    /**
     * 
     *
     * @var list<HashtagEntity>
     */
    protected $hashtags;
    /**
     * 
     *
     * @var list<MentionEntity>
     */
    protected $mentions;
    /**
     * 
     *
     * @var list<CashtagEntity>
     */
    protected $cashtags;
    /**
     * 
     *
     * @var list<FullTextEntitiesAnnotationsItem>
     */
    protected $annotations;
    /**
     * 
     *
     * @return list<UrlEntity>
     */
    public function getUrls() : array
    {
        return $this->urls;
    }
    /**
     * 
     *
     * @param list<UrlEntity> $urls
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
     * @return list<HashtagEntity>
     */
    public function getHashtags() : array
    {
        return $this->hashtags;
    }
    /**
     * 
     *
     * @param list<HashtagEntity> $hashtags
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
     * @return list<MentionEntity>
     */
    public function getMentions() : array
    {
        return $this->mentions;
    }
    /**
     * 
     *
     * @param list<MentionEntity> $mentions
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
     * @return list<CashtagEntity>
     */
    public function getCashtags() : array
    {
        return $this->cashtags;
    }
    /**
     * 
     *
     * @param list<CashtagEntity> $cashtags
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
     * @return list<FullTextEntitiesAnnotationsItem>
     */
    public function getAnnotations() : array
    {
        return $this->annotations;
    }
    /**
     * 
     *
     * @param list<FullTextEntitiesAnnotationsItem> $annotations
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