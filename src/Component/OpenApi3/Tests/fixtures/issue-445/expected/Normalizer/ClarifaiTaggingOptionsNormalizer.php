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
class ClarifaiTaggingOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ClarifaiTaggingOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ClarifaiTaggingOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ClarifaiTaggingOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
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
        if (\array_key_exists('model', $data) && $data['model'] !== null) {
            $object->setModel($data['model']);
            unset($data['model']);
        }
        elseif (\array_key_exists('model', $data) && $data['model'] === null) {
            $object->setModel(null);
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->setLanguage($data['language']);
            unset($data['language']);
        }
        elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->setLanguage(null);
        }
        if (\array_key_exists('minimumValue', $data) && $data['minimumValue'] !== null) {
            $object->setMinimumValue($data['minimumValue']);
            unset($data['minimumValue']);
        }
        elseif (\array_key_exists('minimumValue', $data) && $data['minimumValue'] === null) {
            $object->setMinimumValue(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('tagOutputFormatId')) {
            $dataArray['tagOutputFormatId'] = $data->getTagOutputFormatId();
        }
        if ($data->isInitialized('keywordLookupCacheName')) {
            $dataArray['keywordLookupCacheName'] = $data->getKeywordLookupCacheName();
        }
        if ($data->isInitialized('taggingLayerId')) {
            $dataArray['taggingLayerId'] = $data->getTaggingLayerId();
        }
        if ($data->isInitialized('foundTagsFieldId')) {
            $dataArray['foundTagsFieldId'] = $data->getFoundTagsFieldId();
        }
        if ($data->isInitialized('missingKeywordsFieldId')) {
            $dataArray['missingKeywordsFieldId'] = $data->getMissingKeywordsFieldId();
        }
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('model')) {
            $dataArray['model'] = $data->getModel();
        }
        if ($data->isInitialized('language')) {
            $dataArray['language'] = $data->getLanguage();
        }
        if ($data->isInitialized('minimumValue')) {
            $dataArray['minimumValue'] = $data->getMinimumValue();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ClarifaiTaggingOptions::class => false];
    }
}