<?php

namespace ApiPlatform\Demo\Model;

use ApiPlatform\Demo\Runtime\AdditionalAndPatternProperties;
use ApiPlatform\Demo\Runtime\AdditionalPropertiesInterface;
class ReviewJsonhalReviewWriteLinks implements AdditionalPropertiesInterface
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
     * @var ReviewJsonhalReviewWriteLinksSelf
     */
    protected $self;
    /**
     * @return ReviewJsonhalReviewWriteLinksSelf
     */
    public function getSelf(): ReviewJsonhalReviewWriteLinksSelf
    {
        return $this->self;
    }
    /**
     * @param ReviewJsonhalReviewWriteLinksSelf $self
     *
     * @return self
     */
    public function setSelf(ReviewJsonhalReviewWriteLinksSelf $self): self
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