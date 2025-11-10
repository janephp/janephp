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
class ApNetworkIpv6Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApNetworkIpv6::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApNetworkIpv6::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApNetworkIpv6();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ipType', $data)) {
            $object->setIpType($data['ipType']);
        }
        if (\array_key_exists('ip', $data)) {
            $object->setIp($data['ip']);
        }
        if (\array_key_exists('gateway', $data)) {
            $object->setGateway($data['gateway']);
        }
        if (\array_key_exists('primaryDns', $data)) {
            $object->setPrimaryDns($data['primaryDns']);
        }
        if (\array_key_exists('secondaryDns', $data)) {
            $object->setSecondaryDns($data['secondaryDns']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('ipType') && null !== $data->getIpType()) {
            $dataArray['ipType'] = $data->getIpType();
        }
        if ($data->isInitialized('ip') && null !== $data->getIp()) {
            $dataArray['ip'] = $data->getIp();
        }
        if ($data->isInitialized('gateway') && null !== $data->getGateway()) {
            $dataArray['gateway'] = $data->getGateway();
        }
        if ($data->isInitialized('primaryDns') && null !== $data->getPrimaryDns()) {
            $dataArray['primaryDns'] = $data->getPrimaryDns();
        }
        if ($data->isInitialized('secondaryDns') && null !== $data->getSecondaryDns()) {
            $dataArray['secondaryDns'] = $data->getSecondaryDns();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApNetworkIpv6::class => false];
    }
}