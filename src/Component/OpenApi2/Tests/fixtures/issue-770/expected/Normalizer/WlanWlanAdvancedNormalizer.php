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
class WlanWlanAdvancedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanAdvanced::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanAdvanced::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanAdvanced();
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
            $object->clientIsolationEnabled = $data['clientIsolationEnabled'];
        }
        if (\array_key_exists('clientIsolationUnicastEnabled', $data)) {
            $object->clientIsolationUnicastEnabled = $data['clientIsolationUnicastEnabled'];
        }
        if (\array_key_exists('clientIsolationMulticastEnabled', $data)) {
            $object->clientIsolationMulticastEnabled = $data['clientIsolationMulticastEnabled'];
        }
        if (\array_key_exists('clientIsolationAutoVrrpEnabled', $data)) {
            $object->clientIsolationAutoVrrpEnabled = $data['clientIsolationAutoVrrpEnabled'];
        }
        if (\array_key_exists('clientIsolationWhitelist', $data)) {
            $object->clientIsolationWhitelist = $this->denormalizer->denormalize($data['clientIsolationWhitelist'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('priority', $data)) {
            $object->priority = $data['priority'];
        }
        if (\array_key_exists('hideSsidEnabled', $data)) {
            $object->hideSsidEnabled = $data['hideSsidEnabled'];
        }
        if (\array_key_exists('hs20Onboarding', $data)) {
            $object->hs20Onboarding = $data['hs20Onboarding'];
        }
        if (\array_key_exists('maxClientsPerRadio', $data)) {
            $object->maxClientsPerRadio = $data['maxClientsPerRadio'];
        }
        if (\array_key_exists('clientIdleTimeoutSec', $data)) {
            $object->clientIdleTimeoutSec = $data['clientIdleTimeoutSec'];
        }
        if (\array_key_exists('gtkRekeyEnabled', $data)) {
            $object->gtkRekeyEnabled = $data['gtkRekeyEnabled'];
        }
        if (\array_key_exists('wifi6Enabled', $data)) {
            $object->wifi6Enabled = $data['wifi6Enabled'];
        }
        if (\array_key_exists('userSessionTimeout', $data)) {
            $object->userSessionTimeout = $data['userSessionTimeout'];
        }
        if (\array_key_exists('dgafEnabled', $data)) {
            $object->dgafEnabled = $data['dgafEnabled'];
        }
        if (\array_key_exists('clientLoadBalancingEnabled', $data)) {
            $object->clientLoadBalancingEnabled = $data['clientLoadBalancingEnabled'];
        }
        if (\array_key_exists('proxyARPEnabled', $data)) {
            $object->proxyARPEnabled = $data['proxyARPEnabled'];
        }
        if (\array_key_exists('ndProxyEnabled', $data)) {
            $object->ndProxyEnabled = $data['ndProxyEnabled'];
        }
        if (\array_key_exists('suppressNsEnabled', $data)) {
            $object->suppressNsEnabled = $data['suppressNsEnabled'];
        }
        if (\array_key_exists('raProxyEnabled', $data)) {
            $object->raProxyEnabled = $data['raProxyEnabled'];
        }
        if (\array_key_exists('rsraGuardEnabled', $data)) {
            $object->rsraGuardEnabled = $data['rsraGuardEnabled'];
        }
        if (\array_key_exists('raThrottlingEnabled', $data)) {
            $object->raThrottlingEnabled = $data['raThrottlingEnabled'];
        }
        if (\array_key_exists('maxAllowedRA', $data)) {
            $object->maxAllowedRA = $data['maxAllowedRA'];
        }
        if (\array_key_exists('raInterval', $data)) {
            $object->raInterval = $data['raInterval'];
        }
        if (\array_key_exists('support80211dEnabled', $data)) {
            $object->support80211dEnabled = $data['support80211dEnabled'];
        }
        if (\array_key_exists('support80211kEnabled', $data)) {
            $object->support80211kEnabled = $data['support80211kEnabled'];
        }
        if (\array_key_exists('antiSpoofingEnabled', $data)) {
            $object->antiSpoofingEnabled = $data['antiSpoofingEnabled'];
        }
        if (\array_key_exists('arpRequestRateLimit', $data)) {
            $object->arpRequestRateLimit = $data['arpRequestRateLimit'];
        }
        if (\array_key_exists('dhcpRequestRateLimit', $data)) {
            $object->dhcpRequestRateLimit = $data['dhcpRequestRateLimit'];
        }
        if (\array_key_exists('forceClientDHCPTimeoutSec', $data)) {
            $object->forceClientDHCPTimeoutSec = $data['forceClientDHCPTimeoutSec'];
        }
        if (\array_key_exists('dhcpOption82Enabled', $data)) {
            $object->dhcpOption82Enabled = $data['dhcpOption82Enabled'];
        }
        if (\array_key_exists('dhcp82Format', $data)) {
            $object->dhcp82Format = $data['dhcp82Format'];
        }
        if (\array_key_exists('dhcp82SubOpt1Format', $data)) {
            $object->dhcp82SubOpt1Format = $data['dhcp82SubOpt1Format'];
        }
        if (\array_key_exists('dhcp82SubOpt2Format', $data)) {
            $object->dhcp82SubOpt2Format = $data['dhcp82SubOpt2Format'];
        }
        if (\array_key_exists('dhcp82SubOpt150Format', $data)) {
            $object->dhcp82SubOpt150Format = $data['dhcp82SubOpt150Format'];
        }
        if (\array_key_exists('dhcp82SubOpt151Format', $data)) {
            $object->dhcp82SubOpt151Format = $data['dhcp82SubOpt151Format'];
        }
        if (\array_key_exists('dhcp82SubOpt151AreaName', $data)) {
            $object->dhcp82SubOpt151AreaName = $data['dhcp82SubOpt151AreaName'];
        }
        if (\array_key_exists('dhcp82MacFormat', $data)) {
            $object->dhcp82MacFormat = $data['dhcp82MacFormat'];
        }
        if (\array_key_exists('unauthClientStatsEnabled', $data)) {
            $object->unauthClientStatsEnabled = $data['unauthClientStatsEnabled'];
        }
        if (\array_key_exists('clientFingerprintingEnabled', $data)) {
            $object->clientFingerprintingEnabled = $data['clientFingerprintingEnabled'];
        }
        if (\array_key_exists('multicastFilterDrop', $data)) {
            $object->multicastFilterDrop = $data['multicastFilterDrop'];
        }
        if (\array_key_exists('ofdmOnlyEnabled', $data)) {
            $object->ofdmOnlyEnabled = $data['ofdmOnlyEnabled'];
        }
        if (\array_key_exists('bandBalancing', $data)) {
            $object->bandBalancing = $data['bandBalancing'];
        }
        if (\array_key_exists('bssMinRateMbps', $data)) {
            $object->bssMinRateMbps = $data['bssMinRateMbps'];
        }
        if (\array_key_exists('mgmtTxRateMbps', $data)) {
            $object->mgmtTxRateMbps = $data['mgmtTxRateMbps'];
        }
        if (\array_key_exists('pmkCachingEnabled', $data)) {
            $object->pmkCachingEnabled = $data['pmkCachingEnabled'];
        }
        if (\array_key_exists('okcEnabled', $data)) {
            $object->okcEnabled = $data['okcEnabled'];
        }
        if (\array_key_exists('avcEnabled', $data)) {
            $object->avcEnabled = $data['avcEnabled'];
        }
        if (\array_key_exists('clientVirtualIdExtractionEnabled', $data)) {
            $object->clientVirtualIdExtractionEnabled = $data['clientVirtualIdExtractionEnabled'];
        }
        if (\array_key_exists('urlFilteringPolicyEnabled', $data)) {
            $object->urlFilteringPolicyEnabled = $data['urlFilteringPolicyEnabled'];
        }
        if (\array_key_exists('urlFilteringPolicyId', $data)) {
            $object->urlFilteringPolicyId = $data['urlFilteringPolicyId'];
        }
        if (\array_key_exists('wifiCallingPolicyEnabled', $data)) {
            $object->wifiCallingPolicyEnabled = $data['wifiCallingPolicyEnabled'];
        }
        if (\array_key_exists('wifiCallingPolicyIds', $data)) {
            $values = [];
            foreach ($data['wifiCallingPolicyIds'] as $value) {
                $values[] = $value;
            }
            $object->wifiCallingPolicyIds = $values;
        }
        if (\array_key_exists('uplinkEnabled', $data)) {
            $object->uplinkEnabled = $data['uplinkEnabled'];
        }
        if (\array_key_exists('uplinkRate', $data)) {
            $object->uplinkRate = $data['uplinkRate'];
        }
        if (\array_key_exists('downlinkEnabled', $data)) {
            $object->downlinkEnabled = $data['downlinkEnabled'];
        }
        if (\array_key_exists('downlinkRate', $data)) {
            $object->downlinkRate = $data['downlinkRate'];
        }
        if (\array_key_exists('multicastUplinkRateLimitEnabled', $data)) {
            $object->multicastUplinkRateLimitEnabled = $data['multicastUplinkRateLimitEnabled'];
        }
        if (\array_key_exists('multicastUplinkRateLimit', $data)) {
            $object->multicastUplinkRateLimit = $data['multicastUplinkRateLimit'];
        }
        if (\array_key_exists('multicastDownlinkRateLimitEnabled', $data)) {
            $object->multicastDownlinkRateLimitEnabled = $data['multicastDownlinkRateLimitEnabled'];
        }
        if (\array_key_exists('multicastDownlinkRateLimit', $data)) {
            $object->multicastDownlinkRateLimit = $data['multicastDownlinkRateLimit'];
        }
        if (\array_key_exists('multicastUplinkRateLimit6gEnabled', $data)) {
            $object->multicastUplinkRateLimit6gEnabled = $data['multicastUplinkRateLimit6gEnabled'];
        }
        if (\array_key_exists('multicastDownlinkRateLimit6gEnabled', $data)) {
            $object->multicastDownlinkRateLimit6gEnabled = $data['multicastDownlinkRateLimit6gEnabled'];
        }
        if (\array_key_exists('ratePerSTAUplink', $data)) {
            $object->ratePerSTAUplink = $data['ratePerSTAUplink'];
        }
        if (\array_key_exists('ratePerSTADownlink', $data)) {
            $object->ratePerSTADownlink = $data['ratePerSTADownlink'];
        }
        if (\array_key_exists('dtimInterval', $data)) {
            $object->dtimInterval = $data['dtimInterval'];
        }
        if (\array_key_exists('directedThreshold', $data)) {
            $object->directedThreshold = $data['directedThreshold'];
        }
        if (\array_key_exists('flowLogEnabled', $data)) {
            $object->flowLogEnabled = $data['flowLogEnabled'];
        }
        if (\array_key_exists('hdOverheadOptimizeEnable', $data)) {
            $object->hdOverheadOptimizeEnable = $data['hdOverheadOptimizeEnable'];
        }
        if (\array_key_exists('probeRssiThr', $data)) {
            $object->probeRssiThr = $data['probeRssiThr'];
        }
        if (\array_key_exists('transientClientMgmtEnable', $data)) {
            $object->transientClientMgmtEnable = $data['transientClientMgmtEnable'];
        }
        if (\array_key_exists('joinIgnoreTimeout', $data)) {
            $object->joinIgnoreTimeout = $data['joinIgnoreTimeout'];
        }
        if (\array_key_exists('joinAcceptTimeout', $data)) {
            $object->joinAcceptTimeout = $data['joinAcceptTimeout'];
        }
        if (\array_key_exists('joinIgnoreThr', $data)) {
            $object->joinIgnoreThr = $data['joinIgnoreThr'];
        }
        if (\array_key_exists('dropRandomProbesEnabled', $data)) {
            $object->dropRandomProbesEnabled = $data['dropRandomProbesEnabled'];
        }
        if (\array_key_exists('authRssiThr', $data)) {
            $object->authRssiThr = $data['authRssiThr'];
        }
        if (\array_key_exists('assocRssiThr', $data)) {
            $object->assocRssiThr = $data['assocRssiThr'];
        }
        if (\array_key_exists('oceEnabled', $data)) {
            $object->oceEnabled = $data['oceEnabled'];
        }
        if (\array_key_exists('oceBroadcastProbeResponseDelay', $data)) {
            $object->oceBroadcastProbeResponseDelay = $data['oceBroadcastProbeResponseDelay'];
        }
        if (\array_key_exists('oceRssiBasedAssociationRejectionThreshold', $data)) {
            $object->oceRssiBasedAssociationRejectionThreshold = $data['oceRssiBasedAssociationRejectionThreshold'];
        }
        if (\array_key_exists('oceReduceNeighborReportEnabled', $data)) {
            $object->oceReduceNeighborReportEnabled = $data['oceReduceNeighborReportEnabled'];
        }
        if (\array_key_exists('oceApChannelReportEnabled', $data)) {
            $object->oceApChannelReportEnabled = $data['oceApChannelReportEnabled'];
        }
        if (\array_key_exists('fils', $data)) {
            $object->fils = $this->denormalizer->denormalize($data['fils'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanFastInitialLinkSetup::class, 'json', $context);
        }
        if (\array_key_exists('dhcp82SubOptRadiusFormat', $data)) {
            $object->dhcp82SubOptRadiusFormat = $data['dhcp82SubOptRadiusFormat'];
        }
        if (\array_key_exists('dnsSpoofingProfileId', $data)) {
            $object->dnsSpoofingProfileId = $data['dnsSpoofingProfileId'];
        }
        if (\array_key_exists('vlanNameProfileId', $data)) {
            $object->vlanNameProfileId = $data['vlanNameProfileId'];
        }
        if (\array_key_exists('userRoleAccess', $data)) {
            $object->userRoleAccess = $this->denormalizer->denormalize($data['userRoleAccess'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanAdvancedUserRoleAccess::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('clientIsolationEnabled', get_object_vars($data)) && null !== ($data->clientIsolationEnabled ?? null)) {
            $dataArray['clientIsolationEnabled'] = $data->clientIsolationEnabled ?? null;
        }
        if (array_key_exists('clientIsolationUnicastEnabled', get_object_vars($data)) && null !== ($data->clientIsolationUnicastEnabled ?? null)) {
            $dataArray['clientIsolationUnicastEnabled'] = $data->clientIsolationUnicastEnabled ?? null;
        }
        if (array_key_exists('clientIsolationMulticastEnabled', get_object_vars($data)) && null !== ($data->clientIsolationMulticastEnabled ?? null)) {
            $dataArray['clientIsolationMulticastEnabled'] = $data->clientIsolationMulticastEnabled ?? null;
        }
        if (array_key_exists('clientIsolationAutoVrrpEnabled', get_object_vars($data)) && null !== ($data->clientIsolationAutoVrrpEnabled ?? null)) {
            $dataArray['clientIsolationAutoVrrpEnabled'] = $data->clientIsolationAutoVrrpEnabled ?? null;
        }
        if (array_key_exists('clientIsolationWhitelist', get_object_vars($data)) && null !== ($data->clientIsolationWhitelist ?? null)) {
            $dataArray['clientIsolationWhitelist'] = ($data->clientIsolationWhitelist ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->clientIsolationWhitelist ?? null, 'json', $context));
        }
        if (array_key_exists('priority', get_object_vars($data)) && null !== ($data->priority ?? null)) {
            $dataArray['priority'] = $data->priority ?? null;
        }
        if (array_key_exists('hideSsidEnabled', get_object_vars($data)) && null !== ($data->hideSsidEnabled ?? null)) {
            $dataArray['hideSsidEnabled'] = $data->hideSsidEnabled ?? null;
        }
        if (array_key_exists('hs20Onboarding', get_object_vars($data)) && null !== ($data->hs20Onboarding ?? null)) {
            $dataArray['hs20Onboarding'] = $data->hs20Onboarding ?? null;
        }
        if (array_key_exists('maxClientsPerRadio', get_object_vars($data)) && null !== ($data->maxClientsPerRadio ?? null)) {
            $dataArray['maxClientsPerRadio'] = $data->maxClientsPerRadio ?? null;
        }
        if (array_key_exists('clientIdleTimeoutSec', get_object_vars($data)) && null !== ($data->clientIdleTimeoutSec ?? null)) {
            $dataArray['clientIdleTimeoutSec'] = $data->clientIdleTimeoutSec ?? null;
        }
        if (array_key_exists('gtkRekeyEnabled', get_object_vars($data)) && null !== ($data->gtkRekeyEnabled ?? null)) {
            $dataArray['gtkRekeyEnabled'] = $data->gtkRekeyEnabled ?? null;
        }
        if (array_key_exists('wifi6Enabled', get_object_vars($data)) && null !== ($data->wifi6Enabled ?? null)) {
            $dataArray['wifi6Enabled'] = $data->wifi6Enabled ?? null;
        }
        if (array_key_exists('userSessionTimeout', get_object_vars($data)) && null !== ($data->userSessionTimeout ?? null)) {
            $dataArray['userSessionTimeout'] = $data->userSessionTimeout ?? null;
        }
        if (array_key_exists('dgafEnabled', get_object_vars($data)) && null !== ($data->dgafEnabled ?? null)) {
            $dataArray['dgafEnabled'] = $data->dgafEnabled ?? null;
        }
        if (array_key_exists('clientLoadBalancingEnabled', get_object_vars($data)) && null !== ($data->clientLoadBalancingEnabled ?? null)) {
            $dataArray['clientLoadBalancingEnabled'] = $data->clientLoadBalancingEnabled ?? null;
        }
        if (array_key_exists('proxyARPEnabled', get_object_vars($data)) && null !== ($data->proxyARPEnabled ?? null)) {
            $dataArray['proxyARPEnabled'] = $data->proxyARPEnabled ?? null;
        }
        if (array_key_exists('ndProxyEnabled', get_object_vars($data)) && null !== ($data->ndProxyEnabled ?? null)) {
            $dataArray['ndProxyEnabled'] = $data->ndProxyEnabled ?? null;
        }
        if (array_key_exists('suppressNsEnabled', get_object_vars($data)) && null !== ($data->suppressNsEnabled ?? null)) {
            $dataArray['suppressNsEnabled'] = $data->suppressNsEnabled ?? null;
        }
        if (array_key_exists('raProxyEnabled', get_object_vars($data)) && null !== ($data->raProxyEnabled ?? null)) {
            $dataArray['raProxyEnabled'] = $data->raProxyEnabled ?? null;
        }
        if (array_key_exists('rsraGuardEnabled', get_object_vars($data)) && null !== ($data->rsraGuardEnabled ?? null)) {
            $dataArray['rsraGuardEnabled'] = $data->rsraGuardEnabled ?? null;
        }
        if (array_key_exists('raThrottlingEnabled', get_object_vars($data)) && null !== ($data->raThrottlingEnabled ?? null)) {
            $dataArray['raThrottlingEnabled'] = $data->raThrottlingEnabled ?? null;
        }
        if (array_key_exists('maxAllowedRA', get_object_vars($data)) && null !== ($data->maxAllowedRA ?? null)) {
            $dataArray['maxAllowedRA'] = $data->maxAllowedRA ?? null;
        }
        if (array_key_exists('raInterval', get_object_vars($data)) && null !== ($data->raInterval ?? null)) {
            $dataArray['raInterval'] = $data->raInterval ?? null;
        }
        if (array_key_exists('support80211dEnabled', get_object_vars($data)) && null !== ($data->support80211dEnabled ?? null)) {
            $dataArray['support80211dEnabled'] = $data->support80211dEnabled ?? null;
        }
        if (array_key_exists('support80211kEnabled', get_object_vars($data)) && null !== ($data->support80211kEnabled ?? null)) {
            $dataArray['support80211kEnabled'] = $data->support80211kEnabled ?? null;
        }
        if (array_key_exists('antiSpoofingEnabled', get_object_vars($data)) && null !== ($data->antiSpoofingEnabled ?? null)) {
            $dataArray['antiSpoofingEnabled'] = $data->antiSpoofingEnabled ?? null;
        }
        if (array_key_exists('arpRequestRateLimit', get_object_vars($data)) && null !== ($data->arpRequestRateLimit ?? null)) {
            $dataArray['arpRequestRateLimit'] = $data->arpRequestRateLimit ?? null;
        }
        if (array_key_exists('dhcpRequestRateLimit', get_object_vars($data)) && null !== ($data->dhcpRequestRateLimit ?? null)) {
            $dataArray['dhcpRequestRateLimit'] = $data->dhcpRequestRateLimit ?? null;
        }
        if (array_key_exists('forceClientDHCPTimeoutSec', get_object_vars($data)) && null !== ($data->forceClientDHCPTimeoutSec ?? null)) {
            $dataArray['forceClientDHCPTimeoutSec'] = $data->forceClientDHCPTimeoutSec ?? null;
        }
        if (array_key_exists('dhcpOption82Enabled', get_object_vars($data)) && null !== ($data->dhcpOption82Enabled ?? null)) {
            $dataArray['dhcpOption82Enabled'] = $data->dhcpOption82Enabled ?? null;
        }
        if (array_key_exists('dhcp82Format', get_object_vars($data)) && null !== ($data->dhcp82Format ?? null)) {
            $dataArray['dhcp82Format'] = $data->dhcp82Format ?? null;
        }
        if (array_key_exists('dhcp82SubOpt1Format', get_object_vars($data)) && null !== ($data->dhcp82SubOpt1Format ?? null)) {
            $dataArray['dhcp82SubOpt1Format'] = $data->dhcp82SubOpt1Format ?? null;
        }
        if (array_key_exists('dhcp82SubOpt2Format', get_object_vars($data)) && null !== ($data->dhcp82SubOpt2Format ?? null)) {
            $dataArray['dhcp82SubOpt2Format'] = $data->dhcp82SubOpt2Format ?? null;
        }
        if (array_key_exists('dhcp82SubOpt150Format', get_object_vars($data)) && null !== ($data->dhcp82SubOpt150Format ?? null)) {
            $dataArray['dhcp82SubOpt150Format'] = $data->dhcp82SubOpt150Format ?? null;
        }
        if (array_key_exists('dhcp82SubOpt151Format', get_object_vars($data)) && null !== ($data->dhcp82SubOpt151Format ?? null)) {
            $dataArray['dhcp82SubOpt151Format'] = $data->dhcp82SubOpt151Format ?? null;
        }
        if (array_key_exists('dhcp82SubOpt151AreaName', get_object_vars($data)) && null !== ($data->dhcp82SubOpt151AreaName ?? null)) {
            $dataArray['dhcp82SubOpt151AreaName'] = $data->dhcp82SubOpt151AreaName ?? null;
        }
        if (array_key_exists('dhcp82MacFormat', get_object_vars($data)) && null !== ($data->dhcp82MacFormat ?? null)) {
            $dataArray['dhcp82MacFormat'] = $data->dhcp82MacFormat ?? null;
        }
        if (array_key_exists('unauthClientStatsEnabled', get_object_vars($data)) && null !== ($data->unauthClientStatsEnabled ?? null)) {
            $dataArray['unauthClientStatsEnabled'] = $data->unauthClientStatsEnabled ?? null;
        }
        if (array_key_exists('clientFingerprintingEnabled', get_object_vars($data)) && null !== ($data->clientFingerprintingEnabled ?? null)) {
            $dataArray['clientFingerprintingEnabled'] = $data->clientFingerprintingEnabled ?? null;
        }
        if (array_key_exists('multicastFilterDrop', get_object_vars($data)) && null !== ($data->multicastFilterDrop ?? null)) {
            $dataArray['multicastFilterDrop'] = $data->multicastFilterDrop ?? null;
        }
        if (array_key_exists('ofdmOnlyEnabled', get_object_vars($data)) && null !== ($data->ofdmOnlyEnabled ?? null)) {
            $dataArray['ofdmOnlyEnabled'] = $data->ofdmOnlyEnabled ?? null;
        }
        if (array_key_exists('bandBalancing', get_object_vars($data)) && null !== ($data->bandBalancing ?? null)) {
            $dataArray['bandBalancing'] = $data->bandBalancing ?? null;
        }
        if (array_key_exists('bssMinRateMbps', get_object_vars($data)) && null !== ($data->bssMinRateMbps ?? null)) {
            $dataArray['bssMinRateMbps'] = $data->bssMinRateMbps ?? null;
        }
        if (array_key_exists('mgmtTxRateMbps', get_object_vars($data)) && null !== ($data->mgmtTxRateMbps ?? null)) {
            $dataArray['mgmtTxRateMbps'] = $data->mgmtTxRateMbps ?? null;
        }
        if (array_key_exists('pmkCachingEnabled', get_object_vars($data)) && null !== ($data->pmkCachingEnabled ?? null)) {
            $dataArray['pmkCachingEnabled'] = $data->pmkCachingEnabled ?? null;
        }
        if (array_key_exists('okcEnabled', get_object_vars($data)) && null !== ($data->okcEnabled ?? null)) {
            $dataArray['okcEnabled'] = $data->okcEnabled ?? null;
        }
        if (array_key_exists('avcEnabled', get_object_vars($data)) && null !== ($data->avcEnabled ?? null)) {
            $dataArray['avcEnabled'] = $data->avcEnabled ?? null;
        }
        if (array_key_exists('clientVirtualIdExtractionEnabled', get_object_vars($data)) && null !== ($data->clientVirtualIdExtractionEnabled ?? null)) {
            $dataArray['clientVirtualIdExtractionEnabled'] = $data->clientVirtualIdExtractionEnabled ?? null;
        }
        if (array_key_exists('urlFilteringPolicyEnabled', get_object_vars($data)) && null !== ($data->urlFilteringPolicyEnabled ?? null)) {
            $dataArray['urlFilteringPolicyEnabled'] = $data->urlFilteringPolicyEnabled ?? null;
        }
        if (array_key_exists('urlFilteringPolicyId', get_object_vars($data)) && null !== ($data->urlFilteringPolicyId ?? null)) {
            $dataArray['urlFilteringPolicyId'] = $data->urlFilteringPolicyId ?? null;
        }
        if (array_key_exists('wifiCallingPolicyEnabled', get_object_vars($data)) && null !== ($data->wifiCallingPolicyEnabled ?? null)) {
            $dataArray['wifiCallingPolicyEnabled'] = $data->wifiCallingPolicyEnabled ?? null;
        }
        if (array_key_exists('wifiCallingPolicyIds', get_object_vars($data)) && null !== ($data->wifiCallingPolicyIds ?? null)) {
            $values = [];
            foreach ($data->wifiCallingPolicyIds ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['wifiCallingPolicyIds'] = $values;
        }
        if (array_key_exists('uplinkEnabled', get_object_vars($data)) && null !== ($data->uplinkEnabled ?? null)) {
            $dataArray['uplinkEnabled'] = $data->uplinkEnabled ?? null;
        }
        if (array_key_exists('uplinkRate', get_object_vars($data)) && null !== ($data->uplinkRate ?? null)) {
            $dataArray['uplinkRate'] = $data->uplinkRate ?? null;
        }
        if (array_key_exists('downlinkEnabled', get_object_vars($data)) && null !== ($data->downlinkEnabled ?? null)) {
            $dataArray['downlinkEnabled'] = $data->downlinkEnabled ?? null;
        }
        if (array_key_exists('downlinkRate', get_object_vars($data)) && null !== ($data->downlinkRate ?? null)) {
            $dataArray['downlinkRate'] = $data->downlinkRate ?? null;
        }
        if (array_key_exists('multicastUplinkRateLimitEnabled', get_object_vars($data)) && null !== ($data->multicastUplinkRateLimitEnabled ?? null)) {
            $dataArray['multicastUplinkRateLimitEnabled'] = $data->multicastUplinkRateLimitEnabled ?? null;
        }
        if (array_key_exists('multicastUplinkRateLimit', get_object_vars($data)) && null !== ($data->multicastUplinkRateLimit ?? null)) {
            $dataArray['multicastUplinkRateLimit'] = $data->multicastUplinkRateLimit ?? null;
        }
        if (array_key_exists('multicastDownlinkRateLimitEnabled', get_object_vars($data)) && null !== ($data->multicastDownlinkRateLimitEnabled ?? null)) {
            $dataArray['multicastDownlinkRateLimitEnabled'] = $data->multicastDownlinkRateLimitEnabled ?? null;
        }
        if (array_key_exists('multicastDownlinkRateLimit', get_object_vars($data)) && null !== ($data->multicastDownlinkRateLimit ?? null)) {
            $dataArray['multicastDownlinkRateLimit'] = $data->multicastDownlinkRateLimit ?? null;
        }
        if (array_key_exists('multicastUplinkRateLimit6gEnabled', get_object_vars($data)) && null !== ($data->multicastUplinkRateLimit6gEnabled ?? null)) {
            $dataArray['multicastUplinkRateLimit6gEnabled'] = $data->multicastUplinkRateLimit6gEnabled ?? null;
        }
        if (array_key_exists('multicastDownlinkRateLimit6gEnabled', get_object_vars($data)) && null !== ($data->multicastDownlinkRateLimit6gEnabled ?? null)) {
            $dataArray['multicastDownlinkRateLimit6gEnabled'] = $data->multicastDownlinkRateLimit6gEnabled ?? null;
        }
        if (array_key_exists('ratePerSTAUplink', get_object_vars($data)) && null !== ($data->ratePerSTAUplink ?? null)) {
            $dataArray['ratePerSTAUplink'] = $data->ratePerSTAUplink ?? null;
        }
        if (array_key_exists('ratePerSTADownlink', get_object_vars($data)) && null !== ($data->ratePerSTADownlink ?? null)) {
            $dataArray['ratePerSTADownlink'] = $data->ratePerSTADownlink ?? null;
        }
        if (array_key_exists('dtimInterval', get_object_vars($data)) && null !== ($data->dtimInterval ?? null)) {
            $dataArray['dtimInterval'] = $data->dtimInterval ?? null;
        }
        if (array_key_exists('directedThreshold', get_object_vars($data)) && null !== ($data->directedThreshold ?? null)) {
            $dataArray['directedThreshold'] = $data->directedThreshold ?? null;
        }
        if (array_key_exists('flowLogEnabled', get_object_vars($data)) && null !== ($data->flowLogEnabled ?? null)) {
            $dataArray['flowLogEnabled'] = $data->flowLogEnabled ?? null;
        }
        if (array_key_exists('hdOverheadOptimizeEnable', get_object_vars($data)) && null !== ($data->hdOverheadOptimizeEnable ?? null)) {
            $dataArray['hdOverheadOptimizeEnable'] = $data->hdOverheadOptimizeEnable ?? null;
        }
        if (array_key_exists('probeRssiThr', get_object_vars($data)) && null !== ($data->probeRssiThr ?? null)) {
            $dataArray['probeRssiThr'] = $data->probeRssiThr ?? null;
        }
        if (array_key_exists('transientClientMgmtEnable', get_object_vars($data)) && null !== ($data->transientClientMgmtEnable ?? null)) {
            $dataArray['transientClientMgmtEnable'] = $data->transientClientMgmtEnable ?? null;
        }
        if (array_key_exists('joinIgnoreTimeout', get_object_vars($data)) && null !== ($data->joinIgnoreTimeout ?? null)) {
            $dataArray['joinIgnoreTimeout'] = $data->joinIgnoreTimeout ?? null;
        }
        if (array_key_exists('joinAcceptTimeout', get_object_vars($data)) && null !== ($data->joinAcceptTimeout ?? null)) {
            $dataArray['joinAcceptTimeout'] = $data->joinAcceptTimeout ?? null;
        }
        if (array_key_exists('joinIgnoreThr', get_object_vars($data)) && null !== ($data->joinIgnoreThr ?? null)) {
            $dataArray['joinIgnoreThr'] = $data->joinIgnoreThr ?? null;
        }
        if (array_key_exists('dropRandomProbesEnabled', get_object_vars($data)) && null !== ($data->dropRandomProbesEnabled ?? null)) {
            $dataArray['dropRandomProbesEnabled'] = $data->dropRandomProbesEnabled ?? null;
        }
        if (array_key_exists('authRssiThr', get_object_vars($data)) && null !== ($data->authRssiThr ?? null)) {
            $dataArray['authRssiThr'] = $data->authRssiThr ?? null;
        }
        if (array_key_exists('assocRssiThr', get_object_vars($data)) && null !== ($data->assocRssiThr ?? null)) {
            $dataArray['assocRssiThr'] = $data->assocRssiThr ?? null;
        }
        if (array_key_exists('oceEnabled', get_object_vars($data)) && null !== ($data->oceEnabled ?? null)) {
            $dataArray['oceEnabled'] = $data->oceEnabled ?? null;
        }
        if (array_key_exists('oceBroadcastProbeResponseDelay', get_object_vars($data)) && null !== ($data->oceBroadcastProbeResponseDelay ?? null)) {
            $dataArray['oceBroadcastProbeResponseDelay'] = $data->oceBroadcastProbeResponseDelay ?? null;
        }
        if (array_key_exists('oceRssiBasedAssociationRejectionThreshold', get_object_vars($data)) && null !== ($data->oceRssiBasedAssociationRejectionThreshold ?? null)) {
            $dataArray['oceRssiBasedAssociationRejectionThreshold'] = $data->oceRssiBasedAssociationRejectionThreshold ?? null;
        }
        if (array_key_exists('oceReduceNeighborReportEnabled', get_object_vars($data)) && null !== ($data->oceReduceNeighborReportEnabled ?? null)) {
            $dataArray['oceReduceNeighborReportEnabled'] = $data->oceReduceNeighborReportEnabled ?? null;
        }
        if (array_key_exists('oceApChannelReportEnabled', get_object_vars($data)) && null !== ($data->oceApChannelReportEnabled ?? null)) {
            $dataArray['oceApChannelReportEnabled'] = $data->oceApChannelReportEnabled ?? null;
        }
        if (array_key_exists('fils', get_object_vars($data)) && null !== ($data->fils ?? null)) {
            $dataArray['fils'] = ($data->fils ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->fils ?? null, 'json', $context));
        }
        if (array_key_exists('dhcp82SubOptRadiusFormat', get_object_vars($data)) && null !== ($data->dhcp82SubOptRadiusFormat ?? null)) {
            $dataArray['dhcp82SubOptRadiusFormat'] = $data->dhcp82SubOptRadiusFormat ?? null;
        }
        if (array_key_exists('dnsSpoofingProfileId', get_object_vars($data)) && null !== ($data->dnsSpoofingProfileId ?? null)) {
            $dataArray['dnsSpoofingProfileId'] = $data->dnsSpoofingProfileId ?? null;
        }
        if (array_key_exists('vlanNameProfileId', get_object_vars($data)) && null !== ($data->vlanNameProfileId ?? null)) {
            $dataArray['vlanNameProfileId'] = $data->vlanNameProfileId ?? null;
        }
        if (array_key_exists('userRoleAccess', get_object_vars($data)) && null !== ($data->userRoleAccess ?? null)) {
            $dataArray['userRoleAccess'] = ($data->userRoleAccess ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->userRoleAccess ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanAdvanced::class => false];
    }
}