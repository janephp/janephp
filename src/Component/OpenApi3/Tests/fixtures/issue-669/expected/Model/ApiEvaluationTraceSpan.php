<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiEvaluationTraceSpan implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * When the span was created
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * Input data for the span (flexible structure - can be messages array, string, etc.)
     *
     * @var array<string, mixed>
     */
    public iterable $input;
    /**
     * Name/identifier for the span
     *
     * @var string
     */
    public string $name;
    /**
     * Output data from the span (flexible structure - can be message, string, etc.)
     *
     * @var array<string, mixed>
     */
    public iterable $output;
    /**
     * Any retriever span chunks that were included as part of the span.
     *
     * @var list<ApiPromptChunk>
     */
    public array $retrieverChunks;
    /**
     * The span-level metric results.
     *
     * @var list<ApiEvaluationMetricResult>
     */
    public array $spanLevelMetricResults;
    /**
     * Types of spans in a trace
     *
     * @var string
     */
    public string $type = 'TRACE_SPAN_TYPE_UNKNOWN';
    public function definedProperties(): array
    {
        return ['createdAt' => 'created_at', 'input' => 'input', 'name' => 'name', 'output' => 'output', 'retrieverChunks' => 'retriever_chunks', 'spanLevelMetricResults' => 'span_level_metric_results', 'type' => 'type'];
    }
}