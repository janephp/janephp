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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\ListItemDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('contentSchemaId', $data)) {
            $object->setContentSchemaId($data['contentSchemaId']);
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['content'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setContent($values);
        }
        elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->setContent(null);
        }
        if (\array_key_exists('displayValues', $data) && $data['displayValues'] !== null) {
            $value_1 = $data['displayValues'];
            if (is_array($data['displayValues']) && $this->isOnlyNumericKeys($data['displayValues'])) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['displayValues'] as $key_1 => $value_2) {
                    $values_1[$key_1] = $value_2;
                }
                $value_1 = $values_1;
            }
            $object->setDisplayValues($value_1);
        }
        elseif (\array_key_exists('displayValues', $data) && $data['displayValues'] === null) {
            $object->setDisplayValues(null);
        }
        if (\array_key_exists('brokenReferenceIds', $data) && $data['brokenReferenceIds'] !== null) {
            $values_2 = [];
            foreach ($data['brokenReferenceIds'] as $value_3) {
                $values_2[] = $value_3;
            }
            $object->setBrokenReferenceIds($values_2);
        }
        elseif (\array_key_exists('brokenReferenceIds', $data) && $data['brokenReferenceIds'] === null) {
            $object->setBrokenReferenceIds(null);
        }
        if (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] !== null) {
            $values_3 = [];
            foreach ($data['brokenRelationTargetIds'] as $value_4) {
                $values_3[] = $value_4;
            }
            $object->setBrokenRelationTargetIds($values_3);
        }
        elseif (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] === null) {
            $object->setBrokenRelationTargetIds(null);
        }
        if (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] !== null) {
            $values_4 = [];
            foreach ($data['brokenIndirectReferenceIds'] as $value_5) {
                $values_4[] = $value_5;
            }
            $object->setBrokenIndirectReferenceIds($values_4);
        }
        elseif (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] === null) {
            $object->setBrokenIndirectReferenceIds(null);
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $value_6 = $data['audit'];
            if (is_array($data['audit']) and isset($data['audit']['creationDate']) and isset($data['audit']['modificationDate'])) {
                $value_6 = $this->denormalizer->denormalize($data['audit'], \PicturePark\API\Model\UserAuditDetail::class, 'json', $context);
            }
            $object->setAudit($value_6);
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->setAudit(null);
        }
        if (\array_key_exists('activity', $data) && $data['activity'] !== null) {
            $value_7 = $data['activity'];
            if (is_array($data['activity'])) {
                $value_7 = $this->denormalizer->denormalize($data['activity'], \PicturePark\API\Model\Activity::class, 'json', $context);
            }
            $object->setActivity($value_7);
        }
        elseif (\array_key_exists('activity', $data) && $data['activity'] === null) {
            $object->setActivity(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['contentSchemaId'] = $data->getContentSchemaId();
        if ($data->isInitialized('content')) {
            $values = [];
            foreach ($data->getContent() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['content'] = $values;
        }
        if ($data->isInitialized('displayValues')) {
            $value_1 = $data->getDisplayValues();
            if (is_object($data->getDisplayValues())) {
                $values_1 = [];
                foreach ($data->getDisplayValues() as $key_1 => $value_2) {
                    $values_1[$key_1] = $value_2;
                }
                $value_1 = $values_1;
            }
            $dataArray['displayValues'] = $value_1;
        }
        if ($data->isInitialized('brokenReferenceIds')) {
            $values_2 = [];
            foreach ($data->getBrokenReferenceIds() as $value_3) {
                $values_2[] = $value_3;
            }
            $dataArray['brokenReferenceIds'] = $values_2;
        }
        if ($data->isInitialized('brokenRelationTargetIds')) {
            $values_3 = [];
            foreach ($data->getBrokenRelationTargetIds() as $value_4) {
                $values_3[] = $value_4;
            }
            $dataArray['brokenRelationTargetIds'] = $values_3;
        }
        if ($data->isInitialized('brokenIndirectReferenceIds')) {
            $values_4 = [];
            foreach ($data->getBrokenIndirectReferenceIds() as $value_5) {
                $values_4[] = $value_5;
            }
            $dataArray['brokenIndirectReferenceIds'] = $values_4;
        }
        if ($data->isInitialized('audit')) {
            $value_6 = $data->getAudit();
            if (is_object($data->getAudit())) {
                $value_6 = $this->normalizer->normalize($data->getAudit(), 'json', $context);
            }
            $dataArray['audit'] = $value_6;
        }
        if ($data->isInitialized('activity')) {
            $value_7 = $data->getActivity();
            if (is_object($data->getActivity())) {
                $value_7 = $this->normalizer->normalize($data->getActivity(), 'json', $context);
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