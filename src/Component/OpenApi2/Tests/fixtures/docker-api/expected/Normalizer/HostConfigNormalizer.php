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
class HostConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\HostConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\HostConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\HostConfig();
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
        if (\array_key_exists('AutoRemove', $data) && \is_int($data['AutoRemove'])) {
            $data['AutoRemove'] = (bool) $data['AutoRemove'];
        }
        if (\array_key_exists('Privileged', $data) && \is_int($data['Privileged'])) {
            $data['Privileged'] = (bool) $data['Privileged'];
        }
        if (\array_key_exists('PublishAllPorts', $data) && \is_int($data['PublishAllPorts'])) {
            $data['PublishAllPorts'] = (bool) $data['PublishAllPorts'];
        }
        if (\array_key_exists('ReadonlyRootfs', $data) && \is_int($data['ReadonlyRootfs'])) {
            $data['ReadonlyRootfs'] = (bool) $data['ReadonlyRootfs'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\HostConfigConstraint());
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
        if (\array_key_exists('Binds', $data)) {
            $values_9 = [];
            foreach ($data['Binds'] as $value_9) {
                $values_9[] = $value_9;
            }
            $object->binds = $values_9;
        }
        if (\array_key_exists('ContainerIDFile', $data)) {
            $object->containerIDFile = $data['ContainerIDFile'];
        }
        if (\array_key_exists('LogConfig', $data)) {
            $object->logConfig = $this->denormalizer->denormalize($data['LogConfig'], \Docker\Api\Model\HostConfigLogConfig::class, 'json', $context);
        }
        if (\array_key_exists('NetworkMode', $data)) {
            $object->networkMode = $data['NetworkMode'];
        }
        if (\array_key_exists('PortBindings', $data)) {
            $values_10 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['PortBindings'] as $key => $value_10) {
                $values_11 = [];
                foreach ($value_10 as $value_11) {
                    $values_11[] = $this->denormalizer->denormalize($value_11, \Docker\Api\Model\PortBinding::class, 'json', $context);
                }
                $values_10[$key] = $values_11;
            }
            $object->portBindings = $values_10;
        }
        if (\array_key_exists('RestartPolicy', $data)) {
            $object->restartPolicy = $this->denormalizer->denormalize($data['RestartPolicy'], \Docker\Api\Model\RestartPolicy::class, 'json', $context);
        }
        if (\array_key_exists('AutoRemove', $data)) {
            $object->autoRemove = $data['AutoRemove'];
        }
        if (\array_key_exists('VolumeDriver', $data)) {
            $object->volumeDriver = $data['VolumeDriver'];
        }
        if (\array_key_exists('VolumesFrom', $data)) {
            $values_12 = [];
            foreach ($data['VolumesFrom'] as $value_12) {
                $values_12[] = $value_12;
            }
            $object->volumesFrom = $values_12;
        }
        if (\array_key_exists('Mounts', $data)) {
            $values_13 = [];
            foreach ($data['Mounts'] as $value_13) {
                $values_13[] = $this->denormalizer->denormalize($value_13, \Docker\Api\Model\Mount::class, 'json', $context);
            }
            $object->mounts = $values_13;
        }
        if (\array_key_exists('CapAdd', $data)) {
            $values_14 = [];
            foreach ($data['CapAdd'] as $value_14) {
                $values_14[] = $value_14;
            }
            $object->capAdd = $values_14;
        }
        if (\array_key_exists('CapDrop', $data)) {
            $values_15 = [];
            foreach ($data['CapDrop'] as $value_15) {
                $values_15[] = $value_15;
            }
            $object->capDrop = $values_15;
        }
        if (\array_key_exists('CgroupnsMode', $data)) {
            $object->cgroupnsMode = $data['CgroupnsMode'];
        }
        if (\array_key_exists('Dns', $data)) {
            $values_16 = [];
            foreach ($data['Dns'] as $value_16) {
                $values_16[] = $value_16;
            }
            $object->dns = $values_16;
        }
        if (\array_key_exists('DnsOptions', $data)) {
            $values_17 = [];
            foreach ($data['DnsOptions'] as $value_17) {
                $values_17[] = $value_17;
            }
            $object->dnsOptions = $values_17;
        }
        if (\array_key_exists('DnsSearch', $data)) {
            $values_18 = [];
            foreach ($data['DnsSearch'] as $value_18) {
                $values_18[] = $value_18;
            }
            $object->dnsSearch = $values_18;
        }
        if (\array_key_exists('ExtraHosts', $data)) {
            $values_19 = [];
            foreach ($data['ExtraHosts'] as $value_19) {
                $values_19[] = $value_19;
            }
            $object->extraHosts = $values_19;
        }
        if (\array_key_exists('GroupAdd', $data)) {
            $values_20 = [];
            foreach ($data['GroupAdd'] as $value_20) {
                $values_20[] = $value_20;
            }
            $object->groupAdd = $values_20;
        }
        if (\array_key_exists('IpcMode', $data)) {
            $object->ipcMode = $data['IpcMode'];
        }
        if (\array_key_exists('Cgroup', $data)) {
            $object->cgroup = $data['Cgroup'];
        }
        if (\array_key_exists('Links', $data)) {
            $values_21 = [];
            foreach ($data['Links'] as $value_21) {
                $values_21[] = $value_21;
            }
            $object->links = $values_21;
        }
        if (\array_key_exists('OomScoreAdj', $data)) {
            $object->oomScoreAdj = $data['OomScoreAdj'];
        }
        if (\array_key_exists('PidMode', $data)) {
            $object->pidMode = $data['PidMode'];
        }
        if (\array_key_exists('Privileged', $data)) {
            $object->privileged = $data['Privileged'];
        }
        if (\array_key_exists('PublishAllPorts', $data)) {
            $object->publishAllPorts = $data['PublishAllPorts'];
        }
        if (\array_key_exists('ReadonlyRootfs', $data)) {
            $object->readonlyRootfs = $data['ReadonlyRootfs'];
        }
        if (\array_key_exists('SecurityOpt', $data)) {
            $values_22 = [];
            foreach ($data['SecurityOpt'] as $value_22) {
                $values_22[] = $value_22;
            }
            $object->securityOpt = $values_22;
        }
        if (\array_key_exists('StorageOpt', $data)) {
            $values_23 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['StorageOpt'] as $key_1 => $value_23) {
                $values_23[$key_1] = $value_23;
            }
            $object->storageOpt = $values_23;
        }
        if (\array_key_exists('Tmpfs', $data)) {
            $values_24 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Tmpfs'] as $key_2 => $value_24) {
                $values_24[$key_2] = $value_24;
            }
            $object->tmpfs = $values_24;
        }
        if (\array_key_exists('UTSMode', $data)) {
            $object->uTSMode = $data['UTSMode'];
        }
        if (\array_key_exists('UsernsMode', $data)) {
            $object->usernsMode = $data['UsernsMode'];
        }
        if (\array_key_exists('ShmSize', $data)) {
            $object->shmSize = $data['ShmSize'];
        }
        if (\array_key_exists('Sysctls', $data)) {
            $values_25 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Sysctls'] as $key_3 => $value_25) {
                $values_25[$key_3] = $value_25;
            }
            $object->sysctls = $values_25;
        }
        if (\array_key_exists('Runtime', $data)) {
            $object->runtime = $data['Runtime'];
        }
        if (\array_key_exists('ConsoleSize', $data)) {
            $values_26 = [];
            foreach ($data['ConsoleSize'] as $value_26) {
                $values_26[] = $value_26;
            }
            $object->consoleSize = $values_26;
        }
        if (\array_key_exists('Isolation', $data)) {
            $object->isolation = $data['Isolation'];
        }
        if (\array_key_exists('MaskedPaths', $data)) {
            $values_27 = [];
            foreach ($data['MaskedPaths'] as $value_27) {
                $values_27[] = $value_27;
            }
            $object->maskedPaths = $values_27;
        }
        if (\array_key_exists('ReadonlyPaths', $data)) {
            $values_28 = [];
            foreach ($data['ReadonlyPaths'] as $value_28) {
                $values_28[] = $value_28;
            }
            $object->readonlyPaths = $values_28;
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
        if (array_key_exists('binds', get_object_vars($data)) && null !== ($data->binds ?? null)) {
            $values_9 = [];
            foreach ($data->binds ?? null as $value_9) {
                $values_9[] = $value_9;
            }
            $dataArray['Binds'] = $values_9;
        }
        if (array_key_exists('containerIDFile', get_object_vars($data)) && null !== ($data->containerIDFile ?? null)) {
            $dataArray['ContainerIDFile'] = $data->containerIDFile ?? null;
        }
        if (array_key_exists('logConfig', get_object_vars($data)) && null !== ($data->logConfig ?? null)) {
            $dataArray['LogConfig'] = ($data->logConfig ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->logConfig ?? null, 'json', $context));
        }
        if (array_key_exists('networkMode', get_object_vars($data)) && null !== ($data->networkMode ?? null)) {
            $dataArray['NetworkMode'] = $data->networkMode ?? null;
        }
        if (array_key_exists('portBindings', get_object_vars($data)) && null !== ($data->portBindings ?? null)) {
            $values_10 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->portBindings ?? null as $key => $value_10) {
                $values_11 = [];
                foreach ($value_10 as $value_11) {
                    $values_11[] = $value_11 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_11, 'json', $context));
                }
                $values_10[$key] = $values_11;
            }
            $dataArray['PortBindings'] = $values_10;
        }
        if (array_key_exists('restartPolicy', get_object_vars($data)) && null !== ($data->restartPolicy ?? null)) {
            $dataArray['RestartPolicy'] = ($data->restartPolicy ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->restartPolicy ?? null, 'json', $context));
        }
        if (array_key_exists('autoRemove', get_object_vars($data)) && null !== ($data->autoRemove ?? null)) {
            $dataArray['AutoRemove'] = $data->autoRemove ?? null;
        }
        if (array_key_exists('volumeDriver', get_object_vars($data)) && null !== ($data->volumeDriver ?? null)) {
            $dataArray['VolumeDriver'] = $data->volumeDriver ?? null;
        }
        if (array_key_exists('volumesFrom', get_object_vars($data)) && null !== ($data->volumesFrom ?? null)) {
            $values_12 = [];
            foreach ($data->volumesFrom ?? null as $value_12) {
                $values_12[] = $value_12;
            }
            $dataArray['VolumesFrom'] = $values_12;
        }
        if (array_key_exists('mounts', get_object_vars($data)) && null !== ($data->mounts ?? null)) {
            $values_13 = [];
            foreach ($data->mounts ?? null as $value_13) {
                $values_13[] = $value_13 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_13, 'json', $context));
            }
            $dataArray['Mounts'] = $values_13;
        }
        if (array_key_exists('capAdd', get_object_vars($data)) && null !== ($data->capAdd ?? null)) {
            $values_14 = [];
            foreach ($data->capAdd ?? null as $value_14) {
                $values_14[] = $value_14;
            }
            $dataArray['CapAdd'] = $values_14;
        }
        if (array_key_exists('capDrop', get_object_vars($data)) && null !== ($data->capDrop ?? null)) {
            $values_15 = [];
            foreach ($data->capDrop ?? null as $value_15) {
                $values_15[] = $value_15;
            }
            $dataArray['CapDrop'] = $values_15;
        }
        if (array_key_exists('cgroupnsMode', get_object_vars($data)) && null !== ($data->cgroupnsMode ?? null)) {
            $dataArray['CgroupnsMode'] = $data->cgroupnsMode ?? null;
        }
        if (array_key_exists('dns', get_object_vars($data)) && null !== ($data->dns ?? null)) {
            $values_16 = [];
            foreach ($data->dns ?? null as $value_16) {
                $values_16[] = $value_16;
            }
            $dataArray['Dns'] = $values_16;
        }
        if (array_key_exists('dnsOptions', get_object_vars($data)) && null !== ($data->dnsOptions ?? null)) {
            $values_17 = [];
            foreach ($data->dnsOptions ?? null as $value_17) {
                $values_17[] = $value_17;
            }
            $dataArray['DnsOptions'] = $values_17;
        }
        if (array_key_exists('dnsSearch', get_object_vars($data)) && null !== ($data->dnsSearch ?? null)) {
            $values_18 = [];
            foreach ($data->dnsSearch ?? null as $value_18) {
                $values_18[] = $value_18;
            }
            $dataArray['DnsSearch'] = $values_18;
        }
        if (array_key_exists('extraHosts', get_object_vars($data)) && null !== ($data->extraHosts ?? null)) {
            $values_19 = [];
            foreach ($data->extraHosts ?? null as $value_19) {
                $values_19[] = $value_19;
            }
            $dataArray['ExtraHosts'] = $values_19;
        }
        if (array_key_exists('groupAdd', get_object_vars($data)) && null !== ($data->groupAdd ?? null)) {
            $values_20 = [];
            foreach ($data->groupAdd ?? null as $value_20) {
                $values_20[] = $value_20;
            }
            $dataArray['GroupAdd'] = $values_20;
        }
        if (array_key_exists('ipcMode', get_object_vars($data)) && null !== ($data->ipcMode ?? null)) {
            $dataArray['IpcMode'] = $data->ipcMode ?? null;
        }
        if (array_key_exists('cgroup', get_object_vars($data)) && null !== ($data->cgroup ?? null)) {
            $dataArray['Cgroup'] = $data->cgroup ?? null;
        }
        if (array_key_exists('links', get_object_vars($data)) && null !== ($data->links ?? null)) {
            $values_21 = [];
            foreach ($data->links ?? null as $value_21) {
                $values_21[] = $value_21;
            }
            $dataArray['Links'] = $values_21;
        }
        if (array_key_exists('oomScoreAdj', get_object_vars($data)) && null !== ($data->oomScoreAdj ?? null)) {
            $dataArray['OomScoreAdj'] = $data->oomScoreAdj ?? null;
        }
        if (array_key_exists('pidMode', get_object_vars($data)) && null !== ($data->pidMode ?? null)) {
            $dataArray['PidMode'] = $data->pidMode ?? null;
        }
        if (array_key_exists('privileged', get_object_vars($data)) && null !== ($data->privileged ?? null)) {
            $dataArray['Privileged'] = $data->privileged ?? null;
        }
        if (array_key_exists('publishAllPorts', get_object_vars($data)) && null !== ($data->publishAllPorts ?? null)) {
            $dataArray['PublishAllPorts'] = $data->publishAllPorts ?? null;
        }
        if (array_key_exists('readonlyRootfs', get_object_vars($data)) && null !== ($data->readonlyRootfs ?? null)) {
            $dataArray['ReadonlyRootfs'] = $data->readonlyRootfs ?? null;
        }
        if (array_key_exists('securityOpt', get_object_vars($data)) && null !== ($data->securityOpt ?? null)) {
            $values_22 = [];
            foreach ($data->securityOpt ?? null as $value_22) {
                $values_22[] = $value_22;
            }
            $dataArray['SecurityOpt'] = $values_22;
        }
        if (array_key_exists('storageOpt', get_object_vars($data)) && null !== ($data->storageOpt ?? null)) {
            $values_23 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->storageOpt ?? null as $key_1 => $value_23) {
                $values_23[$key_1] = $value_23;
            }
            $dataArray['StorageOpt'] = $values_23;
        }
        if (array_key_exists('tmpfs', get_object_vars($data)) && null !== ($data->tmpfs ?? null)) {
            $values_24 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->tmpfs ?? null as $key_2 => $value_24) {
                $values_24[$key_2] = $value_24;
            }
            $dataArray['Tmpfs'] = $values_24;
        }
        if (array_key_exists('uTSMode', get_object_vars($data)) && null !== ($data->uTSMode ?? null)) {
            $dataArray['UTSMode'] = $data->uTSMode ?? null;
        }
        if (array_key_exists('usernsMode', get_object_vars($data)) && null !== ($data->usernsMode ?? null)) {
            $dataArray['UsernsMode'] = $data->usernsMode ?? null;
        }
        if (array_key_exists('shmSize', get_object_vars($data)) && null !== ($data->shmSize ?? null)) {
            $dataArray['ShmSize'] = $data->shmSize ?? null;
        }
        if (array_key_exists('sysctls', get_object_vars($data)) && null !== ($data->sysctls ?? null)) {
            $values_25 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->sysctls ?? null as $key_3 => $value_25) {
                $values_25[$key_3] = $value_25;
            }
            $dataArray['Sysctls'] = $values_25;
        }
        if (array_key_exists('runtime', get_object_vars($data)) && null !== ($data->runtime ?? null)) {
            $dataArray['Runtime'] = $data->runtime ?? null;
        }
        if (array_key_exists('consoleSize', get_object_vars($data)) && null !== ($data->consoleSize ?? null)) {
            $values_26 = [];
            foreach ($data->consoleSize ?? null as $value_26) {
                $values_26[] = $value_26;
            }
            $dataArray['ConsoleSize'] = $values_26;
        }
        if (array_key_exists('isolation', get_object_vars($data)) && null !== ($data->isolation ?? null)) {
            $dataArray['Isolation'] = $data->isolation ?? null;
        }
        if (array_key_exists('maskedPaths', get_object_vars($data)) && null !== ($data->maskedPaths ?? null)) {
            $values_27 = [];
            foreach ($data->maskedPaths ?? null as $value_27) {
                $values_27[] = $value_27;
            }
            $dataArray['MaskedPaths'] = $values_27;
        }
        if (array_key_exists('readonlyPaths', get_object_vars($data)) && null !== ($data->readonlyPaths ?? null)) {
            $values_28 = [];
            foreach ($data->readonlyPaths ?? null as $value_28) {
                $values_28[] = $value_28;
            }
            $dataArray['ReadonlyPaths'] = $values_28;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\HostConfigConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\HostConfig::class => false];
    }
}