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
class ApiEvaluationMetricResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiEvaluationMetricResult::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiEvaluationMetricResult::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiEvaluationMetricResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('number_value', $data) && \is_int($data['number_value'])) {
            $data['number_value'] = (float) $data['number_value'];
        }
        if (\array_key_exists('error_description', $data)) {
            $object->errorDescription = $data['error_description'];
            unset($data['error_description']);
        }
        if (\array_key_exists('metric_name', $data)) {
            $object->metricName = $data['metric_name'];
            unset($data['metric_name']);
        }
        if (\array_key_exists('metric_value_type', $data)) {
            $object->metricValueType = $data['metric_value_type'];
            unset($data['metric_value_type']);
        }
        if (\array_key_exists('number_value', $data)) {
            $object->numberValue = $data['number_value'];
            unset($data['number_value']);
        }
        if (\array_key_exists('reasoning', $data)) {
            $object->reasoning = $data['reasoning'];
            unset($data['reasoning']);
        }
        if (\array_key_exists('string_value', $data)) {
            $object->stringValue = $data['string_value'];
            unset($data['string_value']);
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
        if (array_key_exists('errorDescription', get_object_vars($data)) && null !== ($data->errorDescription ?? null)) {
            $dataArray['error_description'] = $data->errorDescription ?? null;
        }
        if (array_key_exists('metricName', get_object_vars($data)) && null !== ($data->metricName ?? null)) {
            $dataArray['metric_name'] = $data->metricName ?? null;
        }
        if (array_key_exists('metricValueType', get_object_vars($data)) && null !== ($data->metricValueType ?? null)) {
            $dataArray['metric_value_type'] = $data->metricValueType ?? null;
        }
        if (array_key_exists('numberValue', get_object_vars($data)) && null !== ($data->numberValue ?? null)) {
            $dataArray['number_value'] = $data->numberValue ?? null;
        }
        if (array_key_exists('reasoning', get_object_vars($data)) && null !== ($data->reasoning ?? null)) {
            $dataArray['reasoning'] = $data->reasoning ?? null;
        }
        if (array_key_exists('stringValue', get_object_vars($data)) && null !== ($data->stringValue ?? null)) {
            $dataArray['string_value'] = $data->stringValue ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\ApiEvaluationMetricResult::class => false];
    }
}