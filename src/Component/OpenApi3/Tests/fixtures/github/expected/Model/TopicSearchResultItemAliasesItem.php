<?php

namespace Github\Model;

class TopicSearchResultItemAliasesItem extends \ArrayObject
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
     * @var TopicSearchResultItemAliasesItemTopicRelation
     */
    protected $topicRelation;
    /**
     * 
     *
     * @return TopicSearchResultItemAliasesItemTopicRelation
     */
    public function getTopicRelation() : TopicSearchResultItemAliasesItemTopicRelation
    {
        return $this->topicRelation;
    }
    /**
     * 
     *
     * @param TopicSearchResultItemAliasesItemTopicRelation $topicRelation
     *
     * @return self
     */
    public function setTopicRelation(TopicSearchResultItemAliasesItemTopicRelation $topicRelation) : self
    {
        $this->initialized['topicRelation'] = true;
        $this->topicRelation = $topicRelation;
        return $this;
    }
}