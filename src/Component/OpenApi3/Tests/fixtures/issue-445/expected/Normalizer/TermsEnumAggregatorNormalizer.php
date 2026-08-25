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
class TermsEnumAggregatorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\TermsEnumAggregator::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\TermsEnumAggregator::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\TermsEnumAggregator();
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
            $object->setName($data['name']);
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
            $object->setNames($value);
            unset($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->setNames(null);
            unset($data['names']);
        }
        if (\array_key_exists('aggregators', $data) && $data['aggregators'] !== null) {
            $values_1 = [];
            foreach ($data['aggregators'] as $value_2) {
                $values_1[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->setAggregators($values_1);
            unset($data['aggregators']);
        }
        elseif (\array_key_exists('aggregators', $data) && $data['aggregators'] === null) {
            $object->setAggregators(null);
            unset($data['aggregators']);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $value_3 = $data['filter'];
            if (is_array($data['filter']) and \array_key_exists('kind', $data['filter'])) {
                $value_3 = $this->denormalizer->denormalize($data['filter'], \PicturePark\API\Model\FilterBase::class, 'json', $context);
            }
            $object->setFilter($value_3);
            unset($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->setFilter(null);
            unset($data['filter']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('field', $data)) {
            $object->setField($data['field']);
            unset($data['field']);
        }
        if (\array_key_exists('size', $data) && $data['size'] !== null) {
            $object->setSize($data['size']);
            unset($data['size']);
        }
        elseif (\array_key_exists('size', $data) && $data['size'] === null) {
            $object->setSize(null);
            unset($data['size']);
        }
        if (\array_key_exists('includes', $data) && $data['includes'] !== null) {
            $values_2 = [];
            foreach ($data['includes'] as $value_4) {
                $values_2[] = $value_4;
            }
            $object->setIncludes($values_2);
            unset($data['includes']);
        }
        elseif (\array_key_exists('includes', $data) && $data['includes'] === null) {
            $object->setIncludes(null);
            unset($data['includes']);
        }
        if (\array_key_exists('excludes', $data) && $data['excludes'] !== null) {
            $values_3 = [];
            foreach ($data['excludes'] as $value_5) {
                $values_3[] = $value_5;
            }
            $object->setExcludes($values_3);
            unset($data['excludes']);
        }
        elseif (\array_key_exists('excludes', $data) && $data['excludes'] === null) {
            $object->setExcludes(null);
            unset($data['excludes']);
        }
        if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
            $object->setSearchString($data['searchString']);
            unset($data['searchString']);
        }
        elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
            $object->setSearchString(null);
            unset($data['searchString']);
        }
        if (\array_key_exists('searchFields', $data) && $data['searchFields'] !== null) {
            $values_4 = [];
            foreach ($data['searchFields'] as $value_6) {
                $values_4[] = $value_6;
            }
            $object->setSearchFields($values_4);
            unset($data['searchFields']);
        }
        elseif (\array_key_exists('searchFields', $data) && $data['searchFields'] === null) {
            $object->setSearchFields(null);
            unset($data['searchFields']);
        }
        if (\array_key_exists('enumType', $data)) {
            $object->setEnumType($data['enumType']);
            unset($data['enumType']);
        }
        foreach ($data as $key_1 => $value_7) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_7;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('names') && null !== $data->getNames()) {
            $value = $data->getNames();
            if (is_object($data->getNames())) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->getNames() as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            }
            $dataArray['names'] = $value;
        }
        if ($data->isInitialized('aggregators') && null !== $data->getAggregators()) {
            $values_1 = [];
            foreach ($data->getAggregators() as $value_2) {
                $values_1[] = $value_2 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['aggregators'] = $values_1;
        }
        if ($data->isInitialized('filter') && null !== $data->getFilter()) {
            $value_3 = $data->getFilter();
            if (is_object($data->getFilter())) {
                $value_3 = $data->getFilter() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getFilter(), 'json', $context));
            }
            $dataArray['filter'] = $value_3;
        }
        $dataArray['kind'] = $data->getKind();
        $dataArray['field'] = $data->getField();
        if ($data->isInitialized('size') && null !== $data->getSize()) {
            $dataArray['size'] = $data->getSize();
        }
        if ($data->isInitialized('includes') && null !== $data->getIncludes()) {
            $values_2 = [];
            foreach ($data->getIncludes() as $value_4) {
                $values_2[] = $value_4;
            }
            $dataArray['includes'] = $values_2;
        }
        if ($data->isInitialized('excludes') && null !== $data->getExcludes()) {
            $values_3 = [];
            foreach ($data->getExcludes() as $value_5) {
                $values_3[] = $value_5;
            }
            $dataArray['excludes'] = $values_3;
        }
        if ($data->isInitialized('searchString') && null !== $data->getSearchString()) {
            $dataArray['searchString'] = $data->getSearchString();
        }
        if ($data->isInitialized('searchFields') && null !== $data->getSearchFields()) {
            $values_4 = [];
            foreach ($data->getSearchFields() as $value_6) {
                $values_4[] = $value_6;
            }
            $dataArray['searchFields'] = $values_4;
        }
        $dataArray['enumType'] = $data->getEnumType();
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_7) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_7;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\TermsEnumAggregator::class => false];
    }
}