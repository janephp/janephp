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
class UserSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\UserSearchRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\UserSearchRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\UserSearchRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('includeServiceUser', $data) && \is_int($data['includeServiceUser'])) {
            $data['includeServiceUser'] = (bool) $data['includeServiceUser'];
        }
        if (\array_key_exists('editableOnly', $data) && \is_int($data['editableOnly'])) {
            $data['editableOnly'] = (bool) $data['editableOnly'];
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
        if (\array_key_exists('lifeCycleFilter', $data)) {
            $value_2 = $data['lifeCycleFilter'];
            if (is_string($data['lifeCycleFilter'])) {
                $value_2 = $data['lifeCycleFilter'];
            }
            $object->setLifeCycleFilter($value_2);
            unset($data['lifeCycleFilter']);
        }
        if (\array_key_exists('userRightsFilter', $data) && $data['userRightsFilter'] !== null) {
            $values_1 = [];
            foreach ($data['userRightsFilter'] as $value_3) {
                $values_1[] = $value_3;
            }
            $object->setUserRightsFilter($values_1);
            unset($data['userRightsFilter']);
        }
        elseif (\array_key_exists('userRightsFilter', $data) && $data['userRightsFilter'] === null) {
            $object->setUserRightsFilter(null);
            unset($data['userRightsFilter']);
        }
        if (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] !== null) {
            $values_2 = [];
            foreach ($data['aggregationFilters'] as $value_4) {
                $values_2[] = $this->denormalizer->denormalize($value_4, \PicturePark\API\Model\AggregationFilter::class, 'json', $context);
            }
            $object->setAggregationFilters($values_2);
            unset($data['aggregationFilters']);
        }
        elseif (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] === null) {
            $object->setAggregationFilters(null);
            unset($data['aggregationFilters']);
        }
        if (\array_key_exists('includeServiceUser', $data)) {
            $object->setIncludeServiceUser($data['includeServiceUser']);
            unset($data['includeServiceUser']);
        }
        if (\array_key_exists('editableOnly', $data)) {
            $object->setEditableOnly($data['editableOnly']);
            unset($data['editableOnly']);
        }
        if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
            $values_3 = [];
            foreach ($data['sort'] as $value_5) {
                $values_3[] = $this->denormalizer->denormalize($value_5, \PicturePark\API\Model\SortInfo::class, 'json', $context);
            }
            $object->setSort($values_3);
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
        if (\array_key_exists('debugMode', $data)) {
            $object->setDebugMode($data['debugMode']);
            unset($data['debugMode']);
        }
        if (\array_key_exists('aggregators', $data) && $data['aggregators'] !== null) {
            $values_4 = [];
            foreach ($data['aggregators'] as $value_6) {
                $values_4[] = $this->denormalizer->denormalize($value_6, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->setAggregators($values_4);
            unset($data['aggregators']);
        }
        elseif (\array_key_exists('aggregators', $data) && $data['aggregators'] === null) {
            $object->setAggregators(null);
            unset($data['aggregators']);
        }
        foreach ($data as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_7;
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
        $value_2 = $data->getLifeCycleFilter();
        if (is_string($data->getLifeCycleFilter())) {
            $value_2 = $data->getLifeCycleFilter();
        }
        $dataArray['lifeCycleFilter'] = $value_2;
        if ($data->isInitialized('userRightsFilter') && null !== $data->getUserRightsFilter()) {
            $values_1 = [];
            foreach ($data->getUserRightsFilter() as $value_3) {
                $values_1[] = $value_3;
            }
            $dataArray['userRightsFilter'] = $values_1;
        }
        if ($data->isInitialized('aggregationFilters') && null !== $data->getAggregationFilters()) {
            $values_2 = [];
            foreach ($data->getAggregationFilters() as $value_4) {
                $values_2[] = $value_4 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['aggregationFilters'] = $values_2;
        }
        $dataArray['includeServiceUser'] = $data->getIncludeServiceUser();
        $dataArray['editableOnly'] = $data->getEditableOnly();
        if ($data->isInitialized('sort') && null !== $data->getSort()) {
            $values_3 = [];
            foreach ($data->getSort() as $value_5) {
                $values_3[] = $value_5 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['sort'] = $values_3;
        }
        if ($data->isInitialized('limit') && null !== $data->getLimit()) {
            $dataArray['limit'] = $data->getLimit();
        }
        if ($data->isInitialized('pageToken') && null !== $data->getPageToken()) {
            $dataArray['pageToken'] = $data->getPageToken();
        }
        if ($data->isInitialized('debugMode') && null !== $data->getDebugMode()) {
            $dataArray['debugMode'] = $data->getDebugMode();
        }
        if ($data->isInitialized('aggregators') && null !== $data->getAggregators()) {
            $values_4 = [];
            foreach ($data->getAggregators() as $value_6) {
                $values_4[] = $value_6 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_6, 'json', $context));
            }
            $dataArray['aggregators'] = $values_4;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_7;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\UserSearchRequest::class => false];
    }
}