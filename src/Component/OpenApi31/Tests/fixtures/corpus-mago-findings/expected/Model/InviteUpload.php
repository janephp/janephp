<?php

namespace Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Model;

use Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Runtime\AdditionalPropertiesInterface;
class InviteUpload implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $session;
    public function definedProperties(): array
    {
        return ['session' => 'session'];
    }
}