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
class PluginConfigLinuxNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\PluginConfigLinux::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\PluginConfigLinux::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\Api\Model\PluginConfigLinux();
        if (\array_key_exists('AllowAllDevices', $data) && \is_int($data['AllowAllDevices'])) {
            $data['AllowAllDevices'] = (bool) $data['AllowAllDevices'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\PluginConfigLinuxConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Capabilities', $data)) {
            $values = [];
            foreach ($data['Capabilities'] as $value) {
                $values[] = $value;
            }
            $object->setCapabilities($values);
        }
        if (\array_key_exists('AllowAllDevices', $data)) {
            $object->setAllowAllDevices($data['AllowAllDevices']);
        }
        if (\array_key_exists('Devices', $data)) {
            $values_1 = [];
            foreach ($data['Devices'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Docker\Api\Model\PluginDevice::class, 'json', $context);
            }
            $object->setDevices($values_1);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getCapabilities() as $value) {
            $values[] = $value;
        }
        $dataArray['Capabilities'] = $values;
        $dataArray['AllowAllDevices'] = $data->getAllowAllDevices();
        $values_1 = [];
        foreach ($data->getDevices() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['Devices'] = $values_1;
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\PluginConfigLinuxConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\PluginConfigLinux::class => false];
    }
}