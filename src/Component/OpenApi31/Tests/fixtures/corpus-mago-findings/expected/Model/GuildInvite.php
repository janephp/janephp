<?php

namespace Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Model;

use Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Runtime\AdditionalPropertiesInterface;
class GuildInvite implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var bool
     */
    public bool $unique;
    public function definedProperties(): array
    {
        return ['unique' => 'unique'];
    }
}