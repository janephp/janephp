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
class ProfileDhcpRelayNoRelayTunnelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDhcpRelayNoRelayTunnel::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDhcpRelayNoRelayTunnel::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDhcpRelayNoRelayTunnel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('dhcpRelayEnabled', $data) && \is_int($data['dhcpRelayEnabled'])) {
            $data['dhcpRelayEnabled'] = (bool) $data['dhcpRelayEnabled'];
        }
        if (\array_key_exists('relayBothEnabled', $data) && \is_int($data['relayBothEnabled'])) {
            $data['relayBothEnabled'] = (bool) $data['relayBothEnabled'];
        }
        if (\array_key_exists('dhcpRelayEnabled', $data)) {
            $object->dhcpRelayEnabled = $data['dhcpRelayEnabled'];
        }
        if (\array_key_exists('dhcpServer1', $data)) {
            $object->dhcpServer1 = $data['dhcpServer1'];
        }
        if (\array_key_exists('dhcpServer2', $data)) {
            $object->dhcpServer2 = $data['dhcpServer2'];
        }
        if (\array_key_exists('relayBothEnabled', $data)) {
            $object->relayBothEnabled = $data['relayBothEnabled'];
        }
        if (\array_key_exists('dhcpOption82', $data)) {
            $object->dhcpOption82 = $this->denormalizer->denormalize($data['dhcpOption82'], \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDhcpOption82::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('dhcpRelayEnabled', get_object_vars($data)) && null !== ($data->dhcpRelayEnabled ?? null)) {
            $dataArray['dhcpRelayEnabled'] = $data->dhcpRelayEnabled ?? null;
        }
        if (array_key_exists('dhcpServer1', get_object_vars($data)) && null !== ($data->dhcpServer1 ?? null)) {
            $dataArray['dhcpServer1'] = $data->dhcpServer1 ?? null;
        }
        if (array_key_exists('dhcpServer2', get_object_vars($data)) && null !== ($data->dhcpServer2 ?? null)) {
            $dataArray['dhcpServer2'] = $data->dhcpServer2 ?? null;
        }
        if (array_key_exists('relayBothEnabled', get_object_vars($data)) && null !== ($data->relayBothEnabled ?? null)) {
            $dataArray['relayBothEnabled'] = $data->relayBothEnabled ?? null;
        }
        if (array_key_exists('dhcpOption82', get_object_vars($data)) && null !== ($data->dhcpOption82 ?? null)) {
            $dataArray['dhcpOption82'] = ($data->dhcpOption82 ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->dhcpOption82 ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDhcpRelayNoRelayTunnel::class => false];
    }
}