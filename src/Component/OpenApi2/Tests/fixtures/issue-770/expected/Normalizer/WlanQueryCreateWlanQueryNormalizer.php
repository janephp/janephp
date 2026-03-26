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
class WlanQueryCreateWlanQueryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanQueryCreateWlanQuery::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanQueryCreateWlanQuery::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\WlanQueryCreateWlanQuery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('clients', $data)) {
            $object->setClients($data['clients']);
        }
        if (\array_key_exists('applicationVisibility', $data)) {
            $object->setApplicationVisibility($data['applicationVisibility']);
        }
        if (\array_key_exists('clientVirtualIdExtractionEnabled', $data)) {
            $object->setClientVirtualIdExtractionEnabled($data['clientVirtualIdExtractionEnabled']);
        }
        if (\array_key_exists('zeroITOnboard', $data)) {
            $object->setZeroITOnboard($data['zeroITOnboard']);
        }
        if (\array_key_exists('trafficUplink', $data)) {
            $object->setTrafficUplink($data['trafficUplink']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('zeroITEnabled', $data)) {
            $object->setZeroITEnabled($data['zeroITEnabled']);
        }
        if (\array_key_exists('ssid', $data)) {
            $object->setSsid($data['ssid']);
        }
        if (\array_key_exists('wlanId', $data)) {
            $object->setWlanId($data['wlanId']);
        }
        if (\array_key_exists('encryptionMethod', $data)) {
            $object->setEncryptionMethod($data['encryptionMethod']);
        }
        if (\array_key_exists('enability11k', $data)) {
            $object->setEnability11k($data['enability11k']);
        }
        if (\array_key_exists('alerts', $data)) {
            $object->setAlerts($data['alerts']);
        }
        if (\array_key_exists('tunneled', $data)) {
            $object->setTunneled($data['tunneled']);
        }
        if (\array_key_exists('vlan', $data)) {
            $object->setVlan($data['vlan']);
        }
        if (\array_key_exists('enability11r', $data)) {
            $object->setEnability11r($data['enability11r']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('authMethod', $data)) {
            $object->setAuthMethod($data['authMethod']);
        }
        if (\array_key_exists('authType', $data)) {
            $object->setAuthType($data['authType']);
        }
        if (\array_key_exists('domainName', $data)) {
            $object->setDomainName($data['domainName']);
        }
        if (\array_key_exists('zoneName', $data)) {
            $object->setZoneName($data['zoneName']);
        }
        if (\array_key_exists('zoneId', $data)) {
            $object->setZoneId($data['zoneId']);
        }
        if (\array_key_exists('trafficDownlink', $data)) {
            $object->setTrafficDownlink($data['trafficDownlink']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('traffic', $data)) {
            $object->setTraffic($data['traffic']);
        }
        if (\array_key_exists('wpaVersion', $data)) {
            $object->setWpaVersion($data['wpaVersion']);
        }
        if (\array_key_exists('wepEncryptionStrength', $data)) {
            $object->setWepEncryptionStrength($data['wepEncryptionStrength']);
        }
        if (\array_key_exists('availability', $data)) {
            $object->setAvailability($data['availability']);
        }
        if (\array_key_exists('tenantId', $data)) {
            $object->setTenantId($data['tenantId']);
        }
        if (\array_key_exists('tenantDomainName', $data)) {
            $object->setTenantDomainName($data['tenantDomainName']);
        }
        if (\array_key_exists('utp', $data)) {
            $object->setUtp($data['utp']);
        }
        if (\array_key_exists('firewallProfileId', $data)) {
            $object->setFirewallProfileId($data['firewallProfileId']);
        }
        if (\array_key_exists('firewallProfile', $data)) {
            $object->setFirewallProfile($data['firewallProfile']);
        }
        if (\array_key_exists('oweTransWlanId', $data)) {
            $object->setOweTransWlanId($data['oweTransWlanId']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('clients') && null !== $data->getClients()) {
            $dataArray['clients'] = $data->getClients();
        }
        if ($data->isInitialized('applicationVisibility') && null !== $data->getApplicationVisibility()) {
            $dataArray['applicationVisibility'] = $data->getApplicationVisibility();
        }
        if ($data->isInitialized('clientVirtualIdExtractionEnabled') && null !== $data->getClientVirtualIdExtractionEnabled()) {
            $dataArray['clientVirtualIdExtractionEnabled'] = $data->getClientVirtualIdExtractionEnabled();
        }
        if ($data->isInitialized('zeroITOnboard') && null !== $data->getZeroITOnboard()) {
            $dataArray['zeroITOnboard'] = $data->getZeroITOnboard();
        }
        if ($data->isInitialized('trafficUplink') && null !== $data->getTrafficUplink()) {
            $dataArray['trafficUplink'] = $data->getTrafficUplink();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('zeroITEnabled') && null !== $data->getZeroITEnabled()) {
            $dataArray['zeroITEnabled'] = $data->getZeroITEnabled();
        }
        if ($data->isInitialized('ssid') && null !== $data->getSsid()) {
            $dataArray['ssid'] = $data->getSsid();
        }
        if ($data->isInitialized('wlanId') && null !== $data->getWlanId()) {
            $dataArray['wlanId'] = $data->getWlanId();
        }
        if ($data->isInitialized('encryptionMethod') && null !== $data->getEncryptionMethod()) {
            $dataArray['encryptionMethod'] = $data->getEncryptionMethod();
        }
        if ($data->isInitialized('enability11k') && null !== $data->getEnability11k()) {
            $dataArray['enability11k'] = $data->getEnability11k();
        }
        if ($data->isInitialized('alerts') && null !== $data->getAlerts()) {
            $dataArray['alerts'] = $data->getAlerts();
        }
        if ($data->isInitialized('tunneled') && null !== $data->getTunneled()) {
            $dataArray['tunneled'] = $data->getTunneled();
        }
        if ($data->isInitialized('vlan') && null !== $data->getVlan()) {
            $dataArray['vlan'] = $data->getVlan();
        }
        if ($data->isInitialized('enability11r') && null !== $data->getEnability11r()) {
            $dataArray['enability11r'] = $data->getEnability11r();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('authMethod') && null !== $data->getAuthMethod()) {
            $dataArray['authMethod'] = $data->getAuthMethod();
        }
        if ($data->isInitialized('authType') && null !== $data->getAuthType()) {
            $dataArray['authType'] = $data->getAuthType();
        }
        if ($data->isInitialized('domainName') && null !== $data->getDomainName()) {
            $dataArray['domainName'] = $data->getDomainName();
        }
        if ($data->isInitialized('zoneName') && null !== $data->getZoneName()) {
            $dataArray['zoneName'] = $data->getZoneName();
        }
        if ($data->isInitialized('zoneId') && null !== $data->getZoneId()) {
            $dataArray['zoneId'] = $data->getZoneId();
        }
        if ($data->isInitialized('trafficDownlink') && null !== $data->getTrafficDownlink()) {
            $dataArray['trafficDownlink'] = $data->getTrafficDownlink();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('traffic') && null !== $data->getTraffic()) {
            $dataArray['traffic'] = $data->getTraffic();
        }
        if ($data->isInitialized('wpaVersion') && null !== $data->getWpaVersion()) {
            $dataArray['wpaVersion'] = $data->getWpaVersion();
        }
        if ($data->isInitialized('wepEncryptionStrength') && null !== $data->getWepEncryptionStrength()) {
            $dataArray['wepEncryptionStrength'] = $data->getWepEncryptionStrength();
        }
        if ($data->isInitialized('availability') && null !== $data->getAvailability()) {
            $dataArray['availability'] = $data->getAvailability();
        }
        if ($data->isInitialized('tenantId') && null !== $data->getTenantId()) {
            $dataArray['tenantId'] = $data->getTenantId();
        }
        if ($data->isInitialized('tenantDomainName') && null !== $data->getTenantDomainName()) {
            $dataArray['tenantDomainName'] = $data->getTenantDomainName();
        }
        if ($data->isInitialized('utp') && null !== $data->getUtp()) {
            $dataArray['utp'] = $data->getUtp();
        }
        if ($data->isInitialized('firewallProfileId') && null !== $data->getFirewallProfileId()) {
            $dataArray['firewallProfileId'] = $data->getFirewallProfileId();
        }
        if ($data->isInitialized('firewallProfile') && null !== $data->getFirewallProfile()) {
            $dataArray['firewallProfile'] = $data->getFirewallProfile();
        }
        if ($data->isInitialized('oweTransWlanId') && null !== $data->getOweTransWlanId()) {
            $dataArray['oweTransWlanId'] = $data->getOweTransWlanId();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\WlanQueryCreateWlanQuery::class => false];
    }
}