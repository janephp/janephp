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
class ContentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ContentDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ContentDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ContentDetail();
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
        if (\array_key_exists('brokenReferenceIds', $data) && $data['brokenReferenceIds'] !== null) {
            $values_1 = [];
            foreach ($data['brokenReferenceIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setBrokenReferenceIds($values_1);
        }
        elseif (\array_key_exists('brokenReferenceIds', $data) && $data['brokenReferenceIds'] === null) {
            $object->setBrokenReferenceIds(null);
        }
        if (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] !== null) {
            $values_2 = [];
            foreach ($data['brokenIndirectReferenceIds'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setBrokenIndirectReferenceIds($values_2);
        }
        elseif (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] === null) {
            $object->setBrokenIndirectReferenceIds(null);
        }
        if (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] !== null) {
            $values_3 = [];
            foreach ($data['brokenRelationTargetIds'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setBrokenRelationTargetIds($values_3);
        }
        elseif (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] === null) {
            $object->setBrokenRelationTargetIds(null);
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $values_4 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['content'] as $key => $value_4) {
                $values_4[$key] = $value_4;
            }
            $object->setContent($values_4);
        }
        elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->setContent(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_5 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['metadata'] as $key_1 => $value_5) {
                $values_5[$key_1] = $value_5;
            }
            $object->setMetadata($values_5);
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('contentPermissionSetIds', $data) && $data['contentPermissionSetIds'] !== null) {
            $values_6 = [];
            foreach ($data['contentPermissionSetIds'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setContentPermissionSetIds($values_6);
        }
        elseif (\array_key_exists('contentPermissionSetIds', $data) && $data['contentPermissionSetIds'] === null) {
            $object->setContentPermissionSetIds(null);
        }
        if (\array_key_exists('outputs', $data) && $data['outputs'] !== null) {
            $values_7 = [];
            foreach ($data['outputs'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \PicturePark\API\Model\Output::class, 'json', $context);
            }
            $object->setOutputs($values_7);
        }
        elseif (\array_key_exists('outputs', $data) && $data['outputs'] === null) {
            $object->setOutputs(null);
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $value_8 = $data['audit'];
            if (is_array($data['audit']) and \array_key_exists('creationDate', $data['audit']) and \array_key_exists('modificationDate', $data['audit'])) {
                $value_8 = $this->denormalizer->denormalize($data['audit'], \PicturePark\API\Model\UserAuditDetail::class, 'json', $context);
            }
            $object->setAudit($value_8);
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->setAudit(null);
        }
        if (\array_key_exists('ownerTokenId', $data)) {
            $object->setOwnerTokenId($data['ownerTokenId']);
        }
        if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
            $value_9 = $data['owner'];
            if (is_array($data['owner']) and \array_key_exists('emailAddress', $data['owner']) and \array_key_exists('isDeleted', $data['owner'])) {
                $value_9 = $this->denormalizer->denormalize($data['owner'], \PicturePark\API\Model\User::class, 'json', $context);
            }
            $object->setOwner($value_9);
        }
        elseif (\array_key_exists('owner', $data) && $data['owner'] === null) {
            $object->setOwner(null);
        }
        if (\array_key_exists('contentType', $data)) {
            $value_10 = $data['contentType'];
            if (is_string($data['contentType'])) {
                $value_10 = $data['contentType'];
            }
            $object->setContentType($value_10);
        }
        if (\array_key_exists('displayValues', $data) && $data['displayValues'] !== null) {
            $value_11 = $data['displayValues'];
            if (is_array($data['displayValues']) && $this->isOnlyNumericKeys($data['displayValues'])) {
                $values_8 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['displayValues'] as $key_2 => $value_12) {
                    $values_8[$key_2] = $value_12;
                }
                $value_11 = $values_8;
            }
            $object->setDisplayValues($value_11);
        }
        elseif (\array_key_exists('displayValues', $data) && $data['displayValues'] === null) {
            $object->setDisplayValues(null);
        }
        if (\array_key_exists('lifeCycle', $data)) {
            $value_13 = $data['lifeCycle'];
            if (is_string($data['lifeCycle'])) {
                $value_13 = $data['lifeCycle'];
            }
            $object->setLifeCycle($value_13);
        }
        if (\array_key_exists('contentRights', $data) && $data['contentRights'] !== null) {
            $values_9 = [];
            foreach ($data['contentRights'] as $value_14) {
                $values_9[] = $value_14;
            }
            $object->setContentRights($values_9);
        }
        elseif (\array_key_exists('contentRights', $data) && $data['contentRights'] === null) {
            $object->setContentRights(null);
        }
        if (\array_key_exists('activity', $data) && $data['activity'] !== null) {
            $value_15 = $data['activity'];
            if (is_array($data['activity'])) {
                $value_15 = $this->denormalizer->denormalize($data['activity'], \PicturePark\API\Model\Activity::class, 'json', $context);
            }
            $object->setActivity($value_15);
        }
        elseif (\array_key_exists('activity', $data) && $data['activity'] === null) {
            $object->setActivity(null);
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
        if ($data->isInitialized('brokenReferenceIds') && null !== $data->getBrokenReferenceIds()) {
            $values_1 = [];
            foreach ($data->getBrokenReferenceIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['brokenReferenceIds'] = $values_1;
        }
        if ($data->isInitialized('brokenIndirectReferenceIds') && null !== $data->getBrokenIndirectReferenceIds()) {
            $values_2 = [];
            foreach ($data->getBrokenIndirectReferenceIds() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['brokenIndirectReferenceIds'] = $values_2;
        }
        if ($data->isInitialized('brokenRelationTargetIds') && null !== $data->getBrokenRelationTargetIds()) {
            $values_3 = [];
            foreach ($data->getBrokenRelationTargetIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['brokenRelationTargetIds'] = $values_3;
        }
        if ($data->isInitialized('content') && null !== $data->getContent()) {
            $values_4 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->getContent() as $key => $value_4) {
                $values_4[$key] = $value_4;
            }
            $dataArray['content'] = $values_4;
        }
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $values_5 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->getMetadata() as $key_1 => $value_5) {
                $values_5[$key_1] = $value_5;
            }
            $dataArray['metadata'] = $values_5;
        }
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('contentPermissionSetIds') && null !== $data->getContentPermissionSetIds()) {
            $values_6 = [];
            foreach ($data->getContentPermissionSetIds() as $value_6) {
                $values_6[] = $value_6;
            }
            $dataArray['contentPermissionSetIds'] = $values_6;
        }
        if ($data->isInitialized('outputs') && null !== $data->getOutputs()) {
            $values_7 = [];
            foreach ($data->getOutputs() as $value_7) {
                $values_7[] = $value_7 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_7, 'json', $context));
            }
            $dataArray['outputs'] = $values_7;
        }
        if ($data->isInitialized('audit') && null !== $data->getAudit()) {
            $value_8 = $data->getAudit();
            if (is_object($data->getAudit())) {
                $value_8 = $data->getAudit() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getAudit(), 'json', $context));
            }
            $dataArray['audit'] = $value_8;
        }
        $dataArray['ownerTokenId'] = $data->getOwnerTokenId();
        if ($data->isInitialized('owner') && null !== $data->getOwner()) {
            $value_9 = $data->getOwner();
            if (is_object($data->getOwner())) {
                $value_9 = $data->getOwner() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getOwner(), 'json', $context));
            }
            $dataArray['owner'] = $value_9;
        }
        $value_10 = $data->getContentType();
        if (is_string($data->getContentType())) {
            $value_10 = $data->getContentType();
        }
        $dataArray['contentType'] = $value_10;
        if ($data->isInitialized('displayValues') && null !== $data->getDisplayValues()) {
            $value_11 = $data->getDisplayValues();
            if (is_object($data->getDisplayValues())) {
                $values_8 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->getDisplayValues() as $key_2 => $value_12) {
                    $values_8[$key_2] = $value_12;
                }
                $value_11 = $values_8;
            }
            $dataArray['displayValues'] = $value_11;
        }
        $value_13 = $data->getLifeCycle();
        if (is_string($data->getLifeCycle())) {
            $value_13 = $data->getLifeCycle();
        }
        $dataArray['lifeCycle'] = $value_13;
        if ($data->isInitialized('contentRights') && null !== $data->getContentRights()) {
            $values_9 = [];
            foreach ($data->getContentRights() as $value_14) {
                $values_9[] = $value_14;
            }
            $dataArray['contentRights'] = $values_9;
        }
        if ($data->isInitialized('activity') && null !== $data->getActivity()) {
            $value_15 = $data->getActivity();
            if (is_object($data->getActivity())) {
                $value_15 = $data->getActivity() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getActivity(), 'json', $context));
            }
            $dataArray['activity'] = $value_15;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ContentDetail::class => false];
    }
}