<?php

namespace Github\Model;

class TopicSearchResultItemRelatedItemTopicRelation
{
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $topicId;
    /**
     * 
     *
     * @var string
     */
    protected $relationType;
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTopicId() : int
    {
        return $this->topicId;
    }
    /**
     * 
     *
     * @param int $topicId
     *
     * @return self
     */
    public function setTopicId(int $topicId) : self
    {
        $this->topicId = $topicId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRelationType() : string
    {
        return $this->relationType;
    }
    /**
     * 
     *
     * @param string $relationType
     *
     * @return self
     */
    public function setRelationType(string $relationType) : self
    {
        $this->relationType = $relationType;
        return $this;
    }
}