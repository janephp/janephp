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
class SchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\Schema::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\Schema::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\Schema();
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
        if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
            $values_3 = [];
            foreach ($data['layerSchemaIds'] as $value_5) {
                $values_3[] = $value_5;
            }
            $object->setLayerSchemaIds($values_3);
        }
        elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
            $object->setLayerSchemaIds(null);
        }
        if (\array_key_exists('fieldCount', $data)) {
            $object->setFieldCount($data['fieldCount']);
        }
        if (\array_key_exists('childCount', $data)) {
            $object->setChildCount($data['childCount']);
        }
        if (\array_key_exists('level', $data)) {
            $object->setLevel($data['level']);
        }
        if (\array_key_exists('system', $data)) {
            $object->setSystem($data['system']);
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
        if ($data->isInitialized('layerSchemaIds') && null !== $data->getLayerSchemaIds()) {
            $values_3 = [];
            foreach ($data->getLayerSchemaIds() as $value_5) {
                $values_3[] = $value_5;
            }
            $dataArray['layerSchemaIds'] = $values_3;
        }
        $dataArray['fieldCount'] = $data->getFieldCount();
        $dataArray['childCount'] = $data->getChildCount();
        $dataArray['level'] = $data->getLevel();
        $dataArray['system'] = $data->getSystem();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\Schema::class => false];
    }
}