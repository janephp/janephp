<?php

namespace Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Model;

use Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Runtime\AdditionalPropertiesInterface;
class GroupInvite implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $maxAge;
    public function definedProperties(): array
    {
        return ['maxAge' => 'max_age'];
    }
}