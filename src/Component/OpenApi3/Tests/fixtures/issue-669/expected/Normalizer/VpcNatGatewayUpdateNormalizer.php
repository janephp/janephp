<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class VpcNatGatewayUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\VpcNatGatewayUpdate::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\VpcNatGatewayUpdate::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\VpcNatGatewayUpdate();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('size', $data)) {
            $object->setSize($data['size']);
            unset($data['size']);
        }
        if (\array_key_exists('vpcs', $data)) {
            $values = [];
            foreach ($data['vpcs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\VpcNatGatewayUpdateVpcsItem::class, 'json', $context);
            }
            $object->setVpcs($values);
            unset($data['vpcs']);
        }
        if (\array_key_exists('udp_timeout_seconds', $data)) {
            $object->setUdpTimeoutSeconds($data['udp_timeout_seconds']);
            unset($data['udp_timeout_seconds']);
        }
        if (\array_key_exists('icmp_timeout_seconds', $data)) {
            $object->setIcmpTimeoutSeconds($data['icmp_timeout_seconds']);
            unset($data['icmp_timeout_seconds']);
        }
        if (\array_key_exists('tcp_timeout_seconds', $data)) {
            $object->setTcpTimeoutSeconds($data['tcp_timeout_seconds']);
            unset($data['tcp_timeout_seconds']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        $dataArray['size'] = $data->getSize();
        if ($data->isInitialized('vpcs') && null !== $data->getVpcs()) {
            $values = [];
            foreach ($data->getVpcs() as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['vpcs'] = $values;
        }
        if ($data->isInitialized('udpTimeoutSeconds') && null !== $data->getUdpTimeoutSeconds()) {
            $dataArray['udp_timeout_seconds'] = $data->getUdpTimeoutSeconds();
        }
        if ($data->isInitialized('icmpTimeoutSeconds') && null !== $data->getIcmpTimeoutSeconds()) {
            $dataArray['icmp_timeout_seconds'] = $data->getIcmpTimeoutSeconds();
        }
        if ($data->isInitialized('tcpTimeoutSeconds') && null !== $data->getTcpTimeoutSeconds()) {
            $dataArray['tcp_timeout_seconds'] = $data->getTcpTimeoutSeconds();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\VpcNatGatewayUpdate::class => false];
    }
}