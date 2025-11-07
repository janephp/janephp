<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppsImageSourceSpec extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The registry name. Must be left empty for the `DOCR` registry type.
     *
     * @var string
     */
    protected $registry;
    /**
     * - DOCKER_HUB: The DockerHub container registry type.
     * - DOCR: The DigitalOcean container registry type.
     * - GHCR: The Github container registry type.
     *
     * @var string
     */
    protected $registryType;
    /**
     * The credentials to be able to pull the image. The value will be encrypted on first submission. On following submissions, the encrypted value should be used.
     * - "$username:$access_token" for registries of type `DOCKER_HUB`.
     * - "$username:$access_token" for registries of type `GHCR`.
     *
     * @var string
     */
    protected $registryCredentials;
    /**
     * The repository name.
     *
     * @var string
     */
    protected $repository;
    /**
     * The repository tag. Defaults to `latest` if not provided and no digest is provided. Cannot be specified if digest is provided.
     *
     * @var string
     */
    protected $tag = 'latest';
    /**
     * The image digest. Cannot be specified if tag is provided.
     *
     * @var string
     */
    protected $digest;
    /**
     * @var AppsImageSourceSpecDeployOnPush
     */
    protected $deployOnPush;
    /**
     * The registry name. Must be left empty for the `DOCR` registry type.
     *
     * @return string
     */
    public function getRegistry(): string
    {
        return $this->registry;
    }
    /**
     * The registry name. Must be left empty for the `DOCR` registry type.
     *
     * @param string $registry
     *
     * @return self
     */
    public function setRegistry(string $registry): self
    {
        $this->initialized['registry'] = true;
        $this->registry = $registry;
        return $this;
    }
    /**
     * - DOCKER_HUB: The DockerHub container registry type.
     * - DOCR: The DigitalOcean container registry type.
     * - GHCR: The Github container registry type.
     *
     * @return string
     */
    public function getRegistryType(): string
    {
        return $this->registryType;
    }
    /**
    * - DOCKER_HUB: The DockerHub container registry type.
    - DOCR: The DigitalOcean container registry type.
    - GHCR: The Github container registry type.
    *
    * @param string $registryType
    *
    * @return self
    */
    public function setRegistryType(string $registryType): self
    {
        $this->initialized['registryType'] = true;
        $this->registryType = $registryType;
        return $this;
    }
    /**
     * The credentials to be able to pull the image. The value will be encrypted on first submission. On following submissions, the encrypted value should be used.
     * - "$username:$access_token" for registries of type `DOCKER_HUB`.
     * - "$username:$access_token" for registries of type `GHCR`.
     *
     * @return string
     */
    public function getRegistryCredentials(): string
    {
        return $this->registryCredentials;
    }
    /**
    * The credentials to be able to pull the image. The value will be encrypted on first submission. On following submissions, the encrypted value should be used.
    - "$username:$access_token" for registries of type `DOCKER_HUB`.
    - "$username:$access_token" for registries of type `GHCR`.
    *
    * @param string $registryCredentials
    *
    * @return self
    */
    public function setRegistryCredentials(string $registryCredentials): self
    {
        $this->initialized['registryCredentials'] = true;
        $this->registryCredentials = $registryCredentials;
        return $this;
    }
    /**
     * The repository name.
     *
     * @return string
     */
    public function getRepository(): string
    {
        return $this->repository;
    }
    /**
     * The repository name.
     *
     * @param string $repository
     *
     * @return self
     */
    public function setRepository(string $repository): self
    {
        $this->initialized['repository'] = true;
        $this->repository = $repository;
        return $this;
    }
    /**
     * The repository tag. Defaults to `latest` if not provided and no digest is provided. Cannot be specified if digest is provided.
     *
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }
    /**
     * The repository tag. Defaults to `latest` if not provided and no digest is provided. Cannot be specified if digest is provided.
     *
     * @param string $tag
     *
     * @return self
     */
    public function setTag(string $tag): self
    {
        $this->initialized['tag'] = true;
        $this->tag = $tag;
        return $this;
    }
    /**
     * The image digest. Cannot be specified if tag is provided.
     *
     * @return string
     */
    public function getDigest(): string
    {
        return $this->digest;
    }
    /**
     * The image digest. Cannot be specified if tag is provided.
     *
     * @param string $digest
     *
     * @return self
     */
    public function setDigest(string $digest): self
    {
        $this->initialized['digest'] = true;
        $this->digest = $digest;
        return $this;
    }
    /**
     * @return AppsImageSourceSpecDeployOnPush
     */
    public function getDeployOnPush(): AppsImageSourceSpecDeployOnPush
    {
        return $this->deployOnPush;
    }
    /**
     * @param AppsImageSourceSpecDeployOnPush $deployOnPush
     *
     * @return self
     */
    public function setDeployOnPush(AppsImageSourceSpecDeployOnPush $deployOnPush): self
    {
        $this->initialized['deployOnPush'] = true;
        $this->deployOnPush = $deployOnPush;
        return $this;
    }
}