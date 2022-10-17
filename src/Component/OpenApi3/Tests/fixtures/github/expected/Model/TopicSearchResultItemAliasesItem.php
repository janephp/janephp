<?php

namespace Github\Model;

class TopicSearchResultItemAliasesItem extends \ArrayObject
{
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
        $this->topicRelation = $topicRelation;
        return $this;
    }
}