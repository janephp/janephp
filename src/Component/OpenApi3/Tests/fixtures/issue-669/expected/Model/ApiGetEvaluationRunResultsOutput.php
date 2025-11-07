<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiGetEvaluationRunResultsOutput extends \ArrayObject
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
     * @var ApiEvaluationRun
     */
    protected $evaluationRun;
    /**
     * Links to other pages
     *
     * @var ApiLinks
     */
    protected $links;
    /**
     * Meta information about the data set
     *
     * @var ApiMeta
     */
    protected $meta;
    /**
     * The prompt level results.
     *
     * @var list<ApiPrompt>
     */
    protected $prompts;
    /**
     * @return ApiEvaluationRun
     */
    public function getEvaluationRun(): ApiEvaluationRun
    {
        return $this->evaluationRun;
    }
    /**
     * @param ApiEvaluationRun $evaluationRun
     *
     * @return self
     */
    public function setEvaluationRun(ApiEvaluationRun $evaluationRun): self
    {
        $this->initialized['evaluationRun'] = true;
        $this->evaluationRun = $evaluationRun;
        return $this;
    }
    /**
     * Links to other pages
     *
     * @return ApiLinks
     */
    public function getLinks(): ApiLinks
    {
        return $this->links;
    }
    /**
     * Links to other pages
     *
     * @param ApiLinks $links
     *
     * @return self
     */
    public function setLinks(ApiLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * Meta information about the data set
     *
     * @return ApiMeta
     */
    public function getMeta(): ApiMeta
    {
        return $this->meta;
    }
    /**
     * Meta information about the data set
     *
     * @param ApiMeta $meta
     *
     * @return self
     */
    public function setMeta(ApiMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
    /**
     * The prompt level results.
     *
     * @return list<ApiPrompt>
     */
    public function getPrompts(): array
    {
        return $this->prompts;
    }
    /**
     * The prompt level results.
     *
     * @param list<ApiPrompt> $prompts
     *
     * @return self
     */
    public function setPrompts(array $prompts): self
    {
        $this->initialized['prompts'] = true;
        $this->prompts = $prompts;
        return $this;
    }
}