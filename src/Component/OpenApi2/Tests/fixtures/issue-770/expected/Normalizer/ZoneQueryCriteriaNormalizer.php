<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ZoneQueryCriteriaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneQueryCriteria::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneQueryCriteria::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneQueryCriteria();
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
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneQueryCriteriaFiltersItem::class, 'json', $context);
            }
            $object->filters = $values;
        }
        if (\array_key_exists('extraFilters', $data)) {
            $values_1 = [];
            foreach ($data['extraFilters'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneQueryCriteriaExtraFiltersItem::class, 'json', $context);
            }
            $object->extraFilters = $values_1;
        }
        if (\array_key_exists('extraNotFilters', $data)) {
            $object->extraNotFilters = $data['extraNotFilters'];
        }
        if (\array_key_exists('options', $data)) {
            $object->options = $this->denormalizer->denormalize($data['options'], \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneQueryCriteriaOptions::class, 'json', $context);
        }
        if (\array_key_exists('extraTimeRange', $data)) {
            $object->extraTimeRange = $this->denormalizer->denormalize($data['extraTimeRange'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonTimeRange::class, 'json', $context);
        }
        if (\array_key_exists('fullTextSearch', $data)) {
            $object->fullTextSearch = $this->denormalizer->denormalize($data['fullTextSearch'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonFullTextSearch::class, 'json', $context);
        }
        if (\array_key_exists('attributes', $data)) {
            $values_2 = [];
            foreach ($data['attributes'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->attributes = $values_2;
        }
        if (\array_key_exists('sortInfo', $data)) {
            $object->sortInfo = $this->denormalizer->denormalize($data['sortInfo'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteriaSortInfo::class, 'json', $context);
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
            foreach ($data->filters ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['filters'] = $values;
        }
        if (array_key_exists('extraFilters', get_object_vars($data)) && null !== ($data->extraFilters ?? null)) {
            $values_1 = [];
            foreach ($data->extraFilters ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['extraFilters'] = $values_1;
        }
        if (array_key_exists('extraNotFilters', get_object_vars($data)) && null !== ($data->extraNotFilters ?? null)) {
            $dataArray['extraNotFilters'] = $data->extraNotFilters ?? null;
        }
        if (array_key_exists('options', get_object_vars($data)) && null !== ($data->options ?? null)) {
            $dataArray['options'] = ($data->options ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->options ?? null, 'json', $context));
        }
        if (array_key_exists('extraTimeRange', get_object_vars($data)) && null !== ($data->extraTimeRange ?? null)) {
            $dataArray['extraTimeRange'] = ($data->extraTimeRange ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->extraTimeRange ?? null, 'json', $context));
        }
        if (array_key_exists('fullTextSearch', get_object_vars($data)) && null !== ($data->fullTextSearch ?? null)) {
            $dataArray['fullTextSearch'] = ($data->fullTextSearch ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->fullTextSearch ?? null, 'json', $context));
        }
        if (array_key_exists('attributes', get_object_vars($data)) && null !== ($data->attributes ?? null)) {
            $values_2 = [];
            foreach ($data->attributes ?? null as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['attributes'] = $values_2;
        }
        if (array_key_exists('sortInfo', get_object_vars($data)) && null !== ($data->sortInfo ?? null)) {
            $dataArray['sortInfo'] = ($data->sortInfo ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->sortInfo ?? null, 'json', $context));
        }
        if (array_key_exists('page', get_object_vars($data)) && null !== ($data->page ?? null)) {
            $dataArray['page'] = $data->page ?? null;
        }
        if (array_key_exists('limit', get_object_vars($data)) && null !== ($data->limit ?? null)) {
            $dataArray['limit'] = $data->limit ?? null;
        }
        if (array_key_exists('expandDomains', get_object_vars($data)) && null !== ($data->expandDomains ?? null)) {
            $dataArray['expandDomains'] = $data->expandDomains ?? null;
        }
        if (array_key_exists('criteria', get_object_vars($data)) && null !== ($data->criteria ?? null)) {
            $dataArray['criteria'] = $data->criteria ?? null;
        }
        if (array_key_exists('query', get_object_vars($data)) && null !== ($data->query ?? null)) {
            $dataArray['query'] = $data->query ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ZoneQueryCriteria::class => false];
    }
}