<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ApiEvaluationMetricNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiEvaluationMetric::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiEvaluationMetric::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiEvaluationMetric();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('range_max', $data) && \is_int($data['range_max'])) {
            $data['range_max'] = (float) $data['range_max'];
        }
        if (\array_key_exists('range_min', $data) && \is_int($data['range_min'])) {
            $data['range_min'] = (float) $data['range_min'];
        }
        if (\array_key_exists('inverted', $data) && \is_int($data['inverted'])) {
            $data['inverted'] = (bool) $data['inverted'];
        }
        if (\array_key_exists('is_metric_goal', $data) && \is_int($data['is_metric_goal'])) {
            $data['is_metric_goal'] = (bool) $data['is_metric_goal'];
        }
        if (\array_key_exists('category', $data)) {
            $object->category = $data['category'];
            unset($data['category']);
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
            unset($data['description']);
        }
        if (\array_key_exists('inverted', $data)) {
            $object->inverted = $data['inverted'];
            unset($data['inverted']);
        }
        if (\array_key_exists('is_metric_goal', $data)) {
            $object->isMetricGoal = $data['is_metric_goal'];
            unset($data['is_metric_goal']);
        }
        if (\array_key_exists('metric_name', $data)) {
            $object->metricName = $data['metric_name'];
            unset($data['metric_name']);
        }
        if (\array_key_exists('metric_rank', $data)) {
            $object->metricRank = $data['metric_rank'];
            unset($data['metric_rank']);
        }
        if (\array_key_exists('metric_type', $data)) {
            $object->metricType = $data['metric_type'];
            unset($data['metric_type']);
        }
        if (\array_key_exists('metric_uuid', $data)) {
            $object->metricUuid = $data['metric_uuid'];
            unset($data['metric_uuid']);
        }
        if (\array_key_exists('metric_value_type', $data)) {
            $object->metricValueType = $data['metric_value_type'];
            unset($data['metric_value_type']);
        }
        if (\array_key_exists('range_max', $data)) {
            $object->rangeMax = $data['range_max'];
            unset($data['range_max']);
        }
        if (\array_key_exists('range_min', $data)) {
            $object->rangeMin = $data['range_min'];
            unset($data['range_min']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('category', get_object_vars($data)) && null !== ($data->category ?? null)) {
            $dataArray['category'] = $data->category ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('inverted', get_object_vars($data)) && null !== ($data->inverted ?? null)) {
            $dataArray['inverted'] = $data->inverted ?? null;
        }
        if (array_key_exists('isMetricGoal', get_object_vars($data)) && null !== ($data->isMetricGoal ?? null)) {
            $dataArray['is_metric_goal'] = $data->isMetricGoal ?? null;
        }
        if (array_key_exists('metricName', get_object_vars($data)) && null !== ($data->metricName ?? null)) {
            $dataArray['metric_name'] = $data->metricName ?? null;
        }
        if (array_key_exists('metricRank', get_object_vars($data)) && null !== ($data->metricRank ?? null)) {
            $dataArray['metric_rank'] = $data->metricRank ?? null;
        }
        if (array_key_exists('metricType', get_object_vars($data)) && null !== ($data->metricType ?? null)) {
            $dataArray['metric_type'] = $data->metricType ?? null;
        }
        if (array_key_exists('metricUuid', get_object_vars($data)) && null !== ($data->metricUuid ?? null)) {
            $dataArray['metric_uuid'] = $data->metricUuid ?? null;
        }
        if (array_key_exists('metricValueType', get_object_vars($data)) && null !== ($data->metricValueType ?? null)) {
            $dataArray['metric_value_type'] = $data->metricValueType ?? null;
        }
        if (array_key_exists('rangeMax', get_object_vars($data)) && null !== ($data->rangeMax ?? null)) {
            $dataArray['range_max'] = $data->rangeMax ?? null;
        }
        if (array_key_exists('rangeMin', get_object_vars($data)) && null !== ($data->rangeMin ?? null)) {
            $dataArray['range_min'] = $data->rangeMin ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ApiEvaluationMetric::class => false];
    }
}