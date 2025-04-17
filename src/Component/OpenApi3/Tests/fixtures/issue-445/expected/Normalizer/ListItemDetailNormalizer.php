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
            $object->setDisplayValues($data['displayValues']);
        }
        elseif (\array_key_exists('displayValues', $data) && $data['displayValues'] === null) {
            $object->setDisplayValues(null);
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
        if (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] !== null) {
            $values_2 = [];
            foreach ($data['brokenRelationTargetIds'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setBrokenRelationTargetIds($values_2);
        }
        elseif (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] === null) {
            $object->setBrokenRelationTargetIds(null);
        }
        if (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] !== null) {
            $values_3 = [];
            foreach ($data['brokenIndirectReferenceIds'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setBrokenIndirectReferenceIds($values_3);
        }
        elseif (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] === null) {
            $object->setBrokenIndirectReferenceIds(null);
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $object->setAudit($data['audit']);
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->setAudit(null);
        }
        if (\array_key_exists('activity', $data) && $data['activity'] !== null) {
            $object->setActivity($data['activity']);
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
        if ($data->isInitialized('content') && null !== $data->getContent()) {
            $values = [];
            foreach ($data->getContent() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['content'] = $values;
        }
        if ($data->isInitialized('displayValues') && null !== $data->getDisplayValues()) {
            $dataArray['displayValues'] = $data->getDisplayValues();
        }
        if ($data->isInitialized('brokenReferenceIds') && null !== $data->getBrokenReferenceIds()) {
            $values_1 = [];
            foreach ($data->getBrokenReferenceIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['brokenReferenceIds'] = $values_1;
        }
        if ($data->isInitialized('brokenRelationTargetIds') && null !== $data->getBrokenRelationTargetIds()) {
            $values_2 = [];
            foreach ($data->getBrokenRelationTargetIds() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['brokenRelationTargetIds'] = $values_2;
        }
        if ($data->isInitialized('brokenIndirectReferenceIds') && null !== $data->getBrokenIndirectReferenceIds()) {
            $values_3 = [];
            foreach ($data->getBrokenIndirectReferenceIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['brokenIndirectReferenceIds'] = $values_3;
        }
        if ($data->isInitialized('audit') && null !== $data->getAudit()) {
            $dataArray['audit'] = $data->getAudit();
        }
        if ($data->isInitialized('activity') && null !== $data->getActivity()) {
            $dataArray['activity'] = $data->getActivity();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ListItemDetail::class => false];
    }
}