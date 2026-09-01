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
class EventManagementSingleEventSettingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\EventManagementSingleEventSetting::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\EventManagementSingleEventSetting::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\EventManagementSingleEventSetting();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('triggerEmail', $data) && \is_int($data['triggerEmail'])) {
            $data['triggerEmail'] = (bool) $data['triggerEmail'];
        }
        if (\array_key_exists('triggerTrap', $data) && \is_int($data['triggerTrap'])) {
            $data['triggerTrap'] = (bool) $data['triggerTrap'];
        }
        if (\array_key_exists('dbPersistence', $data) && \is_int($data['dbPersistence'])) {
            $data['dbPersistence'] = (bool) $data['dbPersistence'];
        }
        if (\array_key_exists('zoneOverride', $data) && \is_int($data['zoneOverride'])) {
            $data['zoneOverride'] = (bool) $data['zoneOverride'];
        }
        if (\array_key_exists('domainOverride', $data) && \is_int($data['domainOverride'])) {
            $data['domainOverride'] = (bool) $data['domainOverride'];
        }
        if (\array_key_exists('eventCode', $data)) {
            $object->eventCode = $data['eventCode'];
        }
        if (\array_key_exists('severity', $data)) {
            $object->severity = $data['severity'];
        }
        if (\array_key_exists('category', $data)) {
            $object->category = $data['category'];
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
        }
        if (\array_key_exists('triggerEmail', $data)) {
            $object->triggerEmail = $data['triggerEmail'];
        }
        if (\array_key_exists('triggerTrap', $data)) {
            $object->triggerTrap = $data['triggerTrap'];
        }
        if (\array_key_exists('dbPersistence', $data)) {
            $object->dbPersistence = $data['dbPersistence'];
        }
        if (\array_key_exists('zoneOverride', $data)) {
            $object->zoneOverride = $data['zoneOverride'];
        }
        if (\array_key_exists('domainOverride', $data)) {
            $object->domainOverride = $data['domainOverride'];
        }
        if (\array_key_exists('oid', $data)) {
            $object->oid = $data['oid'];
        }
        if (\array_key_exists('configPageDesc', $data)) {
            $object->configPageDesc = $data['configPageDesc'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('eventCode', get_object_vars($data)) && null !== ($data->eventCode ?? null)) {
            $dataArray['eventCode'] = $data->eventCode ?? null;
        }
        if (array_key_exists('severity', get_object_vars($data)) && null !== ($data->severity ?? null)) {
            $dataArray['severity'] = $data->severity ?? null;
        }
        if (array_key_exists('category', get_object_vars($data)) && null !== ($data->category ?? null)) {
            $dataArray['category'] = $data->category ?? null;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type ?? null;
        }
        if (array_key_exists('triggerEmail', get_object_vars($data)) && null !== ($data->triggerEmail ?? null)) {
            $dataArray['triggerEmail'] = $data->triggerEmail ?? null;
        }
        if (array_key_exists('triggerTrap', get_object_vars($data)) && null !== ($data->triggerTrap ?? null)) {
            $dataArray['triggerTrap'] = $data->triggerTrap ?? null;
        }
        if (array_key_exists('dbPersistence', get_object_vars($data)) && null !== ($data->dbPersistence ?? null)) {
            $dataArray['dbPersistence'] = $data->dbPersistence ?? null;
        }
        if (array_key_exists('zoneOverride', get_object_vars($data)) && null !== ($data->zoneOverride ?? null)) {
            $dataArray['zoneOverride'] = $data->zoneOverride ?? null;
        }
        if (array_key_exists('domainOverride', get_object_vars($data)) && null !== ($data->domainOverride ?? null)) {
            $dataArray['domainOverride'] = $data->domainOverride ?? null;
        }
        if (array_key_exists('oid', get_object_vars($data)) && null !== ($data->oid ?? null)) {
            $dataArray['oid'] = $data->oid ?? null;
        }
        if (array_key_exists('configPageDesc', get_object_vars($data)) && null !== ($data->configPageDesc ?? null)) {
            $dataArray['configPageDesc'] = $data->configPageDesc ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\EventManagementSingleEventSetting::class => false];
    }
}