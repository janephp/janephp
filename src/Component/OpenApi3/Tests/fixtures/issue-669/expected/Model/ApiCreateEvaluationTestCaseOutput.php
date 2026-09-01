<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateEvaluationTestCaseOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Test‑case UUID.
     *
     * @var string
     */
    public string $testCaseUuid;
    public function definedProperties(): array
    {
        return ['testCaseUuid' => 'test_case_uuid'];
    }
}