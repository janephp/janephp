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
class VolumeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\Volume::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\Volume::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\Volume();
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
            $this->validate($data, new \Docker\Api\Validator\VolumeConstraint());
        }
        if (\array_key_exists('Name', $data)) {
            $object->name = $data['Name'];
        }
        if (\array_key_exists('Driver', $data)) {
            $object->driver = $data['Driver'];
        }
        if (\array_key_exists('Mountpoint', $data)) {
            $object->mountpoint = $data['Mountpoint'];
        }
        if (\array_key_exists('CreatedAt', $data)) {
            $object->createdAt = $data['CreatedAt'];
        }
        if (\array_key_exists('Status', $data)) {
            $values = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Status'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->status = $values;
        }
        if (\array_key_exists('Labels', $data)) {
            $values_1 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Labels'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->labels = $values_1;
        }
        if (\array_key_exists('Scope', $data)) {
            $object->scope = $data['Scope'];
        }
        if (\array_key_exists('Options', $data)) {
            $values_2 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Options'] as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $object->options = $values_2;
        }
        if (\array_key_exists('UsageData', $data) && $data['UsageData'] !== null) {
            $object->usageData = $this->denormalizer->denormalize($data['UsageData'], \Docker\Api\Model\VolumeUsageData::class, 'json', $context);
        }
        elseif (\array_key_exists('UsageData', $data) && $data['UsageData'] === null) {
            $object->usageData = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['Name'] = $data->name ?? null;
        $dataArray['Driver'] = $data->driver ?? null;
        $dataArray['Mountpoint'] = $data->mountpoint ?? null;
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['CreatedAt'] = $data->createdAt ?? null;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $values = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->status ?? null as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['Status'] = $values;
        }
        $values_1 = new \Docker\Api\Runtime\JsonObject();
        foreach ($data->labels ?? null as $key_1 => $value_1) {
            $values_1[$key_1] = $value_1;
        }
        $dataArray['Labels'] = $values_1;
        $dataArray['Scope'] = $data->scope ?? null;
        $values_2 = new \Docker\Api\Runtime\JsonObject();
        foreach ($data->options ?? null as $key_2 => $value_2) {
            $values_2[$key_2] = $value_2;
        }
        $dataArray['Options'] = $values_2;
        if (array_key_exists('usageData', get_object_vars($data)) && null !== ($data->usageData ?? null)) {
            $dataArray['UsageData'] = ($data->usageData ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->usageData ?? null, 'json', $context));
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\VolumeConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\Volume::class => false];
    }
}