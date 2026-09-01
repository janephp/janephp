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
class TriggerInfoScheduledRunsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\TriggerInfoScheduledRuns::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\TriggerInfoScheduledRuns::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\TriggerInfoScheduledRuns();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('last_run_at', $data) && $data['last_run_at'] !== null) {
            $object->lastRunAt = $data['last_run_at'];
            unset($data['last_run_at']);
        }
        elseif (\array_key_exists('last_run_at', $data) && $data['last_run_at'] === null) {
            $object->lastRunAt = null;
            unset($data['last_run_at']);
        }
        if (\array_key_exists('next_run_at', $data) && $data['next_run_at'] !== null) {
            $object->nextRunAt = $data['next_run_at'];
            unset($data['next_run_at']);
        }
        elseif (\array_key_exists('next_run_at', $data) && $data['next_run_at'] === null) {
            $object->nextRunAt = null;
            unset($data['next_run_at']);
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
        if (array_key_exists('lastRunAt', get_object_vars($data)) && null !== ($data->lastRunAt ?? null)) {
            $dataArray['last_run_at'] = $data->lastRunAt ?? null;
        }
        if (array_key_exists('nextRunAt', get_object_vars($data)) && null !== ($data->nextRunAt ?? null)) {
            $dataArray['next_run_at'] = $data->nextRunAt ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\TriggerInfoScheduledRuns::class => false];
    }
}