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
class TaskSpecContainerSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\TaskSpecContainerSpec::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\TaskSpecContainerSpec::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\Api\Model\TaskSpecContainerSpec();
        if (\array_key_exists('TTY', $data) && \is_int($data['TTY'])) {
            $data['TTY'] = (bool) $data['TTY'];
        }
        if (\array_key_exists('OpenStdin', $data) && \is_int($data['OpenStdin'])) {
            $data['OpenStdin'] = (bool) $data['OpenStdin'];
        }
        if (\array_key_exists('ReadOnly', $data) && \is_int($data['ReadOnly'])) {
            $data['ReadOnly'] = (bool) $data['ReadOnly'];
        }
        if (\array_key_exists('Init', $data) && \is_int($data['Init'])) {
            $data['Init'] = (bool) $data['Init'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\TaskSpecContainerSpecConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Image', $data)) {
            $object->setImage($data['Image']);
        }
        if (\array_key_exists('Labels', $data)) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLabels($values);
        }
        if (\array_key_exists('Command', $data)) {
            $values_1 = [];
            foreach ($data['Command'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCommand($values_1);
        }
        if (\array_key_exists('Args', $data)) {
            $values_2 = [];
            foreach ($data['Args'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setArgs($values_2);
        }
        if (\array_key_exists('Hostname', $data)) {
            $object->setHostname($data['Hostname']);
        }
        if (\array_key_exists('Env', $data)) {
            $values_3 = [];
            foreach ($data['Env'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setEnv($values_3);
        }
        if (\array_key_exists('Dir', $data)) {
            $object->setDir($data['Dir']);
        }
        if (\array_key_exists('User', $data)) {
            $object->setUser($data['User']);
        }
        if (\array_key_exists('Groups', $data)) {
            $values_4 = [];
            foreach ($data['Groups'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setGroups($values_4);
        }
        if (\array_key_exists('Privileges', $data)) {
            $object->setPrivileges($this->denormalizer->denormalize($data['Privileges'], \Docker\Api\Model\TaskSpecContainerSpecPrivileges::class, 'json', $context));
        }
        if (\array_key_exists('TTY', $data)) {
            $object->setTTY($data['TTY']);
        }
        if (\array_key_exists('OpenStdin', $data)) {
            $object->setOpenStdin($data['OpenStdin']);
        }
        if (\array_key_exists('ReadOnly', $data)) {
            $object->setReadOnly($data['ReadOnly']);
        }
        if (\array_key_exists('Mounts', $data)) {
            $values_5 = [];
            foreach ($data['Mounts'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Docker\Api\Model\Mount::class, 'json', $context);
            }
            $object->setMounts($values_5);
        }
        if (\array_key_exists('StopSignal', $data)) {
            $object->setStopSignal($data['StopSignal']);
        }
        if (\array_key_exists('StopGracePeriod', $data)) {
            $object->setStopGracePeriod($data['StopGracePeriod']);
        }
        if (\array_key_exists('HealthCheck', $data)) {
            $object->setHealthCheck($this->denormalizer->denormalize($data['HealthCheck'], \Docker\Api\Model\HealthConfig::class, 'json', $context));
        }
        if (\array_key_exists('Hosts', $data)) {
            $values_6 = [];
            foreach ($data['Hosts'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setHosts($values_6);
        }
        if (\array_key_exists('DNSConfig', $data)) {
            $object->setDNSConfig($this->denormalizer->denormalize($data['DNSConfig'], \Docker\Api\Model\TaskSpecContainerSpecDNSConfig::class, 'json', $context));
        }
        if (\array_key_exists('Secrets', $data)) {
            $values_7 = [];
            foreach ($data['Secrets'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \Docker\Api\Model\TaskSpecContainerSpecSecretsItem::class, 'json', $context);
            }
            $object->setSecrets($values_7);
        }
        if (\array_key_exists('Configs', $data)) {
            $values_8 = [];
            foreach ($data['Configs'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, \Docker\Api\Model\TaskSpecContainerSpecConfigsItem::class, 'json', $context);
            }
            $object->setConfigs($values_8);
        }
        if (\array_key_exists('Isolation', $data)) {
            $object->setIsolation($data['Isolation']);
        }
        if (\array_key_exists('Init', $data) && $data['Init'] !== null) {
            $object->setInit($data['Init']);
        }
        elseif (\array_key_exists('Init', $data) && $data['Init'] === null) {
            $object->setInit(null);
        }
        if (\array_key_exists('Sysctls', $data)) {
            $values_9 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Sysctls'] as $key_1 => $value_9) {
                $values_9[$key_1] = $value_9;
            }
            $object->setSysctls($values_9);
        }
        if (\array_key_exists('CapabilityAdd', $data)) {
            $values_10 = [];
            foreach ($data['CapabilityAdd'] as $value_10) {
                $values_10[] = $value_10;
            }
            $object->setCapabilityAdd($values_10);
        }
        if (\array_key_exists('CapabilityDrop', $data)) {
            $values_11 = [];
            foreach ($data['CapabilityDrop'] as $value_11) {
                $values_11[] = $value_11;
            }
            $object->setCapabilityDrop($values_11);
        }
        if (\array_key_exists('Ulimits', $data)) {
            $values_12 = [];
            foreach ($data['Ulimits'] as $value_12) {
                $values_12[] = $this->denormalizer->denormalize($value_12, \Docker\Api\Model\TaskSpecContainerSpecUlimitsItem::class, 'json', $context);
            }
            $object->setUlimits($values_12);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('image') && null !== $data->getImage()) {
            $dataArray['Image'] = $data->getImage();
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $values = [];
            foreach ($data->getLabels() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['Labels'] = $values;
        }
        if ($data->isInitialized('command') && null !== $data->getCommand()) {
            $values_1 = [];
            foreach ($data->getCommand() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['Command'] = $values_1;
        }
        if ($data->isInitialized('args') && null !== $data->getArgs()) {
            $values_2 = [];
            foreach ($data->getArgs() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['Args'] = $values_2;
        }
        if ($data->isInitialized('hostname') && null !== $data->getHostname()) {
            $dataArray['Hostname'] = $data->getHostname();
        }
        if ($data->isInitialized('env') && null !== $data->getEnv()) {
            $values_3 = [];
            foreach ($data->getEnv() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['Env'] = $values_3;
        }
        if ($data->isInitialized('dir') && null !== $data->getDir()) {
            $dataArray['Dir'] = $data->getDir();
        }
        if ($data->isInitialized('user') && null !== $data->getUser()) {
            $dataArray['User'] = $data->getUser();
        }
        if ($data->isInitialized('groups') && null !== $data->getGroups()) {
            $values_4 = [];
            foreach ($data->getGroups() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['Groups'] = $values_4;
        }
        if ($data->isInitialized('privileges') && null !== $data->getPrivileges()) {
            $dataArray['Privileges'] = $this->normalizer->normalize($data->getPrivileges(), 'json', $context);
        }
        if ($data->isInitialized('tTY') && null !== $data->getTTY()) {
            $dataArray['TTY'] = $data->getTTY();
        }
        if ($data->isInitialized('openStdin') && null !== $data->getOpenStdin()) {
            $dataArray['OpenStdin'] = $data->getOpenStdin();
        }
        if ($data->isInitialized('readOnly') && null !== $data->getReadOnly()) {
            $dataArray['ReadOnly'] = $data->getReadOnly();
        }
        if ($data->isInitialized('mounts') && null !== $data->getMounts()) {
            $values_5 = [];
            foreach ($data->getMounts() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['Mounts'] = $values_5;
        }
        if ($data->isInitialized('stopSignal') && null !== $data->getStopSignal()) {
            $dataArray['StopSignal'] = $data->getStopSignal();
        }
        if ($data->isInitialized('stopGracePeriod') && null !== $data->getStopGracePeriod()) {
            $dataArray['StopGracePeriod'] = $data->getStopGracePeriod();
        }
        if ($data->isInitialized('healthCheck') && null !== $data->getHealthCheck()) {
            $dataArray['HealthCheck'] = $this->normalizer->normalize($data->getHealthCheck(), 'json', $context);
        }
        if ($data->isInitialized('hosts') && null !== $data->getHosts()) {
            $values_6 = [];
            foreach ($data->getHosts() as $value_6) {
                $values_6[] = $value_6;
            }
            $dataArray['Hosts'] = $values_6;
        }
        if ($data->isInitialized('dNSConfig') && null !== $data->getDNSConfig()) {
            $dataArray['DNSConfig'] = $this->normalizer->normalize($data->getDNSConfig(), 'json', $context);
        }
        if ($data->isInitialized('secrets') && null !== $data->getSecrets()) {
            $values_7 = [];
            foreach ($data->getSecrets() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $dataArray['Secrets'] = $values_7;
        }
        if ($data->isInitialized('configs') && null !== $data->getConfigs()) {
            $values_8 = [];
            foreach ($data->getConfigs() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $dataArray['Configs'] = $values_8;
        }
        if ($data->isInitialized('isolation') && null !== $data->getIsolation()) {
            $dataArray['Isolation'] = $data->getIsolation();
        }
        if ($data->isInitialized('init')) {
            $dataArray['Init'] = $data->getInit();
        }
        if ($data->isInitialized('sysctls') && null !== $data->getSysctls()) {
            $values_9 = [];
            foreach ($data->getSysctls() as $key_1 => $value_9) {
                $values_9[$key_1] = $value_9;
            }
            $dataArray['Sysctls'] = $values_9;
        }
        if ($data->isInitialized('capabilityAdd') && null !== $data->getCapabilityAdd()) {
            $values_10 = [];
            foreach ($data->getCapabilityAdd() as $value_10) {
                $values_10[] = $value_10;
            }
            $dataArray['CapabilityAdd'] = $values_10;
        }
        if ($data->isInitialized('capabilityDrop') && null !== $data->getCapabilityDrop()) {
            $values_11 = [];
            foreach ($data->getCapabilityDrop() as $value_11) {
                $values_11[] = $value_11;
            }
            $dataArray['CapabilityDrop'] = $values_11;
        }
        if ($data->isInitialized('ulimits') && null !== $data->getUlimits()) {
            $values_12 = [];
            foreach ($data->getUlimits() as $value_12) {
                $values_12[] = $this->normalizer->normalize($value_12, 'json', $context);
            }
            $dataArray['Ulimits'] = $values_12;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\TaskSpecContainerSpecConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\TaskSpecContainerSpec::class => false];
    }
}