<?php

namespace ApiPlatform\Demo\Model;

use ApiPlatform\Demo\Runtime\AdditionalAndPatternProperties;
use ApiPlatform\Demo\Runtime\AdditionalPropertiesInterface;
class ReviewJsonhalReviewReadLinks implements AdditionalPropertiesInterface
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
     * @var ReviewJsonhalReviewReadLinksSelf
     */
    protected $self;
    /**
     * @return ReviewJsonhalReviewReadLinksSelf
     */
    public function getSelf(): ReviewJsonhalReviewReadLinksSelf
    {
        return $this->self;
    }
    /**
     * @param ReviewJsonhalReviewReadLinksSelf $self
     *
     * @return self
     */
    public function setSelf(ReviewJsonhalReviewReadLinksSelf $self): self
    {
        $this->initialized['self'] = true;
        $this->self = $self;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['self' => ['self', 'getSelf', 'setSelf']];
    }
}