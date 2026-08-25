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
class AggregatorBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\AggregatorBase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\AggregatorBase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\AggregatorBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('kind', $data) and 'DateRangeAggregator' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\DateRangeAggregator', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'GeoDistanceAggregator' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\GeoDistanceAggregator', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'NestedAggregator' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\NestedAggregator', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'NumericRangeAggregator' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\NumericRangeAggregator', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'TermsAggregator' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\TermsAggregator', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'TermsRelationAggregator' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\TermsRelationAggregator', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'TermsEnumAggregator' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\TermsEnumAggregator', $format, $context);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
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
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->setNames(null);
        }
        if (\array_key_exists('aggregators', $data) && $data['aggregators'] !== null) {
            $values_1 = [];
            foreach ($data['aggregators'] as $value_2) {
                $values_1[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\AggregatorBase::class, 'json', $context);
            }
            $object->setAggregators($values_1);
        }
        elseif (\array_key_exists('aggregators', $data) && $data['aggregators'] === null) {
            $object->setAggregators(null);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $value_3 = $data['filter'];
            if (is_array($data['filter']) and \array_key_exists('kind', $data['filter'])) {
                $value_3 = $this->denormalizer->denormalize($data['filter'], \PicturePark\API\Model\FilterBase::class, 'json', $context);
            }
            $object->setFilter($value_3);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->setFilter(null);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== $data->getKind() and 'DateRangeAggregator' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'GeoDistanceAggregator' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'NestedAggregator' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'NumericRangeAggregator' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'TermsAggregator' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'TermsRelationAggregator' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'TermsEnumAggregator' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
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
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\AggregatorBase::class => false];
    }
}