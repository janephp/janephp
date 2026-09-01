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
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('size', $data)) {
            $object->size = $data['size'];
            unset($data['size']);
        }
        if (\array_key_exists('vpcs', $data)) {
            $values = [];
            foreach ($data['vpcs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\VpcNatGatewayUpdateVpcsItem::class, 'json', $context);
            }
            $object->vpcs = $values;
            unset($data['vpcs']);
        }
        if (\array_key_exists('udp_timeout_seconds', $data)) {
            $object->udpTimeoutSeconds = $data['udp_timeout_seconds'];
            unset($data['udp_timeout_seconds']);
        }
        if (\array_key_exists('icmp_timeout_seconds', $data)) {
            $object->icmpTimeoutSeconds = $data['icmp_timeout_seconds'];
            unset($data['icmp_timeout_seconds']);
        }
        if (\array_key_exists('tcp_timeout_seconds', $data)) {
            $object->tcpTimeoutSeconds = $data['tcp_timeout_seconds'];
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
        $dataArray['name'] = $data->name ?? null;
        $dataArray['size'] = $data->size ?? null;
        if (array_key_exists('vpcs', get_object_vars($data)) && null !== ($data->vpcs ?? null)) {
            $values = [];
            foreach ($data->vpcs ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['vpcs'] = $values;
        }
        if (array_key_exists('udpTimeoutSeconds', get_object_vars($data)) && null !== ($data->udpTimeoutSeconds ?? null)) {
            $dataArray['udp_timeout_seconds'] = $data->udpTimeoutSeconds ?? null;
        }
        if (array_key_exists('icmpTimeoutSeconds', get_object_vars($data)) && null !== ($data->icmpTimeoutSeconds ?? null)) {
            $dataArray['icmp_timeout_seconds'] = $data->icmpTimeoutSeconds ?? null;
        }
        if (array_key_exists('tcpTimeoutSeconds', get_object_vars($data)) && null !== ($data->tcpTimeoutSeconds ?? null)) {
            $dataArray['tcp_timeout_seconds'] = $data->tcpTimeoutSeconds ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
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