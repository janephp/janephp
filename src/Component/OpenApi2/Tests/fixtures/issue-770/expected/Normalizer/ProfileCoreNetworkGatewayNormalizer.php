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
class ProfileCoreNetworkGatewayNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCoreNetworkGateway::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCoreNetworkGateway::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCoreNetworkGateway();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('primaryGateway', $data)) {
            $object->setPrimaryGateway($data['primaryGateway']);
        }
        if (\array_key_exists('secondaryGateway', $data)) {
            $object->setSecondaryGateway($data['secondaryGateway']);
        }
        if (\array_key_exists('tunnelMTU', $data)) {
            $object->setTunnelMTU($data['tunnelMTU']);
        }
        if (\array_key_exists('tunnelMTUSize', $data)) {
            $object->setTunnelMTUSize($data['tunnelMTUSize']);
        }
        if (\array_key_exists('keepAlivePeriod', $data)) {
            $object->setKeepAlivePeriod($data['keepAlivePeriod']);
        }
        if (\array_key_exists('keepAliveRetry', $data)) {
            $object->setKeepAliveRetry($data['keepAliveRetry']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('primaryGateway') && null !== $data->getPrimaryGateway()) {
            $dataArray['primaryGateway'] = $data->getPrimaryGateway();
        }
        if ($data->isInitialized('secondaryGateway') && null !== $data->getSecondaryGateway()) {
            $dataArray['secondaryGateway'] = $data->getSecondaryGateway();
        }
        if ($data->isInitialized('tunnelMTU') && null !== $data->getTunnelMTU()) {
            $dataArray['tunnelMTU'] = $data->getTunnelMTU();
        }
        if ($data->isInitialized('tunnelMTUSize') && null !== $data->getTunnelMTUSize()) {
            $dataArray['tunnelMTUSize'] = $data->getTunnelMTUSize();
        }
        if ($data->isInitialized('keepAlivePeriod') && null !== $data->getKeepAlivePeriod()) {
            $dataArray['keepAlivePeriod'] = $data->getKeepAlivePeriod();
        }
        if ($data->isInitialized('keepAliveRetry') && null !== $data->getKeepAliveRetry()) {
            $dataArray['keepAliveRetry'] = $data->getKeepAliveRetry();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCoreNetworkGateway::class => false];
    }
}