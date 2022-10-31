<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FieldBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\FieldBase';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\FieldBase';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (array_key_exists('kind', $data) and 'FieldBoolean' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldBoolean', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldDate' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldDate', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldDateTime' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldDateTime', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldDateTimeArray' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldDateTimeArray', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldDecimal' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldDecimal', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldDictionary' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldDictionary', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldDictionaryArray' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldDictionaryArray', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldGeoPoint' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldGeoPoint', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldTrigger' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldTrigger', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldLong' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldLong', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldLongArray' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldLongArray', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldSingleFieldset' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldSingleFieldset', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldMultiFieldset' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldMultiFieldset', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldSingleTagbox' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldSingleTagbox', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldMultiTagbox' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldMultiTagbox', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldString' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldString', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldStringArray' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldStringArray', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldTranslatedString' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldTranslatedString', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldSingleRelation' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldSingleRelation', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldMultiRelation' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\FieldMultiRelation', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\FieldBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('indexId', $data) && $data['indexId'] !== null) {
            $object->setIndexId($data['indexId']);
        }
        elseif (\array_key_exists('indexId', $data) && $data['indexId'] === null) {
            $object->setIndexId(null);
        }
        if (\array_key_exists('fieldNamespace', $data) && $data['fieldNamespace'] !== null) {
            $object->setFieldNamespace($data['fieldNamespace']);
        }
        elseif (\array_key_exists('fieldNamespace', $data) && $data['fieldNamespace'] === null) {
            $object->setFieldNamespace(null);
        }
        if (\array_key_exists('names', $data) && $data['names'] !== null) {
            $object->setNames($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->setNames(null);
        }
        if (\array_key_exists('descriptions', $data) && $data['descriptions'] !== null) {
            $object->setDescriptions($data['descriptions']);
        }
        elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
            $object->setDescriptions(null);
        }
        if (\array_key_exists('required', $data)) {
            $object->setRequired($data['required']);
        }
        if (\array_key_exists('fixed', $data)) {
            $object->setFixed($data['fixed']);
        }
        if (\array_key_exists('index', $data)) {
            $object->setIndex($data['index']);
        }
        if (\array_key_exists('simpleSearch', $data)) {
            $object->setSimpleSearch($data['simpleSearch']);
        }
        if (\array_key_exists('sortable', $data)) {
            $object->setSortable($data['sortable']);
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
        if (null !== $object->getKind() and 'FieldBoolean' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'FieldDate' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'FieldDateTime' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'FieldDateTimeArray' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'FieldDecimal' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'FieldDictionary' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'FieldDictionaryArray' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'FieldGeoPoint' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'FieldTrigger' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'FieldLong' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'FieldLongArray' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'FieldSingleFieldset' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'FieldMultiFieldset' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'FieldSingleTagbox' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'FieldMultiTagbox' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'FieldString' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'FieldStringArray' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'FieldTranslatedString' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'FieldSingleRelation' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'FieldMultiRelation' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        $data['id'] = $object->getId();
        if ($object->isInitialized('indexId') && null !== $object->getIndexId()) {
            $data['indexId'] = $object->getIndexId();
        }
        if ($object->isInitialized('fieldNamespace') && null !== $object->getFieldNamespace()) {
            $data['fieldNamespace'] = $object->getFieldNamespace();
        }
        if ($object->isInitialized('names') && null !== $object->getNames()) {
            $data['names'] = $object->getNames();
        }
        if ($object->isInitialized('descriptions') && null !== $object->getDescriptions()) {
            $data['descriptions'] = $object->getDescriptions();
        }
        $data['required'] = $object->getRequired();
        $data['fixed'] = $object->getFixed();
        $data['index'] = $object->getIndex();
        $data['simpleSearch'] = $object->getSimpleSearch();
        $data['sortable'] = $object->getSortable();
        $data['kind'] = $object->getKind();
        return $data;
    }
}