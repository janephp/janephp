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
class ContainersIdJsonGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\ContainersIdJsonGetResponse200::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\ContainersIdJsonGetResponse200::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\Api\Model\ContainersIdJsonGetResponse200();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\ContainersIdJsonGetResponse200Constraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Id', $data)) {
            $object->setId($data['Id']);
        }
        if (\array_key_exists('Created', $data)) {
            $object->setCreated($data['Created']);
        }
        if (\array_key_exists('Path', $data)) {
            $object->setPath($data['Path']);
        }
        if (\array_key_exists('Args', $data)) {
            $values = [];
            foreach ($data['Args'] as $value) {
                $values[] = $value;
            }
            $object->setArgs($values);
        }
        if (\array_key_exists('State', $data)) {
            $object->setState($this->denormalizer->denormalize($data['State'], \Docker\Api\Model\ContainerState::class, 'json', $context));
        }
        if (\array_key_exists('Image', $data)) {
            $object->setImage($data['Image']);
        }
        if (\array_key_exists('ResolvConfPath', $data)) {
            $object->setResolvConfPath($data['ResolvConfPath']);
        }
        if (\array_key_exists('HostnamePath', $data)) {
            $object->setHostnamePath($data['HostnamePath']);
        }
        if (\array_key_exists('HostsPath', $data)) {
            $object->setHostsPath($data['HostsPath']);
        }
        if (\array_key_exists('LogPath', $data)) {
            $object->setLogPath($data['LogPath']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('RestartCount', $data)) {
            $object->setRestartCount($data['RestartCount']);
        }
        if (\array_key_exists('Driver', $data)) {
            $object->setDriver($data['Driver']);
        }
        if (\array_key_exists('Platform', $data)) {
            $object->setPlatform($data['Platform']);
        }
        if (\array_key_exists('MountLabel', $data)) {
            $object->setMountLabel($data['MountLabel']);
        }
        if (\array_key_exists('ProcessLabel', $data)) {
            $object->setProcessLabel($data['ProcessLabel']);
        }
        if (\array_key_exists('AppArmorProfile', $data)) {
            $object->setAppArmorProfile($data['AppArmorProfile']);
        }
        if (\array_key_exists('ExecIDs', $data) && $data['ExecIDs'] !== null) {
            $values_1 = [];
            foreach ($data['ExecIDs'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setExecIDs($values_1);
        }
        elseif (\array_key_exists('ExecIDs', $data) && $data['ExecIDs'] === null) {
            $object->setExecIDs(null);
        }
        if (\array_key_exists('HostConfig', $data)) {
            $object->setHostConfig($this->denormalizer->denormalize($data['HostConfig'], \Docker\Api\Model\HostConfig::class, 'json', $context));
        }
        if (\array_key_exists('GraphDriver', $data)) {
            $object->setGraphDriver($this->denormalizer->denormalize($data['GraphDriver'], \Docker\Api\Model\GraphDriverData::class, 'json', $context));
        }
        if (\array_key_exists('SizeRw', $data)) {
            $object->setSizeRw($data['SizeRw']);
        }
        if (\array_key_exists('SizeRootFs', $data)) {
            $object->setSizeRootFs($data['SizeRootFs']);
        }
        if (\array_key_exists('Mounts', $data)) {
            $values_2 = [];
            foreach ($data['Mounts'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Docker\Api\Model\MountPoint::class, 'json', $context);
            }
            $object->setMounts($values_2);
        }
        if (\array_key_exists('Config', $data)) {
            $object->setConfig($this->denormalizer->denormalize($data['Config'], \Docker\Api\Model\ContainerConfig::class, 'json', $context));
        }
        if (\array_key_exists('NetworkSettings', $data)) {
            $object->setNetworkSettings($this->denormalizer->denormalize($data['NetworkSettings'], \Docker\Api\Model\NetworkSettings::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['Id'] = $data->getId();
        }
        if ($data->isInitialized('created') && null !== $data->getCreated()) {
            $dataArray['Created'] = $data->getCreated();
        }
        if ($data->isInitialized('path') && null !== $data->getPath()) {
            $dataArray['Path'] = $data->getPath();
        }
        if ($data->isInitialized('args') && null !== $data->getArgs()) {
            $values = [];
            foreach ($data->getArgs() as $value) {
                $values[] = $value;
            }
            $dataArray['Args'] = $values;
        }
        if ($data->isInitialized('state') && null !== $data->getState()) {
            $dataArray['State'] = $this->normalizer->normalize($data->getState(), 'json', $context);
        }
        if ($data->isInitialized('image') && null !== $data->getImage()) {
            $dataArray['Image'] = $data->getImage();
        }
        if ($data->isInitialized('resolvConfPath') && null !== $data->getResolvConfPath()) {
            $dataArray['ResolvConfPath'] = $data->getResolvConfPath();
        }
        if ($data->isInitialized('hostnamePath') && null !== $data->getHostnamePath()) {
            $dataArray['HostnamePath'] = $data->getHostnamePath();
        }
        if ($data->isInitialized('hostsPath') && null !== $data->getHostsPath()) {
            $dataArray['HostsPath'] = $data->getHostsPath();
        }
        if ($data->isInitialized('logPath') && null !== $data->getLogPath()) {
            $dataArray['LogPath'] = $data->getLogPath();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['Name'] = $data->getName();
        }
        if ($data->isInitialized('restartCount') && null !== $data->getRestartCount()) {
            $dataArray['RestartCount'] = $data->getRestartCount();
        }
        if ($data->isInitialized('driver') && null !== $data->getDriver()) {
            $dataArray['Driver'] = $data->getDriver();
        }
        if ($data->isInitialized('platform') && null !== $data->getPlatform()) {
            $dataArray['Platform'] = $data->getPlatform();
        }
        if ($data->isInitialized('mountLabel') && null !== $data->getMountLabel()) {
            $dataArray['MountLabel'] = $data->getMountLabel();
        }
        if ($data->isInitialized('processLabel') && null !== $data->getProcessLabel()) {
            $dataArray['ProcessLabel'] = $data->getProcessLabel();
        }
        if ($data->isInitialized('appArmorProfile') && null !== $data->getAppArmorProfile()) {
            $dataArray['AppArmorProfile'] = $data->getAppArmorProfile();
        }
        if ($data->isInitialized('execIDs')) {
            $values_1 = [];
            foreach ($data->getExecIDs() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['ExecIDs'] = $values_1;
        }
        if ($data->isInitialized('hostConfig') && null !== $data->getHostConfig()) {
            $dataArray['HostConfig'] = $this->normalizer->normalize($data->getHostConfig(), 'json', $context);
        }
        if ($data->isInitialized('graphDriver') && null !== $data->getGraphDriver()) {
            $dataArray['GraphDriver'] = $this->normalizer->normalize($data->getGraphDriver(), 'json', $context);
        }
        if ($data->isInitialized('sizeRw') && null !== $data->getSizeRw()) {
            $dataArray['SizeRw'] = $data->getSizeRw();
        }
        if ($data->isInitialized('sizeRootFs') && null !== $data->getSizeRootFs()) {
            $dataArray['SizeRootFs'] = $data->getSizeRootFs();
        }
        if ($data->isInitialized('mounts') && null !== $data->getMounts()) {
            $values_2 = [];
            foreach ($data->getMounts() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['Mounts'] = $values_2;
        }
        if ($data->isInitialized('config') && null !== $data->getConfig()) {
            $dataArray['Config'] = $this->normalizer->normalize($data->getConfig(), 'json', $context);
        }
        if ($data->isInitialized('networkSettings') && null !== $data->getNetworkSettings()) {
            $dataArray['NetworkSettings'] = $this->normalizer->normalize($data->getNetworkSettings(), 'json', $context);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\ContainersIdJsonGetResponse200Constraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\ContainersIdJsonGetResponse200::class => false];
    }
}