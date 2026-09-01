<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsGitSourceSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the branch to use
     *
     * @var string
     */
    public string $branch;
    /**
     * The clone URL of the repo. Example: `https://github.com/digitalocean/sample-golang.git`
     *
     * @var string
     */
    public string $repoCloneUrl;
    public function definedProperties(): array
    {
        return ['branch' => 'branch', 'repoCloneUrl' => 'repo_clone_url'];
    }
}