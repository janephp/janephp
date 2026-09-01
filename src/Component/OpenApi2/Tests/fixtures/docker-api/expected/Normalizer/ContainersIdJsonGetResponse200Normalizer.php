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
        $object = new \Docker\Api\Model\ContainersIdJsonGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\ContainersIdJsonGetResponse200Constraint());
        }
        if (\array_key_exists('Id', $data)) {
            $object->id = $data['Id'];
        }
        if (\array_key_exists('Created', $data)) {
            $object->created = $data['Created'];
        }
        if (\array_key_exists('Path', $data)) {
            $object->path = $data['Path'];
        }
        if (\array_key_exists('Args', $data)) {
            $values = [];
            foreach ($data['Args'] as $value) {
                $values[] = $value;
            }
            $object->args = $values;
        }
        if (\array_key_exists('State', $data)) {
            $object->state = $this->denormalizer->denormalize($data['State'], \Docker\Api\Model\ContainerState::class, 'json', $context);
        }
        if (\array_key_exists('Image', $data)) {
            $object->image = $data['Image'];
        }
        if (\array_key_exists('ResolvConfPath', $data)) {
            $object->resolvConfPath = $data['ResolvConfPath'];
        }
        if (\array_key_exists('HostnamePath', $data)) {
            $object->hostnamePath = $data['HostnamePath'];
        }
        if (\array_key_exists('HostsPath', $data)) {
            $object->hostsPath = $data['HostsPath'];
        }
        if (\array_key_exists('LogPath', $data)) {
            $object->logPath = $data['LogPath'];
        }
        if (\array_key_exists('Name', $data)) {
            $object->name = $data['Name'];
        }
        if (\array_key_exists('RestartCount', $data)) {
            $object->restartCount = $data['RestartCount'];
        }
        if (\array_key_exists('Driver', $data)) {
            $object->driver = $data['Driver'];
        }
        if (\array_key_exists('Platform', $data)) {
            $object->platform = $data['Platform'];
        }
        if (\array_key_exists('MountLabel', $data)) {
            $object->mountLabel = $data['MountLabel'];
        }
        if (\array_key_exists('ProcessLabel', $data)) {
            $object->processLabel = $data['ProcessLabel'];
        }
        if (\array_key_exists('AppArmorProfile', $data)) {
            $object->appArmorProfile = $data['AppArmorProfile'];
        }
        if (\array_key_exists('ExecIDs', $data) && $data['ExecIDs'] !== null) {
            $values_1 = [];
            foreach ($data['ExecIDs'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->execIDs = $values_1;
        }
        elseif (\array_key_exists('ExecIDs', $data) && $data['ExecIDs'] === null) {
            $object->execIDs = null;
        }
        if (\array_key_exists('HostConfig', $data)) {
            $object->hostConfig = $this->denormalizer->denormalize($data['HostConfig'], \Docker\Api\Model\HostConfig::class, 'json', $context);
        }
        if (\array_key_exists('GraphDriver', $data)) {
            $object->graphDriver = $this->denormalizer->denormalize($data['GraphDriver'], \Docker\Api\Model\GraphDriverData::class, 'json', $context);
        }
        if (\array_key_exists('SizeRw', $data)) {
            $object->sizeRw = $data['SizeRw'];
        }
        if (\array_key_exists('SizeRootFs', $data)) {
            $object->sizeRootFs = $data['SizeRootFs'];
        }
        if (\array_key_exists('Mounts', $data)) {
            $values_2 = [];
            foreach ($data['Mounts'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Docker\Api\Model\MountPoint::class, 'json', $context);
            }
            $object->mounts = $values_2;
        }
        if (\array_key_exists('Config', $data)) {
            $object->config = $this->denormalizer->denormalize($data['Config'], \Docker\Api\Model\ContainerConfig::class, 'json', $context);
        }
        if (\array_key_exists('NetworkSettings', $data)) {
            $object->networkSettings = $this->denormalizer->denormalize($data['NetworkSettings'], \Docker\Api\Model\NetworkSettings::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['Id'] = $data->id ?? null;
        }
        if (array_key_exists('created', get_object_vars($data)) && null !== ($data->created ?? null)) {
            $dataArray['Created'] = $data->created ?? null;
        }
        if (array_key_exists('path', get_object_vars($data)) && null !== ($data->path ?? null)) {
            $dataArray['Path'] = $data->path ?? null;
        }
        if (array_key_exists('args', get_object_vars($data)) && null !== ($data->args ?? null)) {
            $values = [];
            foreach ($data->args ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['Args'] = $values;
        }
        if (array_key_exists('state', get_object_vars($data)) && null !== ($data->state ?? null)) {
            $dataArray['State'] = ($data->state ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->state ?? null, 'json', $context));
        }
        if (array_key_exists('image', get_object_vars($data)) && null !== ($data->image ?? null)) {
            $dataArray['Image'] = $data->image ?? null;
        }
        if (array_key_exists('resolvConfPath', get_object_vars($data)) && null !== ($data->resolvConfPath ?? null)) {
            $dataArray['ResolvConfPath'] = $data->resolvConfPath ?? null;
        }
        if (array_key_exists('hostnamePath', get_object_vars($data)) && null !== ($data->hostnamePath ?? null)) {
            $dataArray['HostnamePath'] = $data->hostnamePath ?? null;
        }
        if (array_key_exists('hostsPath', get_object_vars($data)) && null !== ($data->hostsPath ?? null)) {
            $dataArray['HostsPath'] = $data->hostsPath ?? null;
        }
        if (array_key_exists('logPath', get_object_vars($data)) && null !== ($data->logPath ?? null)) {
            $dataArray['LogPath'] = $data->logPath ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['Name'] = $data->name ?? null;
        }
        if (array_key_exists('restartCount', get_object_vars($data)) && null !== ($data->restartCount ?? null)) {
            $dataArray['RestartCount'] = $data->restartCount ?? null;
        }
        if (array_key_exists('driver', get_object_vars($data)) && null !== ($data->driver ?? null)) {
            $dataArray['Driver'] = $data->driver ?? null;
        }
        if (array_key_exists('platform', get_object_vars($data)) && null !== ($data->platform ?? null)) {
            $dataArray['Platform'] = $data->platform ?? null;
        }
        if (array_key_exists('mountLabel', get_object_vars($data)) && null !== ($data->mountLabel ?? null)) {
            $dataArray['MountLabel'] = $data->mountLabel ?? null;
        }
        if (array_key_exists('processLabel', get_object_vars($data)) && null !== ($data->processLabel ?? null)) {
            $dataArray['ProcessLabel'] = $data->processLabel ?? null;
        }
        if (array_key_exists('appArmorProfile', get_object_vars($data)) && null !== ($data->appArmorProfile ?? null)) {
            $dataArray['AppArmorProfile'] = $data->appArmorProfile ?? null;
        }
        if (array_key_exists('execIDs', get_object_vars($data)) && null !== ($data->execIDs ?? null)) {
            $values_1 = [];
            foreach ($data->execIDs ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['ExecIDs'] = $values_1;
        }
        if (array_key_exists('hostConfig', get_object_vars($data)) && null !== ($data->hostConfig ?? null)) {
            $dataArray['HostConfig'] = ($data->hostConfig ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->hostConfig ?? null, 'json', $context));
        }
        if (array_key_exists('graphDriver', get_object_vars($data)) && null !== ($data->graphDriver ?? null)) {
            $dataArray['GraphDriver'] = ($data->graphDriver ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->graphDriver ?? null, 'json', $context));
        }
        if (array_key_exists('sizeRw', get_object_vars($data)) && null !== ($data->sizeRw ?? null)) {
            $dataArray['SizeRw'] = $data->sizeRw ?? null;
        }
        if (array_key_exists('sizeRootFs', get_object_vars($data)) && null !== ($data->sizeRootFs ?? null)) {
            $dataArray['SizeRootFs'] = $data->sizeRootFs ?? null;
        }
        if (array_key_exists('mounts', get_object_vars($data)) && null !== ($data->mounts ?? null)) {
            $values_2 = [];
            foreach ($data->mounts ?? null as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['Mounts'] = $values_2;
        }
        if (array_key_exists('config', get_object_vars($data)) && null !== ($data->config ?? null)) {
            $dataArray['Config'] = ($data->config ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->config ?? null, 'json', $context));
        }
        if (array_key_exists('networkSettings', get_object_vars($data)) && null !== ($data->networkSettings ?? null)) {
            $dataArray['NetworkSettings'] = ($data->networkSettings ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->networkSettings ?? null, 'json', $context));
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