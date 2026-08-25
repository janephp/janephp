<?php

namespace ApiPlatform\Demo\Model;

use ApiPlatform\Demo\Runtime\AdditionalAndPatternProperties;
use ApiPlatform\Demo\Runtime\AdditionalPropertiesInterface;
class BookJsonhalReviewReadLinks implements AdditionalPropertiesInterface
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
     * @var BookJsonhalReviewReadLinksSelf
     */
    protected $self;
    /**
     * @return BookJsonhalReviewReadLinksSelf
     */
    public function getSelf(): BookJsonhalReviewReadLinksSelf
    {
        return $this->self;
    }
    /**
     * @param BookJsonhalReviewReadLinksSelf $self
     *
     * @return self
     */
    public function setSelf(BookJsonhalReviewReadLinksSelf $self): self
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