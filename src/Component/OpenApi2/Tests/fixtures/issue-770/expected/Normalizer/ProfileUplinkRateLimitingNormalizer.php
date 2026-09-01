<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProfileUplinkRateLimitingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileUplinkRateLimiting::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileUplinkRateLimiting::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileUplinkRateLimiting();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('uplinkRateLimitingEnabled', $data) && \is_int($data['uplinkRateLimitingEnabled'])) {
            $data['uplinkRateLimitingEnabled'] = (bool) $data['uplinkRateLimitingEnabled'];
        }
        if (\array_key_exists('uplinkRateLimitingEnabled', $data)) {
            $object->uplinkRateLimitingEnabled = $data['uplinkRateLimitingEnabled'];
        }
        if (\array_key_exists('uplinkRateLimitingBps', $data)) {
            $object->uplinkRateLimitingBps = $data['uplinkRateLimitingBps'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('uplinkRateLimitingEnabled', get_object_vars($data)) && null !== ($data->uplinkRateLimitingEnabled ?? null)) {
            $dataArray['uplinkRateLimitingEnabled'] = $data->uplinkRateLimitingEnabled ?? null;
        }
        if (array_key_exists('uplinkRateLimitingBps', get_object_vars($data)) && null !== ($data->uplinkRateLimitingBps ?? null)) {
            $dataArray['uplinkRateLimitingBps'] = $data->uplinkRateLimitingBps ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileUplinkRateLimiting::class => false];
    }
}