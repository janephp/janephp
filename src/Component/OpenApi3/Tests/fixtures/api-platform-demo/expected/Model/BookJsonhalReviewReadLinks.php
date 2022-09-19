<?php

namespace ApiPlatform\Demo\Model;

class BookJsonhalReviewReadLinks
{
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
        $this->self = $self;
        return $this;
    }
}