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
class SystemDataPlaneListListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemDataPlaneListListItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemDataPlaneListListItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemDataPlaneListListItem();
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
        if (\array_key_exists('mac', $data)) {
            $object->mac = $data['mac'];
        }
        if (\array_key_exists('ip', $data)) {
            $object->ip = $data['ip'];
        }
        if (\array_key_exists('ipv6', $data)) {
            $object->ipv6 = $data['ipv6'];
        }
        if (\array_key_exists('managedBy', $data)) {
            $object->managedBy = $data['managedBy'];
        }
        if (\array_key_exists('model', $data)) {
            $object->model = $data['model'];
        }
        if (\array_key_exists('serialNumber', $data)) {
            $object->serialNumber = $data['serialNumber'];
        }
        if (\array_key_exists('greTunnels', $data)) {
            $object->greTunnels = $data['greTunnels'];
        }
        if (\array_key_exists('fwVersion', $data)) {
            $object->fwVersion = $data['fwVersion'];
        }
        if (\array_key_exists('lastSeen', $data)) {
            $object->lastSeen = $data['lastSeen'];
        }
        if (\array_key_exists('dpStatus', $data)) {
            $object->dpStatus = $data['dpStatus'];
        }
        if (\array_key_exists('uptime', $data)) {
            $object->uptime = $data['uptime'];
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('mac', get_object_vars($data)) && null !== ($data->mac ?? null)) {
            $dataArray['mac'] = $data->mac ?? null;
        }
        if (array_key_exists('ip', get_object_vars($data)) && null !== ($data->ip ?? null)) {
            $dataArray['ip'] = $data->ip ?? null;
        }
        if (array_key_exists('ipv6', get_object_vars($data)) && null !== ($data->ipv6 ?? null)) {
            $dataArray['ipv6'] = $data->ipv6 ?? null;
        }
        if (array_key_exists('managedBy', get_object_vars($data)) && null !== ($data->managedBy ?? null)) {
            $dataArray['managedBy'] = $data->managedBy ?? null;
        }
        if (array_key_exists('model', get_object_vars($data)) && null !== ($data->model ?? null)) {
            $dataArray['model'] = $data->model ?? null;
        }
        if (array_key_exists('serialNumber', get_object_vars($data)) && null !== ($data->serialNumber ?? null)) {
            $dataArray['serialNumber'] = $data->serialNumber ?? null;
        }
        if (array_key_exists('greTunnels', get_object_vars($data)) && null !== ($data->greTunnels ?? null)) {
            $dataArray['greTunnels'] = $data->greTunnels ?? null;
        }
        if (array_key_exists('fwVersion', get_object_vars($data)) && null !== ($data->fwVersion ?? null)) {
            $dataArray['fwVersion'] = $data->fwVersion ?? null;
        }
        if (array_key_exists('lastSeen', get_object_vars($data)) && null !== ($data->lastSeen ?? null)) {
            $dataArray['lastSeen'] = $data->lastSeen ?? null;
        }
        if (array_key_exists('dpStatus', get_object_vars($data)) && null !== ($data->dpStatus ?? null)) {
            $dataArray['dpStatus'] = $data->dpStatus ?? null;
        }
        if (array_key_exists('uptime', get_object_vars($data)) && null !== ($data->uptime ?? null)) {
            $dataArray['uptime'] = $data->uptime ?? null;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemDataPlaneListListItem::class => false];
    }
}