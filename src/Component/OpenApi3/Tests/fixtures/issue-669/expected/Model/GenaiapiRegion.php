<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class GenaiapiRegion implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Url for inference server
     *
     * @var string
     */
    protected $inferenceUrl;
    /**
     * Region code
     *
     * @var string
     */
    protected $region;
    /**
     * This datacenter is capable of running batch jobs
     *
     * @var bool
     */
    protected $servesBatch;
    /**
     * This datacenter is capable of serving inference
     *
     * @var bool
     */
    protected $servesInference;
    /**
     * The url for the inference streaming server
     *
     * @var string
     */
    protected $streamInferenceUrl;
    /**
     * Url for inference server
     *
     * @return string
     */
    public function getInferenceUrl(): string
    {
        return $this->inferenceUrl;
    }
    /**
     * Url for inference server
     *
     * @param string $inferenceUrl
     *
     * @return self
     */
    public function setInferenceUrl(string $inferenceUrl): self
    {
        $this->initialized['inferenceUrl'] = true;
        $this->inferenceUrl = $inferenceUrl;
        return $this;
    }
    /**
     * Region code
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * Region code
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * This datacenter is capable of running batch jobs
     *
     * @return bool
     */
    public function getServesBatch(): bool
    {
        return $this->servesBatch;
    }
    /**
     * This datacenter is capable of running batch jobs
     *
     * @param bool $servesBatch
     *
     * @return self
     */
    public function setServesBatch(bool $servesBatch): self
    {
        $this->initialized['servesBatch'] = true;
        $this->servesBatch = $servesBatch;
        return $this;
    }
    /**
     * This datacenter is capable of serving inference
     *
     * @return bool
     */
    public function getServesInference(): bool
    {
        return $this->servesInference;
    }
    /**
     * This datacenter is capable of serving inference
     *
     * @param bool $servesInference
     *
     * @return self
     */
    public function setServesInference(bool $servesInference): self
    {
        $this->initialized['servesInference'] = true;
        $this->servesInference = $servesInference;
        return $this;
    }
    /**
     * The url for the inference streaming server
     *
     * @return string
     */
    public function getStreamInferenceUrl(): string
    {
        return $this->streamInferenceUrl;
    }
    /**
     * The url for the inference streaming server
     *
     * @param string $streamInferenceUrl
     *
     * @return self
     */
    public function setStreamInferenceUrl(string $streamInferenceUrl): self
    {
        $this->initialized['streamInferenceUrl'] = true;
        $this->streamInferenceUrl = $streamInferenceUrl;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['inferenceUrl' => ['inference_url', 'getInferenceUrl', 'setInferenceUrl'], 'region' => ['region', 'getRegion', 'setRegion'], 'servesBatch' => ['serves_batch', 'getServesBatch', 'setServesBatch'], 'servesInference' => ['serves_inference', 'getServesInference', 'setServesInference'], 'streamInferenceUrl' => ['stream_inference_url', 'getStreamInferenceUrl', 'setStreamInferenceUrl']];
    }
}