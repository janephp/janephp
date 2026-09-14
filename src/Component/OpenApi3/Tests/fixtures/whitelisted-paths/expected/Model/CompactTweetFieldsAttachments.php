<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalPropertiesInterface;
class CompactTweetFieldsAttachments implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A list of Media Keys for each one of the media attachments (if media are attached).
     *
     * @var list<string>
     */
    public array $mediaKeys;
    /**
     * A list of poll IDs (if polls are attached).
     *
     * @var list<string>
     */
    public array $pollIds;
    public function definedProperties(): array
    {
        return ['mediaKeys' => 'media_keys', 'pollIds' => 'poll_ids'];
    }
}