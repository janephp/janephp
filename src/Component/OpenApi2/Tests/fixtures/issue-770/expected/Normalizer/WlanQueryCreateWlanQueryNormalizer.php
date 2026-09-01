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
class WlanQueryCreateWlanQueryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanQueryCreateWlanQuery::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanQueryCreateWlanQuery::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanQueryCreateWlanQuery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('clients', $data)) {
            $object->clients = $data['clients'];
        }
        if (\array_key_exists('applicationVisibility', $data)) {
            $object->applicationVisibility = $data['applicationVisibility'];
        }
        if (\array_key_exists('clientVirtualIdExtractionEnabled', $data)) {
            $object->clientVirtualIdExtractionEnabled = $data['clientVirtualIdExtractionEnabled'];
        }
        if (\array_key_exists('zeroITOnboard', $data)) {
            $object->zeroITOnboard = $data['zeroITOnboard'];
        }
        if (\array_key_exists('trafficUplink', $data)) {
            $object->trafficUplink = $data['trafficUplink'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('zeroITEnabled', $data)) {
            $object->zeroITEnabled = $data['zeroITEnabled'];
        }
        if (\array_key_exists('ssid', $data)) {
            $object->ssid = $data['ssid'];
        }
        if (\array_key_exists('wlanId', $data)) {
            $object->wlanId = $data['wlanId'];
        }
        if (\array_key_exists('encryptionMethod', $data)) {
            $object->encryptionMethod = $data['encryptionMethod'];
        }
        if (\array_key_exists('enability11k', $data)) {
            $object->enability11k = $data['enability11k'];
        }
        if (\array_key_exists('alerts', $data)) {
            $object->alerts = $data['alerts'];
        }
        if (\array_key_exists('tunneled', $data)) {
            $object->tunneled = $data['tunneled'];
        }
        if (\array_key_exists('vlan', $data)) {
            $object->vlan = $data['vlan'];
        }
        if (\array_key_exists('enability11r', $data)) {
            $object->enability11r = $data['enability11r'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('authMethod', $data)) {
            $object->authMethod = $data['authMethod'];
        }
        if (\array_key_exists('authType', $data)) {
            $object->authType = $data['authType'];
        }
        if (\array_key_exists('domainName', $data)) {
            $object->domainName = $data['domainName'];
        }
        if (\array_key_exists('zoneName', $data)) {
            $object->zoneName = $data['zoneName'];
        }
        if (\array_key_exists('zoneId', $data)) {
            $object->zoneId = $data['zoneId'];
        }
        if (\array_key_exists('trafficDownlink', $data)) {
            $object->trafficDownlink = $data['trafficDownlink'];
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
        }
        if (\array_key_exists('traffic', $data)) {
            $object->traffic = $data['traffic'];
        }
        if (\array_key_exists('wpaVersion', $data)) {
            $object->wpaVersion = $data['wpaVersion'];
        }
        if (\array_key_exists('wepEncryptionStrength', $data)) {
            $object->wepEncryptionStrength = $data['wepEncryptionStrength'];
        }
        if (\array_key_exists('availability', $data)) {
            $object->availability = $data['availability'];
        }
        if (\array_key_exists('tenantId', $data)) {
            $object->tenantId = $data['tenantId'];
        }
        if (\array_key_exists('tenantDomainName', $data)) {
            $object->tenantDomainName = $data['tenantDomainName'];
        }
        if (\array_key_exists('utp', $data)) {
            $object->utp = $data['utp'];
        }
        if (\array_key_exists('firewallProfileId', $data)) {
            $object->firewallProfileId = $data['firewallProfileId'];
        }
        if (\array_key_exists('firewallProfile', $data)) {
            $object->firewallProfile = $data['firewallProfile'];
        }
        if (\array_key_exists('oweTransWlanId', $data)) {
            $object->oweTransWlanId = $data['oweTransWlanId'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('clients', get_object_vars($data)) && null !== ($data->clients ?? null)) {
            $dataArray['clients'] = $data->clients ?? null;
        }
        if (array_key_exists('applicationVisibility', get_object_vars($data)) && null !== ($data->applicationVisibility ?? null)) {
            $dataArray['applicationVisibility'] = $data->applicationVisibility ?? null;
        }
        if (array_key_exists('clientVirtualIdExtractionEnabled', get_object_vars($data)) && null !== ($data->clientVirtualIdExtractionEnabled ?? null)) {
            $dataArray['clientVirtualIdExtractionEnabled'] = $data->clientVirtualIdExtractionEnabled ?? null;
        }
        if (array_key_exists('zeroITOnboard', get_object_vars($data)) && null !== ($data->zeroITOnboard ?? null)) {
            $dataArray['zeroITOnboard'] = $data->zeroITOnboard ?? null;
        }
        if (array_key_exists('trafficUplink', get_object_vars($data)) && null !== ($data->trafficUplink ?? null)) {
            $dataArray['trafficUplink'] = $data->trafficUplink ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('zeroITEnabled', get_object_vars($data)) && null !== ($data->zeroITEnabled ?? null)) {
            $dataArray['zeroITEnabled'] = $data->zeroITEnabled ?? null;
        }
        if (array_key_exists('ssid', get_object_vars($data)) && null !== ($data->ssid ?? null)) {
            $dataArray['ssid'] = $data->ssid ?? null;
        }
        if (array_key_exists('wlanId', get_object_vars($data)) && null !== ($data->wlanId ?? null)) {
            $dataArray['wlanId'] = $data->wlanId ?? null;
        }
        if (array_key_exists('encryptionMethod', get_object_vars($data)) && null !== ($data->encryptionMethod ?? null)) {
            $dataArray['encryptionMethod'] = $data->encryptionMethod ?? null;
        }
        if (array_key_exists('enability11k', get_object_vars($data)) && null !== ($data->enability11k ?? null)) {
            $dataArray['enability11k'] = $data->enability11k ?? null;
        }
        if (array_key_exists('alerts', get_object_vars($data)) && null !== ($data->alerts ?? null)) {
            $dataArray['alerts'] = $data->alerts ?? null;
        }
        if (array_key_exists('tunneled', get_object_vars($data)) && null !== ($data->tunneled ?? null)) {
            $dataArray['tunneled'] = $data->tunneled ?? null;
        }
        if (array_key_exists('vlan', get_object_vars($data)) && null !== ($data->vlan ?? null)) {
            $dataArray['vlan'] = $data->vlan ?? null;
        }
        if (array_key_exists('enability11r', get_object_vars($data)) && null !== ($data->enability11r ?? null)) {
            $dataArray['enability11r'] = $data->enability11r ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('authMethod', get_object_vars($data)) && null !== ($data->authMethod ?? null)) {
            $dataArray['authMethod'] = $data->authMethod ?? null;
        }
        if (array_key_exists('authType', get_object_vars($data)) && null !== ($data->authType ?? null)) {
            $dataArray['authType'] = $data->authType ?? null;
        }
        if (array_key_exists('domainName', get_object_vars($data)) && null !== ($data->domainName ?? null)) {
            $dataArray['domainName'] = $data->domainName ?? null;
        }
        if (array_key_exists('zoneName', get_object_vars($data)) && null !== ($data->zoneName ?? null)) {
            $dataArray['zoneName'] = $data->zoneName ?? null;
        }
        if (array_key_exists('zoneId', get_object_vars($data)) && null !== ($data->zoneId ?? null)) {
            $dataArray['zoneId'] = $data->zoneId ?? null;
        }
        if (array_key_exists('trafficDownlink', get_object_vars($data)) && null !== ($data->trafficDownlink ?? null)) {
            $dataArray['trafficDownlink'] = $data->trafficDownlink ?? null;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status ?? null;
        }
        if (array_key_exists('traffic', get_object_vars($data)) && null !== ($data->traffic ?? null)) {
            $dataArray['traffic'] = $data->traffic ?? null;
        }
        if (array_key_exists('wpaVersion', get_object_vars($data)) && null !== ($data->wpaVersion ?? null)) {
            $dataArray['wpaVersion'] = $data->wpaVersion ?? null;
        }
        if (array_key_exists('wepEncryptionStrength', get_object_vars($data)) && null !== ($data->wepEncryptionStrength ?? null)) {
            $dataArray['wepEncryptionStrength'] = $data->wepEncryptionStrength ?? null;
        }
        if (array_key_exists('availability', get_object_vars($data)) && null !== ($data->availability ?? null)) {
            $dataArray['availability'] = $data->availability ?? null;
        }
        if (array_key_exists('tenantId', get_object_vars($data)) && null !== ($data->tenantId ?? null)) {
            $dataArray['tenantId'] = $data->tenantId ?? null;
        }
        if (array_key_exists('tenantDomainName', get_object_vars($data)) && null !== ($data->tenantDomainName ?? null)) {
            $dataArray['tenantDomainName'] = $data->tenantDomainName ?? null;
        }
        if (array_key_exists('utp', get_object_vars($data)) && null !== ($data->utp ?? null)) {
            $dataArray['utp'] = $data->utp ?? null;
        }
        if (array_key_exists('firewallProfileId', get_object_vars($data)) && null !== ($data->firewallProfileId ?? null)) {
            $dataArray['firewallProfileId'] = $data->firewallProfileId ?? null;
        }
        if (array_key_exists('firewallProfile', get_object_vars($data)) && null !== ($data->firewallProfile ?? null)) {
            $dataArray['firewallProfile'] = $data->firewallProfile ?? null;
        }
        if (array_key_exists('oweTransWlanId', get_object_vars($data)) && null !== ($data->oweTransWlanId ?? null)) {
            $dataArray['oweTransWlanId'] = $data->oweTransWlanId ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanQueryCreateWlanQuery::class => false];
    }
}