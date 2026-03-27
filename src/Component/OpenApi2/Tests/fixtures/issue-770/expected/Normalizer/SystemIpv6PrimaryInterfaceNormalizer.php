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
class SystemIpv6PrimaryInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv6PrimaryInterface::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv6PrimaryInterface::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv6PrimaryInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ipMode', $data)) {
            $object->setIpMode($data['ipMode']);
        }
        if (\array_key_exists('ipAddress', $data)) {
            $object->setIpAddress($data['ipAddress']);
        }
        if (\array_key_exists('gateway', $data)) {
            $object->setGateway($data['gateway']);
        }
        if (\array_key_exists('primaryDNSServer', $data)) {
            $object->setPrimaryDNSServer($data['primaryDNSServer']);
        }
        if (\array_key_exists('secondaryDNSServer', $data)) {
            $object->setSecondaryDNSServer($data['secondaryDNSServer']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['ipMode'] = $data->getIpMode();
        if ($data->isInitialized('ipAddress') && null !== $data->getIpAddress()) {
            $dataArray['ipAddress'] = $data->getIpAddress();
        }
        if ($data->isInitialized('gateway') && null !== $data->getGateway()) {
            $dataArray['gateway'] = $data->getGateway();
        }
        if ($data->isInitialized('primaryDNSServer') && null !== $data->getPrimaryDNSServer()) {
            $dataArray['primaryDNSServer'] = $data->getPrimaryDNSServer();
        }
        if ($data->isInitialized('secondaryDNSServer') && null !== $data->getSecondaryDNSServer()) {
            $dataArray['secondaryDNSServer'] = $data->getSecondaryDNSServer();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv6PrimaryInterface::class => false];
    }
}