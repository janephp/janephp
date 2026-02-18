<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiPrompt extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The evaluated trace spans.
     *
     * @var list<ApiEvaluationTraceSpan>
     */
    protected $evaluationTraceSpans;
    /**
     * The ground truth for the prompt.
     *
     * @var string
     */
    protected $groundTruth;
    /**
     * @var string
     */
    protected $input;
    /**
     * The number of input tokens used in the prompt.
     *
     * @var string
     */
    protected $inputTokens;
    /**
     * @var string
     */
    protected $output;
    /**
     * The number of output tokens used in the prompt.
     *
     * @var string
     */
    protected $outputTokens;
    /**
     * The list of prompt chunks.
     *
     * @var list<ApiPromptChunk>
     */
    protected $promptChunks;
    /**
     * Prompt ID
     *
     * @var int
     */
    protected $promptId;
    /**
     * The metric results for the prompt.
     *
     * @var list<ApiEvaluationMetricResult>
     */
    protected $promptLevelMetricResults;
    /**
     * The trace id for the prompt.
     *
     * @var string
     */
    protected $traceId;
    /**
     * The evaluated trace spans.
     *
     * @return list<ApiEvaluationTraceSpan>
     */
    public function getEvaluationTraceSpans(): array
    {
        return $this->evaluationTraceSpans;
    }
    /**
     * The evaluated trace spans.
     *
     * @param list<ApiEvaluationTraceSpan> $evaluationTraceSpans
     *
     * @return self
     */
    public function setEvaluationTraceSpans(array $evaluationTraceSpans): self
    {
        $this->initialized['evaluationTraceSpans'] = true;
        $this->evaluationTraceSpans = $evaluationTraceSpans;
        return $this;
    }
    /**
     * The ground truth for the prompt.
     *
     * @return string
     */
    public function getGroundTruth(): string
    {
        return $this->groundTruth;
    }
    /**
     * The ground truth for the prompt.
     *
     * @param string $groundTruth
     *
     * @return self
     */
    public function setGroundTruth(string $groundTruth): self
    {
        $this->initialized['groundTruth'] = true;
        $this->groundTruth = $groundTruth;
        return $this;
    }
    /**
     * @return string
     */
    public function getInput(): string
    {
        return $this->input;
    }
    /**
     * @param string $input
     *
     * @return self
     */
    public function setInput(string $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;
        return $this;
    }
    /**
     * The number of input tokens used in the prompt.
     *
     * @return string
     */
    public function getInputTokens(): string
    {
        return $this->inputTokens;
    }
    /**
     * The number of input tokens used in the prompt.
     *
     * @param string $inputTokens
     *
     * @return self
     */
    public function setInputTokens(string $inputTokens): self
    {
        $this->initialized['inputTokens'] = true;
        $this->inputTokens = $inputTokens;
        return $this;
    }
    /**
     * @return string
     */
    public function getOutput(): string
    {
        return $this->output;
    }
    /**
     * @param string $output
     *
     * @return self
     */
    public function setOutput(string $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
    /**
     * The number of output tokens used in the prompt.
     *
     * @return string
     */
    public function getOutputTokens(): string
    {
        return $this->outputTokens;
    }
    /**
     * The number of output tokens used in the prompt.
     *
     * @param string $outputTokens
     *
     * @return self
     */
    public function setOutputTokens(string $outputTokens): self
    {
        $this->initialized['outputTokens'] = true;
        $this->outputTokens = $outputTokens;
        return $this;
    }
    /**
     * The list of prompt chunks.
     *
     * @return list<ApiPromptChunk>
     */
    public function getPromptChunks(): array
    {
        return $this->promptChunks;
    }
    /**
     * The list of prompt chunks.
     *
     * @param list<ApiPromptChunk> $promptChunks
     *
     * @return self
     */
    public function setPromptChunks(array $promptChunks): self
    {
        $this->initialized['promptChunks'] = true;
        $this->promptChunks = $promptChunks;
        return $this;
    }
    /**
     * Prompt ID
     *
     * @return int
     */
    public function getPromptId(): int
    {
        return $this->promptId;
    }
    /**
     * Prompt ID
     *
     * @param int $promptId
     *
     * @return self
     */
    public function setPromptId(int $promptId): self
    {
        $this->initialized['promptId'] = true;
        $this->promptId = $promptId;
        return $this;
    }
    /**
     * The metric results for the prompt.
     *
     * @return list<ApiEvaluationMetricResult>
     */
    public function getPromptLevelMetricResults(): array
    {
        return $this->promptLevelMetricResults;
    }
    /**
     * The metric results for the prompt.
     *
     * @param list<ApiEvaluationMetricResult> $promptLevelMetricResults
     *
     * @return self
     */
    public function setPromptLevelMetricResults(array $promptLevelMetricResults): self
    {
        $this->initialized['promptLevelMetricResults'] = true;
        $this->promptLevelMetricResults = $promptLevelMetricResults;
        return $this;
    }
    /**
     * The trace id for the prompt.
     *
     * @return string
     */
    public function getTraceId(): string
    {
        return $this->traceId;
    }
    /**
     * The trace id for the prompt.
     *
     * @param string $traceId
     *
     * @return self
     */
    public function setTraceId(string $traceId): self
    {
        $this->initialized['traceId'] = true;
        $this->traceId = $traceId;
        return $this;
    }
}