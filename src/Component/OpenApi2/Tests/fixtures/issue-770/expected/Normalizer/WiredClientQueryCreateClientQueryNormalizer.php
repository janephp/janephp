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
class WiredClientQueryCreateClientQueryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WiredClientQueryCreateClientQuery::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WiredClientQueryCreateClientQuery::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WiredClientQueryCreateClientQuery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('apName', $data)) {
            $object->apName = $data['apName'];
        }
        if (\array_key_exists('ipv6Address', $data)) {
            $object->ipv6Address = $data['ipv6Address'];
        }
        if (\array_key_exists('clientMac', $data)) {
            $object->clientMac = $data['clientMac'];
        }
        if (\array_key_exists('traffic', $data)) {
            $object->traffic = $data['traffic'];
        }
        if (\array_key_exists('uplink', $data)) {
            $object->uplink = $data['uplink'];
        }
        if (\array_key_exists('downlink', $data)) {
            $object->downlink = $data['downlink'];
        }
        if (\array_key_exists('txRxBytes', $data)) {
            $object->txRxBytes = $data['txRxBytes'];
        }
        if (\array_key_exists('txRetry', $data)) {
            $object->txRetry = $data['txRetry'];
        }
        if (\array_key_exists('txFrames', $data)) {
            $object->txFrames = $data['txFrames'];
        }
        if (\array_key_exists('hostname', $data)) {
            $object->hostname = $data['hostname'];
        }
        if (\array_key_exists('vlan', $data)) {
            $object->vlan = $data['vlan'];
        }
        if (\array_key_exists('rxFrames', $data)) {
            $object->rxFrames = $data['rxFrames'];
        }
        if (\array_key_exists('wlanType', $data)) {
            $object->wlanType = $data['wlanType'];
        }
        if (\array_key_exists('osType', $data)) {
            $object->osType = $data['osType'];
        }
        if (\array_key_exists('deviceType', $data)) {
            $object->deviceType = $data['deviceType'];
        }
        if (\array_key_exists('osVendorType', $data)) {
            $object->osVendorType = $data['osVendorType'];
        }
        if (\array_key_exists('modelName', $data)) {
            $object->modelName = $data['modelName'];
        }
        if (\array_key_exists('rxBytes', $data)) {
            $object->rxBytes = $data['rxBytes'];
        }
        if (\array_key_exists('ipAddress', $data)) {
            $object->ipAddress = $data['ipAddress'];
        }
        if (\array_key_exists('sessionStartTime', $data)) {
            $object->sessionStartTime = $data['sessionStartTime'];
        }
        if (\array_key_exists('apMac', $data)) {
            $object->apMac = $data['apMac'];
        }
        if (\array_key_exists('userName', $data)) {
            $object->userName = $data['userName'];
        }
        if (\array_key_exists('userRoleId', $data)) {
            $object->userRoleId = $data['userRoleId'];
        }
        if (\array_key_exists('userRoleName', $data)) {
            $object->userRoleName = $data['userRoleName'];
        }
        if (\array_key_exists('txBytes', $data)) {
            $object->txBytes = $data['txBytes'];
        }
        if (\array_key_exists('authStatus', $data)) {
            $object->authStatus = $data['authStatus'];
        }
        if (\array_key_exists('apEthID', $data)) {
            $object->apEthID = $data['apEthID'];
        }
        if (\array_key_exists('vni', $data)) {
            $object->vni = $data['vni'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('apName', get_object_vars($data)) && null !== ($data->apName ?? null)) {
            $dataArray['apName'] = $data->apName ?? null;
        }
        if (array_key_exists('ipv6Address', get_object_vars($data)) && null !== ($data->ipv6Address ?? null)) {
            $dataArray['ipv6Address'] = $data->ipv6Address ?? null;
        }
        if (array_key_exists('clientMac', get_object_vars($data)) && null !== ($data->clientMac ?? null)) {
            $dataArray['clientMac'] = $data->clientMac ?? null;
        }
        if (array_key_exists('traffic', get_object_vars($data)) && null !== ($data->traffic ?? null)) {
            $dataArray['traffic'] = $data->traffic ?? null;
        }
        if (array_key_exists('uplink', get_object_vars($data)) && null !== ($data->uplink ?? null)) {
            $dataArray['uplink'] = $data->uplink ?? null;
        }
        if (array_key_exists('downlink', get_object_vars($data)) && null !== ($data->downlink ?? null)) {
            $dataArray['downlink'] = $data->downlink ?? null;
        }
        if (array_key_exists('txRxBytes', get_object_vars($data)) && null !== ($data->txRxBytes ?? null)) {
            $dataArray['txRxBytes'] = $data->txRxBytes ?? null;
        }
        if (array_key_exists('txRetry', get_object_vars($data)) && null !== ($data->txRetry ?? null)) {
            $dataArray['txRetry'] = $data->txRetry ?? null;
        }
        if (array_key_exists('txFrames', get_object_vars($data)) && null !== ($data->txFrames ?? null)) {
            $dataArray['txFrames'] = $data->txFrames ?? null;
        }
        if (array_key_exists('hostname', get_object_vars($data)) && null !== ($data->hostname ?? null)) {
            $dataArray['hostname'] = $data->hostname ?? null;
        }
        if (array_key_exists('vlan', get_object_vars($data)) && null !== ($data->vlan ?? null)) {
            $dataArray['vlan'] = $data->vlan ?? null;
        }
        if (array_key_exists('rxFrames', get_object_vars($data)) && null !== ($data->rxFrames ?? null)) {
            $dataArray['rxFrames'] = $data->rxFrames ?? null;
        }
        if (array_key_exists('wlanType', get_object_vars($data)) && null !== ($data->wlanType ?? null)) {
            $dataArray['wlanType'] = $data->wlanType ?? null;
        }
        if (array_key_exists('osType', get_object_vars($data)) && null !== ($data->osType ?? null)) {
            $dataArray['osType'] = $data->osType ?? null;
        }
        if (array_key_exists('deviceType', get_object_vars($data)) && null !== ($data->deviceType ?? null)) {
            $dataArray['deviceType'] = $data->deviceType ?? null;
        }
        if (array_key_exists('osVendorType', get_object_vars($data)) && null !== ($data->osVendorType ?? null)) {
            $dataArray['osVendorType'] = $data->osVendorType ?? null;
        }
        if (array_key_exists('modelName', get_object_vars($data)) && null !== ($data->modelName ?? null)) {
            $dataArray['modelName'] = $data->modelName ?? null;
        }
        if (array_key_exists('rxBytes', get_object_vars($data)) && null !== ($data->rxBytes ?? null)) {
            $dataArray['rxBytes'] = $data->rxBytes ?? null;
        }
        if (array_key_exists('ipAddress', get_object_vars($data)) && null !== ($data->ipAddress ?? null)) {
            $dataArray['ipAddress'] = $data->ipAddress ?? null;
        }
        if (array_key_exists('sessionStartTime', get_object_vars($data)) && null !== ($data->sessionStartTime ?? null)) {
            $dataArray['sessionStartTime'] = $data->sessionStartTime ?? null;
        }
        if (array_key_exists('apMac', get_object_vars($data)) && null !== ($data->apMac ?? null)) {
            $dataArray['apMac'] = $data->apMac ?? null;
        }
        if (array_key_exists('userName', get_object_vars($data)) && null !== ($data->userName ?? null)) {
            $dataArray['userName'] = $data->userName ?? null;
        }
        if (array_key_exists('userRoleId', get_object_vars($data)) && null !== ($data->userRoleId ?? null)) {
            $dataArray['userRoleId'] = $data->userRoleId ?? null;
        }
        if (array_key_exists('userRoleName', get_object_vars($data)) && null !== ($data->userRoleName ?? null)) {
            $dataArray['userRoleName'] = $data->userRoleName ?? null;
        }
        if (array_key_exists('txBytes', get_object_vars($data)) && null !== ($data->txBytes ?? null)) {
            $dataArray['txBytes'] = $data->txBytes ?? null;
        }
        if (array_key_exists('authStatus', get_object_vars($data)) && null !== ($data->authStatus ?? null)) {
            $dataArray['authStatus'] = $data->authStatus ?? null;
        }
        if (array_key_exists('apEthID', get_object_vars($data)) && null !== ($data->apEthID ?? null)) {
            $dataArray['apEthID'] = $data->apEthID ?? null;
        }
        if (array_key_exists('vni', get_object_vars($data)) && null !== ($data->vni ?? null)) {
            $dataArray['vni'] = $data->vni ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WiredClientQueryCreateClientQuery::class => false];
    }
}