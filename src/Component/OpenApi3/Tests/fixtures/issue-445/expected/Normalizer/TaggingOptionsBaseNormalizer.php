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
class TaggingOptionsBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\TaggingOptionsBase';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\TaggingOptionsBase';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (array_key_exists('kind', $data) and 'ClarifaiTaggingOptions' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\ClarifaiTaggingOptions', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'SimulatedTaggingOptions' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\SimulatedTaggingOptions', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\TaggingOptionsBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('tagOutputFormatId', $data) && $data['tagOutputFormatId'] !== null) {
            $object->setTagOutputFormatId($data['tagOutputFormatId']);
        }
        elseif (\array_key_exists('tagOutputFormatId', $data) && $data['tagOutputFormatId'] === null) {
            $object->setTagOutputFormatId(null);
        }
        if (\array_key_exists('keywordLookupCacheName', $data) && $data['keywordLookupCacheName'] !== null) {
            $object->setKeywordLookupCacheName($data['keywordLookupCacheName']);
        }
        elseif (\array_key_exists('keywordLookupCacheName', $data) && $data['keywordLookupCacheName'] === null) {
            $object->setKeywordLookupCacheName(null);
        }
        if (\array_key_exists('taggingLayerId', $data) && $data['taggingLayerId'] !== null) {
            $object->setTaggingLayerId($data['taggingLayerId']);
        }
        elseif (\array_key_exists('taggingLayerId', $data) && $data['taggingLayerId'] === null) {
            $object->setTaggingLayerId(null);
        }
        if (\array_key_exists('foundTagsFieldId', $data) && $data['foundTagsFieldId'] !== null) {
            $object->setFoundTagsFieldId($data['foundTagsFieldId']);
        }
        elseif (\array_key_exists('foundTagsFieldId', $data) && $data['foundTagsFieldId'] === null) {
            $object->setFoundTagsFieldId(null);
        }
        if (\array_key_exists('missingKeywordsFieldId', $data) && $data['missingKeywordsFieldId'] !== null) {
            $object->setMissingKeywordsFieldId($data['missingKeywordsFieldId']);
        }
        elseif (\array_key_exists('missingKeywordsFieldId', $data) && $data['missingKeywordsFieldId'] === null) {
            $object->setMissingKeywordsFieldId(null);
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
        if (null !== $object->getKind() and 'ClarifaiTaggingOptions' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'SimulatedTaggingOptions' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getTagOutputFormatId()) {
            $data['tagOutputFormatId'] = $object->getTagOutputFormatId();
        }
        if (null !== $object->getKeywordLookupCacheName()) {
            $data['keywordLookupCacheName'] = $object->getKeywordLookupCacheName();
        }
        if (null !== $object->getTaggingLayerId()) {
            $data['taggingLayerId'] = $object->getTaggingLayerId();
        }
        if (null !== $object->getFoundTagsFieldId()) {
            $data['foundTagsFieldId'] = $object->getFoundTagsFieldId();
        }
        if (null !== $object->getMissingKeywordsFieldId()) {
            $data['missingKeywordsFieldId'] = $object->getMissingKeywordsFieldId();
        }
        $data['kind'] = $object->getKind();
        return $data;
    }
}