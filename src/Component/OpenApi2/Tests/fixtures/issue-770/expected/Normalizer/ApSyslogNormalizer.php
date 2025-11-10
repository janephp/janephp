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
class ApSyslogNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApSyslog::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApSyslog::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApSyslog();
        if (\array_key_exists('enabled', $data) && \is_int($data['enabled'])) {
            $data['enabled'] = (bool) $data['enabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('enabled', $data)) {
            $object->setEnabled($data['enabled']);
        }
        if (\array_key_exists('syslogConfigType', $data)) {
            $object->setSyslogConfigType($data['syslogConfigType']);
        }
        if (\array_key_exists('syslogServerProfileId', $data)) {
            $object->setSyslogServerProfileId($data['syslogServerProfileId']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($data['address']);
        }
        if (\array_key_exists('port', $data)) {
            $object->setPort($data['port']);
        }
        if (\array_key_exists('facility', $data)) {
            $object->setFacility($data['facility']);
        }
        if (\array_key_exists('priority', $data)) {
            $object->setPriority($data['priority']);
        }
        if (\array_key_exists('flowLevel', $data)) {
            $object->setFlowLevel($data['flowLevel']);
        }
        if (\array_key_exists('protocol', $data)) {
            $object->setProtocol($data['protocol']);
        }
        if (\array_key_exists('secondaryAddress', $data)) {
            $object->setSecondaryAddress($data['secondaryAddress']);
        }
        if (\array_key_exists('secondaryPort', $data)) {
            $object->setSecondaryPort($data['secondaryPort']);
        }
        if (\array_key_exists('secondaryProtocol', $data)) {
            $object->setSecondaryProtocol($data['secondaryProtocol']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['enabled'] = $data->getEnabled();
        if ($data->isInitialized('syslogConfigType') && null !== $data->getSyslogConfigType()) {
            $dataArray['syslogConfigType'] = $data->getSyslogConfigType();
        }
        if ($data->isInitialized('syslogServerProfileId') && null !== $data->getSyslogServerProfileId()) {
            $dataArray['syslogServerProfileId'] = $data->getSyslogServerProfileId();
        }
        if ($data->isInitialized('address') && null !== $data->getAddress()) {
            $dataArray['address'] = $data->getAddress();
        }
        if ($data->isInitialized('port') && null !== $data->getPort()) {
            $dataArray['port'] = $data->getPort();
        }
        if ($data->isInitialized('facility') && null !== $data->getFacility()) {
            $dataArray['facility'] = $data->getFacility();
        }
        if ($data->isInitialized('priority') && null !== $data->getPriority()) {
            $dataArray['priority'] = $data->getPriority();
        }
        if ($data->isInitialized('flowLevel') && null !== $data->getFlowLevel()) {
            $dataArray['flowLevel'] = $data->getFlowLevel();
        }
        if ($data->isInitialized('protocol') && null !== $data->getProtocol()) {
            $dataArray['protocol'] = $data->getProtocol();
        }
        if ($data->isInitialized('secondaryAddress') && null !== $data->getSecondaryAddress()) {
            $dataArray['secondaryAddress'] = $data->getSecondaryAddress();
        }
        if ($data->isInitialized('secondaryPort') && null !== $data->getSecondaryPort()) {
            $dataArray['secondaryPort'] = $data->getSecondaryPort();
        }
        if ($data->isInitialized('secondaryProtocol') && null !== $data->getSecondaryProtocol()) {
            $dataArray['secondaryProtocol'] = $data->getSecondaryProtocol();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApSyslog::class => false];
    }
}