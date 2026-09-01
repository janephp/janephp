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
class AggregationResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\AggregationResult::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\AggregationResult::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\AggregationResult();
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
        }
        if (\array_key_exists('sumOtherDocCount', $data) && $data['sumOtherDocCount'] !== null) {
            $object->sumOtherDocCount = $data['sumOtherDocCount'];
        }
        elseif (\array_key_exists('sumOtherDocCount', $data) && $data['sumOtherDocCount'] === null) {
            $object->sumOtherDocCount = null;
        }
        if (\array_key_exists('aggregationResultItems', $data) && $data['aggregationResultItems'] !== null) {
            $values = [];
            foreach ($data['aggregationResultItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\AggregationResultItem::class, 'json', $context);
            }
            $object->aggregationResultItems = $values;
        }
        elseif (\array_key_exists('aggregationResultItems', $data) && $data['aggregationResultItems'] === null) {
            $object->aggregationResultItems = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('sumOtherDocCount', get_object_vars($data)) && null !== ($data->sumOtherDocCount ?? null)) {
            $dataArray['sumOtherDocCount'] = $data->sumOtherDocCount ?? null;
        }
        if (array_key_exists('aggregationResultItems', get_object_vars($data)) && null !== ($data->aggregationResultItems ?? null)) {
            $values = [];
            foreach ($data->aggregationResultItems ?? null as $value) {
                $values[] = $value === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['aggregationResultItems'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\AggregationResult::class => false];
    }
}