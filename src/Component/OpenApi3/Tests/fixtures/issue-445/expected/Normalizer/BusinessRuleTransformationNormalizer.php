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
class BusinessRuleTransformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessRuleTransformation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessRuleTransformation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessRuleTransformation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('kind', $data) and 'TakeDictionaryValueTransformation' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\TakeDictionaryValueTransformation', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'TakeArrayValueTransformation' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\TakeArrayValueTransformation', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'JoinByTransformation' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\JoinByTransformation', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'LookupCacheTransformation' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\LookupCacheTransformation', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'NGramTransformation' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\NGramTransformation', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ProjectionTransformation' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ProjectionTransformation', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'SplitTransformation' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\SplitTransformation', $format, $context);
        }
        if (\array_key_exists('traceRefId', $data) && $data['traceRefId'] !== null) {
            $object->traceRefId = $data['traceRefId'];
        }
        elseif (\array_key_exists('traceRefId', $data) && $data['traceRefId'] === null) {
            $object->traceRefId = null;
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== ($data->kind ?? null) and 'TakeDictionaryValueTransformation' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'TakeArrayValueTransformation' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'JoinByTransformation' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'LookupCacheTransformation' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'NGramTransformation' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'ProjectionTransformation' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'SplitTransformation' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (array_key_exists('traceRefId', get_object_vars($data)) && null !== ($data->traceRefId ?? null)) {
            $dataArray['traceRefId'] = $data->traceRefId ?? null;
        }
        $dataArray['kind'] = $data->kind ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessRuleTransformation::class => false];
    }
}