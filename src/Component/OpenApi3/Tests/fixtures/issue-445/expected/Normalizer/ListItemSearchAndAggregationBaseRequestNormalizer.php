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
class ListItemSearchAndAggregationBaseRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ListItemSearchAndAggregationBaseRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ListItemSearchAndAggregationBaseRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ListItemSearchAndAggregationBaseRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('includeAllSchemaChildren', $data) && \is_int($data['includeAllSchemaChildren'])) {
            $data['includeAllSchemaChildren'] = (bool) $data['includeAllSchemaChildren'];
        }
        if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
            $object->setSearchString($data['searchString']);
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
        }
        elseif (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] === null) {
            $object->setSearchBehaviors(null);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $value_1 = $data['filter'];
            if (is_array($data['filter']) and \array_key_exists('kind', $data['filter'])) {
                $value_1 = $this->denormalizer->denormalize($data['filter'], \PicturePark\API\Model\FilterBase::class, 'json', $context);
            }
            $object->setFilter($value_1);
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
        }
        elseif (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] === null) {
            $object->setAggregationFilters(null);
        }
        if (\array_key_exists('includeAllSchemaChildren', $data)) {
            $object->setIncludeAllSchemaChildren($data['includeAllSchemaChildren']);
        }
        if (\array_key_exists('brokenDependenciesFilter', $data)) {
            $value_3 = $data['brokenDependenciesFilter'];
            if (is_string($data['brokenDependenciesFilter'])) {
                $value_3 = $data['brokenDependenciesFilter'];
            }
            $object->setBrokenDependenciesFilter($value_3);
        }
        if (\array_key_exists('schemaIds', $data) && $data['schemaIds'] !== null) {
            $values_2 = [];
            foreach ($data['schemaIds'] as $value_4) {
                $values_2[] = $value_4;
            }
            $object->setSchemaIds($values_2);
        }
        elseif (\array_key_exists('schemaIds', $data) && $data['schemaIds'] === null) {
            $object->setSchemaIds(null);
        }
        if (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] !== null) {
            $values_3 = [];
            foreach ($data['searchLanguages'] as $value_5) {
                $values_3[] = $value_5;
            }
            $object->setSearchLanguages($values_3);
        }
        elseif (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] === null) {
            $object->setSearchLanguages(null);
        }
        if (\array_key_exists('lifeCycleFilter', $data)) {
            $value_6 = $data['lifeCycleFilter'];
            if (is_string($data['lifeCycleFilter'])) {
                $value_6 = $data['lifeCycleFilter'];
            }
            $object->setLifeCycleFilter($value_6);
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
        $dataArray['includeAllSchemaChildren'] = $data->getIncludeAllSchemaChildren();
        $value_3 = $data->getBrokenDependenciesFilter();
        if (is_string($data->getBrokenDependenciesFilter())) {
            $value_3 = $data->getBrokenDependenciesFilter();
        }
        $dataArray['brokenDependenciesFilter'] = $value_3;
        if ($data->isInitialized('schemaIds') && null !== $data->getSchemaIds()) {
            $values_2 = [];
            foreach ($data->getSchemaIds() as $value_4) {
                $values_2[] = $value_4;
            }
            $dataArray['schemaIds'] = $values_2;
        }
        if ($data->isInitialized('searchLanguages') && null !== $data->getSearchLanguages()) {
            $values_3 = [];
            foreach ($data->getSearchLanguages() as $value_5) {
                $values_3[] = $value_5;
            }
            $dataArray['searchLanguages'] = $values_3;
        }
        $value_6 = $data->getLifeCycleFilter();
        if (is_string($data->getLifeCycleFilter())) {
            $value_6 = $data->getLifeCycleFilter();
        }
        $dataArray['lifeCycleFilter'] = $value_6;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ListItemSearchAndAggregationBaseRequest::class => false];
    }
}