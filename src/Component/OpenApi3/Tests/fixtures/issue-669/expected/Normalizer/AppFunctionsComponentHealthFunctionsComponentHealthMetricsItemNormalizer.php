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
class AppFunctionsComponentHealthFunctionsComponentHealthMetricsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppFunctionsComponentHealthFunctionsComponentHealthMetricsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppFunctionsComponentHealthFunctionsComponentHealthMetricsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppFunctionsComponentHealthFunctionsComponentHealthMetricsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('metric_value', $data) && \is_int($data['metric_value'])) {
            $data['metric_value'] = (float) $data['metric_value'];
        }
        if (\array_key_exists('metric_label', $data)) {
            $object->setMetricLabel($data['metric_label']);
            unset($data['metric_label']);
        }
        if (\array_key_exists('metric_value', $data)) {
            $object->setMetricValue($data['metric_value']);
            unset($data['metric_value']);
        }
        if (\array_key_exists('time_window', $data)) {
            $object->setTimeWindow($data['time_window']);
            unset($data['time_window']);
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
        if ($data->isInitialized('metricLabel') && null !== $data->getMetricLabel()) {
            $dataArray['metric_label'] = $data->getMetricLabel();
        }
        if ($data->isInitialized('metricValue') && null !== $data->getMetricValue()) {
            $dataArray['metric_value'] = $data->getMetricValue();
        }
        if ($data->isInitialized('timeWindow') && null !== $data->getTimeWindow()) {
            $dataArray['time_window'] = $data->getTimeWindow();
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
        return [\Jane\Generated\DigitalOcean\Model\AppFunctionsComponentHealthFunctionsComponentHealthMetricsItem::class => false];
    }
}