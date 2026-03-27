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
class EventManagementSingleEventSettingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\EventManagementSingleEventSetting::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\EventManagementSingleEventSetting::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\EventManagementSingleEventSetting();
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
            $object->setEventCode($data['eventCode']);
        }
        if (\array_key_exists('severity', $data)) {
            $object->setSeverity($data['severity']);
        }
        if (\array_key_exists('category', $data)) {
            $object->setCategory($data['category']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('triggerEmail', $data)) {
            $object->setTriggerEmail($data['triggerEmail']);
        }
        if (\array_key_exists('triggerTrap', $data)) {
            $object->setTriggerTrap($data['triggerTrap']);
        }
        if (\array_key_exists('dbPersistence', $data)) {
            $object->setDbPersistence($data['dbPersistence']);
        }
        if (\array_key_exists('zoneOverride', $data)) {
            $object->setZoneOverride($data['zoneOverride']);
        }
        if (\array_key_exists('domainOverride', $data)) {
            $object->setDomainOverride($data['domainOverride']);
        }
        if (\array_key_exists('oid', $data)) {
            $object->setOid($data['oid']);
        }
        if (\array_key_exists('configPageDesc', $data)) {
            $object->setConfigPageDesc($data['configPageDesc']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('eventCode') && null !== $data->getEventCode()) {
            $dataArray['eventCode'] = $data->getEventCode();
        }
        if ($data->isInitialized('severity') && null !== $data->getSeverity()) {
            $dataArray['severity'] = $data->getSeverity();
        }
        if ($data->isInitialized('category') && null !== $data->getCategory()) {
            $dataArray['category'] = $data->getCategory();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('triggerEmail') && null !== $data->getTriggerEmail()) {
            $dataArray['triggerEmail'] = $data->getTriggerEmail();
        }
        if ($data->isInitialized('triggerTrap') && null !== $data->getTriggerTrap()) {
            $dataArray['triggerTrap'] = $data->getTriggerTrap();
        }
        if ($data->isInitialized('dbPersistence') && null !== $data->getDbPersistence()) {
            $dataArray['dbPersistence'] = $data->getDbPersistence();
        }
        if ($data->isInitialized('zoneOverride') && null !== $data->getZoneOverride()) {
            $dataArray['zoneOverride'] = $data->getZoneOverride();
        }
        if ($data->isInitialized('domainOverride') && null !== $data->getDomainOverride()) {
            $dataArray['domainOverride'] = $data->getDomainOverride();
        }
        if ($data->isInitialized('oid') && null !== $data->getOid()) {
            $dataArray['oid'] = $data->getOid();
        }
        if ($data->isInitialized('configPageDesc') && null !== $data->getConfigPageDesc()) {
            $dataArray['configPageDesc'] = $data->getConfigPageDesc();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\EventManagementSingleEventSetting::class => false];
    }
}