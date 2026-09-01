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
class DhcppoolsDhcpClientInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DhcppoolsDhcpClientInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DhcppoolsDhcpClientInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DhcppoolsDhcpClientInfo();
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
            $object->clientMac = $data['clientMac'];
        }
        if (\array_key_exists('clientIp', $data)) {
            $object->clientIp = $data['clientIp'];
        }
        if (\array_key_exists('leaseTime', $data)) {
            $object->leaseTime = $data['leaseTime'];
        }
        if (\array_key_exists('leaseTimeHours', $data)) {
            $object->leaseTimeHours = $data['leaseTimeHours'];
        }
        if (\array_key_exists('leaseTimeMinutes', $data)) {
            $object->leaseTimeMinutes = $data['leaseTimeMinutes'];
        }
        if (\array_key_exists('leaseExpiryTime', $data)) {
            $object->leaseExpiryTime = $data['leaseExpiryTime'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('clientMac', get_object_vars($data)) && null !== ($data->clientMac ?? null)) {
            $dataArray['clientMac'] = $data->clientMac ?? null;
        }
        if (array_key_exists('clientIp', get_object_vars($data)) && null !== ($data->clientIp ?? null)) {
            $dataArray['clientIp'] = $data->clientIp ?? null;
        }
        if (array_key_exists('leaseTime', get_object_vars($data)) && null !== ($data->leaseTime ?? null)) {
            $dataArray['leaseTime'] = $data->leaseTime ?? null;
        }
        if (array_key_exists('leaseTimeHours', get_object_vars($data)) && null !== ($data->leaseTimeHours ?? null)) {
            $dataArray['leaseTimeHours'] = $data->leaseTimeHours ?? null;
        }
        if (array_key_exists('leaseTimeMinutes', get_object_vars($data)) && null !== ($data->leaseTimeMinutes ?? null)) {
            $dataArray['leaseTimeMinutes'] = $data->leaseTimeMinutes ?? null;
        }
        if (array_key_exists('leaseExpiryTime', get_object_vars($data)) && null !== ($data->leaseExpiryTime ?? null)) {
            $dataArray['leaseExpiryTime'] = $data->leaseExpiryTime ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DhcppoolsDhcpClientInfo::class => false];
    }
}