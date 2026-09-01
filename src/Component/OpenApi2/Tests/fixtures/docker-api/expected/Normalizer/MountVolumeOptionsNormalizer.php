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
class MountVolumeOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\MountVolumeOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\MountVolumeOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\MountVolumeOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('NoCopy', $data) && \is_int($data['NoCopy'])) {
            $data['NoCopy'] = (bool) $data['NoCopy'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\MountVolumeOptionsConstraint());
        }
        if (\array_key_exists('NoCopy', $data)) {
            $object->noCopy = $data['NoCopy'];
        }
        if (\array_key_exists('Labels', $data)) {
            $values = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Labels'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->labels = $values;
        }
        if (\array_key_exists('DriverConfig', $data)) {
            $object->driverConfig = $this->denormalizer->denormalize($data['DriverConfig'], \Docker\Api\Model\MountVolumeOptionsDriverConfig::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('noCopy', get_object_vars($data)) && null !== ($data->noCopy ?? null)) {
            $dataArray['NoCopy'] = $data->noCopy ?? null;
        }
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $values = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->labels ?? null as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['Labels'] = $values;
        }
        if (array_key_exists('driverConfig', get_object_vars($data)) && null !== ($data->driverConfig ?? null)) {
            $dataArray['DriverConfig'] = ($data->driverConfig ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->driverConfig ?? null, 'json', $context));
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\MountVolumeOptionsConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\MountVolumeOptions::class => false];
    }
}