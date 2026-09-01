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
class TriggerInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\TriggerInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\TriggerInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\TriggerInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('is_enabled', $data) && \is_int($data['is_enabled'])) {
            $data['is_enabled'] = (bool) $data['is_enabled'];
        }
        if (\array_key_exists('namespace', $data)) {
            $object->namespace = $data['namespace'];
            unset($data['namespace']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('function', $data)) {
            $object->function = $data['function'];
            unset($data['function']);
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
            unset($data['type']);
        }
        if (\array_key_exists('is_enabled', $data)) {
            $object->isEnabled = $data['is_enabled'];
            unset($data['is_enabled']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->createdAt = $data['created_at'];
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->updatedAt = $data['updated_at'];
            unset($data['updated_at']);
        }
        if (\array_key_exists('scheduled_details', $data)) {
            $object->scheduledDetails = $this->denormalizer->denormalize($data['scheduled_details'], \Jane\Generated\DigitalOcean\Model\ScheduledDetails::class, 'json', $context);
            unset($data['scheduled_details']);
        }
        if (\array_key_exists('scheduled_runs', $data)) {
            $object->scheduledRuns = $this->denormalizer->denormalize($data['scheduled_runs'], \Jane\Generated\DigitalOcean\Model\TriggerInfoScheduledRuns::class, 'json', $context);
            unset($data['scheduled_runs']);
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
        if (array_key_exists('namespace', get_object_vars($data)) && null !== ($data->namespace ?? null)) {
            $dataArray['namespace'] = $data->namespace ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('function', get_object_vars($data)) && null !== ($data->function ?? null)) {
            $dataArray['function'] = $data->function ?? null;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type ?? null;
        }
        if (array_key_exists('isEnabled', get_object_vars($data)) && null !== ($data->isEnabled ?? null)) {
            $dataArray['is_enabled'] = $data->isEnabled ?? null;
        }
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['created_at'] = $data->createdAt ?? null;
        }
        if (array_key_exists('updatedAt', get_object_vars($data)) && null !== ($data->updatedAt ?? null)) {
            $dataArray['updated_at'] = $data->updatedAt ?? null;
        }
        if (array_key_exists('scheduledDetails', get_object_vars($data)) && null !== ($data->scheduledDetails ?? null)) {
            $dataArray['scheduled_details'] = ($data->scheduledDetails ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->scheduledDetails ?? null, 'json', $context));
        }
        if (array_key_exists('scheduledRuns', get_object_vars($data)) && null !== ($data->scheduledRuns ?? null)) {
            $dataArray['scheduled_runs'] = ($data->scheduledRuns ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->scheduledRuns ?? null, 'json', $context));
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
        return [\Jane\Generated\DigitalOcean\Model\TriggerInfo::class => false];
    }
}