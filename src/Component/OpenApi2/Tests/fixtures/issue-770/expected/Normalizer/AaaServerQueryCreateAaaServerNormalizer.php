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
class AaaServerQueryCreateAaaServerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AaaServerQueryCreateAaaServer::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AaaServerQueryCreateAaaServer::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AaaServerQueryCreateAaaServer();
        if (\array_key_exists('globalCatalog', $data) && \is_int($data['globalCatalog'])) {
            $data['globalCatalog'] = (bool) $data['globalCatalog'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('secondaryRadiusPort', $data)) {
            $object->setSecondaryRadiusPort($data['secondaryRadiusPort']);
        }
        if (\array_key_exists('adminDomainName', $data)) {
            $object->setAdminDomainName($data['adminDomainName']);
        }
        if (\array_key_exists('creatorUUID', $data)) {
            $object->setCreatorUUID($data['creatorUUID']);
        }
        if (\array_key_exists('secondaryRadiusIP', $data)) {
            $object->setSecondaryRadiusIP($data['secondaryRadiusIP']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('secondaryRadiusIPv6', $data)) {
            $object->setSecondaryRadiusIPv6($data['secondaryRadiusIPv6']);
        }
        if (\array_key_exists('radiusPort', $data)) {
            $object->setRadiusPort($data['radiusPort']);
        }
        if (\array_key_exists('ipv6', $data)) {
            $object->setIpv6($data['ipv6']);
        }
        if (\array_key_exists('modifiedDateTime', $data)) {
            $object->setModifiedDateTime($data['modifiedDateTime']);
        }
        if (\array_key_exists('authType', $data)) {
            $object->setAuthType($data['authType']);
        }
        if (\array_key_exists('radiusIP', $data)) {
            $object->setRadiusIP($data['radiusIP']);
        }
        if (\array_key_exists('radiusIPv6', $data)) {
            $object->setRadiusIPv6($data['radiusIPv6']);
        }
        if (\array_key_exists('key', $data)) {
            $object->setKey($data['key']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('tenantUUID', $data)) {
            $object->setTenantUUID($data['tenantUUID']);
        }
        if (\array_key_exists('enableSecondaryRadius', $data)) {
            $object->setEnableSecondaryRadius($data['enableSecondaryRadius']);
        }
        if (\array_key_exists('modifierUsername', $data)) {
            $object->setModifierUsername($data['modifierUsername']);
        }
        if (\array_key_exists('ip', $data)) {
            $object->setIp($data['ip']);
        }
        if (\array_key_exists('zoneUUID', $data)) {
            $object->setZoneUUID($data['zoneUUID']);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        if (\array_key_exists('tacacsService', $data)) {
            $object->setTacacsService($data['tacacsService']);
        }
        if (\array_key_exists('port', $data)) {
            $object->setPort($data['port']);
        }
        if (\array_key_exists('radiusRealm', $data)) {
            $object->setRadiusRealm($data['radiusRealm']);
        }
        if (\array_key_exists('domainName', $data)) {
            $object->setDomainName($data['domainName']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('isConflict', $data)) {
            $object->setIsConflict($data['isConflict']);
        }
        if (\array_key_exists('createOn', $data)) {
            $object->setCreateOn($data['createOn']);
        }
        if (\array_key_exists('globalCatalog', $data)) {
            $object->setGlobalCatalog($data['globalCatalog']);
        }
        if (\array_key_exists('windowsDomainName', $data)) {
            $object->setWindowsDomainName($data['windowsDomainName']);
        }
        if (\array_key_exists('partnerName', $data)) {
            $object->setPartnerName($data['partnerName']);
        }
        if (\array_key_exists('token', $data)) {
            $object->setToken($data['token']);
        }
        if (\array_key_exists('authenticationApi', $data)) {
            $object->setAuthenticationApi($data['authenticationApi']);
        }
        if (\array_key_exists('accountingApi', $data)) {
            $object->setAccountingApi($data['accountingApi']);
        }
        if (\array_key_exists('coaResponseApi', $data)) {
            $object->setCoaResponseApi($data['coaResponseApi']);
        }
        if (\array_key_exists('coaApi', $data)) {
            $object->setCoaApi($data['coaApi']);
        }
        if (\array_key_exists('sseTimeout', $data)) {
            $object->setSseTimeout($data['sseTimeout']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('secondaryRadiusPort') && null !== $data->getSecondaryRadiusPort()) {
            $dataArray['secondaryRadiusPort'] = $data->getSecondaryRadiusPort();
        }
        if ($data->isInitialized('adminDomainName') && null !== $data->getAdminDomainName()) {
            $dataArray['adminDomainName'] = $data->getAdminDomainName();
        }
        if ($data->isInitialized('creatorUUID') && null !== $data->getCreatorUUID()) {
            $dataArray['creatorUUID'] = $data->getCreatorUUID();
        }
        if ($data->isInitialized('secondaryRadiusIP') && null !== $data->getSecondaryRadiusIP()) {
            $dataArray['secondaryRadiusIP'] = $data->getSecondaryRadiusIP();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('secondaryRadiusIPv6') && null !== $data->getSecondaryRadiusIPv6()) {
            $dataArray['secondaryRadiusIPv6'] = $data->getSecondaryRadiusIPv6();
        }
        if ($data->isInitialized('radiusPort') && null !== $data->getRadiusPort()) {
            $dataArray['radiusPort'] = $data->getRadiusPort();
        }
        if ($data->isInitialized('ipv6') && null !== $data->getIpv6()) {
            $dataArray['ipv6'] = $data->getIpv6();
        }
        if ($data->isInitialized('modifiedDateTime') && null !== $data->getModifiedDateTime()) {
            $dataArray['modifiedDateTime'] = $data->getModifiedDateTime();
        }
        if ($data->isInitialized('authType') && null !== $data->getAuthType()) {
            $dataArray['authType'] = $data->getAuthType();
        }
        if ($data->isInitialized('radiusIP') && null !== $data->getRadiusIP()) {
            $dataArray['radiusIP'] = $data->getRadiusIP();
        }
        if ($data->isInitialized('radiusIPv6') && null !== $data->getRadiusIPv6()) {
            $dataArray['radiusIPv6'] = $data->getRadiusIPv6();
        }
        if ($data->isInitialized('key') && null !== $data->getKey()) {
            $dataArray['key'] = $data->getKey();
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('tenantUUID') && null !== $data->getTenantUUID()) {
            $dataArray['tenantUUID'] = $data->getTenantUUID();
        }
        if ($data->isInitialized('enableSecondaryRadius') && null !== $data->getEnableSecondaryRadius()) {
            $dataArray['enableSecondaryRadius'] = $data->getEnableSecondaryRadius();
        }
        if ($data->isInitialized('modifierUsername') && null !== $data->getModifierUsername()) {
            $dataArray['modifierUsername'] = $data->getModifierUsername();
        }
        if ($data->isInitialized('ip') && null !== $data->getIp()) {
            $dataArray['ip'] = $data->getIp();
        }
        if ($data->isInitialized('zoneUUID') && null !== $data->getZoneUUID()) {
            $dataArray['zoneUUID'] = $data->getZoneUUID();
        }
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        if ($data->isInitialized('tacacsService') && null !== $data->getTacacsService()) {
            $dataArray['tacacsService'] = $data->getTacacsService();
        }
        if ($data->isInitialized('port') && null !== $data->getPort()) {
            $dataArray['port'] = $data->getPort();
        }
        if ($data->isInitialized('radiusRealm') && null !== $data->getRadiusRealm()) {
            $dataArray['radiusRealm'] = $data->getRadiusRealm();
        }
        if ($data->isInitialized('domainName') && null !== $data->getDomainName()) {
            $dataArray['domainName'] = $data->getDomainName();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('isConflict') && null !== $data->getIsConflict()) {
            $dataArray['isConflict'] = $data->getIsConflict();
        }
        if ($data->isInitialized('createOn') && null !== $data->getCreateOn()) {
            $dataArray['createOn'] = $data->getCreateOn();
        }
        if ($data->isInitialized('globalCatalog') && null !== $data->getGlobalCatalog()) {
            $dataArray['globalCatalog'] = $data->getGlobalCatalog();
        }
        if ($data->isInitialized('windowsDomainName') && null !== $data->getWindowsDomainName()) {
            $dataArray['windowsDomainName'] = $data->getWindowsDomainName();
        }
        if ($data->isInitialized('partnerName') && null !== $data->getPartnerName()) {
            $dataArray['partnerName'] = $data->getPartnerName();
        }
        if ($data->isInitialized('token') && null !== $data->getToken()) {
            $dataArray['token'] = $data->getToken();
        }
        if ($data->isInitialized('authenticationApi') && null !== $data->getAuthenticationApi()) {
            $dataArray['authenticationApi'] = $data->getAuthenticationApi();
        }
        if ($data->isInitialized('accountingApi') && null !== $data->getAccountingApi()) {
            $dataArray['accountingApi'] = $data->getAccountingApi();
        }
        if ($data->isInitialized('coaResponseApi') && null !== $data->getCoaResponseApi()) {
            $dataArray['coaResponseApi'] = $data->getCoaResponseApi();
        }
        if ($data->isInitialized('coaApi') && null !== $data->getCoaApi()) {
            $dataArray['coaApi'] = $data->getCoaApi();
        }
        if ($data->isInitialized('sseTimeout') && null !== $data->getSseTimeout()) {
            $dataArray['sseTimeout'] = $data->getSseTimeout();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AaaServerQueryCreateAaaServer::class => false];
    }
}