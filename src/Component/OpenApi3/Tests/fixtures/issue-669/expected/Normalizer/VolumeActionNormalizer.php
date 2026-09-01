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
class VolumeActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\VolumeAction::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\VolumeAction::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\VolumeAction();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
            unset($data['type']);
        }
        if (\array_key_exists('resource_id', $data) && $data['resource_id'] !== null) {
            $object->resourceId = $data['resource_id'];
            unset($data['resource_id']);
        }
        elseif (\array_key_exists('resource_id', $data) && $data['resource_id'] === null) {
            $object->resourceId = null;
            unset($data['resource_id']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
            unset($data['status']);
        }
        if (\array_key_exists('started_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['started_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['started_at'], 'Y-m-d\TH:i:sP');
            }
            $object->startedAt = $date;
            unset($data['started_at']);
        }
        if (\array_key_exists('completed_at', $data) && $data['completed_at'] !== null) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['completed_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['completed_at'], 'Y-m-d\TH:i:sP');
            }
            $object->completedAt = $date_1;
            unset($data['completed_at']);
        }
        elseif (\array_key_exists('completed_at', $data) && $data['completed_at'] === null) {
            $object->completedAt = null;
            unset($data['completed_at']);
        }
        if (\array_key_exists('resource_type', $data)) {
            $object->resourceType = $data['resource_type'];
            unset($data['resource_type']);
        }
        if (\array_key_exists('region', $data)) {
            $object->region = $this->denormalizer->denormalize($data['region'], \Jane\Generated\DigitalOcean\Model\Region::class, 'json', $context);
            unset($data['region']);
        }
        if (\array_key_exists('region_slug', $data) && $data['region_slug'] !== null) {
            $object->regionSlug = $data['region_slug'];
            unset($data['region_slug']);
        }
        elseif (\array_key_exists('region_slug', $data) && $data['region_slug'] === null) {
            $object->regionSlug = null;
            unset($data['region_slug']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type ?? null;
        }
        if (array_key_exists('resourceId', get_object_vars($data)) && null !== ($data->resourceId ?? null)) {
            $dataArray['resource_id'] = $data->resourceId ?? null;
        }
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status ?? null;
        }
        if (array_key_exists('startedAt', get_object_vars($data)) && null !== ($data->startedAt ?? null)) {
            $dataArray['started_at'] = ($data->startedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('completedAt', get_object_vars($data)) && null !== ($data->completedAt ?? null)) {
            $dataArray['completed_at'] = ($data->completedAt ?? null)?->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('resourceType', get_object_vars($data)) && null !== ($data->resourceType ?? null)) {
            $dataArray['resource_type'] = $data->resourceType ?? null;
        }
        if (array_key_exists('region', get_object_vars($data)) && null !== ($data->region ?? null)) {
            $dataArray['region'] = ($data->region ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->region ?? null, 'json', $context));
        }
        if (array_key_exists('regionSlug', get_object_vars($data)) && null !== ($data->regionSlug ?? null)) {
            $dataArray['region_slug'] = $data->regionSlug ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\VolumeAction::class => false];
    }
}