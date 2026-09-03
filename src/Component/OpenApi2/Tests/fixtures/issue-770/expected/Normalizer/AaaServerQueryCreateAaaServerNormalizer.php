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
class AaaServerQueryCreateAaaServerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaServerQueryCreateAaaServer::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaServerQueryCreateAaaServer::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaServerQueryCreateAaaServer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('globalCatalog', $data) && \is_int($data['globalCatalog'])) {
            $data['globalCatalog'] = (bool) $data['globalCatalog'];
        }
        if (\array_key_exists('secondaryRadiusPort', $data)) {
            $object->secondaryRadiusPort = $data['secondaryRadiusPort'];
        }
        if (\array_key_exists('adminDomainName', $data)) {
            $object->adminDomainName = $data['adminDomainName'];
        }
        if (\array_key_exists('creatorUUID', $data)) {
            $object->creatorUUID = $data['creatorUUID'];
        }
        if (\array_key_exists('secondaryRadiusIP', $data)) {
            $object->secondaryRadiusIP = $data['secondaryRadiusIP'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
        }
        if (\array_key_exists('secondaryRadiusIPv6', $data)) {
            $object->secondaryRadiusIPv6 = $data['secondaryRadiusIPv6'];
        }
        if (\array_key_exists('radiusPort', $data)) {
            $object->radiusPort = $data['radiusPort'];
        }
        if (\array_key_exists('ipv6', $data)) {
            $object->ipv6 = $data['ipv6'];
        }
        if (\array_key_exists('modifiedDateTime', $data)) {
            $object->modifiedDateTime = $data['modifiedDateTime'];
        }
        if (\array_key_exists('authType', $data)) {
            $object->authType = $data['authType'];
        }
        if (\array_key_exists('radiusIP', $data)) {
            $object->radiusIP = $data['radiusIP'];
        }
        if (\array_key_exists('radiusIPv6', $data)) {
            $object->radiusIPv6 = $data['radiusIPv6'];
        }
        if (\array_key_exists('key', $data)) {
            $object->key = $data['key'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('tenantUUID', $data)) {
            $object->tenantUUID = $data['tenantUUID'];
        }
        if (\array_key_exists('enableSecondaryRadius', $data)) {
            $object->enableSecondaryRadius = $data['enableSecondaryRadius'];
        }
        if (\array_key_exists('modifierUsername', $data)) {
            $object->modifierUsername = $data['modifierUsername'];
        }
        if (\array_key_exists('ip', $data)) {
            $object->ip = $data['ip'];
        }
        if (\array_key_exists('zoneUUID', $data)) {
            $object->zoneUUID = $data['zoneUUID'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        if (\array_key_exists('tacacsService', $data)) {
            $object->tacacsService = $data['tacacsService'];
        }
        if (\array_key_exists('port', $data)) {
            $object->port = $data['port'];
        }
        if (\array_key_exists('radiusRealm', $data)) {
            $object->radiusRealm = $data['radiusRealm'];
        }
        if (\array_key_exists('domainName', $data)) {
            $object->domainName = $data['domainName'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('isConflict', $data)) {
            $object->isConflict = $data['isConflict'];
        }
        if (\array_key_exists('createOn', $data)) {
            $object->createOn = $data['createOn'];
        }
        if (\array_key_exists('globalCatalog', $data)) {
            $object->globalCatalog = $data['globalCatalog'];
        }
        if (\array_key_exists('windowsDomainName', $data)) {
            $object->windowsDomainName = $data['windowsDomainName'];
        }
        if (\array_key_exists('partnerName', $data)) {
            $object->partnerName = $data['partnerName'];
        }
        if (\array_key_exists('token', $data)) {
            $object->token = $data['token'];
        }
        if (\array_key_exists('authenticationApi', $data)) {
            $object->authenticationApi = $data['authenticationApi'];
        }
        if (\array_key_exists('accountingApi', $data)) {
            $object->accountingApi = $data['accountingApi'];
        }
        if (\array_key_exists('coaResponseApi', $data)) {
            $object->coaResponseApi = $data['coaResponseApi'];
        }
        if (\array_key_exists('coaApi', $data)) {
            $object->coaApi = $data['coaApi'];
        }
        if (\array_key_exists('sseTimeout', $data)) {
            $object->sseTimeout = $data['sseTimeout'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('secondaryRadiusPort', get_object_vars($data)) && null !== ($data->secondaryRadiusPort ?? null)) {
            $dataArray['secondaryRadiusPort'] = $data->secondaryRadiusPort ?? null;
        }
        if (array_key_exists('adminDomainName', get_object_vars($data)) && null !== ($data->adminDomainName ?? null)) {
            $dataArray['adminDomainName'] = $data->adminDomainName ?? null;
        }
        if (array_key_exists('creatorUUID', get_object_vars($data)) && null !== ($data->creatorUUID ?? null)) {
            $dataArray['creatorUUID'] = $data->creatorUUID ?? null;
        }
        if (array_key_exists('secondaryRadiusIP', get_object_vars($data)) && null !== ($data->secondaryRadiusIP ?? null)) {
            $dataArray['secondaryRadiusIP'] = $data->secondaryRadiusIP ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type ?? null;
        }
        if (array_key_exists('secondaryRadiusIPv6', get_object_vars($data)) && null !== ($data->secondaryRadiusIPv6 ?? null)) {
            $dataArray['secondaryRadiusIPv6'] = $data->secondaryRadiusIPv6 ?? null;
        }
        if (array_key_exists('radiusPort', get_object_vars($data)) && null !== ($data->radiusPort ?? null)) {
            $dataArray['radiusPort'] = $data->radiusPort ?? null;
        }
        if (array_key_exists('ipv6', get_object_vars($data)) && null !== ($data->ipv6 ?? null)) {
            $dataArray['ipv6'] = $data->ipv6 ?? null;
        }
        if (array_key_exists('modifiedDateTime', get_object_vars($data)) && null !== ($data->modifiedDateTime ?? null)) {
            $dataArray['modifiedDateTime'] = $data->modifiedDateTime ?? null;
        }
        if (array_key_exists('authType', get_object_vars($data)) && null !== ($data->authType ?? null)) {
            $dataArray['authType'] = $data->authType ?? null;
        }
        if (array_key_exists('radiusIP', get_object_vars($data)) && null !== ($data->radiusIP ?? null)) {
            $dataArray['radiusIP'] = $data->radiusIP ?? null;
        }
        if (array_key_exists('radiusIPv6', get_object_vars($data)) && null !== ($data->radiusIPv6 ?? null)) {
            $dataArray['radiusIPv6'] = $data->radiusIPv6 ?? null;
        }
        if (array_key_exists('key', get_object_vars($data)) && null !== ($data->key ?? null)) {
            $dataArray['key'] = $data->key ?? null;
        }
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('tenantUUID', get_object_vars($data)) && null !== ($data->tenantUUID ?? null)) {
            $dataArray['tenantUUID'] = $data->tenantUUID ?? null;
        }
        if (array_key_exists('enableSecondaryRadius', get_object_vars($data)) && null !== ($data->enableSecondaryRadius ?? null)) {
            $dataArray['enableSecondaryRadius'] = $data->enableSecondaryRadius ?? null;
        }
        if (array_key_exists('modifierUsername', get_object_vars($data)) && null !== ($data->modifierUsername ?? null)) {
            $dataArray['modifierUsername'] = $data->modifierUsername ?? null;
        }
        if (array_key_exists('ip', get_object_vars($data)) && null !== ($data->ip ?? null)) {
            $dataArray['ip'] = $data->ip ?? null;
        }
        if (array_key_exists('zoneUUID', get_object_vars($data)) && null !== ($data->zoneUUID ?? null)) {
            $dataArray['zoneUUID'] = $data->zoneUUID ?? null;
        }
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        if (array_key_exists('tacacsService', get_object_vars($data)) && null !== ($data->tacacsService ?? null)) {
            $dataArray['tacacsService'] = $data->tacacsService ?? null;
        }
        if (array_key_exists('port', get_object_vars($data)) && null !== ($data->port ?? null)) {
            $dataArray['port'] = $data->port ?? null;
        }
        if (array_key_exists('radiusRealm', get_object_vars($data)) && null !== ($data->radiusRealm ?? null)) {
            $dataArray['radiusRealm'] = $data->radiusRealm ?? null;
        }
        if (array_key_exists('domainName', get_object_vars($data)) && null !== ($data->domainName ?? null)) {
            $dataArray['domainName'] = $data->domainName ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('isConflict', get_object_vars($data)) && null !== ($data->isConflict ?? null)) {
            $dataArray['isConflict'] = $data->isConflict ?? null;
        }
        if (array_key_exists('createOn', get_object_vars($data)) && null !== ($data->createOn ?? null)) {
            $dataArray['createOn'] = $data->createOn ?? null;
        }
        if (array_key_exists('globalCatalog', get_object_vars($data)) && null !== ($data->globalCatalog ?? null)) {
            $dataArray['globalCatalog'] = $data->globalCatalog ?? null;
        }
        if (array_key_exists('windowsDomainName', get_object_vars($data)) && null !== ($data->windowsDomainName ?? null)) {
            $dataArray['windowsDomainName'] = $data->windowsDomainName ?? null;
        }
        if (array_key_exists('partnerName', get_object_vars($data)) && null !== ($data->partnerName ?? null)) {
            $dataArray['partnerName'] = $data->partnerName ?? null;
        }
        if (array_key_exists('token', get_object_vars($data)) && null !== ($data->token ?? null)) {
            $dataArray['token'] = $data->token ?? null;
        }
        if (array_key_exists('authenticationApi', get_object_vars($data)) && null !== ($data->authenticationApi ?? null)) {
            $dataArray['authenticationApi'] = $data->authenticationApi ?? null;
        }
        if (array_key_exists('accountingApi', get_object_vars($data)) && null !== ($data->accountingApi ?? null)) {
            $dataArray['accountingApi'] = $data->accountingApi ?? null;
        }
        if (array_key_exists('coaResponseApi', get_object_vars($data)) && null !== ($data->coaResponseApi ?? null)) {
            $dataArray['coaResponseApi'] = $data->coaResponseApi ?? null;
        }
        if (array_key_exists('coaApi', get_object_vars($data)) && null !== ($data->coaApi ?? null)) {
            $dataArray['coaApi'] = $data->coaApi ?? null;
        }
        if (array_key_exists('sseTimeout', get_object_vars($data)) && null !== ($data->sseTimeout ?? null)) {
            $dataArray['sseTimeout'] = $data->sseTimeout ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaServerQueryCreateAaaServer::class => false];
    }
}