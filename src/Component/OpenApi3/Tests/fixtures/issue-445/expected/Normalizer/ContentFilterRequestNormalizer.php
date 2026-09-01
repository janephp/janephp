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
class ContentFilterRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ContentFilterRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ContentFilterRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ContentFilterRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('channelId', $data) && $data['channelId'] !== null) {
            $object->channelId = $data['channelId'];
        }
        elseif (\array_key_exists('channelId', $data) && $data['channelId'] === null) {
            $object->channelId = null;
        }
        if (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] !== null) {
            $values = [];
            foreach ($data['searchLanguages'] as $value) {
                $values[] = $value;
            }
            $object->searchLanguages = $values;
        }
        elseif (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] === null) {
            $object->searchLanguages = null;
        }
        if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
            $object->searchString = $data['searchString'];
        }
        elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
            $object->searchString = null;
        }
        if (\array_key_exists('searchType', $data)) {
            $value_1 = $data['searchType'];
            if (is_string($data['searchType'])) {
                $value_1 = $data['searchType'];
            }
            $object->searchType = $value_1;
        }
        if (\array_key_exists('collectionId', $data) && $data['collectionId'] !== null) {
            $object->collectionId = $data['collectionId'];
        }
        elseif (\array_key_exists('collectionId', $data) && $data['collectionId'] === null) {
            $object->collectionId = null;
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $value_2 = $data['filter'];
            if (is_array($data['filter']) and \array_key_exists('kind', $data['filter'])) {
                $value_2 = $this->denormalizer->denormalize($data['filter'], \PicturePark\API\Model\FilterBase::class, 'json', $context);
            }
            $object->filter = $value_2;
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->filter = null;
        }
        if (\array_key_exists('lifeCycleFilter', $data)) {
            $value_3 = $data['lifeCycleFilter'];
            if (is_string($data['lifeCycleFilter'])) {
                $value_3 = $data['lifeCycleFilter'];
            }
            $object->lifeCycleFilter = $value_3;
        }
        if (\array_key_exists('brokenDependenciesFilter', $data)) {
            $value_4 = $data['brokenDependenciesFilter'];
            if (is_string($data['brokenDependenciesFilter'])) {
                $value_4 = $data['brokenDependenciesFilter'];
            }
            $object->brokenDependenciesFilter = $value_4;
        }
        if (\array_key_exists('rightsFilter', $data) && $data['rightsFilter'] !== null) {
            $values_1 = [];
            foreach ($data['rightsFilter'] as $value_5) {
                $values_1[] = $value_5;
            }
            $object->rightsFilter = $values_1;
        }
        elseif (\array_key_exists('rightsFilter', $data) && $data['rightsFilter'] === null) {
            $object->rightsFilter = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('channelId', get_object_vars($data)) && null !== ($data->channelId ?? null)) {
            $dataArray['channelId'] = $data->channelId ?? null;
        }
        if (array_key_exists('searchLanguages', get_object_vars($data)) && null !== ($data->searchLanguages ?? null)) {
            $values = [];
            foreach ($data->searchLanguages ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['searchLanguages'] = $values;
        }
        if (array_key_exists('searchString', get_object_vars($data)) && null !== ($data->searchString ?? null)) {
            $dataArray['searchString'] = $data->searchString ?? null;
        }
        $value_1 = $data->searchType ?? null;
        if (is_string($data->searchType ?? null)) {
            $value_1 = $data->searchType ?? null;
        }
        $dataArray['searchType'] = $value_1;
        if (array_key_exists('collectionId', get_object_vars($data)) && null !== ($data->collectionId ?? null)) {
            $dataArray['collectionId'] = $data->collectionId ?? null;
        }
        if (array_key_exists('filter', get_object_vars($data)) && null !== ($data->filter ?? null)) {
            $value_2 = $data->filter ?? null;
            if (is_object($data->filter ?? null)) {
                $value_2 = ($data->filter ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->filter ?? null, 'json', $context));
            }
            $dataArray['filter'] = $value_2;
        }
        $value_3 = $data->lifeCycleFilter ?? null;
        if (is_string($data->lifeCycleFilter ?? null)) {
            $value_3 = $data->lifeCycleFilter ?? null;
        }
        $dataArray['lifeCycleFilter'] = $value_3;
        $value_4 = $data->brokenDependenciesFilter ?? null;
        if (is_string($data->brokenDependenciesFilter ?? null)) {
            $value_4 = $data->brokenDependenciesFilter ?? null;
        }
        $dataArray['brokenDependenciesFilter'] = $value_4;
        if (array_key_exists('rightsFilter', get_object_vars($data)) && null !== ($data->rightsFilter ?? null)) {
            $values_1 = [];
            foreach ($data->rightsFilter ?? null as $value_5) {
                $values_1[] = $value_5;
            }
            $dataArray['rightsFilter'] = $values_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ContentFilterRequest::class => false];
    }
}