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
            $object->id = $data['id'];
        }
        if (\array_key_exists('parentSchemaId', $data) && $data['parentSchemaId'] !== null) {
            $object->parentSchemaId = $data['parentSchemaId'];
        }
        elseif (\array_key_exists('parentSchemaId', $data) && $data['parentSchemaId'] === null) {
            $object->parentSchemaId = null;
        }
        if (\array_key_exists('types', $data) && $data['types'] !== null) {
            $values = [];
            foreach ($data['types'] as $value) {
                $values[] = $value;
            }
            $object->types = $values;
        }
        elseif (\array_key_exists('types', $data) && $data['types'] === null) {
            $object->types = null;
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
            $object->names = $value_1;
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->names = null;
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
            $object->descriptions = $value_3;
        }
        elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
            $object->descriptions = null;
        }
        if (\array_key_exists('displayPatterns', $data)) {
            $values_3 = [];
            foreach ($data['displayPatterns'] as $value_5) {
                $values_3[] = $this->denormalizer->denormalize($value_5, \PicturePark\API\Model\DisplayPattern::class, 'json', $context);
            }
            $object->displayPatterns = $values_3;
        }
        if (\array_key_exists('fields', $data) && $data['fields'] !== null) {
            $values_4 = [];
            foreach ($data['fields'] as $value_6) {
                $values_4[] = $this->denormalizer->denormalize($value_6, \PicturePark\API\Model\FieldBase::class, 'json', $context);
            }
            $object->fields = $values_4;
        }
        elseif (\array_key_exists('fields', $data) && $data['fields'] === null) {
            $object->fields = null;
        }
        if (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] !== null) {
            $values_5 = [];
            foreach ($data['fieldsOverwrite'] as $value_7) {
                $values_5[] = $this->denormalizer->denormalize($value_7, \PicturePark\API\Model\FieldOverwriteBase::class, 'json', $context);
            }
            $object->fieldsOverwrite = $values_5;
        }
        elseif (\array_key_exists('fieldsOverwrite', $data) && $data['fieldsOverwrite'] === null) {
            $object->fieldsOverwrite = null;
        }
        if (\array_key_exists('aggregations', $data) && $data['aggregations'] !== null) {
            $values_6 = [];
            foreach ($data['aggregations'] as $value_8) {
                $values_6[] = $this->denormalizer->denormalize($value_8, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->aggregations = $values_6;
        }
        elseif (\array_key_exists('aggregations', $data) && $data['aggregations'] === null) {
            $object->aggregations = null;
        }
        if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
            $values_7 = [];
            foreach ($data['sort'] as $value_9) {
                $values_7[] = $this->denormalizer->denormalize($value_9, \PicturePark\API\Model\SortInfo::class, 'json', $context);
            }
            $object->sort = $values_7;
        }
        elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
            $object->sort = null;
        }
        if (\array_key_exists('viewForAll', $data)) {
            $object->viewForAll = $data['viewForAll'];
        }
        if (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] !== null) {
            $values_8 = [];
            foreach ($data['schemaPermissionSetIds'] as $value_10) {
                $values_8[] = $value_10;
            }
            $object->schemaPermissionSetIds = $values_8;
        }
        elseif (\array_key_exists('schemaPermissionSetIds', $data) && $data['schemaPermissionSetIds'] === null) {
            $object->schemaPermissionSetIds = null;
        }
        if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
            $values_9 = [];
            foreach ($data['layerSchemaIds'] as $value_11) {
                $values_9[] = $value_11;
            }
            $object->layerSchemaIds = $values_9;
        }
        elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
            $object->layerSchemaIds = null;
        }
        if (\array_key_exists('referencedInContentSchemaIds', $data) && $data['referencedInContentSchemaIds'] !== null) {
            $values_10 = [];
            foreach ($data['referencedInContentSchemaIds'] as $value_12) {
                $values_10[] = $value_12;
            }
            $object->referencedInContentSchemaIds = $values_10;
        }
        elseif (\array_key_exists('referencedInContentSchemaIds', $data) && $data['referencedInContentSchemaIds'] === null) {
            $object->referencedInContentSchemaIds = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->id ?? null;
        if (array_key_exists('parentSchemaId', get_object_vars($data)) && null !== ($data->parentSchemaId ?? null)) {
            $dataArray['parentSchemaId'] = $data->parentSchemaId ?? null;
        }
        if (array_key_exists('types', get_object_vars($data)) && null !== ($data->types ?? null)) {
            $values = [];
            foreach ($data->types ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['types'] = $values;
        }
        if (array_key_exists('names', get_object_vars($data)) && null !== ($data->names ?? null)) {
            $value_1 = $data->names ?? null;
            if (is_object($data->names ?? null)) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->names ?? null as $key => $value_2) {
                    $values_1[$key] = $value_2;
                }
                $value_1 = $values_1;
            }
            $dataArray['names'] = $value_1;
        }
        if (array_key_exists('descriptions', get_object_vars($data)) && null !== ($data->descriptions ?? null)) {
            $value_3 = $data->descriptions ?? null;
            if (is_object($data->descriptions ?? null)) {
                $values_2 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->descriptions ?? null as $key_1 => $value_4) {
                    $values_2[$key_1] = $value_4;
                }
                $value_3 = $values_2;
            }
            $dataArray['descriptions'] = $value_3;
        }
        $values_3 = [];
        foreach ($data->displayPatterns ?? null as $value_5) {
            $values_3[] = $value_5 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
        }
        $dataArray['displayPatterns'] = $values_3;
        if (array_key_exists('fields', get_object_vars($data)) && null !== ($data->fields ?? null)) {
            $values_4 = [];
            foreach ($data->fields ?? null as $value_6) {
                $values_4[] = $value_6 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_6, 'json', $context));
            }
            $dataArray['fields'] = $values_4;
        }
        if (array_key_exists('fieldsOverwrite', get_object_vars($data)) && null !== ($data->fieldsOverwrite ?? null)) {
            $values_5 = [];
            foreach ($data->fieldsOverwrite ?? null as $value_7) {
                $values_5[] = $value_7 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_7, 'json', $context));
            }
            $dataArray['fieldsOverwrite'] = $values_5;
        }
        if (array_key_exists('aggregations', get_object_vars($data)) && null !== ($data->aggregations ?? null)) {
            $values_6 = [];
            foreach ($data->aggregations ?? null as $value_8) {
                $values_6[] = $value_8 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_8, 'json', $context));
            }
            $dataArray['aggregations'] = $values_6;
        }
        if (array_key_exists('sort', get_object_vars($data)) && null !== ($data->sort ?? null)) {
            $values_7 = [];
            foreach ($data->sort ?? null as $value_9) {
                $values_7[] = $value_9 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_9, 'json', $context));
            }
            $dataArray['sort'] = $values_7;
        }
        $dataArray['viewForAll'] = $data->viewForAll ?? null;
        if (array_key_exists('schemaPermissionSetIds', get_object_vars($data)) && null !== ($data->schemaPermissionSetIds ?? null)) {
            $values_8 = [];
            foreach ($data->schemaPermissionSetIds ?? null as $value_10) {
                $values_8[] = $value_10;
            }
            $dataArray['schemaPermissionSetIds'] = $values_8;
        }
        if (array_key_exists('layerSchemaIds', get_object_vars($data)) && null !== ($data->layerSchemaIds ?? null)) {
            $values_9 = [];
            foreach ($data->layerSchemaIds ?? null as $value_11) {
                $values_9[] = $value_11;
            }
            $dataArray['layerSchemaIds'] = $values_9;
        }
        if (array_key_exists('referencedInContentSchemaIds', get_object_vars($data)) && null !== ($data->referencedInContentSchemaIds ?? null)) {
            $values_10 = [];
            foreach ($data->referencedInContentSchemaIds ?? null as $value_12) {
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