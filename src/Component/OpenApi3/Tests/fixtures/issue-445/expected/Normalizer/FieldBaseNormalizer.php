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
class FieldBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\FieldBase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\FieldBase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\FieldBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('kind', $data) and 'FieldBoolean' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldBoolean', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldDate' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldDate', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldDateTime' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldDateTime', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldDateTimeArray' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldDateTimeArray', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldDecimal' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldDecimal', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldDictionary' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldDictionary', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldDictionaryArray' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldDictionaryArray', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldGeoPoint' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldGeoPoint', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldTrigger' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldTrigger', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldLong' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldLong', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldLongArray' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldLongArray', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldSingleFieldset' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldSingleFieldset', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldMultiFieldset' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldMultiFieldset', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldSingleTagbox' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldSingleTagbox', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldMultiTagbox' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldMultiTagbox', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldString' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldString', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldStringArray' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldStringArray', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldTranslatedString' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldTranslatedString', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldSingleRelation' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldSingleRelation', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldMultiRelation' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldMultiRelation', $format, $context);
        }
        if (\array_key_exists('required', $data) && \is_int($data['required'])) {
            $data['required'] = (bool) $data['required'];
        }
        if (\array_key_exists('fixed', $data) && \is_int($data['fixed'])) {
            $data['fixed'] = (bool) $data['fixed'];
        }
        if (\array_key_exists('index', $data) && \is_int($data['index'])) {
            $data['index'] = (bool) $data['index'];
        }
        if (\array_key_exists('simpleSearch', $data) && \is_int($data['simpleSearch'])) {
            $data['simpleSearch'] = (bool) $data['simpleSearch'];
        }
        if (\array_key_exists('sortable', $data) && \is_int($data['sortable'])) {
            $data['sortable'] = (bool) $data['sortable'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('indexId', $data) && $data['indexId'] !== null) {
            $object->indexId = $data['indexId'];
        }
        elseif (\array_key_exists('indexId', $data) && $data['indexId'] === null) {
            $object->indexId = null;
        }
        if (\array_key_exists('fieldNamespace', $data) && $data['fieldNamespace'] !== null) {
            $object->fieldNamespace = $data['fieldNamespace'];
        }
        elseif (\array_key_exists('fieldNamespace', $data) && $data['fieldNamespace'] === null) {
            $object->fieldNamespace = null;
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
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->names = null;
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
        }
        elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
            $object->descriptions = null;
        }
        if (\array_key_exists('required', $data)) {
            $object->required = $data['required'];
        }
        if (\array_key_exists('fixed', $data)) {
            $object->fixed = $data['fixed'];
        }
        if (\array_key_exists('index', $data)) {
            $object->index = $data['index'];
        }
        if (\array_key_exists('simpleSearch', $data)) {
            $object->simpleSearch = $data['simpleSearch'];
        }
        if (\array_key_exists('sortable', $data)) {
            $object->sortable = $data['sortable'];
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== ($data->kind ?? null) and 'FieldBoolean' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'FieldDate' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'FieldDateTime' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'FieldDateTimeArray' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'FieldDecimal' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'FieldDictionary' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'FieldDictionaryArray' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'FieldGeoPoint' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'FieldTrigger' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'FieldLong' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'FieldLongArray' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'FieldSingleFieldset' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'FieldMultiFieldset' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'FieldSingleTagbox' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'FieldMultiTagbox' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'FieldString' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'FieldStringArray' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'FieldTranslatedString' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'FieldSingleRelation' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'FieldMultiRelation' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['id'] = $data->id ?? null;
        if (array_key_exists('indexId', get_object_vars($data)) && null !== ($data->indexId ?? null)) {
            $dataArray['indexId'] = $data->indexId ?? null;
        }
        if (array_key_exists('fieldNamespace', get_object_vars($data)) && null !== ($data->fieldNamespace ?? null)) {
            $dataArray['fieldNamespace'] = $data->fieldNamespace ?? null;
        }
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
        $dataArray['required'] = $data->required ?? null;
        $dataArray['fixed'] = $data->fixed ?? null;
        $dataArray['index'] = $data->index ?? null;
        $dataArray['simpleSearch'] = $data->simpleSearch ?? null;
        $dataArray['sortable'] = $data->sortable ?? null;
        $dataArray['kind'] = $data->kind ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\FieldBase::class => false];
    }
}