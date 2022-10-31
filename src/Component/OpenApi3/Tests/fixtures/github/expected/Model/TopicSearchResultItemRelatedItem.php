<?php

namespace Github\Model;

class TopicSearchResultItemRelatedItem extends \ArrayObject
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
     * 
     *
     * @var TopicSearchResultItemRelatedItemTopicRelation
     */
    protected $topicRelation;
    /**
     * 
     *
     * @return TopicSearchResultItemRelatedItemTopicRelation
     */
    public function getTopicRelation() : TopicSearchResultItemRelatedItemTopicRelation
    {
        return $this->topicRelation;
    }
    /**
     * 
     *
     * @param TopicSearchResultItemRelatedItemTopicRelation $topicRelation
     *
     * @return self
     */
    public function setTopicRelation(TopicSearchResultItemRelatedItemTopicRelation $topicRelation) : self
    {
        $this->initialized['topicRelation'] = true;
        $this->topicRelation = $topicRelation;
        return $this;
    }
}