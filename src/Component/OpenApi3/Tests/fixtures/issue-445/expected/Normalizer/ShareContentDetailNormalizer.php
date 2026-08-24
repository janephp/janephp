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
class ShareContentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ShareContentDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ShareContentDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ShareContentDetail();
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
        if (\array_key_exists('content', $data)) {
            $values_1 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['content'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setContent($values_1);
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
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('outputs', $data)) {
            $values_3 = [];
            foreach ($data['outputs'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \PicturePark\API\Model\ShareOutputBase::class, 'json', $context);
            }
            $object->setOutputs($values_3);
        }
        if (\array_key_exists('contentType', $data)) {
            $object->setContentType($data['contentType']);
        }
        if (\array_key_exists('displayValues', $data)) {
            $object->setDisplayValues($data['displayValues']);
        }
        if (\array_key_exists('iconUrl', $data) && $data['iconUrl'] !== null) {
            $object->setIconUrl($data['iconUrl']);
        }
        elseif (\array_key_exists('iconUrl', $data) && $data['iconUrl'] === null) {
            $object->setIconUrl(null);
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
        $values_1 = new \PicturePark\API\Runtime\JsonObject();
        foreach ($data->getContent() as $key => $value_1) {
            $values_1[$key] = $value_1;
        }
        $dataArray['content'] = $values_1;
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $values_2 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->getMetadata() as $key_1 => $value_2) {
                $values_2[$key_1] = $value_2;
            }
            $dataArray['metadata'] = $values_2;
        }
        $dataArray['id'] = $data->getId();
        $values_3 = [];
        foreach ($data->getOutputs() as $value_3) {
            $values_3[] = $value_3 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
        }
        $dataArray['outputs'] = $values_3;
        $dataArray['contentType'] = $data->getContentType();
        $dataArray['displayValues'] = $data->getDisplayValues();
        if ($data->isInitialized('iconUrl') && null !== $data->getIconUrl()) {
            $dataArray['iconUrl'] = $data->getIconUrl();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ShareContentDetail::class => false];
    }
}