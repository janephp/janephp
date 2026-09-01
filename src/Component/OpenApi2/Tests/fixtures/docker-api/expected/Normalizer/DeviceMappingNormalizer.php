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
class DeviceMappingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\DeviceMapping::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\DeviceMapping::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\DeviceMapping();
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
            $this->validate($data, new \Docker\Api\Validator\DeviceMappingConstraint());
        }
        if (\array_key_exists('PathOnHost', $data)) {
            $object->pathOnHost = $data['PathOnHost'];
        }
        if (\array_key_exists('PathInContainer', $data)) {
            $object->pathInContainer = $data['PathInContainer'];
        }
        if (\array_key_exists('CgroupPermissions', $data)) {
            $object->cgroupPermissions = $data['CgroupPermissions'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('pathOnHost', get_object_vars($data)) && null !== ($data->pathOnHost ?? null)) {
            $dataArray['PathOnHost'] = $data->pathOnHost ?? null;
        }
        if (array_key_exists('pathInContainer', get_object_vars($data)) && null !== ($data->pathInContainer ?? null)) {
            $dataArray['PathInContainer'] = $data->pathInContainer ?? null;
        }
        if (array_key_exists('cgroupPermissions', get_object_vars($data)) && null !== ($data->cgroupPermissions ?? null)) {
            $dataArray['CgroupPermissions'] = $data->cgroupPermissions ?? null;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\DeviceMappingConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\DeviceMapping::class => false];
    }
}