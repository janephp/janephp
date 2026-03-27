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
class DhcppoolsDhcpClientInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DhcppoolsDhcpClientInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\DhcppoolsDhcpClientInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DhcppoolsDhcpClientInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('clientMac', $data)) {
            $object->setClientMac($data['clientMac']);
        }
        if (\array_key_exists('clientIp', $data)) {
            $object->setClientIp($data['clientIp']);
        }
        if (\array_key_exists('leaseTime', $data)) {
            $object->setLeaseTime($data['leaseTime']);
        }
        if (\array_key_exists('leaseTimeHours', $data)) {
            $object->setLeaseTimeHours($data['leaseTimeHours']);
        }
        if (\array_key_exists('leaseTimeMinutes', $data)) {
            $object->setLeaseTimeMinutes($data['leaseTimeMinutes']);
        }
        if (\array_key_exists('leaseExpiryTime', $data)) {
            $object->setLeaseExpiryTime($data['leaseExpiryTime']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('clientMac') && null !== $data->getClientMac()) {
            $dataArray['clientMac'] = $data->getClientMac();
        }
        if ($data->isInitialized('clientIp') && null !== $data->getClientIp()) {
            $dataArray['clientIp'] = $data->getClientIp();
        }
        if ($data->isInitialized('leaseTime') && null !== $data->getLeaseTime()) {
            $dataArray['leaseTime'] = $data->getLeaseTime();
        }
        if ($data->isInitialized('leaseTimeHours') && null !== $data->getLeaseTimeHours()) {
            $dataArray['leaseTimeHours'] = $data->getLeaseTimeHours();
        }
        if ($data->isInitialized('leaseTimeMinutes') && null !== $data->getLeaseTimeMinutes()) {
            $dataArray['leaseTimeMinutes'] = $data->getLeaseTimeMinutes();
        }
        if ($data->isInitialized('leaseExpiryTime') && null !== $data->getLeaseExpiryTime()) {
            $dataArray['leaseExpiryTime'] = $data->getLeaseExpiryTime();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DhcppoolsDhcpClientInfo::class => false];
    }
}