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
        if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
            $values_3 = [];
            foreach ($data['layerSchemaIds'] as $value_5) {
                $values_3[] = $value_5;
            }
            $object->layerSchemaIds = $values_3;
        }
        elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
            $object->layerSchemaIds = null;
        }
        if (\array_key_exists('fieldCount', $data)) {
            $object->fieldCount = $data['fieldCount'];
        }
        if (\array_key_exists('childCount', $data)) {
            $object->childCount = $data['childCount'];
        }
        if (\array_key_exists('level', $data)) {
            $object->level = $data['level'];
        }
        if (\array_key_exists('system', $data)) {
            $object->system = $data['system'];
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
        if (array_key_exists('layerSchemaIds', get_object_vars($data)) && null !== ($data->layerSchemaIds ?? null)) {
            $values_3 = [];
            foreach ($data->layerSchemaIds ?? null as $value_5) {
                $values_3[] = $value_5;
            }
            $dataArray['layerSchemaIds'] = $values_3;
        }
        $dataArray['fieldCount'] = $data->fieldCount ?? null;
        $dataArray['childCount'] = $data->childCount ?? null;
        $dataArray['level'] = $data->level ?? null;
        $dataArray['system'] = $data->system ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\Schema::class => false];
    }
}