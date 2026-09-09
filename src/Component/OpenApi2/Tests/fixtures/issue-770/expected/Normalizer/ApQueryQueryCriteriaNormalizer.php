<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ApQueryQueryCriteriaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryQueryCriteria::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryQueryCriteria::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryQueryCriteria();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('expandDomains', $data) && \is_int($data['expandDomains'])) {
            $data['expandDomains'] = (bool) $data['expandDomains'];
        }
        if (\array_key_exists('filters', $data)) {
            $values = [];
            foreach ($data['filters'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryQueryCriteriaFiltersItem::class, 'json', $context);
            }
            $object->filters = $values;
        }
        if (\array_key_exists('extraFilters', $data)) {
            $values_1 = [];
            foreach ($data['extraFilters'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryQueryCriteriaExtraFiltersItem::class, 'json', $context);
            }
            $object->extraFilters = $values_1;
        }
        if (\array_key_exists('extraNotFilters', $data)) {
            $values_2 = [];
            foreach ($data['extraNotFilters'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryQueryCriteriaExtraNotFiltersItem::class, 'json', $context);
            }
            $object->extraNotFilters = $values_2;
        }
        if (\array_key_exists('options', $data)) {
            $object->options = $this->denormalizer->denormalize($data['options'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryQueryCriteriaOptions::class, 'json', $context);
        }
        if (\array_key_exists('extraTimeRange', $data)) {
            $object->extraTimeRange = $this->denormalizer->denormalize($data['extraTimeRange'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonTimeRange::class, 'json', $context);
        }
        if (\array_key_exists('fullTextSearch', $data)) {
            $object->fullTextSearch = $this->denormalizer->denormalize($data['fullTextSearch'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonFullTextSearch::class, 'json', $context);
        }
        if (\array_key_exists('attributes', $data)) {
            $values_3 = [];
            foreach ($data['attributes'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->attributes = $values_3;
        }
        if (\array_key_exists('sortInfo', $data)) {
            $object->sortInfo = $this->denormalizer->denormalize($data['sortInfo'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonQueryCriteriaSortInfo::class, 'json', $context);
        }
        if (\array_key_exists('page', $data)) {
            $object->page = $data['page'];
        }
        if (\array_key_exists('limit', $data)) {
            $object->limit = $data['limit'];
        }
        if (\array_key_exists('expandDomains', $data)) {
            $object->expandDomains = $data['expandDomains'];
        }
        if (\array_key_exists('criteria', $data)) {
            $object->criteria = $data['criteria'];
        }
        if (\array_key_exists('query', $data)) {
            $object->query = $data['query'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('filters', get_object_vars($data)) && null !== ($data->filters ?? null)) {
            $values = [];
            foreach ($data->filters as $value) {
                $normalized = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['filters'] = $values;
        }
        if (array_key_exists('extraFilters', get_object_vars($data)) && null !== ($data->extraFilters ?? null)) {
            $values_1 = [];
            foreach ($data->extraFilters as $value_1) {
                $normalized_1 = $value_1 === null ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = \is_iterable($normalized_1) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['extraFilters'] = $values_1;
        }
        if (array_key_exists('extraNotFilters', get_object_vars($data)) && null !== ($data->extraNotFilters ?? null)) {
            $values_2 = [];
            foreach ($data->extraNotFilters as $value_2) {
                $normalized_2 = $value_2 === null ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = \is_iterable($normalized_2) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['extraNotFilters'] = $values_2;
        }
        if (array_key_exists('options', get_object_vars($data)) && null !== ($data->options ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->options, 'json', $context);
            $dataArray['options'] = \is_iterable($normalized_3) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('extraTimeRange', get_object_vars($data)) && null !== ($data->extraTimeRange ?? null)) {
            $normalized_4 = $this->normalizer->normalize($data->extraTimeRange, 'json', $context);
            $dataArray['extraTimeRange'] = \is_iterable($normalized_4) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        if (array_key_exists('fullTextSearch', get_object_vars($data)) && null !== ($data->fullTextSearch ?? null)) {
            $normalized_5 = $this->normalizer->normalize($data->fullTextSearch, 'json', $context);
            $dataArray['fullTextSearch'] = \is_iterable($normalized_5) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_5) : $normalized_5;
        }
        if (array_key_exists('attributes', get_object_vars($data)) && null !== ($data->attributes ?? null)) {
            $values_3 = [];
            foreach ($data->attributes as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['attributes'] = $values_3;
        }
        if (array_key_exists('sortInfo', get_object_vars($data)) && null !== ($data->sortInfo ?? null)) {
            $normalized_6 = $this->normalizer->normalize($data->sortInfo, 'json', $context);
            $dataArray['sortInfo'] = \is_iterable($normalized_6) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_6) : $normalized_6;
        }
        if (array_key_exists('page', get_object_vars($data)) && null !== ($data->page ?? null)) {
            $dataArray['page'] = $data->page;
        }
        if (array_key_exists('limit', get_object_vars($data)) && null !== ($data->limit ?? null)) {
            $dataArray['limit'] = $data->limit;
        }
        if (array_key_exists('expandDomains', get_object_vars($data)) && null !== ($data->expandDomains ?? null)) {
            $dataArray['expandDomains'] = $data->expandDomains;
        }
        if (array_key_exists('criteria', get_object_vars($data)) && null !== ($data->criteria ?? null)) {
            $dataArray['criteria'] = $data->criteria;
        }
        if (array_key_exists('query', get_object_vars($data)) && null !== ($data->query ?? null)) {
            $dataArray['query'] = $data->query;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryQueryCriteria::class => false];
    }
}