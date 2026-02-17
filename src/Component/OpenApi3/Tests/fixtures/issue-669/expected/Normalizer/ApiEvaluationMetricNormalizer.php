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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\ApiEvaluationMetric();
        if (\array_key_exists('range_max', $data) && \is_int($data['range_max'])) {
            $data['range_max'] = (double) $data['range_max'];
        }
        if (\array_key_exists('range_min', $data) && \is_int($data['range_min'])) {
            $data['range_min'] = (double) $data['range_min'];
        }
        if (\array_key_exists('inverted', $data) && \is_int($data['inverted'])) {
            $data['inverted'] = (bool) $data['inverted'];
        }
        if (\array_key_exists('is_metric_goal', $data) && \is_int($data['is_metric_goal'])) {
            $data['is_metric_goal'] = (bool) $data['is_metric_goal'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('category', $data)) {
            $object->setCategory($data['category']);
            unset($data['category']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('inverted', $data)) {
            $object->setInverted($data['inverted']);
            unset($data['inverted']);
        }
        if (\array_key_exists('is_metric_goal', $data)) {
            $object->setIsMetricGoal($data['is_metric_goal']);
            unset($data['is_metric_goal']);
        }
        if (\array_key_exists('metric_name', $data)) {
            $object->setMetricName($data['metric_name']);
            unset($data['metric_name']);
        }
        if (\array_key_exists('metric_rank', $data)) {
            $object->setMetricRank($data['metric_rank']);
            unset($data['metric_rank']);
        }
        if (\array_key_exists('metric_type', $data)) {
            $object->setMetricType($data['metric_type']);
            unset($data['metric_type']);
        }
        if (\array_key_exists('metric_uuid', $data)) {
            $object->setMetricUuid($data['metric_uuid']);
            unset($data['metric_uuid']);
        }
        if (\array_key_exists('metric_value_type', $data)) {
            $object->setMetricValueType($data['metric_value_type']);
            unset($data['metric_value_type']);
        }
        if (\array_key_exists('range_max', $data)) {
            $object->setRangeMax($data['range_max']);
            unset($data['range_max']);
        }
        if (\array_key_exists('range_min', $data)) {
            $object->setRangeMin($data['range_min']);
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
        if ($data->isInitialized('category') && null !== $data->getCategory()) {
            $dataArray['category'] = $data->getCategory();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('inverted') && null !== $data->getInverted()) {
            $dataArray['inverted'] = $data->getInverted();
        }
        if ($data->isInitialized('isMetricGoal') && null !== $data->getIsMetricGoal()) {
            $dataArray['is_metric_goal'] = $data->getIsMetricGoal();
        }
        if ($data->isInitialized('metricName') && null !== $data->getMetricName()) {
            $dataArray['metric_name'] = $data->getMetricName();
        }
        if ($data->isInitialized('metricRank') && null !== $data->getMetricRank()) {
            $dataArray['metric_rank'] = $data->getMetricRank();
        }
        if ($data->isInitialized('metricType') && null !== $data->getMetricType()) {
            $dataArray['metric_type'] = $data->getMetricType();
        }
        if ($data->isInitialized('metricUuid') && null !== $data->getMetricUuid()) {
            $dataArray['metric_uuid'] = $data->getMetricUuid();
        }
        if ($data->isInitialized('metricValueType') && null !== $data->getMetricValueType()) {
            $dataArray['metric_value_type'] = $data->getMetricValueType();
        }
        if ($data->isInitialized('rangeMax') && null !== $data->getRangeMax()) {
            $dataArray['range_max'] = $data->getRangeMax();
        }
        if ($data->isInitialized('rangeMin') && null !== $data->getRangeMin()) {
            $dataArray['range_min'] = $data->getRangeMin();
        }
        foreach ($data as $key => $value) {
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