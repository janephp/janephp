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
            $value_1 = $data['names'];
            if (is_array($data['names']) && $this->isOnlyNumericKeys($data['names'])) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['names'] as $key => $value_2) {
                    $values_1[$key] = $value_2;
                }
                $value_1 = $values_1;
            }
            $object->setNames($value_1);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->setNames(null);
        }
        if (\array_key_exists('descriptions', $data) && $data['descriptions'] !== null) {
            $value_3 = $data['descriptions'];
            if (is_array($data['descriptions']) && $this->isOnlyNumericKeys($data['descriptions'])) {
                $values_2 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['descriptions'] as $key_1 => $value_4) {
                    $values_2[$key_1] = $value_4;
                }
                $value_3 = $values_2;
            }
            $object->setDescriptions($value_3);
        }
        elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
            $object->setDescriptions(null);
        }
        if (\array_key_exists('displayPatterns', $data)) {
            $values_3 = [];
            foreach ($data['displayPatterns'] as $value_5) {
                $values_3[] = $this->denormalizer->denormalize($value_5, \PicturePark\API\Model\DisplayPattern::class, 'json', $context);
            }
            $object->setDisplayPatterns($values_3);
        }
        if (\array_key_exists('fields', $data) && $data['fields'] !== null) {
            $values_4 = [];
            foreach ($data['fields'] as $value_6) {
                $values_4[] = $this->denormalizer->denormalize($value_6, \PicturePark\API\Model\FieldBase::class, 'json', $context);
            }
            $object->setFields($values_4);
        }
        elseif (\array_key_exists('fields', $data) && $data['fields'] === null) {
            $object->setFields(null);
        }
        if (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] !== null) {
            $values_5 = [];
            foreach ($data['fieldsOverwrite'] as $value_7) {
                $values_5[] = $this->denormalizer->denormalize($value_7, \PicturePark\API\Model\FieldOverwriteBase::class, 'json', $context);
            }
            $object->setFieldsOverwrite($values_5);
        }
        elseif (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] === null) {
            $object->setFieldsOverwrite(null);
        }
        if (\array_key_exists('aggregations', $data) && $data['aggregations'] !== null) {
            $values_6 = [];
            foreach ($data['aggregations'] as $value_8) {
                $values_6[] = $this->denormalizer->denormalize($value_8, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->setAggregations($values_6);
        }
        elseif (\array_key_exists('aggregations', $data) && $data['aggregations'] === null) {
            $object->setAggregations(null);
        }
        if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
            $values_7 = [];
            foreach ($data['sort'] as $value_9) {
                $values_7[] = $this->denormalizer->denormalize($value_9, \PicturePark\API\Model\SortInfo::class, 'json', $context);
            }
            $object->setSort($values_7);
        }
        elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
            $object->setSort(null);
        }
        if (\array_key_exists('viewForAll', $data)) {
            $object->setViewForAll($data['viewForAll']);
        }
        if (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] !== null) {
            $values_8 = [];
            foreach ($data['schemaPermissionSetIds'] as $value_10) {
                $values_8[] = $value_10;
            }
            $object->setSchemaPermissionSetIds($values_8);
        }
        elseif (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] === null) {
            $object->setSchemaPermissionSetIds(null);
        }
        if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
            $values_9 = [];
            foreach ($data['layerSchemaIds'] as $value_11) {
                $values_9[] = $value_11;
            }
            $object->setLayerSchemaIds($values_9);
        }
        elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
            $object->setLayerSchemaIds(null);
        }
        if (\array_key_exists('referencedInContentSchemaIds', $data) && $data['referencedInContentSchemaIds'] !== null) {
            $values_10 = [];
            foreach ($data['referencedInContentSchemaIds'] as $value_12) {
                $values_10[] = $value_12;
            }
            $object->setReferencedInContentSchemaIds($values_10);
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
        if ($data->isInitialized('parentSchemaId') && null !== $data->getParentSchemaId()) {
            $dataArray['parentSchemaId'] = $data->getParentSchemaId();
        }
        if ($data->isInitialized('types') && null !== $data->getTypes()) {
            $values = [];
            foreach ($data->getTypes() as $value) {
                $values[] = $value;
            }
            $dataArray['types'] = $values;
        }
        if ($data->isInitialized('names') && null !== $data->getNames()) {
            $value_1 = $data->getNames();
            if (is_object($data->getNames())) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->getNames() as $key => $value_2) {
                    $values_1[$key] = $value_2;
                }
                $value_1 = $values_1;
            }
            $dataArray['names'] = $value_1;
        }
        if ($data->isInitialized('descriptions') && null !== $data->getDescriptions()) {
            $value_3 = $data->getDescriptions();
            if (is_object($data->getDescriptions())) {
                $values_2 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->getDescriptions() as $key_1 => $value_4) {
                    $values_2[$key_1] = $value_4;
                }
                $value_3 = $values_2;
            }
            $dataArray['descriptions'] = $value_3;
        }
        $values_3 = [];
        foreach ($data->getDisplayPatterns() as $value_5) {
            $values_3[] = $value_5 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
        }
        $dataArray['displayPatterns'] = $values_3;
        if ($data->isInitialized('fields') && null !== $data->getFields()) {
            $values_4 = [];
            foreach ($data->getFields() as $value_6) {
                $values_4[] = $value_6 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_6, 'json', $context));
            }
            $dataArray['fields'] = $values_4;
        }
        if ($data->isInitialized('fieldsOverwrite') && null !== $data->getFieldsOverwrite()) {
            $values_5 = [];
            foreach ($data->getFieldsOverwrite() as $value_7) {
                $values_5[] = $value_7 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_7, 'json', $context));
            }
            $dataArray['fieldsOverwrite'] = $values_5;
        }
        if ($data->isInitialized('aggregations') && null !== $data->getAggregations()) {
            $values_6 = [];
            foreach ($data->getAggregations() as $value_8) {
                $values_6[] = $value_8 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_8, 'json', $context));
            }
            $dataArray['aggregations'] = $values_6;
        }
        if ($data->isInitialized('sort') && null !== $data->getSort()) {
            $values_7 = [];
            foreach ($data->getSort() as $value_9) {
                $values_7[] = $value_9 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_9, 'json', $context));
            }
            $dataArray['sort'] = $values_7;
        }
        $dataArray['viewForAll'] = $data->getViewForAll();
        if ($data->isInitialized('schemaPermissionSetIds') && null !== $data->getSchemaPermissionSetIds()) {
            $values_8 = [];
            foreach ($data->getSchemaPermissionSetIds() as $value_10) {
                $values_8[] = $value_10;
            }
            $dataArray['schemaPermissionSetIds'] = $values_8;
        }
        if ($data->isInitialized('layerSchemaIds') && null !== $data->getLayerSchemaIds()) {
            $values_9 = [];
            foreach ($data->getLayerSchemaIds() as $value_11) {
                $values_9[] = $value_11;
            }
            $dataArray['layerSchemaIds'] = $values_9;
        }
        if ($data->isInitialized('referencedInContentSchemaIds') && null !== $data->getReferencedInContentSchemaIds()) {
            $values_10 = [];
            foreach ($data->getReferencedInContentSchemaIds() as $value_12) {
                $values_10[] = $value_12;
            }
            $dataArray['referencedInContentSchemaIds'] = $values_10;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\SchemaCreateRequest::class => false];
    }
}