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
class SchemaDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\SchemaDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\SchemaDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\SchemaDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('system', $data) && \is_int($data['system'])) {
            $data['system'] = (bool) $data['system'];
        }
        if (\array_key_exists('viewForAll', $data) && \is_int($data['viewForAll'])) {
            $data['viewForAll'] = (bool) $data['viewForAll'];
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('schemaNamespace', $data)) {
            $object->setSchemaNamespace($data['schemaNamespace']);
        }
        if (\array_key_exists('parentSchemaId', $data) && $data['parentSchemaId'] !== null) {
            $object->setParentSchemaId($data['parentSchemaId']);
        }
        elseif (\array_key_exists('parentSchemaId', $data) && $data['parentSchemaId'] === null) {
            $object->setParentSchemaId(null);
        }
        if (\array_key_exists('types', $data)) {
            $values = [];
            foreach ($data['types'] as $value) {
                $values[] = $value;
            }
            $object->setTypes($values);
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
        if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
            $values_1 = [];
            foreach ($data['layerSchemaIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setLayerSchemaIds($values_1);
        }
        elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
            $object->setLayerSchemaIds(null);
        }
        if (\array_key_exists('displayPatterns', $data)) {
            $values_2 = [];
            foreach ($data['displayPatterns'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\DisplayPattern::class, 'json', $context);
            }
            $object->setDisplayPatterns($values_2);
        }
        if (\array_key_exists('fields', $data) && $data['fields'] !== null) {
            $values_3 = [];
            foreach ($data['fields'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \PicturePark\API\Model\FieldBase::class, 'json', $context);
            }
            $object->setFields($values_3);
        }
        elseif (\array_key_exists('fields', $data) && $data['fields'] === null) {
            $object->setFields(null);
        }
        if (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] !== null) {
            $values_4 = [];
            foreach ($data['fieldsOverwrite'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \PicturePark\API\Model\FieldOverwriteBase::class, 'json', $context);
            }
            $object->setFieldsOverwrite($values_4);
        }
        elseif (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] === null) {
            $object->setFieldsOverwrite(null);
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
        if (\array_key_exists('aggregations', $data) && $data['aggregations'] !== null) {
            $values_6 = [];
            foreach ($data['aggregations'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->setAggregations($values_6);
        }
        elseif (\array_key_exists('aggregations', $data) && $data['aggregations'] === null) {
            $object->setAggregations(null);
        }
        if (\array_key_exists('system', $data)) {
            $object->setSystem($data['system']);
        }
        if (\array_key_exists('ownerTokenId', $data)) {
            $object->setOwnerTokenId($data['ownerTokenId']);
        }
        if (\array_key_exists('viewForAll', $data)) {
            $object->setViewForAll($data['viewForAll']);
        }
        if (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] !== null) {
            $values_7 = [];
            foreach ($data['schemaPermissionSetIds'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setSchemaPermissionSetIds($values_7);
        }
        elseif (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] === null) {
            $object->setSchemaPermissionSetIds(null);
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
        if (\array_key_exists('descendantSchemaIds', $data) && $data['descendantSchemaIds'] !== null) {
            $values_9 = [];
            foreach ($data['descendantSchemaIds'] as $value_9) {
                $values_9[] = $value_9;
            }
            $object->setDescendantSchemaIds($values_9);
        }
        elseif (\array_key_exists('descendantSchemaIds', $data) && $data['descendantSchemaIds'] === null) {
            $object->setDescendantSchemaIds(null);
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $object->setAudit($data['audit']);
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->setAudit(null);
        }
        if (\array_key_exists('searchFieldCount', $data) && $data['searchFieldCount'] !== null) {
            $object->setSearchFieldCount($data['searchFieldCount']);
        }
        elseif (\array_key_exists('searchFieldCount', $data) && $data['searchFieldCount'] === null) {
            $object->setSearchFieldCount(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['schemaNamespace'] = $data->getSchemaNamespace();
        if ($data->isInitialized('parentSchemaId') && null !== $data->getParentSchemaId()) {
            $dataArray['parentSchemaId'] = $data->getParentSchemaId();
        }
        $values = [];
        foreach ($data->getTypes() as $value) {
            $values[] = $value;
        }
        $dataArray['types'] = $values;
        if ($data->isInitialized('names') && null !== $data->getNames()) {
            $dataArray['names'] = $data->getNames();
        }
        if ($data->isInitialized('descriptions') && null !== $data->getDescriptions()) {
            $dataArray['descriptions'] = $data->getDescriptions();
        }
        if ($data->isInitialized('layerSchemaIds') && null !== $data->getLayerSchemaIds()) {
            $values_1 = [];
            foreach ($data->getLayerSchemaIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['layerSchemaIds'] = $values_1;
        }
        $values_2 = [];
        foreach ($data->getDisplayPatterns() as $value_2) {
            $values_2[] = $value_2 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
        }
        $dataArray['displayPatterns'] = $values_2;
        if ($data->isInitialized('fields') && null !== $data->getFields()) {
            $values_3 = [];
            foreach ($data->getFields() as $value_3) {
                $values_3[] = $value_3 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['fields'] = $values_3;
        }
        if ($data->isInitialized('fieldsOverwrite') && null !== $data->getFieldsOverwrite()) {
            $values_4 = [];
            foreach ($data->getFieldsOverwrite() as $value_4) {
                $values_4[] = $value_4 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['fieldsOverwrite'] = $values_4;
        }
        if ($data->isInitialized('sort') && null !== $data->getSort()) {
            $values_5 = [];
            foreach ($data->getSort() as $value_5) {
                $values_5[] = $value_5 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['sort'] = $values_5;
        }
        if ($data->isInitialized('aggregations') && null !== $data->getAggregations()) {
            $values_6 = [];
            foreach ($data->getAggregations() as $value_6) {
                $values_6[] = $value_6 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_6, 'json', $context));
            }
            $dataArray['aggregations'] = $values_6;
        }
        $dataArray['system'] = $data->getSystem();
        $dataArray['ownerTokenId'] = $data->getOwnerTokenId();
        $dataArray['viewForAll'] = $data->getViewForAll();
        if ($data->isInitialized('schemaPermissionSetIds') && null !== $data->getSchemaPermissionSetIds()) {
            $values_7 = [];
            foreach ($data->getSchemaPermissionSetIds() as $value_7) {
                $values_7[] = $value_7;
            }
            $dataArray['schemaPermissionSetIds'] = $values_7;
        }
        if ($data->isInitialized('referencedInContentSchemaIds') && null !== $data->getReferencedInContentSchemaIds()) {
            $values_8 = [];
            foreach ($data->getReferencedInContentSchemaIds() as $value_8) {
                $values_8[] = $value_8;
            }
            $dataArray['referencedInContentSchemaIds'] = $values_8;
        }
        if ($data->isInitialized('descendantSchemaIds') && null !== $data->getDescendantSchemaIds()) {
            $values_9 = [];
            foreach ($data->getDescendantSchemaIds() as $value_9) {
                $values_9[] = $value_9;
            }
            $dataArray['descendantSchemaIds'] = $values_9;
        }
        if ($data->isInitialized('audit') && null !== $data->getAudit()) {
            $dataArray['audit'] = $data->getAudit();
        }
        if ($data->isInitialized('searchFieldCount') && null !== $data->getSearchFieldCount()) {
            $dataArray['searchFieldCount'] = $data->getSearchFieldCount();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\SchemaDetail::class => false];
    }
}