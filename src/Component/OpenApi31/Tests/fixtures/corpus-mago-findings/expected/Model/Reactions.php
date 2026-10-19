<?php

namespace Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Model;

use Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Runtime\AdditionalPropertiesInterface;
class Reactions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $n1;
    /**
     * @var int
     */
    public int $n12;
    /**
     * @var mixed|null
     */
    public $labels;
    public function definedProperties(): array
    {
        return ['n1' => '+1', 'n12' => '-1', 'labels' => 'labels'];
    }
}