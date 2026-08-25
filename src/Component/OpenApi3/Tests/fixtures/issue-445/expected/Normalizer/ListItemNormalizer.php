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
class ListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ListItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ListItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ListItem();
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
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('contentSchemaId', $data) && $data['contentSchemaId'] !== null) {
            $object->setContentSchemaId($data['contentSchemaId']);
        }
        elseif (\array_key_exists('contentSchemaId', $data) && $data['contentSchemaId'] === null) {
            $object->setContentSchemaId(null);
        }
        if (\array_key_exists('displayValues', $data) && $data['displayValues'] !== null) {
            $value_1 = $data['displayValues'];
            if (is_array($data['displayValues']) && $this->isOnlyNumericKeys($data['displayValues'])) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['displayValues'] as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            }
            $object->setDisplayValues($value_1);
        }
        elseif (\array_key_exists('displayValues', $data) && $data['displayValues'] === null) {
            $object->setDisplayValues(null);
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $values_1 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['content'] as $key_1 => $value_3) {
                $values_1[$key_1] = $value_3;
            }
            $object->setContent($values_1);
        }
        elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->setContent(null);
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
        if (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] !== null) {
            $values_3 = [];
            foreach ($data['brokenRelationTargetIds'] as $value_5) {
                $values_3[] = $value_5;
            }
            $object->setBrokenRelationTargetIds($values_3);
        }
        elseif (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] === null) {
            $object->setBrokenRelationTargetIds(null);
        }
        if (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] !== null) {
            $values_4 = [];
            foreach ($data['brokenIndirectReferenceIds'] as $value_6) {
                $values_4[] = $value_6;
            }
            $object->setBrokenIndirectReferenceIds($values_4);
        }
        elseif (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] === null) {
            $object->setBrokenIndirectReferenceIds(null);
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
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('contentSchemaId') && null !== $data->getContentSchemaId()) {
            $dataArray['contentSchemaId'] = $data->getContentSchemaId();
        }
        if ($data->isInitialized('displayValues') && null !== $data->getDisplayValues()) {
            $value_1 = $data->getDisplayValues();
            if (is_object($data->getDisplayValues())) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->getDisplayValues() as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            }
            $dataArray['displayValues'] = $value_1;
        }
        if ($data->isInitialized('content') && null !== $data->getContent()) {
            $values_1 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->getContent() as $key_1 => $value_3) {
                $values_1[$key_1] = $value_3;
            }
            $dataArray['content'] = $values_1;
        }
        if ($data->isInitialized('brokenReferenceIds') && null !== $data->getBrokenReferenceIds()) {
            $values_2 = [];
            foreach ($data->getBrokenReferenceIds() as $value_4) {
                $values_2[] = $value_4;
            }
            $dataArray['brokenReferenceIds'] = $values_2;
        }
        if ($data->isInitialized('brokenRelationTargetIds') && null !== $data->getBrokenRelationTargetIds()) {
            $values_3 = [];
            foreach ($data->getBrokenRelationTargetIds() as $value_5) {
                $values_3[] = $value_5;
            }
            $dataArray['brokenRelationTargetIds'] = $values_3;
        }
        if ($data->isInitialized('brokenIndirectReferenceIds') && null !== $data->getBrokenIndirectReferenceIds()) {
            $values_4 = [];
            foreach ($data->getBrokenIndirectReferenceIds() as $value_6) {
                $values_4[] = $value_6;
            }
            $dataArray['brokenIndirectReferenceIds'] = $values_4;
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
        return [\PicturePark\API\Model\ListItem::class => false];
    }
}