<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileUplinkRateLimiting::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileUplinkRateLimiting::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileUplinkRateLimiting();
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
            $object->setUplinkRateLimitingEnabled($data['uplinkRateLimitingEnabled']);
        }
        if (\array_key_exists('uplinkRateLimitingBps', $data)) {
            $object->setUplinkRateLimitingBps($data['uplinkRateLimitingBps']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('uplinkRateLimitingEnabled') && null !== $data->getUplinkRateLimitingEnabled()) {
            $dataArray['uplinkRateLimitingEnabled'] = $data->getUplinkRateLimitingEnabled();
        }
        if ($data->isInitialized('uplinkRateLimitingBps') && null !== $data->getUplinkRateLimitingBps()) {
            $dataArray['uplinkRateLimitingBps'] = $data->getUplinkRateLimitingBps();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileUplinkRateLimiting::class => false];
    }
}