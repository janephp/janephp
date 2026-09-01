<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDefaultProject implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var Project
     */
    public Project $project;
    public function definedProperties(): array
    {
        return ['project' => 'project'];
    }
}