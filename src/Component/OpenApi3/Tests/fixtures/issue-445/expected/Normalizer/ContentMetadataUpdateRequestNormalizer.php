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
class ContentMetadataUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ContentMetadataUpdateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ContentMetadataUpdateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ContentMetadataUpdateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
            $values = [];
            foreach ($data['layerSchemaIds'] as $value) {
                $values[] = $value;
            }
            $object->layerSchemaIds = $values;
        }
        elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
            $object->layerSchemaIds = null;
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $values_1 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['content'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->content = $values_1;
        }
        elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->content = null;
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_2 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['metadata'] as $key_1 => $value_2) {
                $values_2[$key_1] = $value_2;
            }
            $object->metadata = $values_2;
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->metadata = null;
        }
        if (\array_key_exists('layerSchemasUpdateOptions', $data)) {
            $value_3 = $data['layerSchemasUpdateOptions'];
            if (is_string($data['layerSchemasUpdateOptions'])) {
                $value_3 = $data['layerSchemasUpdateOptions'];
            }
            $object->layerSchemasUpdateOptions = $value_3;
        }
        if (\array_key_exists('layerFieldsUpdateOptions', $data)) {
            $value_4 = $data['layerFieldsUpdateOptions'];
            if (is_string($data['layerFieldsUpdateOptions'])) {
                $value_4 = $data['layerFieldsUpdateOptions'];
            }
            $object->layerFieldsUpdateOptions = $value_4;
        }
        if (\array_key_exists('contentFieldsUpdateOptions', $data)) {
            $value_5 = $data['contentFieldsUpdateOptions'];
            if (is_string($data['contentFieldsUpdateOptions'])) {
                $value_5 = $data['contentFieldsUpdateOptions'];
            }
            $object->contentFieldsUpdateOptions = $value_5;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('layerSchemaIds', get_object_vars($data)) && null !== ($data->layerSchemaIds ?? null)) {
            $values = [];
            foreach ($data->layerSchemaIds ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['layerSchemaIds'] = $values;
        }
        if (array_key_exists('content', get_object_vars($data)) && null !== ($data->content ?? null)) {
            $values_1 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->content ?? null as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $dataArray['content'] = $values_1;
        }
        if (array_key_exists('metadata', get_object_vars($data)) && null !== ($data->metadata ?? null)) {
            $values_2 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->metadata ?? null as $key_1 => $value_2) {
                $values_2[$key_1] = $value_2;
            }
            $dataArray['metadata'] = $values_2;
        }
        $value_3 = $data->layerSchemasUpdateOptions ?? null;
        if (is_string($data->layerSchemasUpdateOptions ?? null)) {
            $value_3 = $data->layerSchemasUpdateOptions ?? null;
        }
        $dataArray['layerSchemasUpdateOptions'] = $value_3;
        $value_4 = $data->layerFieldsUpdateOptions ?? null;
        if (is_string($data->layerFieldsUpdateOptions ?? null)) {
            $value_4 = $data->layerFieldsUpdateOptions ?? null;
        }
        $dataArray['layerFieldsUpdateOptions'] = $value_4;
        $value_5 = $data->contentFieldsUpdateOptions ?? null;
        if (is_string($data->contentFieldsUpdateOptions ?? null)) {
            $value_5 = $data->contentFieldsUpdateOptions ?? null;
        }
        $dataArray['contentFieldsUpdateOptions'] = $value_5;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ContentMetadataUpdateRequest::class => false];
    }
}