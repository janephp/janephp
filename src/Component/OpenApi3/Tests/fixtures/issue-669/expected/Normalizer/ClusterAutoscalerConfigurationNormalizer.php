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
class ClusterAutoscalerConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ClusterAutoscalerConfiguration::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ClusterAutoscalerConfiguration::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ClusterAutoscalerConfiguration();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('scale_down_utilization_threshold', $data) && \is_int($data['scale_down_utilization_threshold'])) {
            $data['scale_down_utilization_threshold'] = (float) $data['scale_down_utilization_threshold'];
        }
        if (\array_key_exists('scale_down_utilization_threshold', $data)) {
            $object->scaleDownUtilizationThreshold = $data['scale_down_utilization_threshold'];
            unset($data['scale_down_utilization_threshold']);
        }
        if (\array_key_exists('scale_down_unneeded_time', $data)) {
            $object->scaleDownUnneededTime = $data['scale_down_unneeded_time'];
            unset($data['scale_down_unneeded_time']);
        }
        if (\array_key_exists('expanders', $data)) {
            $values = [];
            foreach ($data['expanders'] as $value) {
                $values[] = $value;
            }
            $object->expanders = $values;
            unset($data['expanders']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('scaleDownUtilizationThreshold', get_object_vars($data)) && null !== ($data->scaleDownUtilizationThreshold ?? null)) {
            $dataArray['scale_down_utilization_threshold'] = $data->scaleDownUtilizationThreshold ?? null;
        }
        if (array_key_exists('scaleDownUnneededTime', get_object_vars($data)) && null !== ($data->scaleDownUnneededTime ?? null)) {
            $dataArray['scale_down_unneeded_time'] = $data->scaleDownUnneededTime ?? null;
        }
        if (array_key_exists('expanders', get_object_vars($data)) && null !== ($data->expanders ?? null)) {
            $values = [];
            foreach ($data->expanders ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['expanders'] = $values;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ClusterAutoscalerConfiguration::class => false];
    }
}