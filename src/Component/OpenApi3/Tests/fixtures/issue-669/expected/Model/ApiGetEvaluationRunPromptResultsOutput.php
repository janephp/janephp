<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiGetEvaluationRunPromptResultsOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var ApiPrompt
     */
    public ApiPrompt $prompt;
    public function definedProperties(): array
    {
        return ['prompt' => 'prompt'];
    }
}