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
            $object->tagOutputFormatId = $data['tagOutputFormatId'];
            unset($data['tagOutputFormatId']);
        }
        elseif (\array_key_exists('tagOutputFormatId', $data) && $data['tagOutputFormatId'] === null) {
            $object->tagOutputFormatId = null;
            unset($data['tagOutputFormatId']);
        }
        if (\array_key_exists('keywordLookupCacheName', $data) && $data['keywordLookupCacheName'] !== null) {
            $object->keywordLookupCacheName = $data['keywordLookupCacheName'];
            unset($data['keywordLookupCacheName']);
        }
        elseif (\array_key_exists('keywordLookupCacheName', $data) && $data['keywordLookupCacheName'] === null) {
            $object->keywordLookupCacheName = null;
            unset($data['keywordLookupCacheName']);
        }
        if (\array_key_exists('taggingLayerId', $data) && $data['taggingLayerId'] !== null) {
            $object->taggingLayerId = $data['taggingLayerId'];
            unset($data['taggingLayerId']);
        }
        elseif (\array_key_exists('taggingLayerId', $data) && $data['taggingLayerId'] === null) {
            $object->taggingLayerId = null;
            unset($data['taggingLayerId']);
        }
        if (\array_key_exists('foundTagsFieldId', $data) && $data['foundTagsFieldId'] !== null) {
            $object->foundTagsFieldId = $data['foundTagsFieldId'];
            unset($data['foundTagsFieldId']);
        }
        elseif (\array_key_exists('foundTagsFieldId', $data) && $data['foundTagsFieldId'] === null) {
            $object->foundTagsFieldId = null;
            unset($data['foundTagsFieldId']);
        }
        if (\array_key_exists('missingKeywordsFieldId', $data) && $data['missingKeywordsFieldId'] !== null) {
            $object->missingKeywordsFieldId = $data['missingKeywordsFieldId'];
            unset($data['missingKeywordsFieldId']);
        }
        elseif (\array_key_exists('missingKeywordsFieldId', $data) && $data['missingKeywordsFieldId'] === null) {
            $object->missingKeywordsFieldId = null;
            unset($data['missingKeywordsFieldId']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
            unset($data['kind']);
        }
        if (\array_key_exists('model', $data) && $data['model'] !== null) {
            $object->model = $data['model'];
            unset($data['model']);
        }
        elseif (\array_key_exists('model', $data) && $data['model'] === null) {
            $object->model = null;
            unset($data['model']);
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->language = $data['language'];
            unset($data['language']);
        }
        elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->language = null;
            unset($data['language']);
        }
        if (\array_key_exists('minimumValue', $data) && $data['minimumValue'] !== null) {
            $object->minimumValue = $data['minimumValue'];
            unset($data['minimumValue']);
        }
        elseif (\array_key_exists('minimumValue', $data) && $data['minimumValue'] === null) {
            $object->minimumValue = null;
            unset($data['minimumValue']);
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
        if (array_key_exists('tagOutputFormatId', get_object_vars($data)) && null !== ($data->tagOutputFormatId ?? null)) {
            $dataArray['tagOutputFormatId'] = $data->tagOutputFormatId ?? null;
        }
        if (array_key_exists('keywordLookupCacheName', get_object_vars($data)) && null !== ($data->keywordLookupCacheName ?? null)) {
            $dataArray['keywordLookupCacheName'] = $data->keywordLookupCacheName ?? null;
        }
        if (array_key_exists('taggingLayerId', get_object_vars($data)) && null !== ($data->taggingLayerId ?? null)) {
            $dataArray['taggingLayerId'] = $data->taggingLayerId ?? null;
        }
        if (array_key_exists('foundTagsFieldId', get_object_vars($data)) && null !== ($data->foundTagsFieldId ?? null)) {
            $dataArray['foundTagsFieldId'] = $data->foundTagsFieldId ?? null;
        }
        if (array_key_exists('missingKeywordsFieldId', get_object_vars($data)) && null !== ($data->missingKeywordsFieldId ?? null)) {
            $dataArray['missingKeywordsFieldId'] = $data->missingKeywordsFieldId ?? null;
        }
        $dataArray['kind'] = $data->kind ?? null;
        if (array_key_exists('model', get_object_vars($data)) && null !== ($data->model ?? null)) {
            $dataArray['model'] = $data->model ?? null;
        }
        if (array_key_exists('language', get_object_vars($data)) && null !== ($data->language ?? null)) {
            $dataArray['language'] = $data->language ?? null;
        }
        if (array_key_exists('minimumValue', get_object_vars($data)) && null !== ($data->minimumValue ?? null)) {
            $dataArray['minimumValue'] = $data->minimumValue ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
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