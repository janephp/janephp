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
class FieldMultiTagboxNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\FieldMultiTagbox::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\FieldMultiTagbox::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\FieldMultiTagbox();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
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
            unset($data['id']);
        }
        if (\array_key_exists('indexId', $data) && $data['indexId'] !== null) {
            $object->indexId = $data['indexId'];
            unset($data['indexId']);
        }
        elseif (\array_key_exists('indexId', $data) && $data['indexId'] === null) {
            $object->indexId = null;
            unset($data['indexId']);
        }
        if (\array_key_exists('fieldNamespace', $data) && $data['fieldNamespace'] !== null) {
            $object->fieldNamespace = $data['fieldNamespace'];
            unset($data['fieldNamespace']);
        }
        elseif (\array_key_exists('fieldNamespace', $data) && $data['fieldNamespace'] === null) {
            $object->fieldNamespace = null;
            unset($data['fieldNamespace']);
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
        if (\array_key_exists('required', $data)) {
            $object->required = $data['required'];
            unset($data['required']);
        }
        if (\array_key_exists('fixed', $data)) {
            $object->fixed = $data['fixed'];
            unset($data['fixed']);
        }
        if (\array_key_exists('index', $data)) {
            $object->index = $data['index'];
            unset($data['index']);
        }
        if (\array_key_exists('simpleSearch', $data)) {
            $object->simpleSearch = $data['simpleSearch'];
            unset($data['simpleSearch']);
        }
        if (\array_key_exists('sortable', $data)) {
            $object->sortable = $data['sortable'];
            unset($data['sortable']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
            unset($data['kind']);
        }
        if (\array_key_exists('schemaId', $data)) {
            $object->schemaId = $data['schemaId'];
            unset($data['schemaId']);
        }
        if (\array_key_exists('schemaIndexingInfo', $data) && $data['schemaIndexingInfo'] !== null) {
            $value_4 = $data['schemaIndexingInfo'];
            if (is_array($data['schemaIndexingInfo'])) {
                $value_4 = $this->denormalizer->denormalize($data['schemaIndexingInfo'], \PicturePark\API\Model\SchemaIndexingInfo::class, 'json', $context);
            }
            $object->schemaIndexingInfo = $value_4;
            unset($data['schemaIndexingInfo']);
        }
        elseif (\array_key_exists('schemaIndexingInfo', $data) && $data['schemaIndexingInfo'] === null) {
            $object->schemaIndexingInfo = null;
            unset($data['schemaIndexingInfo']);
        }
        if (\array_key_exists('maximumItems', $data) && $data['maximumItems'] !== null) {
            $object->maximumItems = $data['maximumItems'];
            unset($data['maximumItems']);
        }
        elseif (\array_key_exists('maximumItems', $data) && $data['maximumItems'] === null) {
            $object->maximumItems = null;
            unset($data['maximumItems']);
        }
        if (\array_key_exists('minimumItems', $data) && $data['minimumItems'] !== null) {
            $object->minimumItems = $data['minimumItems'];
            unset($data['minimumItems']);
        }
        elseif (\array_key_exists('minimumItems', $data) && $data['minimumItems'] === null) {
            $object->minimumItems = null;
            unset($data['minimumItems']);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $value_5 = $data['filter'];
            if (is_array($data['filter']) and \array_key_exists('kind', $data['filter'])) {
                $value_5 = $this->denormalizer->denormalize($data['filter'], \PicturePark\API\Model\FilterBase::class, 'json', $context);
            }
            $object->filter = $value_5;
            unset($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->filter = null;
            unset($data['filter']);
        }
        if (\array_key_exists('listItemCreateTemplate', $data) && $data['listItemCreateTemplate'] !== null) {
            $object->listItemCreateTemplate = $data['listItemCreateTemplate'];
            unset($data['listItemCreateTemplate']);
        }
        elseif (\array_key_exists('listItemCreateTemplate', $data) && $data['listItemCreateTemplate'] === null) {
            $object->listItemCreateTemplate = null;
            unset($data['listItemCreateTemplate']);
        }
        if (\array_key_exists('viewModeDisplayPatternType', $data)) {
            $value_6 = $data['viewModeDisplayPatternType'];
            if (is_string($data['viewModeDisplayPatternType'])) {
                $value_6 = $data['viewModeDisplayPatternType'];
            }
            $object->viewModeDisplayPatternType = $value_6;
            unset($data['viewModeDisplayPatternType']);
        }
        foreach ($data as $key_2 => $value_7) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_7;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
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
        $dataArray['schemaId'] = $data->schemaId ?? null;
        if (array_key_exists('schemaIndexingInfo', get_object_vars($data)) && null !== ($data->schemaIndexingInfo ?? null)) {
            $value_4 = $data->schemaIndexingInfo ?? null;
            if (is_object($data->schemaIndexingInfo ?? null)) {
                $value_4 = ($data->schemaIndexingInfo ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->schemaIndexingInfo ?? null, 'json', $context));
            }
            $dataArray['schemaIndexingInfo'] = $value_4;
        }
        if (array_key_exists('maximumItems', get_object_vars($data)) && null !== ($data->maximumItems ?? null)) {
            $dataArray['maximumItems'] = $data->maximumItems ?? null;
        }
        if (array_key_exists('minimumItems', get_object_vars($data)) && null !== ($data->minimumItems ?? null)) {
            $dataArray['minimumItems'] = $data->minimumItems ?? null;
        }
        if (array_key_exists('filter', get_object_vars($data)) && null !== ($data->filter ?? null)) {
            $value_5 = $data->filter ?? null;
            if (is_object($data->filter ?? null)) {
                $value_5 = ($data->filter ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->filter ?? null, 'json', $context));
            }
            $dataArray['filter'] = $value_5;
        }
        if (array_key_exists('listItemCreateTemplate', get_object_vars($data)) && null !== ($data->listItemCreateTemplate ?? null)) {
            $dataArray['listItemCreateTemplate'] = $data->listItemCreateTemplate ?? null;
        }
        if (array_key_exists('viewModeDisplayPatternType', get_object_vars($data)) && null !== ($data->viewModeDisplayPatternType ?? null)) {
            $value_6 = $data->viewModeDisplayPatternType ?? null;
            if (is_string($data->viewModeDisplayPatternType ?? null)) {
                $value_6 = $data->viewModeDisplayPatternType ?? null;
            }
            $dataArray['viewModeDisplayPatternType'] = $value_6;
        }
        foreach ($data->additionalPropertyEntries() as $key_2 => $value_7) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_7;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\FieldMultiTagbox::class => false];
    }
}