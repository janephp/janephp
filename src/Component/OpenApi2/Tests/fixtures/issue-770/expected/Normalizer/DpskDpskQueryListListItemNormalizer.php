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
class DpskDpskQueryListListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DpskDpskQueryListListItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\DpskDpskQueryListListItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DpskDpskQueryListListItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ttl', $data) && \is_int($data['ttl'])) {
            $data['ttl'] = (double) $data['ttl'];
        }
        if (\array_key_exists('expirationStartTime', $data) && \is_int($data['expirationStartTime'])) {
            $data['expirationStartTime'] = (double) $data['expirationStartTime'];
        }
        if (\array_key_exists('expirationTime', $data) && \is_int($data['expirationTime'])) {
            $data['expirationTime'] = (double) $data['expirationTime'];
        }
        if (\array_key_exists('createDateTime', $data) && \is_int($data['createDateTime'])) {
            $data['createDateTime'] = (double) $data['createDateTime'];
        }
        if (\array_key_exists('group', $data) && \is_int($data['group'])) {
            $data['group'] = (bool) $data['group'];
        }
        if (\array_key_exists('expired', $data) && \is_int($data['expired'])) {
            $data['expired'] = (bool) $data['expired'];
        }
        if (\array_key_exists('key', $data)) {
            $object->setKey($data['key']);
        }
        if (\array_key_exists('tenantId', $data)) {
            $object->setTenantId($data['tenantId']);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        if (\array_key_exists('zoneId', $data)) {
            $object->setZoneId($data['zoneId']);
        }
        if (\array_key_exists('wlanId', $data)) {
            $object->setWlanId($data['wlanId']);
        }
        if (\array_key_exists('userName', $data)) {
            $object->setUserName($data['userName']);
        }
        if (\array_key_exists('ueMac', $data)) {
            $object->setUeMac($data['ueMac']);
        }
        if (\array_key_exists('userRoleId', $data)) {
            $object->setUserRoleId($data['userRoleId']);
        }
        if (\array_key_exists('vlanId', $data)) {
            $object->setVlanId($data['vlanId']);
        }
        if (\array_key_exists('group', $data)) {
            $object->setGroup($data['group']);
        }
        if (\array_key_exists('expired', $data)) {
            $object->setExpired($data['expired']);
        }
        if (\array_key_exists('ttl', $data)) {
            $object->setTtl($data['ttl']);
        }
        if (\array_key_exists('expirationStartTime', $data)) {
            $object->setExpirationStartTime($data['expirationStartTime']);
        }
        if (\array_key_exists('expirationTime', $data)) {
            $object->setExpirationTime($data['expirationTime']);
        }
        if (\array_key_exists('createDateTime', $data)) {
            $object->setCreateDateTime($data['createDateTime']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('key') && null !== $data->getKey()) {
            $dataArray['key'] = $data->getKey();
        }
        if ($data->isInitialized('tenantId') && null !== $data->getTenantId()) {
            $dataArray['tenantId'] = $data->getTenantId();
        }
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        if ($data->isInitialized('zoneId') && null !== $data->getZoneId()) {
            $dataArray['zoneId'] = $data->getZoneId();
        }
        if ($data->isInitialized('wlanId') && null !== $data->getWlanId()) {
            $dataArray['wlanId'] = $data->getWlanId();
        }
        if ($data->isInitialized('userName') && null !== $data->getUserName()) {
            $dataArray['userName'] = $data->getUserName();
        }
        if ($data->isInitialized('ueMac') && null !== $data->getUeMac()) {
            $dataArray['ueMac'] = $data->getUeMac();
        }
        if ($data->isInitialized('userRoleId') && null !== $data->getUserRoleId()) {
            $dataArray['userRoleId'] = $data->getUserRoleId();
        }
        if ($data->isInitialized('vlanId') && null !== $data->getVlanId()) {
            $dataArray['vlanId'] = $data->getVlanId();
        }
        if ($data->isInitialized('group') && null !== $data->getGroup()) {
            $dataArray['group'] = $data->getGroup();
        }
        if ($data->isInitialized('expired') && null !== $data->getExpired()) {
            $dataArray['expired'] = $data->getExpired();
        }
        if ($data->isInitialized('ttl') && null !== $data->getTtl()) {
            $dataArray['ttl'] = $data->getTtl();
        }
        if ($data->isInitialized('expirationStartTime') && null !== $data->getExpirationStartTime()) {
            $dataArray['expirationStartTime'] = $data->getExpirationStartTime();
        }
        if ($data->isInitialized('expirationTime') && null !== $data->getExpirationTime()) {
            $dataArray['expirationTime'] = $data->getExpirationTime();
        }
        if ($data->isInitialized('createDateTime') && null !== $data->getCreateDateTime()) {
            $dataArray['createDateTime'] = $data->getCreateDateTime();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DpskDpskQueryListListItem::class => false];
    }
}