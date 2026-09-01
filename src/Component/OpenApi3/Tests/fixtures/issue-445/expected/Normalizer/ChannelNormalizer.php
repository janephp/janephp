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
        $object = new \PicturePark\API\Model\Channel();
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
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('sortOrder', $data)) {
            $object->sortOrder = $data['sortOrder'];
        }
        if (\array_key_exists('searchIndexId', $data)) {
            $object->searchIndexId = $data['searchIndexId'];
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $value = $data['filter'];
            if (is_array($data['filter']) and \array_key_exists('kind', $data['filter'])) {
                $value = $this->denormalizer->denormalize($data['filter'], \PicturePark\API\Model\FilterBase::class, 'json', $context);
            }
            $object->filter = $value;
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->filter = null;
        }
        if (\array_key_exists('names', $data)) {
            $value_1 = $data['names'];
            if (is_array($data['names']) && $this->isOnlyNumericKeys($data['names'])) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['names'] as $key => $value_2) {
                    $values[$key] = $value_2;
                }
                $value_1 = $values;
            }
            $object->names = $value_1;
        }
        if (\array_key_exists('sort', $data)) {
            $values_1 = [];
            foreach ($data['sort'] as $value_3) {
                $values_1[] = $this->denormalizer->denormalize($value_3, \PicturePark\API\Model\SortInfo::class, 'json', $context);
            }
            $object->sort = $values_1;
        }
        if (\array_key_exists('sortFields', $data)) {
            $values_2 = [];
            foreach ($data['sortFields'] as $value_4) {
                $values_2[] = $this->denormalizer->denormalize($value_4, \PicturePark\API\Model\SortField::class, 'json', $context);
            }
            $object->sortFields = $values_2;
        }
        if (\array_key_exists('aggregations', $data)) {
            $values_3 = [];
            foreach ($data['aggregations'] as $value_5) {
                $values_3[] = $this->denormalizer->denormalize($value_5, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->aggregations = $values_3;
        }
        if (\array_key_exists('extendedSimpleSearchFields', $data)) {
            $values_4 = [];
            foreach ($data['extendedSimpleSearchFields'] as $value_6) {
                $values_4[] = $value_6;
            }
            $object->extendedSimpleSearchFields = $values_4;
        }
        if (\array_key_exists('grantedUserRoleIds', $data)) {
            $values_5 = [];
            foreach ($data['grantedUserRoleIds'] as $value_7) {
                $values_5[] = $value_7;
            }
            $object->grantedUserRoleIds = $values_5;
        }
        if (\array_key_exists('missingResultsDisplayPatterns', $data)) {
            $value_8 = $data['missingResultsDisplayPatterns'];
            if (is_array($data['missingResultsDisplayPatterns']) && $this->isOnlyNumericKeys($data['missingResultsDisplayPatterns'])) {
                $values_6 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['missingResultsDisplayPatterns'] as $key_1 => $value_9) {
                    $values_6[$key_1] = $value_9;
                }
                $value_8 = $values_6;
            }
            $object->missingResultsDisplayPatterns = $value_8;
        }
        if (\array_key_exists('audit', $data)) {
            $value_10 = $data['audit'];
            if (is_array($data['audit']) and \array_key_exists('creationDate', $data['audit']) and \array_key_exists('modificationDate', $data['audit'])) {
                $value_10 = $this->denormalizer->denormalize($data['audit'], \PicturePark\API\Model\UserAudit::class, 'json', $context);
            }
            $object->audit = $value_10;
        }
        if (\array_key_exists('viewForAll', $data)) {
            $object->viewForAll = $data['viewForAll'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->id ?? null;
        $dataArray['sortOrder'] = $data->sortOrder ?? null;
        $dataArray['searchIndexId'] = $data->searchIndexId ?? null;
        if (array_key_exists('filter', get_object_vars($data)) && null !== ($data->filter ?? null)) {
            $value = $data->filter ?? null;
            if (is_object($data->filter ?? null)) {
                $value = ($data->filter ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->filter ?? null, 'json', $context));
            }
            $dataArray['filter'] = $value;
        }
        $value_1 = $data->names ?? null;
        if (is_object($data->names ?? null)) {
            $values = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->names ?? null as $key => $value_2) {
                $values[$key] = $value_2;
            }
            $value_1 = $values;
        }
        $dataArray['names'] = $value_1;
        $values_1 = [];
        foreach ($data->sort ?? null as $value_3) {
            $values_1[] = $value_3 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
        }
        $dataArray['sort'] = $values_1;
        $values_2 = [];
        foreach ($data->sortFields ?? null as $value_4) {
            $values_2[] = $value_4 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
        }
        $dataArray['sortFields'] = $values_2;
        $values_3 = [];
        foreach ($data->aggregations ?? null as $value_5) {
            $values_3[] = $value_5 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
        }
        $dataArray['aggregations'] = $values_3;
        $values_4 = [];
        foreach ($data->extendedSimpleSearchFields ?? null as $value_6) {
            $values_4[] = $value_6;
        }
        $dataArray['extendedSimpleSearchFields'] = $values_4;
        $values_5 = [];
        foreach ($data->grantedUserRoleIds ?? null as $value_7) {
            $values_5[] = $value_7;
        }
        $dataArray['grantedUserRoleIds'] = $values_5;
        $value_8 = $data->missingResultsDisplayPatterns ?? null;
        if (is_object($data->missingResultsDisplayPatterns ?? null)) {
            $values_6 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->missingResultsDisplayPatterns ?? null as $key_1 => $value_9) {
                $values_6[$key_1] = $value_9;
            }
            $value_8 = $values_6;
        }
        $dataArray['missingResultsDisplayPatterns'] = $value_8;
        $value_10 = $data->audit ?? null;
        if (is_object($data->audit ?? null)) {
            $value_10 = ($data->audit ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->audit ?? null, 'json', $context));
        }
        $dataArray['audit'] = $value_10;
        $dataArray['viewForAll'] = $data->viewForAll ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\Channel::class => false];
    }
}