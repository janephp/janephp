<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model;

use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalPropertiesInterface;
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