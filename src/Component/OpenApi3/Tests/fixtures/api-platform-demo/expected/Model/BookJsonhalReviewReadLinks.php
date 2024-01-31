<?php

namespace ApiPlatform\Demo\Model;

class BookJsonhalReviewReadLinks extends \ArrayObject
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
     * @var BookJsonhalReviewReadLinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @return BookJsonhalReviewReadLinksSelf
     */
    public function getSelf() : BookJsonhalReviewReadLinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param BookJsonhalReviewReadLinksSelf $self
     *
     * @return self
     */
    public function setSelf(BookJsonhalReviewReadLinksSelf $self) : self
    {
        $this->initialized['self'] = true;
        $this->self = $self;
        return $this;
    }
}