<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class GenaiapiRegion implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Url for inference server
     *
     * @var string
     */
    public string $inferenceUrl;
    /**
     * Region code
     *
     * @var string
     */
    public string $region;
    /**
     * This datacenter is capable of running batch jobs
     *
     * @var bool
     */
    public bool $servesBatch;
    /**
     * This datacenter is capable of serving inference
     *
     * @var bool
     */
    public bool $servesInference;
    /**
     * The url for the inference streaming server
     *
     * @var string
     */
    public string $streamInferenceUrl;
    public function definedProperties(): array
    {
        return ['inferenceUrl' => 'inference_url', 'region' => 'region', 'servesBatch' => 'serves_batch', 'servesInference' => 'serves_inference', 'streamInferenceUrl' => 'stream_inference_url'];
    }
}