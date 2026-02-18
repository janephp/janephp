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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\BusinessRuleAction();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('traceRefId', $data) && $data['traceRefId'] !== null) {
            $object->setTraceRefId($data['traceRefId']);
        }
        elseif (\array_key_exists('traceRefId', $data) && $data['traceRefId'] === null) {
            $object->setTraceRefId(null);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== $data->getKind() and 'AssignLayerAction' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'UnassignLayerAction' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'AssignValueAction' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'AssignTagboxItemsAction' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'UnassignTagboxItemsAction' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'AssignContentPermissionSetsAction' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'UnassignContentPermissionSetsAction' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'ProduceMessageAction' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'AssignTagboxItemsInLayerAction' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'EnqueueTaggingAction' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if ($data->isInitialized('traceRefId')) {
            $dataArray['traceRefId'] = $data->getTraceRefId();
        }
        $dataArray['kind'] = $data->getKind();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessRuleAction::class => false];
    }
}