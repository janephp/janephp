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
            $object->contentSchemaId = $data['contentSchemaId'];
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
        if (\array_key_exists('content', $data)) {
            $values_1 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['content'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->content = $values_1;
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
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('outputs', $data)) {
            $values_3 = [];
            foreach ($data['outputs'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \PicturePark\API\Model\ShareOutputBase::class, 'json', $context);
            }
            $object->outputs = $values_3;
        }
        if (\array_key_exists('contentType', $data)) {
            $value_4 = $data['contentType'];
            if (is_string($data['contentType'])) {
                $value_4 = $data['contentType'];
            }
            $object->contentType = $value_4;
        }
        if (\array_key_exists('displayValues', $data)) {
            $value_5 = $data['displayValues'];
            if (is_array($data['displayValues']) && $this->isOnlyNumericKeys($data['displayValues'])) {
                $values_4 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['displayValues'] as $key_2 => $value_6) {
                    $values_4[$key_2] = $value_6;
                }
                $value_5 = $values_4;
            }
            $object->displayValues = $value_5;
        }
        if (\array_key_exists('iconUrl', $data) && $data['iconUrl'] !== null) {
            $object->iconUrl = $data['iconUrl'];
        }
        elseif (\array_key_exists('iconUrl', $data) && $data['iconUrl'] === null) {
            $object->iconUrl = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['contentSchemaId'] = $data->contentSchemaId ?? null;
        if (array_key_exists('layerSchemaIds', get_object_vars($data)) && null !== ($data->layerSchemaIds ?? null)) {
            $values = [];
            foreach ($data->layerSchemaIds ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['layerSchemaIds'] = $values;
        }
        $values_1 = new \PicturePark\API\Runtime\JsonObject();
        foreach ($data->content ?? null as $key => $value_1) {
            $values_1[$key] = $value_1;
        }
        $dataArray['content'] = $values_1;
        if (array_key_exists('metadata', get_object_vars($data)) && null !== ($data->metadata ?? null)) {
            $values_2 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->metadata ?? null as $key_1 => $value_2) {
                $values_2[$key_1] = $value_2;
            }
            $dataArray['metadata'] = $values_2;
        }
        $dataArray['id'] = $data->id ?? null;
        $values_3 = [];
        foreach ($data->outputs ?? null as $value_3) {
            $values_3[] = $value_3 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
        }
        $dataArray['outputs'] = $values_3;
        $value_4 = $data->contentType ?? null;
        if (is_string($data->contentType ?? null)) {
            $value_4 = $data->contentType ?? null;
        }
        $dataArray['contentType'] = $value_4;
        $value_5 = $data->displayValues ?? null;
        if (is_object($data->displayValues ?? null)) {
            $values_4 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->displayValues ?? null as $key_2 => $value_6) {
                $values_4[$key_2] = $value_6;
            }
            $value_5 = $values_4;
        }
        $dataArray['displayValues'] = $value_5;
        if (array_key_exists('iconUrl', get_object_vars($data)) && null !== ($data->iconUrl ?? null)) {
            $dataArray['iconUrl'] = $data->iconUrl ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ShareContentDetail::class => false];
    }
}