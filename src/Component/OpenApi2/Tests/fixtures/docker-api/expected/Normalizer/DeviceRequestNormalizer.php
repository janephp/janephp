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
class DeviceRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\DeviceRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\DeviceRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\DeviceRequest();
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
            $this->validate($data, new \Docker\Api\Validator\DeviceRequestConstraint());
        }
        if (\array_key_exists('Driver', $data)) {
            $object->driver = $data['Driver'];
        }
        if (\array_key_exists('Count', $data)) {
            $object->count = $data['Count'];
        }
        if (\array_key_exists('DeviceIDs', $data)) {
            $values = [];
            foreach ($data['DeviceIDs'] as $value) {
                $values[] = $value;
            }
            $object->deviceIDs = $values;
        }
        if (\array_key_exists('Capabilities', $data)) {
            $values_1 = [];
            foreach ($data['Capabilities'] as $value_1) {
                $values_2 = [];
                foreach ($value_1 as $value_2) {
                    $values_2[] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $object->capabilities = $values_1;
        }
        if (\array_key_exists('Options', $data)) {
            $values_3 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Options'] as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $object->options = $values_3;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('driver', get_object_vars($data)) && null !== ($data->driver ?? null)) {
            $dataArray['Driver'] = $data->driver ?? null;
        }
        if (array_key_exists('count', get_object_vars($data)) && null !== ($data->count ?? null)) {
            $dataArray['Count'] = $data->count ?? null;
        }
        if (array_key_exists('deviceIDs', get_object_vars($data)) && null !== ($data->deviceIDs ?? null)) {
            $values = [];
            foreach ($data->deviceIDs ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['DeviceIDs'] = $values;
        }
        if (array_key_exists('capabilities', get_object_vars($data)) && null !== ($data->capabilities ?? null)) {
            $values_1 = [];
            foreach ($data->capabilities ?? null as $value_1) {
                $values_2 = [];
                foreach ($value_1 as $value_2) {
                    $values_2[] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $dataArray['Capabilities'] = $values_1;
        }
        if (array_key_exists('options', get_object_vars($data)) && null !== ($data->options ?? null)) {
            $values_3 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->options ?? null as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $dataArray['Options'] = $values_3;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\DeviceRequestConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\DeviceRequest::class => false];
    }
}