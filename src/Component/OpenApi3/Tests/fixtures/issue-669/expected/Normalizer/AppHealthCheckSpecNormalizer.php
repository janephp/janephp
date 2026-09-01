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
class AppHealthCheckSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppHealthCheckSpec::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppHealthCheckSpec::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppHealthCheckSpec();
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
            $object->failureThreshold = $data['failure_threshold'];
            unset($data['failure_threshold']);
        }
        if (\array_key_exists('port', $data)) {
            $object->port = $data['port'];
            unset($data['port']);
        }
        if (\array_key_exists('http_path', $data)) {
            $object->httpPath = $data['http_path'];
            unset($data['http_path']);
        }
        if (\array_key_exists('initial_delay_seconds', $data)) {
            $object->initialDelaySeconds = $data['initial_delay_seconds'];
            unset($data['initial_delay_seconds']);
        }
        if (\array_key_exists('period_seconds', $data)) {
            $object->periodSeconds = $data['period_seconds'];
            unset($data['period_seconds']);
        }
        if (\array_key_exists('success_threshold', $data)) {
            $object->successThreshold = $data['success_threshold'];
            unset($data['success_threshold']);
        }
        if (\array_key_exists('timeout_seconds', $data)) {
            $object->timeoutSeconds = $data['timeout_seconds'];
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
        if (array_key_exists('failureThreshold', get_object_vars($data)) && null !== ($data->failureThreshold ?? null)) {
            $dataArray['failure_threshold'] = $data->failureThreshold ?? null;
        }
        if (array_key_exists('port', get_object_vars($data)) && null !== ($data->port ?? null)) {
            $dataArray['port'] = $data->port ?? null;
        }
        if (array_key_exists('httpPath', get_object_vars($data)) && null !== ($data->httpPath ?? null)) {
            $dataArray['http_path'] = $data->httpPath ?? null;
        }
        if (array_key_exists('initialDelaySeconds', get_object_vars($data)) && null !== ($data->initialDelaySeconds ?? null)) {
            $dataArray['initial_delay_seconds'] = $data->initialDelaySeconds ?? null;
        }
        if (array_key_exists('periodSeconds', get_object_vars($data)) && null !== ($data->periodSeconds ?? null)) {
            $dataArray['period_seconds'] = $data->periodSeconds ?? null;
        }
        if (array_key_exists('successThreshold', get_object_vars($data)) && null !== ($data->successThreshold ?? null)) {
            $dataArray['success_threshold'] = $data->successThreshold ?? null;
        }
        if (array_key_exists('timeoutSeconds', get_object_vars($data)) && null !== ($data->timeoutSeconds ?? null)) {
            $dataArray['timeout_seconds'] = $data->timeoutSeconds ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\AppHealthCheckSpec::class => false];
    }
}