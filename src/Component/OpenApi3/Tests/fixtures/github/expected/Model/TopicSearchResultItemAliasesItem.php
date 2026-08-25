<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class TopicSearchResultItemAliasesItem implements AdditionalPropertiesInterface
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
     * @var TopicSearchResultItemAliasesItemTopicRelation
     */
    protected $topicRelation;
    /**
     * @return TopicSearchResultItemAliasesItemTopicRelation
     */
    public function getTopicRelation(): TopicSearchResultItemAliasesItemTopicRelation
    {
        return $this->topicRelation;
    }
    /**
     * @param TopicSearchResultItemAliasesItemTopicRelation $topicRelation
     *
     * @return self
     */
    public function setTopicRelation(TopicSearchResultItemAliasesItemTopicRelation $topicRelation): self
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