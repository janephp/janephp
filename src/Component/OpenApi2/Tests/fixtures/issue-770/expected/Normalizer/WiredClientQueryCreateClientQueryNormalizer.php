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
class WiredClientQueryCreateClientQueryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\WiredClientQueryCreateClientQuery::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\WiredClientQueryCreateClientQuery::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\WiredClientQueryCreateClientQuery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('apName', $data)) {
            $object->setApName($data['apName']);
        }
        if (\array_key_exists('ipv6Address', $data)) {
            $object->setIpv6Address($data['ipv6Address']);
        }
        if (\array_key_exists('clientMac', $data)) {
            $object->setClientMac($data['clientMac']);
        }
        if (\array_key_exists('traffic', $data)) {
            $object->setTraffic($data['traffic']);
        }
        if (\array_key_exists('uplink', $data)) {
            $object->setUplink($data['uplink']);
        }
        if (\array_key_exists('downlink', $data)) {
            $object->setDownlink($data['downlink']);
        }
        if (\array_key_exists('txRxBytes', $data)) {
            $object->setTxRxBytes($data['txRxBytes']);
        }
        if (\array_key_exists('txRetry', $data)) {
            $object->setTxRetry($data['txRetry']);
        }
        if (\array_key_exists('txFrames', $data)) {
            $object->setTxFrames($data['txFrames']);
        }
        if (\array_key_exists('hostname', $data)) {
            $object->setHostname($data['hostname']);
        }
        if (\array_key_exists('vlan', $data)) {
            $object->setVlan($data['vlan']);
        }
        if (\array_key_exists('rxFrames', $data)) {
            $object->setRxFrames($data['rxFrames']);
        }
        if (\array_key_exists('wlanType', $data)) {
            $object->setWlanType($data['wlanType']);
        }
        if (\array_key_exists('osType', $data)) {
            $object->setOsType($data['osType']);
        }
        if (\array_key_exists('deviceType', $data)) {
            $object->setDeviceType($data['deviceType']);
        }
        if (\array_key_exists('osVendorType', $data)) {
            $object->setOsVendorType($data['osVendorType']);
        }
        if (\array_key_exists('modelName', $data)) {
            $object->setModelName($data['modelName']);
        }
        if (\array_key_exists('rxBytes', $data)) {
            $object->setRxBytes($data['rxBytes']);
        }
        if (\array_key_exists('ipAddress', $data)) {
            $object->setIpAddress($data['ipAddress']);
        }
        if (\array_key_exists('sessionStartTime', $data)) {
            $object->setSessionStartTime($data['sessionStartTime']);
        }
        if (\array_key_exists('apMac', $data)) {
            $object->setApMac($data['apMac']);
        }
        if (\array_key_exists('userName', $data)) {
            $object->setUserName($data['userName']);
        }
        if (\array_key_exists('userRoleId', $data)) {
            $object->setUserRoleId($data['userRoleId']);
        }
        if (\array_key_exists('userRoleName', $data)) {
            $object->setUserRoleName($data['userRoleName']);
        }
        if (\array_key_exists('txBytes', $data)) {
            $object->setTxBytes($data['txBytes']);
        }
        if (\array_key_exists('authStatus', $data)) {
            $object->setAuthStatus($data['authStatus']);
        }
        if (\array_key_exists('apEthID', $data)) {
            $object->setApEthID($data['apEthID']);
        }
        if (\array_key_exists('vni', $data)) {
            $object->setVni($data['vni']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('apName') && null !== $data->getApName()) {
            $dataArray['apName'] = $data->getApName();
        }
        if ($data->isInitialized('ipv6Address') && null !== $data->getIpv6Address()) {
            $dataArray['ipv6Address'] = $data->getIpv6Address();
        }
        if ($data->isInitialized('clientMac') && null !== $data->getClientMac()) {
            $dataArray['clientMac'] = $data->getClientMac();
        }
        if ($data->isInitialized('traffic') && null !== $data->getTraffic()) {
            $dataArray['traffic'] = $data->getTraffic();
        }
        if ($data->isInitialized('uplink') && null !== $data->getUplink()) {
            $dataArray['uplink'] = $data->getUplink();
        }
        if ($data->isInitialized('downlink') && null !== $data->getDownlink()) {
            $dataArray['downlink'] = $data->getDownlink();
        }
        if ($data->isInitialized('txRxBytes') && null !== $data->getTxRxBytes()) {
            $dataArray['txRxBytes'] = $data->getTxRxBytes();
        }
        if ($data->isInitialized('txRetry') && null !== $data->getTxRetry()) {
            $dataArray['txRetry'] = $data->getTxRetry();
        }
        if ($data->isInitialized('txFrames') && null !== $data->getTxFrames()) {
            $dataArray['txFrames'] = $data->getTxFrames();
        }
        if ($data->isInitialized('hostname') && null !== $data->getHostname()) {
            $dataArray['hostname'] = $data->getHostname();
        }
        if ($data->isInitialized('vlan') && null !== $data->getVlan()) {
            $dataArray['vlan'] = $data->getVlan();
        }
        if ($data->isInitialized('rxFrames') && null !== $data->getRxFrames()) {
            $dataArray['rxFrames'] = $data->getRxFrames();
        }
        if ($data->isInitialized('wlanType') && null !== $data->getWlanType()) {
            $dataArray['wlanType'] = $data->getWlanType();
        }
        if ($data->isInitialized('osType') && null !== $data->getOsType()) {
            $dataArray['osType'] = $data->getOsType();
        }
        if ($data->isInitialized('deviceType') && null !== $data->getDeviceType()) {
            $dataArray['deviceType'] = $data->getDeviceType();
        }
        if ($data->isInitialized('osVendorType') && null !== $data->getOsVendorType()) {
            $dataArray['osVendorType'] = $data->getOsVendorType();
        }
        if ($data->isInitialized('modelName') && null !== $data->getModelName()) {
            $dataArray['modelName'] = $data->getModelName();
        }
        if ($data->isInitialized('rxBytes') && null !== $data->getRxBytes()) {
            $dataArray['rxBytes'] = $data->getRxBytes();
        }
        if ($data->isInitialized('ipAddress') && null !== $data->getIpAddress()) {
            $dataArray['ipAddress'] = $data->getIpAddress();
        }
        if ($data->isInitialized('sessionStartTime') && null !== $data->getSessionStartTime()) {
            $dataArray['sessionStartTime'] = $data->getSessionStartTime();
        }
        if ($data->isInitialized('apMac') && null !== $data->getApMac()) {
            $dataArray['apMac'] = $data->getApMac();
        }
        if ($data->isInitialized('userName') && null !== $data->getUserName()) {
            $dataArray['userName'] = $data->getUserName();
        }
        if ($data->isInitialized('userRoleId') && null !== $data->getUserRoleId()) {
            $dataArray['userRoleId'] = $data->getUserRoleId();
        }
        if ($data->isInitialized('userRoleName') && null !== $data->getUserRoleName()) {
            $dataArray['userRoleName'] = $data->getUserRoleName();
        }
        if ($data->isInitialized('txBytes') && null !== $data->getTxBytes()) {
            $dataArray['txBytes'] = $data->getTxBytes();
        }
        if ($data->isInitialized('authStatus') && null !== $data->getAuthStatus()) {
            $dataArray['authStatus'] = $data->getAuthStatus();
        }
        if ($data->isInitialized('apEthID') && null !== $data->getApEthID()) {
            $dataArray['apEthID'] = $data->getApEthID();
        }
        if ($data->isInitialized('vni') && null !== $data->getVni()) {
            $dataArray['vni'] = $data->getVni();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\WiredClientQueryCreateClientQuery::class => false];
    }
}