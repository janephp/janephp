<?php

namespace Github\Model;

class TopicSearchResultItemRelatedItem extends \ArrayObject
{
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
        $this->topicRelation = $topicRelation;
        return $this;
    }
}