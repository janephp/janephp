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
class ContainersIdJsonGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Docker\\Api\\Model\\ContainersIdJsonGetResponse200';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\ContainersIdJsonGetResponse200';
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
            $values = array();
            foreach ($data['Args'] as $value) {
                $values[] = $value;
            }
            $object->setArgs($values);
        }
        if (\array_key_exists('State', $data)) {
            $object->setState($this->denormalizer->denormalize($data['State'], 'Docker\\Api\\Model\\ContainerState', 'json', $context));
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
            $values_1 = array();
            foreach ($data['ExecIDs'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setExecIDs($values_1);
        }
        elseif (\array_key_exists('ExecIDs', $data) && $data['ExecIDs'] === null) {
            $object->setExecIDs(null);
        }
        if (\array_key_exists('HostConfig', $data)) {
            $object->setHostConfig($this->denormalizer->denormalize($data['HostConfig'], 'Docker\\Api\\Model\\HostConfig', 'json', $context));
        }
        if (\array_key_exists('GraphDriver', $data)) {
            $object->setGraphDriver($this->denormalizer->denormalize($data['GraphDriver'], 'Docker\\Api\\Model\\GraphDriverData', 'json', $context));
        }
        if (\array_key_exists('SizeRw', $data)) {
            $object->setSizeRw($data['SizeRw']);
        }
        if (\array_key_exists('SizeRootFs', $data)) {
            $object->setSizeRootFs($data['SizeRootFs']);
        }
        if (\array_key_exists('Mounts', $data)) {
            $values_2 = array();
            foreach ($data['Mounts'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\Api\\Model\\MountPoint', 'json', $context);
            }
            $object->setMounts($values_2);
        }
        if (\array_key_exists('Config', $data)) {
            $object->setConfig($this->denormalizer->denormalize($data['Config'], 'Docker\\Api\\Model\\ContainerConfig', 'json', $context));
        }
        if (\array_key_exists('NetworkSettings', $data)) {
            $object->setNetworkSettings($this->denormalizer->denormalize($data['NetworkSettings'], 'Docker\\Api\\Model\\NetworkSettings', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['Id'] = $object->getId();
        }
        if ($object->isInitialized('created') && null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
        }
        if ($object->isInitialized('path') && null !== $object->getPath()) {
            $data['Path'] = $object->getPath();
        }
        if ($object->isInitialized('args') && null !== $object->getArgs()) {
            $values = array();
            foreach ($object->getArgs() as $value) {
                $values[] = $value;
            }
            $data['Args'] = $values;
        }
        if ($object->isInitialized('state') && null !== $object->getState()) {
            $data['State'] = $object->getState() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getState(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('image') && null !== $object->getImage()) {
            $data['Image'] = $object->getImage();
        }
        if ($object->isInitialized('resolvConfPath') && null !== $object->getResolvConfPath()) {
            $data['ResolvConfPath'] = $object->getResolvConfPath();
        }
        if ($object->isInitialized('hostnamePath') && null !== $object->getHostnamePath()) {
            $data['HostnamePath'] = $object->getHostnamePath();
        }
        if ($object->isInitialized('hostsPath') && null !== $object->getHostsPath()) {
            $data['HostsPath'] = $object->getHostsPath();
        }
        if ($object->isInitialized('logPath') && null !== $object->getLogPath()) {
            $data['LogPath'] = $object->getLogPath();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if ($object->isInitialized('restartCount') && null !== $object->getRestartCount()) {
            $data['RestartCount'] = $object->getRestartCount();
        }
        if ($object->isInitialized('driver') && null !== $object->getDriver()) {
            $data['Driver'] = $object->getDriver();
        }
        if ($object->isInitialized('platform') && null !== $object->getPlatform()) {
            $data['Platform'] = $object->getPlatform();
        }
        if ($object->isInitialized('mountLabel') && null !== $object->getMountLabel()) {
            $data['MountLabel'] = $object->getMountLabel();
        }
        if ($object->isInitialized('processLabel') && null !== $object->getProcessLabel()) {
            $data['ProcessLabel'] = $object->getProcessLabel();
        }
        if ($object->isInitialized('appArmorProfile') && null !== $object->getAppArmorProfile()) {
            $data['AppArmorProfile'] = $object->getAppArmorProfile();
        }
        if ($object->isInitialized('execIDs') && null !== $object->getExecIDs()) {
            $values_1 = array();
            foreach ($object->getExecIDs() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['ExecIDs'] = $values_1;
        }
        if ($object->isInitialized('hostConfig') && null !== $object->getHostConfig()) {
            $data['HostConfig'] = $object->getHostConfig() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getHostConfig(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('graphDriver') && null !== $object->getGraphDriver()) {
            $data['GraphDriver'] = $object->getGraphDriver() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getGraphDriver(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('sizeRw') && null !== $object->getSizeRw()) {
            $data['SizeRw'] = $object->getSizeRw();
        }
        if ($object->isInitialized('sizeRootFs') && null !== $object->getSizeRootFs()) {
            $data['SizeRootFs'] = $object->getSizeRootFs();
        }
        if ($object->isInitialized('mounts') && null !== $object->getMounts()) {
            $values_2 = array();
            foreach ($object->getMounts() as $value_2) {
                $values_2[] = $value_2 == null ? null : new \ArrayObject($this->normalizer->normalize($value_2, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
            }
            $data['Mounts'] = $values_2;
        }
        if ($object->isInitialized('config') && null !== $object->getConfig()) {
            $data['Config'] = $object->getConfig() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getConfig(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('networkSettings') && null !== $object->getNetworkSettings()) {
            $data['NetworkSettings'] = $object->getNetworkSettings() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getNetworkSettings(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\ContainersIdJsonGetResponse200Constraint());
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Docker\\Api\\Model\\ContainersIdJsonGetResponse200' => false);
    }
}