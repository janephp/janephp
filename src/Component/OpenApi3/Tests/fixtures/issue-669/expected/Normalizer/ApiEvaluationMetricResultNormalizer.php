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
            $object->setErrorDescription($data['error_description']);
            unset($data['error_description']);
        }
        if (\array_key_exists('metric_name', $data)) {
            $object->setMetricName($data['metric_name']);
            unset($data['metric_name']);
        }
        if (\array_key_exists('metric_value_type', $data)) {
            $object->setMetricValueType($data['metric_value_type']);
            unset($data['metric_value_type']);
        }
        if (\array_key_exists('number_value', $data)) {
            $object->setNumberValue($data['number_value']);
            unset($data['number_value']);
        }
        if (\array_key_exists('reasoning', $data)) {
            $object->setReasoning($data['reasoning']);
            unset($data['reasoning']);
        }
        if (\array_key_exists('string_value', $data)) {
            $object->setStringValue($data['string_value']);
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
        if ($data->isInitialized('errorDescription') && null !== $data->getErrorDescription()) {
            $dataArray['error_description'] = $data->getErrorDescription();
        }
        if ($data->isInitialized('metricName') && null !== $data->getMetricName()) {
            $dataArray['metric_name'] = $data->getMetricName();
        }
        if ($data->isInitialized('metricValueType') && null !== $data->getMetricValueType()) {
            $dataArray['metric_value_type'] = $data->getMetricValueType();
        }
        if ($data->isInitialized('numberValue') && null !== $data->getNumberValue()) {
            $dataArray['number_value'] = $data->getNumberValue();
        }
        if ($data->isInitialized('reasoning') && null !== $data->getReasoning()) {
            $dataArray['reasoning'] = $data->getReasoning();
        }
        if ($data->isInitialized('stringValue') && null !== $data->getStringValue()) {
            $dataArray['string_value'] = $data->getStringValue();
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
        return [\Jane\Generated\DigitalOcean\Model\ApiEvaluationMetricResult::class => false];
    }
}
