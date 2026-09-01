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
class PluginConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\PluginConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\PluginConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\PluginConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('IpcHost', $data) && \is_int($data['IpcHost'])) {
            $data['IpcHost'] = (bool) $data['IpcHost'];
        }
        if (\array_key_exists('PidHost', $data) && \is_int($data['PidHost'])) {
            $data['PidHost'] = (bool) $data['PidHost'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\PluginConfigConstraint());
        }
        if (\array_key_exists('DockerVersion', $data)) {
            $object->dockerVersion = $data['DockerVersion'];
        }
        if (\array_key_exists('Description', $data)) {
            $object->description = $data['Description'];
        }
        if (\array_key_exists('Documentation', $data)) {
            $object->documentation = $data['Documentation'];
        }
        if (\array_key_exists('Interface', $data)) {
            $object->interface = $this->denormalizer->denormalize($data['Interface'], \Docker\Api\Model\PluginConfigInterface::class, 'json', $context);
        }
        if (\array_key_exists('Entrypoint', $data)) {
            $values = [];
            foreach ($data['Entrypoint'] as $value) {
                $values[] = $value;
            }
            $object->entrypoint = $values;
        }
        if (\array_key_exists('WorkDir', $data)) {
            $object->workDir = $data['WorkDir'];
        }
        if (\array_key_exists('User', $data)) {
            $object->user = $this->denormalizer->denormalize($data['User'], \Docker\Api\Model\PluginConfigUser::class, 'json', $context);
        }
        if (\array_key_exists('Network', $data)) {
            $object->network = $this->denormalizer->denormalize($data['Network'], \Docker\Api\Model\PluginConfigNetwork::class, 'json', $context);
        }
        if (\array_key_exists('Linux', $data)) {
            $object->linux = $this->denormalizer->denormalize($data['Linux'], \Docker\Api\Model\PluginConfigLinux::class, 'json', $context);
        }
        if (\array_key_exists('PropagatedMount', $data)) {
            $object->propagatedMount = $data['PropagatedMount'];
        }
        if (\array_key_exists('IpcHost', $data)) {
            $object->ipcHost = $data['IpcHost'];
        }
        if (\array_key_exists('PidHost', $data)) {
            $object->pidHost = $data['PidHost'];
        }
        if (\array_key_exists('Mounts', $data)) {
            $values_1 = [];
            foreach ($data['Mounts'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Docker\Api\Model\PluginMount::class, 'json', $context);
            }
            $object->mounts = $values_1;
        }
        if (\array_key_exists('Env', $data)) {
            $values_2 = [];
            foreach ($data['Env'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Docker\Api\Model\PluginEnv::class, 'json', $context);
            }
            $object->env = $values_2;
        }
        if (\array_key_exists('Args', $data)) {
            $object->args = $this->denormalizer->denormalize($data['Args'], \Docker\Api\Model\PluginConfigArgs::class, 'json', $context);
        }
        if (\array_key_exists('rootfs', $data)) {
            $object->rootfs = $this->denormalizer->denormalize($data['rootfs'], \Docker\Api\Model\PluginConfigRootfs::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('dockerVersion', get_object_vars($data)) && null !== ($data->dockerVersion ?? null)) {
            $dataArray['DockerVersion'] = $data->dockerVersion ?? null;
        }
        $dataArray['Description'] = $data->description ?? null;
        $dataArray['Documentation'] = $data->documentation ?? null;
        $dataArray['Interface'] = ($data->interface ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->interface ?? null, 'json', $context));
        $values = [];
        foreach ($data->entrypoint ?? null as $value) {
            $values[] = $value;
        }
        $dataArray['Entrypoint'] = $values;
        $dataArray['WorkDir'] = $data->workDir ?? null;
        if (array_key_exists('user', get_object_vars($data)) && null !== ($data->user ?? null)) {
            $dataArray['User'] = ($data->user ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->user ?? null, 'json', $context));
        }
        $dataArray['Network'] = ($data->network ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->network ?? null, 'json', $context));
        $dataArray['Linux'] = ($data->linux ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->linux ?? null, 'json', $context));
        $dataArray['PropagatedMount'] = $data->propagatedMount ?? null;
        $dataArray['IpcHost'] = $data->ipcHost ?? null;
        $dataArray['PidHost'] = $data->pidHost ?? null;
        $values_1 = [];
        foreach ($data->mounts ?? null as $value_1) {
            $values_1[] = $value_1 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
        }
        $dataArray['Mounts'] = $values_1;
        $values_2 = [];
        foreach ($data->env ?? null as $value_2) {
            $values_2[] = $value_2 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
        }
        $dataArray['Env'] = $values_2;
        $dataArray['Args'] = ($data->args ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->args ?? null, 'json', $context));
        if (array_key_exists('rootfs', get_object_vars($data)) && null !== ($data->rootfs ?? null)) {
            $dataArray['rootfs'] = ($data->rootfs ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->rootfs ?? null, 'json', $context));
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\PluginConfigConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\PluginConfig::class => false];
    }
}