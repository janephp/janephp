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
class IndexFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\IndexField::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\IndexField::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\IndexField();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('boost', $data) && \is_int($data['boost'])) {
            $data['boost'] = (float) $data['boost'];
        }
        if (\array_key_exists('ignoreForSearch', $data) && \is_int($data['ignoreForSearch'])) {
            $data['ignoreForSearch'] = (bool) $data['ignoreForSearch'];
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->id = $data['id'];
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->id = null;
        }
        if (\array_key_exists('fieldId', $data) && $data['fieldId'] !== null) {
            $object->fieldId = $data['fieldId'];
        }
        elseif (\array_key_exists('fieldId', $data) && $data['fieldId'] === null) {
            $object->fieldId = null;
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->type = $data['type'];
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->type = null;
        }
        if (\array_key_exists('indexFields', $data) && $data['indexFields'] !== null) {
            $values = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['indexFields'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->indexFields = $values;
        }
        elseif (\array_key_exists('indexFields', $data) && $data['indexFields'] === null) {
            $object->indexFields = null;
        }
        if (\array_key_exists('simpleSearchFields', $data) && $data['simpleSearchFields'] !== null) {
            $values_1 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['simpleSearchFields'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->simpleSearchFields = $values_1;
        }
        elseif (\array_key_exists('simpleSearchFields', $data) && $data['simpleSearchFields'] === null) {
            $object->simpleSearchFields = null;
        }
        if (\array_key_exists('boost', $data)) {
            $object->boost = $data['boost'];
        }
        if (\array_key_exists('ignoreForSearch', $data)) {
            $object->ignoreForSearch = $data['ignoreForSearch'];
        }
        if (\array_key_exists('nestedPath', $data) && $data['nestedPath'] !== null) {
            $object->nestedPath = $data['nestedPath'];
        }
        elseif (\array_key_exists('nestedPath', $data) && $data['nestedPath'] === null) {
            $object->nestedPath = null;
        }
        if (\array_key_exists('sortField', $data) && $data['sortField'] !== null) {
            $object->sortField = $data['sortField'];
        }
        elseif (\array_key_exists('sortField', $data) && $data['sortField'] === null) {
            $object->sortField = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('fieldId', get_object_vars($data)) && null !== ($data->fieldId ?? null)) {
            $dataArray['fieldId'] = $data->fieldId ?? null;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type ?? null;
        }
        if (array_key_exists('indexFields', get_object_vars($data)) && null !== ($data->indexFields ?? null)) {
            $values = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->indexFields ?? null as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['indexFields'] = $values;
        }
        if (array_key_exists('simpleSearchFields', get_object_vars($data)) && null !== ($data->simpleSearchFields ?? null)) {
            $values_1 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->simpleSearchFields ?? null as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $dataArray['simpleSearchFields'] = $values_1;
        }
        $dataArray['boost'] = $data->boost ?? null;
        $dataArray['ignoreForSearch'] = $data->ignoreForSearch ?? null;
        if (array_key_exists('nestedPath', get_object_vars($data)) && null !== ($data->nestedPath ?? null)) {
            $dataArray['nestedPath'] = $data->nestedPath ?? null;
        }
        if (array_key_exists('sortField', get_object_vars($data)) && null !== ($data->sortField ?? null)) {
            $dataArray['sortField'] = $data->sortField ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\IndexField::class => false];
    }
}