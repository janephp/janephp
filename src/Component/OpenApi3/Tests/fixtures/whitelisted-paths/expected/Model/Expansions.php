<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Expansions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<CompactUser>|list<DefaultUser>|list<DetailedUser>
     */
    public array $users;
    /**
     * @var list<CompactTweet>|list<DefaultTweet>|list<DetailedTweet>
     */
    public array $tweets;
    /**
     * @var list<CompactPlace>|list<DefaultPlace>|list<DetailedPlace>
     */
    public array $places;
    /**
     * @var list<Photo>|list<Video>|list<AnimatedGif>
     */
    public array $media;
    /**
     * @var list<Poll>
     */
    public array $polls;
    public function definedProperties(): array
    {
        return ['users' => 'users', 'tweets' => 'tweets', 'places' => 'places', 'media' => 'media', 'polls' => 'polls'];
    }
}