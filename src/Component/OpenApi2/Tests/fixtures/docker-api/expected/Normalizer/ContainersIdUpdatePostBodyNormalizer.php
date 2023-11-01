<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ContainersIdUpdatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\ContainersIdUpdatePostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\ContainersIdUpdatePostBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\ContainersIdUpdatePostBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ContainersIdUpdatePostBodyConstraint());
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
                    $values[] = $this->denormalizer->denormalize($value, 'Docker\\Api\\Model\\ResourcesBlkioWeightDeviceItem', 'json', $context);
                }
                $object->setBlkioWeightDevice($values);
            }
            if (\array_key_exists('BlkioDeviceReadBps', $data)) {
                $values_1 = [];
                foreach ($data['BlkioDeviceReadBps'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\Api\\Model\\ThrottleDevice', 'json', $context);
                }
                $object->setBlkioDeviceReadBps($values_1);
            }
            if (\array_key_exists('BlkioDeviceWriteBps', $data)) {
                $values_2 = [];
                foreach ($data['BlkioDeviceWriteBps'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\Api\\Model\\ThrottleDevice', 'json', $context);
                }
                $object->setBlkioDeviceWriteBps($values_2);
            }
            if (\array_key_exists('BlkioDeviceReadIOps', $data)) {
                $values_3 = [];
                foreach ($data['BlkioDeviceReadIOps'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'Docker\\Api\\Model\\ThrottleDevice', 'json', $context);
                }
                $object->setBlkioDeviceReadIOps($values_3);
            }
            if (\array_key_exists('BlkioDeviceWriteIOps', $data)) {
                $values_4 = [];
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
                $values_5 = [];
                foreach ($data['Devices'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, 'Docker\\Api\\Model\\DeviceMapping', 'json', $context);
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
                $values_8 = [];
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
            if (\array_key_exists('RestartPolicy', $data)) {
                $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], 'Docker\\Api\\Model\\RestartPolicy', 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('cpuShares') && null !== $object->getCpuShares()) {
                $data['CpuShares'] = $object->getCpuShares();
            }
            if ($object->isInitialized('memory') && null !== $object->getMemory()) {
                $data['Memory'] = $object->getMemory();
            }
            if ($object->isInitialized('cgroupParent') && null !== $object->getCgroupParent()) {
                $data['CgroupParent'] = $object->getCgroupParent();
            }
            if ($object->isInitialized('blkioWeight') && null !== $object->getBlkioWeight()) {
                $data['BlkioWeight'] = $object->getBlkioWeight();
            }
            if ($object->isInitialized('blkioWeightDevice') && null !== $object->getBlkioWeightDevice()) {
                $values = [];
                foreach ($object->getBlkioWeightDevice() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['BlkioWeightDevice'] = $values;
            }
            if ($object->isInitialized('blkioDeviceReadBps') && null !== $object->getBlkioDeviceReadBps()) {
                $values_1 = [];
                foreach ($object->getBlkioDeviceReadBps() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['BlkioDeviceReadBps'] = $values_1;
            }
            if ($object->isInitialized('blkioDeviceWriteBps') && null !== $object->getBlkioDeviceWriteBps()) {
                $values_2 = [];
                foreach ($object->getBlkioDeviceWriteBps() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['BlkioDeviceWriteBps'] = $values_2;
            }
            if ($object->isInitialized('blkioDeviceReadIOps') && null !== $object->getBlkioDeviceReadIOps()) {
                $values_3 = [];
                foreach ($object->getBlkioDeviceReadIOps() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['BlkioDeviceReadIOps'] = $values_3;
            }
            if ($object->isInitialized('blkioDeviceWriteIOps') && null !== $object->getBlkioDeviceWriteIOps()) {
                $values_4 = [];
                foreach ($object->getBlkioDeviceWriteIOps() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['BlkioDeviceWriteIOps'] = $values_4;
            }
            if ($object->isInitialized('cpuPeriod') && null !== $object->getCpuPeriod()) {
                $data['CpuPeriod'] = $object->getCpuPeriod();
            }
            if ($object->isInitialized('cpuQuota') && null !== $object->getCpuQuota()) {
                $data['CpuQuota'] = $object->getCpuQuota();
            }
            if ($object->isInitialized('cpuRealtimePeriod') && null !== $object->getCpuRealtimePeriod()) {
                $data['CpuRealtimePeriod'] = $object->getCpuRealtimePeriod();
            }
            if ($object->isInitialized('cpuRealtimeRuntime') && null !== $object->getCpuRealtimeRuntime()) {
                $data['CpuRealtimeRuntime'] = $object->getCpuRealtimeRuntime();
            }
            if ($object->isInitialized('cpusetCpus') && null !== $object->getCpusetCpus()) {
                $data['CpusetCpus'] = $object->getCpusetCpus();
            }
            if ($object->isInitialized('cpusetMems') && null !== $object->getCpusetMems()) {
                $data['CpusetMems'] = $object->getCpusetMems();
            }
            if ($object->isInitialized('devices') && null !== $object->getDevices()) {
                $values_5 = [];
                foreach ($object->getDevices() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['Devices'] = $values_5;
            }
            if ($object->isInitialized('deviceCgroupRules') && null !== $object->getDeviceCgroupRules()) {
                $values_6 = [];
                foreach ($object->getDeviceCgroupRules() as $value_6) {
                    $values_6[] = $value_6;
                }
                $data['DeviceCgroupRules'] = $values_6;
            }
            if ($object->isInitialized('deviceRequests') && null !== $object->getDeviceRequests()) {
                $values_7 = [];
                foreach ($object->getDeviceRequests() as $value_7) {
                    $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $data['DeviceRequests'] = $values_7;
            }
            if ($object->isInitialized('kernelMemory') && null !== $object->getKernelMemory()) {
                $data['KernelMemory'] = $object->getKernelMemory();
            }
            if ($object->isInitialized('kernelMemoryTCP') && null !== $object->getKernelMemoryTCP()) {
                $data['KernelMemoryTCP'] = $object->getKernelMemoryTCP();
            }
            if ($object->isInitialized('memoryReservation') && null !== $object->getMemoryReservation()) {
                $data['MemoryReservation'] = $object->getMemoryReservation();
            }
            if ($object->isInitialized('memorySwap') && null !== $object->getMemorySwap()) {
                $data['MemorySwap'] = $object->getMemorySwap();
            }
            if ($object->isInitialized('memorySwappiness') && null !== $object->getMemorySwappiness()) {
                $data['MemorySwappiness'] = $object->getMemorySwappiness();
            }
            if ($object->isInitialized('nanoCpus') && null !== $object->getNanoCpus()) {
                $data['NanoCpus'] = $object->getNanoCpus();
            }
            if ($object->isInitialized('oomKillDisable') && null !== $object->getOomKillDisable()) {
                $data['OomKillDisable'] = $object->getOomKillDisable();
            }
            if ($object->isInitialized('init') && null !== $object->getInit()) {
                $data['Init'] = $object->getInit();
            }
            if ($object->isInitialized('pidsLimit') && null !== $object->getPidsLimit()) {
                $data['PidsLimit'] = $object->getPidsLimit();
            }
            if ($object->isInitialized('ulimits') && null !== $object->getUlimits()) {
                $values_8 = [];
                foreach ($object->getUlimits() as $value_8) {
                    $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
                }
                $data['Ulimits'] = $values_8;
            }
            if ($object->isInitialized('cpuCount') && null !== $object->getCpuCount()) {
                $data['CpuCount'] = $object->getCpuCount();
            }
            if ($object->isInitialized('cpuPercent') && null !== $object->getCpuPercent()) {
                $data['CpuPercent'] = $object->getCpuPercent();
            }
            if ($object->isInitialized('iOMaximumIOps') && null !== $object->getIOMaximumIOps()) {
                $data['IOMaximumIOps'] = $object->getIOMaximumIOps();
            }
            if ($object->isInitialized('iOMaximumBandwidth') && null !== $object->getIOMaximumBandwidth()) {
                $data['IOMaximumBandwidth'] = $object->getIOMaximumBandwidth();
            }
            if ($object->isInitialized('restartPolicy') && null !== $object->getRestartPolicy()) {
                $data['RestartPolicy'] = $this->normalizer->normalize($object->getRestartPolicy(), 'json', $context);
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ContainersIdUpdatePostBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\ContainersIdUpdatePostBody' => false];
        }
    }
} else {
    class ContainersIdUpdatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\ContainersIdUpdatePostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\ContainersIdUpdatePostBody';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\ContainersIdUpdatePostBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ContainersIdUpdatePostBodyConstraint());
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
                    $values[] = $this->denormalizer->denormalize($value, 'Docker\\Api\\Model\\ResourcesBlkioWeightDeviceItem', 'json', $context);
                }
                $object->setBlkioWeightDevice($values);
            }
            if (\array_key_exists('BlkioDeviceReadBps', $data)) {
                $values_1 = [];
                foreach ($data['BlkioDeviceReadBps'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\Api\\Model\\ThrottleDevice', 'json', $context);
                }
                $object->setBlkioDeviceReadBps($values_1);
            }
            if (\array_key_exists('BlkioDeviceWriteBps', $data)) {
                $values_2 = [];
                foreach ($data['BlkioDeviceWriteBps'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\Api\\Model\\ThrottleDevice', 'json', $context);
                }
                $object->setBlkioDeviceWriteBps($values_2);
            }
            if (\array_key_exists('BlkioDeviceReadIOps', $data)) {
                $values_3 = [];
                foreach ($data['BlkioDeviceReadIOps'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'Docker\\Api\\Model\\ThrottleDevice', 'json', $context);
                }
                $object->setBlkioDeviceReadIOps($values_3);
            }
            if (\array_key_exists('BlkioDeviceWriteIOps', $data)) {
                $values_4 = [];
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
                $values_5 = [];
                foreach ($data['Devices'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, 'Docker\\Api\\Model\\DeviceMapping', 'json', $context);
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
                $values_8 = [];
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
            if (\array_key_exists('RestartPolicy', $data)) {
                $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], 'Docker\\Api\\Model\\RestartPolicy', 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('cpuShares') && null !== $object->getCpuShares()) {
                $data['CpuShares'] = $object->getCpuShares();
            }
            if ($object->isInitialized('memory') && null !== $object->getMemory()) {
                $data['Memory'] = $object->getMemory();
            }
            if ($object->isInitialized('cgroupParent') && null !== $object->getCgroupParent()) {
                $data['CgroupParent'] = $object->getCgroupParent();
            }
            if ($object->isInitialized('blkioWeight') && null !== $object->getBlkioWeight()) {
                $data['BlkioWeight'] = $object->getBlkioWeight();
            }
            if ($object->isInitialized('blkioWeightDevice') && null !== $object->getBlkioWeightDevice()) {
                $values = [];
                foreach ($object->getBlkioWeightDevice() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['BlkioWeightDevice'] = $values;
            }
            if ($object->isInitialized('blkioDeviceReadBps') && null !== $object->getBlkioDeviceReadBps()) {
                $values_1 = [];
                foreach ($object->getBlkioDeviceReadBps() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['BlkioDeviceReadBps'] = $values_1;
            }
            if ($object->isInitialized('blkioDeviceWriteBps') && null !== $object->getBlkioDeviceWriteBps()) {
                $values_2 = [];
                foreach ($object->getBlkioDeviceWriteBps() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['BlkioDeviceWriteBps'] = $values_2;
            }
            if ($object->isInitialized('blkioDeviceReadIOps') && null !== $object->getBlkioDeviceReadIOps()) {
                $values_3 = [];
                foreach ($object->getBlkioDeviceReadIOps() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['BlkioDeviceReadIOps'] = $values_3;
            }
            if ($object->isInitialized('blkioDeviceWriteIOps') && null !== $object->getBlkioDeviceWriteIOps()) {
                $values_4 = [];
                foreach ($object->getBlkioDeviceWriteIOps() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['BlkioDeviceWriteIOps'] = $values_4;
            }
            if ($object->isInitialized('cpuPeriod') && null !== $object->getCpuPeriod()) {
                $data['CpuPeriod'] = $object->getCpuPeriod();
            }
            if ($object->isInitialized('cpuQuota') && null !== $object->getCpuQuota()) {
                $data['CpuQuota'] = $object->getCpuQuota();
            }
            if ($object->isInitialized('cpuRealtimePeriod') && null !== $object->getCpuRealtimePeriod()) {
                $data['CpuRealtimePeriod'] = $object->getCpuRealtimePeriod();
            }
            if ($object->isInitialized('cpuRealtimeRuntime') && null !== $object->getCpuRealtimeRuntime()) {
                $data['CpuRealtimeRuntime'] = $object->getCpuRealtimeRuntime();
            }
            if ($object->isInitialized('cpusetCpus') && null !== $object->getCpusetCpus()) {
                $data['CpusetCpus'] = $object->getCpusetCpus();
            }
            if ($object->isInitialized('cpusetMems') && null !== $object->getCpusetMems()) {
                $data['CpusetMems'] = $object->getCpusetMems();
            }
            if ($object->isInitialized('devices') && null !== $object->getDevices()) {
                $values_5 = [];
                foreach ($object->getDevices() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['Devices'] = $values_5;
            }
            if ($object->isInitialized('deviceCgroupRules') && null !== $object->getDeviceCgroupRules()) {
                $values_6 = [];
                foreach ($object->getDeviceCgroupRules() as $value_6) {
                    $values_6[] = $value_6;
                }
                $data['DeviceCgroupRules'] = $values_6;
            }
            if ($object->isInitialized('deviceRequests') && null !== $object->getDeviceRequests()) {
                $values_7 = [];
                foreach ($object->getDeviceRequests() as $value_7) {
                    $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $data['DeviceRequests'] = $values_7;
            }
            if ($object->isInitialized('kernelMemory') && null !== $object->getKernelMemory()) {
                $data['KernelMemory'] = $object->getKernelMemory();
            }
            if ($object->isInitialized('kernelMemoryTCP') && null !== $object->getKernelMemoryTCP()) {
                $data['KernelMemoryTCP'] = $object->getKernelMemoryTCP();
            }
            if ($object->isInitialized('memoryReservation') && null !== $object->getMemoryReservation()) {
                $data['MemoryReservation'] = $object->getMemoryReservation();
            }
            if ($object->isInitialized('memorySwap') && null !== $object->getMemorySwap()) {
                $data['MemorySwap'] = $object->getMemorySwap();
            }
            if ($object->isInitialized('memorySwappiness') && null !== $object->getMemorySwappiness()) {
                $data['MemorySwappiness'] = $object->getMemorySwappiness();
            }
            if ($object->isInitialized('nanoCpus') && null !== $object->getNanoCpus()) {
                $data['NanoCpus'] = $object->getNanoCpus();
            }
            if ($object->isInitialized('oomKillDisable') && null !== $object->getOomKillDisable()) {
                $data['OomKillDisable'] = $object->getOomKillDisable();
            }
            if ($object->isInitialized('init') && null !== $object->getInit()) {
                $data['Init'] = $object->getInit();
            }
            if ($object->isInitialized('pidsLimit') && null !== $object->getPidsLimit()) {
                $data['PidsLimit'] = $object->getPidsLimit();
            }
            if ($object->isInitialized('ulimits') && null !== $object->getUlimits()) {
                $values_8 = [];
                foreach ($object->getUlimits() as $value_8) {
                    $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
                }
                $data['Ulimits'] = $values_8;
            }
            if ($object->isInitialized('cpuCount') && null !== $object->getCpuCount()) {
                $data['CpuCount'] = $object->getCpuCount();
            }
            if ($object->isInitialized('cpuPercent') && null !== $object->getCpuPercent()) {
                $data['CpuPercent'] = $object->getCpuPercent();
            }
            if ($object->isInitialized('iOMaximumIOps') && null !== $object->getIOMaximumIOps()) {
                $data['IOMaximumIOps'] = $object->getIOMaximumIOps();
            }
            if ($object->isInitialized('iOMaximumBandwidth') && null !== $object->getIOMaximumBandwidth()) {
                $data['IOMaximumBandwidth'] = $object->getIOMaximumBandwidth();
            }
            if ($object->isInitialized('restartPolicy') && null !== $object->getRestartPolicy()) {
                $data['RestartPolicy'] = $this->normalizer->normalize($object->getRestartPolicy(), 'json', $context);
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ContainersIdUpdatePostBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\ContainersIdUpdatePostBody' => false];
        }
    }
}