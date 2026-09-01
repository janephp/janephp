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
class TermsRelationAggregatorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\TermsRelationAggregator::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\TermsRelationAggregator::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\TermsRelationAggregator();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('names', $data) && $data['names'] !== null) {
            $value = $data['names'];
            if (is_array($data['names']) && $this->isOnlyNumericKeys($data['names'])) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['names'] as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            }
            $object->names = $value;
            unset($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->names = null;
            unset($data['names']);
        }
        if (\array_key_exists('aggregators', $data) && $data['aggregators'] !== null) {
            $values_1 = [];
            foreach ($data['aggregators'] as $value_2) {
                $values_1[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->aggregators = $values_1;
            unset($data['aggregators']);
        }
        elseif (\array_key_exists('aggregators', $data) && $data['aggregators'] === null) {
            $object->aggregators = null;
            unset($data['aggregators']);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $value_3 = $data['filter'];
            if (is_array($data['filter']) and \array_key_exists('kind', $data['filter'])) {
                $value_3 = $this->denormalizer->denormalize($data['filter'], \PicturePark\API\Model\FilterBase::class, 'json', $context);
            }
            $object->filter = $value_3;
            unset($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->filter = null;
            unset($data['filter']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
            unset($data['kind']);
        }
        if (\array_key_exists('field', $data)) {
            $object->field = $data['field'];
            unset($data['field']);
        }
        if (\array_key_exists('size', $data) && $data['size'] !== null) {
            $object->size = $data['size'];
            unset($data['size']);
        }
        elseif (\array_key_exists('size', $data) && $data['size'] === null) {
            $object->size = null;
            unset($data['size']);
        }
        if (\array_key_exists('includes', $data) && $data['includes'] !== null) {
            $values_2 = [];
            foreach ($data['includes'] as $value_4) {
                $values_2[] = $value_4;
            }
            $object->includes = $values_2;
            unset($data['includes']);
        }
        elseif (\array_key_exists('includes', $data) && $data['includes'] === null) {
            $object->includes = null;
            unset($data['includes']);
        }
        if (\array_key_exists('excludes', $data) && $data['excludes'] !== null) {
            $values_3 = [];
            foreach ($data['excludes'] as $value_5) {
                $values_3[] = $value_5;
            }
            $object->excludes = $values_3;
            unset($data['excludes']);
        }
        elseif (\array_key_exists('excludes', $data) && $data['excludes'] === null) {
            $object->excludes = null;
            unset($data['excludes']);
        }
        if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
            $object->searchString = $data['searchString'];
            unset($data['searchString']);
        }
        elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
            $object->searchString = null;
            unset($data['searchString']);
        }
        if (\array_key_exists('searchFields', $data) && $data['searchFields'] !== null) {
            $values_4 = [];
            foreach ($data['searchFields'] as $value_6) {
                $values_4[] = $value_6;
            }
            $object->searchFields = $values_4;
            unset($data['searchFields']);
        }
        elseif (\array_key_exists('searchFields', $data) && $data['searchFields'] === null) {
            $object->searchFields = null;
            unset($data['searchFields']);
        }
        if (\array_key_exists('documentType', $data)) {
            $value_7 = $data['documentType'];
            if (is_string($data['documentType'])) {
                $value_7 = $data['documentType'];
            }
            $object->documentType = $value_7;
            unset($data['documentType']);
        }
        foreach ($data as $key_1 => $value_8) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_8;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('names', get_object_vars($data)) && null !== ($data->names ?? null)) {
            $value = $data->names ?? null;
            if (is_object($data->names ?? null)) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->names ?? null as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            }
            $dataArray['names'] = $value;
        }
        if (array_key_exists('aggregators', get_object_vars($data)) && null !== ($data->aggregators ?? null)) {
            $values_1 = [];
            foreach ($data->aggregators ?? null as $value_2) {
                $values_1[] = $value_2 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['aggregators'] = $values_1;
        }
        if (array_key_exists('filter', get_object_vars($data)) && null !== ($data->filter ?? null)) {
            $value_3 = $data->filter ?? null;
            if (is_object($data->filter ?? null)) {
                $value_3 = ($data->filter ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->filter ?? null, 'json', $context));
            }
            $dataArray['filter'] = $value_3;
        }
        $dataArray['kind'] = $data->kind ?? null;
        $dataArray['field'] = $data->field ?? null;
        if (array_key_exists('size', get_object_vars($data)) && null !== ($data->size ?? null)) {
            $dataArray['size'] = $data->size ?? null;
        }
        if (array_key_exists('includes', get_object_vars($data)) && null !== ($data->includes ?? null)) {
            $values_2 = [];
            foreach ($data->includes ?? null as $value_4) {
                $values_2[] = $value_4;
            }
            $dataArray['includes'] = $values_2;
        }
        if (array_key_exists('excludes', get_object_vars($data)) && null !== ($data->excludes ?? null)) {
            $values_3 = [];
            foreach ($data->excludes ?? null as $value_5) {
                $values_3[] = $value_5;
            }
            $dataArray['excludes'] = $values_3;
        }
        if (array_key_exists('searchString', get_object_vars($data)) && null !== ($data->searchString ?? null)) {
            $dataArray['searchString'] = $data->searchString ?? null;
        }
        if (array_key_exists('searchFields', get_object_vars($data)) && null !== ($data->searchFields ?? null)) {
            $values_4 = [];
            foreach ($data->searchFields ?? null as $value_6) {
                $values_4[] = $value_6;
            }
            $dataArray['searchFields'] = $values_4;
        }
        if (array_key_exists('documentType', get_object_vars($data)) && null !== ($data->documentType ?? null)) {
            $value_7 = $data->documentType ?? null;
            if (is_string($data->documentType ?? null)) {
                $value_7 = $data->documentType ?? null;
            }
            $dataArray['documentType'] = $value_7;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_8) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_8;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\TermsRelationAggregator::class => false];
    }
}