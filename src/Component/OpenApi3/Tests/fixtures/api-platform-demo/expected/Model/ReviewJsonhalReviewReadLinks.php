<?php

namespace ApiPlatform\Demo\Model;

class ReviewJsonhalReviewReadLinks extends \ArrayObject
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
     * @var ReviewJsonhalReviewReadLinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @return ReviewJsonhalReviewReadLinksSelf
     */
    public function getSelf() : ReviewJsonhalReviewReadLinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param ReviewJsonhalReviewReadLinksSelf $self
     *
     * @return self
     */
    public function setSelf(ReviewJsonhalReviewReadLinksSelf $self) : self
    {
        $this->initialized['self'] = true;
        $this->self = $self;
        return $this;
    }
}