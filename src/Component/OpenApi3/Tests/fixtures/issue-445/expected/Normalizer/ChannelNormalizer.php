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
class ChannelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\Channel::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\Channel::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\Channel();
        if (\array_key_exists('viewForAll', $data) && \is_int($data['viewForAll'])) {
            $data['viewForAll'] = (bool) $data['viewForAll'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('sortOrder', $data)) {
            $object->setSortOrder($data['sortOrder']);
        }
        if (\array_key_exists('searchIndexId', $data)) {
            $object->setSearchIndexId($data['searchIndexId']);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $object->setFilter($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->setFilter(null);
        }
        if (\array_key_exists('names', $data)) {
            $object->setNames($data['names']);
        }
        if (\array_key_exists('sort', $data)) {
            $values = [];
            foreach ($data['sort'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\SortInfo::class, 'json', $context);
            }
            $object->setSort($values);
        }
        if (\array_key_exists('sortFields', $data)) {
            $values_1 = [];
            foreach ($data['sortFields'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\SortField::class, 'json', $context);
            }
            $object->setSortFields($values_1);
        }
        if (\array_key_exists('aggregations', $data)) {
            $values_2 = [];
            foreach ($data['aggregations'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->setAggregations($values_2);
        }
        if (\array_key_exists('extendedSimpleSearchFields', $data)) {
            $values_3 = [];
            foreach ($data['extendedSimpleSearchFields'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setExtendedSimpleSearchFields($values_3);
        }
        if (\array_key_exists('grantedUserRoleIds', $data)) {
            $values_4 = [];
            foreach ($data['grantedUserRoleIds'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setGrantedUserRoleIds($values_4);
        }
        if (\array_key_exists('missingResultsDisplayPatterns', $data)) {
            $object->setMissingResultsDisplayPatterns($data['missingResultsDisplayPatterns']);
        }
        if (\array_key_exists('audit', $data)) {
            $object->setAudit($data['audit']);
        }
        if (\array_key_exists('viewForAll', $data)) {
            $object->setViewForAll($data['viewForAll']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['sortOrder'] = $data->getSortOrder();
        $dataArray['searchIndexId'] = $data->getSearchIndexId();
        if ($data->isInitialized('filter') && null !== $data->getFilter()) {
            $dataArray['filter'] = $data->getFilter();
        }
        $dataArray['names'] = $data->getNames();
        $values = [];
        foreach ($data->getSort() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['sort'] = $values;
        $values_1 = [];
        foreach ($data->getSortFields() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['sortFields'] = $values_1;
        $values_2 = [];
        foreach ($data->getAggregations() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $dataArray['aggregations'] = $values_2;
        $values_3 = [];
        foreach ($data->getExtendedSimpleSearchFields() as $value_3) {
            $values_3[] = $value_3;
        }
        $dataArray['extendedSimpleSearchFields'] = $values_3;
        $values_4 = [];
        foreach ($data->getGrantedUserRoleIds() as $value_4) {
            $values_4[] = $value_4;
        }
        $dataArray['grantedUserRoleIds'] = $values_4;
        $dataArray['missingResultsDisplayPatterns'] = $data->getMissingResultsDisplayPatterns();
        $dataArray['audit'] = $data->getAudit();
        $dataArray['viewForAll'] = $data->getViewForAll();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\Channel::class => false];
    }
}