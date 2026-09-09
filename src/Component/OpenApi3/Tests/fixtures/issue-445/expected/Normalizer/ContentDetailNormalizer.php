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
            $object->contentSchemaId = $data['contentSchemaId'];
        }
        if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
            $values = [];
            foreach ($data['layerSchemaIds'] as $value) {
                $values[] = $value;
            }
            $object->layerSchemaIds = $values;
        }
        elseif (\array_key_exists('layerSchemaIds', $data)) {
            $object->layerSchemaIds = null;
        }
        if (\array_key_exists('brokenReferenceIds', $data) && $data['brokenReferenceIds'] !== null) {
            $values_1 = [];
            foreach ($data['brokenReferenceIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->brokenReferenceIds = $values_1;
        }
        elseif (\array_key_exists('brokenReferenceIds', $data)) {
            $object->brokenReferenceIds = null;
        }
        if (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] !== null) {
            $values_2 = [];
            foreach ($data['brokenIndirectReferenceIds'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->brokenIndirectReferenceIds = $values_2;
        }
        elseif (\array_key_exists('brokenIndirectReferenceIds', $data)) {
            $object->brokenIndirectReferenceIds = null;
        }
        if (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] !== null) {
            $values_3 = [];
            foreach ($data['brokenRelationTargetIds'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->brokenRelationTargetIds = $values_3;
        }
        elseif (\array_key_exists('brokenRelationTargetIds', $data)) {
            $object->brokenRelationTargetIds = null;
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $values_4 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['content'] as $key => $value_4) {
                $values_4[$key] = $value_4;
            }
            $object->content = $values_4;
        }
        elseif (\array_key_exists('content', $data)) {
            $object->content = null;
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_5 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['metadata'] as $key_1 => $value_5) {
                $values_5[$key_1] = $value_5;
            }
            $object->metadata = $values_5;
        }
        elseif (\array_key_exists('metadata', $data)) {
            $object->metadata = null;
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('contentPermissionSetIds', $data) && $data['contentPermissionSetIds'] !== null) {
            $values_6 = [];
            foreach ($data['contentPermissionSetIds'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->contentPermissionSetIds = $values_6;
        }
        elseif (\array_key_exists('contentPermissionSetIds', $data)) {
            $object->contentPermissionSetIds = null;
        }
        if (\array_key_exists('outputs', $data) && $data['outputs'] !== null) {
            $values_7 = [];
            foreach ($data['outputs'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \PicturePark\API\Model\Output::class, 'json', $context);
            }
            $object->outputs = $values_7;
        }
        elseif (\array_key_exists('outputs', $data)) {
            $object->outputs = null;
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $value_8 = $data['audit'];
            if (is_array($data['audit']) and \array_key_exists('creationDate', $data['audit']) and \array_key_exists('modificationDate', $data['audit'])) {
                $value_8 = $this->denormalizer->denormalize($data['audit'], \PicturePark\API\Model\UserAuditDetail::class, 'json', $context);
            }
            $object->audit = $value_8;
        }
        elseif (\array_key_exists('audit', $data)) {
            $object->audit = null;
        }
        if (\array_key_exists('ownerTokenId', $data)) {
            $object->ownerTokenId = $data['ownerTokenId'];
        }
        if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
            $value_9 = $data['owner'];
            if (is_array($data['owner']) and \array_key_exists('emailAddress', $data['owner']) and \array_key_exists('isDeleted', $data['owner'])) {
                $value_9 = $this->denormalizer->denormalize($data['owner'], \PicturePark\API\Model\User::class, 'json', $context);
            }
            $object->owner = $value_9;
        }
        elseif (\array_key_exists('owner', $data)) {
            $object->owner = null;
        }
        if (\array_key_exists('contentType', $data)) {
            $value_10 = $data['contentType'];
            if (is_string($data['contentType'])) {
                $value_10 = $data['contentType'];
            }
            $object->contentType = $value_10;
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
            $object->displayValues = $value_11;
        }
        elseif (\array_key_exists('displayValues', $data)) {
            $object->displayValues = null;
        }
        if (\array_key_exists('lifeCycle', $data)) {
            $value_13 = $data['lifeCycle'];
            if (is_string($data['lifeCycle'])) {
                $value_13 = $data['lifeCycle'];
            }
            $object->lifeCycle = $value_13;
        }
        if (\array_key_exists('contentRights', $data) && $data['contentRights'] !== null) {
            $values_9 = [];
            foreach ($data['contentRights'] as $value_14) {
                $values_9[] = $value_14;
            }
            $object->contentRights = $values_9;
        }
        elseif (\array_key_exists('contentRights', $data)) {
            $object->contentRights = null;
        }
        if (\array_key_exists('activity', $data) && $data['activity'] !== null) {
            $value_15 = $data['activity'];
            if (is_array($data['activity'])) {
                $value_15 = $this->denormalizer->denormalize($data['activity'], \PicturePark\API\Model\Activity::class, 'json', $context);
            }
            $object->activity = $value_15;
        }
        elseif (\array_key_exists('activity', $data)) {
            $object->activity = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['contentSchemaId'] = $data->contentSchemaId;
        if (array_key_exists('layerSchemaIds', get_object_vars($data)) && null !== ($data->layerSchemaIds ?? null)) {
            $values = [];
            foreach ($data->layerSchemaIds as $value) {
                $values[] = $value;
            }
            $dataArray['layerSchemaIds'] = $values;
        }
        if (array_key_exists('brokenReferenceIds', get_object_vars($data)) && null !== ($data->brokenReferenceIds ?? null)) {
            $values_1 = [];
            foreach ($data->brokenReferenceIds as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['brokenReferenceIds'] = $values_1;
        }
        if (array_key_exists('brokenIndirectReferenceIds', get_object_vars($data)) && null !== ($data->brokenIndirectReferenceIds ?? null)) {
            $values_2 = [];
            foreach ($data->brokenIndirectReferenceIds as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['brokenIndirectReferenceIds'] = $values_2;
        }
        if (array_key_exists('brokenRelationTargetIds', get_object_vars($data)) && null !== ($data->brokenRelationTargetIds ?? null)) {
            $values_3 = [];
            foreach ($data->brokenRelationTargetIds as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['brokenRelationTargetIds'] = $values_3;
        }
        if (array_key_exists('content', get_object_vars($data)) && null !== ($data->content ?? null)) {
            $values_4 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->content as $key => $value_4) {
                $values_4[$key] = $value_4;
            }
            $dataArray['content'] = $values_4;
        }
        if (array_key_exists('metadata', get_object_vars($data)) && null !== ($data->metadata ?? null)) {
            $values_5 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->metadata as $key_1 => $value_5) {
                $values_5[$key_1] = $value_5;
            }
            $dataArray['metadata'] = $values_5;
        }
        $dataArray['id'] = $data->id;
        if (array_key_exists('contentPermissionSetIds', get_object_vars($data)) && null !== ($data->contentPermissionSetIds ?? null)) {
            $values_6 = [];
            foreach ($data->contentPermissionSetIds as $value_6) {
                $values_6[] = $value_6;
            }
            $dataArray['contentPermissionSetIds'] = $values_6;
        }
        if (array_key_exists('outputs', get_object_vars($data)) && null !== ($data->outputs ?? null)) {
            $values_7 = [];
            foreach ($data->outputs as $value_7) {
                $normalized = $value_7 === null ? null : $this->normalizer->normalize($value_7, 'json', $context);
                $values_7[] = \is_iterable($normalized) ? new \PicturePark\API\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['outputs'] = $values_7;
        }
        if (array_key_exists('audit', get_object_vars($data)) && null !== ($data->audit ?? null)) {
            $value_8 = $data->audit;
            if (is_object($data->audit)) {
                $normalized_1 = $this->normalizer->normalize($data->audit, 'json', $context);
                $value_8 = \is_iterable($normalized_1) ? new \PicturePark\API\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['audit'] = $value_8;
        }
        $dataArray['ownerTokenId'] = $data->ownerTokenId;
        if (array_key_exists('owner', get_object_vars($data)) && null !== ($data->owner ?? null)) {
            $value_9 = $data->owner;
            if (is_object($data->owner)) {
                $normalized_2 = $this->normalizer->normalize($data->owner, 'json', $context);
                $value_9 = \is_iterable($normalized_2) ? new \PicturePark\API\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['owner'] = $value_9;
        }
        $value_10 = $data->contentType;
        if (is_string($data->contentType)) {
            $value_10 = $data->contentType;
        }
        $dataArray['contentType'] = $value_10;
        if (array_key_exists('displayValues', get_object_vars($data)) && null !== ($data->displayValues ?? null)) {
            $value_11 = $data->displayValues;
            if (is_object($data->displayValues)) {
                $values_8 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->displayValues as $key_2 => $value_12) {
                    $values_8[$key_2] = $value_12;
                }
                $value_11 = $values_8;
            }
            $dataArray['displayValues'] = $value_11;
        }
        $value_13 = $data->lifeCycle;
        if (is_string($data->lifeCycle)) {
            $value_13 = $data->lifeCycle;
        }
        $dataArray['lifeCycle'] = $value_13;
        if (array_key_exists('contentRights', get_object_vars($data)) && null !== ($data->contentRights ?? null)) {
            $values_9 = [];
            foreach ($data->contentRights as $value_14) {
                $values_9[] = $value_14;
            }
            $dataArray['contentRights'] = $values_9;
        }
        if (array_key_exists('activity', get_object_vars($data)) && null !== ($data->activity ?? null)) {
            $value_15 = $data->activity;
            if (is_object($data->activity)) {
                $normalized_3 = $this->normalizer->normalize($data->activity, 'json', $context);
                $value_15 = \is_iterable($normalized_3) ? new \PicturePark\API\Runtime\JsonObject($normalized_3) : $normalized_3;
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