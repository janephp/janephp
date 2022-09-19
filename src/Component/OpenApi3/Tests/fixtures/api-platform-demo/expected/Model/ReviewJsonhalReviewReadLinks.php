<?php

namespace ApiPlatform\Demo\Model;

class ReviewJsonhalReviewReadLinks
{
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
        $this->self = $self;
        return $this;
    }
}