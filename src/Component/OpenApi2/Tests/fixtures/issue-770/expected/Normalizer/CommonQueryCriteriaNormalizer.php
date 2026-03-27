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
class CommonQueryCriteriaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteria::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteria::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteria();
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
            $object->setFilters($data['filters']);
        }
        if (\array_key_exists('extraFilters', $data)) {
            $object->setExtraFilters($data['extraFilters']);
        }
        if (\array_key_exists('extraNotFilters', $data)) {
            $object->setExtraNotFilters($data['extraNotFilters']);
        }
        if (\array_key_exists('options', $data)) {
            $object->setOptions($data['options']);
        }
        if (\array_key_exists('extraTimeRange', $data)) {
            $object->setExtraTimeRange($this->denormalizer->denormalize($data['extraTimeRange'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonTimeRange::class, 'json', $context));
        }
        if (\array_key_exists('fullTextSearch', $data)) {
            $object->setFullTextSearch($this->denormalizer->denormalize($data['fullTextSearch'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonFullTextSearch::class, 'json', $context));
        }
        if (\array_key_exists('attributes', $data)) {
            $values = [];
            foreach ($data['attributes'] as $value) {
                $values[] = $value;
            }
            $object->setAttributes($values);
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
            $dataArray['filters'] = $data->getFilters();
        }
        if ($data->isInitialized('extraFilters') && null !== $data->getExtraFilters()) {
            $dataArray['extraFilters'] = $data->getExtraFilters();
        }
        if ($data->isInitialized('extraNotFilters') && null !== $data->getExtraNotFilters()) {
            $dataArray['extraNotFilters'] = $data->getExtraNotFilters();
        }
        if ($data->isInitialized('options') && null !== $data->getOptions()) {
            $dataArray['options'] = $data->getOptions();
        }
        if ($data->isInitialized('extraTimeRange') && null !== $data->getExtraTimeRange()) {
            $dataArray['extraTimeRange'] = $this->normalizer->normalize($data->getExtraTimeRange(), 'json', $context);
        }
        if ($data->isInitialized('fullTextSearch') && null !== $data->getFullTextSearch()) {
            $dataArray['fullTextSearch'] = $this->normalizer->normalize($data->getFullTextSearch(), 'json', $context);
        }
        if ($data->isInitialized('attributes') && null !== $data->getAttributes()) {
            $values = [];
            foreach ($data->getAttributes() as $value) {
                $values[] = $value;
            }
            $dataArray['attributes'] = $values;
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
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteria::class => false];
    }
}