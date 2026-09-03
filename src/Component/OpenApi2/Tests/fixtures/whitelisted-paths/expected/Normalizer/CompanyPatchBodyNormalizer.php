<?php

namespace Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Runtime\Normalizer\CheckArray;
use Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CompanyPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\CompanyPatchBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\CompanyPatchBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\CompanyPatchBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('wants_timestamp_timers', $data) && \is_int($data['wants_timestamp_timers'])) {
            $data['wants_timestamp_timers'] = (bool) $data['wants_timestamp_timers'];
        }
        if (\array_key_exists('wants_timestamp_timers', $data)) {
            $object->wantsTimestampTimers = $data['wants_timestamp_timers'];
        }
        if (\array_key_exists('weekly_capacity', $data)) {
            $object->weeklyCapacity = $data['weekly_capacity'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('wantsTimestampTimers', get_object_vars($data)) && null !== ($data->wantsTimestampTimers ?? null)) {
            $dataArray['wants_timestamp_timers'] = $data->wantsTimestampTimers ?? null;
        }
        if (array_key_exists('weeklyCapacity', get_object_vars($data)) && null !== ($data->weeklyCapacity ?? null)) {
            $dataArray['weekly_capacity'] = $data->weeklyCapacity ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\CompanyPatchBody::class => false];
    }
}