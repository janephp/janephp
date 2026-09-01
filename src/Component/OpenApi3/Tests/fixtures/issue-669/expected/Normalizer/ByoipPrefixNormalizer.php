<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ByoipPrefixNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ByoipPrefix::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ByoipPrefix::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ByoipPrefix();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('locked', $data) && \is_int($data['locked'])) {
            $data['locked'] = (bool) $data['locked'];
        }
        if (\array_key_exists('advertised', $data) && \is_int($data['advertised'])) {
            $data['advertised'] = (bool) $data['advertised'];
        }
        if (\array_key_exists('uuid', $data)) {
            $object->uuid = $data['uuid'];
            unset($data['uuid']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('prefix', $data)) {
            $object->prefix = $data['prefix'];
            unset($data['prefix']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
            unset($data['status']);
        }
        if (\array_key_exists('region', $data)) {
            $object->region = $data['region'];
            unset($data['region']);
        }
        if (\array_key_exists('validations', $data)) {
            $values = [];
            foreach ($data['validations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\ByoipPrefixValidationsItem::class, 'json', $context);
            }
            $object->validations = $values;
            unset($data['validations']);
        }
        if (\array_key_exists('failure_reason', $data)) {
            $object->failureReason = $data['failure_reason'];
            unset($data['failure_reason']);
        }
        if (\array_key_exists('locked', $data)) {
            $object->locked = $data['locked'];
            unset($data['locked']);
        }
        if (\array_key_exists('advertised', $data)) {
            $object->advertised = $data['advertised'];
            unset($data['advertised']);
        }
        if (\array_key_exists('project_id', $data)) {
            $object->projectId = $data['project_id'];
            unset($data['project_id']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('uuid', get_object_vars($data)) && null !== ($data->uuid ?? null)) {
            $dataArray['uuid'] = $data->uuid ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('prefix', get_object_vars($data)) && null !== ($data->prefix ?? null)) {
            $dataArray['prefix'] = $data->prefix ?? null;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status ?? null;
        }
        if (array_key_exists('region', get_object_vars($data)) && null !== ($data->region ?? null)) {
            $dataArray['region'] = $data->region ?? null;
        }
        if (array_key_exists('validations', get_object_vars($data)) && null !== ($data->validations ?? null)) {
            $values = [];
            foreach ($data->validations ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['validations'] = $values;
        }
        if (array_key_exists('failureReason', get_object_vars($data)) && null !== ($data->failureReason ?? null)) {
            $dataArray['failure_reason'] = $data->failureReason ?? null;
        }
        if (array_key_exists('locked', get_object_vars($data)) && null !== ($data->locked ?? null)) {
            $dataArray['locked'] = $data->locked ?? null;
        }
        if (array_key_exists('advertised', get_object_vars($data)) && null !== ($data->advertised ?? null)) {
            $dataArray['advertised'] = $data->advertised ?? null;
        }
        if (array_key_exists('projectId', get_object_vars($data)) && null !== ($data->projectId ?? null)) {
            $dataArray['project_id'] = $data->projectId ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ByoipPrefix::class => false];
    }
}