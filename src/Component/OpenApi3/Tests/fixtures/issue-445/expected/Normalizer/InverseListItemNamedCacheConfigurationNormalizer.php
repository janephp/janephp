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
class InverseListItemNamedCacheConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\InverseListItemNamedCacheConfiguration::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\InverseListItemNamedCacheConfiguration::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\InverseListItemNamedCacheConfiguration();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('caseSensitive', $data) && \is_int($data['caseSensitive'])) {
            $data['caseSensitive'] = (bool) $data['caseSensitive'];
        }
        if (\array_key_exists('includeAllSchemaChildren', $data) && \is_int($data['includeAllSchemaChildren'])) {
            $data['includeAllSchemaChildren'] = (bool) $data['includeAllSchemaChildren'];
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->name = null;
            unset($data['name']);
        }
        if (\array_key_exists('caseSensitive', $data)) {
            $object->caseSensitive = $data['caseSensitive'];
            unset($data['caseSensitive']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
            unset($data['kind']);
        }
        if (\array_key_exists('schemaId', $data) && $data['schemaId'] !== null) {
            $object->schemaId = $data['schemaId'];
            unset($data['schemaId']);
        }
        elseif (\array_key_exists('schemaId', $data) && $data['schemaId'] === null) {
            $object->schemaId = null;
            unset($data['schemaId']);
        }
        if (\array_key_exists('valueField', $data) && $data['valueField'] !== null) {
            $object->valueField = $data['valueField'];
            unset($data['valueField']);
        }
        elseif (\array_key_exists('valueField', $data) && $data['valueField'] === null) {
            $object->valueField = null;
            unset($data['valueField']);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $value = $data['filter'];
            if (is_array($data['filter']) and \array_key_exists('kind', $data['filter'])) {
                $value = $this->denormalizer->denormalize($data['filter'], \PicturePark\API\Model\FilterBase::class, 'json', $context);
            }
            $object->filter = $value;
            unset($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->filter = null;
            unset($data['filter']);
        }
        if (\array_key_exists('includeAllSchemaChildren', $data)) {
            $object->includeAllSchemaChildren = $data['includeAllSchemaChildren'];
            unset($data['includeAllSchemaChildren']);
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
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        $dataArray['caseSensitive'] = $data->caseSensitive ?? null;
        $dataArray['kind'] = $data->kind ?? null;
        if (array_key_exists('schemaId', get_object_vars($data)) && null !== ($data->schemaId ?? null)) {
            $dataArray['schemaId'] = $data->schemaId ?? null;
        }
        if (array_key_exists('valueField', get_object_vars($data)) && null !== ($data->valueField ?? null)) {
            $dataArray['valueField'] = $data->valueField ?? null;
        }
        if (array_key_exists('filter', get_object_vars($data)) && null !== ($data->filter ?? null)) {
            $value = $data->filter ?? null;
            if (is_object($data->filter ?? null)) {
                $value = ($data->filter ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->filter ?? null, 'json', $context));
            }
            $dataArray['filter'] = $value;
        }
        if (array_key_exists('includeAllSchemaChildren', get_object_vars($data)) && null !== ($data->includeAllSchemaChildren ?? null)) {
            $dataArray['includeAllSchemaChildren'] = $data->includeAllSchemaChildren ?? null;
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
        return [\PicturePark\API\Model\InverseListItemNamedCacheConfiguration::class => false];
    }
}