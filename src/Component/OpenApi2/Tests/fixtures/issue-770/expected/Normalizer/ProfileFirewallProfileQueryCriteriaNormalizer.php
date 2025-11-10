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
class ProfileFirewallProfileQueryCriteriaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileFirewallProfileQueryCriteria::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileFirewallProfileQueryCriteria::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileFirewallProfileQueryCriteria();
        if (\array_key_exists('expandDomains', $data) && \is_int($data['expandDomains'])) {
            $data['expandDomains'] = (bool) $data['expandDomains'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('filters', $data)) {
            $values = [];
            foreach ($data['filters'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteriaFiltersItem::class, 'json', $context);
            }
            $object->setFilters($values);
        }
        if (\array_key_exists('extraFilters', $data)) {
            $values_1 = [];
            foreach ($data['extraFilters'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteriaExtraFiltersItem::class, 'json', $context);
            }
            $object->setExtraFilters($values_1);
        }
        if (\array_key_exists('extraNotFilters', $data)) {
            $values_2 = [];
            foreach ($data['extraNotFilters'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteriaExtraNotFiltersItem::class, 'json', $context);
            }
            $object->setExtraNotFilters($values_2);
        }
        if (\array_key_exists('options', $data)) {
            $object->setOptions($this->denormalizer->denormalize($data['options'], \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileFirewallProfileQueryCriteriaoptions::class, 'json', $context));
        }
        if (\array_key_exists('extraTimeRange', $data)) {
            $object->setExtraTimeRange($this->denormalizer->denormalize($data['extraTimeRange'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonTimeRange::class, 'json', $context));
        }
        if (\array_key_exists('fullTextSearch', $data)) {
            $object->setFullTextSearch($this->denormalizer->denormalize($data['fullTextSearch'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonFullTextSearch::class, 'json', $context));
        }
        if (\array_key_exists('attributes', $data)) {
            $values_3 = [];
            foreach ($data['attributes'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setAttributes($values_3);
        }
        if (\array_key_exists('sortInfo', $data)) {
            $object->setSortInfo($this->denormalizer->denormalize($data['sortInfo'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteriaSortInfo::class, 'json', $context));
        }
        if (\array_key_exists('page', $data)) {
            $object->setPage($data['page']);
        }
        if (\array_key_exists('limit', $data)) {
            $object->setLimit($data['limit']);
        }
        if (\array_key_exists('expandDomains', $data)) {
            $object->setExpandDomains($data['expandDomains']);
        }
        if (\array_key_exists('criteria', $data)) {
            $object->setCriteria($data['criteria']);
        }
        if (\array_key_exists('query', $data)) {
            $object->setQuery($data['query']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('filters') && null !== $data->getFilters()) {
            $values = [];
            foreach ($data->getFilters() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['filters'] = $values;
        }
        if ($data->isInitialized('extraFilters') && null !== $data->getExtraFilters()) {
            $values_1 = [];
            foreach ($data->getExtraFilters() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['extraFilters'] = $values_1;
        }
        if ($data->isInitialized('extraNotFilters') && null !== $data->getExtraNotFilters()) {
            $values_2 = [];
            foreach ($data->getExtraNotFilters() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['extraNotFilters'] = $values_2;
        }
        if ($data->isInitialized('options') && null !== $data->getOptions()) {
            $dataArray['options'] = $this->normalizer->normalize($data->getOptions(), 'json', $context);
        }
        if ($data->isInitialized('extraTimeRange') && null !== $data->getExtraTimeRange()) {
            $dataArray['extraTimeRange'] = $this->normalizer->normalize($data->getExtraTimeRange(), 'json', $context);
        }
        if ($data->isInitialized('fullTextSearch') && null !== $data->getFullTextSearch()) {
            $dataArray['fullTextSearch'] = $this->normalizer->normalize($data->getFullTextSearch(), 'json', $context);
        }
        if ($data->isInitialized('attributes') && null !== $data->getAttributes()) {
            $values_3 = [];
            foreach ($data->getAttributes() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['attributes'] = $values_3;
        }
        if ($data->isInitialized('sortInfo') && null !== $data->getSortInfo()) {
            $dataArray['sortInfo'] = $this->normalizer->normalize($data->getSortInfo(), 'json', $context);
        }
        if ($data->isInitialized('page') && null !== $data->getPage()) {
            $dataArray['page'] = $data->getPage();
        }
        if ($data->isInitialized('limit') && null !== $data->getLimit()) {
            $dataArray['limit'] = $data->getLimit();
        }
        if ($data->isInitialized('expandDomains') && null !== $data->getExpandDomains()) {
            $dataArray['expandDomains'] = $data->getExpandDomains();
        }
        if ($data->isInitialized('criteria') && null !== $data->getCriteria()) {
            $dataArray['criteria'] = $data->getCriteria();
        }
        if ($data->isInitialized('query') && null !== $data->getQuery()) {
            $dataArray['query'] = $data->getQuery();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileFirewallProfileQueryCriteria::class => false];
    }
}