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
class ListItemSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ListItemSearchRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ListItemSearchRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ListItemSearchRequest();
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
        if (\array_key_exists('debugMode', $data) && \is_int($data['debugMode'])) {
            $data['debugMode'] = (bool) $data['debugMode'];
        }
        if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
            $object->searchString = $data['searchString'];
            unset($data['searchString']);
        }
        elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
            $object->searchString = null;
            unset($data['searchString']);
        }
        if (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] !== null) {
            $values = [];
            foreach ($data['searchBehaviors'] as $value) {
                $values[] = $value;
            }
            $object->searchBehaviors = $values;
            unset($data['searchBehaviors']);
        }
        elseif (\array_key_exists('searchBehaviors', $data) && $data['searchBehaviors'] === null) {
            $object->searchBehaviors = null;
            unset($data['searchBehaviors']);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $value_1 = $data['filter'];
            if (is_array($data['filter']) and \array_key_exists('kind', $data['filter'])) {
                $value_1 = $this->denormalizer->denormalize($data['filter'], \PicturePark\API\Model\FilterBase::class, 'json', $context);
            }
            $object->filter = $value_1;
            unset($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->filter = null;
            unset($data['filter']);
        }
        if (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] !== null) {
            $values_1 = [];
            foreach ($data['aggregationFilters'] as $value_2) {
                $values_1[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\AggregationFilter::class, 'json', $context);
            }
            $object->aggregationFilters = $values_1;
            unset($data['aggregationFilters']);
        }
        elseif (\array_key_exists('aggregationFilters', $data) && $data['aggregationFilters'] === null) {
            $object->aggregationFilters = null;
            unset($data['aggregationFilters']);
        }
        if (\array_key_exists('includeAllSchemaChildren', $data)) {
            $object->includeAllSchemaChildren = $data['includeAllSchemaChildren'];
            unset($data['includeAllSchemaChildren']);
        }
        if (\array_key_exists('brokenDependenciesFilter', $data)) {
            $value_3 = $data['brokenDependenciesFilter'];
            if (is_string($data['brokenDependenciesFilter'])) {
                $value_3 = $data['brokenDependenciesFilter'];
            }
            $object->brokenDependenciesFilter = $value_3;
            unset($data['brokenDependenciesFilter']);
        }
        if (\array_key_exists('schemaIds', $data) && $data['schemaIds'] !== null) {
            $values_2 = [];
            foreach ($data['schemaIds'] as $value_4) {
                $values_2[] = $value_4;
            }
            $object->schemaIds = $values_2;
            unset($data['schemaIds']);
        }
        elseif (\array_key_exists('schemaIds', $data) && $data['schemaIds'] === null) {
            $object->schemaIds = null;
            unset($data['schemaIds']);
        }
        if (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] !== null) {
            $values_3 = [];
            foreach ($data['searchLanguages'] as $value_5) {
                $values_3[] = $value_5;
            }
            $object->searchLanguages = $values_3;
            unset($data['searchLanguages']);
        }
        elseif (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] === null) {
            $object->searchLanguages = null;
            unset($data['searchLanguages']);
        }
        if (\array_key_exists('lifeCycleFilter', $data)) {
            $value_6 = $data['lifeCycleFilter'];
            if (is_string($data['lifeCycleFilter'])) {
                $value_6 = $data['lifeCycleFilter'];
            }
            $object->lifeCycleFilter = $value_6;
            unset($data['lifeCycleFilter']);
        }
        if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
            $values_4 = [];
            foreach ($data['sort'] as $value_7) {
                $values_4[] = $this->denormalizer->denormalize($value_7, \PicturePark\API\Model\SortInfo::class, 'json', $context);
            }
            $object->sort = $values_4;
            unset($data['sort']);
        }
        elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
            $object->sort = null;
            unset($data['sort']);
        }
        if (\array_key_exists('limit', $data)) {
            $object->limit = $data['limit'];
            unset($data['limit']);
        }
        if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
            $object->pageToken = $data['pageToken'];
            unset($data['pageToken']);
        }
        elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
            $object->pageToken = null;
            unset($data['pageToken']);
        }
        if (\array_key_exists('debugMode', $data)) {
            $object->debugMode = $data['debugMode'];
            unset($data['debugMode']);
        }
        if (\array_key_exists('resolveBehaviors', $data) && $data['resolveBehaviors'] !== null) {
            $values_5 = [];
            foreach ($data['resolveBehaviors'] as $value_8) {
                $values_5[] = $value_8;
            }
            $object->resolveBehaviors = $values_5;
            unset($data['resolveBehaviors']);
        }
        elseif (\array_key_exists('resolveBehaviors', $data) && $data['resolveBehaviors'] === null) {
            $object->resolveBehaviors = null;
            unset($data['resolveBehaviors']);
        }
        if (\array_key_exists('aggregators', $data) && $data['aggregators'] !== null) {
            $values_6 = [];
            foreach ($data['aggregators'] as $value_9) {
                $values_6[] = $this->denormalizer->denormalize($value_9, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->aggregators = $values_6;
            unset($data['aggregators']);
        }
        elseif (\array_key_exists('aggregators', $data) && $data['aggregators'] === null) {
            $object->aggregators = null;
            unset($data['aggregators']);
        }
        foreach ($data as $key => $value_10) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_10;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('searchString', get_object_vars($data)) && null !== ($data->searchString ?? null)) {
            $dataArray['searchString'] = $data->searchString ?? null;
        }
        if (array_key_exists('searchBehaviors', get_object_vars($data)) && null !== ($data->searchBehaviors ?? null)) {
            $values = [];
            foreach ($data->searchBehaviors ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['searchBehaviors'] = $values;
        }
        if (array_key_exists('filter', get_object_vars($data)) && null !== ($data->filter ?? null)) {
            $value_1 = $data->filter ?? null;
            if (is_object($data->filter ?? null)) {
                $value_1 = ($data->filter ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->filter ?? null, 'json', $context));
            }
            $dataArray['filter'] = $value_1;
        }
        if (array_key_exists('aggregationFilters', get_object_vars($data)) && null !== ($data->aggregationFilters ?? null)) {
            $values_1 = [];
            foreach ($data->aggregationFilters ?? null as $value_2) {
                $values_1[] = $value_2 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['aggregationFilters'] = $values_1;
        }
        $dataArray['includeAllSchemaChildren'] = $data->includeAllSchemaChildren ?? null;
        $value_3 = $data->brokenDependenciesFilter ?? null;
        if (is_string($data->brokenDependenciesFilter ?? null)) {
            $value_3 = $data->brokenDependenciesFilter ?? null;
        }
        $dataArray['brokenDependenciesFilter'] = $value_3;
        if (array_key_exists('schemaIds', get_object_vars($data)) && null !== ($data->schemaIds ?? null)) {
            $values_2 = [];
            foreach ($data->schemaIds ?? null as $value_4) {
                $values_2[] = $value_4;
            }
            $dataArray['schemaIds'] = $values_2;
        }
        if (array_key_exists('searchLanguages', get_object_vars($data)) && null !== ($data->searchLanguages ?? null)) {
            $values_3 = [];
            foreach ($data->searchLanguages ?? null as $value_5) {
                $values_3[] = $value_5;
            }
            $dataArray['searchLanguages'] = $values_3;
        }
        $value_6 = $data->lifeCycleFilter ?? null;
        if (is_string($data->lifeCycleFilter ?? null)) {
            $value_6 = $data->lifeCycleFilter ?? null;
        }
        $dataArray['lifeCycleFilter'] = $value_6;
        if (array_key_exists('sort', get_object_vars($data)) && null !== ($data->sort ?? null)) {
            $values_4 = [];
            foreach ($data->sort ?? null as $value_7) {
                $values_4[] = $value_7 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_7, 'json', $context));
            }
            $dataArray['sort'] = $values_4;
        }
        if (array_key_exists('limit', get_object_vars($data)) && null !== ($data->limit ?? null)) {
            $dataArray['limit'] = $data->limit ?? null;
        }
        if (array_key_exists('pageToken', get_object_vars($data)) && null !== ($data->pageToken ?? null)) {
            $dataArray['pageToken'] = $data->pageToken ?? null;
        }
        if (array_key_exists('debugMode', get_object_vars($data)) && null !== ($data->debugMode ?? null)) {
            $dataArray['debugMode'] = $data->debugMode ?? null;
        }
        if (array_key_exists('resolveBehaviors', get_object_vars($data)) && null !== ($data->resolveBehaviors ?? null)) {
            $values_5 = [];
            foreach ($data->resolveBehaviors ?? null as $value_8) {
                $values_5[] = $value_8;
            }
            $dataArray['resolveBehaviors'] = $values_5;
        }
        if (array_key_exists('aggregators', get_object_vars($data)) && null !== ($data->aggregators ?? null)) {
            $values_6 = [];
            foreach ($data->aggregators ?? null as $value_9) {
                $values_6[] = $value_9 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_9, 'json', $context));
            }
            $dataArray['aggregators'] = $values_6;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_10) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_10;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ListItemSearchRequest::class => false];
    }
}