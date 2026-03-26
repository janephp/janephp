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
class ApQueryCreateApQueryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApQueryCreateApQuery::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApQueryCreateApQuery::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApQueryCreateApQuery();
        if (\array_key_exists('connectionFailure', $data) && \is_int($data['connectionFailure'])) {
            $data['connectionFailure'] = (double) $data['connectionFailure'];
        }
        if (\array_key_exists('configOverride', $data) && \is_int($data['configOverride'])) {
            $data['configOverride'] = (bool) $data['configOverride'];
        }
        if (\array_key_exists('enabledBonjourGateway', $data) && \is_int($data['enabledBonjourGateway'])) {
            $data['enabledBonjourGateway'] = (bool) $data['enabledBonjourGateway'];
        }
        if (\array_key_exists('isCriticalAp', $data) && \is_int($data['isCriticalAp'])) {
            $data['isCriticalAp'] = (bool) $data['isCriticalAp'];
        }
        if (\array_key_exists('cableModemSupported', $data) && \is_int($data['cableModemSupported'])) {
            $data['cableModemSupported'] = (bool) $data['cableModemSupported'];
        }
        if (\array_key_exists('cableModemResetSupported', $data) && \is_int($data['cableModemResetSupported'])) {
            $data['cableModemResetSupported'] = (bool) $data['cableModemResetSupported'];
        }
        if (\array_key_exists('isOverallHealthStatusFlagged', $data) && \is_int($data['isOverallHealthStatusFlagged'])) {
            $data['isOverallHealthStatusFlagged'] = (bool) $data['isOverallHealthStatusFlagged'];
        }
        if (\array_key_exists('isLatency24GFlagged', $data) && \is_int($data['isLatency24GFlagged'])) {
            $data['isLatency24GFlagged'] = (bool) $data['isLatency24GFlagged'];
        }
        if (\array_key_exists('isCapacity24GFlagged', $data) && \is_int($data['isCapacity24GFlagged'])) {
            $data['isCapacity24GFlagged'] = (bool) $data['isCapacity24GFlagged'];
        }
        if (\array_key_exists('isConnectionFailure24GFlagged', $data) && \is_int($data['isConnectionFailure24GFlagged'])) {
            $data['isConnectionFailure24GFlagged'] = (bool) $data['isConnectionFailure24GFlagged'];
        }
        if (\array_key_exists('isLatency50GFlagged', $data) && \is_int($data['isLatency50GFlagged'])) {
            $data['isLatency50GFlagged'] = (bool) $data['isLatency50GFlagged'];
        }
        if (\array_key_exists('isCapacity50GFlagged', $data) && \is_int($data['isCapacity50GFlagged'])) {
            $data['isCapacity50GFlagged'] = (bool) $data['isCapacity50GFlagged'];
        }
        if (\array_key_exists('isConnectionFailure50GFlagged', $data) && \is_int($data['isConnectionFailure50GFlagged'])) {
            $data['isConnectionFailure50GFlagged'] = (bool) $data['isConnectionFailure50GFlagged'];
        }
        if (\array_key_exists('isLatency6GFlagged', $data) && \is_int($data['isLatency6GFlagged'])) {
            $data['isLatency6GFlagged'] = (bool) $data['isLatency6GFlagged'];
        }
        if (\array_key_exists('isCapacity6GFlagged', $data) && \is_int($data['isCapacity6GFlagged'])) {
            $data['isCapacity6GFlagged'] = (bool) $data['isCapacity6GFlagged'];
        }
        if (\array_key_exists('isConnectionFailure6GFlagged', $data) && \is_int($data['isConnectionFailure6GFlagged'])) {
            $data['isConnectionFailure6GFlagged'] = (bool) $data['isConnectionFailure6GFlagged'];
        }
        if (\array_key_exists('isConnectionTotalCountFlagged', $data) && \is_int($data['isConnectionTotalCountFlagged'])) {
            $data['isConnectionTotalCountFlagged'] = (bool) $data['isConnectionTotalCountFlagged'];
        }
        if (\array_key_exists('isConnectionFailureFlagged', $data) && \is_int($data['isConnectionFailureFlagged'])) {
            $data['isConnectionFailureFlagged'] = (bool) $data['isConnectionFailureFlagged'];
        }
        if (\array_key_exists('isAirtimeUtilization24GFlagged', $data) && \is_int($data['isAirtimeUtilization24GFlagged'])) {
            $data['isAirtimeUtilization24GFlagged'] = (bool) $data['isAirtimeUtilization24GFlagged'];
        }
        if (\array_key_exists('isAirtimeUtilization50GFlagged', $data) && \is_int($data['isAirtimeUtilization50GFlagged'])) {
            $data['isAirtimeUtilization50GFlagged'] = (bool) $data['isAirtimeUtilization50GFlagged'];
        }
        if (\array_key_exists('isAirtimeUtilization6GFlagged', $data) && \is_int($data['isAirtimeUtilization6GFlagged'])) {
            $data['isAirtimeUtilization6GFlagged'] = (bool) $data['isAirtimeUtilization6GFlagged'];
        }
        if (\array_key_exists('supportFips', $data) && \is_int($data['supportFips'])) {
            $data['supportFips'] = (bool) $data['supportFips'];
        }
        if (\array_key_exists('fipsEnabled', $data) && \is_int($data['fipsEnabled'])) {
            $data['fipsEnabled'] = (bool) $data['fipsEnabled'];
        }
        if (\array_key_exists('monitoringEnabled', $data) && \is_int($data['monitoringEnabled'])) {
            $data['monitoringEnabled'] = (bool) $data['monitoringEnabled'];
        }
        if (\array_key_exists('isDual5gMode', $data) && \is_int($data['isDual5gMode'])) {
            $data['isDual5gMode'] = (bool) $data['isDual5gMode'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('registrationTime', $data)) {
            $object->setRegistrationTime($data['registrationTime']);
        }
        if (\array_key_exists('poePortStatus', $data)) {
            $object->setPoePortStatus($data['poePortStatus']);
        }
        if (\array_key_exists('indoorMapId', $data)) {
            $object->setIndoorMapId($data['indoorMapId']);
        }
        if (\array_key_exists('channel24G', $data)) {
            $object->setChannel24G($data['channel24G']);
        }
        if (\array_key_exists('channel24gValue', $data)) {
            $object->setChannel24gValue($data['channel24gValue']);
        }
        if (\array_key_exists('configOverride', $data)) {
            $object->setConfigOverride($data['configOverride']);
        }
        if (\array_key_exists('deviceName', $data)) {
            $object->setDeviceName($data['deviceName']);
        }
        if (\array_key_exists('enabledBonjourGateway', $data)) {
            $object->setEnabledBonjourGateway($data['enabledBonjourGateway']);
        }
        if (\array_key_exists('numClients24G', $data)) {
            $object->setNumClients24G($data['numClients24G']);
        }
        if (\array_key_exists('dataBladeName', $data)) {
            $object->setDataBladeName($data['dataBladeName']);
        }
        if (\array_key_exists('retry24G', $data)) {
            $object->setRetry24G($data['retry24G']);
        }
        if (\array_key_exists('airtime24G', $data)) {
            $object->setAirtime24G($data['airtime24G']);
        }
        if (\array_key_exists('noise5G', $data)) {
            $object->setNoise5G($data['noise5G']);
        }
        if (\array_key_exists('noise6G', $data)) {
            $object->setNoise6G($data['noise6G']);
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
        }
        if (\array_key_exists('numClients', $data)) {
            $object->setNumClients($data['numClients']);
        }
        if (\array_key_exists('capacity24G', $data)) {
            $object->setCapacity24G($data['capacity24G']);
        }
        if (\array_key_exists('firmwareVersion', $data)) {
            $object->setFirmwareVersion($data['firmwareVersion']);
        }
        if (\array_key_exists('provisionMethod', $data)) {
            $object->setProvisionMethod($data['provisionMethod']);
        }
        if (\array_key_exists('latency24G', $data)) {
            $object->setLatency24G($data['latency24G']);
        }
        if (\array_key_exists('retry5G', $data)) {
            $object->setRetry5G($data['retry5G']);
        }
        if (\array_key_exists('retry6G', $data)) {
            $object->setRetry6G($data['retry6G']);
        }
        if (\array_key_exists('ip', $data)) {
            $object->setIp($data['ip']);
        }
        if (\array_key_exists('apMac', $data)) {
            $object->setApMac($data['apMac']);
        }
        if (\array_key_exists('noise24G', $data)) {
            $object->setNoise24G($data['noise24G']);
        }
        if (\array_key_exists('lastSeen', $data)) {
            $object->setLastSeen($data['lastSeen']);
        }
        if (\array_key_exists('configurationStatus', $data)) {
            $object->setConfigurationStatus($data['configurationStatus']);
        }
        if (\array_key_exists('airtime5G', $data)) {
            $object->setAirtime5G($data['airtime5G']);
        }
        if (\array_key_exists('airtime6G', $data)) {
            $object->setAirtime6G($data['airtime6G']);
        }
        if (\array_key_exists('alerts', $data)) {
            $object->setAlerts($data['alerts']);
        }
        if (\array_key_exists('lbsStatus', $data)) {
            $object->setLbsStatus($data['lbsStatus']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('numClients5G', $data)) {
            $object->setNumClients5G($data['numClients5G']);
        }
        if (\array_key_exists('numClients6G', $data)) {
            $object->setNumClients6G($data['numClients6G']);
        }
        if (\array_key_exists('ipv6Address', $data)) {
            $object->setIpv6Address($data['ipv6Address']);
        }
        if (\array_key_exists('capacity50G', $data)) {
            $object->setCapacity50G($data['capacity50G']);
        }
        if (\array_key_exists('capacity6G', $data)) {
            $object->setCapacity6G($data['capacity6G']);
        }
        if (\array_key_exists('wlanGroup24Name', $data)) {
            $object->setWlanGroup24Name($data['wlanGroup24Name']);
        }
        if (\array_key_exists('connectionFailure', $data)) {
            $object->setConnectionFailure($data['connectionFailure']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('capacity', $data)) {
            $object->setCapacity($data['capacity']);
        }
        if (\array_key_exists('meshRole', $data)) {
            $object->setMeshRole($data['meshRole']);
        }
        if (\array_key_exists('channel5G', $data)) {
            $object->setChannel5G($data['channel5G']);
        }
        if (\array_key_exists('channel50gValue', $data)) {
            $object->setChannel50gValue($data['channel50gValue']);
        }
        if (\array_key_exists('channel6G', $data)) {
            $object->setChannel6G($data['channel6G']);
        }
        if (\array_key_exists('channel6gValue', $data)) {
            $object->setChannel6gValue($data['channel6gValue']);
        }
        if (\array_key_exists('managementVlan', $data)) {
            $object->setManagementVlan($data['managementVlan']);
        }
        if (\array_key_exists('wlanGroup6gName', $data)) {
            $object->setWlanGroup6gName($data['wlanGroup6gName']);
        }
        if (\array_key_exists('wlanGroup50Name', $data)) {
            $object->setWlanGroup50Name($data['wlanGroup50Name']);
        }
        if (\array_key_exists('wlanGroup24Id', $data)) {
            $object->setWlanGroup24Id($data['wlanGroup24Id']);
        }
        if (\array_key_exists('controlBladeName', $data)) {
            $object->setControlBladeName($data['controlBladeName']);
        }
        if (\array_key_exists('zoneName', $data)) {
            $object->setZoneName($data['zoneName']);
        }
        if (\array_key_exists('tx', $data)) {
            $object->setTx($data['tx']);
        }
        if (\array_key_exists('rx', $data)) {
            $object->setRx($data['rx']);
        }
        if (\array_key_exists('txRx', $data)) {
            $object->setTxRx($data['txRx']);
        }
        if (\array_key_exists('tx24G', $data)) {
            $object->setTx24G($data['tx24G']);
        }
        if (\array_key_exists('tx50G', $data)) {
            $object->setTx50G($data['tx50G']);
        }
        if (\array_key_exists('tx6G', $data)) {
            $object->setTx6G($data['tx6G']);
        }
        if (\array_key_exists('rx24G', $data)) {
            $object->setRx24G($data['rx24G']);
        }
        if (\array_key_exists('rx50G', $data)) {
            $object->setRx50G($data['rx50G']);
        }
        if (\array_key_exists('rx6G', $data)) {
            $object->setRx6G($data['rx6G']);
        }
        if (\array_key_exists('txRx24G', $data)) {
            $object->setTxRx24G($data['txRx24G']);
        }
        if (\array_key_exists('txRx50G', $data)) {
            $object->setTxRx50G($data['txRx50G']);
        }
        if (\array_key_exists('txRx6G', $data)) {
            $object->setTxRx6G($data['txRx6G']);
        }
        if (\array_key_exists('meshMode', $data)) {
            $object->setMeshMode($data['meshMode']);
        }
        if (\array_key_exists('extPort', $data)) {
            $object->setExtPort($data['extPort']);
        }
        if (\array_key_exists('administrativeState', $data)) {
            $object->setAdministrativeState($data['administrativeState']);
        }
        if (\array_key_exists('apGroupName', $data)) {
            $object->setApGroupName($data['apGroupName']);
        }
        if (\array_key_exists('latency50G', $data)) {
            $object->setLatency50G($data['latency50G']);
        }
        if (\array_key_exists('latency6G', $data)) {
            $object->setLatency6G($data['latency6G']);
        }
        if (\array_key_exists('indoorMapXy', $data)) {
            $object->setIndoorMapXy($this->denormalizer->denormalize($data['indoorMapXy'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApQueryCreateApQueryIndoorMapXy::class, 'json', $context));
        }
        if (\array_key_exists('apGroupId', $data)) {
            $object->setApGroupId($data['apGroupId']);
        }
        if (\array_key_exists('extIp', $data)) {
            $object->setExtIp($data['extIp']);
        }
        if (\array_key_exists('airtime', $data)) {
            $object->setAirtime($data['airtime']);
        }
        if (\array_key_exists('provisionStage', $data)) {
            $object->setProvisionStage($data['provisionStage']);
        }
        if (\array_key_exists('indoorMapName', $data)) {
            $object->setIndoorMapName($data['indoorMapName']);
        }
        if (\array_key_exists('indoorMapLocation', $data)) {
            $object->setIndoorMapLocation($data['indoorMapLocation']);
        }
        if (\array_key_exists('deviceGps', $data)) {
            $object->setDeviceGps($data['deviceGps']);
        }
        if (\array_key_exists('serial', $data)) {
            $object->setSerial($data['serial']);
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($data['location']);
        }
        if (\array_key_exists('wlanGroup50Id', $data)) {
            $object->setWlanGroup50Id($data['wlanGroup50Id']);
        }
        if (\array_key_exists('wlanGroup6gId', $data)) {
            $object->setWlanGroup6gId($data['wlanGroup6gId']);
        }
        if (\array_key_exists('registrationState', $data)) {
            $object->setRegistrationState($data['registrationState']);
        }
        if (\array_key_exists('zoneId', $data)) {
            $object->setZoneId($data['zoneId']);
        }
        if (\array_key_exists('zoneFirmwareVersion', $data)) {
            $object->setZoneFirmwareVersion($data['zoneFirmwareVersion']);
        }
        if (\array_key_exists('zoneAffinityProfileName', $data)) {
            $object->setZoneAffinityProfileName($data['zoneAffinityProfileName']);
        }
        if (\array_key_exists('connectionStatus', $data)) {
            $object->setConnectionStatus($data['connectionStatus']);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        if (\array_key_exists('domainName', $data)) {
            $object->setDomainName($data['domainName']);
        }
        if (\array_key_exists('partnerDomainId', $data)) {
            $object->setPartnerDomainId($data['partnerDomainId']);
        }
        if (\array_key_exists('dpIp', $data)) {
            $object->setDpIp($data['dpIp']);
        }
        if (\array_key_exists('controlBladeId', $data)) {
            $object->setControlBladeId($data['controlBladeId']);
        }
        if (\array_key_exists('isCriticalAp', $data)) {
            $object->setIsCriticalAp($data['isCriticalAp']);
        }
        if (\array_key_exists('crashDump', $data)) {
            $object->setCrashDump($data['crashDump']);
        }
        if (\array_key_exists('cableModemSupported', $data)) {
            $object->setCableModemSupported($data['cableModemSupported']);
        }
        if (\array_key_exists('cableModemResetSupported', $data)) {
            $object->setCableModemResetSupported($data['cableModemResetSupported']);
        }
        if (\array_key_exists('swapInMac', $data)) {
            $object->setSwapInMac($data['swapInMac']);
        }
        if (\array_key_exists('swapOutMac', $data)) {
            $object->setSwapOutMac($data['swapOutMac']);
        }
        if (\array_key_exists('packetCaptureState', $data)) {
            $object->setPacketCaptureState($data['packetCaptureState']);
        }
        if (\array_key_exists('isOverallHealthStatusFlagged', $data)) {
            $object->setIsOverallHealthStatusFlagged($data['isOverallHealthStatusFlagged']);
        }
        if (\array_key_exists('isLatency24GFlagged', $data)) {
            $object->setIsLatency24GFlagged($data['isLatency24GFlagged']);
        }
        if (\array_key_exists('isCapacity24GFlagged', $data)) {
            $object->setIsCapacity24GFlagged($data['isCapacity24GFlagged']);
        }
        if (\array_key_exists('isConnectionFailure24GFlagged', $data)) {
            $object->setIsConnectionFailure24GFlagged($data['isConnectionFailure24GFlagged']);
        }
        if (\array_key_exists('isLatency50GFlagged', $data)) {
            $object->setIsLatency50GFlagged($data['isLatency50GFlagged']);
        }
        if (\array_key_exists('isCapacity50GFlagged', $data)) {
            $object->setIsCapacity50GFlagged($data['isCapacity50GFlagged']);
        }
        if (\array_key_exists('isConnectionFailure50GFlagged', $data)) {
            $object->setIsConnectionFailure50GFlagged($data['isConnectionFailure50GFlagged']);
        }
        if (\array_key_exists('isLatency6GFlagged', $data)) {
            $object->setIsLatency6GFlagged($data['isLatency6GFlagged']);
        }
        if (\array_key_exists('isCapacity6GFlagged', $data)) {
            $object->setIsCapacity6GFlagged($data['isCapacity6GFlagged']);
        }
        if (\array_key_exists('isConnectionFailure6GFlagged', $data)) {
            $object->setIsConnectionFailure6GFlagged($data['isConnectionFailure6GFlagged']);
        }
        if (\array_key_exists('isConnectionTotalCountFlagged', $data)) {
            $object->setIsConnectionTotalCountFlagged($data['isConnectionTotalCountFlagged']);
        }
        if (\array_key_exists('isConnectionFailureFlagged', $data)) {
            $object->setIsConnectionFailureFlagged($data['isConnectionFailureFlagged']);
        }
        if (\array_key_exists('isAirtimeUtilization24GFlagged', $data)) {
            $object->setIsAirtimeUtilization24GFlagged($data['isAirtimeUtilization24GFlagged']);
        }
        if (\array_key_exists('isAirtimeUtilization50GFlagged', $data)) {
            $object->setIsAirtimeUtilization50GFlagged($data['isAirtimeUtilization50GFlagged']);
        }
        if (\array_key_exists('isAirtimeUtilization6GFlagged', $data)) {
            $object->setIsAirtimeUtilization6GFlagged($data['isAirtimeUtilization6GFlagged']);
        }
        if (\array_key_exists('eirp24G', $data)) {
            $object->setEirp24G($data['eirp24G']);
        }
        if (\array_key_exists('eirp50G', $data)) {
            $object->setEirp50G($data['eirp50G']);
        }
        if (\array_key_exists('eirp6G', $data)) {
            $object->setEirp6G($data['eirp6G']);
        }
        if (\array_key_exists('supportFips', $data)) {
            $object->setSupportFips($data['supportFips']);
        }
        if (\array_key_exists('fipsEnabled', $data)) {
            $object->setFipsEnabled($data['fipsEnabled']);
        }
        if (\array_key_exists('uptime', $data)) {
            $object->setUptime($data['uptime']);
        }
        if (\array_key_exists('ipsecSessionTime', $data)) {
            $object->setIpsecSessionTime($data['ipsecSessionTime']);
        }
        if (\array_key_exists('ipsecTxPkts', $data)) {
            $object->setIpsecTxPkts($data['ipsecTxPkts']);
        }
        if (\array_key_exists('ipsecRxPkts', $data)) {
            $object->setIpsecRxPkts($data['ipsecRxPkts']);
        }
        if (\array_key_exists('ipsecTxBytes', $data)) {
            $object->setIpsecTxBytes($data['ipsecTxBytes']);
        }
        if (\array_key_exists('ipsecRxBytes', $data)) {
            $object->setIpsecRxBytes($data['ipsecRxBytes']);
        }
        if (\array_key_exists('ipsecTxDropPkts', $data)) {
            $object->setIpsecTxDropPkts($data['ipsecTxDropPkts']);
        }
        if (\array_key_exists('ipsecRxDropPkts', $data)) {
            $object->setIpsecRxDropPkts($data['ipsecRxDropPkts']);
        }
        if (\array_key_exists('ipsecTxIdleTime', $data)) {
            $object->setIpsecTxIdleTime($data['ipsecTxIdleTime']);
        }
        if (\array_key_exists('ipsecRxIdleTime', $data)) {
            $object->setIpsecRxIdleTime($data['ipsecRxIdleTime']);
        }
        if (\array_key_exists('ipType', $data)) {
            $object->setIpType($data['ipType']);
        }
        if (\array_key_exists('ipv6Type', $data)) {
            $object->setIpv6Type($data['ipv6Type']);
        }
        if (\array_key_exists('cellularWanInterface', $data)) {
            $object->setCellularWanInterface($data['cellularWanInterface']);
        }
        if (\array_key_exists('cellularConnectionStatus', $data)) {
            $object->setCellularConnectionStatus($data['cellularConnectionStatus']);
        }
        if (\array_key_exists('cellularSignalStrength', $data)) {
            $object->setCellularSignalStrength($data['cellularSignalStrength']);
        }
        if (\array_key_exists('cellularIMSISIM0', $data)) {
            $object->setCellularIMSISIM0($data['cellularIMSISIM0']);
        }
        if (\array_key_exists('cellularIMSISIM1', $data)) {
            $object->setCellularIMSISIM1($data['cellularIMSISIM1']);
        }
        if (\array_key_exists('cellularICCIDSIM0', $data)) {
            $object->setCellularICCIDSIM0($data['cellularICCIDSIM0']);
        }
        if (\array_key_exists('cellularICCIDSIM1', $data)) {
            $object->setCellularICCIDSIM1($data['cellularICCIDSIM1']);
        }
        if (\array_key_exists('cellularIsSIM0Present', $data)) {
            $object->setCellularIsSIM0Present($data['cellularIsSIM0Present']);
        }
        if (\array_key_exists('cellularIsSIM1Present', $data)) {
            $object->setCellularIsSIM1Present($data['cellularIsSIM1Present']);
        }
        if (\array_key_exists('cellularTxBytesSIM0', $data)) {
            $object->setCellularTxBytesSIM0($data['cellularTxBytesSIM0']);
        }
        if (\array_key_exists('cellularTxBytesSIM1', $data)) {
            $object->setCellularTxBytesSIM1($data['cellularTxBytesSIM1']);
        }
        if (\array_key_exists('cellularRxBytesSIM0', $data)) {
            $object->setCellularRxBytesSIM0($data['cellularRxBytesSIM0']);
        }
        if (\array_key_exists('cellularRxBytesSIM1', $data)) {
            $object->setCellularRxBytesSIM1($data['cellularRxBytesSIM1']);
        }
        if (\array_key_exists('cellularActiveSim', $data)) {
            $object->setCellularActiveSim($data['cellularActiveSim']);
        }
        if (\array_key_exists('cellularIPaddress', $data)) {
            $object->setCellularIPaddress($data['cellularIPaddress']);
        }
        if (\array_key_exists('cellularSubnetMask', $data)) {
            $object->setCellularSubnetMask($data['cellularSubnetMask']);
        }
        if (\array_key_exists('cellularDefaultGateway', $data)) {
            $object->setCellularDefaultGateway($data['cellularDefaultGateway']);
        }
        if (\array_key_exists('cellularOperator', $data)) {
            $object->setCellularOperator($data['cellularOperator']);
        }
        if (\array_key_exists('cellular3G4GChannel', $data)) {
            $object->setCellular3G4GChannel($data['cellular3G4GChannel']);
        }
        if (\array_key_exists('cellularCountry', $data)) {
            $object->setCellularCountry($data['cellularCountry']);
        }
        if (\array_key_exists('cellularRadioUptime', $data)) {
            $object->setCellularRadioUptime($data['cellularRadioUptime']);
        }
        if (\array_key_exists('cellularGpsHistory', $data)) {
            $values = [];
            foreach ($data['cellularGpsHistory'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ApQueryCreateApQueryCellularGpsHistoryItem::class, 'json', $context);
            }
            $object->setCellularGpsHistory($values);
        }
        if (\array_key_exists('medianTxRadioMCSRate24G', $data)) {
            $object->setMedianTxRadioMCSRate24G($data['medianTxRadioMCSRate24G']);
        }
        if (\array_key_exists('medianTxRadioMCSRate50G', $data)) {
            $object->setMedianTxRadioMCSRate50G($data['medianTxRadioMCSRate50G']);
        }
        if (\array_key_exists('medianTxRadioMCSRate6G', $data)) {
            $object->setMedianTxRadioMCSRate6G($data['medianTxRadioMCSRate6G']);
        }
        if (\array_key_exists('medianRxRadioMCSRate24G', $data)) {
            $object->setMedianRxRadioMCSRate24G($data['medianRxRadioMCSRate24G']);
        }
        if (\array_key_exists('medianRxRadioMCSRate50G', $data)) {
            $object->setMedianRxRadioMCSRate50G($data['medianRxRadioMCSRate50G']);
        }
        if (\array_key_exists('medianRxRadioMCSRate6G', $data)) {
            $object->setMedianRxRadioMCSRate6G($data['medianRxRadioMCSRate6G']);
        }
        if (\array_key_exists('monitoringEnabled', $data)) {
            $object->setMonitoringEnabled($data['monitoringEnabled']);
        }
        if (\array_key_exists('txPowerOffset24G', $data)) {
            $object->setTxPowerOffset24G($data['txPowerOffset24G']);
        }
        if (\array_key_exists('txPowerOffset5G', $data)) {
            $object->setTxPowerOffset5G($data['txPowerOffset5G']);
        }
        if (\array_key_exists('txPowerOffset6G', $data)) {
            $object->setTxPowerOffset6G($data['txPowerOffset6G']);
        }
        if (\array_key_exists('rxDesense24G', $data)) {
            $object->setRxDesense24G($data['rxDesense24G']);
        }
        if (\array_key_exists('rxDesense5G', $data)) {
            $object->setRxDesense5G($data['rxDesense5G']);
        }
        if (\array_key_exists('rxDesense6G', $data)) {
            $object->setRxDesense6G($data['rxDesense6G']);
        }
        if (\array_key_exists('cumulativeTx24G', $data)) {
            $object->setCumulativeTx24G($data['cumulativeTx24G']);
        }
        if (\array_key_exists('cumulativeRx24G', $data)) {
            $object->setCumulativeRx24G($data['cumulativeRx24G']);
        }
        if (\array_key_exists('cumulativeTxRx24G', $data)) {
            $object->setCumulativeTxRx24G($data['cumulativeTxRx24G']);
        }
        if (\array_key_exists('cumulativeTx5G', $data)) {
            $object->setCumulativeTx5G($data['cumulativeTx5G']);
        }
        if (\array_key_exists('cumulativeRx5G', $data)) {
            $object->setCumulativeRx5G($data['cumulativeRx5G']);
        }
        if (\array_key_exists('cumulativeTxRx5G', $data)) {
            $object->setCumulativeTxRx5G($data['cumulativeTxRx5G']);
        }
        if (\array_key_exists('cumulativeTx6G', $data)) {
            $object->setCumulativeTx6G($data['cumulativeTx6G']);
        }
        if (\array_key_exists('cumulativeRx6G', $data)) {
            $object->setCumulativeRx6G($data['cumulativeRx6G']);
        }
        if (\array_key_exists('cumulativeTxRx6G', $data)) {
            $object->setCumulativeTxRx6G($data['cumulativeTxRx6G']);
        }
        if (\array_key_exists('isDual5gMode', $data)) {
            $object->setIsDual5gMode($data['isDual5gMode']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('registrationTime') && null !== $data->getRegistrationTime()) {
            $dataArray['registrationTime'] = $data->getRegistrationTime();
        }
        if ($data->isInitialized('poePortStatus') && null !== $data->getPoePortStatus()) {
            $dataArray['poePortStatus'] = $data->getPoePortStatus();
        }
        if ($data->isInitialized('indoorMapId') && null !== $data->getIndoorMapId()) {
            $dataArray['indoorMapId'] = $data->getIndoorMapId();
        }
        if ($data->isInitialized('channel24G') && null !== $data->getChannel24G()) {
            $dataArray['channel24G'] = $data->getChannel24G();
        }
        if ($data->isInitialized('channel24gValue') && null !== $data->getChannel24gValue()) {
            $dataArray['channel24gValue'] = $data->getChannel24gValue();
        }
        if ($data->isInitialized('configOverride') && null !== $data->getConfigOverride()) {
            $dataArray['configOverride'] = $data->getConfigOverride();
        }
        if ($data->isInitialized('deviceName') && null !== $data->getDeviceName()) {
            $dataArray['deviceName'] = $data->getDeviceName();
        }
        if ($data->isInitialized('enabledBonjourGateway') && null !== $data->getEnabledBonjourGateway()) {
            $dataArray['enabledBonjourGateway'] = $data->getEnabledBonjourGateway();
        }
        if ($data->isInitialized('numClients24G') && null !== $data->getNumClients24G()) {
            $dataArray['numClients24G'] = $data->getNumClients24G();
        }
        if ($data->isInitialized('dataBladeName') && null !== $data->getDataBladeName()) {
            $dataArray['dataBladeName'] = $data->getDataBladeName();
        }
        if ($data->isInitialized('retry24G') && null !== $data->getRetry24G()) {
            $dataArray['retry24G'] = $data->getRetry24G();
        }
        if ($data->isInitialized('airtime24G') && null !== $data->getAirtime24G()) {
            $dataArray['airtime24G'] = $data->getAirtime24G();
        }
        if ($data->isInitialized('noise5G') && null !== $data->getNoise5G()) {
            $dataArray['noise5G'] = $data->getNoise5G();
        }
        if ($data->isInitialized('noise6G') && null !== $data->getNoise6G()) {
            $dataArray['noise6G'] = $data->getNoise6G();
        }
        if ($data->isInitialized('model') && null !== $data->getModel()) {
            $dataArray['model'] = $data->getModel();
        }
        if ($data->isInitialized('numClients') && null !== $data->getNumClients()) {
            $dataArray['numClients'] = $data->getNumClients();
        }
        if ($data->isInitialized('capacity24G') && null !== $data->getCapacity24G()) {
            $dataArray['capacity24G'] = $data->getCapacity24G();
        }
        if ($data->isInitialized('firmwareVersion') && null !== $data->getFirmwareVersion()) {
            $dataArray['firmwareVersion'] = $data->getFirmwareVersion();
        }
        if ($data->isInitialized('provisionMethod') && null !== $data->getProvisionMethod()) {
            $dataArray['provisionMethod'] = $data->getProvisionMethod();
        }
        if ($data->isInitialized('latency24G') && null !== $data->getLatency24G()) {
            $dataArray['latency24G'] = $data->getLatency24G();
        }
        if ($data->isInitialized('retry5G') && null !== $data->getRetry5G()) {
            $dataArray['retry5G'] = $data->getRetry5G();
        }
        if ($data->isInitialized('retry6G') && null !== $data->getRetry6G()) {
            $dataArray['retry6G'] = $data->getRetry6G();
        }
        if ($data->isInitialized('ip') && null !== $data->getIp()) {
            $dataArray['ip'] = $data->getIp();
        }
        if ($data->isInitialized('apMac') && null !== $data->getApMac()) {
            $dataArray['apMac'] = $data->getApMac();
        }
        if ($data->isInitialized('noise24G') && null !== $data->getNoise24G()) {
            $dataArray['noise24G'] = $data->getNoise24G();
        }
        if ($data->isInitialized('lastSeen') && null !== $data->getLastSeen()) {
            $dataArray['lastSeen'] = $data->getLastSeen();
        }
        if ($data->isInitialized('configurationStatus') && null !== $data->getConfigurationStatus()) {
            $dataArray['configurationStatus'] = $data->getConfigurationStatus();
        }
        if ($data->isInitialized('airtime5G') && null !== $data->getAirtime5G()) {
            $dataArray['airtime5G'] = $data->getAirtime5G();
        }
        if ($data->isInitialized('airtime6G') && null !== $data->getAirtime6G()) {
            $dataArray['airtime6G'] = $data->getAirtime6G();
        }
        if ($data->isInitialized('alerts') && null !== $data->getAlerts()) {
            $dataArray['alerts'] = $data->getAlerts();
        }
        if ($data->isInitialized('lbsStatus') && null !== $data->getLbsStatus()) {
            $dataArray['lbsStatus'] = $data->getLbsStatus();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('numClients5G') && null !== $data->getNumClients5G()) {
            $dataArray['numClients5G'] = $data->getNumClients5G();
        }
        if ($data->isInitialized('numClients6G') && null !== $data->getNumClients6G()) {
            $dataArray['numClients6G'] = $data->getNumClients6G();
        }
        if ($data->isInitialized('ipv6Address') && null !== $data->getIpv6Address()) {
            $dataArray['ipv6Address'] = $data->getIpv6Address();
        }
        if ($data->isInitialized('capacity50G') && null !== $data->getCapacity50G()) {
            $dataArray['capacity50G'] = $data->getCapacity50G();
        }
        if ($data->isInitialized('capacity6G') && null !== $data->getCapacity6G()) {
            $dataArray['capacity6G'] = $data->getCapacity6G();
        }
        if ($data->isInitialized('wlanGroup24Name') && null !== $data->getWlanGroup24Name()) {
            $dataArray['wlanGroup24Name'] = $data->getWlanGroup24Name();
        }
        if ($data->isInitialized('connectionFailure') && null !== $data->getConnectionFailure()) {
            $dataArray['connectionFailure'] = $data->getConnectionFailure();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('capacity') && null !== $data->getCapacity()) {
            $dataArray['capacity'] = $data->getCapacity();
        }
        if ($data->isInitialized('meshRole') && null !== $data->getMeshRole()) {
            $dataArray['meshRole'] = $data->getMeshRole();
        }
        if ($data->isInitialized('channel5G') && null !== $data->getChannel5G()) {
            $dataArray['channel5G'] = $data->getChannel5G();
        }
        if ($data->isInitialized('channel50gValue') && null !== $data->getChannel50gValue()) {
            $dataArray['channel50gValue'] = $data->getChannel50gValue();
        }
        if ($data->isInitialized('channel6G') && null !== $data->getChannel6G()) {
            $dataArray['channel6G'] = $data->getChannel6G();
        }
        if ($data->isInitialized('channel6gValue') && null !== $data->getChannel6gValue()) {
            $dataArray['channel6gValue'] = $data->getChannel6gValue();
        }
        if ($data->isInitialized('managementVlan') && null !== $data->getManagementVlan()) {
            $dataArray['managementVlan'] = $data->getManagementVlan();
        }
        if ($data->isInitialized('wlanGroup6gName') && null !== $data->getWlanGroup6gName()) {
            $dataArray['wlanGroup6gName'] = $data->getWlanGroup6gName();
        }
        if ($data->isInitialized('wlanGroup50Name') && null !== $data->getWlanGroup50Name()) {
            $dataArray['wlanGroup50Name'] = $data->getWlanGroup50Name();
        }
        if ($data->isInitialized('wlanGroup24Id') && null !== $data->getWlanGroup24Id()) {
            $dataArray['wlanGroup24Id'] = $data->getWlanGroup24Id();
        }
        if ($data->isInitialized('controlBladeName') && null !== $data->getControlBladeName()) {
            $dataArray['controlBladeName'] = $data->getControlBladeName();
        }
        if ($data->isInitialized('zoneName') && null !== $data->getZoneName()) {
            $dataArray['zoneName'] = $data->getZoneName();
        }
        if ($data->isInitialized('tx') && null !== $data->getTx()) {
            $dataArray['tx'] = $data->getTx();
        }
        if ($data->isInitialized('rx') && null !== $data->getRx()) {
            $dataArray['rx'] = $data->getRx();
        }
        if ($data->isInitialized('txRx') && null !== $data->getTxRx()) {
            $dataArray['txRx'] = $data->getTxRx();
        }
        if ($data->isInitialized('tx24G') && null !== $data->getTx24G()) {
            $dataArray['tx24G'] = $data->getTx24G();
        }
        if ($data->isInitialized('tx50G') && null !== $data->getTx50G()) {
            $dataArray['tx50G'] = $data->getTx50G();
        }
        if ($data->isInitialized('tx6G') && null !== $data->getTx6G()) {
            $dataArray['tx6G'] = $data->getTx6G();
        }
        if ($data->isInitialized('rx24G') && null !== $data->getRx24G()) {
            $dataArray['rx24G'] = $data->getRx24G();
        }
        if ($data->isInitialized('rx50G') && null !== $data->getRx50G()) {
            $dataArray['rx50G'] = $data->getRx50G();
        }
        if ($data->isInitialized('rx6G') && null !== $data->getRx6G()) {
            $dataArray['rx6G'] = $data->getRx6G();
        }
        if ($data->isInitialized('txRx24G') && null !== $data->getTxRx24G()) {
            $dataArray['txRx24G'] = $data->getTxRx24G();
        }
        if ($data->isInitialized('txRx50G') && null !== $data->getTxRx50G()) {
            $dataArray['txRx50G'] = $data->getTxRx50G();
        }
        if ($data->isInitialized('txRx6G') && null !== $data->getTxRx6G()) {
            $dataArray['txRx6G'] = $data->getTxRx6G();
        }
        if ($data->isInitialized('meshMode') && null !== $data->getMeshMode()) {
            $dataArray['meshMode'] = $data->getMeshMode();
        }
        if ($data->isInitialized('extPort') && null !== $data->getExtPort()) {
            $dataArray['extPort'] = $data->getExtPort();
        }
        if ($data->isInitialized('administrativeState') && null !== $data->getAdministrativeState()) {
            $dataArray['administrativeState'] = $data->getAdministrativeState();
        }
        if ($data->isInitialized('apGroupName') && null !== $data->getApGroupName()) {
            $dataArray['apGroupName'] = $data->getApGroupName();
        }
        if ($data->isInitialized('latency50G') && null !== $data->getLatency50G()) {
            $dataArray['latency50G'] = $data->getLatency50G();
        }
        if ($data->isInitialized('latency6G') && null !== $data->getLatency6G()) {
            $dataArray['latency6G'] = $data->getLatency6G();
        }
        if ($data->isInitialized('indoorMapXy') && null !== $data->getIndoorMapXy()) {
            $dataArray['indoorMapXy'] = $this->normalizer->normalize($data->getIndoorMapXy(), 'json', $context);
        }
        if ($data->isInitialized('apGroupId') && null !== $data->getApGroupId()) {
            $dataArray['apGroupId'] = $data->getApGroupId();
        }
        if ($data->isInitialized('extIp') && null !== $data->getExtIp()) {
            $dataArray['extIp'] = $data->getExtIp();
        }
        if ($data->isInitialized('airtime') && null !== $data->getAirtime()) {
            $dataArray['airtime'] = $data->getAirtime();
        }
        if ($data->isInitialized('provisionStage') && null !== $data->getProvisionStage()) {
            $dataArray['provisionStage'] = $data->getProvisionStage();
        }
        if ($data->isInitialized('indoorMapName') && null !== $data->getIndoorMapName()) {
            $dataArray['indoorMapName'] = $data->getIndoorMapName();
        }
        if ($data->isInitialized('indoorMapLocation') && null !== $data->getIndoorMapLocation()) {
            $dataArray['indoorMapLocation'] = $data->getIndoorMapLocation();
        }
        if ($data->isInitialized('deviceGps') && null !== $data->getDeviceGps()) {
            $dataArray['deviceGps'] = $data->getDeviceGps();
        }
        if ($data->isInitialized('serial') && null !== $data->getSerial()) {
            $dataArray['serial'] = $data->getSerial();
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $data->getLocation();
        }
        if ($data->isInitialized('wlanGroup50Id') && null !== $data->getWlanGroup50Id()) {
            $dataArray['wlanGroup50Id'] = $data->getWlanGroup50Id();
        }
        if ($data->isInitialized('wlanGroup6gId') && null !== $data->getWlanGroup6gId()) {
            $dataArray['wlanGroup6gId'] = $data->getWlanGroup6gId();
        }
        if ($data->isInitialized('registrationState') && null !== $data->getRegistrationState()) {
            $dataArray['registrationState'] = $data->getRegistrationState();
        }
        if ($data->isInitialized('zoneId') && null !== $data->getZoneId()) {
            $dataArray['zoneId'] = $data->getZoneId();
        }
        if ($data->isInitialized('zoneFirmwareVersion') && null !== $data->getZoneFirmwareVersion()) {
            $dataArray['zoneFirmwareVersion'] = $data->getZoneFirmwareVersion();
        }
        if ($data->isInitialized('zoneAffinityProfileName') && null !== $data->getZoneAffinityProfileName()) {
            $dataArray['zoneAffinityProfileName'] = $data->getZoneAffinityProfileName();
        }
        if ($data->isInitialized('connectionStatus') && null !== $data->getConnectionStatus()) {
            $dataArray['connectionStatus'] = $data->getConnectionStatus();
        }
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        if ($data->isInitialized('domainName') && null !== $data->getDomainName()) {
            $dataArray['domainName'] = $data->getDomainName();
        }
        if ($data->isInitialized('partnerDomainId') && null !== $data->getPartnerDomainId()) {
            $dataArray['partnerDomainId'] = $data->getPartnerDomainId();
        }
        if ($data->isInitialized('dpIp') && null !== $data->getDpIp()) {
            $dataArray['dpIp'] = $data->getDpIp();
        }
        if ($data->isInitialized('controlBladeId') && null !== $data->getControlBladeId()) {
            $dataArray['controlBladeId'] = $data->getControlBladeId();
        }
        if ($data->isInitialized('isCriticalAp') && null !== $data->getIsCriticalAp()) {
            $dataArray['isCriticalAp'] = $data->getIsCriticalAp();
        }
        if ($data->isInitialized('crashDump') && null !== $data->getCrashDump()) {
            $dataArray['crashDump'] = $data->getCrashDump();
        }
        if ($data->isInitialized('cableModemSupported') && null !== $data->getCableModemSupported()) {
            $dataArray['cableModemSupported'] = $data->getCableModemSupported();
        }
        if ($data->isInitialized('cableModemResetSupported') && null !== $data->getCableModemResetSupported()) {
            $dataArray['cableModemResetSupported'] = $data->getCableModemResetSupported();
        }
        if ($data->isInitialized('swapInMac') && null !== $data->getSwapInMac()) {
            $dataArray['swapInMac'] = $data->getSwapInMac();
        }
        if ($data->isInitialized('swapOutMac') && null !== $data->getSwapOutMac()) {
            $dataArray['swapOutMac'] = $data->getSwapOutMac();
        }
        if ($data->isInitialized('packetCaptureState') && null !== $data->getPacketCaptureState()) {
            $dataArray['packetCaptureState'] = $data->getPacketCaptureState();
        }
        if ($data->isInitialized('isOverallHealthStatusFlagged') && null !== $data->getIsOverallHealthStatusFlagged()) {
            $dataArray['isOverallHealthStatusFlagged'] = $data->getIsOverallHealthStatusFlagged();
        }
        if ($data->isInitialized('isLatency24GFlagged') && null !== $data->getIsLatency24GFlagged()) {
            $dataArray['isLatency24GFlagged'] = $data->getIsLatency24GFlagged();
        }
        if ($data->isInitialized('isCapacity24GFlagged') && null !== $data->getIsCapacity24GFlagged()) {
            $dataArray['isCapacity24GFlagged'] = $data->getIsCapacity24GFlagged();
        }
        if ($data->isInitialized('isConnectionFailure24GFlagged') && null !== $data->getIsConnectionFailure24GFlagged()) {
            $dataArray['isConnectionFailure24GFlagged'] = $data->getIsConnectionFailure24GFlagged();
        }
        if ($data->isInitialized('isLatency50GFlagged') && null !== $data->getIsLatency50GFlagged()) {
            $dataArray['isLatency50GFlagged'] = $data->getIsLatency50GFlagged();
        }
        if ($data->isInitialized('isCapacity50GFlagged') && null !== $data->getIsCapacity50GFlagged()) {
            $dataArray['isCapacity50GFlagged'] = $data->getIsCapacity50GFlagged();
        }
        if ($data->isInitialized('isConnectionFailure50GFlagged') && null !== $data->getIsConnectionFailure50GFlagged()) {
            $dataArray['isConnectionFailure50GFlagged'] = $data->getIsConnectionFailure50GFlagged();
        }
        if ($data->isInitialized('isLatency6GFlagged') && null !== $data->getIsLatency6GFlagged()) {
            $dataArray['isLatency6GFlagged'] = $data->getIsLatency6GFlagged();
        }
        if ($data->isInitialized('isCapacity6GFlagged') && null !== $data->getIsCapacity6GFlagged()) {
            $dataArray['isCapacity6GFlagged'] = $data->getIsCapacity6GFlagged();
        }
        if ($data->isInitialized('isConnectionFailure6GFlagged') && null !== $data->getIsConnectionFailure6GFlagged()) {
            $dataArray['isConnectionFailure6GFlagged'] = $data->getIsConnectionFailure6GFlagged();
        }
        if ($data->isInitialized('isConnectionTotalCountFlagged') && null !== $data->getIsConnectionTotalCountFlagged()) {
            $dataArray['isConnectionTotalCountFlagged'] = $data->getIsConnectionTotalCountFlagged();
        }
        if ($data->isInitialized('isConnectionFailureFlagged') && null !== $data->getIsConnectionFailureFlagged()) {
            $dataArray['isConnectionFailureFlagged'] = $data->getIsConnectionFailureFlagged();
        }
        if ($data->isInitialized('isAirtimeUtilization24GFlagged') && null !== $data->getIsAirtimeUtilization24GFlagged()) {
            $dataArray['isAirtimeUtilization24GFlagged'] = $data->getIsAirtimeUtilization24GFlagged();
        }
        if ($data->isInitialized('isAirtimeUtilization50GFlagged') && null !== $data->getIsAirtimeUtilization50GFlagged()) {
            $dataArray['isAirtimeUtilization50GFlagged'] = $data->getIsAirtimeUtilization50GFlagged();
        }
        if ($data->isInitialized('isAirtimeUtilization6GFlagged') && null !== $data->getIsAirtimeUtilization6GFlagged()) {
            $dataArray['isAirtimeUtilization6GFlagged'] = $data->getIsAirtimeUtilization6GFlagged();
        }
        if ($data->isInitialized('eirp24G') && null !== $data->getEirp24G()) {
            $dataArray['eirp24G'] = $data->getEirp24G();
        }
        if ($data->isInitialized('eirp50G') && null !== $data->getEirp50G()) {
            $dataArray['eirp50G'] = $data->getEirp50G();
        }
        if ($data->isInitialized('eirp6G') && null !== $data->getEirp6G()) {
            $dataArray['eirp6G'] = $data->getEirp6G();
        }
        if ($data->isInitialized('supportFips') && null !== $data->getSupportFips()) {
            $dataArray['supportFips'] = $data->getSupportFips();
        }
        if ($data->isInitialized('fipsEnabled') && null !== $data->getFipsEnabled()) {
            $dataArray['fipsEnabled'] = $data->getFipsEnabled();
        }
        if ($data->isInitialized('uptime') && null !== $data->getUptime()) {
            $dataArray['uptime'] = $data->getUptime();
        }
        if ($data->isInitialized('ipsecSessionTime') && null !== $data->getIpsecSessionTime()) {
            $dataArray['ipsecSessionTime'] = $data->getIpsecSessionTime();
        }
        if ($data->isInitialized('ipsecTxPkts') && null !== $data->getIpsecTxPkts()) {
            $dataArray['ipsecTxPkts'] = $data->getIpsecTxPkts();
        }
        if ($data->isInitialized('ipsecRxPkts') && null !== $data->getIpsecRxPkts()) {
            $dataArray['ipsecRxPkts'] = $data->getIpsecRxPkts();
        }
        if ($data->isInitialized('ipsecTxBytes') && null !== $data->getIpsecTxBytes()) {
            $dataArray['ipsecTxBytes'] = $data->getIpsecTxBytes();
        }
        if ($data->isInitialized('ipsecRxBytes') && null !== $data->getIpsecRxBytes()) {
            $dataArray['ipsecRxBytes'] = $data->getIpsecRxBytes();
        }
        if ($data->isInitialized('ipsecTxDropPkts') && null !== $data->getIpsecTxDropPkts()) {
            $dataArray['ipsecTxDropPkts'] = $data->getIpsecTxDropPkts();
        }
        if ($data->isInitialized('ipsecRxDropPkts') && null !== $data->getIpsecRxDropPkts()) {
            $dataArray['ipsecRxDropPkts'] = $data->getIpsecRxDropPkts();
        }
        if ($data->isInitialized('ipsecTxIdleTime') && null !== $data->getIpsecTxIdleTime()) {
            $dataArray['ipsecTxIdleTime'] = $data->getIpsecTxIdleTime();
        }
        if ($data->isInitialized('ipsecRxIdleTime') && null !== $data->getIpsecRxIdleTime()) {
            $dataArray['ipsecRxIdleTime'] = $data->getIpsecRxIdleTime();
        }
        if ($data->isInitialized('ipType') && null !== $data->getIpType()) {
            $dataArray['ipType'] = $data->getIpType();
        }
        if ($data->isInitialized('ipv6Type') && null !== $data->getIpv6Type()) {
            $dataArray['ipv6Type'] = $data->getIpv6Type();
        }
        if ($data->isInitialized('cellularWanInterface') && null !== $data->getCellularWanInterface()) {
            $dataArray['cellularWanInterface'] = $data->getCellularWanInterface();
        }
        if ($data->isInitialized('cellularConnectionStatus') && null !== $data->getCellularConnectionStatus()) {
            $dataArray['cellularConnectionStatus'] = $data->getCellularConnectionStatus();
        }
        if ($data->isInitialized('cellularSignalStrength') && null !== $data->getCellularSignalStrength()) {
            $dataArray['cellularSignalStrength'] = $data->getCellularSignalStrength();
        }
        if ($data->isInitialized('cellularIMSISIM0') && null !== $data->getCellularIMSISIM0()) {
            $dataArray['cellularIMSISIM0'] = $data->getCellularIMSISIM0();
        }
        if ($data->isInitialized('cellularIMSISIM1') && null !== $data->getCellularIMSISIM1()) {
            $dataArray['cellularIMSISIM1'] = $data->getCellularIMSISIM1();
        }
        if ($data->isInitialized('cellularICCIDSIM0') && null !== $data->getCellularICCIDSIM0()) {
            $dataArray['cellularICCIDSIM0'] = $data->getCellularICCIDSIM0();
        }
        if ($data->isInitialized('cellularICCIDSIM1') && null !== $data->getCellularICCIDSIM1()) {
            $dataArray['cellularICCIDSIM1'] = $data->getCellularICCIDSIM1();
        }
        if ($data->isInitialized('cellularIsSIM0Present') && null !== $data->getCellularIsSIM0Present()) {
            $dataArray['cellularIsSIM0Present'] = $data->getCellularIsSIM0Present();
        }
        if ($data->isInitialized('cellularIsSIM1Present') && null !== $data->getCellularIsSIM1Present()) {
            $dataArray['cellularIsSIM1Present'] = $data->getCellularIsSIM1Present();
        }
        if ($data->isInitialized('cellularTxBytesSIM0') && null !== $data->getCellularTxBytesSIM0()) {
            $dataArray['cellularTxBytesSIM0'] = $data->getCellularTxBytesSIM0();
        }
        if ($data->isInitialized('cellularTxBytesSIM1') && null !== $data->getCellularTxBytesSIM1()) {
            $dataArray['cellularTxBytesSIM1'] = $data->getCellularTxBytesSIM1();
        }
        if ($data->isInitialized('cellularRxBytesSIM0') && null !== $data->getCellularRxBytesSIM0()) {
            $dataArray['cellularRxBytesSIM0'] = $data->getCellularRxBytesSIM0();
        }
        if ($data->isInitialized('cellularRxBytesSIM1') && null !== $data->getCellularRxBytesSIM1()) {
            $dataArray['cellularRxBytesSIM1'] = $data->getCellularRxBytesSIM1();
        }
        if ($data->isInitialized('cellularActiveSim') && null !== $data->getCellularActiveSim()) {
            $dataArray['cellularActiveSim'] = $data->getCellularActiveSim();
        }
        if ($data->isInitialized('cellularIPaddress') && null !== $data->getCellularIPaddress()) {
            $dataArray['cellularIPaddress'] = $data->getCellularIPaddress();
        }
        if ($data->isInitialized('cellularSubnetMask') && null !== $data->getCellularSubnetMask()) {
            $dataArray['cellularSubnetMask'] = $data->getCellularSubnetMask();
        }
        if ($data->isInitialized('cellularDefaultGateway') && null !== $data->getCellularDefaultGateway()) {
            $dataArray['cellularDefaultGateway'] = $data->getCellularDefaultGateway();
        }
        if ($data->isInitialized('cellularOperator') && null !== $data->getCellularOperator()) {
            $dataArray['cellularOperator'] = $data->getCellularOperator();
        }
        if ($data->isInitialized('cellular3G4GChannel') && null !== $data->getCellular3G4GChannel()) {
            $dataArray['cellular3G4GChannel'] = $data->getCellular3G4GChannel();
        }
        if ($data->isInitialized('cellularCountry') && null !== $data->getCellularCountry()) {
            $dataArray['cellularCountry'] = $data->getCellularCountry();
        }
        if ($data->isInitialized('cellularRadioUptime') && null !== $data->getCellularRadioUptime()) {
            $dataArray['cellularRadioUptime'] = $data->getCellularRadioUptime();
        }
        if ($data->isInitialized('cellularGpsHistory') && null !== $data->getCellularGpsHistory()) {
            $values = [];
            foreach ($data->getCellularGpsHistory() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['cellularGpsHistory'] = $values;
        }
        if ($data->isInitialized('medianTxRadioMCSRate24G') && null !== $data->getMedianTxRadioMCSRate24G()) {
            $dataArray['medianTxRadioMCSRate24G'] = $data->getMedianTxRadioMCSRate24G();
        }
        if ($data->isInitialized('medianTxRadioMCSRate50G') && null !== $data->getMedianTxRadioMCSRate50G()) {
            $dataArray['medianTxRadioMCSRate50G'] = $data->getMedianTxRadioMCSRate50G();
        }
        if ($data->isInitialized('medianTxRadioMCSRate6G') && null !== $data->getMedianTxRadioMCSRate6G()) {
            $dataArray['medianTxRadioMCSRate6G'] = $data->getMedianTxRadioMCSRate6G();
        }
        if ($data->isInitialized('medianRxRadioMCSRate24G') && null !== $data->getMedianRxRadioMCSRate24G()) {
            $dataArray['medianRxRadioMCSRate24G'] = $data->getMedianRxRadioMCSRate24G();
        }
        if ($data->isInitialized('medianRxRadioMCSRate50G') && null !== $data->getMedianRxRadioMCSRate50G()) {
            $dataArray['medianRxRadioMCSRate50G'] = $data->getMedianRxRadioMCSRate50G();
        }
        if ($data->isInitialized('medianRxRadioMCSRate6G') && null !== $data->getMedianRxRadioMCSRate6G()) {
            $dataArray['medianRxRadioMCSRate6G'] = $data->getMedianRxRadioMCSRate6G();
        }
        if ($data->isInitialized('monitoringEnabled') && null !== $data->getMonitoringEnabled()) {
            $dataArray['monitoringEnabled'] = $data->getMonitoringEnabled();
        }
        if ($data->isInitialized('txPowerOffset24G') && null !== $data->getTxPowerOffset24G()) {
            $dataArray['txPowerOffset24G'] = $data->getTxPowerOffset24G();
        }
        if ($data->isInitialized('txPowerOffset5G') && null !== $data->getTxPowerOffset5G()) {
            $dataArray['txPowerOffset5G'] = $data->getTxPowerOffset5G();
        }
        if ($data->isInitialized('txPowerOffset6G') && null !== $data->getTxPowerOffset6G()) {
            $dataArray['txPowerOffset6G'] = $data->getTxPowerOffset6G();
        }
        if ($data->isInitialized('rxDesense24G') && null !== $data->getRxDesense24G()) {
            $dataArray['rxDesense24G'] = $data->getRxDesense24G();
        }
        if ($data->isInitialized('rxDesense5G') && null !== $data->getRxDesense5G()) {
            $dataArray['rxDesense5G'] = $data->getRxDesense5G();
        }
        if ($data->isInitialized('rxDesense6G') && null !== $data->getRxDesense6G()) {
            $dataArray['rxDesense6G'] = $data->getRxDesense6G();
        }
        if ($data->isInitialized('cumulativeTx24G') && null !== $data->getCumulativeTx24G()) {
            $dataArray['cumulativeTx24G'] = $data->getCumulativeTx24G();
        }
        if ($data->isInitialized('cumulativeRx24G') && null !== $data->getCumulativeRx24G()) {
            $dataArray['cumulativeRx24G'] = $data->getCumulativeRx24G();
        }
        if ($data->isInitialized('cumulativeTxRx24G') && null !== $data->getCumulativeTxRx24G()) {
            $dataArray['cumulativeTxRx24G'] = $data->getCumulativeTxRx24G();
        }
        if ($data->isInitialized('cumulativeTx5G') && null !== $data->getCumulativeTx5G()) {
            $dataArray['cumulativeTx5G'] = $data->getCumulativeTx5G();
        }
        if ($data->isInitialized('cumulativeRx5G') && null !== $data->getCumulativeRx5G()) {
            $dataArray['cumulativeRx5G'] = $data->getCumulativeRx5G();
        }
        if ($data->isInitialized('cumulativeTxRx5G') && null !== $data->getCumulativeTxRx5G()) {
            $dataArray['cumulativeTxRx5G'] = $data->getCumulativeTxRx5G();
        }
        if ($data->isInitialized('cumulativeTx6G') && null !== $data->getCumulativeTx6G()) {
            $dataArray['cumulativeTx6G'] = $data->getCumulativeTx6G();
        }
        if ($data->isInitialized('cumulativeRx6G') && null !== $data->getCumulativeRx6G()) {
            $dataArray['cumulativeRx6G'] = $data->getCumulativeRx6G();
        }
        if ($data->isInitialized('cumulativeTxRx6G') && null !== $data->getCumulativeTxRx6G()) {
            $dataArray['cumulativeTxRx6G'] = $data->getCumulativeTxRx6G();
        }
        if ($data->isInitialized('isDual5gMode') && null !== $data->getIsDual5gMode()) {
            $dataArray['isDual5gMode'] = $data->getIsDual5gMode();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApQueryCreateApQuery::class => false];
    }
}