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
class ListItemDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ListItemDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ListItemDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ListItemDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('contentSchemaId', $data)) {
            $object->contentSchemaId = $data['contentSchemaId'];
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $values = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['content'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->content = $values;
        }
        elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->content = null;
        }
        if (\array_key_exists('displayValues', $data) && $data['displayValues'] !== null) {
            $value_1 = $data['displayValues'];
            if (is_array($data['displayValues']) && $this->isOnlyNumericKeys($data['displayValues'])) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['displayValues'] as $key_1 => $value_2) {
                    $values_1[$key_1] = $value_2;
                }
                $value_1 = $values_1;
            }
            $object->displayValues = $value_1;
        }
        elseif (\array_key_exists('displayValues', $data) && $data['displayValues'] === null) {
            $object->displayValues = null;
        }
        if (\array_key_exists('brokenReferenceIds', $data) && $data['brokenReferenceIds'] !== null) {
            $values_2 = [];
            foreach ($data['brokenReferenceIds'] as $value_3) {
                $values_2[] = $value_3;
            }
            $object->brokenReferenceIds = $values_2;
        }
        elseif (\array_key_exists('brokenReferenceIds', $data) && $data['brokenReferenceIds'] === null) {
            $object->brokenReferenceIds = null;
        }
        if (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] !== null) {
            $values_3 = [];
            foreach ($data['brokenRelationTargetIds'] as $value_4) {
                $values_3[] = $value_4;
            }
            $object->brokenRelationTargetIds = $values_3;
        }
        elseif (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] === null) {
            $object->brokenRelationTargetIds = null;
        }
        if (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] !== null) {
            $values_4 = [];
            foreach ($data['brokenIndirectReferenceIds'] as $value_5) {
                $values_4[] = $value_5;
            }
            $object->brokenIndirectReferenceIds = $values_4;
        }
        elseif (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] === null) {
            $object->brokenIndirectReferenceIds = null;
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $value_6 = $data['audit'];
            if (is_array($data['audit']) and \array_key_exists('creationDate', $data['audit']) and \array_key_exists('modificationDate', $data['audit'])) {
                $value_6 = $this->denormalizer->denormalize($data['audit'], \PicturePark\API\Model\UserAuditDetail::class, 'json', $context);
            }
            $object->audit = $value_6;
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->audit = null;
        }
        if (\array_key_exists('activity', $data) && $data['activity'] !== null) {
            $value_7 = $data['activity'];
            if (is_array($data['activity'])) {
                $value_7 = $this->denormalizer->denormalize($data['activity'], \PicturePark\API\Model\Activity::class, 'json', $context);
            }
            $object->activity = $value_7;
        }
        elseif (\array_key_exists('activity', $data) && $data['activity'] === null) {
            $object->activity = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->id ?? null;
        $dataArray['contentSchemaId'] = $data->contentSchemaId ?? null;
        if (array_key_exists('content', get_object_vars($data)) && null !== ($data->content ?? null)) {
            $values = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->content ?? null as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['content'] = $values;
        }
        if (array_key_exists('displayValues', get_object_vars($data)) && null !== ($data->displayValues ?? null)) {
            $value_1 = $data->displayValues ?? null;
            if (is_object($data->displayValues ?? null)) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->displayValues ?? null as $key_1 => $value_2) {
                    $values_1[$key_1] = $value_2;
                }
                $value_1 = $values_1;
            }
            $dataArray['displayValues'] = $value_1;
        }
        if (array_key_exists('brokenReferenceIds', get_object_vars($data)) && null !== ($data->brokenReferenceIds ?? null)) {
            $values_2 = [];
            foreach ($data->brokenReferenceIds ?? null as $value_3) {
                $values_2[] = $value_3;
            }
            $dataArray['brokenReferenceIds'] = $values_2;
        }
        if (array_key_exists('brokenRelationTargetIds', get_object_vars($data)) && null !== ($data->brokenRelationTargetIds ?? null)) {
            $values_3 = [];
            foreach ($data->brokenRelationTargetIds ?? null as $value_4) {
                $values_3[] = $value_4;
            }
            $dataArray['brokenRelationTargetIds'] = $values_3;
        }
        if (array_key_exists('brokenIndirectReferenceIds', get_object_vars($data)) && null !== ($data->brokenIndirectReferenceIds ?? null)) {
            $values_4 = [];
            foreach ($data->brokenIndirectReferenceIds ?? null as $value_5) {
                $values_4[] = $value_5;
            }
            $dataArray['brokenIndirectReferenceIds'] = $values_4;
        }
        if (array_key_exists('audit', get_object_vars($data)) && null !== ($data->audit ?? null)) {
            $value_6 = $data->audit ?? null;
            if (is_object($data->audit ?? null)) {
                $value_6 = ($data->audit ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->audit ?? null, 'json', $context));
            }
            $dataArray['audit'] = $value_6;
        }
        if (array_key_exists('activity', get_object_vars($data)) && null !== ($data->activity ?? null)) {
            $value_7 = $data->activity ?? null;
            if (is_object($data->activity ?? null)) {
                $value_7 = ($data->activity ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->activity ?? null, 'json', $context));
            }
            $dataArray['activity'] = $value_7;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ListItemDetail::class => false];
    }
}