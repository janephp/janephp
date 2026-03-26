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
class ChannelCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ChannelCreateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ChannelCreateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\ChannelCreateRequest();
        if (\array_key_exists('viewForAll', $data) && \is_int($data['viewForAll'])) {
            $data['viewForAll'] = (bool) $data['viewForAll'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
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
            $object->setNames($data['names']);
        }
        if (\array_key_exists('searchIndexId', $data) && $data['searchIndexId'] !== null) {
            $object->setSearchIndexId($data['searchIndexId']);
        }
        elseif (\array_key_exists('searchIndexId', $data) && $data['searchIndexId'] === null) {
            $object->setSearchIndexId(null);
        }
        if (\array_key_exists('grantedUserRoleIds', $data) && $data['grantedUserRoleIds'] !== null) {
            $values_2 = [];
            foreach ($data['grantedUserRoleIds'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setGrantedUserRoleIds($values_2);
        }
        elseif (\array_key_exists('grantedUserRoleIds', $data) && $data['grantedUserRoleIds'] === null) {
            $object->setGrantedUserRoleIds(null);
        }
        if (\array_key_exists('aggregations', $data) && $data['aggregations'] !== null) {
            $values_3 = [];
            foreach ($data['aggregations'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->setAggregations($values_3);
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
            $values_4 = [];
            foreach ($data['extendedSimpleSearchFields'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setExtendedSimpleSearchFields($values_4);
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
        if ($data->isInitialized('id')) {
            $dataArray['id'] = $data->getId();
        }
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
        $dataArray['names'] = $data->getNames();
        if ($data->isInitialized('searchIndexId')) {
            $dataArray['searchIndexId'] = $data->getSearchIndexId();
        }
        if ($data->isInitialized('grantedUserRoleIds')) {
            $values_2 = [];
            foreach ($data->getGrantedUserRoleIds() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['grantedUserRoleIds'] = $values_2;
        }
        if ($data->isInitialized('aggregations')) {
            $values_3 = [];
            foreach ($data->getAggregations() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['aggregations'] = $values_3;
        }
        if ($data->isInitialized('filter')) {
            $dataArray['filter'] = $data->getFilter();
        }
        if ($data->isInitialized('extendedSimpleSearchFields')) {
            $values_4 = [];
            foreach ($data->getExtendedSimpleSearchFields() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['extendedSimpleSearchFields'] = $values_4;
        }
        if ($data->isInitialized('missingResultsDisplayPatterns')) {
            $dataArray['missingResultsDisplayPatterns'] = $data->getMissingResultsDisplayPatterns();
        }
        $dataArray['viewForAll'] = $data->getViewForAll();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ChannelCreateRequest::class => false];
    }
}