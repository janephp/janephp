<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ClusterRedundancyUpdateClusterRedundancyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterRedundancyUpdateClusterRedundancy::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterRedundancyUpdateClusterRedundancy::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterRedundancyUpdateClusterRedundancy();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('clusterRedundancyEnabled', $data) && \is_int($data['clusterRedundancyEnabled'])) {
            $data['clusterRedundancyEnabled'] = (bool) $data['clusterRedundancyEnabled'];
        }
        if (\array_key_exists('scheduleSyncUpEnabled', $data) && \is_int($data['scheduleSyncUpEnabled'])) {
            $data['scheduleSyncUpEnabled'] = (bool) $data['scheduleSyncUpEnabled'];
        }
        if (\array_key_exists('clusterRedundancyEnabled', $data)) {
            $object->clusterRedundancyEnabled = $data['clusterRedundancyEnabled'];
        }
        if (\array_key_exists('clusterRedundancyType', $data)) {
            $object->clusterRedundancyType = $data['clusterRedundancyType'];
        }
        if (\array_key_exists('standbyAdminPassword', $data)) {
            $object->standbyAdminPassword = $data['standbyAdminPassword'];
        }
        if (\array_key_exists('managementEntryList', $data)) {
            $values = [];
            foreach ($data['managementEntryList'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterRedundancyManagementEntry::class, 'json', $context);
            }
            $object->managementEntryList = $values;
        }
        if (\array_key_exists('activeClusterList', $data)) {
            $values_1 = [];
            foreach ($data['activeClusterList'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterRedundancyActiveCluster::class, 'json', $context);
            }
            $object->activeClusterList = $values_1;
        }
        if (\array_key_exists('scheduleSyncUpEnabled', $data)) {
            $object->scheduleSyncUpEnabled = $data['scheduleSyncUpEnabled'];
        }
        if (\array_key_exists('interval', $data)) {
            $object->interval = $data['interval'];
        }
        if (\array_key_exists('dateOfMonth', $data)) {
            $object->dateOfMonth = $data['dateOfMonth'];
        }
        if (\array_key_exists('dayOfWeek', $data)) {
            $object->dayOfWeek = $data['dayOfWeek'];
        }
        if (\array_key_exists('hour', $data)) {
            $object->hour = $data['hour'];
        }
        if (\array_key_exists('minute', $data)) {
            $object->minute = $data['minute'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['clusterRedundancyEnabled'] = $data->clusterRedundancyEnabled ?? null;
        if (array_key_exists('clusterRedundancyType', get_object_vars($data)) && null !== ($data->clusterRedundancyType ?? null)) {
            $dataArray['clusterRedundancyType'] = $data->clusterRedundancyType ?? null;
        }
        if (array_key_exists('standbyAdminPassword', get_object_vars($data)) && null !== ($data->standbyAdminPassword ?? null)) {
            $dataArray['standbyAdminPassword'] = $data->standbyAdminPassword ?? null;
        }
        if (array_key_exists('managementEntryList', get_object_vars($data)) && null !== ($data->managementEntryList ?? null)) {
            $values = [];
            foreach ($data->managementEntryList ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['managementEntryList'] = $values;
        }
        if (array_key_exists('activeClusterList', get_object_vars($data)) && null !== ($data->activeClusterList ?? null)) {
            $values_1 = [];
            foreach ($data->activeClusterList ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['activeClusterList'] = $values_1;
        }
        if (array_key_exists('scheduleSyncUpEnabled', get_object_vars($data)) && null !== ($data->scheduleSyncUpEnabled ?? null)) {
            $dataArray['scheduleSyncUpEnabled'] = $data->scheduleSyncUpEnabled ?? null;
        }
        if (array_key_exists('interval', get_object_vars($data)) && null !== ($data->interval ?? null)) {
            $dataArray['interval'] = $data->interval ?? null;
        }
        if (array_key_exists('dateOfMonth', get_object_vars($data)) && null !== ($data->dateOfMonth ?? null)) {
            $dataArray['dateOfMonth'] = $data->dateOfMonth ?? null;
        }
        if (array_key_exists('dayOfWeek', get_object_vars($data)) && null !== ($data->dayOfWeek ?? null)) {
            $dataArray['dayOfWeek'] = $data->dayOfWeek ?? null;
        }
        if (array_key_exists('hour', get_object_vars($data)) && null !== ($data->hour ?? null)) {
            $dataArray['hour'] = $data->hour ?? null;
        }
        if (array_key_exists('minute', get_object_vars($data)) && null !== ($data->minute ?? null)) {
            $dataArray['minute'] = $data->minute ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterRedundancyUpdateClusterRedundancy::class => false];
    }
}