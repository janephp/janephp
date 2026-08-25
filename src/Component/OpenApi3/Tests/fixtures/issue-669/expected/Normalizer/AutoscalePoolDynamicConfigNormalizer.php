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
class AutoscalePoolDynamicConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AutoscalePoolDynamicConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AutoscalePoolDynamicConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AutoscalePoolDynamicConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('target_cpu_utilization', $data) && \is_int($data['target_cpu_utilization'])) {
            $data['target_cpu_utilization'] = (float) $data['target_cpu_utilization'];
        }
        if (\array_key_exists('target_memory_utilization', $data) && \is_int($data['target_memory_utilization'])) {
            $data['target_memory_utilization'] = (float) $data['target_memory_utilization'];
        }
        if (\array_key_exists('min_instances', $data)) {
            $object->setMinInstances($data['min_instances']);
            unset($data['min_instances']);
        }
        if (\array_key_exists('max_instances', $data)) {
            $object->setMaxInstances($data['max_instances']);
            unset($data['max_instances']);
        }
        if (\array_key_exists('target_cpu_utilization', $data)) {
            $object->setTargetCpuUtilization($data['target_cpu_utilization']);
            unset($data['target_cpu_utilization']);
        }
        if (\array_key_exists('target_memory_utilization', $data)) {
            $object->setTargetMemoryUtilization($data['target_memory_utilization']);
            unset($data['target_memory_utilization']);
        }
        if (\array_key_exists('cooldown_minutes', $data)) {
            $object->setCooldownMinutes($data['cooldown_minutes']);
            unset($data['cooldown_minutes']);
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
        $dataArray['min_instances'] = $data->getMinInstances();
        $dataArray['max_instances'] = $data->getMaxInstances();
        if ($data->isInitialized('targetCpuUtilization') && null !== $data->getTargetCpuUtilization()) {
            $dataArray['target_cpu_utilization'] = $data->getTargetCpuUtilization();
        }
        if ($data->isInitialized('targetMemoryUtilization') && null !== $data->getTargetMemoryUtilization()) {
            $dataArray['target_memory_utilization'] = $data->getTargetMemoryUtilization();
        }
        if ($data->isInitialized('cooldownMinutes') && null !== $data->getCooldownMinutes()) {
            $dataArray['cooldown_minutes'] = $data->getCooldownMinutes();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\AutoscalePoolDynamicConfig::class => false];
    }
}