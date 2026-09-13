<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalPropertiesInterface;
class CompactUser implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $format;
    /**
     * Unique identifier of this User. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @var string
     */
    public string $id;
    /**
     * Creation time of this user.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * The friendly name of this user, as shown on their profile.
     *
     * @var string
     */
    public string $name;
    /**
     * The Twitter handle (screen name) of this user.
     *
     * @var string
     */
    public string $username;
    /**
     * Indicates if this user has chosen to protect their Tweets (in other words, if this user's Tweets are private).
     *
     * @var bool
     */
    public bool $protected;
    /**
     * Indicate if this user is a verified Twitter User.
     *
     * @var bool
     */
    public bool $verified;
    /**
     * Indicates withholding details for [withheld content](https://help.twitter.com/en/rules-and-policies/tweet-withheld-by-country).
     *
     * @var UserWithheld
     */
    public UserWithheld $withheld;
    /**
     * The URL to the profile image for this user.
     *
     * @var string
     */
    public string $profileImageUrl;
    public function definedProperties(): array
    {
        return ['format' => 'format', 'id' => 'id', 'createdAt' => 'created_at', 'name' => 'name', 'username' => 'username', 'protected' => 'protected', 'verified' => 'verified', 'withheld' => 'withheld', 'profileImageUrl' => 'profile_image_url'];
    }
}