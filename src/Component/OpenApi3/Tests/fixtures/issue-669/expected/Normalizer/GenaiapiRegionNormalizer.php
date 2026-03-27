<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GenaiapiRegionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\GenaiapiRegion::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\GenaiapiRegion::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\GenaiapiRegion();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('serves_batch', $data) && \is_int($data['serves_batch'])) {
            $data['serves_batch'] = (bool) $data['serves_batch'];
        }
        if (\array_key_exists('serves_inference', $data) && \is_int($data['serves_inference'])) {
            $data['serves_inference'] = (bool) $data['serves_inference'];
        }
        if (\array_key_exists('inference_url', $data)) {
            $object->setInferenceUrl($data['inference_url']);
            unset($data['inference_url']);
        }
        if (\array_key_exists('region', $data)) {
            $object->setRegion($data['region']);
            unset($data['region']);
        }
        if (\array_key_exists('serves_batch', $data)) {
            $object->setServesBatch($data['serves_batch']);
            unset($data['serves_batch']);
        }
        if (\array_key_exists('serves_inference', $data)) {
            $object->setServesInference($data['serves_inference']);
            unset($data['serves_inference']);
        }
        if (\array_key_exists('stream_inference_url', $data)) {
            $object->setStreamInferenceUrl($data['stream_inference_url']);
            unset($data['stream_inference_url']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('inferenceUrl') && null !== $data->getInferenceUrl()) {
            $dataArray['inference_url'] = $data->getInferenceUrl();
        }
        if ($data->isInitialized('region') && null !== $data->getRegion()) {
            $dataArray['region'] = $data->getRegion();
        }
        if ($data->isInitialized('servesBatch') && null !== $data->getServesBatch()) {
            $dataArray['serves_batch'] = $data->getServesBatch();
        }
        if ($data->isInitialized('servesInference') && null !== $data->getServesInference()) {
            $dataArray['serves_inference'] = $data->getServesInference();
        }
        if ($data->isInitialized('streamInferenceUrl') && null !== $data->getStreamInferenceUrl()) {
            $dataArray['stream_inference_url'] = $data->getStreamInferenceUrl();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\GenaiapiRegion::class => false];
    }
}