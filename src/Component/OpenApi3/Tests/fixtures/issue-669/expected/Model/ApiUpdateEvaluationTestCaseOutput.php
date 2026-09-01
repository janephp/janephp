<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUpdateEvaluationTestCaseOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $testCaseUuid;
    /**
     * The new verson of the test case.
     *
     * @var int
     */
    public int $version;
    public function definedProperties(): array
    {
        return ['testCaseUuid' => 'test_case_uuid', 'version' => 'version'];
    }
}