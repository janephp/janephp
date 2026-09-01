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
class ProfileVdpProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileVdpProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileVdpProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileVdpProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isSupport', $data) && \is_int($data['isSupport'])) {
            $data['isSupport'] = (bool) $data['isSupport'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
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
        if (\array_key_exists('extIp', $data)) {
            $object->extIp = $data['extIp'];
        }
        if (\array_key_exists('dataVlan', $data)) {
            $object->dataVlan = $data['dataVlan'];
        }
        if (\array_key_exists('mgmtIp', $data)) {
            $object->mgmtIp = $data['mgmtIp'];
        }
        if (\array_key_exists('mgmtExtIp', $data)) {
            $object->mgmtExtIp = $data['mgmtExtIp'];
        }
        if (\array_key_exists('mgmtVlan', $data)) {
            $object->mgmtVlan = $data['mgmtVlan'];
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
        if (\array_key_exists('fwVersion', $data)) {
            $object->fwVersion = $data['fwVersion'];
        }
        if (\array_key_exists('isSupport', $data)) {
            $object->isSupport = $data['isSupport'];
        }
        if (\array_key_exists('lastSeenOn', $data)) {
            $object->lastSeenOn = $data['lastSeenOn'];
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
        }
        if (\array_key_exists('registrationState', $data)) {
            $object->registrationState = $data['registrationState'];
        }
        if (\array_key_exists('uptime', $data)) {
            $object->uptime = $data['uptime'];
        }
        if (\array_key_exists('createDateTime', $data)) {
            $object->createDateTime = $data['createDateTime'];
        }
        if (\array_key_exists('modifiedDateTime', $data)) {
            $object->modifiedDateTime = $data['modifiedDateTime'];
        }
        if (\array_key_exists('creatorId', $data)) {
            $object->creatorId = $data['creatorId'];
        }
        if (\array_key_exists('modifierId', $data)) {
            $object->modifierId = $data['modifierId'];
        }
        if (\array_key_exists('creatorUsername', $data)) {
            $object->creatorUsername = $data['creatorUsername'];
        }
        if (\array_key_exists('modifierUsername', $data)) {
            $object->modifierUsername = $data['modifierUsername'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
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
        if (array_key_exists('extIp', get_object_vars($data)) && null !== ($data->extIp ?? null)) {
            $dataArray['extIp'] = $data->extIp ?? null;
        }
        if (array_key_exists('dataVlan', get_object_vars($data)) && null !== ($data->dataVlan ?? null)) {
            $dataArray['dataVlan'] = $data->dataVlan ?? null;
        }
        if (array_key_exists('mgmtIp', get_object_vars($data)) && null !== ($data->mgmtIp ?? null)) {
            $dataArray['mgmtIp'] = $data->mgmtIp ?? null;
        }
        if (array_key_exists('mgmtExtIp', get_object_vars($data)) && null !== ($data->mgmtExtIp ?? null)) {
            $dataArray['mgmtExtIp'] = $data->mgmtExtIp ?? null;
        }
        if (array_key_exists('mgmtVlan', get_object_vars($data)) && null !== ($data->mgmtVlan ?? null)) {
            $dataArray['mgmtVlan'] = $data->mgmtVlan ?? null;
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
        if (array_key_exists('fwVersion', get_object_vars($data)) && null !== ($data->fwVersion ?? null)) {
            $dataArray['fwVersion'] = $data->fwVersion ?? null;
        }
        if (array_key_exists('isSupport', get_object_vars($data)) && null !== ($data->isSupport ?? null)) {
            $dataArray['isSupport'] = $data->isSupport ?? null;
        }
        if (array_key_exists('lastSeenOn', get_object_vars($data)) && null !== ($data->lastSeenOn ?? null)) {
            $dataArray['lastSeenOn'] = $data->lastSeenOn ?? null;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status ?? null;
        }
        if (array_key_exists('registrationState', get_object_vars($data)) && null !== ($data->registrationState ?? null)) {
            $dataArray['registrationState'] = $data->registrationState ?? null;
        }
        if (array_key_exists('uptime', get_object_vars($data)) && null !== ($data->uptime ?? null)) {
            $dataArray['uptime'] = $data->uptime ?? null;
        }
        if (array_key_exists('createDateTime', get_object_vars($data)) && null !== ($data->createDateTime ?? null)) {
            $dataArray['createDateTime'] = $data->createDateTime ?? null;
        }
        if (array_key_exists('modifiedDateTime', get_object_vars($data)) && null !== ($data->modifiedDateTime ?? null)) {
            $dataArray['modifiedDateTime'] = $data->modifiedDateTime ?? null;
        }
        if (array_key_exists('creatorId', get_object_vars($data)) && null !== ($data->creatorId ?? null)) {
            $dataArray['creatorId'] = $data->creatorId ?? null;
        }
        if (array_key_exists('modifierId', get_object_vars($data)) && null !== ($data->modifierId ?? null)) {
            $dataArray['modifierId'] = $data->modifierId ?? null;
        }
        if (array_key_exists('creatorUsername', get_object_vars($data)) && null !== ($data->creatorUsername ?? null)) {
            $dataArray['creatorUsername'] = $data->creatorUsername ?? null;
        }
        if (array_key_exists('modifierUsername', get_object_vars($data)) && null !== ($data->modifierUsername ?? null)) {
            $dataArray['modifierUsername'] = $data->modifierUsername ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileVdpProfile::class => false];
    }
}