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
class ContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\Content::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\Content::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\Content();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $value = $data['audit'];
            if (is_array($data['audit']) and \array_key_exists('creationDate', $data['audit']) and \array_key_exists('modificationDate', $data['audit'])) {
                $value = $this->denormalizer->denormalize($data['audit'], \PicturePark\API\Model\UserAudit::class, 'json', $context);
            }
            $object->setAudit($value);
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->setAudit(null);
        }
        if (\array_key_exists('contentSchemaId', $data)) {
            $object->setContentSchemaId($data['contentSchemaId']);
        }
        if (\array_key_exists('contentType', $data)) {
            $value_1 = $data['contentType'];
            if (is_string($data['contentType'])) {
                $value_1 = $data['contentType'];
            }
            $object->setContentType($value_1);
        }
        if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
            $values = [];
            foreach ($data['layerSchemaIds'] as $value_2) {
                $values[] = $value_2;
            }
            $object->setLayerSchemaIds($values);
        }
        elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
            $object->setLayerSchemaIds(null);
        }
        if (\array_key_exists('displayValues', $data)) {
            $values_1 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['displayValues'] as $key => $value_3) {
                $values_1[$key] = $value_3;
            }
            $object->setDisplayValues($values_1);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('brokenReferenceIds', $data) && $data['brokenReferenceIds'] !== null) {
            $values_2 = [];
            foreach ($data['brokenReferenceIds'] as $value_4) {
                $values_2[] = $value_4;
            }
            $object->setBrokenReferenceIds($values_2);
        }
        elseif (\array_key_exists('brokenReferenceIds', $data) && $data['brokenReferenceIds'] === null) {
            $object->setBrokenReferenceIds(null);
        }
        if (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] !== null) {
            $values_3 = [];
            foreach ($data['brokenIndirectReferenceIds'] as $value_5) {
                $values_3[] = $value_5;
            }
            $object->setBrokenIndirectReferenceIds($values_3);
        }
        elseif (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] === null) {
            $object->setBrokenIndirectReferenceIds(null);
        }
        if (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] !== null) {
            $values_4 = [];
            foreach ($data['brokenRelationTargetIds'] as $value_6) {
                $values_4[] = $value_6;
            }
            $object->setBrokenRelationTargetIds($values_4);
        }
        elseif (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] === null) {
            $object->setBrokenRelationTargetIds(null);
        }
        if (\array_key_exists('lifeCycle', $data)) {
            $value_7 = $data['lifeCycle'];
            if (is_string($data['lifeCycle'])) {
                $value_7 = $data['lifeCycle'];
            }
            $object->setLifeCycle($value_7);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('audit') && null !== $data->getAudit()) {
            $value = $data->getAudit();
            if (is_object($data->getAudit())) {
                $value = $data->getAudit() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getAudit(), 'json', $context));
            }
            $dataArray['audit'] = $value;
        }
        $dataArray['contentSchemaId'] = $data->getContentSchemaId();
        $value_1 = $data->getContentType();
        if (is_string($data->getContentType())) {
            $value_1 = $data->getContentType();
        }
        $dataArray['contentType'] = $value_1;
        if ($data->isInitialized('layerSchemaIds') && null !== $data->getLayerSchemaIds()) {
            $values = [];
            foreach ($data->getLayerSchemaIds() as $value_2) {
                $values[] = $value_2;
            }
            $dataArray['layerSchemaIds'] = $values;
        }
        $values_1 = new \PicturePark\API\Runtime\JsonObject();
        foreach ($data->getDisplayValues() as $key => $value_3) {
            $values_1[$key] = $value_3;
        }
        $dataArray['displayValues'] = $values_1;
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('brokenReferenceIds') && null !== $data->getBrokenReferenceIds()) {
            $values_2 = [];
            foreach ($data->getBrokenReferenceIds() as $value_4) {
                $values_2[] = $value_4;
            }
            $dataArray['brokenReferenceIds'] = $values_2;
        }
        if ($data->isInitialized('brokenIndirectReferenceIds') && null !== $data->getBrokenIndirectReferenceIds()) {
            $values_3 = [];
            foreach ($data->getBrokenIndirectReferenceIds() as $value_5) {
                $values_3[] = $value_5;
            }
            $dataArray['brokenIndirectReferenceIds'] = $values_3;
        }
        if ($data->isInitialized('brokenRelationTargetIds') && null !== $data->getBrokenRelationTargetIds()) {
            $values_4 = [];
            foreach ($data->getBrokenRelationTargetIds() as $value_6) {
                $values_4[] = $value_6;
            }
            $dataArray['brokenRelationTargetIds'] = $values_4;
        }
        $value_7 = $data->getLifeCycle();
        if (is_string($data->getLifeCycle())) {
            $value_7 = $data->getLifeCycle();
        }
        $dataArray['lifeCycle'] = $value_7;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\Content::class => false];
    }
}