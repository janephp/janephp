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
class SchemaCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\SchemaCreateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\SchemaCreateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\SchemaCreateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('viewForAll', $data) && \is_int($data['viewForAll'])) {
            $data['viewForAll'] = (bool) $data['viewForAll'];
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('parentSchemaId', $data) && $data['parentSchemaId'] !== null) {
            $object->setParentSchemaId($data['parentSchemaId']);
        }
        elseif (\array_key_exists('parentSchemaId', $data) && $data['parentSchemaId'] === null) {
            $object->setParentSchemaId(null);
        }
        if (\array_key_exists('types', $data) && $data['types'] !== null) {
            $values = [];
            foreach ($data['types'] as $value) {
                $values[] = $value;
            }
            $object->setTypes($values);
        }
        elseif (\array_key_exists('types', $data) && $data['types'] === null) {
            $object->setTypes(null);
        }
        if (\array_key_exists('names', $data) && $data['names'] !== null) {
            $object->setNames($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->setNames(null);
        }
        if (\array_key_exists('descriptions', $data) && $data['descriptions'] !== null) {
            $object->setDescriptions($data['descriptions']);
        }
        elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
            $object->setDescriptions(null);
        }
        if (\array_key_exists('displayPatterns', $data)) {
            $values_1 = [];
            foreach ($data['displayPatterns'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\DisplayPattern::class, 'json', $context);
            }
            $object->setDisplayPatterns($values_1);
        }
        if (\array_key_exists('fields', $data) && $data['fields'] !== null) {
            $values_2 = [];
            foreach ($data['fields'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\FieldBase::class, 'json', $context);
            }
            $object->setFields($values_2);
        }
        elseif (\array_key_exists('fields', $data) && $data['fields'] === null) {
            $object->setFields(null);
        }
        if (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] !== null) {
            $values_3 = [];
            foreach ($data['fieldsOverwrite'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \PicturePark\API\Model\FieldOverwriteBase::class, 'json', $context);
            }
            $object->setFieldsOverwrite($values_3);
        }
        elseif (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] === null) {
            $object->setFieldsOverwrite(null);
        }
        if (\array_key_exists('aggregations', $data) && $data['aggregations'] !== null) {
            $values_4 = [];
            foreach ($data['aggregations'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->setAggregations($values_4);
        }
        elseif (\array_key_exists('aggregations', $data) && $data['aggregations'] === null) {
            $object->setAggregations(null);
        }
        if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
            $values_5 = [];
            foreach ($data['sort'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \PicturePark\API\Model\SortInfo::class, 'json', $context);
            }
            $object->setSort($values_5);
        }
        elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
            $object->setSort(null);
        }
        if (\array_key_exists('viewForAll', $data)) {
            $object->setViewForAll($data['viewForAll']);
        }
        if (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] !== null) {
            $values_6 = [];
            foreach ($data['schemaPermissionSetIds'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setSchemaPermissionSetIds($values_6);
        }
        elseif (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] === null) {
            $object->setSchemaPermissionSetIds(null);
        }
        if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
            $values_7 = [];
            foreach ($data['layerSchemaIds'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setLayerSchemaIds($values_7);
        }
        elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
            $object->setLayerSchemaIds(null);
        }
        if (\array_key_exists('referencedInContentSchemaIds', $data) && $data['referencedInContentSchemaIds'] !== null) {
            $values_8 = [];
            foreach ($data['referencedInContentSchemaIds'] as $value_8) {
                $values_8[] = $value_8;
            }
            $object->setReferencedInContentSchemaIds($values_8);
        }
        elseif (\array_key_exists('referencedInContentSchemaIds', $data) && $data['referencedInContentSchemaIds'] === null) {
            $object->setReferencedInContentSchemaIds(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('parentSchemaId')) {
            $dataArray['parentSchemaId'] = $data->getParentSchemaId();
        }
        if ($data->isInitialized('types')) {
            $values = [];
            foreach ($data->getTypes() as $value) {
                $values[] = $value;
            }
            $dataArray['types'] = $values;
        }
        if ($data->isInitialized('names')) {
            $dataArray['names'] = $data->getNames();
        }
        if ($data->isInitialized('descriptions')) {
            $dataArray['descriptions'] = $data->getDescriptions();
        }
        $values_1 = [];
        foreach ($data->getDisplayPatterns() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['displayPatterns'] = $values_1;
        if ($data->isInitialized('fields')) {
            $values_2 = [];
            foreach ($data->getFields() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['fields'] = $values_2;
        }
        if ($data->isInitialized('fieldsOverwrite')) {
            $values_3 = [];
            foreach ($data->getFieldsOverwrite() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['fieldsOverwrite'] = $values_3;
        }
        if ($data->isInitialized('aggregations')) {
            $values_4 = [];
            foreach ($data->getAggregations() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['aggregations'] = $values_4;
        }
        if ($data->isInitialized('sort')) {
            $values_5 = [];
            foreach ($data->getSort() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['sort'] = $values_5;
        }
        $dataArray['viewForAll'] = $data->getViewForAll();
        if ($data->isInitialized('schemaPermissionSetIds')) {
            $values_6 = [];
            foreach ($data->getSchemaPermissionSetIds() as $value_6) {
                $values_6[] = $value_6;
            }
            $dataArray['schemaPermissionSetIds'] = $values_6;
        }
        if ($data->isInitialized('layerSchemaIds')) {
            $values_7 = [];
            foreach ($data->getLayerSchemaIds() as $value_7) {
                $values_7[] = $value_7;
            }
            $dataArray['layerSchemaIds'] = $values_7;
        }
        if ($data->isInitialized('referencedInContentSchemaIds')) {
            $values_8 = [];
            foreach ($data->getReferencedInContentSchemaIds() as $value_8) {
                $values_8[] = $value_8;
            }
            $dataArray['referencedInContentSchemaIds'] = $values_8;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\SchemaCreateRequest::class => false];
    }
}