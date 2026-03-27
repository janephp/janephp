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
class FilterBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\FilterBase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\FilterBase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\FilterBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('kind', $data) and 'AndFilter' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\AndFilter', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'OrFilter' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\OrFilter', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'NotFilter' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\NotFilter', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'DateRangeFilter' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\DateRangeFilter', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ExistsFilter' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ExistsFilter', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'GeoBoundingBoxFilter' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\GeoBoundingBoxFilter', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'GeoDistanceFilter' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\GeoDistanceFilter', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'NestedFilter' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\NestedFilter', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'NumericRangeFilter' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\NumericRangeFilter', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'PrefixFilter' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\PrefixFilter', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'TermFilter' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\TermFilter', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'TermsFilter' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\TermsFilter', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'AggregationFilter' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\AggregationFilter', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ChildFilter' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ChildFilter', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ParentFilter' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ParentFilter', $format, $context);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== $data->getKind() and 'AndFilter' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'OrFilter' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'NotFilter' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'DateRangeFilter' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'ExistsFilter' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'GeoBoundingBoxFilter' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'GeoDistanceFilter' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'NestedFilter' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'NumericRangeFilter' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'PrefixFilter' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'TermFilter' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'TermsFilter' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'AggregationFilter' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'ChildFilter' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'ParentFilter' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['kind'] = $data->getKind();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\FilterBase::class => false];
    }
}