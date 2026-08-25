<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class TopicSearchResultItemRelatedItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var TopicSearchResultItemRelatedItemTopicRelation
     */
    protected $topicRelation;
    /**
     * @return TopicSearchResultItemRelatedItemTopicRelation
     */
    public function getTopicRelation(): TopicSearchResultItemRelatedItemTopicRelation
    {
        return $this->topicRelation;
    }
    /**
     * @param TopicSearchResultItemRelatedItemTopicRelation $topicRelation
     *
     * @return self
     */
    public function setTopicRelation(TopicSearchResultItemRelatedItemTopicRelation $topicRelation): self
    {
        $this->initialized['topicRelation'] = true;
        $this->topicRelation = $topicRelation;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['topicRelation' => ['topic_relation', 'getTopicRelation', 'setTopicRelation']];
    }
}