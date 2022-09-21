<?php

namespace ApiPlatform\Demo\Model;

class ReviewJsonhalReviewWriteLinks
{
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
        $this->self = $self;
        return $this;
    }
}