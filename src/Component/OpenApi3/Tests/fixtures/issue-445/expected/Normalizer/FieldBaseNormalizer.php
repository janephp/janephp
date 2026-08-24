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
class FieldBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\FieldBase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\FieldBase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\FieldBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('kind', $data) and 'FieldBoolean' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldBoolean', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldDate' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldDate', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldDateTime' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldDateTime', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldDateTimeArray' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldDateTimeArray', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldDecimal' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldDecimal', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldDictionary' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldDictionary', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldDictionaryArray' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldDictionaryArray', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldGeoPoint' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldGeoPoint', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldTrigger' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldTrigger', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldLong' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldLong', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldLongArray' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldLongArray', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldSingleFieldset' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldSingleFieldset', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldMultiFieldset' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldMultiFieldset', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldSingleTagbox' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldSingleTagbox', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldMultiTagbox' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldMultiTagbox', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldString' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldString', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldStringArray' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldStringArray', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldTranslatedString' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldTranslatedString', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldSingleRelation' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldSingleRelation', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'FieldMultiRelation' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\FieldMultiRelation', $format, $context);
        }
        if (\array_key_exists('required', $data) && \is_int($data['required'])) {
            $data['required'] = (bool) $data['required'];
        }
        if (\array_key_exists('fixed', $data) && \is_int($data['fixed'])) {
            $data['fixed'] = (bool) $data['fixed'];
        }
        if (\array_key_exists('index', $data) && \is_int($data['index'])) {
            $data['index'] = (bool) $data['index'];
        }
        if (\array_key_exists('simpleSearch', $data) && \is_int($data['simpleSearch'])) {
            $data['simpleSearch'] = (bool) $data['simpleSearch'];
        }
        if (\array_key_exists('sortable', $data) && \is_int($data['sortable'])) {
            $data['sortable'] = (bool) $data['sortable'];
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
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== $data->getKind() and 'FieldBoolean' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'FieldDate' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'FieldDateTime' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'FieldDateTimeArray' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'FieldDecimal' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'FieldDictionary' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'FieldDictionaryArray' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'FieldGeoPoint' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'FieldTrigger' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'FieldLong' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'FieldLongArray' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'FieldSingleFieldset' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'FieldMultiFieldset' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'FieldSingleTagbox' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'FieldMultiTagbox' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'FieldString' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'FieldStringArray' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'FieldTranslatedString' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'FieldSingleRelation' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'FieldMultiRelation' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('indexId') && null !== $data->getIndexId()) {
            $dataArray['indexId'] = $data->getIndexId();
        }
        if ($data->isInitialized('fieldNamespace') && null !== $data->getFieldNamespace()) {
            $dataArray['fieldNamespace'] = $data->getFieldNamespace();
        }
        if ($data->isInitialized('names') && null !== $data->getNames()) {
            $dataArray['names'] = $data->getNames();
        }
        if ($data->isInitialized('descriptions') && null !== $data->getDescriptions()) {
            $dataArray['descriptions'] = $data->getDescriptions();
        }
        $dataArray['required'] = $data->getRequired();
        $dataArray['fixed'] = $data->getFixed();
        $dataArray['index'] = $data->getIndex();
        $dataArray['simpleSearch'] = $data->getSimpleSearch();
        $dataArray['sortable'] = $data->getSortable();
        $dataArray['kind'] = $data->getKind();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\FieldBase::class => false];
    }
}