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
class AggregationResultItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\AggregationResultItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\AggregationResultItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\AggregationResultItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('count', $data)) {
            $object->count = $data['count'];
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $value = $data['filter'];
            if (is_array($data['filter'])) {
                $value = $this->denormalizer->denormalize($data['filter'], \PicturePark\API\Model\AggregationFilter::class, 'json', $context);
            }
            $object->filter = $value;
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->filter = null;
        }
        if (\array_key_exists('active', $data)) {
            $object->active = $data['active'];
        }
        if (\array_key_exists('aggregationResults', $data) && $data['aggregationResults'] !== null) {
            $values = [];
            foreach ($data['aggregationResults'] as $value_1) {
                $values[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\AggregationResult::class, 'json', $context);
            }
            $object->aggregationResults = $values;
        }
        elseif (\array_key_exists('aggregationResults', $data) && $data['aggregationResults'] === null) {
            $object->aggregationResults = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->name ?? null;
        $dataArray['count'] = $data->count ?? null;
        if (array_key_exists('filter', get_object_vars($data)) && null !== ($data->filter ?? null)) {
            $value = $data->filter ?? null;
            if (is_object($data->filter ?? null)) {
                $value = ($data->filter ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->filter ?? null, 'json', $context));
            }
            $dataArray['filter'] = $value;
        }
        $dataArray['active'] = $data->active ?? null;
        if (array_key_exists('aggregationResults', get_object_vars($data)) && null !== ($data->aggregationResults ?? null)) {
            $values = [];
            foreach ($data->aggregationResults ?? null as $value_1) {
                $values[] = $value_1 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['aggregationResults'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\AggregationResultItem::class => false];
    }
}