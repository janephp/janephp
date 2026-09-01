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
class ApQueryCreateApQueryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryCreateApQuery::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryCreateApQuery::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryCreateApQuery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('connectionFailure', $data) && \is_int($data['connectionFailure'])) {
            $data['connectionFailure'] = (float) $data['connectionFailure'];
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
        if (\array_key_exists('registrationTime', $data)) {
            $object->registrationTime = $data['registrationTime'];
        }
        if (\array_key_exists('poePortStatus', $data)) {
            $object->poePortStatus = $data['poePortStatus'];
        }
        if (\array_key_exists('indoorMapId', $data)) {
            $object->indoorMapId = $data['indoorMapId'];
        }
        if (\array_key_exists('channel24G', $data)) {
            $object->channel24G = $data['channel24G'];
        }
        if (\array_key_exists('channel24gValue', $data)) {
            $object->channel24gValue = $data['channel24gValue'];
        }
        if (\array_key_exists('configOverride', $data)) {
            $object->configOverride = $data['configOverride'];
        }
        if (\array_key_exists('deviceName', $data)) {
            $object->deviceName = $data['deviceName'];
        }
        if (\array_key_exists('enabledBonjourGateway', $data)) {
            $object->enabledBonjourGateway = $data['enabledBonjourGateway'];
        }
        if (\array_key_exists('numClients24G', $data)) {
            $object->numClients24G = $data['numClients24G'];
        }
        if (\array_key_exists('dataBladeName', $data)) {
            $object->dataBladeName = $data['dataBladeName'];
        }
        if (\array_key_exists('retry24G', $data)) {
            $object->retry24G = $data['retry24G'];
        }
        if (\array_key_exists('airtime24G', $data)) {
            $object->airtime24G = $data['airtime24G'];
        }
        if (\array_key_exists('noise5G', $data)) {
            $object->noise5G = $data['noise5G'];
        }
        if (\array_key_exists('noise6G', $data)) {
            $object->noise6G = $data['noise6G'];
        }
        if (\array_key_exists('model', $data)) {
            $object->model = $data['model'];
        }
        if (\array_key_exists('numClients', $data)) {
            $object->numClients = $data['numClients'];
        }
        if (\array_key_exists('capacity24G', $data)) {
            $object->capacity24G = $data['capacity24G'];
        }
        if (\array_key_exists('firmwareVersion', $data)) {
            $object->firmwareVersion = $data['firmwareVersion'];
        }
        if (\array_key_exists('provisionMethod', $data)) {
            $object->provisionMethod = $data['provisionMethod'];
        }
        if (\array_key_exists('latency24G', $data)) {
            $object->latency24G = $data['latency24G'];
        }
        if (\array_key_exists('retry5G', $data)) {
            $object->retry5G = $data['retry5G'];
        }
        if (\array_key_exists('retry6G', $data)) {
            $object->retry6G = $data['retry6G'];
        }
        if (\array_key_exists('ip', $data)) {
            $object->ip = $data['ip'];
        }
        if (\array_key_exists('apMac', $data)) {
            $object->apMac = $data['apMac'];
        }
        if (\array_key_exists('noise24G', $data)) {
            $object->noise24G = $data['noise24G'];
        }
        if (\array_key_exists('lastSeen', $data)) {
            $object->lastSeen = $data['lastSeen'];
        }
        if (\array_key_exists('configurationStatus', $data)) {
            $object->configurationStatus = $data['configurationStatus'];
        }
        if (\array_key_exists('airtime5G', $data)) {
            $object->airtime5G = $data['airtime5G'];
        }
        if (\array_key_exists('airtime6G', $data)) {
            $object->airtime6G = $data['airtime6G'];
        }
        if (\array_key_exists('alerts', $data)) {
            $object->alerts = $data['alerts'];
        }
        if (\array_key_exists('lbsStatus', $data)) {
            $object->lbsStatus = $data['lbsStatus'];
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
        }
        if (\array_key_exists('numClients5G', $data)) {
            $object->numClients5G = $data['numClients5G'];
        }
        if (\array_key_exists('numClients6G', $data)) {
            $object->numClients6G = $data['numClients6G'];
        }
        if (\array_key_exists('ipv6Address', $data)) {
            $object->ipv6Address = $data['ipv6Address'];
        }
        if (\array_key_exists('capacity50G', $data)) {
            $object->capacity50G = $data['capacity50G'];
        }
        if (\array_key_exists('capacity6G', $data)) {
            $object->capacity6G = $data['capacity6G'];
        }
        if (\array_key_exists('wlanGroup24Name', $data)) {
            $object->wlanGroup24Name = $data['wlanGroup24Name'];
        }
        if (\array_key_exists('connectionFailure', $data)) {
            $object->connectionFailure = $data['connectionFailure'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('capacity', $data)) {
            $object->capacity = $data['capacity'];
        }
        if (\array_key_exists('meshRole', $data)) {
            $object->meshRole = $data['meshRole'];
        }
        if (\array_key_exists('channel5G', $data)) {
            $object->channel5G = $data['channel5G'];
        }
        if (\array_key_exists('channel50gValue', $data)) {
            $object->channel50gValue = $data['channel50gValue'];
        }
        if (\array_key_exists('channel6G', $data)) {
            $object->channel6G = $data['channel6G'];
        }
        if (\array_key_exists('channel6gValue', $data)) {
            $object->channel6gValue = $data['channel6gValue'];
        }
        if (\array_key_exists('managementVlan', $data)) {
            $object->managementVlan = $data['managementVlan'];
        }
        if (\array_key_exists('wlanGroup6gName', $data)) {
            $object->wlanGroup6gName = $data['wlanGroup6gName'];
        }
        if (\array_key_exists('wlanGroup50Name', $data)) {
            $object->wlanGroup50Name = $data['wlanGroup50Name'];
        }
        if (\array_key_exists('wlanGroup24Id', $data)) {
            $object->wlanGroup24Id = $data['wlanGroup24Id'];
        }
        if (\array_key_exists('controlBladeName', $data)) {
            $object->controlBladeName = $data['controlBladeName'];
        }
        if (\array_key_exists('zoneName', $data)) {
            $object->zoneName = $data['zoneName'];
        }
        if (\array_key_exists('tx', $data)) {
            $object->tx = $data['tx'];
        }
        if (\array_key_exists('rx', $data)) {
            $object->rx = $data['rx'];
        }
        if (\array_key_exists('txRx', $data)) {
            $object->txRx = $data['txRx'];
        }
        if (\array_key_exists('tx24G', $data)) {
            $object->tx24G = $data['tx24G'];
        }
        if (\array_key_exists('tx50G', $data)) {
            $object->tx50G = $data['tx50G'];
        }
        if (\array_key_exists('tx6G', $data)) {
            $object->tx6G = $data['tx6G'];
        }
        if (\array_key_exists('rx24G', $data)) {
            $object->rx24G = $data['rx24G'];
        }
        if (\array_key_exists('rx50G', $data)) {
            $object->rx50G = $data['rx50G'];
        }
        if (\array_key_exists('rx6G', $data)) {
            $object->rx6G = $data['rx6G'];
        }
        if (\array_key_exists('txRx24G', $data)) {
            $object->txRx24G = $data['txRx24G'];
        }
        if (\array_key_exists('txRx50G', $data)) {
            $object->txRx50G = $data['txRx50G'];
        }
        if (\array_key_exists('txRx6G', $data)) {
            $object->txRx6G = $data['txRx6G'];
        }
        if (\array_key_exists('meshMode', $data)) {
            $object->meshMode = $data['meshMode'];
        }
        if (\array_key_exists('extPort', $data)) {
            $object->extPort = $data['extPort'];
        }
        if (\array_key_exists('administrativeState', $data)) {
            $object->administrativeState = $data['administrativeState'];
        }
        if (\array_key_exists('apGroupName', $data)) {
            $object->apGroupName = $data['apGroupName'];
        }
        if (\array_key_exists('latency50G', $data)) {
            $object->latency50G = $data['latency50G'];
        }
        if (\array_key_exists('latency6G', $data)) {
            $object->latency6G = $data['latency6G'];
        }
        if (\array_key_exists('indoorMapXy', $data)) {
            $object->indoorMapXy = $this->denormalizer->denormalize($data['indoorMapXy'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryCreateApQueryIndoorMapXy::class, 'json', $context);
        }
        if (\array_key_exists('apGroupId', $data)) {
            $object->apGroupId = $data['apGroupId'];
        }
        if (\array_key_exists('extIp', $data)) {
            $object->extIp = $data['extIp'];
        }
        if (\array_key_exists('airtime', $data)) {
            $object->airtime = $data['airtime'];
        }
        if (\array_key_exists('provisionStage', $data)) {
            $object->provisionStage = $data['provisionStage'];
        }
        if (\array_key_exists('indoorMapName', $data)) {
            $object->indoorMapName = $data['indoorMapName'];
        }
        if (\array_key_exists('indoorMapLocation', $data)) {
            $object->indoorMapLocation = $data['indoorMapLocation'];
        }
        if (\array_key_exists('deviceGps', $data)) {
            $object->deviceGps = $data['deviceGps'];
        }
        if (\array_key_exists('serial', $data)) {
            $object->serial = $data['serial'];
        }
        if (\array_key_exists('location', $data)) {
            $object->location = $data['location'];
        }
        if (\array_key_exists('wlanGroup50Id', $data)) {
            $object->wlanGroup50Id = $data['wlanGroup50Id'];
        }
        if (\array_key_exists('wlanGroup6gId', $data)) {
            $object->wlanGroup6gId = $data['wlanGroup6gId'];
        }
        if (\array_key_exists('registrationState', $data)) {
            $object->registrationState = $data['registrationState'];
        }
        if (\array_key_exists('zoneId', $data)) {
            $object->zoneId = $data['zoneId'];
        }
        if (\array_key_exists('zoneFirmwareVersion', $data)) {
            $object->zoneFirmwareVersion = $data['zoneFirmwareVersion'];
        }
        if (\array_key_exists('zoneAffinityProfileName', $data)) {
            $object->zoneAffinityProfileName = $data['zoneAffinityProfileName'];
        }
        if (\array_key_exists('connectionStatus', $data)) {
            $object->connectionStatus = $data['connectionStatus'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        if (\array_key_exists('domainName', $data)) {
            $object->domainName = $data['domainName'];
        }
        if (\array_key_exists('partnerDomainId', $data)) {
            $object->partnerDomainId = $data['partnerDomainId'];
        }
        if (\array_key_exists('dpIp', $data)) {
            $object->dpIp = $data['dpIp'];
        }
        if (\array_key_exists('controlBladeId', $data)) {
            $object->controlBladeId = $data['controlBladeId'];
        }
        if (\array_key_exists('isCriticalAp', $data)) {
            $object->isCriticalAp = $data['isCriticalAp'];
        }
        if (\array_key_exists('crashDump', $data)) {
            $object->crashDump = $data['crashDump'];
        }
        if (\array_key_exists('cableModemSupported', $data)) {
            $object->cableModemSupported = $data['cableModemSupported'];
        }
        if (\array_key_exists('cableModemResetSupported', $data)) {
            $object->cableModemResetSupported = $data['cableModemResetSupported'];
        }
        if (\array_key_exists('swapInMac', $data)) {
            $object->swapInMac = $data['swapInMac'];
        }
        if (\array_key_exists('swapOutMac', $data)) {
            $object->swapOutMac = $data['swapOutMac'];
        }
        if (\array_key_exists('packetCaptureState', $data)) {
            $object->packetCaptureState = $data['packetCaptureState'];
        }
        if (\array_key_exists('isOverallHealthStatusFlagged', $data)) {
            $object->isOverallHealthStatusFlagged = $data['isOverallHealthStatusFlagged'];
        }
        if (\array_key_exists('isLatency24GFlagged', $data)) {
            $object->isLatency24GFlagged = $data['isLatency24GFlagged'];
        }
        if (\array_key_exists('isCapacity24GFlagged', $data)) {
            $object->isCapacity24GFlagged = $data['isCapacity24GFlagged'];
        }
        if (\array_key_exists('isConnectionFailure24GFlagged', $data)) {
            $object->isConnectionFailure24GFlagged = $data['isConnectionFailure24GFlagged'];
        }
        if (\array_key_exists('isLatency50GFlagged', $data)) {
            $object->isLatency50GFlagged = $data['isLatency50GFlagged'];
        }
        if (\array_key_exists('isCapacity50GFlagged', $data)) {
            $object->isCapacity50GFlagged = $data['isCapacity50GFlagged'];
        }
        if (\array_key_exists('isConnectionFailure50GFlagged', $data)) {
            $object->isConnectionFailure50GFlagged = $data['isConnectionFailure50GFlagged'];
        }
        if (\array_key_exists('isLatency6GFlagged', $data)) {
            $object->isLatency6GFlagged = $data['isLatency6GFlagged'];
        }
        if (\array_key_exists('isCapacity6GFlagged', $data)) {
            $object->isCapacity6GFlagged = $data['isCapacity6GFlagged'];
        }
        if (\array_key_exists('isConnectionFailure6GFlagged', $data)) {
            $object->isConnectionFailure6GFlagged = $data['isConnectionFailure6GFlagged'];
        }
        if (\array_key_exists('isConnectionTotalCountFlagged', $data)) {
            $object->isConnectionTotalCountFlagged = $data['isConnectionTotalCountFlagged'];
        }
        if (\array_key_exists('isConnectionFailureFlagged', $data)) {
            $object->isConnectionFailureFlagged = $data['isConnectionFailureFlagged'];
        }
        if (\array_key_exists('isAirtimeUtilization24GFlagged', $data)) {
            $object->isAirtimeUtilization24GFlagged = $data['isAirtimeUtilization24GFlagged'];
        }
        if (\array_key_exists('isAirtimeUtilization50GFlagged', $data)) {
            $object->isAirtimeUtilization50GFlagged = $data['isAirtimeUtilization50GFlagged'];
        }
        if (\array_key_exists('isAirtimeUtilization6GFlagged', $data)) {
            $object->isAirtimeUtilization6GFlagged = $data['isAirtimeUtilization6GFlagged'];
        }
        if (\array_key_exists('eirp24G', $data)) {
            $object->eirp24G = $data['eirp24G'];
        }
        if (\array_key_exists('eirp50G', $data)) {
            $object->eirp50G = $data['eirp50G'];
        }
        if (\array_key_exists('eirp6G', $data)) {
            $object->eirp6G = $data['eirp6G'];
        }
        if (\array_key_exists('supportFips', $data)) {
            $object->supportFips = $data['supportFips'];
        }
        if (\array_key_exists('fipsEnabled', $data)) {
            $object->fipsEnabled = $data['fipsEnabled'];
        }
        if (\array_key_exists('uptime', $data)) {
            $object->uptime = $data['uptime'];
        }
        if (\array_key_exists('ipsecSessionTime', $data)) {
            $object->ipsecSessionTime = $data['ipsecSessionTime'];
        }
        if (\array_key_exists('ipsecTxPkts', $data)) {
            $object->ipsecTxPkts = $data['ipsecTxPkts'];
        }
        if (\array_key_exists('ipsecRxPkts', $data)) {
            $object->ipsecRxPkts = $data['ipsecRxPkts'];
        }
        if (\array_key_exists('ipsecTxBytes', $data)) {
            $object->ipsecTxBytes = $data['ipsecTxBytes'];
        }
        if (\array_key_exists('ipsecRxBytes', $data)) {
            $object->ipsecRxBytes = $data['ipsecRxBytes'];
        }
        if (\array_key_exists('ipsecTxDropPkts', $data)) {
            $object->ipsecTxDropPkts = $data['ipsecTxDropPkts'];
        }
        if (\array_key_exists('ipsecRxDropPkts', $data)) {
            $object->ipsecRxDropPkts = $data['ipsecRxDropPkts'];
        }
        if (\array_key_exists('ipsecTxIdleTime', $data)) {
            $object->ipsecTxIdleTime = $data['ipsecTxIdleTime'];
        }
        if (\array_key_exists('ipsecRxIdleTime', $data)) {
            $object->ipsecRxIdleTime = $data['ipsecRxIdleTime'];
        }
        if (\array_key_exists('ipType', $data)) {
            $object->ipType = $data['ipType'];
        }
        if (\array_key_exists('ipv6Type', $data)) {
            $object->ipv6Type = $data['ipv6Type'];
        }
        if (\array_key_exists('cellularWanInterface', $data)) {
            $object->cellularWanInterface = $data['cellularWanInterface'];
        }
        if (\array_key_exists('cellularConnectionStatus', $data)) {
            $object->cellularConnectionStatus = $data['cellularConnectionStatus'];
        }
        if (\array_key_exists('cellularSignalStrength', $data)) {
            $object->cellularSignalStrength = $data['cellularSignalStrength'];
        }
        if (\array_key_exists('cellularIMSISIM0', $data)) {
            $object->cellularIMSISIM0 = $data['cellularIMSISIM0'];
        }
        if (\array_key_exists('cellularIMSISIM1', $data)) {
            $object->cellularIMSISIM1 = $data['cellularIMSISIM1'];
        }
        if (\array_key_exists('cellularICCIDSIM0', $data)) {
            $object->cellularICCIDSIM0 = $data['cellularICCIDSIM0'];
        }
        if (\array_key_exists('cellularICCIDSIM1', $data)) {
            $object->cellularICCIDSIM1 = $data['cellularICCIDSIM1'];
        }
        if (\array_key_exists('cellularIsSIM0Present', $data)) {
            $object->cellularIsSIM0Present = $data['cellularIsSIM0Present'];
        }
        if (\array_key_exists('cellularIsSIM1Present', $data)) {
            $object->cellularIsSIM1Present = $data['cellularIsSIM1Present'];
        }
        if (\array_key_exists('cellularTxBytesSIM0', $data)) {
            $object->cellularTxBytesSIM0 = $data['cellularTxBytesSIM0'];
        }
        if (\array_key_exists('cellularTxBytesSIM1', $data)) {
            $object->cellularTxBytesSIM1 = $data['cellularTxBytesSIM1'];
        }
        if (\array_key_exists('cellularRxBytesSIM0', $data)) {
            $object->cellularRxBytesSIM0 = $data['cellularRxBytesSIM0'];
        }
        if (\array_key_exists('cellularRxBytesSIM1', $data)) {
            $object->cellularRxBytesSIM1 = $data['cellularRxBytesSIM1'];
        }
        if (\array_key_exists('cellularActiveSim', $data)) {
            $object->cellularActiveSim = $data['cellularActiveSim'];
        }
        if (\array_key_exists('cellularIPaddress', $data)) {
            $object->cellularIPaddress = $data['cellularIPaddress'];
        }
        if (\array_key_exists('cellularSubnetMask', $data)) {
            $object->cellularSubnetMask = $data['cellularSubnetMask'];
        }
        if (\array_key_exists('cellularDefaultGateway', $data)) {
            $object->cellularDefaultGateway = $data['cellularDefaultGateway'];
        }
        if (\array_key_exists('cellularOperator', $data)) {
            $object->cellularOperator = $data['cellularOperator'];
        }
        if (\array_key_exists('cellular3G4GChannel', $data)) {
            $object->cellular3G4GChannel = $data['cellular3G4GChannel'];
        }
        if (\array_key_exists('cellularCountry', $data)) {
            $object->cellularCountry = $data['cellularCountry'];
        }
        if (\array_key_exists('cellularRadioUptime', $data)) {
            $object->cellularRadioUptime = $data['cellularRadioUptime'];
        }
        if (\array_key_exists('cellularGpsHistory', $data)) {
            $values = [];
            foreach ($data['cellularGpsHistory'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryCreateApQueryCellularGpsHistoryItem::class, 'json', $context);
            }
            $object->cellularGpsHistory = $values;
        }
        if (\array_key_exists('medianTxRadioMCSRate24G', $data)) {
            $object->medianTxRadioMCSRate24G = $data['medianTxRadioMCSRate24G'];
        }
        if (\array_key_exists('medianTxRadioMCSRate50G', $data)) {
            $object->medianTxRadioMCSRate50G = $data['medianTxRadioMCSRate50G'];
        }
        if (\array_key_exists('medianTxRadioMCSRate6G', $data)) {
            $object->medianTxRadioMCSRate6G = $data['medianTxRadioMCSRate6G'];
        }
        if (\array_key_exists('medianRxRadioMCSRate24G', $data)) {
            $object->medianRxRadioMCSRate24G = $data['medianRxRadioMCSRate24G'];
        }
        if (\array_key_exists('medianRxRadioMCSRate50G', $data)) {
            $object->medianRxRadioMCSRate50G = $data['medianRxRadioMCSRate50G'];
        }
        if (\array_key_exists('medianRxRadioMCSRate6G', $data)) {
            $object->medianRxRadioMCSRate6G = $data['medianRxRadioMCSRate6G'];
        }
        if (\array_key_exists('monitoringEnabled', $data)) {
            $object->monitoringEnabled = $data['monitoringEnabled'];
        }
        if (\array_key_exists('txPowerOffset24G', $data)) {
            $object->txPowerOffset24G = $data['txPowerOffset24G'];
        }
        if (\array_key_exists('txPowerOffset5G', $data)) {
            $object->txPowerOffset5G = $data['txPowerOffset5G'];
        }
        if (\array_key_exists('txPowerOffset6G', $data)) {
            $object->txPowerOffset6G = $data['txPowerOffset6G'];
        }
        if (\array_key_exists('rxDesense24G', $data)) {
            $object->rxDesense24G = $data['rxDesense24G'];
        }
        if (\array_key_exists('rxDesense5G', $data)) {
            $object->rxDesense5G = $data['rxDesense5G'];
        }
        if (\array_key_exists('rxDesense6G', $data)) {
            $object->rxDesense6G = $data['rxDesense6G'];
        }
        if (\array_key_exists('cumulativeTx24G', $data)) {
            $object->cumulativeTx24G = $data['cumulativeTx24G'];
        }
        if (\array_key_exists('cumulativeRx24G', $data)) {
            $object->cumulativeRx24G = $data['cumulativeRx24G'];
        }
        if (\array_key_exists('cumulativeTxRx24G', $data)) {
            $object->cumulativeTxRx24G = $data['cumulativeTxRx24G'];
        }
        if (\array_key_exists('cumulativeTx5G', $data)) {
            $object->cumulativeTx5G = $data['cumulativeTx5G'];
        }
        if (\array_key_exists('cumulativeRx5G', $data)) {
            $object->cumulativeRx5G = $data['cumulativeRx5G'];
        }
        if (\array_key_exists('cumulativeTxRx5G', $data)) {
            $object->cumulativeTxRx5G = $data['cumulativeTxRx5G'];
        }
        if (\array_key_exists('cumulativeTx6G', $data)) {
            $object->cumulativeTx6G = $data['cumulativeTx6G'];
        }
        if (\array_key_exists('cumulativeRx6G', $data)) {
            $object->cumulativeRx6G = $data['cumulativeRx6G'];
        }
        if (\array_key_exists('cumulativeTxRx6G', $data)) {
            $object->cumulativeTxRx6G = $data['cumulativeTxRx6G'];
        }
        if (\array_key_exists('isDual5gMode', $data)) {
            $object->isDual5gMode = $data['isDual5gMode'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('registrationTime', get_object_vars($data)) && null !== ($data->registrationTime ?? null)) {
            $dataArray['registrationTime'] = $data->registrationTime ?? null;
        }
        if (array_key_exists('poePortStatus', get_object_vars($data)) && null !== ($data->poePortStatus ?? null)) {
            $dataArray['poePortStatus'] = $data->poePortStatus ?? null;
        }
        if (array_key_exists('indoorMapId', get_object_vars($data)) && null !== ($data->indoorMapId ?? null)) {
            $dataArray['indoorMapId'] = $data->indoorMapId ?? null;
        }
        if (array_key_exists('channel24G', get_object_vars($data)) && null !== ($data->channel24G ?? null)) {
            $dataArray['channel24G'] = $data->channel24G ?? null;
        }
        if (array_key_exists('channel24gValue', get_object_vars($data)) && null !== ($data->channel24gValue ?? null)) {
            $dataArray['channel24gValue'] = $data->channel24gValue ?? null;
        }
        if (array_key_exists('configOverride', get_object_vars($data)) && null !== ($data->configOverride ?? null)) {
            $dataArray['configOverride'] = $data->configOverride ?? null;
        }
        if (array_key_exists('deviceName', get_object_vars($data)) && null !== ($data->deviceName ?? null)) {
            $dataArray['deviceName'] = $data->deviceName ?? null;
        }
        if (array_key_exists('enabledBonjourGateway', get_object_vars($data)) && null !== ($data->enabledBonjourGateway ?? null)) {
            $dataArray['enabledBonjourGateway'] = $data->enabledBonjourGateway ?? null;
        }
        if (array_key_exists('numClients24G', get_object_vars($data)) && null !== ($data->numClients24G ?? null)) {
            $dataArray['numClients24G'] = $data->numClients24G ?? null;
        }
        if (array_key_exists('dataBladeName', get_object_vars($data)) && null !== ($data->dataBladeName ?? null)) {
            $dataArray['dataBladeName'] = $data->dataBladeName ?? null;
        }
        if (array_key_exists('retry24G', get_object_vars($data)) && null !== ($data->retry24G ?? null)) {
            $dataArray['retry24G'] = $data->retry24G ?? null;
        }
        if (array_key_exists('airtime24G', get_object_vars($data)) && null !== ($data->airtime24G ?? null)) {
            $dataArray['airtime24G'] = $data->airtime24G ?? null;
        }
        if (array_key_exists('noise5G', get_object_vars($data)) && null !== ($data->noise5G ?? null)) {
            $dataArray['noise5G'] = $data->noise5G ?? null;
        }
        if (array_key_exists('noise6G', get_object_vars($data)) && null !== ($data->noise6G ?? null)) {
            $dataArray['noise6G'] = $data->noise6G ?? null;
        }
        if (array_key_exists('model', get_object_vars($data)) && null !== ($data->model ?? null)) {
            $dataArray['model'] = $data->model ?? null;
        }
        if (array_key_exists('numClients', get_object_vars($data)) && null !== ($data->numClients ?? null)) {
            $dataArray['numClients'] = $data->numClients ?? null;
        }
        if (array_key_exists('capacity24G', get_object_vars($data)) && null !== ($data->capacity24G ?? null)) {
            $dataArray['capacity24G'] = $data->capacity24G ?? null;
        }
        if (array_key_exists('firmwareVersion', get_object_vars($data)) && null !== ($data->firmwareVersion ?? null)) {
            $dataArray['firmwareVersion'] = $data->firmwareVersion ?? null;
        }
        if (array_key_exists('provisionMethod', get_object_vars($data)) && null !== ($data->provisionMethod ?? null)) {
            $dataArray['provisionMethod'] = $data->provisionMethod ?? null;
        }
        if (array_key_exists('latency24G', get_object_vars($data)) && null !== ($data->latency24G ?? null)) {
            $dataArray['latency24G'] = $data->latency24G ?? null;
        }
        if (array_key_exists('retry5G', get_object_vars($data)) && null !== ($data->retry5G ?? null)) {
            $dataArray['retry5G'] = $data->retry5G ?? null;
        }
        if (array_key_exists('retry6G', get_object_vars($data)) && null !== ($data->retry6G ?? null)) {
            $dataArray['retry6G'] = $data->retry6G ?? null;
        }
        if (array_key_exists('ip', get_object_vars($data)) && null !== ($data->ip ?? null)) {
            $dataArray['ip'] = $data->ip ?? null;
        }
        if (array_key_exists('apMac', get_object_vars($data)) && null !== ($data->apMac ?? null)) {
            $dataArray['apMac'] = $data->apMac ?? null;
        }
        if (array_key_exists('noise24G', get_object_vars($data)) && null !== ($data->noise24G ?? null)) {
            $dataArray['noise24G'] = $data->noise24G ?? null;
        }
        if (array_key_exists('lastSeen', get_object_vars($data)) && null !== ($data->lastSeen ?? null)) {
            $dataArray['lastSeen'] = $data->lastSeen ?? null;
        }
        if (array_key_exists('configurationStatus', get_object_vars($data)) && null !== ($data->configurationStatus ?? null)) {
            $dataArray['configurationStatus'] = $data->configurationStatus ?? null;
        }
        if (array_key_exists('airtime5G', get_object_vars($data)) && null !== ($data->airtime5G ?? null)) {
            $dataArray['airtime5G'] = $data->airtime5G ?? null;
        }
        if (array_key_exists('airtime6G', get_object_vars($data)) && null !== ($data->airtime6G ?? null)) {
            $dataArray['airtime6G'] = $data->airtime6G ?? null;
        }
        if (array_key_exists('alerts', get_object_vars($data)) && null !== ($data->alerts ?? null)) {
            $dataArray['alerts'] = $data->alerts ?? null;
        }
        if (array_key_exists('lbsStatus', get_object_vars($data)) && null !== ($data->lbsStatus ?? null)) {
            $dataArray['lbsStatus'] = $data->lbsStatus ?? null;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status ?? null;
        }
        if (array_key_exists('numClients5G', get_object_vars($data)) && null !== ($data->numClients5G ?? null)) {
            $dataArray['numClients5G'] = $data->numClients5G ?? null;
        }
        if (array_key_exists('numClients6G', get_object_vars($data)) && null !== ($data->numClients6G ?? null)) {
            $dataArray['numClients6G'] = $data->numClients6G ?? null;
        }
        if (array_key_exists('ipv6Address', get_object_vars($data)) && null !== ($data->ipv6Address ?? null)) {
            $dataArray['ipv6Address'] = $data->ipv6Address ?? null;
        }
        if (array_key_exists('capacity50G', get_object_vars($data)) && null !== ($data->capacity50G ?? null)) {
            $dataArray['capacity50G'] = $data->capacity50G ?? null;
        }
        if (array_key_exists('capacity6G', get_object_vars($data)) && null !== ($data->capacity6G ?? null)) {
            $dataArray['capacity6G'] = $data->capacity6G ?? null;
        }
        if (array_key_exists('wlanGroup24Name', get_object_vars($data)) && null !== ($data->wlanGroup24Name ?? null)) {
            $dataArray['wlanGroup24Name'] = $data->wlanGroup24Name ?? null;
        }
        if (array_key_exists('connectionFailure', get_object_vars($data)) && null !== ($data->connectionFailure ?? null)) {
            $dataArray['connectionFailure'] = $data->connectionFailure ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('capacity', get_object_vars($data)) && null !== ($data->capacity ?? null)) {
            $dataArray['capacity'] = $data->capacity ?? null;
        }
        if (array_key_exists('meshRole', get_object_vars($data)) && null !== ($data->meshRole ?? null)) {
            $dataArray['meshRole'] = $data->meshRole ?? null;
        }
        if (array_key_exists('channel5G', get_object_vars($data)) && null !== ($data->channel5G ?? null)) {
            $dataArray['channel5G'] = $data->channel5G ?? null;
        }
        if (array_key_exists('channel50gValue', get_object_vars($data)) && null !== ($data->channel50gValue ?? null)) {
            $dataArray['channel50gValue'] = $data->channel50gValue ?? null;
        }
        if (array_key_exists('channel6G', get_object_vars($data)) && null !== ($data->channel6G ?? null)) {
            $dataArray['channel6G'] = $data->channel6G ?? null;
        }
        if (array_key_exists('channel6gValue', get_object_vars($data)) && null !== ($data->channel6gValue ?? null)) {
            $dataArray['channel6gValue'] = $data->channel6gValue ?? null;
        }
        if (array_key_exists('managementVlan', get_object_vars($data)) && null !== ($data->managementVlan ?? null)) {
            $dataArray['managementVlan'] = $data->managementVlan ?? null;
        }
        if (array_key_exists('wlanGroup6gName', get_object_vars($data)) && null !== ($data->wlanGroup6gName ?? null)) {
            $dataArray['wlanGroup6gName'] = $data->wlanGroup6gName ?? null;
        }
        if (array_key_exists('wlanGroup50Name', get_object_vars($data)) && null !== ($data->wlanGroup50Name ?? null)) {
            $dataArray['wlanGroup50Name'] = $data->wlanGroup50Name ?? null;
        }
        if (array_key_exists('wlanGroup24Id', get_object_vars($data)) && null !== ($data->wlanGroup24Id ?? null)) {
            $dataArray['wlanGroup24Id'] = $data->wlanGroup24Id ?? null;
        }
        if (array_key_exists('controlBladeName', get_object_vars($data)) && null !== ($data->controlBladeName ?? null)) {
            $dataArray['controlBladeName'] = $data->controlBladeName ?? null;
        }
        if (array_key_exists('zoneName', get_object_vars($data)) && null !== ($data->zoneName ?? null)) {
            $dataArray['zoneName'] = $data->zoneName ?? null;
        }
        if (array_key_exists('tx', get_object_vars($data)) && null !== ($data->tx ?? null)) {
            $dataArray['tx'] = $data->tx ?? null;
        }
        if (array_key_exists('rx', get_object_vars($data)) && null !== ($data->rx ?? null)) {
            $dataArray['rx'] = $data->rx ?? null;
        }
        if (array_key_exists('txRx', get_object_vars($data)) && null !== ($data->txRx ?? null)) {
            $dataArray['txRx'] = $data->txRx ?? null;
        }
        if (array_key_exists('tx24G', get_object_vars($data)) && null !== ($data->tx24G ?? null)) {
            $dataArray['tx24G'] = $data->tx24G ?? null;
        }
        if (array_key_exists('tx50G', get_object_vars($data)) && null !== ($data->tx50G ?? null)) {
            $dataArray['tx50G'] = $data->tx50G ?? null;
        }
        if (array_key_exists('tx6G', get_object_vars($data)) && null !== ($data->tx6G ?? null)) {
            $dataArray['tx6G'] = $data->tx6G ?? null;
        }
        if (array_key_exists('rx24G', get_object_vars($data)) && null !== ($data->rx24G ?? null)) {
            $dataArray['rx24G'] = $data->rx24G ?? null;
        }
        if (array_key_exists('rx50G', get_object_vars($data)) && null !== ($data->rx50G ?? null)) {
            $dataArray['rx50G'] = $data->rx50G ?? null;
        }
        if (array_key_exists('rx6G', get_object_vars($data)) && null !== ($data->rx6G ?? null)) {
            $dataArray['rx6G'] = $data->rx6G ?? null;
        }
        if (array_key_exists('txRx24G', get_object_vars($data)) && null !== ($data->txRx24G ?? null)) {
            $dataArray['txRx24G'] = $data->txRx24G ?? null;
        }
        if (array_key_exists('txRx50G', get_object_vars($data)) && null !== ($data->txRx50G ?? null)) {
            $dataArray['txRx50G'] = $data->txRx50G ?? null;
        }
        if (array_key_exists('txRx6G', get_object_vars($data)) && null !== ($data->txRx6G ?? null)) {
            $dataArray['txRx6G'] = $data->txRx6G ?? null;
        }
        if (array_key_exists('meshMode', get_object_vars($data)) && null !== ($data->meshMode ?? null)) {
            $dataArray['meshMode'] = $data->meshMode ?? null;
        }
        if (array_key_exists('extPort', get_object_vars($data)) && null !== ($data->extPort ?? null)) {
            $dataArray['extPort'] = $data->extPort ?? null;
        }
        if (array_key_exists('administrativeState', get_object_vars($data)) && null !== ($data->administrativeState ?? null)) {
            $dataArray['administrativeState'] = $data->administrativeState ?? null;
        }
        if (array_key_exists('apGroupName', get_object_vars($data)) && null !== ($data->apGroupName ?? null)) {
            $dataArray['apGroupName'] = $data->apGroupName ?? null;
        }
        if (array_key_exists('latency50G', get_object_vars($data)) && null !== ($data->latency50G ?? null)) {
            $dataArray['latency50G'] = $data->latency50G ?? null;
        }
        if (array_key_exists('latency6G', get_object_vars($data)) && null !== ($data->latency6G ?? null)) {
            $dataArray['latency6G'] = $data->latency6G ?? null;
        }
        if (array_key_exists('indoorMapXy', get_object_vars($data)) && null !== ($data->indoorMapXy ?? null)) {
            $dataArray['indoorMapXy'] = ($data->indoorMapXy ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->indoorMapXy ?? null, 'json', $context));
        }
        if (array_key_exists('apGroupId', get_object_vars($data)) && null !== ($data->apGroupId ?? null)) {
            $dataArray['apGroupId'] = $data->apGroupId ?? null;
        }
        if (array_key_exists('extIp', get_object_vars($data)) && null !== ($data->extIp ?? null)) {
            $dataArray['extIp'] = $data->extIp ?? null;
        }
        if (array_key_exists('airtime', get_object_vars($data)) && null !== ($data->airtime ?? null)) {
            $dataArray['airtime'] = $data->airtime ?? null;
        }
        if (array_key_exists('provisionStage', get_object_vars($data)) && null !== ($data->provisionStage ?? null)) {
            $dataArray['provisionStage'] = $data->provisionStage ?? null;
        }
        if (array_key_exists('indoorMapName', get_object_vars($data)) && null !== ($data->indoorMapName ?? null)) {
            $dataArray['indoorMapName'] = $data->indoorMapName ?? null;
        }
        if (array_key_exists('indoorMapLocation', get_object_vars($data)) && null !== ($data->indoorMapLocation ?? null)) {
            $dataArray['indoorMapLocation'] = $data->indoorMapLocation ?? null;
        }
        if (array_key_exists('deviceGps', get_object_vars($data)) && null !== ($data->deviceGps ?? null)) {
            $dataArray['deviceGps'] = $data->deviceGps ?? null;
        }
        if (array_key_exists('serial', get_object_vars($data)) && null !== ($data->serial ?? null)) {
            $dataArray['serial'] = $data->serial ?? null;
        }
        if (array_key_exists('location', get_object_vars($data)) && null !== ($data->location ?? null)) {
            $dataArray['location'] = $data->location ?? null;
        }
        if (array_key_exists('wlanGroup50Id', get_object_vars($data)) && null !== ($data->wlanGroup50Id ?? null)) {
            $dataArray['wlanGroup50Id'] = $data->wlanGroup50Id ?? null;
        }
        if (array_key_exists('wlanGroup6gId', get_object_vars($data)) && null !== ($data->wlanGroup6gId ?? null)) {
            $dataArray['wlanGroup6gId'] = $data->wlanGroup6gId ?? null;
        }
        if (array_key_exists('registrationState', get_object_vars($data)) && null !== ($data->registrationState ?? null)) {
            $dataArray['registrationState'] = $data->registrationState ?? null;
        }
        if (array_key_exists('zoneId', get_object_vars($data)) && null !== ($data->zoneId ?? null)) {
            $dataArray['zoneId'] = $data->zoneId ?? null;
        }
        if (array_key_exists('zoneFirmwareVersion', get_object_vars($data)) && null !== ($data->zoneFirmwareVersion ?? null)) {
            $dataArray['zoneFirmwareVersion'] = $data->zoneFirmwareVersion ?? null;
        }
        if (array_key_exists('zoneAffinityProfileName', get_object_vars($data)) && null !== ($data->zoneAffinityProfileName ?? null)) {
            $dataArray['zoneAffinityProfileName'] = $data->zoneAffinityProfileName ?? null;
        }
        if (array_key_exists('connectionStatus', get_object_vars($data)) && null !== ($data->connectionStatus ?? null)) {
            $dataArray['connectionStatus'] = $data->connectionStatus ?? null;
        }
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        if (array_key_exists('domainName', get_object_vars($data)) && null !== ($data->domainName ?? null)) {
            $dataArray['domainName'] = $data->domainName ?? null;
        }
        if (array_key_exists('partnerDomainId', get_object_vars($data)) && null !== ($data->partnerDomainId ?? null)) {
            $dataArray['partnerDomainId'] = $data->partnerDomainId ?? null;
        }
        if (array_key_exists('dpIp', get_object_vars($data)) && null !== ($data->dpIp ?? null)) {
            $dataArray['dpIp'] = $data->dpIp ?? null;
        }
        if (array_key_exists('controlBladeId', get_object_vars($data)) && null !== ($data->controlBladeId ?? null)) {
            $dataArray['controlBladeId'] = $data->controlBladeId ?? null;
        }
        if (array_key_exists('isCriticalAp', get_object_vars($data)) && null !== ($data->isCriticalAp ?? null)) {
            $dataArray['isCriticalAp'] = $data->isCriticalAp ?? null;
        }
        if (array_key_exists('crashDump', get_object_vars($data)) && null !== ($data->crashDump ?? null)) {
            $dataArray['crashDump'] = $data->crashDump ?? null;
        }
        if (array_key_exists('cableModemSupported', get_object_vars($data)) && null !== ($data->cableModemSupported ?? null)) {
            $dataArray['cableModemSupported'] = $data->cableModemSupported ?? null;
        }
        if (array_key_exists('cableModemResetSupported', get_object_vars($data)) && null !== ($data->cableModemResetSupported ?? null)) {
            $dataArray['cableModemResetSupported'] = $data->cableModemResetSupported ?? null;
        }
        if (array_key_exists('swapInMac', get_object_vars($data)) && null !== ($data->swapInMac ?? null)) {
            $dataArray['swapInMac'] = $data->swapInMac ?? null;
        }
        if (array_key_exists('swapOutMac', get_object_vars($data)) && null !== ($data->swapOutMac ?? null)) {
            $dataArray['swapOutMac'] = $data->swapOutMac ?? null;
        }
        if (array_key_exists('packetCaptureState', get_object_vars($data)) && null !== ($data->packetCaptureState ?? null)) {
            $dataArray['packetCaptureState'] = $data->packetCaptureState ?? null;
        }
        if (array_key_exists('isOverallHealthStatusFlagged', get_object_vars($data)) && null !== ($data->isOverallHealthStatusFlagged ?? null)) {
            $dataArray['isOverallHealthStatusFlagged'] = $data->isOverallHealthStatusFlagged ?? null;
        }
        if (array_key_exists('isLatency24GFlagged', get_object_vars($data)) && null !== ($data->isLatency24GFlagged ?? null)) {
            $dataArray['isLatency24GFlagged'] = $data->isLatency24GFlagged ?? null;
        }
        if (array_key_exists('isCapacity24GFlagged', get_object_vars($data)) && null !== ($data->isCapacity24GFlagged ?? null)) {
            $dataArray['isCapacity24GFlagged'] = $data->isCapacity24GFlagged ?? null;
        }
        if (array_key_exists('isConnectionFailure24GFlagged', get_object_vars($data)) && null !== ($data->isConnectionFailure24GFlagged ?? null)) {
            $dataArray['isConnectionFailure24GFlagged'] = $data->isConnectionFailure24GFlagged ?? null;
        }
        if (array_key_exists('isLatency50GFlagged', get_object_vars($data)) && null !== ($data->isLatency50GFlagged ?? null)) {
            $dataArray['isLatency50GFlagged'] = $data->isLatency50GFlagged ?? null;
        }
        if (array_key_exists('isCapacity50GFlagged', get_object_vars($data)) && null !== ($data->isCapacity50GFlagged ?? null)) {
            $dataArray['isCapacity50GFlagged'] = $data->isCapacity50GFlagged ?? null;
        }
        if (array_key_exists('isConnectionFailure50GFlagged', get_object_vars($data)) && null !== ($data->isConnectionFailure50GFlagged ?? null)) {
            $dataArray['isConnectionFailure50GFlagged'] = $data->isConnectionFailure50GFlagged ?? null;
        }
        if (array_key_exists('isLatency6GFlagged', get_object_vars($data)) && null !== ($data->isLatency6GFlagged ?? null)) {
            $dataArray['isLatency6GFlagged'] = $data->isLatency6GFlagged ?? null;
        }
        if (array_key_exists('isCapacity6GFlagged', get_object_vars($data)) && null !== ($data->isCapacity6GFlagged ?? null)) {
            $dataArray['isCapacity6GFlagged'] = $data->isCapacity6GFlagged ?? null;
        }
        if (array_key_exists('isConnectionFailure6GFlagged', get_object_vars($data)) && null !== ($data->isConnectionFailure6GFlagged ?? null)) {
            $dataArray['isConnectionFailure6GFlagged'] = $data->isConnectionFailure6GFlagged ?? null;
        }
        if (array_key_exists('isConnectionTotalCountFlagged', get_object_vars($data)) && null !== ($data->isConnectionTotalCountFlagged ?? null)) {
            $dataArray['isConnectionTotalCountFlagged'] = $data->isConnectionTotalCountFlagged ?? null;
        }
        if (array_key_exists('isConnectionFailureFlagged', get_object_vars($data)) && null !== ($data->isConnectionFailureFlagged ?? null)) {
            $dataArray['isConnectionFailureFlagged'] = $data->isConnectionFailureFlagged ?? null;
        }
        if (array_key_exists('isAirtimeUtilization24GFlagged', get_object_vars($data)) && null !== ($data->isAirtimeUtilization24GFlagged ?? null)) {
            $dataArray['isAirtimeUtilization24GFlagged'] = $data->isAirtimeUtilization24GFlagged ?? null;
        }
        if (array_key_exists('isAirtimeUtilization50GFlagged', get_object_vars($data)) && null !== ($data->isAirtimeUtilization50GFlagged ?? null)) {
            $dataArray['isAirtimeUtilization50GFlagged'] = $data->isAirtimeUtilization50GFlagged ?? null;
        }
        if (array_key_exists('isAirtimeUtilization6GFlagged', get_object_vars($data)) && null !== ($data->isAirtimeUtilization6GFlagged ?? null)) {
            $dataArray['isAirtimeUtilization6GFlagged'] = $data->isAirtimeUtilization6GFlagged ?? null;
        }
        if (array_key_exists('eirp24G', get_object_vars($data)) && null !== ($data->eirp24G ?? null)) {
            $dataArray['eirp24G'] = $data->eirp24G ?? null;
        }
        if (array_key_exists('eirp50G', get_object_vars($data)) && null !== ($data->eirp50G ?? null)) {
            $dataArray['eirp50G'] = $data->eirp50G ?? null;
        }
        if (array_key_exists('eirp6G', get_object_vars($data)) && null !== ($data->eirp6G ?? null)) {
            $dataArray['eirp6G'] = $data->eirp6G ?? null;
        }
        if (array_key_exists('supportFips', get_object_vars($data)) && null !== ($data->supportFips ?? null)) {
            $dataArray['supportFips'] = $data->supportFips ?? null;
        }
        if (array_key_exists('fipsEnabled', get_object_vars($data)) && null !== ($data->fipsEnabled ?? null)) {
            $dataArray['fipsEnabled'] = $data->fipsEnabled ?? null;
        }
        if (array_key_exists('uptime', get_object_vars($data)) && null !== ($data->uptime ?? null)) {
            $dataArray['uptime'] = $data->uptime ?? null;
        }
        if (array_key_exists('ipsecSessionTime', get_object_vars($data)) && null !== ($data->ipsecSessionTime ?? null)) {
            $dataArray['ipsecSessionTime'] = $data->ipsecSessionTime ?? null;
        }
        if (array_key_exists('ipsecTxPkts', get_object_vars($data)) && null !== ($data->ipsecTxPkts ?? null)) {
            $dataArray['ipsecTxPkts'] = $data->ipsecTxPkts ?? null;
        }
        if (array_key_exists('ipsecRxPkts', get_object_vars($data)) && null !== ($data->ipsecRxPkts ?? null)) {
            $dataArray['ipsecRxPkts'] = $data->ipsecRxPkts ?? null;
        }
        if (array_key_exists('ipsecTxBytes', get_object_vars($data)) && null !== ($data->ipsecTxBytes ?? null)) {
            $dataArray['ipsecTxBytes'] = $data->ipsecTxBytes ?? null;
        }
        if (array_key_exists('ipsecRxBytes', get_object_vars($data)) && null !== ($data->ipsecRxBytes ?? null)) {
            $dataArray['ipsecRxBytes'] = $data->ipsecRxBytes ?? null;
        }
        if (array_key_exists('ipsecTxDropPkts', get_object_vars($data)) && null !== ($data->ipsecTxDropPkts ?? null)) {
            $dataArray['ipsecTxDropPkts'] = $data->ipsecTxDropPkts ?? null;
        }
        if (array_key_exists('ipsecRxDropPkts', get_object_vars($data)) && null !== ($data->ipsecRxDropPkts ?? null)) {
            $dataArray['ipsecRxDropPkts'] = $data->ipsecRxDropPkts ?? null;
        }
        if (array_key_exists('ipsecTxIdleTime', get_object_vars($data)) && null !== ($data->ipsecTxIdleTime ?? null)) {
            $dataArray['ipsecTxIdleTime'] = $data->ipsecTxIdleTime ?? null;
        }
        if (array_key_exists('ipsecRxIdleTime', get_object_vars($data)) && null !== ($data->ipsecRxIdleTime ?? null)) {
            $dataArray['ipsecRxIdleTime'] = $data->ipsecRxIdleTime ?? null;
        }
        if (array_key_exists('ipType', get_object_vars($data)) && null !== ($data->ipType ?? null)) {
            $dataArray['ipType'] = $data->ipType ?? null;
        }
        if (array_key_exists('ipv6Type', get_object_vars($data)) && null !== ($data->ipv6Type ?? null)) {
            $dataArray['ipv6Type'] = $data->ipv6Type ?? null;
        }
        if (array_key_exists('cellularWanInterface', get_object_vars($data)) && null !== ($data->cellularWanInterface ?? null)) {
            $dataArray['cellularWanInterface'] = $data->cellularWanInterface ?? null;
        }
        if (array_key_exists('cellularConnectionStatus', get_object_vars($data)) && null !== ($data->cellularConnectionStatus ?? null)) {
            $dataArray['cellularConnectionStatus'] = $data->cellularConnectionStatus ?? null;
        }
        if (array_key_exists('cellularSignalStrength', get_object_vars($data)) && null !== ($data->cellularSignalStrength ?? null)) {
            $dataArray['cellularSignalStrength'] = $data->cellularSignalStrength ?? null;
        }
        if (array_key_exists('cellularIMSISIM0', get_object_vars($data)) && null !== ($data->cellularIMSISIM0 ?? null)) {
            $dataArray['cellularIMSISIM0'] = $data->cellularIMSISIM0 ?? null;
        }
        if (array_key_exists('cellularIMSISIM1', get_object_vars($data)) && null !== ($data->cellularIMSISIM1 ?? null)) {
            $dataArray['cellularIMSISIM1'] = $data->cellularIMSISIM1 ?? null;
        }
        if (array_key_exists('cellularICCIDSIM0', get_object_vars($data)) && null !== ($data->cellularICCIDSIM0 ?? null)) {
            $dataArray['cellularICCIDSIM0'] = $data->cellularICCIDSIM0 ?? null;
        }
        if (array_key_exists('cellularICCIDSIM1', get_object_vars($data)) && null !== ($data->cellularICCIDSIM1 ?? null)) {
            $dataArray['cellularICCIDSIM1'] = $data->cellularICCIDSIM1 ?? null;
        }
        if (array_key_exists('cellularIsSIM0Present', get_object_vars($data)) && null !== ($data->cellularIsSIM0Present ?? null)) {
            $dataArray['cellularIsSIM0Present'] = $data->cellularIsSIM0Present ?? null;
        }
        if (array_key_exists('cellularIsSIM1Present', get_object_vars($data)) && null !== ($data->cellularIsSIM1Present ?? null)) {
            $dataArray['cellularIsSIM1Present'] = $data->cellularIsSIM1Present ?? null;
        }
        if (array_key_exists('cellularTxBytesSIM0', get_object_vars($data)) && null !== ($data->cellularTxBytesSIM0 ?? null)) {
            $dataArray['cellularTxBytesSIM0'] = $data->cellularTxBytesSIM0 ?? null;
        }
        if (array_key_exists('cellularTxBytesSIM1', get_object_vars($data)) && null !== ($data->cellularTxBytesSIM1 ?? null)) {
            $dataArray['cellularTxBytesSIM1'] = $data->cellularTxBytesSIM1 ?? null;
        }
        if (array_key_exists('cellularRxBytesSIM0', get_object_vars($data)) && null !== ($data->cellularRxBytesSIM0 ?? null)) {
            $dataArray['cellularRxBytesSIM0'] = $data->cellularRxBytesSIM0 ?? null;
        }
        if (array_key_exists('cellularRxBytesSIM1', get_object_vars($data)) && null !== ($data->cellularRxBytesSIM1 ?? null)) {
            $dataArray['cellularRxBytesSIM1'] = $data->cellularRxBytesSIM1 ?? null;
        }
        if (array_key_exists('cellularActiveSim', get_object_vars($data)) && null !== ($data->cellularActiveSim ?? null)) {
            $dataArray['cellularActiveSim'] = $data->cellularActiveSim ?? null;
        }
        if (array_key_exists('cellularIPaddress', get_object_vars($data)) && null !== ($data->cellularIPaddress ?? null)) {
            $dataArray['cellularIPaddress'] = $data->cellularIPaddress ?? null;
        }
        if (array_key_exists('cellularSubnetMask', get_object_vars($data)) && null !== ($data->cellularSubnetMask ?? null)) {
            $dataArray['cellularSubnetMask'] = $data->cellularSubnetMask ?? null;
        }
        if (array_key_exists('cellularDefaultGateway', get_object_vars($data)) && null !== ($data->cellularDefaultGateway ?? null)) {
            $dataArray['cellularDefaultGateway'] = $data->cellularDefaultGateway ?? null;
        }
        if (array_key_exists('cellularOperator', get_object_vars($data)) && null !== ($data->cellularOperator ?? null)) {
            $dataArray['cellularOperator'] = $data->cellularOperator ?? null;
        }
        if (array_key_exists('cellular3G4GChannel', get_object_vars($data)) && null !== ($data->cellular3G4GChannel ?? null)) {
            $dataArray['cellular3G4GChannel'] = $data->cellular3G4GChannel ?? null;
        }
        if (array_key_exists('cellularCountry', get_object_vars($data)) && null !== ($data->cellularCountry ?? null)) {
            $dataArray['cellularCountry'] = $data->cellularCountry ?? null;
        }
        if (array_key_exists('cellularRadioUptime', get_object_vars($data)) && null !== ($data->cellularRadioUptime ?? null)) {
            $dataArray['cellularRadioUptime'] = $data->cellularRadioUptime ?? null;
        }
        if (array_key_exists('cellularGpsHistory', get_object_vars($data)) && null !== ($data->cellularGpsHistory ?? null)) {
            $values = [];
            foreach ($data->cellularGpsHistory ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['cellularGpsHistory'] = $values;
        }
        if (array_key_exists('medianTxRadioMCSRate24G', get_object_vars($data)) && null !== ($data->medianTxRadioMCSRate24G ?? null)) {
            $dataArray['medianTxRadioMCSRate24G'] = $data->medianTxRadioMCSRate24G ?? null;
        }
        if (array_key_exists('medianTxRadioMCSRate50G', get_object_vars($data)) && null !== ($data->medianTxRadioMCSRate50G ?? null)) {
            $dataArray['medianTxRadioMCSRate50G'] = $data->medianTxRadioMCSRate50G ?? null;
        }
        if (array_key_exists('medianTxRadioMCSRate6G', get_object_vars($data)) && null !== ($data->medianTxRadioMCSRate6G ?? null)) {
            $dataArray['medianTxRadioMCSRate6G'] = $data->medianTxRadioMCSRate6G ?? null;
        }
        if (array_key_exists('medianRxRadioMCSRate24G', get_object_vars($data)) && null !== ($data->medianRxRadioMCSRate24G ?? null)) {
            $dataArray['medianRxRadioMCSRate24G'] = $data->medianRxRadioMCSRate24G ?? null;
        }
        if (array_key_exists('medianRxRadioMCSRate50G', get_object_vars($data)) && null !== ($data->medianRxRadioMCSRate50G ?? null)) {
            $dataArray['medianRxRadioMCSRate50G'] = $data->medianRxRadioMCSRate50G ?? null;
        }
        if (array_key_exists('medianRxRadioMCSRate6G', get_object_vars($data)) && null !== ($data->medianRxRadioMCSRate6G ?? null)) {
            $dataArray['medianRxRadioMCSRate6G'] = $data->medianRxRadioMCSRate6G ?? null;
        }
        if (array_key_exists('monitoringEnabled', get_object_vars($data)) && null !== ($data->monitoringEnabled ?? null)) {
            $dataArray['monitoringEnabled'] = $data->monitoringEnabled ?? null;
        }
        if (array_key_exists('txPowerOffset24G', get_object_vars($data)) && null !== ($data->txPowerOffset24G ?? null)) {
            $dataArray['txPowerOffset24G'] = $data->txPowerOffset24G ?? null;
        }
        if (array_key_exists('txPowerOffset5G', get_object_vars($data)) && null !== ($data->txPowerOffset5G ?? null)) {
            $dataArray['txPowerOffset5G'] = $data->txPowerOffset5G ?? null;
        }
        if (array_key_exists('txPowerOffset6G', get_object_vars($data)) && null !== ($data->txPowerOffset6G ?? null)) {
            $dataArray['txPowerOffset6G'] = $data->txPowerOffset6G ?? null;
        }
        if (array_key_exists('rxDesense24G', get_object_vars($data)) && null !== ($data->rxDesense24G ?? null)) {
            $dataArray['rxDesense24G'] = $data->rxDesense24G ?? null;
        }
        if (array_key_exists('rxDesense5G', get_object_vars($data)) && null !== ($data->rxDesense5G ?? null)) {
            $dataArray['rxDesense5G'] = $data->rxDesense5G ?? null;
        }
        if (array_key_exists('rxDesense6G', get_object_vars($data)) && null !== ($data->rxDesense6G ?? null)) {
            $dataArray['rxDesense6G'] = $data->rxDesense6G ?? null;
        }
        if (array_key_exists('cumulativeTx24G', get_object_vars($data)) && null !== ($data->cumulativeTx24G ?? null)) {
            $dataArray['cumulativeTx24G'] = $data->cumulativeTx24G ?? null;
        }
        if (array_key_exists('cumulativeRx24G', get_object_vars($data)) && null !== ($data->cumulativeRx24G ?? null)) {
            $dataArray['cumulativeRx24G'] = $data->cumulativeRx24G ?? null;
        }
        if (array_key_exists('cumulativeTxRx24G', get_object_vars($data)) && null !== ($data->cumulativeTxRx24G ?? null)) {
            $dataArray['cumulativeTxRx24G'] = $data->cumulativeTxRx24G ?? null;
        }
        if (array_key_exists('cumulativeTx5G', get_object_vars($data)) && null !== ($data->cumulativeTx5G ?? null)) {
            $dataArray['cumulativeTx5G'] = $data->cumulativeTx5G ?? null;
        }
        if (array_key_exists('cumulativeRx5G', get_object_vars($data)) && null !== ($data->cumulativeRx5G ?? null)) {
            $dataArray['cumulativeRx5G'] = $data->cumulativeRx5G ?? null;
        }
        if (array_key_exists('cumulativeTxRx5G', get_object_vars($data)) && null !== ($data->cumulativeTxRx5G ?? null)) {
            $dataArray['cumulativeTxRx5G'] = $data->cumulativeTxRx5G ?? null;
        }
        if (array_key_exists('cumulativeTx6G', get_object_vars($data)) && null !== ($data->cumulativeTx6G ?? null)) {
            $dataArray['cumulativeTx6G'] = $data->cumulativeTx6G ?? null;
        }
        if (array_key_exists('cumulativeRx6G', get_object_vars($data)) && null !== ($data->cumulativeRx6G ?? null)) {
            $dataArray['cumulativeRx6G'] = $data->cumulativeRx6G ?? null;
        }
        if (array_key_exists('cumulativeTxRx6G', get_object_vars($data)) && null !== ($data->cumulativeTxRx6G ?? null)) {
            $dataArray['cumulativeTxRx6G'] = $data->cumulativeTxRx6G ?? null;
        }
        if (array_key_exists('isDual5gMode', get_object_vars($data)) && null !== ($data->isDual5gMode ?? null)) {
            $dataArray['isDual5gMode'] = $data->isDual5gMode ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryCreateApQuery::class => false];
    }
}