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
class SchemaUpdateItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\SchemaUpdateItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\SchemaUpdateItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\SchemaUpdateItem();
        if (\array_key_exists('viewForAll', $data) && \is_int($data['viewForAll'])) {
            $data['viewForAll'] = (bool) $data['viewForAll'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('names', $data) && $data['names'] !== null) {
            $object->setNames($data['names']);
            unset($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->setNames(null);
        }
        if (\array_key_exists('descriptions', $data) && $data['descriptions'] !== null) {
            $object->setDescriptions($data['descriptions']);
            unset($data['descriptions']);
        }
        elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
            $object->setDescriptions(null);
        }
        if (\array_key_exists('displayPatterns', $data) && $data['displayPatterns'] !== null) {
            $values = [];
            foreach ($data['displayPatterns'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\DisplayPattern::class, 'json', $context);
            }
            $object->setDisplayPatterns($values);
            unset($data['displayPatterns']);
        }
        elseif (\array_key_exists('displayPatterns', $data) && $data['displayPatterns'] === null) {
            $object->setDisplayPatterns(null);
        }
        if (\array_key_exists('fields', $data) && $data['fields'] !== null) {
            $values_1 = [];
            foreach ($data['fields'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\FieldBase::class, 'json', $context);
            }
            $object->setFields($values_1);
            unset($data['fields']);
        }
        elseif (\array_key_exists('fields', $data) && $data['fields'] === null) {
            $object->setFields(null);
        }
        if (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] !== null) {
            $values_2 = [];
            foreach ($data['fieldsOverwrite'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\FieldOverwriteBase::class, 'json', $context);
            }
            $object->setFieldsOverwrite($values_2);
            unset($data['fieldsOverwrite']);
        }
        elseif (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] === null) {
            $object->setFieldsOverwrite(null);
        }
        if (\array_key_exists('aggregations', $data) && $data['aggregations'] !== null) {
            $values_3 = [];
            foreach ($data['aggregations'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->setAggregations($values_3);
            unset($data['aggregations']);
        }
        elseif (\array_key_exists('aggregations', $data) && $data['aggregations'] === null) {
            $object->setAggregations(null);
        }
        if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
            $values_4 = [];
            foreach ($data['sort'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \PicturePark\API\Model\SortInfo::class, 'json', $context);
            }
            $object->setSort($values_4);
            unset($data['sort']);
        }
        elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
            $object->setSort(null);
        }
        if (\array_key_exists('viewForAll', $data)) {
            $object->setViewForAll($data['viewForAll']);
            unset($data['viewForAll']);
        }
        if (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] !== null) {
            $values_5 = [];
            foreach ($data['schemaPermissionSetIds'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setSchemaPermissionSetIds($values_5);
            unset($data['schemaPermissionSetIds']);
        }
        elseif (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] === null) {
            $object->setSchemaPermissionSetIds(null);
        }
        if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
            $values_6 = [];
            foreach ($data['layerSchemaIds'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setLayerSchemaIds($values_6);
            unset($data['layerSchemaIds']);
        }
        elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
            $object->setLayerSchemaIds(null);
        }
        if (\array_key_exists('referencedInContentSchemaIds', $data) && $data['referencedInContentSchemaIds'] !== null) {
            $values_7 = [];
            foreach ($data['referencedInContentSchemaIds'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setReferencedInContentSchemaIds($values_7);
            unset($data['referencedInContentSchemaIds']);
        }
        elseif (\array_key_exists('referencedInContentSchemaIds', $data) && $data['referencedInContentSchemaIds'] === null) {
            $object->setReferencedInContentSchemaIds(null);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        foreach ($data as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_8;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('names')) {
            $dataArray['names'] = $data->getNames();
        }
        if ($data->isInitialized('descriptions')) {
            $dataArray['descriptions'] = $data->getDescriptions();
        }
        if ($data->isInitialized('displayPatterns')) {
            $values = [];
            foreach ($data->getDisplayPatterns() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['displayPatterns'] = $values;
        }
        if ($data->isInitialized('fields')) {
            $values_1 = [];
            foreach ($data->getFields() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['fields'] = $values_1;
        }
        if ($data->isInitialized('fieldsOverwrite')) {
            $values_2 = [];
            foreach ($data->getFieldsOverwrite() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['fieldsOverwrite'] = $values_2;
        }
        if ($data->isInitialized('aggregations')) {
            $values_3 = [];
            foreach ($data->getAggregations() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['aggregations'] = $values_3;
        }
        if ($data->isInitialized('sort')) {
            $values_4 = [];
            foreach ($data->getSort() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['sort'] = $values_4;
        }
        $dataArray['viewForAll'] = $data->getViewForAll();
        if ($data->isInitialized('schemaPermissionSetIds')) {
            $values_5 = [];
            foreach ($data->getSchemaPermissionSetIds() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['schemaPermissionSetIds'] = $values_5;
        }
        if ($data->isInitialized('layerSchemaIds')) {
            $values_6 = [];
            foreach ($data->getLayerSchemaIds() as $value_6) {
                $values_6[] = $value_6;
            }
            $dataArray['layerSchemaIds'] = $values_6;
        }
        if ($data->isInitialized('referencedInContentSchemaIds')) {
            $values_7 = [];
            foreach ($data->getReferencedInContentSchemaIds() as $value_7) {
                $values_7[] = $value_7;
            }
            $dataArray['referencedInContentSchemaIds'] = $values_7;
        }
        $dataArray['id'] = $data->getId();
        foreach ($data as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_8;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\SchemaUpdateItem::class => false];
    }
}