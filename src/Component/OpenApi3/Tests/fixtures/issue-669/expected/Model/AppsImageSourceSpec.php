<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsImageSourceSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The registry name. Must be left empty for the `DOCR` registry type.
     *
     * @var string
     */
    public string $registry;
    /**
     * - DOCKER_HUB: The DockerHub container registry type.
     * - DOCR: The DigitalOcean container registry type.
     * - GHCR: The Github container registry type.
     *
     * @var string
     */
    public string $registryType;
    /**
     * The credentials to be able to pull the image. The value will be encrypted on first submission. On following submissions, the encrypted value should be used.
     * - "$username:$access_token" for registries of type `DOCKER_HUB`.
     * - "$username:$access_token" for registries of type `GHCR`.
     *
     * @var string
     */
    public string $registryCredentials;
    /**
     * The repository name.
     *
     * @var string
     */
    public string $repository;
    /**
     * The repository tag. Defaults to `latest` if not provided and no digest is provided. Cannot be specified if digest is provided.
     *
     * @var string
     */
    public string $tag = 'latest';
    /**
     * The image digest. Cannot be specified if tag is provided.
     *
     * @var string
     */
    public string $digest;
    /**
     * @var AppsImageSourceSpecDeployOnPush
     */
    public AppsImageSourceSpecDeployOnPush $deployOnPush;
    public function definedProperties(): array
    {
        return ['registry' => 'registry', 'registryType' => 'registry_type', 'registryCredentials' => 'registry_credentials', 'repository' => 'repository', 'tag' => 'tag', 'digest' => 'digest', 'deployOnPush' => 'deploy_on_push'];
    }
}