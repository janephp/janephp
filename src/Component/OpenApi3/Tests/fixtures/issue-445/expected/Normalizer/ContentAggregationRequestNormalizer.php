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
class ContentAggregationRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ContentAggregationRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ContentAggregationRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ContentAggregationRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
            $object->setSearchString($data['searchString']);
            unset($data['searchString']);
        }
        elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
            $object->setSearchString(null);
            unset($data['searchString']);
        }
        if (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] !== null) {
            $values = [];
            foreach ($data['searchBehaviors'] as $value) {
                $values[] = $value;
            }
            $object->setSearchBehaviors($values);
            unset($data['searchBehaviors']);
        }
        elseif (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] === null) {
            $object->setSearchBehaviors(null);
            unset($data['searchBehaviors']);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $value_1 = $data['filter'];
            if (is_array($data['filter']) and \array_key_exists('kind', $data['filter'])) {
                $value_1 = $this->denormalizer->denormalize($data['filter'], \PicturePark\API\Model\FilterBase::class, 'json', $context);
            }
            $object->setFilter($value_1);
            unset($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->setFilter(null);
            unset($data['filter']);
        }
        if (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] !== null) {
            $values_1 = [];
            foreach ($data['aggregationFilters'] as $value_2) {
                $values_1[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\AggregationFilter::class, 'json', $context);
            }
            $object->setAggregationFilters($values_1);
            unset($data['aggregationFilters']);
        }
        elseif (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] === null) {
            $object->setAggregationFilters(null);
            unset($data['aggregationFilters']);
        }
        if (\array_key_exists('channelId', $data) && $data['channelId'] !== null) {
            $object->setChannelId($data['channelId']);
            unset($data['channelId']);
        }
        elseif (\array_key_exists('channelId', $data) && $data['channelId'] === null) {
            $object->setChannelId(null);
            unset($data['channelId']);
        }
        if (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] !== null) {
            $values_2 = [];
            foreach ($data['searchLanguages'] as $value_3) {
                $values_2[] = $value_3;
            }
            $object->setSearchLanguages($values_2);
            unset($data['searchLanguages']);
        }
        elseif (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] === null) {
            $object->setSearchLanguages(null);
            unset($data['searchLanguages']);
        }
        if (\array_key_exists('collectionId', $data) && $data['collectionId'] !== null) {
            $object->setCollectionId($data['collectionId']);
            unset($data['collectionId']);
        }
        elseif (\array_key_exists('collectionId', $data) && $data['collectionId'] === null) {
            $object->setCollectionId(null);
            unset($data['collectionId']);
        }
        if (\array_key_exists('lifeCycleFilter', $data)) {
            $value_4 = $data['lifeCycleFilter'];
            if (is_string($data['lifeCycleFilter'])) {
                $value_4 = $data['lifeCycleFilter'];
            }
            $object->setLifeCycleFilter($value_4);
            unset($data['lifeCycleFilter']);
        }
        if (\array_key_exists('brokenDependenciesFilter', $data)) {
            $value_5 = $data['brokenDependenciesFilter'];
            if (is_string($data['brokenDependenciesFilter'])) {
                $value_5 = $data['brokenDependenciesFilter'];
            }
            $object->setBrokenDependenciesFilter($value_5);
            unset($data['brokenDependenciesFilter']);
        }
        if (\array_key_exists('searchType', $data)) {
            $value_6 = $data['searchType'];
            if (is_string($data['searchType'])) {
                $value_6 = $data['searchType'];
            }
            $object->setSearchType($value_6);
            unset($data['searchType']);
        }
        if (\array_key_exists('aggregators', $data)) {
            $values_3 = [];
            foreach ($data['aggregators'] as $value_7) {
                $values_3[] = $this->denormalizer->denormalize($value_7, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->setAggregators($values_3);
            unset($data['aggregators']);
        }
        foreach ($data as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_8;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('searchString') && null !== $data->getSearchString()) {
            $dataArray['searchString'] = $data->getSearchString();
        }
        if ($data->isInitialized('searchBehaviors') && null !== $data->getSearchBehaviors()) {
            $values = [];
            foreach ($data->getSearchBehaviors() as $value) {
                $values[] = $value;
            }
            $dataArray['searchBehaviors'] = $values;
        }
        if ($data->isInitialized('filter') && null !== $data->getFilter()) {
            $value_1 = $data->getFilter();
            if (is_object($data->getFilter())) {
                $value_1 = $data->getFilter() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getFilter(), 'json', $context));
            }
            $dataArray['filter'] = $value_1;
        }
        if ($data->isInitialized('aggregationFilters') && null !== $data->getAggregationFilters()) {
            $values_1 = [];
            foreach ($data->getAggregationFilters() as $value_2) {
                $values_1[] = $value_2 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['aggregationFilters'] = $values_1;
        }
        if ($data->isInitialized('channelId') && null !== $data->getChannelId()) {
            $dataArray['channelId'] = $data->getChannelId();
        }
        if ($data->isInitialized('searchLanguages') && null !== $data->getSearchLanguages()) {
            $values_2 = [];
            foreach ($data->getSearchLanguages() as $value_3) {
                $values_2[] = $value_3;
            }
            $dataArray['searchLanguages'] = $values_2;
        }
        if ($data->isInitialized('collectionId') && null !== $data->getCollectionId()) {
            $dataArray['collectionId'] = $data->getCollectionId();
        }
        $value_4 = $data->getLifeCycleFilter();
        if (is_string($data->getLifeCycleFilter())) {
            $value_4 = $data->getLifeCycleFilter();
        }
        $dataArray['lifeCycleFilter'] = $value_4;
        $value_5 = $data->getBrokenDependenciesFilter();
        if (is_string($data->getBrokenDependenciesFilter())) {
            $value_5 = $data->getBrokenDependenciesFilter();
        }
        $dataArray['brokenDependenciesFilter'] = $value_5;
        $value_6 = $data->getSearchType();
        if (is_string($data->getSearchType())) {
            $value_6 = $data->getSearchType();
        }
        $dataArray['searchType'] = $value_6;
        $values_3 = [];
        foreach ($data->getAggregators() as $value_7) {
            $values_3[] = $value_7 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_7, 'json', $context));
        }
        $dataArray['aggregators'] = $values_3;
        foreach ($data->additionalPropertyEntries() as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_8;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ContentAggregationRequest::class => false];
    }
}