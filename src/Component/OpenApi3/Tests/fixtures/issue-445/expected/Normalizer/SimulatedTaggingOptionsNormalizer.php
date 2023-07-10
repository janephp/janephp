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
class SimulatedTaggingOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\SimulatedTaggingOptions';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\SimulatedTaggingOptions';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\SimulatedTaggingOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('tagOutputFormatId', $data) && $data['tagOutputFormatId'] !== null) {
            $object->setTagOutputFormatId($data['tagOutputFormatId']);
            unset($data['tagOutputFormatId']);
        }
        elseif (\array_key_exists('tagOutputFormatId', $data) && $data['tagOutputFormatId'] === null) {
            $object->setTagOutputFormatId(null);
        }
        if (\array_key_exists('keywordLookupCacheName', $data) && $data['keywordLookupCacheName'] !== null) {
            $object->setKeywordLookupCacheName($data['keywordLookupCacheName']);
            unset($data['keywordLookupCacheName']);
        }
        elseif (\array_key_exists('keywordLookupCacheName', $data) && $data['keywordLookupCacheName'] === null) {
            $object->setKeywordLookupCacheName(null);
        }
        if (\array_key_exists('taggingLayerId', $data) && $data['taggingLayerId'] !== null) {
            $object->setTaggingLayerId($data['taggingLayerId']);
            unset($data['taggingLayerId']);
        }
        elseif (\array_key_exists('taggingLayerId', $data) && $data['taggingLayerId'] === null) {
            $object->setTaggingLayerId(null);
        }
        if (\array_key_exists('foundTagsFieldId', $data) && $data['foundTagsFieldId'] !== null) {
            $object->setFoundTagsFieldId($data['foundTagsFieldId']);
            unset($data['foundTagsFieldId']);
        }
        elseif (\array_key_exists('foundTagsFieldId', $data) && $data['foundTagsFieldId'] === null) {
            $object->setFoundTagsFieldId(null);
        }
        if (\array_key_exists('missingKeywordsFieldId', $data) && $data['missingKeywordsFieldId'] !== null) {
            $object->setMissingKeywordsFieldId($data['missingKeywordsFieldId']);
            unset($data['missingKeywordsFieldId']);
        }
        elseif (\array_key_exists('missingKeywordsFieldId', $data) && $data['missingKeywordsFieldId'] === null) {
            $object->setMissingKeywordsFieldId(null);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('numberOfKeywords', $data) && $data['numberOfKeywords'] !== null) {
            $object->setNumberOfKeywords($data['numberOfKeywords']);
            unset($data['numberOfKeywords']);
        }
        elseif (\array_key_exists('numberOfKeywords', $data) && $data['numberOfKeywords'] === null) {
            $object->setNumberOfKeywords(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('tagOutputFormatId') && null !== $object->getTagOutputFormatId()) {
            $data['tagOutputFormatId'] = $object->getTagOutputFormatId();
        }
        if ($object->isInitialized('keywordLookupCacheName') && null !== $object->getKeywordLookupCacheName()) {
            $data['keywordLookupCacheName'] = $object->getKeywordLookupCacheName();
        }
        if ($object->isInitialized('taggingLayerId') && null !== $object->getTaggingLayerId()) {
            $data['taggingLayerId'] = $object->getTaggingLayerId();
        }
        if ($object->isInitialized('foundTagsFieldId') && null !== $object->getFoundTagsFieldId()) {
            $data['foundTagsFieldId'] = $object->getFoundTagsFieldId();
        }
        if ($object->isInitialized('missingKeywordsFieldId') && null !== $object->getMissingKeywordsFieldId()) {
            $data['missingKeywordsFieldId'] = $object->getMissingKeywordsFieldId();
        }
        $data['kind'] = $object->getKind();
        if ($object->isInitialized('numberOfKeywords') && null !== $object->getNumberOfKeywords()) {
            $data['numberOfKeywords'] = $object->getNumberOfKeywords();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('PicturePark\\API\\Model\\SimulatedTaggingOptions' => false);
    }
}