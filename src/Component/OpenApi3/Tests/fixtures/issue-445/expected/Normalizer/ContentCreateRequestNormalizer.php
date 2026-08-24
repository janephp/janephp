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
class ContentCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ContentCreateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ContentCreateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ContentCreateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('contentSchemaId', $data)) {
            $object->setContentSchemaId($data['contentSchemaId']);
        }
        if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
            $values = [];
            foreach ($data['layerSchemaIds'] as $value) {
                $values[] = $value;
            }
            $object->setLayerSchemaIds($values);
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
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        if (\array_key_exists('contentPermissionSetIds', $data) && $data['contentPermissionSetIds'] !== null) {
            $values_3 = [];
            foreach ($data['contentPermissionSetIds'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setContentPermissionSetIds($values_3);
        }
        elseif (\array_key_exists('contentPermissionSetIds', $data) && $data['contentPermissionSetIds'] === null) {
            $object->setContentPermissionSetIds(null);
        }
        if (\array_key_exists('requestId', $data) && $data['requestId'] !== null) {
            $object->setRequestId($data['requestId']);
        }
        elseif (\array_key_exists('requestId', $data) && $data['requestId'] === null) {
            $object->setRequestId(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['contentSchemaId'] = $data->getContentSchemaId();
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
        if ($data->isInitialized('contentPermissionSetIds') && null !== $data->getContentPermissionSetIds()) {
            $values_3 = [];
            foreach ($data->getContentPermissionSetIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['contentPermissionSetIds'] = $values_3;
        }
        if ($data->isInitialized('requestId') && null !== $data->getRequestId()) {
            $dataArray['requestId'] = $data->getRequestId();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ContentCreateRequest::class => false];
    }
}