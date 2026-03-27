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
class BusinessRuleConditionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessRuleCondition::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessRuleCondition::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessRuleCondition();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('kind', $data) and 'BooleanCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\BooleanCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'AndCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\AndCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'OrCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\OrCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'LayerAssignedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\LayerAssignedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'LayerUnassignedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\LayerUnassignedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ContentPermissionSetAssignedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ContentPermissionSetAssignedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ContentPermissionSetUnassignedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ContentPermissionSetUnassignedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldValueChangedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldValueChangedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'MatchRegexCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\MatchRegexCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'TagboxItemAssignedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\TagboxItemAssignedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'TagboxItemUnassignedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\TagboxItemUnassignedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ContentSchemaCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ContentSchemaCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'NumberCompareCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\NumberCompareCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ContentRelationItemAssignedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ContentRelationItemAssignedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ContentRelationItemUnassignedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ContentRelationItemUnassignedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'GeoPointWithinPolygonCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\GeoPointWithinPolygonCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ContentPermissionSetsChangedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ContentPermissionSetsChangedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ContentRelationItemsChangedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ContentRelationItemsChangedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'LayersChangedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\LayersChangedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'TagboxItemsChangedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\TagboxItemsChangedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldEmptyCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldEmptyCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'NotCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\NotCondition', $format, $context);
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
        if (null !== $data->getKind() and 'BooleanCondition' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'AndCondition' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'OrCondition' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'LayerAssignedCondition' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'LayerUnassignedCondition' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'ContentPermissionSetAssignedCondition' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'ContentPermissionSetUnassignedCondition' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'FieldValueChangedCondition' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'MatchRegexCondition' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'TagboxItemAssignedCondition' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'TagboxItemUnassignedCondition' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'ContentSchemaCondition' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'NumberCompareCondition' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'ContentRelationItemAssignedCondition' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'ContentRelationItemUnassignedCondition' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'GeoPointWithinPolygonCondition' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'ContentPermissionSetsChangedCondition' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'ContentRelationItemsChangedCondition' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'LayersChangedCondition' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'TagboxItemsChangedCondition' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'FieldEmptyCondition' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'NotCondition' === $data->getKind()) {
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
        return [\PicturePark\API\Model\BusinessRuleCondition::class => false];
    }
}