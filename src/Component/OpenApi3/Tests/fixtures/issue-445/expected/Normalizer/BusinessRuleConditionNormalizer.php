<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\BusinessRuleCondition';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRuleCondition';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (array_key_exists('kind', $data) and 'BooleanCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\BooleanCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'AndCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\AndCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'OrCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\OrCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'LayerAssignedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\LayerAssignedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'LayerUnassignedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\LayerUnassignedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ContentPermissionSetAssignedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\ContentPermissionSetAssignedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ContentPermissionSetUnassignedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\ContentPermissionSetUnassignedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldValueChangedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldValueChangedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'MatchRegexCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\MatchRegexCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'TagboxItemAssignedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\TagboxItemAssignedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'TagboxItemUnassignedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\TagboxItemUnassignedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ContentSchemaCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\ContentSchemaCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'NumberCompareCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\NumberCompareCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ContentRelationItemAssignedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\ContentRelationItemAssignedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ContentRelationItemUnassignedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\ContentRelationItemUnassignedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'GeoPointWithinPolygonCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\GeoPointWithinPolygonCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ContentPermissionSetsChangedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\ContentPermissionSetsChangedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ContentRelationItemsChangedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\ContentRelationItemsChangedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'LayersChangedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\LayersChangedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'TagboxItemsChangedCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\TagboxItemsChangedCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldEmptyCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldEmptyCondition', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'NotCondition' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\NotCondition', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\BusinessRuleCondition();
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getKind() and 'BooleanCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'AndCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'OrCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'LayerAssignedCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'LayerUnassignedCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'ContentPermissionSetAssignedCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'ContentPermissionSetUnassignedCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'FieldValueChangedCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'MatchRegexCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'TagboxItemAssignedCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'TagboxItemUnassignedCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'ContentSchemaCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'NumberCompareCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'ContentRelationItemAssignedCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'ContentRelationItemUnassignedCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'GeoPointWithinPolygonCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'ContentPermissionSetsChangedCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'ContentRelationItemsChangedCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'LayersChangedCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'TagboxItemsChangedCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'FieldEmptyCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'NotCondition' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getTraceRefId()) {
            $data['traceRefId'] = $object->getTraceRefId();
        }
        $data['kind'] = $object->getKind();
        return $data;
    }
}