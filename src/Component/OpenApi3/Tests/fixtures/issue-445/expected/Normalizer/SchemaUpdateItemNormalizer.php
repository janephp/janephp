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
        $object = new \PicturePark\API\Model\SchemaUpdateItem();
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
        if (\array_key_exists('names', $data) && $data['names'] !== null) {
            $value = $data['names'];
            if (is_array($data['names']) && $this->isOnlyNumericKeys($data['names'])) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['names'] as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            }
            $object->names = $value;
            unset($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->names = null;
            unset($data['names']);
        }
        if (\array_key_exists('descriptions', $data) && $data['descriptions'] !== null) {
            $value_2 = $data['descriptions'];
            if (is_array($data['descriptions']) && $this->isOnlyNumericKeys($data['descriptions'])) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['descriptions'] as $key_1 => $value_3) {
                    $values_1[$key_1] = $value_3;
                }
                $value_2 = $values_1;
            }
            $object->descriptions = $value_2;
            unset($data['descriptions']);
        }
        elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
            $object->descriptions = null;
            unset($data['descriptions']);
        }
        if (\array_key_exists('displayPatterns', $data) && $data['displayPatterns'] !== null) {
            $values_2 = [];
            foreach ($data['displayPatterns'] as $value_4) {
                $values_2[] = $this->denormalizer->denormalize($value_4, \PicturePark\API\Model\DisplayPattern::class, 'json', $context);
            }
            $object->displayPatterns = $values_2;
            unset($data['displayPatterns']);
        }
        elseif (\array_key_exists('displayPatterns', $data) && $data['displayPatterns'] === null) {
            $object->displayPatterns = null;
            unset($data['displayPatterns']);
        }
        if (\array_key_exists('fields', $data) && $data['fields'] !== null) {
            $values_3 = [];
            foreach ($data['fields'] as $value_5) {
                $values_3[] = $this->denormalizer->denormalize($value_5, \PicturePark\API\Model\FieldBase::class, 'json', $context);
            }
            $object->fields = $values_3;
            unset($data['fields']);
        }
        elseif (\array_key_exists('fields', $data) && $data['fields'] === null) {
            $object->fields = null;
            unset($data['fields']);
        }
        if (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] !== null) {
            $values_4 = [];
            foreach ($data['fieldsOverwrite'] as $value_6) {
                $values_4[] = $this->denormalizer->denormalize($value_6, \PicturePark\API\Model\FieldOverwriteBase::class, 'json', $context);
            }
            $object->fieldsOverwrite = $values_4;
            unset($data['fieldsOverwrite']);
        }
        elseif (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] === null) {
            $object->fieldsOverwrite = null;
            unset($data['fieldsOverwrite']);
        }
        if (\array_key_exists('aggregations', $data) && $data['aggregations'] !== null) {
            $values_5 = [];
            foreach ($data['aggregations'] as $value_7) {
                $values_5[] = $this->denormalizer->denormalize($value_7, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->aggregations = $values_5;
            unset($data['aggregations']);
        }
        elseif (\array_key_exists('aggregations', $data) && $data['aggregations'] === null) {
            $object->aggregations = null;
            unset($data['aggregations']);
        }
        if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
            $values_6 = [];
            foreach ($data['sort'] as $value_8) {
                $values_6[] = $this->denormalizer->denormalize($value_8, \PicturePark\API\Model\SortInfo::class, 'json', $context);
            }
            $object->sort = $values_6;
            unset($data['sort']);
        }
        elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
            $object->sort = null;
            unset($data['sort']);
        }
        if (\array_key_exists('viewForAll', $data)) {
            $object->viewForAll = $data['viewForAll'];
            unset($data['viewForAll']);
        }
        if (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] !== null) {
            $values_7 = [];
            foreach ($data['schemaPermissionSetIds'] as $value_9) {
                $values_7[] = $value_9;
            }
            $object->schemaPermissionSetIds = $values_7;
            unset($data['schemaPermissionSetIds']);
        }
        elseif (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] === null) {
            $object->schemaPermissionSetIds = null;
            unset($data['schemaPermissionSetIds']);
        }
        if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
            $values_8 = [];
            foreach ($data['layerSchemaIds'] as $value_10) {
                $values_8[] = $value_10;
            }
            $object->layerSchemaIds = $values_8;
            unset($data['layerSchemaIds']);
        }
        elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
            $object->layerSchemaIds = null;
            unset($data['layerSchemaIds']);
        }
        if (\array_key_exists('referencedInContentSchemaIds', $data) && $data['referencedInContentSchemaIds'] !== null) {
            $values_9 = [];
            foreach ($data['referencedInContentSchemaIds'] as $value_11) {
                $values_9[] = $value_11;
            }
            $object->referencedInContentSchemaIds = $values_9;
            unset($data['referencedInContentSchemaIds']);
        }
        elseif (\array_key_exists('referencedInContentSchemaIds', $data) && $data['referencedInContentSchemaIds'] === null) {
            $object->referencedInContentSchemaIds = null;
            unset($data['referencedInContentSchemaIds']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        foreach ($data as $key_2 => $value_12) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_12;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('names', get_object_vars($data)) && null !== ($data->names ?? null)) {
            $value = $data->names ?? null;
            if (is_object($data->names ?? null)) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->names ?? null as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            }
            $dataArray['names'] = $value;
        }
        if (array_key_exists('descriptions', get_object_vars($data)) && null !== ($data->descriptions ?? null)) {
            $value_2 = $data->descriptions ?? null;
            if (is_object($data->descriptions ?? null)) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->descriptions ?? null as $key_1 => $value_3) {
                    $values_1[$key_1] = $value_3;
                }
                $value_2 = $values_1;
            }
            $dataArray['descriptions'] = $value_2;
        }
        if (array_key_exists('displayPatterns', get_object_vars($data)) && null !== ($data->displayPatterns ?? null)) {
            $values_2 = [];
            foreach ($data->displayPatterns ?? null as $value_4) {
                $values_2[] = $value_4 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['displayPatterns'] = $values_2;
        }
        if (array_key_exists('fields', get_object_vars($data)) && null !== ($data->fields ?? null)) {
            $values_3 = [];
            foreach ($data->fields ?? null as $value_5) {
                $values_3[] = $value_5 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['fields'] = $values_3;
        }
        if (array_key_exists('fieldsOverwrite', get_object_vars($data)) && null !== ($data->fieldsOverwrite ?? null)) {
            $values_4 = [];
            foreach ($data->fieldsOverwrite ?? null as $value_6) {
                $values_4[] = $value_6 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_6, 'json', $context));
            }
            $dataArray['fieldsOverwrite'] = $values_4;
        }
        if (array_key_exists('aggregations', get_object_vars($data)) && null !== ($data->aggregations ?? null)) {
            $values_5 = [];
            foreach ($data->aggregations ?? null as $value_7) {
                $values_5[] = $value_7 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_7, 'json', $context));
            }
            $dataArray['aggregations'] = $values_5;
        }
        if (array_key_exists('sort', get_object_vars($data)) && null !== ($data->sort ?? null)) {
            $values_6 = [];
            foreach ($data->sort ?? null as $value_8) {
                $values_6[] = $value_8 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_8, 'json', $context));
            }
            $dataArray['sort'] = $values_6;
        }
        $dataArray['viewForAll'] = $data->viewForAll ?? null;
        if (array_key_exists('schemaPermissionSetIds', get_object_vars($data)) && null !== ($data->schemaPermissionSetIds ?? null)) {
            $values_7 = [];
            foreach ($data->schemaPermissionSetIds ?? null as $value_9) {
                $values_7[] = $value_9;
            }
            $dataArray['schemaPermissionSetIds'] = $values_7;
        }
        if (array_key_exists('layerSchemaIds', get_object_vars($data)) && null !== ($data->layerSchemaIds ?? null)) {
            $values_8 = [];
            foreach ($data->layerSchemaIds ?? null as $value_10) {
                $values_8[] = $value_10;
            }
            $dataArray['layerSchemaIds'] = $values_8;
        }
        if (array_key_exists('referencedInContentSchemaIds', get_object_vars($data)) && null !== ($data->referencedInContentSchemaIds ?? null)) {
            $values_9 = [];
            foreach ($data->referencedInContentSchemaIds ?? null as $value_11) {
                $values_9[] = $value_11;
            }
            $dataArray['referencedInContentSchemaIds'] = $values_9;
        }
        $dataArray['id'] = $data->id ?? null;
        foreach ($data->additionalPropertyEntries() as $key_2 => $value_12) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_12;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\SchemaUpdateItem::class => false];
    }
}