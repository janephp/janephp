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
class PluginSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\PluginSettings::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\PluginSettings::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\PluginSettings();
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
            $this->validate($data, new \Docker\Api\Validator\PluginSettingsConstraint());
        }
        if (\array_key_exists('Mounts', $data)) {
            $values = [];
            foreach ($data['Mounts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Docker\Api\Model\PluginMount::class, 'json', $context);
            }
            $object->setMounts($values);
        }
        if (\array_key_exists('Env', $data)) {
            $values_1 = [];
            foreach ($data['Env'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setEnv($values_1);
        }
        if (\array_key_exists('Args', $data)) {
            $values_2 = [];
            foreach ($data['Args'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setArgs($values_2);
        }
        if (\array_key_exists('Devices', $data)) {
            $values_3 = [];
            foreach ($data['Devices'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Docker\Api\Model\PluginDevice::class, 'json', $context);
            }
            $object->setDevices($values_3);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getMounts() as $value) {
            $values[] = $value === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['Mounts'] = $values;
        $values_1 = [];
        foreach ($data->getEnv() as $value_1) {
            $values_1[] = $value_1;
        }
        $dataArray['Env'] = $values_1;
        $values_2 = [];
        foreach ($data->getArgs() as $value_2) {
            $values_2[] = $value_2;
        }
        $dataArray['Args'] = $values_2;
        $values_3 = [];
        foreach ($data->getDevices() as $value_3) {
            $values_3[] = $value_3 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
        }
        $dataArray['Devices'] = $values_3;
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\PluginSettingsConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\PluginSettings::class => false];
    }
}