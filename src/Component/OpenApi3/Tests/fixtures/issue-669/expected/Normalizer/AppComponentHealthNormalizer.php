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
class AppComponentHealthNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppComponentHealth::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppComponentHealth::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppComponentHealth();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('cpu_usage_percent', $data) && \is_int($data['cpu_usage_percent'])) {
            $data['cpu_usage_percent'] = (float) $data['cpu_usage_percent'];
        }
        if (\array_key_exists('memory_usage_percent', $data) && \is_int($data['memory_usage_percent'])) {
            $data['memory_usage_percent'] = (float) $data['memory_usage_percent'];
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('cpu_usage_percent', $data)) {
            $object->setCpuUsagePercent($data['cpu_usage_percent']);
            unset($data['cpu_usage_percent']);
        }
        if (\array_key_exists('memory_usage_percent', $data)) {
            $object->setMemoryUsagePercent($data['memory_usage_percent']);
            unset($data['memory_usage_percent']);
        }
        if (\array_key_exists('replicas_desired', $data)) {
            $object->setReplicasDesired($data['replicas_desired']);
            unset($data['replicas_desired']);
        }
        if (\array_key_exists('replicas_ready', $data)) {
            $object->setReplicasReady($data['replicas_ready']);
            unset($data['replicas_ready']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
            unset($data['state']);
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
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('cpuUsagePercent') && null !== $data->getCpuUsagePercent()) {
            $dataArray['cpu_usage_percent'] = $data->getCpuUsagePercent();
        }
        if ($data->isInitialized('memoryUsagePercent') && null !== $data->getMemoryUsagePercent()) {
            $dataArray['memory_usage_percent'] = $data->getMemoryUsagePercent();
        }
        if ($data->isInitialized('replicasDesired') && null !== $data->getReplicasDesired()) {
            $dataArray['replicas_desired'] = $data->getReplicasDesired();
        }
        if ($data->isInitialized('replicasReady') && null !== $data->getReplicasReady()) {
            $dataArray['replicas_ready'] = $data->getReplicasReady();
        }
        if ($data->isInitialized('state') && null !== $data->getState()) {
            $dataArray['state'] = $data->getState();
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
        return [\Jane\Generated\DigitalOcean\Model\AppComponentHealth::class => false];
    }
}