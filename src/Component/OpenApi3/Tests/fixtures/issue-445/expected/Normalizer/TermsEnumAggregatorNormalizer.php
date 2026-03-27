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
            $object->setNames($data['names']);
            unset($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->setNames(null);
        }
        if (\array_key_exists('aggregators', $data) && $data['aggregators'] !== null) {
            $values = [];
            foreach ($data['aggregators'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->setAggregators($values);
            unset($data['aggregators']);
        }
        elseif (\array_key_exists('aggregators', $data) && $data['aggregators'] === null) {
            $object->setAggregators(null);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $object->setFilter($data['filter']);
            unset($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->setFilter(null);
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
        }
        if (\array_key_exists('includes', $data) && $data['includes'] !== null) {
            $values_1 = [];
            foreach ($data['includes'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setIncludes($values_1);
            unset($data['includes']);
        }
        elseif (\array_key_exists('includes', $data) && $data['includes'] === null) {
            $object->setIncludes(null);
        }
        if (\array_key_exists('excludes', $data) && $data['excludes'] !== null) {
            $values_2 = [];
            foreach ($data['excludes'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setExcludes($values_2);
            unset($data['excludes']);
        }
        elseif (\array_key_exists('excludes', $data) && $data['excludes'] === null) {
            $object->setExcludes(null);
        }
        if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
            $object->setSearchString($data['searchString']);
            unset($data['searchString']);
        }
        elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
            $object->setSearchString(null);
        }
        if (\array_key_exists('searchFields', $data) && $data['searchFields'] !== null) {
            $values_3 = [];
            foreach ($data['searchFields'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setSearchFields($values_3);
            unset($data['searchFields']);
        }
        elseif (\array_key_exists('searchFields', $data) && $data['searchFields'] === null) {
            $object->setSearchFields(null);
        }
        if (\array_key_exists('enumType', $data)) {
            $object->setEnumType($data['enumType']);
            unset($data['enumType']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('names')) {
            $dataArray['names'] = $data->getNames();
        }
        if ($data->isInitialized('aggregators')) {
            $values = [];
            foreach ($data->getAggregators() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['aggregators'] = $values;
        }
        if ($data->isInitialized('filter')) {
            $dataArray['filter'] = $data->getFilter();
        }
        $dataArray['kind'] = $data->getKind();
        $dataArray['field'] = $data->getField();
        if ($data->isInitialized('size')) {
            $dataArray['size'] = $data->getSize();
        }
        if ($data->isInitialized('includes')) {
            $values_1 = [];
            foreach ($data->getIncludes() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['includes'] = $values_1;
        }
        if ($data->isInitialized('excludes')) {
            $values_2 = [];
            foreach ($data->getExcludes() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['excludes'] = $values_2;
        }
        if ($data->isInitialized('searchString')) {
            $dataArray['searchString'] = $data->getSearchString();
        }
        if ($data->isInitialized('searchFields')) {
            $values_3 = [];
            foreach ($data->getSearchFields() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['searchFields'] = $values_3;
        }
        $dataArray['enumType'] = $data->getEnumType();
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\TermsEnumAggregator::class => false];
    }
}