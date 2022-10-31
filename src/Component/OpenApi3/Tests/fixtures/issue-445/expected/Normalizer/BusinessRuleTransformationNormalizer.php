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
class BusinessRuleTransformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\BusinessRuleTransformation';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRuleTransformation';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (array_key_exists('kind', $data) and 'TakeDictionaryValueTransformation' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\TakeDictionaryValueTransformation', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'TakeArrayValueTransformation' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\TakeArrayValueTransformation', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'JoinByTransformation' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\JoinByTransformation', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'LookupCacheTransformation' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\LookupCacheTransformation', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'NGramTransformation' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\NGramTransformation', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ProjectionTransformation' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\ProjectionTransformation', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'SplitTransformation' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\SplitTransformation', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\BusinessRuleTransformation();
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
        if (null !== $object->getKind() and 'TakeDictionaryValueTransformation' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'TakeArrayValueTransformation' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'JoinByTransformation' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'LookupCacheTransformation' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'NGramTransformation' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'ProjectionTransformation' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'SplitTransformation' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if ($object->isInitialized('traceRefId') && null !== $object->getTraceRefId()) {
            $data['traceRefId'] = $object->getTraceRefId();
        }
        $data['kind'] = $object->getKind();
        return $data;
    }
}