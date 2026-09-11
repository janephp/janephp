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
class MountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\Mount::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\Mount::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\Mount();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ReadOnly', $data) && \is_int($data['ReadOnly'])) {
            $data['ReadOnly'] = (bool) $data['ReadOnly'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\MountConstraint());
        }
        if (\array_key_exists('Target', $data)) {
            $object->target = $data['Target'];
        }
        if (\array_key_exists('Source', $data)) {
            $object->source = $data['Source'];
        }
        if (\array_key_exists('Type', $data)) {
            $object->type = $data['Type'];
        }
        if (\array_key_exists('ReadOnly', $data)) {
            $object->readOnly = $data['ReadOnly'];
        }
        if (\array_key_exists('Consistency', $data)) {
            $object->consistency = $data['Consistency'];
        }
        if (\array_key_exists('BindOptions', $data)) {
            $object->bindOptions = $this->denormalizer->denormalize($data['BindOptions'], \Docker\Api\Model\MountBindOptions::class, 'json', $context);
        }
        if (\array_key_exists('VolumeOptions', $data)) {
            $object->volumeOptions = $this->denormalizer->denormalize($data['VolumeOptions'], \Docker\Api\Model\MountVolumeOptions::class, 'json', $context);
        }
        if (\array_key_exists('TmpfsOptions', $data)) {
            $object->tmpfsOptions = $this->denormalizer->denormalize($data['TmpfsOptions'], \Docker\Api\Model\MountTmpfsOptions::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('target', get_object_vars($data)) && null !== ($data->target ?? null)) {
            $dataArray['Target'] = $data->target;
        }
        if (array_key_exists('source', get_object_vars($data)) && null !== ($data->source ?? null)) {
            $dataArray['Source'] = $data->source;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['Type'] = $data->type;
        }
        if (array_key_exists('readOnly', get_object_vars($data)) && null !== ($data->readOnly ?? null)) {
            $dataArray['ReadOnly'] = $data->readOnly;
        }
        if (array_key_exists('consistency', get_object_vars($data)) && null !== ($data->consistency ?? null)) {
            $dataArray['Consistency'] = $data->consistency;
        }
        if (array_key_exists('bindOptions', get_object_vars($data)) && null !== ($data->bindOptions ?? null)) {
            $normalized = $this->normalizer->normalize($data->bindOptions, 'json', $context);
            $dataArray['BindOptions'] = \is_iterable($normalized) ? new \Docker\Api\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('volumeOptions', get_object_vars($data)) && null !== ($data->volumeOptions ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->volumeOptions, 'json', $context);
            $dataArray['VolumeOptions'] = \is_iterable($normalized_1) ? new \Docker\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('tmpfsOptions', get_object_vars($data)) && null !== ($data->tmpfsOptions ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->tmpfsOptions, 'json', $context);
            $dataArray['TmpfsOptions'] = \is_iterable($normalized_2) ? new \Docker\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\MountConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\Mount::class => false];
    }
}