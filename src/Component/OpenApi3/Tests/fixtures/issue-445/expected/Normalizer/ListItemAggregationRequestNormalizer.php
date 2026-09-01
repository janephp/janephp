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
class ListItemAggregationRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ListItemAggregationRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ListItemAggregationRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ListItemAggregationRequest();
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
        if (\array_key_exists('aggregators', $data)) {
            $values_4 = [];
            foreach ($data['aggregators'] as $value_7) {
                $values_4[] = $this->denormalizer->denormalize($value_7, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->aggregators = $values_4;
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
        $values_4 = [];
        foreach ($data->aggregators ?? null as $value_7) {
            $values_4[] = $value_7 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_7, 'json', $context));
        }
        $dataArray['aggregators'] = $values_4;
        foreach ($data->additionalPropertyEntries() as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_8;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ListItemAggregationRequest::class => false];
    }
}