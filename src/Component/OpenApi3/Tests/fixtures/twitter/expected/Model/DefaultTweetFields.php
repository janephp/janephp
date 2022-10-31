<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DefaultTweetFields extends \ArrayObject
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
     * The location tagged on the Tweet, if the user provided one.
     *
     * @var DefaultTweetFieldsGeo
     */
    protected $geo;
    /**
     * 
     *
     * @var FullTextEntities
     */
    protected $entities;
    /**
     * The location tagged on the Tweet, if the user provided one.
     *
     * @return DefaultTweetFieldsGeo
     */
    public function getGeo() : DefaultTweetFieldsGeo
    {
        return $this->geo;
    }
    /**
     * The location tagged on the Tweet, if the user provided one.
     *
     * @param DefaultTweetFieldsGeo $geo
     *
     * @return self
     */
    public function setGeo(DefaultTweetFieldsGeo $geo) : self
    {
        $this->initialized['geo'] = true;
        $this->geo = $geo;
        return $this;
    }
    /**
     * 
     *
     * @return FullTextEntities
     */
    public function getEntities() : FullTextEntities
    {
        return $this->entities;
    }
    /**
     * 
     *
     * @param FullTextEntities $entities
     *
     * @return self
     */
    public function setEntities(FullTextEntities $entities) : self
    {
        $this->initialized['entities'] = true;
        $this->entities = $entities;
        return $this;
    }
}