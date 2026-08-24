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
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('fieldId', $data) && $data['fieldId'] !== null) {
            $object->setFieldId($data['fieldId']);
        }
        elseif (\array_key_exists('fieldId', $data) && $data['fieldId'] === null) {
            $object->setFieldId(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('indexFields', $data) && $data['indexFields'] !== null) {
            $values = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['indexFields'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setIndexFields($values);
        }
        elseif (\array_key_exists('indexFields', $data) && $data['indexFields'] === null) {
            $object->setIndexFields(null);
        }
        if (\array_key_exists('simpleSearchFields', $data) && $data['simpleSearchFields'] !== null) {
            $values_1 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['simpleSearchFields'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setSimpleSearchFields($values_1);
        }
        elseif (\array_key_exists('simpleSearchFields', $data) && $data['simpleSearchFields'] === null) {
            $object->setSimpleSearchFields(null);
        }
        if (\array_key_exists('boost', $data)) {
            $object->setBoost($data['boost']);
        }
        if (\array_key_exists('ignoreForSearch', $data)) {
            $object->setIgnoreForSearch($data['ignoreForSearch']);
        }
        if (\array_key_exists('nestedPath', $data) && $data['nestedPath'] !== null) {
            $object->setNestedPath($data['nestedPath']);
        }
        elseif (\array_key_exists('nestedPath', $data) && $data['nestedPath'] === null) {
            $object->setNestedPath(null);
        }
        if (\array_key_exists('sortField', $data) && $data['sortField'] !== null) {
            $object->setSortField($data['sortField']);
        }
        elseif (\array_key_exists('sortField', $data) && $data['sortField'] === null) {
            $object->setSortField(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('fieldId') && null !== $data->getFieldId()) {
            $dataArray['fieldId'] = $data->getFieldId();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('indexFields') && null !== $data->getIndexFields()) {
            $values = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->getIndexFields() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['indexFields'] = $values;
        }
        if ($data->isInitialized('simpleSearchFields') && null !== $data->getSimpleSearchFields()) {
            $values_1 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->getSimpleSearchFields() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $dataArray['simpleSearchFields'] = $values_1;
        }
        $dataArray['boost'] = $data->getBoost();
        $dataArray['ignoreForSearch'] = $data->getIgnoreForSearch();
        if ($data->isInitialized('nestedPath') && null !== $data->getNestedPath()) {
            $dataArray['nestedPath'] = $data->getNestedPath();
        }
        if ($data->isInitialized('sortField') && null !== $data->getSortField()) {
            $dataArray['sortField'] = $data->getSortField();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\IndexField::class => false];
    }
}