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
class SyslogModifySyslogSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SyslogModifySyslogSettings::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SyslogModifySyslogSettings::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SyslogModifySyslogSettings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('enabled', $data) && \is_int($data['enabled'])) {
            $data['enabled'] = (bool) $data['enabled'];
        }
        if (\array_key_exists('enabled', $data)) {
            $object->enabled = $data['enabled'];
        }
        if (\array_key_exists('appLogFacility', $data)) {
            $object->appLogFacility = $data['appLogFacility'];
        }
        if (\array_key_exists('auditLogFacility', $data)) {
            $object->auditLogFacility = $data['auditLogFacility'];
        }
        if (\array_key_exists('eventLogFacility', $data)) {
            $object->eventLogFacility = $data['eventLogFacility'];
        }
        if (\array_key_exists('appLogSeverity', $data)) {
            $object->appLogSeverity = $data['appLogSeverity'];
        }
        if (\array_key_exists('auditLogSeverity', $data)) {
            $object->auditLogSeverity = $data['auditLogSeverity'];
        }
        if (\array_key_exists('otherLogSeverity', $data)) {
            $object->otherLogSeverity = $data['otherLogSeverity'];
        }
        if (\array_key_exists('forwardUEEventsMsgFormatType', $data)) {
            $object->forwardUEEventsMsgFormatType = $data['forwardUEEventsMsgFormatType'];
        }
        if (\array_key_exists('primaryServer', $data)) {
            $object->primaryServer = $this->denormalizer->denormalize($data['primaryServer'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SyslogPrimaryServer::class, 'json', $context);
        }
        if (\array_key_exists('secondaryServer', $data)) {
            $object->secondaryServer = $this->denormalizer->denormalize($data['secondaryServer'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SyslogSecondaryServer::class, 'json', $context);
        }
        if (\array_key_exists('eventFilter', $data)) {
            $object->eventFilter = $data['eventFilter'];
        }
        if (\array_key_exists('eventFilterSeverity', $data)) {
            $object->eventFilterSeverity = $data['eventFilterSeverity'];
        }
        if (\array_key_exists('priority', $data)) {
            $object->priority = $this->denormalizer->denormalize($data['priority'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SyslogPriority::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('enabled', get_object_vars($data)) && null !== ($data->enabled ?? null)) {
            $dataArray['enabled'] = $data->enabled ?? null;
        }
        if (array_key_exists('appLogFacility', get_object_vars($data)) && null !== ($data->appLogFacility ?? null)) {
            $dataArray['appLogFacility'] = $data->appLogFacility ?? null;
        }
        if (array_key_exists('auditLogFacility', get_object_vars($data)) && null !== ($data->auditLogFacility ?? null)) {
            $dataArray['auditLogFacility'] = $data->auditLogFacility ?? null;
        }
        if (array_key_exists('eventLogFacility', get_object_vars($data)) && null !== ($data->eventLogFacility ?? null)) {
            $dataArray['eventLogFacility'] = $data->eventLogFacility ?? null;
        }
        if (array_key_exists('appLogSeverity', get_object_vars($data)) && null !== ($data->appLogSeverity ?? null)) {
            $dataArray['appLogSeverity'] = $data->appLogSeverity ?? null;
        }
        if (array_key_exists('auditLogSeverity', get_object_vars($data)) && null !== ($data->auditLogSeverity ?? null)) {
            $dataArray['auditLogSeverity'] = $data->auditLogSeverity ?? null;
        }
        if (array_key_exists('otherLogSeverity', get_object_vars($data)) && null !== ($data->otherLogSeverity ?? null)) {
            $dataArray['otherLogSeverity'] = $data->otherLogSeverity ?? null;
        }
        if (array_key_exists('forwardUEEventsMsgFormatType', get_object_vars($data)) && null !== ($data->forwardUEEventsMsgFormatType ?? null)) {
            $dataArray['forwardUEEventsMsgFormatType'] = $data->forwardUEEventsMsgFormatType ?? null;
        }
        if (array_key_exists('primaryServer', get_object_vars($data)) && null !== ($data->primaryServer ?? null)) {
            $dataArray['primaryServer'] = ($data->primaryServer ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->primaryServer ?? null, 'json', $context));
        }
        if (array_key_exists('secondaryServer', get_object_vars($data)) && null !== ($data->secondaryServer ?? null)) {
            $dataArray['secondaryServer'] = ($data->secondaryServer ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->secondaryServer ?? null, 'json', $context));
        }
        if (array_key_exists('eventFilter', get_object_vars($data)) && null !== ($data->eventFilter ?? null)) {
            $dataArray['eventFilter'] = $data->eventFilter ?? null;
        }
        if (array_key_exists('eventFilterSeverity', get_object_vars($data)) && null !== ($data->eventFilterSeverity ?? null)) {
            $dataArray['eventFilterSeverity'] = $data->eventFilterSeverity ?? null;
        }
        if (array_key_exists('priority', get_object_vars($data)) && null !== ($data->priority ?? null)) {
            $dataArray['priority'] = ($data->priority ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->priority ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SyslogModifySyslogSettings::class => false];
    }
}