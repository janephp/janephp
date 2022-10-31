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
class ContentSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\ContentSearchRequest';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ContentSearchRequest';
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
        $object = new \PicturePark\API\Model\ContentSearchRequest();
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
            $values = array();
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
            $object->setFilter($data['filter']);
            unset($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->setFilter(null);
        }
        if (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] !== null) {
            $values_1 = array();
            foreach ($data['aggregationFilters'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\AggregationFilter', 'json', $context);
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
            $values_2 = array();
            foreach ($data['searchLanguages'] as $value_2) {
                $values_2[] = $value_2;
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
            $values_3 = array();
            foreach ($data['displayPatternIds'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setDisplayPatternIds($values_3);
            unset($data['displayPatternIds']);
        }
        elseif (\array_key_exists('displayPatternIds', $data) && $data['displayPatternIds'] === null) {
            $object->setDisplayPatternIds(null);
        }
        if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
            $values_4 = array();
            foreach ($data['sort'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'PicturePark\\API\\Model\\SortInfo', 'json', $context);
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
            $values_5 = array();
            foreach ($data['rightsFilter'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setRightsFilter($values_5);
            unset($data['rightsFilter']);
        }
        elseif (\array_key_exists('rightsFilter', $data) && $data['rightsFilter'] === null) {
            $object->setRightsFilter(null);
        }
        if (\array_key_exists('rightsAggregations', $data) && $data['rightsAggregations'] !== null) {
            $values_6 = array();
            foreach ($data['rightsAggregations'] as $value_6) {
                $values_6[] = $value_6;
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
            $values_7 = array();
            foreach ($data['aggregators'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'PicturePark\\API\\Model\\AggregatorBase', 'json', $context);
            }
            $object->setAggregators($values_7);
            unset($data['aggregators']);
        }
        elseif (\array_key_exists('aggregators', $data) && $data['aggregators'] === null) {
            $object->setAggregators(null);
        }
        foreach ($data as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_8;
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
        if ($object->isInitialized('searchString') && null !== $object->getSearchString()) {
            $data['searchString'] = $object->getSearchString();
        }
        if ($object->isInitialized('searchBehaviors') && null !== $object->getSearchBehaviors()) {
            $values = array();
            foreach ($object->getSearchBehaviors() as $value) {
                $values[] = $value;
            }
            $data['searchBehaviors'] = $values;
        }
        if ($object->isInitialized('filter') && null !== $object->getFilter()) {
            $data['filter'] = $object->getFilter();
        }
        if ($object->isInitialized('aggregationFilters') && null !== $object->getAggregationFilters()) {
            $values_1 = array();
            foreach ($object->getAggregationFilters() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['aggregationFilters'] = $values_1;
        }
        if ($object->isInitialized('channelId') && null !== $object->getChannelId()) {
            $data['channelId'] = $object->getChannelId();
        }
        if ($object->isInitialized('searchLanguages') && null !== $object->getSearchLanguages()) {
            $values_2 = array();
            foreach ($object->getSearchLanguages() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['searchLanguages'] = $values_2;
        }
        if ($object->isInitialized('collectionId') && null !== $object->getCollectionId()) {
            $data['collectionId'] = $object->getCollectionId();
        }
        $data['lifeCycleFilter'] = $object->getLifeCycleFilter();
        $data['brokenDependenciesFilter'] = $object->getBrokenDependenciesFilter();
        $data['searchType'] = $object->getSearchType();
        if ($object->isInitialized('displayPatternIds') && null !== $object->getDisplayPatternIds()) {
            $values_3 = array();
            foreach ($object->getDisplayPatternIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['displayPatternIds'] = $values_3;
        }
        if ($object->isInitialized('sort') && null !== $object->getSort()) {
            $values_4 = array();
            foreach ($object->getSort() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['sort'] = $values_4;
        }
        if ($object->isInitialized('limit') && null !== $object->getLimit()) {
            $data['limit'] = $object->getLimit();
        }
        if ($object->isInitialized('pageToken') && null !== $object->getPageToken()) {
            $data['pageToken'] = $object->getPageToken();
        }
        if ($object->isInitialized('rightsFilter') && null !== $object->getRightsFilter()) {
            $values_5 = array();
            foreach ($object->getRightsFilter() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['rightsFilter'] = $values_5;
        }
        if ($object->isInitialized('rightsAggregations') && null !== $object->getRightsAggregations()) {
            $values_6 = array();
            foreach ($object->getRightsAggregations() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['rightsAggregations'] = $values_6;
        }
        if ($object->isInitialized('debugMode') && null !== $object->getDebugMode()) {
            $data['debugMode'] = $object->getDebugMode();
        }
        if ($object->isInitialized('aggregators') && null !== $object->getAggregators()) {
            $values_7 = array();
            foreach ($object->getAggregators() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['aggregators'] = $values_7;
        }
        foreach ($object as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_8;
            }
        }
        return $data;
    }
}