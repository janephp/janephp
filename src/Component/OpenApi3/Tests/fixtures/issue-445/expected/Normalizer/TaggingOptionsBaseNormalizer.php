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
class TaggingOptionsBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\TaggingOptionsBase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\TaggingOptionsBase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\TaggingOptionsBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('kind', $data) and 'ClarifaiTaggingOptions' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ClarifaiTaggingOptions', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'SimulatedTaggingOptions' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\SimulatedTaggingOptions', $format, $context);
        }
        if (\array_key_exists('tagOutputFormatId', $data) && $data['tagOutputFormatId'] !== null) {
            $object->tagOutputFormatId = $data['tagOutputFormatId'];
        }
        elseif (\array_key_exists('tagOutputFormatId', $data) && $data['tagOutputFormatId'] === null) {
            $object->tagOutputFormatId = null;
        }
        if (\array_key_exists('keywordLookupCacheName', $data) && $data['keywordLookupCacheName'] !== null) {
            $object->keywordLookupCacheName = $data['keywordLookupCacheName'];
        }
        elseif (\array_key_exists('keywordLookupCacheName', $data) && $data['keywordLookupCacheName'] === null) {
            $object->keywordLookupCacheName = null;
        }
        if (\array_key_exists('taggingLayerId', $data) && $data['taggingLayerId'] !== null) {
            $object->taggingLayerId = $data['taggingLayerId'];
        }
        elseif (\array_key_exists('taggingLayerId', $data) && $data['taggingLayerId'] === null) {
            $object->taggingLayerId = null;
        }
        if (\array_key_exists('foundTagsFieldId', $data) && $data['foundTagsFieldId'] !== null) {
            $object->foundTagsFieldId = $data['foundTagsFieldId'];
        }
        elseif (\array_key_exists('foundTagsFieldId', $data) && $data['foundTagsFieldId'] === null) {
            $object->foundTagsFieldId = null;
        }
        if (\array_key_exists('missingKeywordsFieldId', $data) && $data['missingKeywordsFieldId'] !== null) {
            $object->missingKeywordsFieldId = $data['missingKeywordsFieldId'];
        }
        elseif (\array_key_exists('missingKeywordsFieldId', $data) && $data['missingKeywordsFieldId'] === null) {
            $object->missingKeywordsFieldId = null;
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== ($data->kind ?? null) and 'ClarifaiTaggingOptions' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'SimulatedTaggingOptions' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
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
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\TaggingOptionsBase::class => false];
    }
}