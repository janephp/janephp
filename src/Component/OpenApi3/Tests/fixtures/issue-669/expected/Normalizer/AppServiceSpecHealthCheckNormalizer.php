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
class AppServiceSpecHealthCheckNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppServiceSpecHealthCheck::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppServiceSpecHealthCheck::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppServiceSpecHealthCheck();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('failure_threshold', $data)) {
            $object->setFailureThreshold($data['failure_threshold']);
            unset($data['failure_threshold']);
        }
        if (\array_key_exists('port', $data)) {
            $object->setPort($data['port']);
            unset($data['port']);
        }
        if (\array_key_exists('http_path', $data)) {
            $object->setHttpPath($data['http_path']);
            unset($data['http_path']);
        }
        if (\array_key_exists('initial_delay_seconds', $data)) {
            $object->setInitialDelaySeconds($data['initial_delay_seconds']);
            unset($data['initial_delay_seconds']);
        }
        if (\array_key_exists('period_seconds', $data)) {
            $object->setPeriodSeconds($data['period_seconds']);
            unset($data['period_seconds']);
        }
        if (\array_key_exists('success_threshold', $data)) {
            $object->setSuccessThreshold($data['success_threshold']);
            unset($data['success_threshold']);
        }
        if (\array_key_exists('timeout_seconds', $data)) {
            $object->setTimeoutSeconds($data['timeout_seconds']);
            unset($data['timeout_seconds']);
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
        if ($data->isInitialized('failureThreshold') && null !== $data->getFailureThreshold()) {
            $dataArray['failure_threshold'] = $data->getFailureThreshold();
        }
        if ($data->isInitialized('port') && null !== $data->getPort()) {
            $dataArray['port'] = $data->getPort();
        }
        if ($data->isInitialized('httpPath') && null !== $data->getHttpPath()) {
            $dataArray['http_path'] = $data->getHttpPath();
        }
        if ($data->isInitialized('initialDelaySeconds') && null !== $data->getInitialDelaySeconds()) {
            $dataArray['initial_delay_seconds'] = $data->getInitialDelaySeconds();
        }
        if ($data->isInitialized('periodSeconds') && null !== $data->getPeriodSeconds()) {
            $dataArray['period_seconds'] = $data->getPeriodSeconds();
        }
        if ($data->isInitialized('successThreshold') && null !== $data->getSuccessThreshold()) {
            $dataArray['success_threshold'] = $data->getSuccessThreshold();
        }
        if ($data->isInitialized('timeoutSeconds') && null !== $data->getTimeoutSeconds()) {
            $dataArray['timeout_seconds'] = $data->getTimeoutSeconds();
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
        return [\Jane\Generated\DigitalOcean\Model\AppServiceSpecHealthCheck::class => false];
    }
}