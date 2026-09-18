<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Normalizer\CheckArray;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DetailedPlaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DetailedPlace::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DetailedPlace::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DetailedPlace();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('format', $data)) {
            $object->format = $data['format'];
            unset($data['format']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('country_code', $data)) {
            $object->countryCode = $data['country_code'];
            unset($data['country_code']);
        }
        if (\array_key_exists('place_type', $data)) {
            $object->placeType = $data['place_type'];
            unset($data['place_type']);
        }
        if (\array_key_exists('full_name', $data)) {
            $object->fullName = $data['full_name'];
            unset($data['full_name']);
        }
        if (\array_key_exists('country', $data)) {
            $object->country = $data['country'];
            unset($data['country']);
        }
        if (\array_key_exists('contained_within', $data)) {
            $values = [];
            foreach ($data['contained_within'] as $value) {
                $values[] = $value;
            }
            $object->containedWithin = $values;
            unset($data['contained_within']);
        }
        if (\array_key_exists('geo', $data)) {
            $object->geo = $this->denormalizer->denormalize($data['geo'], \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Geo::class, 'json', $context);
            unset($data['geo']);
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
        if (array_key_exists('format', get_object_vars($data)) && null !== ($data->format ?? null)) {
            $dataArray['format'] = $data->format;
        }
        $dataArray['id'] = $data->id;
        $dataArray['name'] = $data->name;
        $dataArray['country_code'] = $data->countryCode;
        $dataArray['place_type'] = $data->placeType;
        $dataArray['full_name'] = $data->fullName;
        $dataArray['country'] = $data->country;
        if (array_key_exists('containedWithin', get_object_vars($data)) && null !== ($data->containedWithin ?? null)) {
            $values = [];
            foreach ($data->containedWithin as $value) {
                $values[] = $value;
            }
            $dataArray['contained_within'] = $values;
        }
        if (array_key_exists('geo', get_object_vars($data)) && null !== ($data->geo ?? null)) {
            $normalized = $this->normalizer->normalize($data->geo, 'json', $context);
            $dataArray['geo'] = \is_iterable($normalized) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized) : $normalized;
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
        return [\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DetailedPlace::class => false];
    }
}