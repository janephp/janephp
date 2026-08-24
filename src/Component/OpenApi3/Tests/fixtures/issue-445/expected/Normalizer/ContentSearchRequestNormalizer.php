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
        $object = new \PicturePark\API\Model\ContentSearchRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('debugMode', $data) && \is_int($data['debugMode'])) {
            $data['debugMode'] = (bool) $data['debugMode'];
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
            $object->setFilter($data['filter']);
            unset($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->setFilter(null);
            unset($data['filter']);
        }
        if (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] !== null) {
            $values_1 = [];
            foreach ($data['aggregationFilters'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\AggregationFilter::class, 'json', $context);
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
            foreach ($data['searchLanguages'] as $value_2) {
                $values_2[] = $value_2;
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
            $object->setLifeCycleFilter($data['lifeCycleFilter']);
            unset($data['lifeCycleFilter']);
        }
        if (\array_key_exists('brokenDependenciesFilter', $data)) {
            $object->setBrokenDependenciesFilter($data['brokenDependenciesFilter']);
            unset($data['brokenDependenciesFilter']);
        }
        if (\array_key_exists('searchType', $data)) {
            $object->setSearchType($data['searchType']);
            unset($data['searchType']);
        }
        if (\array_key_exists('displayPatternIds', $data) && $data['displayPatternIds'] !== null) {
            $values_3 = [];
            foreach ($data['displayPatternIds'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setDisplayPatternIds($values_3);
            unset($data['displayPatternIds']);
        }
        elseif (\array_key_exists('displayPatternIds', $data) && $data['displayPatternIds'] === null) {
            $object->setDisplayPatternIds(null);
            unset($data['displayPatternIds']);
        }
        if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
            $values_4 = [];
            foreach ($data['sort'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \PicturePark\API\Model\SortInfo::class, 'json', $context);
            }
            $object->setSort($values_4);
            unset($data['sort']);
        }
        elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
            $object->setSort(null);
            unset($data['sort']);
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
            unset($data['pageToken']);
        }
        if (\array_key_exists('rightsFilter', $data) && $data['rightsFilter'] !== null) {
            $values_5 = [];
            foreach ($data['rightsFilter'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setRightsFilter($values_5);
            unset($data['rightsFilter']);
        }
        elseif (\array_key_exists('rightsFilter', $data) && $data['rightsFilter'] === null) {
            $object->setRightsFilter(null);
            unset($data['rightsFilter']);
        }
        if (\array_key_exists('rightsAggregations', $data) && $data['rightsAggregations'] !== null) {
            $values_6 = [];
            foreach ($data['rightsAggregations'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setRightsAggregations($values_6);
            unset($data['rightsAggregations']);
        }
        elseif (\array_key_exists('rightsAggregations', $data) && $data['rightsAggregations'] === null) {
            $object->setRightsAggregations(null);
            unset($data['rightsAggregations']);
        }
        if (\array_key_exists('debugMode', $data)) {
            $object->setDebugMode($data['debugMode']);
            unset($data['debugMode']);
        }
        if (\array_key_exists('aggregators', $data) && $data['aggregators'] !== null) {
            $values_7 = [];
            foreach ($data['aggregators'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->setAggregators($values_7);
            unset($data['aggregators']);
        }
        elseif (\array_key_exists('aggregators', $data) && $data['aggregators'] === null) {
            $object->setAggregators(null);
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
            $dataArray['filter'] = $data->getFilter();
        }
        if ($data->isInitialized('aggregationFilters') && null !== $data->getAggregationFilters()) {
            $values_1 = [];
            foreach ($data->getAggregationFilters() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['aggregationFilters'] = $values_1;
        }
        if ($data->isInitialized('channelId') && null !== $data->getChannelId()) {
            $dataArray['channelId'] = $data->getChannelId();
        }
        if ($data->isInitialized('searchLanguages') && null !== $data->getSearchLanguages()) {
            $values_2 = [];
            foreach ($data->getSearchLanguages() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['searchLanguages'] = $values_2;
        }
        if ($data->isInitialized('collectionId') && null !== $data->getCollectionId()) {
            $dataArray['collectionId'] = $data->getCollectionId();
        }
        $dataArray['lifeCycleFilter'] = $data->getLifeCycleFilter();
        $dataArray['brokenDependenciesFilter'] = $data->getBrokenDependenciesFilter();
        $dataArray['searchType'] = $data->getSearchType();
        if ($data->isInitialized('displayPatternIds') && null !== $data->getDisplayPatternIds()) {
            $values_3 = [];
            foreach ($data->getDisplayPatternIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['displayPatternIds'] = $values_3;
        }
        if ($data->isInitialized('sort') && null !== $data->getSort()) {
            $values_4 = [];
            foreach ($data->getSort() as $value_4) {
                $values_4[] = $value_4 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['sort'] = $values_4;
        }
        if ($data->isInitialized('limit') && null !== $data->getLimit()) {
            $dataArray['limit'] = $data->getLimit();
        }
        if ($data->isInitialized('pageToken') && null !== $data->getPageToken()) {
            $dataArray['pageToken'] = $data->getPageToken();
        }
        if ($data->isInitialized('rightsFilter') && null !== $data->getRightsFilter()) {
            $values_5 = [];
            foreach ($data->getRightsFilter() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['rightsFilter'] = $values_5;
        }
        if ($data->isInitialized('rightsAggregations') && null !== $data->getRightsAggregations()) {
            $values_6 = [];
            foreach ($data->getRightsAggregations() as $value_6) {
                $values_6[] = $value_6;
            }
            $dataArray['rightsAggregations'] = $values_6;
        }
        if ($data->isInitialized('debugMode') && null !== $data->getDebugMode()) {
            $dataArray['debugMode'] = $data->getDebugMode();
        }
        if ($data->isInitialized('aggregators') && null !== $data->getAggregators()) {
            $values_7 = [];
            foreach ($data->getAggregators() as $value_7) {
                $values_7[] = $value_7 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_7, 'json', $context));
            }
            $dataArray['aggregators'] = $values_7;
        }
        foreach ($data as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_8;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ContentSearchRequest::class => false];
    }
}