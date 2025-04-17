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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\Api\Model\HostConfig();
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
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('CpuShares', $data)) {
            $object->setCpuShares($data['CpuShares']);
        }
        if (\array_key_exists('Memory', $data)) {
            $object->setMemory($data['Memory']);
        }
        if (\array_key_exists('CgroupParent', $data)) {
            $object->setCgroupParent($data['CgroupParent']);
        }
        if (\array_key_exists('BlkioWeight', $data)) {
            $object->setBlkioWeight($data['BlkioWeight']);
        }
        if (\array_key_exists('BlkioWeightDevice', $data)) {
            $values = [];
            foreach ($data['BlkioWeightDevice'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Docker\Api\Model\ResourcesBlkioWeightDeviceItem::class, 'json', $context);
            }
            $object->setBlkioWeightDevice($values);
        }
        if (\array_key_exists('BlkioDeviceReadBps', $data)) {
            $values_1 = [];
            foreach ($data['BlkioDeviceReadBps'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Docker\Api\Model\ThrottleDevice::class, 'json', $context);
            }
            $object->setBlkioDeviceReadBps($values_1);
        }
        if (\array_key_exists('BlkioDeviceWriteBps', $data)) {
            $values_2 = [];
            foreach ($data['BlkioDeviceWriteBps'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Docker\Api\Model\ThrottleDevice::class, 'json', $context);
            }
            $object->setBlkioDeviceWriteBps($values_2);
        }
        if (\array_key_exists('BlkioDeviceReadIOps', $data)) {
            $values_3 = [];
            foreach ($data['BlkioDeviceReadIOps'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Docker\Api\Model\ThrottleDevice::class, 'json', $context);
            }
            $object->setBlkioDeviceReadIOps($values_3);
        }
        if (\array_key_exists('BlkioDeviceWriteIOps', $data)) {
            $values_4 = [];
            foreach ($data['BlkioDeviceWriteIOps'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Docker\Api\Model\ThrottleDevice::class, 'json', $context);
            }
            $object->setBlkioDeviceWriteIOps($values_4);
        }
        if (\array_key_exists('CpuPeriod', $data)) {
            $object->setCpuPeriod($data['CpuPeriod']);
        }
        if (\array_key_exists('CpuQuota', $data)) {
            $object->setCpuQuota($data['CpuQuota']);
        }
        if (\array_key_exists('CpuRealtimePeriod', $data)) {
            $object->setCpuRealtimePeriod($data['CpuRealtimePeriod']);
        }
        if (\array_key_exists('CpuRealtimeRuntime', $data)) {
            $object->setCpuRealtimeRuntime($data['CpuRealtimeRuntime']);
        }
        if (\array_key_exists('CpusetCpus', $data)) {
            $object->setCpusetCpus($data['CpusetCpus']);
        }
        if (\array_key_exists('CpusetMems', $data)) {
            $object->setCpusetMems($data['CpusetMems']);
        }
        if (\array_key_exists('Devices', $data)) {
            $values_5 = [];
            foreach ($data['Devices'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Docker\Api\Model\DeviceMapping::class, 'json', $context);
            }
            $object->setDevices($values_5);
        }
        if (\array_key_exists('DeviceCgroupRules', $data)) {
            $values_6 = [];
            foreach ($data['DeviceCgroupRules'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setDeviceCgroupRules($values_6);
        }
        if (\array_key_exists('DeviceRequests', $data)) {
            $values_7 = [];
            foreach ($data['DeviceRequests'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \Docker\Api\Model\DeviceRequest::class, 'json', $context);
            }
            $object->setDeviceRequests($values_7);
        }
        if (\array_key_exists('KernelMemory', $data)) {
            $object->setKernelMemory($data['KernelMemory']);
        }
        if (\array_key_exists('KernelMemoryTCP', $data)) {
            $object->setKernelMemoryTCP($data['KernelMemoryTCP']);
        }
        if (\array_key_exists('MemoryReservation', $data)) {
            $object->setMemoryReservation($data['MemoryReservation']);
        }
        if (\array_key_exists('MemorySwap', $data)) {
            $object->setMemorySwap($data['MemorySwap']);
        }
        if (\array_key_exists('MemorySwappiness', $data)) {
            $object->setMemorySwappiness($data['MemorySwappiness']);
        }
        if (\array_key_exists('NanoCpus', $data)) {
            $object->setNanoCpus($data['NanoCpus']);
        }
        if (\array_key_exists('OomKillDisable', $data)) {
            $object->setOomKillDisable($data['OomKillDisable']);
        }
        if (\array_key_exists('Init', $data) && $data['Init'] !== null) {
            $object->setInit($data['Init']);
        }
        elseif (\array_key_exists('Init', $data) && $data['Init'] === null) {
            $object->setInit(null);
        }
        if (\array_key_exists('PidsLimit', $data) && $data['PidsLimit'] !== null) {
            $object->setPidsLimit($data['PidsLimit']);
        }
        elseif (\array_key_exists('PidsLimit', $data) && $data['PidsLimit'] === null) {
            $object->setPidsLimit(null);
        }
        if (\array_key_exists('Ulimits', $data)) {
            $values_8 = [];
            foreach ($data['Ulimits'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, \Docker\Api\Model\ResourcesUlimitsItem::class, 'json', $context);
            }
            $object->setUlimits($values_8);
        }
        if (\array_key_exists('CpuCount', $data)) {
            $object->setCpuCount($data['CpuCount']);
        }
        if (\array_key_exists('CpuPercent', $data)) {
            $object->setCpuPercent($data['CpuPercent']);
        }
        if (\array_key_exists('IOMaximumIOps', $data)) {
            $object->setIOMaximumIOps($data['IOMaximumIOps']);
        }
        if (\array_key_exists('IOMaximumBandwidth', $data)) {
            $object->setIOMaximumBandwidth($data['IOMaximumBandwidth']);
        }
        if (\array_key_exists('Binds', $data)) {
            $values_9 = [];
            foreach ($data['Binds'] as $value_9) {
                $values_9[] = $value_9;
            }
            $object->setBinds($values_9);
        }
        if (\array_key_exists('ContainerIDFile', $data)) {
            $object->setContainerIDFile($data['ContainerIDFile']);
        }
        if (\array_key_exists('LogConfig', $data)) {
            $object->setLogConfig($this->denormalizer->denormalize($data['LogConfig'], \Docker\Api\Model\HostConfigLogConfig::class, 'json', $context));
        }
        if (\array_key_exists('NetworkMode', $data)) {
            $object->setNetworkMode($data['NetworkMode']);
        }
        if (\array_key_exists('PortBindings', $data)) {
            $values_10 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['PortBindings'] as $key => $value_10) {
                $values_11 = [];
                foreach ($value_10 as $value_11) {
                    $values_11[] = $this->denormalizer->denormalize($value_11, \Docker\Api\Model\PortBinding::class, 'json', $context);
                }
                $values_10[$key] = $values_11;
            }
            $object->setPortBindings($values_10);
        }
        if (\array_key_exists('RestartPolicy', $data)) {
            $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], \Docker\Api\Model\RestartPolicy::class, 'json', $context));
        }
        if (\array_key_exists('AutoRemove', $data)) {
            $object->setAutoRemove($data['AutoRemove']);
        }
        if (\array_key_exists('VolumeDriver', $data)) {
            $object->setVolumeDriver($data['VolumeDriver']);
        }
        if (\array_key_exists('VolumesFrom', $data)) {
            $values_12 = [];
            foreach ($data['VolumesFrom'] as $value_12) {
                $values_12[] = $value_12;
            }
            $object->setVolumesFrom($values_12);
        }
        if (\array_key_exists('Mounts', $data)) {
            $values_13 = [];
            foreach ($data['Mounts'] as $value_13) {
                $values_13[] = $this->denormalizer->denormalize($value_13, \Docker\Api\Model\Mount::class, 'json', $context);
            }
            $object->setMounts($values_13);
        }
        if (\array_key_exists('CapAdd', $data)) {
            $values_14 = [];
            foreach ($data['CapAdd'] as $value_14) {
                $values_14[] = $value_14;
            }
            $object->setCapAdd($values_14);
        }
        if (\array_key_exists('CapDrop', $data)) {
            $values_15 = [];
            foreach ($data['CapDrop'] as $value_15) {
                $values_15[] = $value_15;
            }
            $object->setCapDrop($values_15);
        }
        if (\array_key_exists('CgroupnsMode', $data)) {
            $object->setCgroupnsMode($data['CgroupnsMode']);
        }
        if (\array_key_exists('Dns', $data)) {
            $values_16 = [];
            foreach ($data['Dns'] as $value_16) {
                $values_16[] = $value_16;
            }
            $object->setDns($values_16);
        }
        if (\array_key_exists('DnsOptions', $data)) {
            $values_17 = [];
            foreach ($data['DnsOptions'] as $value_17) {
                $values_17[] = $value_17;
            }
            $object->setDnsOptions($values_17);
        }
        if (\array_key_exists('DnsSearch', $data)) {
            $values_18 = [];
            foreach ($data['DnsSearch'] as $value_18) {
                $values_18[] = $value_18;
            }
            $object->setDnsSearch($values_18);
        }
        if (\array_key_exists('ExtraHosts', $data)) {
            $values_19 = [];
            foreach ($data['ExtraHosts'] as $value_19) {
                $values_19[] = $value_19;
            }
            $object->setExtraHosts($values_19);
        }
        if (\array_key_exists('GroupAdd', $data)) {
            $values_20 = [];
            foreach ($data['GroupAdd'] as $value_20) {
                $values_20[] = $value_20;
            }
            $object->setGroupAdd($values_20);
        }
        if (\array_key_exists('IpcMode', $data)) {
            $object->setIpcMode($data['IpcMode']);
        }
        if (\array_key_exists('Cgroup', $data)) {
            $object->setCgroup($data['Cgroup']);
        }
        if (\array_key_exists('Links', $data)) {
            $values_21 = [];
            foreach ($data['Links'] as $value_21) {
                $values_21[] = $value_21;
            }
            $object->setLinks($values_21);
        }
        if (\array_key_exists('OomScoreAdj', $data)) {
            $object->setOomScoreAdj($data['OomScoreAdj']);
        }
        if (\array_key_exists('PidMode', $data)) {
            $object->setPidMode($data['PidMode']);
        }
        if (\array_key_exists('Privileged', $data)) {
            $object->setPrivileged($data['Privileged']);
        }
        if (\array_key_exists('PublishAllPorts', $data)) {
            $object->setPublishAllPorts($data['PublishAllPorts']);
        }
        if (\array_key_exists('ReadonlyRootfs', $data)) {
            $object->setReadonlyRootfs($data['ReadonlyRootfs']);
        }
        if (\array_key_exists('SecurityOpt', $data)) {
            $values_22 = [];
            foreach ($data['SecurityOpt'] as $value_22) {
                $values_22[] = $value_22;
            }
            $object->setSecurityOpt($values_22);
        }
        if (\array_key_exists('StorageOpt', $data)) {
            $values_23 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['StorageOpt'] as $key_1 => $value_23) {
                $values_23[$key_1] = $value_23;
            }
            $object->setStorageOpt($values_23);
        }
        if (\array_key_exists('Tmpfs', $data)) {
            $values_24 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Tmpfs'] as $key_2 => $value_24) {
                $values_24[$key_2] = $value_24;
            }
            $object->setTmpfs($values_24);
        }
        if (\array_key_exists('UTSMode', $data)) {
            $object->setUTSMode($data['UTSMode']);
        }
        if (\array_key_exists('UsernsMode', $data)) {
            $object->setUsernsMode($data['UsernsMode']);
        }
        if (\array_key_exists('ShmSize', $data)) {
            $object->setShmSize($data['ShmSize']);
        }
        if (\array_key_exists('Sysctls', $data)) {
            $values_25 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Sysctls'] as $key_3 => $value_25) {
                $values_25[$key_3] = $value_25;
            }
            $object->setSysctls($values_25);
        }
        if (\array_key_exists('Runtime', $data)) {
            $object->setRuntime($data['Runtime']);
        }
        if (\array_key_exists('ConsoleSize', $data)) {
            $values_26 = [];
            foreach ($data['ConsoleSize'] as $value_26) {
                $values_26[] = $value_26;
            }
            $object->setConsoleSize($values_26);
        }
        if (\array_key_exists('Isolation', $data)) {
            $object->setIsolation($data['Isolation']);
        }
        if (\array_key_exists('MaskedPaths', $data)) {
            $values_27 = [];
            foreach ($data['MaskedPaths'] as $value_27) {
                $values_27[] = $value_27;
            }
            $object->setMaskedPaths($values_27);
        }
        if (\array_key_exists('ReadonlyPaths', $data)) {
            $values_28 = [];
            foreach ($data['ReadonlyPaths'] as $value_28) {
                $values_28[] = $value_28;
            }
            $object->setReadonlyPaths($values_28);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('cpuShares') && null !== $data->getCpuShares()) {
            $dataArray['CpuShares'] = $data->getCpuShares();
        }
        if ($data->isInitialized('memory') && null !== $data->getMemory()) {
            $dataArray['Memory'] = $data->getMemory();
        }
        if ($data->isInitialized('cgroupParent') && null !== $data->getCgroupParent()) {
            $dataArray['CgroupParent'] = $data->getCgroupParent();
        }
        if ($data->isInitialized('blkioWeight') && null !== $data->getBlkioWeight()) {
            $dataArray['BlkioWeight'] = $data->getBlkioWeight();
        }
        if ($data->isInitialized('blkioWeightDevice') && null !== $data->getBlkioWeightDevice()) {
            $values = [];
            foreach ($data->getBlkioWeightDevice() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['BlkioWeightDevice'] = $values;
        }
        if ($data->isInitialized('blkioDeviceReadBps') && null !== $data->getBlkioDeviceReadBps()) {
            $values_1 = [];
            foreach ($data->getBlkioDeviceReadBps() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['BlkioDeviceReadBps'] = $values_1;
        }
        if ($data->isInitialized('blkioDeviceWriteBps') && null !== $data->getBlkioDeviceWriteBps()) {
            $values_2 = [];
            foreach ($data->getBlkioDeviceWriteBps() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['BlkioDeviceWriteBps'] = $values_2;
        }
        if ($data->isInitialized('blkioDeviceReadIOps') && null !== $data->getBlkioDeviceReadIOps()) {
            $values_3 = [];
            foreach ($data->getBlkioDeviceReadIOps() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['BlkioDeviceReadIOps'] = $values_3;
        }
        if ($data->isInitialized('blkioDeviceWriteIOps') && null !== $data->getBlkioDeviceWriteIOps()) {
            $values_4 = [];
            foreach ($data->getBlkioDeviceWriteIOps() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['BlkioDeviceWriteIOps'] = $values_4;
        }
        if ($data->isInitialized('cpuPeriod') && null !== $data->getCpuPeriod()) {
            $dataArray['CpuPeriod'] = $data->getCpuPeriod();
        }
        if ($data->isInitialized('cpuQuota') && null !== $data->getCpuQuota()) {
            $dataArray['CpuQuota'] = $data->getCpuQuota();
        }
        if ($data->isInitialized('cpuRealtimePeriod') && null !== $data->getCpuRealtimePeriod()) {
            $dataArray['CpuRealtimePeriod'] = $data->getCpuRealtimePeriod();
        }
        if ($data->isInitialized('cpuRealtimeRuntime') && null !== $data->getCpuRealtimeRuntime()) {
            $dataArray['CpuRealtimeRuntime'] = $data->getCpuRealtimeRuntime();
        }
        if ($data->isInitialized('cpusetCpus') && null !== $data->getCpusetCpus()) {
            $dataArray['CpusetCpus'] = $data->getCpusetCpus();
        }
        if ($data->isInitialized('cpusetMems') && null !== $data->getCpusetMems()) {
            $dataArray['CpusetMems'] = $data->getCpusetMems();
        }
        if ($data->isInitialized('devices') && null !== $data->getDevices()) {
            $values_5 = [];
            foreach ($data->getDevices() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['Devices'] = $values_5;
        }
        if ($data->isInitialized('deviceCgroupRules') && null !== $data->getDeviceCgroupRules()) {
            $values_6 = [];
            foreach ($data->getDeviceCgroupRules() as $value_6) {
                $values_6[] = $value_6;
            }
            $dataArray['DeviceCgroupRules'] = $values_6;
        }
        if ($data->isInitialized('deviceRequests') && null !== $data->getDeviceRequests()) {
            $values_7 = [];
            foreach ($data->getDeviceRequests() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $dataArray['DeviceRequests'] = $values_7;
        }
        if ($data->isInitialized('kernelMemory') && null !== $data->getKernelMemory()) {
            $dataArray['KernelMemory'] = $data->getKernelMemory();
        }
        if ($data->isInitialized('kernelMemoryTCP') && null !== $data->getKernelMemoryTCP()) {
            $dataArray['KernelMemoryTCP'] = $data->getKernelMemoryTCP();
        }
        if ($data->isInitialized('memoryReservation') && null !== $data->getMemoryReservation()) {
            $dataArray['MemoryReservation'] = $data->getMemoryReservation();
        }
        if ($data->isInitialized('memorySwap') && null !== $data->getMemorySwap()) {
            $dataArray['MemorySwap'] = $data->getMemorySwap();
        }
        if ($data->isInitialized('memorySwappiness') && null !== $data->getMemorySwappiness()) {
            $dataArray['MemorySwappiness'] = $data->getMemorySwappiness();
        }
        if ($data->isInitialized('nanoCpus') && null !== $data->getNanoCpus()) {
            $dataArray['NanoCpus'] = $data->getNanoCpus();
        }
        if ($data->isInitialized('oomKillDisable') && null !== $data->getOomKillDisable()) {
            $dataArray['OomKillDisable'] = $data->getOomKillDisable();
        }
        if ($data->isInitialized('init') && null !== $data->getInit()) {
            $dataArray['Init'] = $data->getInit();
        }
        if ($data->isInitialized('pidsLimit') && null !== $data->getPidsLimit()) {
            $dataArray['PidsLimit'] = $data->getPidsLimit();
        }
        if ($data->isInitialized('ulimits') && null !== $data->getUlimits()) {
            $values_8 = [];
            foreach ($data->getUlimits() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $dataArray['Ulimits'] = $values_8;
        }
        if ($data->isInitialized('cpuCount') && null !== $data->getCpuCount()) {
            $dataArray['CpuCount'] = $data->getCpuCount();
        }
        if ($data->isInitialized('cpuPercent') && null !== $data->getCpuPercent()) {
            $dataArray['CpuPercent'] = $data->getCpuPercent();
        }
        if ($data->isInitialized('iOMaximumIOps') && null !== $data->getIOMaximumIOps()) {
            $dataArray['IOMaximumIOps'] = $data->getIOMaximumIOps();
        }
        if ($data->isInitialized('iOMaximumBandwidth') && null !== $data->getIOMaximumBandwidth()) {
            $dataArray['IOMaximumBandwidth'] = $data->getIOMaximumBandwidth();
        }
        if ($data->isInitialized('binds') && null !== $data->getBinds()) {
            $values_9 = [];
            foreach ($data->getBinds() as $value_9) {
                $values_9[] = $value_9;
            }
            $dataArray['Binds'] = $values_9;
        }
        if ($data->isInitialized('containerIDFile') && null !== $data->getContainerIDFile()) {
            $dataArray['ContainerIDFile'] = $data->getContainerIDFile();
        }
        if ($data->isInitialized('logConfig') && null !== $data->getLogConfig()) {
            $dataArray['LogConfig'] = $this->normalizer->normalize($data->getLogConfig(), 'json', $context);
        }
        if ($data->isInitialized('networkMode') && null !== $data->getNetworkMode()) {
            $dataArray['NetworkMode'] = $data->getNetworkMode();
        }
        if ($data->isInitialized('portBindings') && null !== $data->getPortBindings()) {
            $values_10 = [];
            foreach ($data->getPortBindings() as $key => $value_10) {
                $values_11 = [];
                foreach ($value_10 as $value_11) {
                    $values_11[] = $this->normalizer->normalize($value_11, 'json', $context);
                }
                $values_10[$key] = $values_11;
            }
            $dataArray['PortBindings'] = $values_10;
        }
        if ($data->isInitialized('restartPolicy') && null !== $data->getRestartPolicy()) {
            $dataArray['RestartPolicy'] = $this->normalizer->normalize($data->getRestartPolicy(), 'json', $context);
        }
        if ($data->isInitialized('autoRemove') && null !== $data->getAutoRemove()) {
            $dataArray['AutoRemove'] = $data->getAutoRemove();
        }
        if ($data->isInitialized('volumeDriver') && null !== $data->getVolumeDriver()) {
            $dataArray['VolumeDriver'] = $data->getVolumeDriver();
        }
        if ($data->isInitialized('volumesFrom') && null !== $data->getVolumesFrom()) {
            $values_12 = [];
            foreach ($data->getVolumesFrom() as $value_12) {
                $values_12[] = $value_12;
            }
            $dataArray['VolumesFrom'] = $values_12;
        }
        if ($data->isInitialized('mounts') && null !== $data->getMounts()) {
            $values_13 = [];
            foreach ($data->getMounts() as $value_13) {
                $values_13[] = $this->normalizer->normalize($value_13, 'json', $context);
            }
            $dataArray['Mounts'] = $values_13;
        }
        if ($data->isInitialized('capAdd') && null !== $data->getCapAdd()) {
            $values_14 = [];
            foreach ($data->getCapAdd() as $value_14) {
                $values_14[] = $value_14;
            }
            $dataArray['CapAdd'] = $values_14;
        }
        if ($data->isInitialized('capDrop') && null !== $data->getCapDrop()) {
            $values_15 = [];
            foreach ($data->getCapDrop() as $value_15) {
                $values_15[] = $value_15;
            }
            $dataArray['CapDrop'] = $values_15;
        }
        if ($data->isInitialized('cgroupnsMode') && null !== $data->getCgroupnsMode()) {
            $dataArray['CgroupnsMode'] = $data->getCgroupnsMode();
        }
        if ($data->isInitialized('dns') && null !== $data->getDns()) {
            $values_16 = [];
            foreach ($data->getDns() as $value_16) {
                $values_16[] = $value_16;
            }
            $dataArray['Dns'] = $values_16;
        }
        if ($data->isInitialized('dnsOptions') && null !== $data->getDnsOptions()) {
            $values_17 = [];
            foreach ($data->getDnsOptions() as $value_17) {
                $values_17[] = $value_17;
            }
            $dataArray['DnsOptions'] = $values_17;
        }
        if ($data->isInitialized('dnsSearch') && null !== $data->getDnsSearch()) {
            $values_18 = [];
            foreach ($data->getDnsSearch() as $value_18) {
                $values_18[] = $value_18;
            }
            $dataArray['DnsSearch'] = $values_18;
        }
        if ($data->isInitialized('extraHosts') && null !== $data->getExtraHosts()) {
            $values_19 = [];
            foreach ($data->getExtraHosts() as $value_19) {
                $values_19[] = $value_19;
            }
            $dataArray['ExtraHosts'] = $values_19;
        }
        if ($data->isInitialized('groupAdd') && null !== $data->getGroupAdd()) {
            $values_20 = [];
            foreach ($data->getGroupAdd() as $value_20) {
                $values_20[] = $value_20;
            }
            $dataArray['GroupAdd'] = $values_20;
        }
        if ($data->isInitialized('ipcMode') && null !== $data->getIpcMode()) {
            $dataArray['IpcMode'] = $data->getIpcMode();
        }
        if ($data->isInitialized('cgroup') && null !== $data->getCgroup()) {
            $dataArray['Cgroup'] = $data->getCgroup();
        }
        if ($data->isInitialized('links') && null !== $data->getLinks()) {
            $values_21 = [];
            foreach ($data->getLinks() as $value_21) {
                $values_21[] = $value_21;
            }
            $dataArray['Links'] = $values_21;
        }
        if ($data->isInitialized('oomScoreAdj') && null !== $data->getOomScoreAdj()) {
            $dataArray['OomScoreAdj'] = $data->getOomScoreAdj();
        }
        if ($data->isInitialized('pidMode') && null !== $data->getPidMode()) {
            $dataArray['PidMode'] = $data->getPidMode();
        }
        if ($data->isInitialized('privileged') && null !== $data->getPrivileged()) {
            $dataArray['Privileged'] = $data->getPrivileged();
        }
        if ($data->isInitialized('publishAllPorts') && null !== $data->getPublishAllPorts()) {
            $dataArray['PublishAllPorts'] = $data->getPublishAllPorts();
        }
        if ($data->isInitialized('readonlyRootfs') && null !== $data->getReadonlyRootfs()) {
            $dataArray['ReadonlyRootfs'] = $data->getReadonlyRootfs();
        }
        if ($data->isInitialized('securityOpt') && null !== $data->getSecurityOpt()) {
            $values_22 = [];
            foreach ($data->getSecurityOpt() as $value_22) {
                $values_22[] = $value_22;
            }
            $dataArray['SecurityOpt'] = $values_22;
        }
        if ($data->isInitialized('storageOpt') && null !== $data->getStorageOpt()) {
            $values_23 = [];
            foreach ($data->getStorageOpt() as $key_1 => $value_23) {
                $values_23[$key_1] = $value_23;
            }
            $dataArray['StorageOpt'] = $values_23;
        }
        if ($data->isInitialized('tmpfs') && null !== $data->getTmpfs()) {
            $values_24 = [];
            foreach ($data->getTmpfs() as $key_2 => $value_24) {
                $values_24[$key_2] = $value_24;
            }
            $dataArray['Tmpfs'] = $values_24;
        }
        if ($data->isInitialized('uTSMode') && null !== $data->getUTSMode()) {
            $dataArray['UTSMode'] = $data->getUTSMode();
        }
        if ($data->isInitialized('usernsMode') && null !== $data->getUsernsMode()) {
            $dataArray['UsernsMode'] = $data->getUsernsMode();
        }
        if ($data->isInitialized('shmSize') && null !== $data->getShmSize()) {
            $dataArray['ShmSize'] = $data->getShmSize();
        }
        if ($data->isInitialized('sysctls') && null !== $data->getSysctls()) {
            $values_25 = [];
            foreach ($data->getSysctls() as $key_3 => $value_25) {
                $values_25[$key_3] = $value_25;
            }
            $dataArray['Sysctls'] = $values_25;
        }
        if ($data->isInitialized('runtime') && null !== $data->getRuntime()) {
            $dataArray['Runtime'] = $data->getRuntime();
        }
        if ($data->isInitialized('consoleSize') && null !== $data->getConsoleSize()) {
            $values_26 = [];
            foreach ($data->getConsoleSize() as $value_26) {
                $values_26[] = $value_26;
            }
            $dataArray['ConsoleSize'] = $values_26;
        }
        if ($data->isInitialized('isolation') && null !== $data->getIsolation()) {
            $dataArray['Isolation'] = $data->getIsolation();
        }
        if ($data->isInitialized('maskedPaths') && null !== $data->getMaskedPaths()) {
            $values_27 = [];
            foreach ($data->getMaskedPaths() as $value_27) {
                $values_27[] = $value_27;
            }
            $dataArray['MaskedPaths'] = $values_27;
        }
        if ($data->isInitialized('readonlyPaths') && null !== $data->getReadonlyPaths()) {
            $values_28 = [];
            foreach ($data->getReadonlyPaths() as $value_28) {
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