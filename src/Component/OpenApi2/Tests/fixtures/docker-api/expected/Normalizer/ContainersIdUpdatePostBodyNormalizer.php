<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ContainersIdUpdatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\ContainersIdUpdatePostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\ContainersIdUpdatePostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\ContainersIdUpdatePostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('OomKillDisable', $data) && \is_int($data['OomKillDisable'])) {
            $data['OomKillDisable'] = (bool) $data['OomKillDisable'];
        }
        if (\array_key_exists('Init', $data) && \is_int($data['Init'])) {
            $data['Init'] = (bool) $data['Init'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\ContainersIdUpdatePostBodyConstraint());
        }
        if (\array_key_exists('CpuShares', $data)) {
            $object->cpuShares = $data['CpuShares'];
        }
        if (\array_key_exists('Memory', $data)) {
            $object->memory = $data['Memory'];
        }
        if (\array_key_exists('CgroupParent', $data)) {
            $object->cgroupParent = $data['CgroupParent'];
        }
        if (\array_key_exists('BlkioWeight', $data)) {
            $object->blkioWeight = $data['BlkioWeight'];
        }
        if (\array_key_exists('BlkioWeightDevice', $data)) {
            $values = [];
            foreach ($data['BlkioWeightDevice'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Docker\Api\Model\ResourcesBlkioWeightDeviceItem::class, 'json', $context);
            }
            $object->blkioWeightDevice = $values;
        }
        if (\array_key_exists('BlkioDeviceReadBps', $data)) {
            $values_1 = [];
            foreach ($data['BlkioDeviceReadBps'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Docker\Api\Model\ThrottleDevice::class, 'json', $context);
            }
            $object->blkioDeviceReadBps = $values_1;
        }
        if (\array_key_exists('BlkioDeviceWriteBps', $data)) {
            $values_2 = [];
            foreach ($data['BlkioDeviceWriteBps'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Docker\Api\Model\ThrottleDevice::class, 'json', $context);
            }
            $object->blkioDeviceWriteBps = $values_2;
        }
        if (\array_key_exists('BlkioDeviceReadIOps', $data)) {
            $values_3 = [];
            foreach ($data['BlkioDeviceReadIOps'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Docker\Api\Model\ThrottleDevice::class, 'json', $context);
            }
            $object->blkioDeviceReadIOps = $values_3;
        }
        if (\array_key_exists('BlkioDeviceWriteIOps', $data)) {
            $values_4 = [];
            foreach ($data['BlkioDeviceWriteIOps'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Docker\Api\Model\ThrottleDevice::class, 'json', $context);
            }
            $object->blkioDeviceWriteIOps = $values_4;
        }
        if (\array_key_exists('CpuPeriod', $data)) {
            $object->cpuPeriod = $data['CpuPeriod'];
        }
        if (\array_key_exists('CpuQuota', $data)) {
            $object->cpuQuota = $data['CpuQuota'];
        }
        if (\array_key_exists('CpuRealtimePeriod', $data)) {
            $object->cpuRealtimePeriod = $data['CpuRealtimePeriod'];
        }
        if (\array_key_exists('CpuRealtimeRuntime', $data)) {
            $object->cpuRealtimeRuntime = $data['CpuRealtimeRuntime'];
        }
        if (\array_key_exists('CpusetCpus', $data)) {
            $object->cpusetCpus = $data['CpusetCpus'];
        }
        if (\array_key_exists('CpusetMems', $data)) {
            $object->cpusetMems = $data['CpusetMems'];
        }
        if (\array_key_exists('Devices', $data)) {
            $values_5 = [];
            foreach ($data['Devices'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Docker\Api\Model\DeviceMapping::class, 'json', $context);
            }
            $object->devices = $values_5;
        }
        if (\array_key_exists('DeviceCgroupRules', $data)) {
            $values_6 = [];
            foreach ($data['DeviceCgroupRules'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->deviceCgroupRules = $values_6;
        }
        if (\array_key_exists('DeviceRequests', $data)) {
            $values_7 = [];
            foreach ($data['DeviceRequests'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \Docker\Api\Model\DeviceRequest::class, 'json', $context);
            }
            $object->deviceRequests = $values_7;
        }
        if (\array_key_exists('KernelMemory', $data)) {
            $object->kernelMemory = $data['KernelMemory'];
        }
        if (\array_key_exists('KernelMemoryTCP', $data)) {
            $object->kernelMemoryTCP = $data['KernelMemoryTCP'];
        }
        if (\array_key_exists('MemoryReservation', $data)) {
            $object->memoryReservation = $data['MemoryReservation'];
        }
        if (\array_key_exists('MemorySwap', $data)) {
            $object->memorySwap = $data['MemorySwap'];
        }
        if (\array_key_exists('MemorySwappiness', $data)) {
            $object->memorySwappiness = $data['MemorySwappiness'];
        }
        if (\array_key_exists('NanoCpus', $data)) {
            $object->nanoCpus = $data['NanoCpus'];
        }
        if (\array_key_exists('OomKillDisable', $data)) {
            $object->oomKillDisable = $data['OomKillDisable'];
        }
        if (\array_key_exists('Init', $data) && $data['Init'] !== null) {
            $object->init = $data['Init'];
        }
        elseif (\array_key_exists('Init', $data) && $data['Init'] === null) {
            $object->init = null;
        }
        if (\array_key_exists('PidsLimit', $data) && $data['PidsLimit'] !== null) {
            $object->pidsLimit = $data['PidsLimit'];
        }
        elseif (\array_key_exists('PidsLimit', $data) && $data['PidsLimit'] === null) {
            $object->pidsLimit = null;
        }
        if (\array_key_exists('Ulimits', $data)) {
            $values_8 = [];
            foreach ($data['Ulimits'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, \Docker\Api\Model\ResourcesUlimitsItem::class, 'json', $context);
            }
            $object->ulimits = $values_8;
        }
        if (\array_key_exists('CpuCount', $data)) {
            $object->cpuCount = $data['CpuCount'];
        }
        if (\array_key_exists('CpuPercent', $data)) {
            $object->cpuPercent = $data['CpuPercent'];
        }
        if (\array_key_exists('IOMaximumIOps', $data)) {
            $object->iOMaximumIOps = $data['IOMaximumIOps'];
        }
        if (\array_key_exists('IOMaximumBandwidth', $data)) {
            $object->iOMaximumBandwidth = $data['IOMaximumBandwidth'];
        }
        if (\array_key_exists('RestartPolicy', $data)) {
            $object->restartPolicy = $this->denormalizer->denormalize($data['RestartPolicy'], \Docker\Api\Model\RestartPolicy::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('cpuShares', get_object_vars($data)) && null !== ($data->cpuShares ?? null)) {
            $dataArray['CpuShares'] = $data->cpuShares ?? null;
        }
        if (array_key_exists('memory', get_object_vars($data)) && null !== ($data->memory ?? null)) {
            $dataArray['Memory'] = $data->memory ?? null;
        }
        if (array_key_exists('cgroupParent', get_object_vars($data)) && null !== ($data->cgroupParent ?? null)) {
            $dataArray['CgroupParent'] = $data->cgroupParent ?? null;
        }
        if (array_key_exists('blkioWeight', get_object_vars($data)) && null !== ($data->blkioWeight ?? null)) {
            $dataArray['BlkioWeight'] = $data->blkioWeight ?? null;
        }
        if (array_key_exists('blkioWeightDevice', get_object_vars($data)) && null !== ($data->blkioWeightDevice ?? null)) {
            $values = [];
            foreach ($data->blkioWeightDevice ?? null as $value) {
                $values[] = $value === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['BlkioWeightDevice'] = $values;
        }
        if (array_key_exists('blkioDeviceReadBps', get_object_vars($data)) && null !== ($data->blkioDeviceReadBps ?? null)) {
            $values_1 = [];
            foreach ($data->blkioDeviceReadBps ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['BlkioDeviceReadBps'] = $values_1;
        }
        if (array_key_exists('blkioDeviceWriteBps', get_object_vars($data)) && null !== ($data->blkioDeviceWriteBps ?? null)) {
            $values_2 = [];
            foreach ($data->blkioDeviceWriteBps ?? null as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['BlkioDeviceWriteBps'] = $values_2;
        }
        if (array_key_exists('blkioDeviceReadIOps', get_object_vars($data)) && null !== ($data->blkioDeviceReadIOps ?? null)) {
            $values_3 = [];
            foreach ($data->blkioDeviceReadIOps ?? null as $value_3) {
                $values_3[] = $value_3 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['BlkioDeviceReadIOps'] = $values_3;
        }
        if (array_key_exists('blkioDeviceWriteIOps', get_object_vars($data)) && null !== ($data->blkioDeviceWriteIOps ?? null)) {
            $values_4 = [];
            foreach ($data->blkioDeviceWriteIOps ?? null as $value_4) {
                $values_4[] = $value_4 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['BlkioDeviceWriteIOps'] = $values_4;
        }
        if (array_key_exists('cpuPeriod', get_object_vars($data)) && null !== ($data->cpuPeriod ?? null)) {
            $dataArray['CpuPeriod'] = $data->cpuPeriod ?? null;
        }
        if (array_key_exists('cpuQuota', get_object_vars($data)) && null !== ($data->cpuQuota ?? null)) {
            $dataArray['CpuQuota'] = $data->cpuQuota ?? null;
        }
        if (array_key_exists('cpuRealtimePeriod', get_object_vars($data)) && null !== ($data->cpuRealtimePeriod ?? null)) {
            $dataArray['CpuRealtimePeriod'] = $data->cpuRealtimePeriod ?? null;
        }
        if (array_key_exists('cpuRealtimeRuntime', get_object_vars($data)) && null !== ($data->cpuRealtimeRuntime ?? null)) {
            $dataArray['CpuRealtimeRuntime'] = $data->cpuRealtimeRuntime ?? null;
        }
        if (array_key_exists('cpusetCpus', get_object_vars($data)) && null !== ($data->cpusetCpus ?? null)) {
            $dataArray['CpusetCpus'] = $data->cpusetCpus ?? null;
        }
        if (array_key_exists('cpusetMems', get_object_vars($data)) && null !== ($data->cpusetMems ?? null)) {
            $dataArray['CpusetMems'] = $data->cpusetMems ?? null;
        }
        if (array_key_exists('devices', get_object_vars($data)) && null !== ($data->devices ?? null)) {
            $values_5 = [];
            foreach ($data->devices ?? null as $value_5) {
                $values_5[] = $value_5 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['Devices'] = $values_5;
        }
        if (array_key_exists('deviceCgroupRules', get_object_vars($data)) && null !== ($data->deviceCgroupRules ?? null)) {
            $values_6 = [];
            foreach ($data->deviceCgroupRules ?? null as $value_6) {
                $values_6[] = $value_6;
            }
            $dataArray['DeviceCgroupRules'] = $values_6;
        }
        if (array_key_exists('deviceRequests', get_object_vars($data)) && null !== ($data->deviceRequests ?? null)) {
            $values_7 = [];
            foreach ($data->deviceRequests ?? null as $value_7) {
                $values_7[] = $value_7 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_7, 'json', $context));
            }
            $dataArray['DeviceRequests'] = $values_7;
        }
        if (array_key_exists('kernelMemory', get_object_vars($data)) && null !== ($data->kernelMemory ?? null)) {
            $dataArray['KernelMemory'] = $data->kernelMemory ?? null;
        }
        if (array_key_exists('kernelMemoryTCP', get_object_vars($data)) && null !== ($data->kernelMemoryTCP ?? null)) {
            $dataArray['KernelMemoryTCP'] = $data->kernelMemoryTCP ?? null;
        }
        if (array_key_exists('memoryReservation', get_object_vars($data)) && null !== ($data->memoryReservation ?? null)) {
            $dataArray['MemoryReservation'] = $data->memoryReservation ?? null;
        }
        if (array_key_exists('memorySwap', get_object_vars($data)) && null !== ($data->memorySwap ?? null)) {
            $dataArray['MemorySwap'] = $data->memorySwap ?? null;
        }
        if (array_key_exists('memorySwappiness', get_object_vars($data)) && null !== ($data->memorySwappiness ?? null)) {
            $dataArray['MemorySwappiness'] = $data->memorySwappiness ?? null;
        }
        if (array_key_exists('nanoCpus', get_object_vars($data)) && null !== ($data->nanoCpus ?? null)) {
            $dataArray['NanoCpus'] = $data->nanoCpus ?? null;
        }
        if (array_key_exists('oomKillDisable', get_object_vars($data)) && null !== ($data->oomKillDisable ?? null)) {
            $dataArray['OomKillDisable'] = $data->oomKillDisable ?? null;
        }
        if (array_key_exists('init', get_object_vars($data)) && null !== ($data->init ?? null)) {
            $dataArray['Init'] = $data->init ?? null;
        }
        if (array_key_exists('pidsLimit', get_object_vars($data)) && null !== ($data->pidsLimit ?? null)) {
            $dataArray['PidsLimit'] = $data->pidsLimit ?? null;
        }
        if (array_key_exists('ulimits', get_object_vars($data)) && null !== ($data->ulimits ?? null)) {
            $values_8 = [];
            foreach ($data->ulimits ?? null as $value_8) {
                $values_8[] = $value_8 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_8, 'json', $context));
            }
            $dataArray['Ulimits'] = $values_8;
        }
        if (array_key_exists('cpuCount', get_object_vars($data)) && null !== ($data->cpuCount ?? null)) {
            $dataArray['CpuCount'] = $data->cpuCount ?? null;
        }
        if (array_key_exists('cpuPercent', get_object_vars($data)) && null !== ($data->cpuPercent ?? null)) {
            $dataArray['CpuPercent'] = $data->cpuPercent ?? null;
        }
        if (array_key_exists('iOMaximumIOps', get_object_vars($data)) && null !== ($data->iOMaximumIOps ?? null)) {
            $dataArray['IOMaximumIOps'] = $data->iOMaximumIOps ?? null;
        }
        if (array_key_exists('iOMaximumBandwidth', get_object_vars($data)) && null !== ($data->iOMaximumBandwidth ?? null)) {
            $dataArray['IOMaximumBandwidth'] = $data->iOMaximumBandwidth ?? null;
        }
        if (array_key_exists('restartPolicy', get_object_vars($data)) && null !== ($data->restartPolicy ?? null)) {
            $dataArray['RestartPolicy'] = ($data->restartPolicy ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->restartPolicy ?? null, 'json', $context));
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\ContainersIdUpdatePostBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\ContainersIdUpdatePostBody::class => false];
    }
}