<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsGitlabSourceSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the branch to use
     *
     * @var string
     */
    public string $branch;
    /**
     * Whether to automatically deploy new commits made to the repo
     *
     * @var bool
     */
    public bool $deployOnPush;
    /**
     * The name of the repo in the format owner/repo. Example: `digitalocean/sample-golang`
     *
     * @var string
     */
    public string $repo;
    public function definedProperties(): array
    {
        return ['branch' => 'branch', 'deployOnPush' => 'deploy_on_push', 'repo' => 'repo'];
    }
}