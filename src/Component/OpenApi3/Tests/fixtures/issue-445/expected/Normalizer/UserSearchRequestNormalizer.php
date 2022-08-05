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
class UserSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\UserSearchRequest';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\UserSearchRequest';
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
        $object = new \PicturePark\API\Model\UserSearchRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
            $object->setSearchString($data['searchString']);
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
        }
        elseif (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] === null) {
            $object->setSearchBehaviors(null);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $object->setFilter($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->setFilter(null);
        }
        if (\array_key_exists('lifeCycleFilter', $data)) {
            $object->setLifeCycleFilter($data['lifeCycleFilter']);
        }
        if (\array_key_exists('userRightsFilter', $data) && $data['userRightsFilter'] !== null) {
            $values_1 = array();
            foreach ($data['userRightsFilter'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setUserRightsFilter($values_1);
        }
        elseif (\array_key_exists('userRightsFilter', $data) && $data['userRightsFilter'] === null) {
            $object->setUserRightsFilter(null);
        }
        if (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] !== null) {
            $values_2 = array();
            foreach ($data['aggregationFilters'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'PicturePark\\API\\Model\\AggregationFilter', 'json', $context);
            }
            $object->setAggregationFilters($values_2);
        }
        elseif (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] === null) {
            $object->setAggregationFilters(null);
        }
        if (\array_key_exists('includeServiceUser', $data)) {
            $object->setIncludeServiceUser($data['includeServiceUser']);
        }
        if (\array_key_exists('editableOnly', $data)) {
            $object->setEditableOnly($data['editableOnly']);
        }
        if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
            $values_3 = array();
            foreach ($data['sort'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'PicturePark\\API\\Model\\SortInfo', 'json', $context);
            }
            $object->setSort($values_3);
        }
        elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
            $object->setSort(null);
        }
        if (\array_key_exists('limit', $data)) {
            $object->setLimit($data['limit']);
        }
        if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
            $object->setPageToken($data['pageToken']);
        }
        elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
            $object->setPageToken(null);
        }
        if (\array_key_exists('debugMode', $data)) {
            $object->setDebugMode($data['debugMode']);
        }
        if (\array_key_exists('aggregators', $data) && $data['aggregators'] !== null) {
            $values_4 = array();
            foreach ($data['aggregators'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'PicturePark\\API\\Model\\AggregatorBase', 'json', $context);
            }
            $object->setAggregators($values_4);
        }
        elseif (\array_key_exists('aggregators', $data) && $data['aggregators'] === null) {
            $object->setAggregators(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSearchString()) {
            $data['searchString'] = $object->getSearchString();
        }
        if (null !== $object->getSearchBehaviors()) {
            $values = array();
            foreach ($object->getSearchBehaviors() as $value) {
                $values[] = $value;
            }
            $data['searchBehaviors'] = $values;
        }
        if (null !== $object->getFilter()) {
            $data['filter'] = $object->getFilter();
        }
        $data['lifeCycleFilter'] = $object->getLifeCycleFilter();
        if (null !== $object->getUserRightsFilter()) {
            $values_1 = array();
            foreach ($object->getUserRightsFilter() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['userRightsFilter'] = $values_1;
        }
        if (null !== $object->getAggregationFilters()) {
            $values_2 = array();
            foreach ($object->getAggregationFilters() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['aggregationFilters'] = $values_2;
        }
        $data['includeServiceUser'] = $object->getIncludeServiceUser();
        $data['editableOnly'] = $object->getEditableOnly();
        if (null !== $object->getSort()) {
            $values_3 = array();
            foreach ($object->getSort() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['sort'] = $values_3;
        }
        if (null !== $object->getLimit()) {
            $data['limit'] = $object->getLimit();
        }
        if (null !== $object->getPageToken()) {
            $data['pageToken'] = $object->getPageToken();
        }
        if (null !== $object->getDebugMode()) {
            $data['debugMode'] = $object->getDebugMode();
        }
        if (null !== $object->getAggregators()) {
            $values_4 = array();
            foreach ($object->getAggregators() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['aggregators'] = $values_4;
        }
        return $data;
    }
}