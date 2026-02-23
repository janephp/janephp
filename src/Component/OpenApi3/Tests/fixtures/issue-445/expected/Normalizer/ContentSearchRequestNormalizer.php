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
class ContentSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ContentSearchRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ContentSearchRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\ContentSearchRequest();
        if (\array_key_exists('debugMode', $data) && \is_int($data['debugMode'])) {
            $data['debugMode'] = (bool) $data['debugMode'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
            $object->setSearchString($data['searchString']);
            unset($data['searchString']);
        }
        elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
            $object->setSearchString(null);
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
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $value_1 = $data['filter'];
            if (is_array($data['filter']) and isset($data['filter']['kind'])) {
                $value_1 = $this->denormalizer->denormalize($data['filter'], \PicturePark\API\Model\FilterBase::class, 'json', $context);
            }
            $object->setFilter($value_1);
            unset($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->setFilter(null);
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
        }
        if (\array_key_exists('channelId', $data) && $data['channelId'] !== null) {
            $object->setChannelId($data['channelId']);
            unset($data['channelId']);
        }
        elseif (\array_key_exists('channelId', $data) && $data['channelId'] === null) {
            $object->setChannelId(null);
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
        }
        if (\array_key_exists('collectionId', $data) && $data['collectionId'] !== null) {
            $object->setCollectionId($data['collectionId']);
            unset($data['collectionId']);
        }
        elseif (\array_key_exists('collectionId', $data) && $data['collectionId'] === null) {
            $object->setCollectionId(null);
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
        if (\array_key_exists('displayPatternIds', $data) && $data['displayPatternIds'] !== null) {
            $values_3 = [];
            foreach ($data['displayPatternIds'] as $value_7) {
                $values_3[] = $value_7;
            }
            $object->setDisplayPatternIds($values_3);
            unset($data['displayPatternIds']);
        }
        elseif (\array_key_exists('displayPatternIds', $data) && $data['displayPatternIds'] === null) {
            $object->setDisplayPatternIds(null);
        }
        if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
            $values_4 = [];
            foreach ($data['sort'] as $value_8) {
                $values_4[] = $this->denormalizer->denormalize($value_8, \PicturePark\API\Model\SortInfo::class, 'json', $context);
            }
            $object->setSort($values_4);
            unset($data['sort']);
        }
        elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
            $object->setSort(null);
        }
        if (\array_key_exists('limit', $data)) {
            $object->setLimit($data['limit']);
            unset($data['limit']);
        }
        if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
            $object->setPageToken($data['pageToken']);
            unset($data['pageToken']);
        }
        elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
            $object->setPageToken(null);
        }
        if (\array_key_exists('rightsFilter', $data) && $data['rightsFilter'] !== null) {
            $values_5 = [];
            foreach ($data['rightsFilter'] as $value_9) {
                $values_5[] = $value_9;
            }
            $object->setRightsFilter($values_5);
            unset($data['rightsFilter']);
        }
        elseif (\array_key_exists('rightsFilter', $data) && $data['rightsFilter'] === null) {
            $object->setRightsFilter(null);
        }
        if (\array_key_exists('rightsAggregations', $data) && $data['rightsAggregations'] !== null) {
            $values_6 = [];
            foreach ($data['rightsAggregations'] as $value_10) {
                $values_6[] = $value_10;
            }
            $object->setRightsAggregations($values_6);
            unset($data['rightsAggregations']);
        }
        elseif (\array_key_exists('rightsAggregations', $data) && $data['rightsAggregations'] === null) {
            $object->setRightsAggregations(null);
        }
        if (\array_key_exists('debugMode', $data)) {
            $object->setDebugMode($data['debugMode']);
            unset($data['debugMode']);
        }
        if (\array_key_exists('aggregators', $data) && $data['aggregators'] !== null) {
            $values_7 = [];
            foreach ($data['aggregators'] as $value_11) {
                $values_7[] = $this->denormalizer->denormalize($value_11, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->setAggregators($values_7);
            unset($data['aggregators']);
        }
        elseif (\array_key_exists('aggregators', $data) && $data['aggregators'] === null) {
            $object->setAggregators(null);
        }
        foreach ($data as $key => $value_12) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_12;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('searchString')) {
            $dataArray['searchString'] = $data->getSearchString();
        }
        if ($data->isInitialized('searchBehaviors')) {
            $values = [];
            foreach ($data->getSearchBehaviors() as $value) {
                $values[] = $value;
            }
            $dataArray['searchBehaviors'] = $values;
        }
        if ($data->isInitialized('filter')) {
            $value_1 = $data->getFilter();
            if (is_object($data->getFilter())) {
                $value_1 = $this->normalizer->normalize($data->getFilter(), 'json', $context);
            }
            $dataArray['filter'] = $value_1;
        }
        if ($data->isInitialized('aggregationFilters')) {
            $values_1 = [];
            foreach ($data->getAggregationFilters() as $value_2) {
                $values_1[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['aggregationFilters'] = $values_1;
        }
        if ($data->isInitialized('channelId')) {
            $dataArray['channelId'] = $data->getChannelId();
        }
        if ($data->isInitialized('searchLanguages')) {
            $values_2 = [];
            foreach ($data->getSearchLanguages() as $value_3) {
                $values_2[] = $value_3;
            }
            $dataArray['searchLanguages'] = $values_2;
        }
        if ($data->isInitialized('collectionId')) {
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
        if ($data->isInitialized('displayPatternIds')) {
            $values_3 = [];
            foreach ($data->getDisplayPatternIds() as $value_7) {
                $values_3[] = $value_7;
            }
            $dataArray['displayPatternIds'] = $values_3;
        }
        if ($data->isInitialized('sort')) {
            $values_4 = [];
            foreach ($data->getSort() as $value_8) {
                $values_4[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $dataArray['sort'] = $values_4;
        }
        if ($data->isInitialized('limit') && null !== $data->getLimit()) {
            $dataArray['limit'] = $data->getLimit();
        }
        if ($data->isInitialized('pageToken')) {
            $dataArray['pageToken'] = $data->getPageToken();
        }
        if ($data->isInitialized('rightsFilter')) {
            $values_5 = [];
            foreach ($data->getRightsFilter() as $value_9) {
                $values_5[] = $value_9;
            }
            $dataArray['rightsFilter'] = $values_5;
        }
        if ($data->isInitialized('rightsAggregations')) {
            $values_6 = [];
            foreach ($data->getRightsAggregations() as $value_10) {
                $values_6[] = $value_10;
            }
            $dataArray['rightsAggregations'] = $values_6;
        }
        if ($data->isInitialized('debugMode') && null !== $data->getDebugMode()) {
            $dataArray['debugMode'] = $data->getDebugMode();
        }
        if ($data->isInitialized('aggregators')) {
            $values_7 = [];
            foreach ($data->getAggregators() as $value_11) {
                $values_7[] = $this->normalizer->normalize($value_11, 'json', $context);
            }
            $dataArray['aggregators'] = $values_7;
        }
        foreach ($data as $key => $value_12) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_12;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ContentSearchRequest::class => false];
    }
}