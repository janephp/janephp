<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiPrompt implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The evaluated trace spans.
     *
     * @var list<ApiEvaluationTraceSpan>
     */
    public array $evaluationTraceSpans;
    /**
     * The ground truth for the prompt.
     *
     * @var string
     */
    public string $groundTruth;
    /**
     * @var string
     */
    public string $input;
    /**
     * The number of input tokens used in the prompt.
     *
     * @var string
     */
    public string $inputTokens;
    /**
     * @var string
     */
    public string $output;
    /**
     * The number of output tokens used in the prompt.
     *
     * @var string
     */
    public string $outputTokens;
    /**
     * The list of prompt chunks.
     *
     * @var list<ApiPromptChunk>
     */
    public array $promptChunks;
    /**
     * Prompt ID
     *
     * @var int
     */
    public int $promptId;
    /**
     * The metric results for the prompt.
     *
     * @var list<ApiEvaluationMetricResult>
     */
    public array $promptLevelMetricResults;
    /**
     * The trace id for the prompt.
     *
     * @var string
     */
    public string $traceId;
    public function definedProperties(): array
    {
        return ['evaluationTraceSpans' => 'evaluation_trace_spans', 'groundTruth' => 'ground_truth', 'input' => 'input', 'inputTokens' => 'input_tokens', 'output' => 'output', 'outputTokens' => 'output_tokens', 'promptChunks' => 'prompt_chunks', 'promptId' => 'prompt_id', 'promptLevelMetricResults' => 'prompt_level_metric_results', 'traceId' => 'trace_id'];
    }
}