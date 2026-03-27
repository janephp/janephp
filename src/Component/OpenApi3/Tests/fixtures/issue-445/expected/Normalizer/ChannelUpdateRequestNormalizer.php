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
class ChannelUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ChannelUpdateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ChannelUpdateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ChannelUpdateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('viewForAll', $data) && \is_int($data['viewForAll'])) {
            $data['viewForAll'] = (bool) $data['viewForAll'];
        }
        if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
            $values = [];
            foreach ($data['sort'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\SortInfo::class, 'json', $context);
            }
            $object->setSort($values);
        }
        elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
            $object->setSort(null);
        }
        if (\array_key_exists('sortOrder', $data)) {
            $object->setSortOrder($data['sortOrder']);
        }
        if (\array_key_exists('sortFields', $data)) {
            $values_1 = [];
            foreach ($data['sortFields'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\SortField::class, 'json', $context);
            }
            $object->setSortFields($values_1);
        }
        if (\array_key_exists('names', $data)) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['names'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setNames($values_2);
        }
        if (\array_key_exists('searchIndexId', $data) && $data['searchIndexId'] !== null) {
            $object->setSearchIndexId($data['searchIndexId']);
        }
        elseif (\array_key_exists('searchIndexId', $data) && $data['searchIndexId'] === null) {
            $object->setSearchIndexId(null);
        }
        if (\array_key_exists('grantedUserRoleIds', $data) && $data['grantedUserRoleIds'] !== null) {
            $values_3 = [];
            foreach ($data['grantedUserRoleIds'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setGrantedUserRoleIds($values_3);
        }
        elseif (\array_key_exists('grantedUserRoleIds', $data) && $data['grantedUserRoleIds'] === null) {
            $object->setGrantedUserRoleIds(null);
        }
        if (\array_key_exists('aggregations', $data) && $data['aggregations'] !== null) {
            $values_4 = [];
            foreach ($data['aggregations'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->setAggregations($values_4);
        }
        elseif (\array_key_exists('aggregations', $data) && $data['aggregations'] === null) {
            $object->setAggregations(null);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $object->setFilter($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->setFilter(null);
        }
        if (\array_key_exists('extendedSimpleSearchFields', $data) && $data['extendedSimpleSearchFields'] !== null) {
            $values_5 = [];
            foreach ($data['extendedSimpleSearchFields'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setExtendedSimpleSearchFields($values_5);
        }
        elseif (\array_key_exists('extendedSimpleSearchFields', $data) && $data['extendedSimpleSearchFields'] === null) {
            $object->setExtendedSimpleSearchFields(null);
        }
        if (\array_key_exists('missingResultsDisplayPatterns', $data) && $data['missingResultsDisplayPatterns'] !== null) {
            $object->setMissingResultsDisplayPatterns($data['missingResultsDisplayPatterns']);
        }
        elseif (\array_key_exists('missingResultsDisplayPatterns', $data) && $data['missingResultsDisplayPatterns'] === null) {
            $object->setMissingResultsDisplayPatterns(null);
        }
        if (\array_key_exists('viewForAll', $data)) {
            $object->setViewForAll($data['viewForAll']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('sort')) {
            $values = [];
            foreach ($data->getSort() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['sort'] = $values;
        }
        $dataArray['sortOrder'] = $data->getSortOrder();
        $values_1 = [];
        foreach ($data->getSortFields() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['sortFields'] = $values_1;
        $values_2 = [];
        foreach ($data->getNames() as $key => $value_2) {
            $values_2[$key] = $value_2;
        }
        $dataArray['names'] = $values_2;
        if ($data->isInitialized('searchIndexId')) {
            $dataArray['searchIndexId'] = $data->getSearchIndexId();
        }
        if ($data->isInitialized('grantedUserRoleIds')) {
            $values_3 = [];
            foreach ($data->getGrantedUserRoleIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['grantedUserRoleIds'] = $values_3;
        }
        if ($data->isInitialized('aggregations')) {
            $values_4 = [];
            foreach ($data->getAggregations() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['aggregations'] = $values_4;
        }
        if ($data->isInitialized('filter')) {
            $dataArray['filter'] = $data->getFilter();
        }
        if ($data->isInitialized('extendedSimpleSearchFields')) {
            $values_5 = [];
            foreach ($data->getExtendedSimpleSearchFields() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['extendedSimpleSearchFields'] = $values_5;
        }
        if ($data->isInitialized('missingResultsDisplayPatterns')) {
            $dataArray['missingResultsDisplayPatterns'] = $data->getMissingResultsDisplayPatterns();
        }
        $dataArray['viewForAll'] = $data->getViewForAll();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ChannelUpdateRequest::class => false];
    }
}