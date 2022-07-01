<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Docker\\Api\\Model\\HostConfig';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\HostConfig';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\Api\Model\HostConfig();
        $validator = new \Docker\Api\Validator\HostConfigValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
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
            $values = array();
            foreach ($data['BlkioWeightDevice'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\Api\\Model\\ResourcesBlkioWeightDeviceItem', 'json', $context);
            }
            $object->setBlkioWeightDevice($values);
        }
        if (\array_key_exists('BlkioDeviceReadBps', $data)) {
            $values_1 = array();
            foreach ($data['BlkioDeviceReadBps'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\Api\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceReadBps($values_1);
        }
        if (\array_key_exists('BlkioDeviceWriteBps', $data)) {
            $values_2 = array();
            foreach ($data['BlkioDeviceWriteBps'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\Api\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceWriteBps($values_2);
        }
        if (\array_key_exists('BlkioDeviceReadIOps', $data)) {
            $values_3 = array();
            foreach ($data['BlkioDeviceReadIOps'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Docker\\Api\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceReadIOps($values_3);
        }
        if (\array_key_exists('BlkioDeviceWriteIOps', $data)) {
            $values_4 = array();
            foreach ($data['BlkioDeviceWriteIOps'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Docker\\Api\\Model\\ThrottleDevice', 'json', $context);
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
            $values_5 = array();
            foreach ($data['Devices'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Docker\\Api\\Model\\DeviceMapping', 'json', $context);
            }
            $object->setDevices($values_5);
        }
        if (\array_key_exists('DeviceCgroupRules', $data)) {
            $values_6 = array();
            foreach ($data['DeviceCgroupRules'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setDeviceCgroupRules($values_6);
        }
        if (\array_key_exists('DeviceRequests', $data)) {
            $values_7 = array();
            foreach ($data['DeviceRequests'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Docker\\Api\\Model\\DeviceRequest', 'json', $context);
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
            $values_8 = array();
            foreach ($data['Ulimits'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'Docker\\Api\\Model\\ResourcesUlimitsItem', 'json', $context);
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
            $values_9 = array();
            foreach ($data['Binds'] as $value_9) {
                $values_9[] = $value_9;
            }
            $object->setBinds($values_9);
        }
        if (\array_key_exists('ContainerIDFile', $data)) {
            $object->setContainerIDFile($data['ContainerIDFile']);
        }
        if (\array_key_exists('LogConfig', $data)) {
            $object->setLogConfig($this->denormalizer->denormalize($data['LogConfig'], 'Docker\\Api\\Model\\HostConfigLogConfig', 'json', $context));
        }
        if (\array_key_exists('NetworkMode', $data)) {
            $object->setNetworkMode($data['NetworkMode']);
        }
        if (\array_key_exists('PortBindings', $data)) {
            $values_10 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['PortBindings'] as $key => $value_10) {
                $values_11 = array();
                foreach ($value_10 as $value_11) {
                    $values_11[] = $this->denormalizer->denormalize($value_11, 'Docker\\Api\\Model\\PortBinding', 'json', $context);
                }
                $values_10[$key] = $values_11;
            }
            $object->setPortBindings($values_10);
        }
        if (\array_key_exists('RestartPolicy', $data)) {
            $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], 'Docker\\Api\\Model\\RestartPolicy', 'json', $context));
        }
        if (\array_key_exists('AutoRemove', $data)) {
            $object->setAutoRemove($data['AutoRemove']);
        }
        if (\array_key_exists('VolumeDriver', $data)) {
            $object->setVolumeDriver($data['VolumeDriver']);
        }
        if (\array_key_exists('VolumesFrom', $data)) {
            $values_12 = array();
            foreach ($data['VolumesFrom'] as $value_12) {
                $values_12[] = $value_12;
            }
            $object->setVolumesFrom($values_12);
        }
        if (\array_key_exists('Mounts', $data)) {
            $values_13 = array();
            foreach ($data['Mounts'] as $value_13) {
                $values_13[] = $this->denormalizer->denormalize($value_13, 'Docker\\Api\\Model\\Mount', 'json', $context);
            }
            $object->setMounts($values_13);
        }
        if (\array_key_exists('CapAdd', $data)) {
            $values_14 = array();
            foreach ($data['CapAdd'] as $value_14) {
                $values_14[] = $value_14;
            }
            $object->setCapAdd($values_14);
        }
        if (\array_key_exists('CapDrop', $data)) {
            $values_15 = array();
            foreach ($data['CapDrop'] as $value_15) {
                $values_15[] = $value_15;
            }
            $object->setCapDrop($values_15);
        }
        if (\array_key_exists('CgroupnsMode', $data)) {
            $object->setCgroupnsMode($data['CgroupnsMode']);
        }
        if (\array_key_exists('Dns', $data)) {
            $values_16 = array();
            foreach ($data['Dns'] as $value_16) {
                $values_16[] = $value_16;
            }
            $object->setDns($values_16);
        }
        if (\array_key_exists('DnsOptions', $data)) {
            $values_17 = array();
            foreach ($data['DnsOptions'] as $value_17) {
                $values_17[] = $value_17;
            }
            $object->setDnsOptions($values_17);
        }
        if (\array_key_exists('DnsSearch', $data)) {
            $values_18 = array();
            foreach ($data['DnsSearch'] as $value_18) {
                $values_18[] = $value_18;
            }
            $object->setDnsSearch($values_18);
        }
        if (\array_key_exists('ExtraHosts', $data)) {
            $values_19 = array();
            foreach ($data['ExtraHosts'] as $value_19) {
                $values_19[] = $value_19;
            }
            $object->setExtraHosts($values_19);
        }
        if (\array_key_exists('GroupAdd', $data)) {
            $values_20 = array();
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
            $values_21 = array();
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
            $values_22 = array();
            foreach ($data['SecurityOpt'] as $value_22) {
                $values_22[] = $value_22;
            }
            $object->setSecurityOpt($values_22);
        }
        if (\array_key_exists('StorageOpt', $data)) {
            $values_23 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['StorageOpt'] as $key_1 => $value_23) {
                $values_23[$key_1] = $value_23;
            }
            $object->setStorageOpt($values_23);
        }
        if (\array_key_exists('Tmpfs', $data)) {
            $values_24 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
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
            $values_25 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Sysctls'] as $key_3 => $value_25) {
                $values_25[$key_3] = $value_25;
            }
            $object->setSysctls($values_25);
        }
        if (\array_key_exists('Runtime', $data)) {
            $object->setRuntime($data['Runtime']);
        }
        if (\array_key_exists('ConsoleSize', $data)) {
            $values_26 = array();
            foreach ($data['ConsoleSize'] as $value_26) {
                $values_26[] = $value_26;
            }
            $object->setConsoleSize($values_26);
        }
        if (\array_key_exists('Isolation', $data)) {
            $object->setIsolation($data['Isolation']);
        }
        if (\array_key_exists('MaskedPaths', $data)) {
            $values_27 = array();
            foreach ($data['MaskedPaths'] as $value_27) {
                $values_27[] = $value_27;
            }
            $object->setMaskedPaths($values_27);
        }
        if (\array_key_exists('ReadonlyPaths', $data)) {
            $values_28 = array();
            foreach ($data['ReadonlyPaths'] as $value_28) {
                $values_28[] = $value_28;
            }
            $object->setReadonlyPaths($values_28);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCpuShares()) {
            $data['CpuShares'] = $object->getCpuShares();
        }
        if (null !== $object->getMemory()) {
            $data['Memory'] = $object->getMemory();
        }
        if (null !== $object->getCgroupParent()) {
            $data['CgroupParent'] = $object->getCgroupParent();
        }
        if (null !== $object->getBlkioWeight()) {
            $data['BlkioWeight'] = $object->getBlkioWeight();
        }
        if (null !== $object->getBlkioWeightDevice()) {
            $values = array();
            foreach ($object->getBlkioWeightDevice() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['BlkioWeightDevice'] = $values;
        }
        if (null !== $object->getBlkioDeviceReadBps()) {
            $values_1 = array();
            foreach ($object->getBlkioDeviceReadBps() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['BlkioDeviceReadBps'] = $values_1;
        }
        if (null !== $object->getBlkioDeviceWriteBps()) {
            $values_2 = array();
            foreach ($object->getBlkioDeviceWriteBps() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['BlkioDeviceWriteBps'] = $values_2;
        }
        if (null !== $object->getBlkioDeviceReadIOps()) {
            $values_3 = array();
            foreach ($object->getBlkioDeviceReadIOps() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['BlkioDeviceReadIOps'] = $values_3;
        }
        if (null !== $object->getBlkioDeviceWriteIOps()) {
            $values_4 = array();
            foreach ($object->getBlkioDeviceWriteIOps() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['BlkioDeviceWriteIOps'] = $values_4;
        }
        if (null !== $object->getCpuPeriod()) {
            $data['CpuPeriod'] = $object->getCpuPeriod();
        }
        if (null !== $object->getCpuQuota()) {
            $data['CpuQuota'] = $object->getCpuQuota();
        }
        if (null !== $object->getCpuRealtimePeriod()) {
            $data['CpuRealtimePeriod'] = $object->getCpuRealtimePeriod();
        }
        if (null !== $object->getCpuRealtimeRuntime()) {
            $data['CpuRealtimeRuntime'] = $object->getCpuRealtimeRuntime();
        }
        if (null !== $object->getCpusetCpus()) {
            $data['CpusetCpus'] = $object->getCpusetCpus();
        }
        if (null !== $object->getCpusetMems()) {
            $data['CpusetMems'] = $object->getCpusetMems();
        }
        if (null !== $object->getDevices()) {
            $values_5 = array();
            foreach ($object->getDevices() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['Devices'] = $values_5;
        }
        if (null !== $object->getDeviceCgroupRules()) {
            $values_6 = array();
            foreach ($object->getDeviceCgroupRules() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['DeviceCgroupRules'] = $values_6;
        }
        if (null !== $object->getDeviceRequests()) {
            $values_7 = array();
            foreach ($object->getDeviceRequests() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['DeviceRequests'] = $values_7;
        }
        if (null !== $object->getKernelMemory()) {
            $data['KernelMemory'] = $object->getKernelMemory();
        }
        if (null !== $object->getKernelMemoryTCP()) {
            $data['KernelMemoryTCP'] = $object->getKernelMemoryTCP();
        }
        if (null !== $object->getMemoryReservation()) {
            $data['MemoryReservation'] = $object->getMemoryReservation();
        }
        if (null !== $object->getMemorySwap()) {
            $data['MemorySwap'] = $object->getMemorySwap();
        }
        if (null !== $object->getMemorySwappiness()) {
            $data['MemorySwappiness'] = $object->getMemorySwappiness();
        }
        if (null !== $object->getNanoCpus()) {
            $data['NanoCpus'] = $object->getNanoCpus();
        }
        if (null !== $object->getOomKillDisable()) {
            $data['OomKillDisable'] = $object->getOomKillDisable();
        }
        if (null !== $object->getInit()) {
            $data['Init'] = $object->getInit();
        }
        if (null !== $object->getPidsLimit()) {
            $data['PidsLimit'] = $object->getPidsLimit();
        }
        if (null !== $object->getUlimits()) {
            $values_8 = array();
            foreach ($object->getUlimits() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $data['Ulimits'] = $values_8;
        }
        if (null !== $object->getCpuCount()) {
            $data['CpuCount'] = $object->getCpuCount();
        }
        if (null !== $object->getCpuPercent()) {
            $data['CpuPercent'] = $object->getCpuPercent();
        }
        if (null !== $object->getIOMaximumIOps()) {
            $data['IOMaximumIOps'] = $object->getIOMaximumIOps();
        }
        if (null !== $object->getIOMaximumBandwidth()) {
            $data['IOMaximumBandwidth'] = $object->getIOMaximumBandwidth();
        }
        if (null !== $object->getBinds()) {
            $values_9 = array();
            foreach ($object->getBinds() as $value_9) {
                $values_9[] = $value_9;
            }
            $data['Binds'] = $values_9;
        }
        if (null !== $object->getContainerIDFile()) {
            $data['ContainerIDFile'] = $object->getContainerIDFile();
        }
        if (null !== $object->getLogConfig()) {
            $data['LogConfig'] = $this->normalizer->normalize($object->getLogConfig(), 'json', $context);
        }
        if (null !== $object->getNetworkMode()) {
            $data['NetworkMode'] = $object->getNetworkMode();
        }
        if (null !== $object->getPortBindings()) {
            $values_10 = array();
            foreach ($object->getPortBindings() as $key => $value_10) {
                $values_11 = array();
                foreach ($value_10 as $value_11) {
                    $values_11[] = $this->normalizer->normalize($value_11, 'json', $context);
                }
                $values_10[$key] = $values_11;
            }
            $data['PortBindings'] = $values_10;
        }
        if (null !== $object->getRestartPolicy()) {
            $data['RestartPolicy'] = $this->normalizer->normalize($object->getRestartPolicy(), 'json', $context);
        }
        if (null !== $object->getAutoRemove()) {
            $data['AutoRemove'] = $object->getAutoRemove();
        }
        if (null !== $object->getVolumeDriver()) {
            $data['VolumeDriver'] = $object->getVolumeDriver();
        }
        if (null !== $object->getVolumesFrom()) {
            $values_12 = array();
            foreach ($object->getVolumesFrom() as $value_12) {
                $values_12[] = $value_12;
            }
            $data['VolumesFrom'] = $values_12;
        }
        if (null !== $object->getMounts()) {
            $values_13 = array();
            foreach ($object->getMounts() as $value_13) {
                $values_13[] = $this->normalizer->normalize($value_13, 'json', $context);
            }
            $data['Mounts'] = $values_13;
        }
        if (null !== $object->getCapAdd()) {
            $values_14 = array();
            foreach ($object->getCapAdd() as $value_14) {
                $values_14[] = $value_14;
            }
            $data['CapAdd'] = $values_14;
        }
        if (null !== $object->getCapDrop()) {
            $values_15 = array();
            foreach ($object->getCapDrop() as $value_15) {
                $values_15[] = $value_15;
            }
            $data['CapDrop'] = $values_15;
        }
        if (null !== $object->getCgroupnsMode()) {
            $data['CgroupnsMode'] = $object->getCgroupnsMode();
        }
        if (null !== $object->getDns()) {
            $values_16 = array();
            foreach ($object->getDns() as $value_16) {
                $values_16[] = $value_16;
            }
            $data['Dns'] = $values_16;
        }
        if (null !== $object->getDnsOptions()) {
            $values_17 = array();
            foreach ($object->getDnsOptions() as $value_17) {
                $values_17[] = $value_17;
            }
            $data['DnsOptions'] = $values_17;
        }
        if (null !== $object->getDnsSearch()) {
            $values_18 = array();
            foreach ($object->getDnsSearch() as $value_18) {
                $values_18[] = $value_18;
            }
            $data['DnsSearch'] = $values_18;
        }
        if (null !== $object->getExtraHosts()) {
            $values_19 = array();
            foreach ($object->getExtraHosts() as $value_19) {
                $values_19[] = $value_19;
            }
            $data['ExtraHosts'] = $values_19;
        }
        if (null !== $object->getGroupAdd()) {
            $values_20 = array();
            foreach ($object->getGroupAdd() as $value_20) {
                $values_20[] = $value_20;
            }
            $data['GroupAdd'] = $values_20;
        }
        if (null !== $object->getIpcMode()) {
            $data['IpcMode'] = $object->getIpcMode();
        }
        if (null !== $object->getCgroup()) {
            $data['Cgroup'] = $object->getCgroup();
        }
        if (null !== $object->getLinks()) {
            $values_21 = array();
            foreach ($object->getLinks() as $value_21) {
                $values_21[] = $value_21;
            }
            $data['Links'] = $values_21;
        }
        if (null !== $object->getOomScoreAdj()) {
            $data['OomScoreAdj'] = $object->getOomScoreAdj();
        }
        if (null !== $object->getPidMode()) {
            $data['PidMode'] = $object->getPidMode();
        }
        if (null !== $object->getPrivileged()) {
            $data['Privileged'] = $object->getPrivileged();
        }
        if (null !== $object->getPublishAllPorts()) {
            $data['PublishAllPorts'] = $object->getPublishAllPorts();
        }
        if (null !== $object->getReadonlyRootfs()) {
            $data['ReadonlyRootfs'] = $object->getReadonlyRootfs();
        }
        if (null !== $object->getSecurityOpt()) {
            $values_22 = array();
            foreach ($object->getSecurityOpt() as $value_22) {
                $values_22[] = $value_22;
            }
            $data['SecurityOpt'] = $values_22;
        }
        if (null !== $object->getStorageOpt()) {
            $values_23 = array();
            foreach ($object->getStorageOpt() as $key_1 => $value_23) {
                $values_23[$key_1] = $value_23;
            }
            $data['StorageOpt'] = $values_23;
        }
        if (null !== $object->getTmpfs()) {
            $values_24 = array();
            foreach ($object->getTmpfs() as $key_2 => $value_24) {
                $values_24[$key_2] = $value_24;
            }
            $data['Tmpfs'] = $values_24;
        }
        if (null !== $object->getUTSMode()) {
            $data['UTSMode'] = $object->getUTSMode();
        }
        if (null !== $object->getUsernsMode()) {
            $data['UsernsMode'] = $object->getUsernsMode();
        }
        if (null !== $object->getShmSize()) {
            $data['ShmSize'] = $object->getShmSize();
        }
        if (null !== $object->getSysctls()) {
            $values_25 = array();
            foreach ($object->getSysctls() as $key_3 => $value_25) {
                $values_25[$key_3] = $value_25;
            }
            $data['Sysctls'] = $values_25;
        }
        if (null !== $object->getRuntime()) {
            $data['Runtime'] = $object->getRuntime();
        }
        if (null !== $object->getConsoleSize()) {
            $values_26 = array();
            foreach ($object->getConsoleSize() as $value_26) {
                $values_26[] = $value_26;
            }
            $data['ConsoleSize'] = $values_26;
        }
        if (null !== $object->getIsolation()) {
            $data['Isolation'] = $object->getIsolation();
        }
        if (null !== $object->getMaskedPaths()) {
            $values_27 = array();
            foreach ($object->getMaskedPaths() as $value_27) {
                $values_27[] = $value_27;
            }
            $data['MaskedPaths'] = $values_27;
        }
        if (null !== $object->getReadonlyPaths()) {
            $values_28 = array();
            foreach ($object->getReadonlyPaths() as $value_28) {
                $values_28[] = $value_28;
            }
            $data['ReadonlyPaths'] = $values_28;
        }
        $validator = new \Docker\Api\Validator\HostConfigValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        return $data;
    }
}