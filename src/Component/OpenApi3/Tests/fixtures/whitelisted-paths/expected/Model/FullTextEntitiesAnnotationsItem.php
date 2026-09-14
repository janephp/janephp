<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalPropertiesInterface;
class FullTextEntitiesAnnotationsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Index (zero-based) at which position this entity starts.
     *
     * @var int
     */
    public int $start;
    /**
     * Index (zero-based) at which position this entity ends.
     *
     * @var int
     */
    public int $end;
    /**
     * Confidence factor for annotation type.
     *
     * @var float
     */
    public float $probability;
    /**
     * Annotation type.
     *
     * @var string
     */
    public string $type;
    /**
     * Text used to determine annotation.
     *
     * @var string
     */
    public string $normalizedText;
    public function definedProperties(): array
    {
        return ['start' => 'start', 'end' => 'end', 'probability' => 'probability', 'type' => 'type', 'normalizedText' => 'normalized_text'];
    }
}