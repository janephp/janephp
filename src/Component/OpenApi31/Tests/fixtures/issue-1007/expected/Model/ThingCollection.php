<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue1007\Model;

use Jane\Component\OpenApi31\Tests\Expected\Issue1007\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Issue1007\Runtime\AdditionalPropertiesInterface;
class ThingCollection implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var AbsentAdditionalPropertiesSchema
     */
    public AbsentAdditionalPropertiesSchema $absent;
    /**
     * @var ExplicitOpenSchema
     */
    public ExplicitOpenSchema $explicitOpen;
    /**
     * @var ClosedSchema
     */
    public ClosedSchema $closed;
    /**
     * @var TypedMapSchema
     */
    public TypedMapSchema $typedMap;
    /**
     * @var PatternOnlySchema
     */
    public PatternOnlySchema $patternOnly;
    public function definedProperties(): array
    {
        return ['absent' => 'absent', 'explicitOpen' => 'explicitOpen', 'closed' => 'closed', 'typedMap' => 'typedMap', 'patternOnly' => 'patternOnly'];
    }
}