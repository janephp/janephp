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
class WlanWlanAdvancedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAdvanced::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAdvanced::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAdvanced();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('uplinkRate', $data) && \is_int($data['uplinkRate'])) {
            $data['uplinkRate'] = (float) $data['uplinkRate'];
        }
        if (\array_key_exists('downlinkRate', $data) && \is_int($data['downlinkRate'])) {
            $data['downlinkRate'] = (float) $data['downlinkRate'];
        }
        if (\array_key_exists('clientIsolationEnabled', $data) && \is_int($data['clientIsolationEnabled'])) {
            $data['clientIsolationEnabled'] = (bool) $data['clientIsolationEnabled'];
        }
        if (\array_key_exists('clientIsolationUnicastEnabled', $data) && \is_int($data['clientIsolationUnicastEnabled'])) {
            $data['clientIsolationUnicastEnabled'] = (bool) $data['clientIsolationUnicastEnabled'];
        }
        if (\array_key_exists('clientIsolationMulticastEnabled', $data) && \is_int($data['clientIsolationMulticastEnabled'])) {
            $data['clientIsolationMulticastEnabled'] = (bool) $data['clientIsolationMulticastEnabled'];
        }
        if (\array_key_exists('clientIsolationAutoVrrpEnabled', $data) && \is_int($data['clientIsolationAutoVrrpEnabled'])) {
            $data['clientIsolationAutoVrrpEnabled'] = (bool) $data['clientIsolationAutoVrrpEnabled'];
        }
        if (\array_key_exists('hideSsidEnabled', $data) && \is_int($data['hideSsidEnabled'])) {
            $data['hideSsidEnabled'] = (bool) $data['hideSsidEnabled'];
        }
        if (\array_key_exists('hs20Onboarding', $data) && \is_int($data['hs20Onboarding'])) {
            $data['hs20Onboarding'] = (bool) $data['hs20Onboarding'];
        }
        if (\array_key_exists('gtkRekeyEnabled', $data) && \is_int($data['gtkRekeyEnabled'])) {
            $data['gtkRekeyEnabled'] = (bool) $data['gtkRekeyEnabled'];
        }
        if (\array_key_exists('wifi6Enabled', $data) && \is_int($data['wifi6Enabled'])) {
            $data['wifi6Enabled'] = (bool) $data['wifi6Enabled'];
        }
        if (\array_key_exists('dgafEnabled', $data) && \is_int($data['dgafEnabled'])) {
            $data['dgafEnabled'] = (bool) $data['dgafEnabled'];
        }
        if (\array_key_exists('clientLoadBalancingEnabled', $data) && \is_int($data['clientLoadBalancingEnabled'])) {
            $data['clientLoadBalancingEnabled'] = (bool) $data['clientLoadBalancingEnabled'];
        }
        if (\array_key_exists('proxyARPEnabled', $data) && \is_int($data['proxyARPEnabled'])) {
            $data['proxyARPEnabled'] = (bool) $data['proxyARPEnabled'];
        }
        if (\array_key_exists('ndProxyEnabled', $data) && \is_int($data['ndProxyEnabled'])) {
            $data['ndProxyEnabled'] = (bool) $data['ndProxyEnabled'];
        }
        if (\array_key_exists('suppressNsEnabled', $data) && \is_int($data['suppressNsEnabled'])) {
            $data['suppressNsEnabled'] = (bool) $data['suppressNsEnabled'];
        }
        if (\array_key_exists('raProxyEnabled', $data) && \is_int($data['raProxyEnabled'])) {
            $data['raProxyEnabled'] = (bool) $data['raProxyEnabled'];
        }
        if (\array_key_exists('rsraGuardEnabled', $data) && \is_int($data['rsraGuardEnabled'])) {
            $data['rsraGuardEnabled'] = (bool) $data['rsraGuardEnabled'];
        }
        if (\array_key_exists('raThrottlingEnabled', $data) && \is_int($data['raThrottlingEnabled'])) {
            $data['raThrottlingEnabled'] = (bool) $data['raThrottlingEnabled'];
        }
        if (\array_key_exists('support80211dEnabled', $data) && \is_int($data['support80211dEnabled'])) {
            $data['support80211dEnabled'] = (bool) $data['support80211dEnabled'];
        }
        if (\array_key_exists('support80211kEnabled', $data) && \is_int($data['support80211kEnabled'])) {
            $data['support80211kEnabled'] = (bool) $data['support80211kEnabled'];
        }
        if (\array_key_exists('antiSpoofingEnabled', $data) && \is_int($data['antiSpoofingEnabled'])) {
            $data['antiSpoofingEnabled'] = (bool) $data['antiSpoofingEnabled'];
        }
        if (\array_key_exists('dhcpOption82Enabled', $data) && \is_int($data['dhcpOption82Enabled'])) {
            $data['dhcpOption82Enabled'] = (bool) $data['dhcpOption82Enabled'];
        }
        if (\array_key_exists('unauthClientStatsEnabled', $data) && \is_int($data['unauthClientStatsEnabled'])) {
            $data['unauthClientStatsEnabled'] = (bool) $data['unauthClientStatsEnabled'];
        }
        if (\array_key_exists('clientFingerprintingEnabled', $data) && \is_int($data['clientFingerprintingEnabled'])) {
            $data['clientFingerprintingEnabled'] = (bool) $data['clientFingerprintingEnabled'];
        }
        if (\array_key_exists('multicastFilterDrop', $data) && \is_int($data['multicastFilterDrop'])) {
            $data['multicastFilterDrop'] = (bool) $data['multicastFilterDrop'];
        }
        if (\array_key_exists('ofdmOnlyEnabled', $data) && \is_int($data['ofdmOnlyEnabled'])) {
            $data['ofdmOnlyEnabled'] = (bool) $data['ofdmOnlyEnabled'];
        }
        if (\array_key_exists('pmkCachingEnabled', $data) && \is_int($data['pmkCachingEnabled'])) {
            $data['pmkCachingEnabled'] = (bool) $data['pmkCachingEnabled'];
        }
        if (\array_key_exists('okcEnabled', $data) && \is_int($data['okcEnabled'])) {
            $data['okcEnabled'] = (bool) $data['okcEnabled'];
        }
        if (\array_key_exists('avcEnabled', $data) && \is_int($data['avcEnabled'])) {
            $data['avcEnabled'] = (bool) $data['avcEnabled'];
        }
        if (\array_key_exists('clientVirtualIdExtractionEnabled', $data) && \is_int($data['clientVirtualIdExtractionEnabled'])) {
            $data['clientVirtualIdExtractionEnabled'] = (bool) $data['clientVirtualIdExtractionEnabled'];
        }
        if (\array_key_exists('urlFilteringPolicyEnabled', $data) && \is_int($data['urlFilteringPolicyEnabled'])) {
            $data['urlFilteringPolicyEnabled'] = (bool) $data['urlFilteringPolicyEnabled'];
        }
        if (\array_key_exists('wifiCallingPolicyEnabled', $data) && \is_int($data['wifiCallingPolicyEnabled'])) {
            $data['wifiCallingPolicyEnabled'] = (bool) $data['wifiCallingPolicyEnabled'];
        }
        if (\array_key_exists('uplinkEnabled', $data) && \is_int($data['uplinkEnabled'])) {
            $data['uplinkEnabled'] = (bool) $data['uplinkEnabled'];
        }
        if (\array_key_exists('downlinkEnabled', $data) && \is_int($data['downlinkEnabled'])) {
            $data['downlinkEnabled'] = (bool) $data['downlinkEnabled'];
        }
        if (\array_key_exists('multicastUplinkRateLimitEnabled', $data) && \is_int($data['multicastUplinkRateLimitEnabled'])) {
            $data['multicastUplinkRateLimitEnabled'] = (bool) $data['multicastUplinkRateLimitEnabled'];
        }
        if (\array_key_exists('multicastDownlinkRateLimitEnabled', $data) && \is_int($data['multicastDownlinkRateLimitEnabled'])) {
            $data['multicastDownlinkRateLimitEnabled'] = (bool) $data['multicastDownlinkRateLimitEnabled'];
        }
        if (\array_key_exists('multicastUplinkRateLimit6gEnabled', $data) && \is_int($data['multicastUplinkRateLimit6gEnabled'])) {
            $data['multicastUplinkRateLimit6gEnabled'] = (bool) $data['multicastUplinkRateLimit6gEnabled'];
        }
        if (\array_key_exists('multicastDownlinkRateLimit6gEnabled', $data) && \is_int($data['multicastDownlinkRateLimit6gEnabled'])) {
            $data['multicastDownlinkRateLimit6gEnabled'] = (bool) $data['multicastDownlinkRateLimit6gEnabled'];
        }
        if (\array_key_exists('flowLogEnabled', $data) && \is_int($data['flowLogEnabled'])) {
            $data['flowLogEnabled'] = (bool) $data['flowLogEnabled'];
        }
        if (\array_key_exists('hdOverheadOptimizeEnable', $data) && \is_int($data['hdOverheadOptimizeEnable'])) {
            $data['hdOverheadOptimizeEnable'] = (bool) $data['hdOverheadOptimizeEnable'];
        }
        if (\array_key_exists('transientClientMgmtEnable', $data) && \is_int($data['transientClientMgmtEnable'])) {
            $data['transientClientMgmtEnable'] = (bool) $data['transientClientMgmtEnable'];
        }
        if (\array_key_exists('dropRandomProbesEnabled', $data) && \is_int($data['dropRandomProbesEnabled'])) {
            $data['dropRandomProbesEnabled'] = (bool) $data['dropRandomProbesEnabled'];
        }
        if (\array_key_exists('oceEnabled', $data) && \is_int($data['oceEnabled'])) {
            $data['oceEnabled'] = (bool) $data['oceEnabled'];
        }
        if (\array_key_exists('oceReduceNeighborReportEnabled', $data) && \is_int($data['oceReduceNeighborReportEnabled'])) {
            $data['oceReduceNeighborReportEnabled'] = (bool) $data['oceReduceNeighborReportEnabled'];
        }
        if (\array_key_exists('oceApChannelReportEnabled', $data) && \is_int($data['oceApChannelReportEnabled'])) {
            $data['oceApChannelReportEnabled'] = (bool) $data['oceApChannelReportEnabled'];
        }
        if (\array_key_exists('clientIsolationEnabled', $data)) {
            $object->setClientIsolationEnabled($data['clientIsolationEnabled']);
        }
        if (\array_key_exists('clientIsolationUnicastEnabled', $data)) {
            $object->setClientIsolationUnicastEnabled($data['clientIsolationUnicastEnabled']);
        }
        if (\array_key_exists('clientIsolationMulticastEnabled', $data)) {
            $object->setClientIsolationMulticastEnabled($data['clientIsolationMulticastEnabled']);
        }
        if (\array_key_exists('clientIsolationAutoVrrpEnabled', $data)) {
            $object->setClientIsolationAutoVrrpEnabled($data['clientIsolationAutoVrrpEnabled']);
        }
        if (\array_key_exists('clientIsolationWhitelist', $data)) {
            $object->setClientIsolationWhitelist($this->denormalizer->denormalize($data['clientIsolationWhitelist'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('priority', $data)) {
            $object->setPriority($data['priority']);
        }
        if (\array_key_exists('hideSsidEnabled', $data)) {
            $object->setHideSsidEnabled($data['hideSsidEnabled']);
        }
        if (\array_key_exists('hs20Onboarding', $data)) {
            $object->setHs20Onboarding($data['hs20Onboarding']);
        }
        if (\array_key_exists('maxClientsPerRadio', $data)) {
            $object->setMaxClientsPerRadio($data['maxClientsPerRadio']);
        }
        if (\array_key_exists('clientIdleTimeoutSec', $data)) {
            $object->setClientIdleTimeoutSec($data['clientIdleTimeoutSec']);
        }
        if (\array_key_exists('gtkRekeyEnabled', $data)) {
            $object->setGtkRekeyEnabled($data['gtkRekeyEnabled']);
        }
        if (\array_key_exists('wifi6Enabled', $data)) {
            $object->setWifi6Enabled($data['wifi6Enabled']);
        }
        if (\array_key_exists('userSessionTimeout', $data)) {
            $object->setUserSessionTimeout($data['userSessionTimeout']);
        }
        if (\array_key_exists('dgafEnabled', $data)) {
            $object->setDgafEnabled($data['dgafEnabled']);
        }
        if (\array_key_exists('clientLoadBalancingEnabled', $data)) {
            $object->setClientLoadBalancingEnabled($data['clientLoadBalancingEnabled']);
        }
        if (\array_key_exists('proxyARPEnabled', $data)) {
            $object->setProxyARPEnabled($data['proxyARPEnabled']);
        }
        if (\array_key_exists('ndProxyEnabled', $data)) {
            $object->setNdProxyEnabled($data['ndProxyEnabled']);
        }
        if (\array_key_exists('suppressNsEnabled', $data)) {
            $object->setSuppressNsEnabled($data['suppressNsEnabled']);
        }
        if (\array_key_exists('raProxyEnabled', $data)) {
            $object->setRaProxyEnabled($data['raProxyEnabled']);
        }
        if (\array_key_exists('rsraGuardEnabled', $data)) {
            $object->setRsraGuardEnabled($data['rsraGuardEnabled']);
        }
        if (\array_key_exists('raThrottlingEnabled', $data)) {
            $object->setRaThrottlingEnabled($data['raThrottlingEnabled']);
        }
        if (\array_key_exists('maxAllowedRA', $data)) {
            $object->setMaxAllowedRA($data['maxAllowedRA']);
        }
        if (\array_key_exists('raInterval', $data)) {
            $object->setRaInterval($data['raInterval']);
        }
        if (\array_key_exists('support80211dEnabled', $data)) {
            $object->setSupport80211dEnabled($data['support80211dEnabled']);
        }
        if (\array_key_exists('support80211kEnabled', $data)) {
            $object->setSupport80211kEnabled($data['support80211kEnabled']);
        }
        if (\array_key_exists('antiSpoofingEnabled', $data)) {
            $object->setAntiSpoofingEnabled($data['antiSpoofingEnabled']);
        }
        if (\array_key_exists('arpRequestRateLimit', $data)) {
            $object->setArpRequestRateLimit($data['arpRequestRateLimit']);
        }
        if (\array_key_exists('dhcpRequestRateLimit', $data)) {
            $object->setDhcpRequestRateLimit($data['dhcpRequestRateLimit']);
        }
        if (\array_key_exists('forceClientDHCPTimeoutSec', $data)) {
            $object->setForceClientDHCPTimeoutSec($data['forceClientDHCPTimeoutSec']);
        }
        if (\array_key_exists('dhcpOption82Enabled', $data)) {
            $object->setDhcpOption82Enabled($data['dhcpOption82Enabled']);
        }
        if (\array_key_exists('dhcp82Format', $data)) {
            $object->setDhcp82Format($data['dhcp82Format']);
        }
        if (\array_key_exists('dhcp82SubOpt1Format', $data)) {
            $object->setDhcp82SubOpt1Format($data['dhcp82SubOpt1Format']);
        }
        if (\array_key_exists('dhcp82SubOpt2Format', $data)) {
            $object->setDhcp82SubOpt2Format($data['dhcp82SubOpt2Format']);
        }
        if (\array_key_exists('dhcp82SubOpt150Format', $data)) {
            $object->setDhcp82SubOpt150Format($data['dhcp82SubOpt150Format']);
        }
        if (\array_key_exists('dhcp82SubOpt151Format', $data)) {
            $object->setDhcp82SubOpt151Format($data['dhcp82SubOpt151Format']);
        }
        if (\array_key_exists('dhcp82SubOpt151AreaName', $data)) {
            $object->setDhcp82SubOpt151AreaName($data['dhcp82SubOpt151AreaName']);
        }
        if (\array_key_exists('dhcp82MacFormat', $data)) {
            $object->setDhcp82MacFormat($data['dhcp82MacFormat']);
        }
        if (\array_key_exists('unauthClientStatsEnabled', $data)) {
            $object->setUnauthClientStatsEnabled($data['unauthClientStatsEnabled']);
        }
        if (\array_key_exists('clientFingerprintingEnabled', $data)) {
            $object->setClientFingerprintingEnabled($data['clientFingerprintingEnabled']);
        }
        if (\array_key_exists('multicastFilterDrop', $data)) {
            $object->setMulticastFilterDrop($data['multicastFilterDrop']);
        }
        if (\array_key_exists('ofdmOnlyEnabled', $data)) {
            $object->setOfdmOnlyEnabled($data['ofdmOnlyEnabled']);
        }
        if (\array_key_exists('bandBalancing', $data)) {
            $object->setBandBalancing($data['bandBalancing']);
        }
        if (\array_key_exists('bssMinRateMbps', $data)) {
            $object->setBssMinRateMbps($data['bssMinRateMbps']);
        }
        if (\array_key_exists('mgmtTxRateMbps', $data)) {
            $object->setMgmtTxRateMbps($data['mgmtTxRateMbps']);
        }
        if (\array_key_exists('pmkCachingEnabled', $data)) {
            $object->setPmkCachingEnabled($data['pmkCachingEnabled']);
        }
        if (\array_key_exists('okcEnabled', $data)) {
            $object->setOkcEnabled($data['okcEnabled']);
        }
        if (\array_key_exists('avcEnabled', $data)) {
            $object->setAvcEnabled($data['avcEnabled']);
        }
        if (\array_key_exists('clientVirtualIdExtractionEnabled', $data)) {
            $object->setClientVirtualIdExtractionEnabled($data['clientVirtualIdExtractionEnabled']);
        }
        if (\array_key_exists('urlFilteringPolicyEnabled', $data)) {
            $object->setUrlFilteringPolicyEnabled($data['urlFilteringPolicyEnabled']);
        }
        if (\array_key_exists('urlFilteringPolicyId', $data)) {
            $object->setUrlFilteringPolicyId($data['urlFilteringPolicyId']);
        }
        if (\array_key_exists('wifiCallingPolicyEnabled', $data)) {
            $object->setWifiCallingPolicyEnabled($data['wifiCallingPolicyEnabled']);
        }
        if (\array_key_exists('wifiCallingPolicyIds', $data)) {
            $values = [];
            foreach ($data['wifiCallingPolicyIds'] as $value) {
                $values[] = $value;
            }
            $object->setWifiCallingPolicyIds($values);
        }
        if (\array_key_exists('uplinkEnabled', $data)) {
            $object->setUplinkEnabled($data['uplinkEnabled']);
        }
        if (\array_key_exists('uplinkRate', $data)) {
            $object->setUplinkRate($data['uplinkRate']);
        }
        if (\array_key_exists('downlinkEnabled', $data)) {
            $object->setDownlinkEnabled($data['downlinkEnabled']);
        }
        if (\array_key_exists('downlinkRate', $data)) {
            $object->setDownlinkRate($data['downlinkRate']);
        }
        if (\array_key_exists('multicastUplinkRateLimitEnabled', $data)) {
            $object->setMulticastUplinkRateLimitEnabled($data['multicastUplinkRateLimitEnabled']);
        }
        if (\array_key_exists('multicastUplinkRateLimit', $data)) {
            $object->setMulticastUplinkRateLimit($data['multicastUplinkRateLimit']);
        }
        if (\array_key_exists('multicastDownlinkRateLimitEnabled', $data)) {
            $object->setMulticastDownlinkRateLimitEnabled($data['multicastDownlinkRateLimitEnabled']);
        }
        if (\array_key_exists('multicastDownlinkRateLimit', $data)) {
            $object->setMulticastDownlinkRateLimit($data['multicastDownlinkRateLimit']);
        }
        if (\array_key_exists('multicastUplinkRateLimit6gEnabled', $data)) {
            $object->setMulticastUplinkRateLimit6gEnabled($data['multicastUplinkRateLimit6gEnabled']);
        }
        if (\array_key_exists('multicastDownlinkRateLimit6gEnabled', $data)) {
            $object->setMulticastDownlinkRateLimit6gEnabled($data['multicastDownlinkRateLimit6gEnabled']);
        }
        if (\array_key_exists('ratePerSTAUplink', $data)) {
            $object->setRatePerSTAUplink($data['ratePerSTAUplink']);
        }
        if (\array_key_exists('ratePerSTADownlink', $data)) {
            $object->setRatePerSTADownlink($data['ratePerSTADownlink']);
        }
        if (\array_key_exists('dtimInterval', $data)) {
            $object->setDtimInterval($data['dtimInterval']);
        }
        if (\array_key_exists('directedThreshold', $data)) {
            $object->setDirectedThreshold($data['directedThreshold']);
        }
        if (\array_key_exists('flowLogEnabled', $data)) {
            $object->setFlowLogEnabled($data['flowLogEnabled']);
        }
        if (\array_key_exists('hdOverheadOptimizeEnable', $data)) {
            $object->setHdOverheadOptimizeEnable($data['hdOverheadOptimizeEnable']);
        }
        if (\array_key_exists('probeRssiThr', $data)) {
            $object->setProbeRssiThr($data['probeRssiThr']);
        }
        if (\array_key_exists('transientClientMgmtEnable', $data)) {
            $object->setTransientClientMgmtEnable($data['transientClientMgmtEnable']);
        }
        if (\array_key_exists('joinIgnoreTimeout', $data)) {
            $object->setJoinIgnoreTimeout($data['joinIgnoreTimeout']);
        }
        if (\array_key_exists('joinAcceptTimeout', $data)) {
            $object->setJoinAcceptTimeout($data['joinAcceptTimeout']);
        }
        if (\array_key_exists('joinIgnoreThr', $data)) {
            $object->setJoinIgnoreThr($data['joinIgnoreThr']);
        }
        if (\array_key_exists('dropRandomProbesEnabled', $data)) {
            $object->setDropRandomProbesEnabled($data['dropRandomProbesEnabled']);
        }
        if (\array_key_exists('authRssiThr', $data)) {
            $object->setAuthRssiThr($data['authRssiThr']);
        }
        if (\array_key_exists('assocRssiThr', $data)) {
            $object->setAssocRssiThr($data['assocRssiThr']);
        }
        if (\array_key_exists('oceEnabled', $data)) {
            $object->setOceEnabled($data['oceEnabled']);
        }
        if (\array_key_exists('oceBroadcastProbeResponseDelay', $data)) {
            $object->setOceBroadcastProbeResponseDelay($data['oceBroadcastProbeResponseDelay']);
        }
        if (\array_key_exists('oceRssiBasedAssociationRejectionThreshold', $data)) {
            $object->setOceRssiBasedAssociationRejectionThreshold($data['oceRssiBasedAssociationRejectionThreshold']);
        }
        if (\array_key_exists('oceReduceNeighborReportEnabled', $data)) {
            $object->setOceReduceNeighborReportEnabled($data['oceReduceNeighborReportEnabled']);
        }
        if (\array_key_exists('oceApChannelReportEnabled', $data)) {
            $object->setOceApChannelReportEnabled($data['oceApChannelReportEnabled']);
        }
        if (\array_key_exists('fils', $data)) {
            $object->setFils($this->denormalizer->denormalize($data['fils'], \Jane\Component\OpenApi3\Tests\Expected\Model\WlanFastInitialLinkSetup::class, 'json', $context));
        }
        if (\array_key_exists('dhcp82SubOptRadiusFormat', $data)) {
            $object->setDhcp82SubOptRadiusFormat($data['dhcp82SubOptRadiusFormat']);
        }
        if (\array_key_exists('dnsSpoofingProfileId', $data)) {
            $object->setDnsSpoofingProfileId($data['dnsSpoofingProfileId']);
        }
        if (\array_key_exists('vlanNameProfileId', $data)) {
            $object->setVlanNameProfileId($data['vlanNameProfileId']);
        }
        if (\array_key_exists('userRoleAccess', $data)) {
            $object->setUserRoleAccess($this->denormalizer->denormalize($data['userRoleAccess'], \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAdvancedUserRoleAccess::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('clientIsolationEnabled') && null !== $data->getClientIsolationEnabled()) {
            $dataArray['clientIsolationEnabled'] = $data->getClientIsolationEnabled();
        }
        if ($data->isInitialized('clientIsolationUnicastEnabled') && null !== $data->getClientIsolationUnicastEnabled()) {
            $dataArray['clientIsolationUnicastEnabled'] = $data->getClientIsolationUnicastEnabled();
        }
        if ($data->isInitialized('clientIsolationMulticastEnabled') && null !== $data->getClientIsolationMulticastEnabled()) {
            $dataArray['clientIsolationMulticastEnabled'] = $data->getClientIsolationMulticastEnabled();
        }
        if ($data->isInitialized('clientIsolationAutoVrrpEnabled') && null !== $data->getClientIsolationAutoVrrpEnabled()) {
            $dataArray['clientIsolationAutoVrrpEnabled'] = $data->getClientIsolationAutoVrrpEnabled();
        }
        if ($data->isInitialized('clientIsolationWhitelist') && null !== $data->getClientIsolationWhitelist()) {
            $dataArray['clientIsolationWhitelist'] = $this->normalizer->normalize($data->getClientIsolationWhitelist(), 'json', $context);
        }
        if ($data->isInitialized('priority') && null !== $data->getPriority()) {
            $dataArray['priority'] = $data->getPriority();
        }
        if ($data->isInitialized('hideSsidEnabled') && null !== $data->getHideSsidEnabled()) {
            $dataArray['hideSsidEnabled'] = $data->getHideSsidEnabled();
        }
        if ($data->isInitialized('hs20Onboarding') && null !== $data->getHs20Onboarding()) {
            $dataArray['hs20Onboarding'] = $data->getHs20Onboarding();
        }
        if ($data->isInitialized('maxClientsPerRadio') && null !== $data->getMaxClientsPerRadio()) {
            $dataArray['maxClientsPerRadio'] = $data->getMaxClientsPerRadio();
        }
        if ($data->isInitialized('clientIdleTimeoutSec') && null !== $data->getClientIdleTimeoutSec()) {
            $dataArray['clientIdleTimeoutSec'] = $data->getClientIdleTimeoutSec();
        }
        if ($data->isInitialized('gtkRekeyEnabled') && null !== $data->getGtkRekeyEnabled()) {
            $dataArray['gtkRekeyEnabled'] = $data->getGtkRekeyEnabled();
        }
        if ($data->isInitialized('wifi6Enabled') && null !== $data->getWifi6Enabled()) {
            $dataArray['wifi6Enabled'] = $data->getWifi6Enabled();
        }
        if ($data->isInitialized('userSessionTimeout') && null !== $data->getUserSessionTimeout()) {
            $dataArray['userSessionTimeout'] = $data->getUserSessionTimeout();
        }
        if ($data->isInitialized('dgafEnabled') && null !== $data->getDgafEnabled()) {
            $dataArray['dgafEnabled'] = $data->getDgafEnabled();
        }
        if ($data->isInitialized('clientLoadBalancingEnabled') && null !== $data->getClientLoadBalancingEnabled()) {
            $dataArray['clientLoadBalancingEnabled'] = $data->getClientLoadBalancingEnabled();
        }
        if ($data->isInitialized('proxyARPEnabled') && null !== $data->getProxyARPEnabled()) {
            $dataArray['proxyARPEnabled'] = $data->getProxyARPEnabled();
        }
        if ($data->isInitialized('ndProxyEnabled') && null !== $data->getNdProxyEnabled()) {
            $dataArray['ndProxyEnabled'] = $data->getNdProxyEnabled();
        }
        if ($data->isInitialized('suppressNsEnabled') && null !== $data->getSuppressNsEnabled()) {
            $dataArray['suppressNsEnabled'] = $data->getSuppressNsEnabled();
        }
        if ($data->isInitialized('raProxyEnabled') && null !== $data->getRaProxyEnabled()) {
            $dataArray['raProxyEnabled'] = $data->getRaProxyEnabled();
        }
        if ($data->isInitialized('rsraGuardEnabled') && null !== $data->getRsraGuardEnabled()) {
            $dataArray['rsraGuardEnabled'] = $data->getRsraGuardEnabled();
        }
        if ($data->isInitialized('raThrottlingEnabled') && null !== $data->getRaThrottlingEnabled()) {
            $dataArray['raThrottlingEnabled'] = $data->getRaThrottlingEnabled();
        }
        if ($data->isInitialized('maxAllowedRA') && null !== $data->getMaxAllowedRA()) {
            $dataArray['maxAllowedRA'] = $data->getMaxAllowedRA();
        }
        if ($data->isInitialized('raInterval') && null !== $data->getRaInterval()) {
            $dataArray['raInterval'] = $data->getRaInterval();
        }
        if ($data->isInitialized('support80211dEnabled') && null !== $data->getSupport80211dEnabled()) {
            $dataArray['support80211dEnabled'] = $data->getSupport80211dEnabled();
        }
        if ($data->isInitialized('support80211kEnabled') && null !== $data->getSupport80211kEnabled()) {
            $dataArray['support80211kEnabled'] = $data->getSupport80211kEnabled();
        }
        if ($data->isInitialized('antiSpoofingEnabled') && null !== $data->getAntiSpoofingEnabled()) {
            $dataArray['antiSpoofingEnabled'] = $data->getAntiSpoofingEnabled();
        }
        if ($data->isInitialized('arpRequestRateLimit') && null !== $data->getArpRequestRateLimit()) {
            $dataArray['arpRequestRateLimit'] = $data->getArpRequestRateLimit();
        }
        if ($data->isInitialized('dhcpRequestRateLimit') && null !== $data->getDhcpRequestRateLimit()) {
            $dataArray['dhcpRequestRateLimit'] = $data->getDhcpRequestRateLimit();
        }
        if ($data->isInitialized('forceClientDHCPTimeoutSec') && null !== $data->getForceClientDHCPTimeoutSec()) {
            $dataArray['forceClientDHCPTimeoutSec'] = $data->getForceClientDHCPTimeoutSec();
        }
        if ($data->isInitialized('dhcpOption82Enabled') && null !== $data->getDhcpOption82Enabled()) {
            $dataArray['dhcpOption82Enabled'] = $data->getDhcpOption82Enabled();
        }
        if ($data->isInitialized('dhcp82Format') && null !== $data->getDhcp82Format()) {
            $dataArray['dhcp82Format'] = $data->getDhcp82Format();
        }
        if ($data->isInitialized('dhcp82SubOpt1Format') && null !== $data->getDhcp82SubOpt1Format()) {
            $dataArray['dhcp82SubOpt1Format'] = $data->getDhcp82SubOpt1Format();
        }
        if ($data->isInitialized('dhcp82SubOpt2Format') && null !== $data->getDhcp82SubOpt2Format()) {
            $dataArray['dhcp82SubOpt2Format'] = $data->getDhcp82SubOpt2Format();
        }
        if ($data->isInitialized('dhcp82SubOpt150Format') && null !== $data->getDhcp82SubOpt150Format()) {
            $dataArray['dhcp82SubOpt150Format'] = $data->getDhcp82SubOpt150Format();
        }
        if ($data->isInitialized('dhcp82SubOpt151Format') && null !== $data->getDhcp82SubOpt151Format()) {
            $dataArray['dhcp82SubOpt151Format'] = $data->getDhcp82SubOpt151Format();
        }
        if ($data->isInitialized('dhcp82SubOpt151AreaName') && null !== $data->getDhcp82SubOpt151AreaName()) {
            $dataArray['dhcp82SubOpt151AreaName'] = $data->getDhcp82SubOpt151AreaName();
        }
        if ($data->isInitialized('dhcp82MacFormat') && null !== $data->getDhcp82MacFormat()) {
            $dataArray['dhcp82MacFormat'] = $data->getDhcp82MacFormat();
        }
        if ($data->isInitialized('unauthClientStatsEnabled') && null !== $data->getUnauthClientStatsEnabled()) {
            $dataArray['unauthClientStatsEnabled'] = $data->getUnauthClientStatsEnabled();
        }
        if ($data->isInitialized('clientFingerprintingEnabled') && null !== $data->getClientFingerprintingEnabled()) {
            $dataArray['clientFingerprintingEnabled'] = $data->getClientFingerprintingEnabled();
        }
        if ($data->isInitialized('multicastFilterDrop') && null !== $data->getMulticastFilterDrop()) {
            $dataArray['multicastFilterDrop'] = $data->getMulticastFilterDrop();
        }
        if ($data->isInitialized('ofdmOnlyEnabled') && null !== $data->getOfdmOnlyEnabled()) {
            $dataArray['ofdmOnlyEnabled'] = $data->getOfdmOnlyEnabled();
        }
        if ($data->isInitialized('bandBalancing') && null !== $data->getBandBalancing()) {
            $dataArray['bandBalancing'] = $data->getBandBalancing();
        }
        if ($data->isInitialized('bssMinRateMbps') && null !== $data->getBssMinRateMbps()) {
            $dataArray['bssMinRateMbps'] = $data->getBssMinRateMbps();
        }
        if ($data->isInitialized('mgmtTxRateMbps') && null !== $data->getMgmtTxRateMbps()) {
            $dataArray['mgmtTxRateMbps'] = $data->getMgmtTxRateMbps();
        }
        if ($data->isInitialized('pmkCachingEnabled') && null !== $data->getPmkCachingEnabled()) {
            $dataArray['pmkCachingEnabled'] = $data->getPmkCachingEnabled();
        }
        if ($data->isInitialized('okcEnabled') && null !== $data->getOkcEnabled()) {
            $dataArray['okcEnabled'] = $data->getOkcEnabled();
        }
        if ($data->isInitialized('avcEnabled') && null !== $data->getAvcEnabled()) {
            $dataArray['avcEnabled'] = $data->getAvcEnabled();
        }
        if ($data->isInitialized('clientVirtualIdExtractionEnabled') && null !== $data->getClientVirtualIdExtractionEnabled()) {
            $dataArray['clientVirtualIdExtractionEnabled'] = $data->getClientVirtualIdExtractionEnabled();
        }
        if ($data->isInitialized('urlFilteringPolicyEnabled') && null !== $data->getUrlFilteringPolicyEnabled()) {
            $dataArray['urlFilteringPolicyEnabled'] = $data->getUrlFilteringPolicyEnabled();
        }
        if ($data->isInitialized('urlFilteringPolicyId') && null !== $data->getUrlFilteringPolicyId()) {
            $dataArray['urlFilteringPolicyId'] = $data->getUrlFilteringPolicyId();
        }
        if ($data->isInitialized('wifiCallingPolicyEnabled') && null !== $data->getWifiCallingPolicyEnabled()) {
            $dataArray['wifiCallingPolicyEnabled'] = $data->getWifiCallingPolicyEnabled();
        }
        if ($data->isInitialized('wifiCallingPolicyIds') && null !== $data->getWifiCallingPolicyIds()) {
            $values = [];
            foreach ($data->getWifiCallingPolicyIds() as $value) {
                $values[] = $value;
            }
            $dataArray['wifiCallingPolicyIds'] = $values;
        }
        if ($data->isInitialized('uplinkEnabled') && null !== $data->getUplinkEnabled()) {
            $dataArray['uplinkEnabled'] = $data->getUplinkEnabled();
        }
        if ($data->isInitialized('uplinkRate') && null !== $data->getUplinkRate()) {
            $dataArray['uplinkRate'] = $data->getUplinkRate();
        }
        if ($data->isInitialized('downlinkEnabled') && null !== $data->getDownlinkEnabled()) {
            $dataArray['downlinkEnabled'] = $data->getDownlinkEnabled();
        }
        if ($data->isInitialized('downlinkRate') && null !== $data->getDownlinkRate()) {
            $dataArray['downlinkRate'] = $data->getDownlinkRate();
        }
        if ($data->isInitialized('multicastUplinkRateLimitEnabled') && null !== $data->getMulticastUplinkRateLimitEnabled()) {
            $dataArray['multicastUplinkRateLimitEnabled'] = $data->getMulticastUplinkRateLimitEnabled();
        }
        if ($data->isInitialized('multicastUplinkRateLimit') && null !== $data->getMulticastUplinkRateLimit()) {
            $dataArray['multicastUplinkRateLimit'] = $data->getMulticastUplinkRateLimit();
        }
        if ($data->isInitialized('multicastDownlinkRateLimitEnabled') && null !== $data->getMulticastDownlinkRateLimitEnabled()) {
            $dataArray['multicastDownlinkRateLimitEnabled'] = $data->getMulticastDownlinkRateLimitEnabled();
        }
        if ($data->isInitialized('multicastDownlinkRateLimit') && null !== $data->getMulticastDownlinkRateLimit()) {
            $dataArray['multicastDownlinkRateLimit'] = $data->getMulticastDownlinkRateLimit();
        }
        if ($data->isInitialized('multicastUplinkRateLimit6gEnabled') && null !== $data->getMulticastUplinkRateLimit6gEnabled()) {
            $dataArray['multicastUplinkRateLimit6gEnabled'] = $data->getMulticastUplinkRateLimit6gEnabled();
        }
        if ($data->isInitialized('multicastDownlinkRateLimit6gEnabled') && null !== $data->getMulticastDownlinkRateLimit6gEnabled()) {
            $dataArray['multicastDownlinkRateLimit6gEnabled'] = $data->getMulticastDownlinkRateLimit6gEnabled();
        }
        if ($data->isInitialized('ratePerSTAUplink') && null !== $data->getRatePerSTAUplink()) {
            $dataArray['ratePerSTAUplink'] = $data->getRatePerSTAUplink();
        }
        if ($data->isInitialized('ratePerSTADownlink') && null !== $data->getRatePerSTADownlink()) {
            $dataArray['ratePerSTADownlink'] = $data->getRatePerSTADownlink();
        }
        if ($data->isInitialized('dtimInterval') && null !== $data->getDtimInterval()) {
            $dataArray['dtimInterval'] = $data->getDtimInterval();
        }
        if ($data->isInitialized('directedThreshold') && null !== $data->getDirectedThreshold()) {
            $dataArray['directedThreshold'] = $data->getDirectedThreshold();
        }
        if ($data->isInitialized('flowLogEnabled') && null !== $data->getFlowLogEnabled()) {
            $dataArray['flowLogEnabled'] = $data->getFlowLogEnabled();
        }
        if ($data->isInitialized('hdOverheadOptimizeEnable') && null !== $data->getHdOverheadOptimizeEnable()) {
            $dataArray['hdOverheadOptimizeEnable'] = $data->getHdOverheadOptimizeEnable();
        }
        if ($data->isInitialized('probeRssiThr') && null !== $data->getProbeRssiThr()) {
            $dataArray['probeRssiThr'] = $data->getProbeRssiThr();
        }
        if ($data->isInitialized('transientClientMgmtEnable') && null !== $data->getTransientClientMgmtEnable()) {
            $dataArray['transientClientMgmtEnable'] = $data->getTransientClientMgmtEnable();
        }
        if ($data->isInitialized('joinIgnoreTimeout') && null !== $data->getJoinIgnoreTimeout()) {
            $dataArray['joinIgnoreTimeout'] = $data->getJoinIgnoreTimeout();
        }
        if ($data->isInitialized('joinAcceptTimeout') && null !== $data->getJoinAcceptTimeout()) {
            $dataArray['joinAcceptTimeout'] = $data->getJoinAcceptTimeout();
        }
        if ($data->isInitialized('joinIgnoreThr') && null !== $data->getJoinIgnoreThr()) {
            $dataArray['joinIgnoreThr'] = $data->getJoinIgnoreThr();
        }
        if ($data->isInitialized('dropRandomProbesEnabled') && null !== $data->getDropRandomProbesEnabled()) {
            $dataArray['dropRandomProbesEnabled'] = $data->getDropRandomProbesEnabled();
        }
        if ($data->isInitialized('authRssiThr') && null !== $data->getAuthRssiThr()) {
            $dataArray['authRssiThr'] = $data->getAuthRssiThr();
        }
        if ($data->isInitialized('assocRssiThr') && null !== $data->getAssocRssiThr()) {
            $dataArray['assocRssiThr'] = $data->getAssocRssiThr();
        }
        if ($data->isInitialized('oceEnabled') && null !== $data->getOceEnabled()) {
            $dataArray['oceEnabled'] = $data->getOceEnabled();
        }
        if ($data->isInitialized('oceBroadcastProbeResponseDelay') && null !== $data->getOceBroadcastProbeResponseDelay()) {
            $dataArray['oceBroadcastProbeResponseDelay'] = $data->getOceBroadcastProbeResponseDelay();
        }
        if ($data->isInitialized('oceRssiBasedAssociationRejectionThreshold') && null !== $data->getOceRssiBasedAssociationRejectionThreshold()) {
            $dataArray['oceRssiBasedAssociationRejectionThreshold'] = $data->getOceRssiBasedAssociationRejectionThreshold();
        }
        if ($data->isInitialized('oceReduceNeighborReportEnabled') && null !== $data->getOceReduceNeighborReportEnabled()) {
            $dataArray['oceReduceNeighborReportEnabled'] = $data->getOceReduceNeighborReportEnabled();
        }
        if ($data->isInitialized('oceApChannelReportEnabled') && null !== $data->getOceApChannelReportEnabled()) {
            $dataArray['oceApChannelReportEnabled'] = $data->getOceApChannelReportEnabled();
        }
        if ($data->isInitialized('fils') && null !== $data->getFils()) {
            $dataArray['fils'] = $this->normalizer->normalize($data->getFils(), 'json', $context);
        }
        if ($data->isInitialized('dhcp82SubOptRadiusFormat') && null !== $data->getDhcp82SubOptRadiusFormat()) {
            $dataArray['dhcp82SubOptRadiusFormat'] = $data->getDhcp82SubOptRadiusFormat();
        }
        if ($data->isInitialized('dnsSpoofingProfileId') && null !== $data->getDnsSpoofingProfileId()) {
            $dataArray['dnsSpoofingProfileId'] = $data->getDnsSpoofingProfileId();
        }
        if ($data->isInitialized('vlanNameProfileId') && null !== $data->getVlanNameProfileId()) {
            $dataArray['vlanNameProfileId'] = $data->getVlanNameProfileId();
        }
        if ($data->isInitialized('userRoleAccess') && null !== $data->getUserRoleAccess()) {
            $dataArray['userRoleAccess'] = $this->normalizer->normalize($data->getUserRoleAccess(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAdvanced::class => false];
    }
}