<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiGetEvaluationRunPromptResultsOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var ApiPrompt
     */
    protected $prompt;
    /**
     * @return ApiPrompt
     */
    public function getPrompt(): ApiPrompt
    {
        return $this->prompt;
    }
    /**
     * @param ApiPrompt $prompt
     *
     * @return self
     */
    public function setPrompt(ApiPrompt $prompt): self
    {
        $this->initialized['prompt'] = true;
        $this->prompt = $prompt;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['prompt' => ['prompt', 'getPrompt', 'setPrompt']];
    }
}