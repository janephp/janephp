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
class HealthCheckNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\HealthCheck::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\HealthCheck::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\HealthCheck();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('protocol', $data)) {
            $object->protocol = $data['protocol'];
            unset($data['protocol']);
        }
        if (\array_key_exists('port', $data)) {
            $object->port = $data['port'];
            unset($data['port']);
        }
        if (\array_key_exists('path', $data)) {
            $object->path = $data['path'];
            unset($data['path']);
        }
        if (\array_key_exists('check_interval_seconds', $data)) {
            $object->checkIntervalSeconds = $data['check_interval_seconds'];
            unset($data['check_interval_seconds']);
        }
        if (\array_key_exists('response_timeout_seconds', $data)) {
            $object->responseTimeoutSeconds = $data['response_timeout_seconds'];
            unset($data['response_timeout_seconds']);
        }
        if (\array_key_exists('unhealthy_threshold', $data)) {
            $object->unhealthyThreshold = $data['unhealthy_threshold'];
            unset($data['unhealthy_threshold']);
        }
        if (\array_key_exists('healthy_threshold', $data)) {
            $object->healthyThreshold = $data['healthy_threshold'];
            unset($data['healthy_threshold']);
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
        if (array_key_exists('protocol', get_object_vars($data)) && null !== ($data->protocol ?? null)) {
            $dataArray['protocol'] = $data->protocol ?? null;
        }
        if (array_key_exists('port', get_object_vars($data)) && null !== ($data->port ?? null)) {
            $dataArray['port'] = $data->port ?? null;
        }
        if (array_key_exists('path', get_object_vars($data)) && null !== ($data->path ?? null)) {
            $dataArray['path'] = $data->path ?? null;
        }
        if (array_key_exists('checkIntervalSeconds', get_object_vars($data)) && null !== ($data->checkIntervalSeconds ?? null)) {
            $dataArray['check_interval_seconds'] = $data->checkIntervalSeconds ?? null;
        }
        if (array_key_exists('responseTimeoutSeconds', get_object_vars($data)) && null !== ($data->responseTimeoutSeconds ?? null)) {
            $dataArray['response_timeout_seconds'] = $data->responseTimeoutSeconds ?? null;
        }
        if (array_key_exists('unhealthyThreshold', get_object_vars($data)) && null !== ($data->unhealthyThreshold ?? null)) {
            $dataArray['unhealthy_threshold'] = $data->unhealthyThreshold ?? null;
        }
        if (array_key_exists('healthyThreshold', get_object_vars($data)) && null !== ($data->healthyThreshold ?? null)) {
            $dataArray['healthy_threshold'] = $data->healthyThreshold ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\HealthCheck::class => false];
    }
}