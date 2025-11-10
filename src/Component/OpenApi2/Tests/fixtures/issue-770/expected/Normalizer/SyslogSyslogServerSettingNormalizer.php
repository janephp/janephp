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
class SyslogSyslogServerSettingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SyslogSyslogServerSetting::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SyslogSyslogServerSetting::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SyslogSyslogServerSetting();
        if (\array_key_exists('enabled', $data) && \is_int($data['enabled'])) {
            $data['enabled'] = (bool) $data['enabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('enabled', $data)) {
            $object->setEnabled($data['enabled']);
        }
        if (\array_key_exists('appLogFacility', $data)) {
            $object->setAppLogFacility($data['appLogFacility']);
        }
        if (\array_key_exists('auditLogFacility', $data)) {
            $object->setAuditLogFacility($data['auditLogFacility']);
        }
        if (\array_key_exists('eventLogFacility', $data)) {
            $object->setEventLogFacility($data['eventLogFacility']);
        }
        if (\array_key_exists('appLogSeverity', $data)) {
            $object->setAppLogSeverity($data['appLogSeverity']);
        }
        if (\array_key_exists('auditLogSeverity', $data)) {
            $object->setAuditLogSeverity($data['auditLogSeverity']);
        }
        if (\array_key_exists('otherLogSeverity', $data)) {
            $object->setOtherLogSeverity($data['otherLogSeverity']);
        }
        if (\array_key_exists('forwardUEEventsMsgFormatType', $data)) {
            $object->setForwardUEEventsMsgFormatType($data['forwardUEEventsMsgFormatType']);
        }
        if (\array_key_exists('primaryServer', $data)) {
            $object->setPrimaryServer($this->denormalizer->denormalize($data['primaryServer'], \Jane\Component\OpenApi3\Tests\Expected\Model\SyslogPrimaryServer::class, 'json', $context));
        }
        if (\array_key_exists('secondaryServer', $data)) {
            $object->setSecondaryServer($this->denormalizer->denormalize($data['secondaryServer'], \Jane\Component\OpenApi3\Tests\Expected\Model\SyslogSecondaryServer::class, 'json', $context));
        }
        if (\array_key_exists('eventFilter', $data)) {
            $object->setEventFilter($data['eventFilter']);
        }
        if (\array_key_exists('eventFilterSeverity', $data)) {
            $object->setEventFilterSeverity($data['eventFilterSeverity']);
        }
        if (\array_key_exists('priority', $data)) {
            $object->setPriority($this->denormalizer->denormalize($data['priority'], \Jane\Component\OpenApi3\Tests\Expected\Model\SyslogPriority::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('enabled') && null !== $data->getEnabled()) {
            $dataArray['enabled'] = $data->getEnabled();
        }
        if ($data->isInitialized('appLogFacility') && null !== $data->getAppLogFacility()) {
            $dataArray['appLogFacility'] = $data->getAppLogFacility();
        }
        if ($data->isInitialized('auditLogFacility') && null !== $data->getAuditLogFacility()) {
            $dataArray['auditLogFacility'] = $data->getAuditLogFacility();
        }
        if ($data->isInitialized('eventLogFacility') && null !== $data->getEventLogFacility()) {
            $dataArray['eventLogFacility'] = $data->getEventLogFacility();
        }
        if ($data->isInitialized('appLogSeverity') && null !== $data->getAppLogSeverity()) {
            $dataArray['appLogSeverity'] = $data->getAppLogSeverity();
        }
        if ($data->isInitialized('auditLogSeverity') && null !== $data->getAuditLogSeverity()) {
            $dataArray['auditLogSeverity'] = $data->getAuditLogSeverity();
        }
        if ($data->isInitialized('otherLogSeverity') && null !== $data->getOtherLogSeverity()) {
            $dataArray['otherLogSeverity'] = $data->getOtherLogSeverity();
        }
        if ($data->isInitialized('forwardUEEventsMsgFormatType') && null !== $data->getForwardUEEventsMsgFormatType()) {
            $dataArray['forwardUEEventsMsgFormatType'] = $data->getForwardUEEventsMsgFormatType();
        }
        if ($data->isInitialized('primaryServer') && null !== $data->getPrimaryServer()) {
            $dataArray['primaryServer'] = $this->normalizer->normalize($data->getPrimaryServer(), 'json', $context);
        }
        if ($data->isInitialized('secondaryServer') && null !== $data->getSecondaryServer()) {
            $dataArray['secondaryServer'] = $this->normalizer->normalize($data->getSecondaryServer(), 'json', $context);
        }
        if ($data->isInitialized('eventFilter') && null !== $data->getEventFilter()) {
            $dataArray['eventFilter'] = $data->getEventFilter();
        }
        if ($data->isInitialized('eventFilterSeverity') && null !== $data->getEventFilterSeverity()) {
            $dataArray['eventFilterSeverity'] = $data->getEventFilterSeverity();
        }
        if ($data->isInitialized('priority') && null !== $data->getPriority()) {
            $dataArray['priority'] = $this->normalizer->normalize($data->getPriority(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SyslogSyslogServerSetting::class => false];
    }
}