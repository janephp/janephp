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
class IdentityQueryCriteriaOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityQueryCriteriaOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityQueryCriteriaOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityQueryCriteriaOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('includeSharedResources', $data) && \is_int($data['includeSharedResources'])) {
            $data['includeSharedResources'] = (bool) $data['includeSharedResources'];
        }
        if (\array_key_exists('INCLUDE_RBAC_METADATA', $data) && \is_int($data['INCLUDE_RBAC_METADATA'])) {
            $data['INCLUDE_RBAC_METADATA'] = (bool) $data['INCLUDE_RBAC_METADATA'];
        }
        if (\array_key_exists('includeSharedResources', $data)) {
            $object->includeSharedResources = $data['includeSharedResources'];
        }
        if (\array_key_exists('INCLUDE_RBAC_METADATA', $data)) {
            $object->iNCLUDERBACMETADATA = $data['INCLUDE_RBAC_METADATA'];
        }
        if (\array_key_exists('TENANT_ID', $data)) {
            $object->tENANTID = $data['TENANT_ID'];
        }
        if (\array_key_exists('globalFilterId', $data)) {
            $object->globalFilterId = $data['globalFilterId'];
        }
        if (\array_key_exists('localUser_auditTime', $data)) {
            $object->localUserAuditTime = $this->denormalizer->denormalize($data['localUser_auditTime'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityQueryCriteriaOptionsLocalUserAuditTime::class, 'json', $context);
        }
        if (\array_key_exists('localUser_firstName', $data)) {
            $object->localUserFirstName = $data['localUser_firstName'];
        }
        if (\array_key_exists('localUser_lastName', $data)) {
            $object->localUserLastName = $data['localUser_lastName'];
        }
        if (\array_key_exists('localUser_mailAddress', $data)) {
            $object->localUserMailAddress = $data['localUser_mailAddress'];
        }
        if (\array_key_exists('localUser_primaryPhoneNumber', $data)) {
            $object->localUserPrimaryPhoneNumber = $data['localUser_primaryPhoneNumber'];
        }
        if (\array_key_exists('localUser_displayName', $data)) {
            $object->localUserDisplayName = $data['localUser_displayName'];
        }
        if (\array_key_exists('localUser_userName', $data)) {
            $object->localUserUserName = $data['localUser_userName'];
        }
        if (\array_key_exists('localUser_userSource', $data)) {
            $object->localUserUserSource = $data['localUser_userSource'];
        }
        if (\array_key_exists('localUser_subscriberType', $data)) {
            $object->localUserSubscriberType = $data['localUser_subscriberType'];
        }
        if (\array_key_exists('localUser_status', $data)) {
            $object->localUserStatus = $data['localUser_status'];
        }
        if (\array_key_exists('guestPass_displayName', $data)) {
            $object->guestPassDisplayName = $data['guestPass_displayName'];
        }
        if (\array_key_exists('guestPass_expiration', $data)) {
            $object->guestPassExpiration = $this->denormalizer->denormalize($data['guestPass_expiration'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityQueryCriteriaOptionsGuestPassExpiration::class, 'json', $context);
        }
        if (\array_key_exists('guestPass_wlan', $data)) {
            $object->guestPassWlan = $data['guestPass_wlan'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('includeSharedResources', get_object_vars($data)) && null !== ($data->includeSharedResources ?? null)) {
            $dataArray['includeSharedResources'] = $data->includeSharedResources;
        }
        if (array_key_exists('iNCLUDERBACMETADATA', get_object_vars($data)) && null !== ($data->iNCLUDERBACMETADATA ?? null)) {
            $dataArray['INCLUDE_RBAC_METADATA'] = $data->iNCLUDERBACMETADATA;
        }
        if (array_key_exists('tENANTID', get_object_vars($data)) && null !== ($data->tENANTID ?? null)) {
            $dataArray['TENANT_ID'] = $data->tENANTID;
        }
        if (array_key_exists('globalFilterId', get_object_vars($data)) && null !== ($data->globalFilterId ?? null)) {
            $dataArray['globalFilterId'] = $data->globalFilterId;
        }
        if (array_key_exists('localUserAuditTime', get_object_vars($data)) && null !== ($data->localUserAuditTime ?? null)) {
            $normalized = $this->normalizer->normalize($data->localUserAuditTime, 'json', $context);
            $dataArray['localUser_auditTime'] = \is_iterable($normalized) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('localUserFirstName', get_object_vars($data)) && null !== ($data->localUserFirstName ?? null)) {
            $dataArray['localUser_firstName'] = $data->localUserFirstName;
        }
        if (array_key_exists('localUserLastName', get_object_vars($data)) && null !== ($data->localUserLastName ?? null)) {
            $dataArray['localUser_lastName'] = $data->localUserLastName;
        }
        if (array_key_exists('localUserMailAddress', get_object_vars($data)) && null !== ($data->localUserMailAddress ?? null)) {
            $dataArray['localUser_mailAddress'] = $data->localUserMailAddress;
        }
        if (array_key_exists('localUserPrimaryPhoneNumber', get_object_vars($data)) && null !== ($data->localUserPrimaryPhoneNumber ?? null)) {
            $dataArray['localUser_primaryPhoneNumber'] = $data->localUserPrimaryPhoneNumber;
        }
        if (array_key_exists('localUserDisplayName', get_object_vars($data)) && null !== ($data->localUserDisplayName ?? null)) {
            $dataArray['localUser_displayName'] = $data->localUserDisplayName;
        }
        if (array_key_exists('localUserUserName', get_object_vars($data)) && null !== ($data->localUserUserName ?? null)) {
            $dataArray['localUser_userName'] = $data->localUserUserName;
        }
        if (array_key_exists('localUserUserSource', get_object_vars($data)) && null !== ($data->localUserUserSource ?? null)) {
            $dataArray['localUser_userSource'] = $data->localUserUserSource;
        }
        if (array_key_exists('localUserSubscriberType', get_object_vars($data)) && null !== ($data->localUserSubscriberType ?? null)) {
            $dataArray['localUser_subscriberType'] = $data->localUserSubscriberType;
        }
        if (array_key_exists('localUserStatus', get_object_vars($data)) && null !== ($data->localUserStatus ?? null)) {
            $dataArray['localUser_status'] = $data->localUserStatus;
        }
        if (array_key_exists('guestPassDisplayName', get_object_vars($data)) && null !== ($data->guestPassDisplayName ?? null)) {
            $dataArray['guestPass_displayName'] = $data->guestPassDisplayName;
        }
        if (array_key_exists('guestPassExpiration', get_object_vars($data)) && null !== ($data->guestPassExpiration ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->guestPassExpiration, 'json', $context);
            $dataArray['guestPass_expiration'] = \is_iterable($normalized_1) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('guestPassWlan', get_object_vars($data)) && null !== ($data->guestPassWlan ?? null)) {
            $dataArray['guestPass_wlan'] = $data->guestPassWlan;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityQueryCriteriaOptions::class => false];
    }
}