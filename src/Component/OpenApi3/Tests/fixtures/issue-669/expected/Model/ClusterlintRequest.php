<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ClusterlintRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An array of check groups that will be run when clusterlint executes checks.
     *
     * @var list<string>
     */
    public array $includeGroups;
    /**
     * An array of checks that will be run when clusterlint executes checks.
     *
     * @var list<string>
     */
    public array $includeChecks;
    /**
     * An array of check groups that will be omitted when clusterlint executes checks.
     *
     * @var list<string>
     */
    public array $excludeGroups;
    /**
     * An array of checks that will be run when clusterlint executes checks.
     *
     * @var list<string>
     */
    public array $excludeChecks;
    public function definedProperties(): array
    {
        return ['includeGroups' => 'include_groups', 'includeChecks' => 'include_checks', 'excludeGroups' => 'exclude_groups', 'excludeChecks' => 'exclude_checks'];
    }
}