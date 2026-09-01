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
class BusinessRuleActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessRuleAction::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessRuleAction::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessRuleAction();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('kind', $data) and 'AssignLayerAction' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\AssignLayerAction', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'UnassignLayerAction' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\UnassignLayerAction', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'AssignValueAction' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\AssignValueAction', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'AssignTagboxItemsAction' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\AssignTagboxItemsAction', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'UnassignTagboxItemsAction' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\UnassignTagboxItemsAction', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'AssignContentPermissionSetsAction' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\AssignContentPermissionSetsAction', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'UnassignContentPermissionSetsAction' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\UnassignContentPermissionSetsAction', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ProduceMessageAction' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ProduceMessageAction', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'AssignTagboxItemsInLayerAction' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\AssignTagboxItemsInLayerAction', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'EnqueueTaggingAction' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\EnqueueTaggingAction', $format, $context);
        }
        if (\array_key_exists('traceRefId', $data) && $data['traceRefId'] !== null) {
            $object->traceRefId = $data['traceRefId'];
        }
        elseif (\array_key_exists('traceRefId', $data) && $data['traceRefId'] === null) {
            $object->traceRefId = null;
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== ($data->kind ?? null) and 'AssignLayerAction' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'UnassignLayerAction' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'AssignValueAction' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'AssignTagboxItemsAction' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'UnassignTagboxItemsAction' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'AssignContentPermissionSetsAction' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'UnassignContentPermissionSetsAction' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'ProduceMessageAction' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'AssignTagboxItemsInLayerAction' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'EnqueueTaggingAction' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (array_key_exists('traceRefId', get_object_vars($data)) && null !== ($data->traceRefId ?? null)) {
            $dataArray['traceRefId'] = $data->traceRefId ?? null;
        }
        $dataArray['kind'] = $data->kind ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessRuleAction::class => false];
    }
}