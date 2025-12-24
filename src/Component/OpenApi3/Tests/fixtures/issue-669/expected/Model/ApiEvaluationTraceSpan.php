<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiEvaluationTraceSpan extends \ArrayObject
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
     * When the span was created
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Input data for the span (flexible structure - can be messages array, string, etc.)
     *
     * @var array<string, mixed>
     */
    protected $input;
    /**
     * Name/identifier for the span
     *
     * @var string
     */
    protected $name;
    /**
     * Output data from the span (flexible structure - can be message, string, etc.)
     *
     * @var array<string, mixed>
     */
    protected $output;
    /**
     * Any retriever span chunks that were included as part of the span.
     *
     * @var list<ApiPromptChunk>
     */
    protected $retrieverChunks;
    /**
     * The span-level metric results.
     *
     * @var list<ApiEvaluationMetricResult>
     */
    protected $spanLevelMetricResults;
    /**
     * Types of spans in a trace
     *
     * @var string
     */
    protected $type = 'TRACE_SPAN_TYPE_UNKNOWN';
    /**
     * When the span was created
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * When the span was created
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Input data for the span (flexible structure - can be messages array, string, etc.)
     *
     * @return array<string, mixed>
     */
    public function getInput(): iterable
    {
        return $this->input;
    }
    /**
     * Input data for the span (flexible structure - can be messages array, string, etc.)
     *
     * @param array<string, mixed> $input
     *
     * @return self
     */
    public function setInput(iterable $input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;
        return $this;
    }
    /**
     * Name/identifier for the span
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name/identifier for the span
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Output data from the span (flexible structure - can be message, string, etc.)
     *
     * @return array<string, mixed>
     */
    public function getOutput(): iterable
    {
        return $this->output;
    }
    /**
     * Output data from the span (flexible structure - can be message, string, etc.)
     *
     * @param array<string, mixed> $output
     *
     * @return self
     */
    public function setOutput(iterable $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
    /**
     * Any retriever span chunks that were included as part of the span.
     *
     * @return list<ApiPromptChunk>
     */
    public function getRetrieverChunks(): array
    {
        return $this->retrieverChunks;
    }
    /**
     * Any retriever span chunks that were included as part of the span.
     *
     * @param list<ApiPromptChunk> $retrieverChunks
     *
     * @return self
     */
    public function setRetrieverChunks(array $retrieverChunks): self
    {
        $this->initialized['retrieverChunks'] = true;
        $this->retrieverChunks = $retrieverChunks;
        return $this;
    }
    /**
     * The span-level metric results.
     *
     * @return list<ApiEvaluationMetricResult>
     */
    public function getSpanLevelMetricResults(): array
    {
        return $this->spanLevelMetricResults;
    }
    /**
     * The span-level metric results.
     *
     * @param list<ApiEvaluationMetricResult> $spanLevelMetricResults
     *
     * @return self
     */
    public function setSpanLevelMetricResults(array $spanLevelMetricResults): self
    {
        $this->initialized['spanLevelMetricResults'] = true;
        $this->spanLevelMetricResults = $spanLevelMetricResults;
        return $this;
    }
    /**
     * Types of spans in a trace
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Types of spans in a trace
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}