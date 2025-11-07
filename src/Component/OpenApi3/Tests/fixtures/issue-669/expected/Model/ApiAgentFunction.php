<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiAgentFunction extends \ArrayObject
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
     * Api key
     *
     * @var string
     */
    protected $apiKey;
    /**
     * Creation date / time
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Created by user id from DO
     *
     * @var string
     */
    protected $createdBy;
    /**
     * Agent description
     *
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $faasName;
    /**
     * @var string
     */
    protected $faasNamespace;
    /**
     * @var array<string, mixed>
     */
    protected $inputSchema;
    /**
     * Name
     *
     * @var string
     */
    protected $name;
    /**
     * @var array<string, mixed>
     */
    protected $outputSchema;
    /**
     * Last modified
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Download your agent here
     *
     * @var string
     */
    protected $url;
    /**
     * Unique id
     *
     * @var string
     */
    protected $uuid;
    /**
     * Api key
     *
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }
    /**
     * Api key
     *
     * @param string $apiKey
     *
     * @return self
     */
    public function setApiKey(string $apiKey): self
    {
        $this->initialized['apiKey'] = true;
        $this->apiKey = $apiKey;
        return $this;
    }
    /**
     * Creation date / time
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Creation date / time
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Created by user id from DO
     *
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }
    /**
     * Created by user id from DO
     *
     * @param string $createdBy
     *
     * @return self
     */
    public function setCreatedBy(string $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * Agent description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Agent description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return string
     */
    public function getFaasName(): string
    {
        return $this->faasName;
    }
    /**
     * @param string $faasName
     *
     * @return self
     */
    public function setFaasName(string $faasName): self
    {
        $this->initialized['faasName'] = true;
        $this->faasName = $faasName;
        return $this;
    }
    /**
     * @return string
     */
    public function getFaasNamespace(): string
    {
        return $this->faasNamespace;
    }
    /**
     * @param string $faasNamespace
     *
     * @return self
     */
    public function setFaasNamespace(string $faasNamespace): self
    {
        $this->initialized['faasNamespace'] = true;
        $this->faasNamespace = $faasNamespace;
        return $this;
    }
    /**
     * @return array<string, mixed>
     */
    public function getInputSchema(): iterable
    {
        return $this->inputSchema;
    }
    /**
     * @param array<string, mixed> $inputSchema
     *
     * @return self
     */
    public function setInputSchema(iterable $inputSchema): self
    {
        $this->initialized['inputSchema'] = true;
        $this->inputSchema = $inputSchema;
        return $this;
    }
    /**
     * Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return array<string, mixed>
     */
    public function getOutputSchema(): iterable
    {
        return $this->outputSchema;
    }
    /**
     * @param array<string, mixed> $outputSchema
     *
     * @return self
     */
    public function setOutputSchema(iterable $outputSchema): self
    {
        $this->initialized['outputSchema'] = true;
        $this->outputSchema = $outputSchema;
        return $this;
    }
    /**
     * Last modified
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Last modified
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Download your agent here
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * Download your agent here
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * Unique id
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * Unique id
     *
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid): self
    {
        $this->initialized['uuid'] = true;
        $this->uuid = $uuid;
        return $this;
    }
}