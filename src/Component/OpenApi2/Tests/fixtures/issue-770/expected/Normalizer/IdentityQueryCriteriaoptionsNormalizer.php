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
class IdentityQueryCriteriaoptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityQueryCriteriaoptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityQueryCriteriaoptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityQueryCriteriaoptions();
        if (\array_key_exists('includeSharedResources', $data) && \is_int($data['includeSharedResources'])) {
            $data['includeSharedResources'] = (bool) $data['includeSharedResources'];
        }
        if (\array_key_exists('INCLUDE_RBAC_METADATA', $data) && \is_int($data['INCLUDE_RBAC_METADATA'])) {
            $data['INCLUDE_RBAC_METADATA'] = (bool) $data['INCLUDE_RBAC_METADATA'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('includeSharedResources', $data)) {
            $object->setIncludeSharedResources($data['includeSharedResources']);
        }
        if (\array_key_exists('INCLUDE_RBAC_METADATA', $data)) {
            $object->setINCLUDERBACMETADATA($data['INCLUDE_RBAC_METADATA']);
        }
        if (\array_key_exists('TENANT_ID', $data)) {
            $object->setTENANTID($data['TENANT_ID']);
        }
        if (\array_key_exists('globalFilterId', $data)) {
            $object->setGlobalFilterId($data['globalFilterId']);
        }
        if (\array_key_exists('localUser_auditTime', $data)) {
            $object->setLocalUserAuditTime($this->denormalizer->denormalize($data['localUser_auditTime'], \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityQueryCriteriaoptionsLocalUserAuditTime::class, 'json', $context));
        }
        if (\array_key_exists('localUser_firstName', $data)) {
            $object->setLocalUserFirstName($data['localUser_firstName']);
        }
        if (\array_key_exists('localUser_lastName', $data)) {
            $object->setLocalUserLastName($data['localUser_lastName']);
        }
        if (\array_key_exists('localUser_mailAddress', $data)) {
            $object->setLocalUserMailAddress($data['localUser_mailAddress']);
        }
        if (\array_key_exists('localUser_primaryPhoneNumber', $data)) {
            $object->setLocalUserPrimaryPhoneNumber($data['localUser_primaryPhoneNumber']);
        }
        if (\array_key_exists('localUser_displayName', $data)) {
            $object->setLocalUserDisplayName($data['localUser_displayName']);
        }
        if (\array_key_exists('localUser_userName', $data)) {
            $object->setLocalUserUserName($data['localUser_userName']);
        }
        if (\array_key_exists('localUser_userSource', $data)) {
            $object->setLocalUserUserSource($data['localUser_userSource']);
        }
        if (\array_key_exists('localUser_subscriberType', $data)) {
            $object->setLocalUserSubscriberType($data['localUser_subscriberType']);
        }
        if (\array_key_exists('localUser_status', $data)) {
            $object->setLocalUserStatus($data['localUser_status']);
        }
        if (\array_key_exists('guestPass_displayName', $data)) {
            $object->setGuestPassDisplayName($data['guestPass_displayName']);
        }
        if (\array_key_exists('guestPass_expiration', $data)) {
            $object->setGuestPassExpiration($this->denormalizer->denormalize($data['guestPass_expiration'], \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityQueryCriteriaoptionsGuestPassExpiration::class, 'json', $context));
        }
        if (\array_key_exists('guestPass_wlan', $data)) {
            $object->setGuestPassWlan($data['guestPass_wlan']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('includeSharedResources') && null !== $data->getIncludeSharedResources()) {
            $dataArray['includeSharedResources'] = $data->getIncludeSharedResources();
        }
        if ($data->isInitialized('iNCLUDERBACMETADATA') && null !== $data->getINCLUDERBACMETADATA()) {
            $dataArray['INCLUDE_RBAC_METADATA'] = $data->getINCLUDERBACMETADATA();
        }
        if ($data->isInitialized('tENANTID') && null !== $data->getTENANTID()) {
            $dataArray['TENANT_ID'] = $data->getTENANTID();
        }
        if ($data->isInitialized('globalFilterId') && null !== $data->getGlobalFilterId()) {
            $dataArray['globalFilterId'] = $data->getGlobalFilterId();
        }
        if ($data->isInitialized('localUserAuditTime') && null !== $data->getLocalUserAuditTime()) {
            $dataArray['localUser_auditTime'] = $this->normalizer->normalize($data->getLocalUserAuditTime(), 'json', $context);
        }
        if ($data->isInitialized('localUserFirstName') && null !== $data->getLocalUserFirstName()) {
            $dataArray['localUser_firstName'] = $data->getLocalUserFirstName();
        }
        if ($data->isInitialized('localUserLastName') && null !== $data->getLocalUserLastName()) {
            $dataArray['localUser_lastName'] = $data->getLocalUserLastName();
        }
        if ($data->isInitialized('localUserMailAddress') && null !== $data->getLocalUserMailAddress()) {
            $dataArray['localUser_mailAddress'] = $data->getLocalUserMailAddress();
        }
        if ($data->isInitialized('localUserPrimaryPhoneNumber') && null !== $data->getLocalUserPrimaryPhoneNumber()) {
            $dataArray['localUser_primaryPhoneNumber'] = $data->getLocalUserPrimaryPhoneNumber();
        }
        if ($data->isInitialized('localUserDisplayName') && null !== $data->getLocalUserDisplayName()) {
            $dataArray['localUser_displayName'] = $data->getLocalUserDisplayName();
        }
        if ($data->isInitialized('localUserUserName') && null !== $data->getLocalUserUserName()) {
            $dataArray['localUser_userName'] = $data->getLocalUserUserName();
        }
        if ($data->isInitialized('localUserUserSource') && null !== $data->getLocalUserUserSource()) {
            $dataArray['localUser_userSource'] = $data->getLocalUserUserSource();
        }
        if ($data->isInitialized('localUserSubscriberType') && null !== $data->getLocalUserSubscriberType()) {
            $dataArray['localUser_subscriberType'] = $data->getLocalUserSubscriberType();
        }
        if ($data->isInitialized('localUserStatus') && null !== $data->getLocalUserStatus()) {
            $dataArray['localUser_status'] = $data->getLocalUserStatus();
        }
        if ($data->isInitialized('guestPassDisplayName') && null !== $data->getGuestPassDisplayName()) {
            $dataArray['guestPass_displayName'] = $data->getGuestPassDisplayName();
        }
        if ($data->isInitialized('guestPassExpiration') && null !== $data->getGuestPassExpiration()) {
            $dataArray['guestPass_expiration'] = $this->normalizer->normalize($data->getGuestPassExpiration(), 'json', $context);
        }
        if ($data->isInitialized('guestPassWlan') && null !== $data->getGuestPassWlan()) {
            $dataArray['guestPass_wlan'] = $data->getGuestPassWlan();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\IdentityQueryCriteriaoptions::class => false];
    }
}