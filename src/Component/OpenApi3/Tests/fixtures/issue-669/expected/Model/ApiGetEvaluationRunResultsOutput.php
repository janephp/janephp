<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiGetEvaluationRunResultsOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var ApiEvaluationRun
     */
    public ApiEvaluationRun $evaluationRun;
    /**
     * Links to other pages
     *
     * @var ApiLinks
     */
    public ApiLinks $links;
    /**
     * Meta information about the data set
     *
     * @var ApiMeta
     */
    public ApiMeta $meta;
    /**
     * The prompt level results.
     *
     * @var list<ApiPrompt>
     */
    public array $prompts;
    public function definedProperties(): array
    {
        return ['evaluationRun' => 'evaluation_run', 'links' => 'links', 'meta' => 'meta', 'prompts' => 'prompts'];
    }
}