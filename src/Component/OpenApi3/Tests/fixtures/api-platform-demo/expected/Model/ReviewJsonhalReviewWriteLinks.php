<?php

namespace ApiPlatform\Demo\Model;

class ReviewJsonhalReviewWriteLinks extends \ArrayObject
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
     * @var ReviewJsonhalReviewWriteLinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @return ReviewJsonhalReviewWriteLinksSelf
     */
    public function getSelf() : ReviewJsonhalReviewWriteLinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param ReviewJsonhalReviewWriteLinksSelf $self
     *
     * @return self
     */
    public function setSelf(ReviewJsonhalReviewWriteLinksSelf $self) : self
    {
        $this->initialized['self'] = true;
        $this->self = $self;
        return $this;
    }
}