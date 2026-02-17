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
class ClientQueryCreateClientQueryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ClientQueryCreateClientQuery::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ClientQueryCreateClientQuery::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ClientQueryCreateClientQuery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('role', $data)) {
            $object->setRole($data['role']);
        }
        if (\array_key_exists('ipv6Address', $data)) {
            $object->setIpv6Address($data['ipv6Address']);
        }
        if (\array_key_exists('clientMac', $data)) {
            $object->setClientMac($data['clientMac']);
        }
        if (\array_key_exists('dataPlaneName', $data)) {
            $object->setDataPlaneName($data['dataPlaneName']);
        }
        if (\array_key_exists('channel', $data)) {
            $object->setChannel($data['channel']);
        }
        if (\array_key_exists('ssid', $data)) {
            $object->setSsid($data['ssid']);
        }
        if (\array_key_exists('encryptionMethod', $data)) {
            $object->setEncryptionMethod($data['encryptionMethod']);
        }
        if (\array_key_exists('apName', $data)) {
            $object->setApName($data['apName']);
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
        if (\array_key_exists('txDropDataFrames', $data)) {
            $object->setTxDropDataFrames($data['txDropDataFrames']);
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
        if (\array_key_exists('vni', $data)) {
            $object->setVni($data['vni']);
        }
        if (\array_key_exists('controlPlaneName', $data)) {
            $object->setControlPlaneName($data['controlPlaneName']);
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
        if (\array_key_exists('speedflex', $data)) {
            $object->setSpeedflex($data['speedflex']);
        }
        if (\array_key_exists('rssi', $data)) {
            $object->setRssi($data['rssi']);
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
        if (\array_key_exists('alerts', $data)) {
            $object->setAlerts($data['alerts']);
        }
        if (\array_key_exists('txBytes', $data)) {
            $object->setTxBytes($data['txBytes']);
        }
        if (\array_key_exists('snr', $data)) {
            $object->setSnr($data['snr']);
        }
        if (\array_key_exists('authMethod', $data)) {
            $object->setAuthMethod($data['authMethod']);
        }
        if (\array_key_exists('radioType', $data)) {
            $object->setRadioType($data['radioType']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('zoneVersion', $data)) {
            $object->setZoneVersion($data['zoneVersion']);
        }
        if (\array_key_exists('authStatus', $data)) {
            $object->setAuthStatus($data['authStatus']);
        }
        if (\array_key_exists('uplinkRate', $data)) {
            $object->setUplinkRate($data['uplinkRate']);
        }
        if (\array_key_exists('downlinkRate', $data)) {
            $object->setDownlinkRate($data['downlinkRate']);
        }
        if (\array_key_exists('txRatebps', $data)) {
            $object->setTxRatebps($data['txRatebps']);
        }
        if (\array_key_exists('zoneId', $data)) {
            $object->setZoneId($data['zoneId']);
        }
        if (\array_key_exists('bssid', $data)) {
            $object->setBssid($data['bssid']);
        }
        if (\array_key_exists('tcWithQuotaList', $data)) {
            $values = [];
            foreach ($data['tcWithQuotaList'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ClientQueryTcWithQuota::class, 'json', $context);
            }
            $object->setTcWithQuotaList($values);
        }
        if (\array_key_exists('cpeMac', $data)) {
            $object->setCpeMac($data['cpeMac']);
        }
        if (\array_key_exists('medianTxMCSRate', $data)) {
            $object->setMedianTxMCSRate($data['medianTxMCSRate']);
        }
        if (\array_key_exists('medianRxMCSRate', $data)) {
            $object->setMedianRxMCSRate($data['medianRxMCSRate']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('role') && null !== $data->getRole()) {
            $dataArray['role'] = $data->getRole();
        }
        if ($data->isInitialized('ipv6Address') && null !== $data->getIpv6Address()) {
            $dataArray['ipv6Address'] = $data->getIpv6Address();
        }
        if ($data->isInitialized('clientMac') && null !== $data->getClientMac()) {
            $dataArray['clientMac'] = $data->getClientMac();
        }
        if ($data->isInitialized('dataPlaneName') && null !== $data->getDataPlaneName()) {
            $dataArray['dataPlaneName'] = $data->getDataPlaneName();
        }
        if ($data->isInitialized('channel') && null !== $data->getChannel()) {
            $dataArray['channel'] = $data->getChannel();
        }
        if ($data->isInitialized('ssid') && null !== $data->getSsid()) {
            $dataArray['ssid'] = $data->getSsid();
        }
        if ($data->isInitialized('encryptionMethod') && null !== $data->getEncryptionMethod()) {
            $dataArray['encryptionMethod'] = $data->getEncryptionMethod();
        }
        if ($data->isInitialized('apName') && null !== $data->getApName()) {
            $dataArray['apName'] = $data->getApName();
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
        if ($data->isInitialized('txDropDataFrames') && null !== $data->getTxDropDataFrames()) {
            $dataArray['txDropDataFrames'] = $data->getTxDropDataFrames();
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
        if ($data->isInitialized('vni') && null !== $data->getVni()) {
            $dataArray['vni'] = $data->getVni();
        }
        if ($data->isInitialized('controlPlaneName') && null !== $data->getControlPlaneName()) {
            $dataArray['controlPlaneName'] = $data->getControlPlaneName();
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
        if ($data->isInitialized('speedflex') && null !== $data->getSpeedflex()) {
            $dataArray['speedflex'] = $data->getSpeedflex();
        }
        if ($data->isInitialized('rssi') && null !== $data->getRssi()) {
            $dataArray['rssi'] = $data->getRssi();
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
        if ($data->isInitialized('alerts') && null !== $data->getAlerts()) {
            $dataArray['alerts'] = $data->getAlerts();
        }
        if ($data->isInitialized('txBytes') && null !== $data->getTxBytes()) {
            $dataArray['txBytes'] = $data->getTxBytes();
        }
        if ($data->isInitialized('snr') && null !== $data->getSnr()) {
            $dataArray['snr'] = $data->getSnr();
        }
        if ($data->isInitialized('authMethod') && null !== $data->getAuthMethod()) {
            $dataArray['authMethod'] = $data->getAuthMethod();
        }
        if ($data->isInitialized('radioType') && null !== $data->getRadioType()) {
            $dataArray['radioType'] = $data->getRadioType();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('zoneVersion') && null !== $data->getZoneVersion()) {
            $dataArray['zoneVersion'] = $data->getZoneVersion();
        }
        if ($data->isInitialized('authStatus') && null !== $data->getAuthStatus()) {
            $dataArray['authStatus'] = $data->getAuthStatus();
        }
        if ($data->isInitialized('uplinkRate') && null !== $data->getUplinkRate()) {
            $dataArray['uplinkRate'] = $data->getUplinkRate();
        }
        if ($data->isInitialized('downlinkRate') && null !== $data->getDownlinkRate()) {
            $dataArray['downlinkRate'] = $data->getDownlinkRate();
        }
        if ($data->isInitialized('txRatebps') && null !== $data->getTxRatebps()) {
            $dataArray['txRatebps'] = $data->getTxRatebps();
        }
        if ($data->isInitialized('zoneId') && null !== $data->getZoneId()) {
            $dataArray['zoneId'] = $data->getZoneId();
        }
        if ($data->isInitialized('bssid') && null !== $data->getBssid()) {
            $dataArray['bssid'] = $data->getBssid();
        }
        if ($data->isInitialized('tcWithQuotaList') && null !== $data->getTcWithQuotaList()) {
            $values = [];
            foreach ($data->getTcWithQuotaList() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['tcWithQuotaList'] = $values;
        }
        if ($data->isInitialized('cpeMac') && null !== $data->getCpeMac()) {
            $dataArray['cpeMac'] = $data->getCpeMac();
        }
        if ($data->isInitialized('medianTxMCSRate') && null !== $data->getMedianTxMCSRate()) {
            $dataArray['medianTxMCSRate'] = $data->getMedianTxMCSRate();
        }
        if ($data->isInitialized('medianRxMCSRate') && null !== $data->getMedianRxMCSRate()) {
            $dataArray['medianRxMCSRate'] = $data->getMedianRxMCSRate();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ClientQueryCreateClientQuery::class => false];
    }
}