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
class ContentMetadataUpdateItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ContentMetadataUpdateItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ContentMetadataUpdateItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ContentMetadataUpdateItem();
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
            $object->setLayerSchemaIds($values);
            unset($data['layerSchemaIds']);
        }
        elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
            $object->setLayerSchemaIds(null);
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $values_1 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['content'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setContent($values_1);
            unset($data['content']);
        }
        elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->setContent(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_2 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['metadata'] as $key_1 => $value_2) {
                $values_2[$key_1] = $value_2;
            }
            $object->setMetadata($values_2);
            unset($data['metadata']);
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        if (\array_key_exists('layerSchemasUpdateOptions', $data)) {
            $object->setLayerSchemasUpdateOptions($data['layerSchemasUpdateOptions']);
            unset($data['layerSchemasUpdateOptions']);
        }
        if (\array_key_exists('layerFieldsUpdateOptions', $data)) {
            $object->setLayerFieldsUpdateOptions($data['layerFieldsUpdateOptions']);
            unset($data['layerFieldsUpdateOptions']);
        }
        if (\array_key_exists('contentFieldsUpdateOptions', $data)) {
            $object->setContentFieldsUpdateOptions($data['contentFieldsUpdateOptions']);
            unset($data['contentFieldsUpdateOptions']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        foreach ($data as $key_2 => $value_3) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('layerSchemaIds') && null !== $data->getLayerSchemaIds()) {
            $values = [];
            foreach ($data->getLayerSchemaIds() as $value) {
                $values[] = $value;
            }
            $dataArray['layerSchemaIds'] = $values;
        }
        if ($data->isInitialized('content') && null !== $data->getContent()) {
            $values_1 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->getContent() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $dataArray['content'] = $values_1;
        }
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $values_2 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->getMetadata() as $key_1 => $value_2) {
                $values_2[$key_1] = $value_2;
            }
            $dataArray['metadata'] = $values_2;
        }
        $dataArray['layerSchemasUpdateOptions'] = $data->getLayerSchemasUpdateOptions();
        $dataArray['layerFieldsUpdateOptions'] = $data->getLayerFieldsUpdateOptions();
        $dataArray['contentFieldsUpdateOptions'] = $data->getContentFieldsUpdateOptions();
        $dataArray['id'] = $data->getId();
        foreach ($data as $key_2 => $value_3) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ContentMetadataUpdateItem::class => false];
    }
}