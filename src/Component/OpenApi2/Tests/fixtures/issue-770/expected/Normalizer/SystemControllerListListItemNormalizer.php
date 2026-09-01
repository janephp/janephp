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
class SystemControllerListListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemControllerListListItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemControllerListListItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemControllerListListItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('model', $data)) {
            $object->model = $data['model'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('hostName', $data)) {
            $object->hostName = $data['hostName'];
        }
        if (\array_key_exists('mac', $data)) {
            $object->mac = $data['mac'];
        }
        if (\array_key_exists('serialNumber', $data)) {
            $object->serialNumber = $data['serialNumber'];
        }
        if (\array_key_exists('clusterRole', $data)) {
            $object->clusterRole = $data['clusterRole'];
        }
        if (\array_key_exists('controlNatIp', $data)) {
            $object->controlNatIp = $data['controlNatIp'];
        }
        if (\array_key_exists('uptimeInSec', $data)) {
            $object->uptimeInSec = $data['uptimeInSec'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('version', $data)) {
            $object->version = $data['version'];
        }
        if (\array_key_exists('apVersion', $data)) {
            $object->apVersion = $data['apVersion'];
        }
        if (\array_key_exists('controlIp', $data)) {
            $object->controlIp = $data['controlIp'];
        }
        if (\array_key_exists('clusterIp', $data)) {
            $object->clusterIp = $data['clusterIp'];
        }
        if (\array_key_exists('managementIp', $data)) {
            $object->managementIp = $data['managementIp'];
        }
        if (\array_key_exists('controlIpv6', $data)) {
            $object->controlIpv6 = $data['controlIpv6'];
        }
        if (\array_key_exists('clusterIpv6', $data)) {
            $object->clusterIpv6 = $data['clusterIpv6'];
        }
        if (\array_key_exists('managementIpv6', $data)) {
            $object->managementIpv6 = $data['managementIpv6'];
        }
        if (\array_key_exists('reservedPorts', $data)) {
            $values = [];
            foreach ($data['reservedPorts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\SystemReservedPort::class, 'json', $context);
            }
            $object->reservedPorts = $values;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('model', get_object_vars($data)) && null !== ($data->model ?? null)) {
            $dataArray['model'] = $data->model ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('hostName', get_object_vars($data)) && null !== ($data->hostName ?? null)) {
            $dataArray['hostName'] = $data->hostName ?? null;
        }
        if (array_key_exists('mac', get_object_vars($data)) && null !== ($data->mac ?? null)) {
            $dataArray['mac'] = $data->mac ?? null;
        }
        if (array_key_exists('serialNumber', get_object_vars($data)) && null !== ($data->serialNumber ?? null)) {
            $dataArray['serialNumber'] = $data->serialNumber ?? null;
        }
        if (array_key_exists('clusterRole', get_object_vars($data)) && null !== ($data->clusterRole ?? null)) {
            $dataArray['clusterRole'] = $data->clusterRole ?? null;
        }
        if (array_key_exists('controlNatIp', get_object_vars($data)) && null !== ($data->controlNatIp ?? null)) {
            $dataArray['controlNatIp'] = $data->controlNatIp ?? null;
        }
        if (array_key_exists('uptimeInSec', get_object_vars($data)) && null !== ($data->uptimeInSec ?? null)) {
            $dataArray['uptimeInSec'] = $data->uptimeInSec ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('version', get_object_vars($data)) && null !== ($data->version ?? null)) {
            $dataArray['version'] = $data->version ?? null;
        }
        if (array_key_exists('apVersion', get_object_vars($data)) && null !== ($data->apVersion ?? null)) {
            $dataArray['apVersion'] = $data->apVersion ?? null;
        }
        if (array_key_exists('controlIp', get_object_vars($data)) && null !== ($data->controlIp ?? null)) {
            $dataArray['controlIp'] = $data->controlIp ?? null;
        }
        if (array_key_exists('clusterIp', get_object_vars($data)) && null !== ($data->clusterIp ?? null)) {
            $dataArray['clusterIp'] = $data->clusterIp ?? null;
        }
        if (array_key_exists('managementIp', get_object_vars($data)) && null !== ($data->managementIp ?? null)) {
            $dataArray['managementIp'] = $data->managementIp ?? null;
        }
        if (array_key_exists('controlIpv6', get_object_vars($data)) && null !== ($data->controlIpv6 ?? null)) {
            $dataArray['controlIpv6'] = $data->controlIpv6 ?? null;
        }
        if (array_key_exists('clusterIpv6', get_object_vars($data)) && null !== ($data->clusterIpv6 ?? null)) {
            $dataArray['clusterIpv6'] = $data->clusterIpv6 ?? null;
        }
        if (array_key_exists('managementIpv6', get_object_vars($data)) && null !== ($data->managementIpv6 ?? null)) {
            $dataArray['managementIpv6'] = $data->managementIpv6 ?? null;
        }
        if (array_key_exists('reservedPorts', get_object_vars($data)) && null !== ($data->reservedPorts ?? null)) {
            $values = [];
            foreach ($data->reservedPorts ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['reservedPorts'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemControllerListListItem::class => false];
    }
}