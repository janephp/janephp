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
class MountPointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\MountPoint::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\MountPoint::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\MountPoint();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('RW', $data) && \is_int($data['RW'])) {
            $data['RW'] = (bool) $data['RW'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\MountPointConstraint());
        }
        if (\array_key_exists('Type', $data)) {
            $object->type = $data['Type'];
        }
        if (\array_key_exists('Name', $data)) {
            $object->name = $data['Name'];
        }
        if (\array_key_exists('Source', $data)) {
            $object->source = $data['Source'];
        }
        if (\array_key_exists('Destination', $data)) {
            $object->destination = $data['Destination'];
        }
        if (\array_key_exists('Driver', $data)) {
            $object->driver = $data['Driver'];
        }
        if (\array_key_exists('Mode', $data)) {
            $object->mode = $data['Mode'];
        }
        if (\array_key_exists('RW', $data)) {
            $object->rW = $data['RW'];
        }
        if (\array_key_exists('Propagation', $data)) {
            $object->propagation = $data['Propagation'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['Type'] = $data->type ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['Name'] = $data->name ?? null;
        }
        if (array_key_exists('source', get_object_vars($data)) && null !== ($data->source ?? null)) {
            $dataArray['Source'] = $data->source ?? null;
        }
        if (array_key_exists('destination', get_object_vars($data)) && null !== ($data->destination ?? null)) {
            $dataArray['Destination'] = $data->destination ?? null;
        }
        if (array_key_exists('driver', get_object_vars($data)) && null !== ($data->driver ?? null)) {
            $dataArray['Driver'] = $data->driver ?? null;
        }
        if (array_key_exists('mode', get_object_vars($data)) && null !== ($data->mode ?? null)) {
            $dataArray['Mode'] = $data->mode ?? null;
        }
        if (array_key_exists('rW', get_object_vars($data)) && null !== ($data->rW ?? null)) {
            $dataArray['RW'] = $data->rW ?? null;
        }
        if (array_key_exists('propagation', get_object_vars($data)) && null !== ($data->propagation ?? null)) {
            $dataArray['Propagation'] = $data->propagation ?? null;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\MountPointConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\MountPoint::class => false];
    }
}