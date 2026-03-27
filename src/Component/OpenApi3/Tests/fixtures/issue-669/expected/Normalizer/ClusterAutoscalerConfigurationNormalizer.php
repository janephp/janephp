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
            $data['scale_down_utilization_threshold'] = (double) $data['scale_down_utilization_threshold'];
        }
        if (\array_key_exists('scale_down_utilization_threshold', $data)) {
            $object->setScaleDownUtilizationThreshold($data['scale_down_utilization_threshold']);
            unset($data['scale_down_utilization_threshold']);
        }
        if (\array_key_exists('scale_down_unneeded_time', $data)) {
            $object->setScaleDownUnneededTime($data['scale_down_unneeded_time']);
            unset($data['scale_down_unneeded_time']);
        }
        if (\array_key_exists('expanders', $data)) {
            $values = [];
            foreach ($data['expanders'] as $value) {
                $values[] = $value;
            }
            $object->setExpanders($values);
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
        if ($data->isInitialized('scaleDownUtilizationThreshold') && null !== $data->getScaleDownUtilizationThreshold()) {
            $dataArray['scale_down_utilization_threshold'] = $data->getScaleDownUtilizationThreshold();
        }
        if ($data->isInitialized('scaleDownUnneededTime') && null !== $data->getScaleDownUnneededTime()) {
            $dataArray['scale_down_unneeded_time'] = $data->getScaleDownUnneededTime();
        }
        if ($data->isInitialized('expanders') && null !== $data->getExpanders()) {
            $values = [];
            foreach ($data->getExpanders() as $value) {
                $values[] = $value;
            }
            $dataArray['expanders'] = $values;
        }
        foreach ($data as $key => $value_1) {
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