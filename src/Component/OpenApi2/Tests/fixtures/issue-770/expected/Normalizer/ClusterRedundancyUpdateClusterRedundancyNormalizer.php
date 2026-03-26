<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterRedundancyUpdateClusterRedundancy::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterRedundancyUpdateClusterRedundancy::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterRedundancyUpdateClusterRedundancy();
        if (\array_key_exists('clusterRedundancyEnabled', $data) && \is_int($data['clusterRedundancyEnabled'])) {
            $data['clusterRedundancyEnabled'] = (bool) $data['clusterRedundancyEnabled'];
        }
        if (\array_key_exists('scheduleSyncUpEnabled', $data) && \is_int($data['scheduleSyncUpEnabled'])) {
            $data['scheduleSyncUpEnabled'] = (bool) $data['scheduleSyncUpEnabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('clusterRedundancyEnabled', $data)) {
            $object->setClusterRedundancyEnabled($data['clusterRedundancyEnabled']);
        }
        if (\array_key_exists('clusterRedundancyType', $data)) {
            $object->setClusterRedundancyType($data['clusterRedundancyType']);
        }
        if (\array_key_exists('standbyAdminPassword', $data)) {
            $object->setStandbyAdminPassword($data['standbyAdminPassword']);
        }
        if (\array_key_exists('managementEntryList', $data)) {
            $values = [];
            foreach ($data['managementEntryList'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterRedundancyManagementEntry::class, 'json', $context);
            }
            $object->setManagementEntryList($values);
        }
        if (\array_key_exists('activeClusterList', $data)) {
            $values_1 = [];
            foreach ($data['activeClusterList'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterRedundancyActiveCluster::class, 'json', $context);
            }
            $object->setActiveClusterList($values_1);
        }
        if (\array_key_exists('scheduleSyncUpEnabled', $data)) {
            $object->setScheduleSyncUpEnabled($data['scheduleSyncUpEnabled']);
        }
        if (\array_key_exists('interval', $data)) {
            $object->setInterval($data['interval']);
        }
        if (\array_key_exists('dateOfMonth', $data)) {
            $object->setDateOfMonth($data['dateOfMonth']);
        }
        if (\array_key_exists('dayOfWeek', $data)) {
            $object->setDayOfWeek($data['dayOfWeek']);
        }
        if (\array_key_exists('hour', $data)) {
            $object->setHour($data['hour']);
        }
        if (\array_key_exists('minute', $data)) {
            $object->setMinute($data['minute']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['clusterRedundancyEnabled'] = $data->getClusterRedundancyEnabled();
        if ($data->isInitialized('clusterRedundancyType') && null !== $data->getClusterRedundancyType()) {
            $dataArray['clusterRedundancyType'] = $data->getClusterRedundancyType();
        }
        if ($data->isInitialized('standbyAdminPassword') && null !== $data->getStandbyAdminPassword()) {
            $dataArray['standbyAdminPassword'] = $data->getStandbyAdminPassword();
        }
        if ($data->isInitialized('managementEntryList') && null !== $data->getManagementEntryList()) {
            $values = [];
            foreach ($data->getManagementEntryList() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['managementEntryList'] = $values;
        }
        if ($data->isInitialized('activeClusterList') && null !== $data->getActiveClusterList()) {
            $values_1 = [];
            foreach ($data->getActiveClusterList() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['activeClusterList'] = $values_1;
        }
        if ($data->isInitialized('scheduleSyncUpEnabled') && null !== $data->getScheduleSyncUpEnabled()) {
            $dataArray['scheduleSyncUpEnabled'] = $data->getScheduleSyncUpEnabled();
        }
        if ($data->isInitialized('interval') && null !== $data->getInterval()) {
            $dataArray['interval'] = $data->getInterval();
        }
        if ($data->isInitialized('dateOfMonth') && null !== $data->getDateOfMonth()) {
            $dataArray['dateOfMonth'] = $data->getDateOfMonth();
        }
        if ($data->isInitialized('dayOfWeek') && null !== $data->getDayOfWeek()) {
            $dataArray['dayOfWeek'] = $data->getDayOfWeek();
        }
        if ($data->isInitialized('hour') && null !== $data->getHour()) {
            $dataArray['hour'] = $data->getHour();
        }
        if ($data->isInitialized('minute') && null !== $data->getMinute()) {
            $dataArray['minute'] = $data->getMinute();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ClusterRedundancyUpdateClusterRedundancy::class => false];
    }
}