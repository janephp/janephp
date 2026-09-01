<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class NamedCacheConfigurationBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\NamedCacheConfigurationBase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\NamedCacheConfigurationBase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\NamedCacheConfigurationBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('kind', $data) and 'ListItemNamedCacheConfiguration' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ListItemNamedCacheConfiguration', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'SchemaTagboxFilterLookupNamedCacheConfiguration' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\SchemaTagboxFilterLookupNamedCacheConfiguration', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'InverseListItemNamedCacheConfiguration' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\InverseListItemNamedCacheConfiguration', $format, $context);
        }
        if (\array_key_exists('caseSensitive', $data) && \is_int($data['caseSensitive'])) {
            $data['caseSensitive'] = (bool) $data['caseSensitive'];
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->name = $data['name'];
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->name = null;
        }
        if (\array_key_exists('caseSensitive', $data)) {
            $object->caseSensitive = $data['caseSensitive'];
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== ($data->kind ?? null) and 'ListItemNamedCacheConfiguration' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'SchemaTagboxFilterLookupNamedCacheConfiguration' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'InverseListItemNamedCacheConfiguration' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        $dataArray['caseSensitive'] = $data->caseSensitive ?? null;
        $dataArray['kind'] = $data->kind ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\NamedCacheConfigurationBase::class => false];
    }
}