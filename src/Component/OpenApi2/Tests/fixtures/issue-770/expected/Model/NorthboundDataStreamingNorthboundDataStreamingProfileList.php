<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\AdditionalPropertiesInterface;
class NorthboundDataStreamingNorthboundDataStreamingProfileList implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<NorthboundDataStreamingNorthboundDataStreamingProfile>
     */
    public array $list;
    /**
     * @var NorthboundDataStreamingNorthboundDataStreamingProfileListExtra
     */
    public NorthboundDataStreamingNorthboundDataStreamingProfileListExtra $extra;
    public function definedProperties(): array
    {
        return ['list' => 'list', 'extra' => 'extra'];
    }
}