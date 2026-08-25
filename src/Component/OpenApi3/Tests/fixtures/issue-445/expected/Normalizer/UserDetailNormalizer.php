<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class UserDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\UserDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\UserDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\UserDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isDeleted', $data) && \is_int($data['isDeleted'])) {
            $data['isDeleted'] = (bool) $data['isDeleted'];
        }
        if (\array_key_exists('isLocked', $data) && \is_int($data['isLocked'])) {
            $data['isLocked'] = (bool) $data['isLocked'];
        }
        if (\array_key_exists('isSupportUser', $data) && \is_int($data['isSupportUser'])) {
            $data['isSupportUser'] = (bool) $data['isSupportUser'];
        }
        if (\array_key_exists('isReadOnly', $data) && \is_int($data['isReadOnly'])) {
            $data['isReadOnly'] = (bool) $data['isReadOnly'];
        }
        if (\array_key_exists('isFederated', $data) && \is_int($data['isFederated'])) {
            $data['isFederated'] = (bool) $data['isFederated'];
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
            unset($data['id']);
        }
        if (\array_key_exists('firstName', $data) && $data['firstName'] !== null) {
            $object->setFirstName($data['firstName']);
            unset($data['firstName']);
        }
        elseif (\array_key_exists('firstName', $data) && $data['firstName'] === null) {
            $object->setFirstName(null);
            unset($data['firstName']);
        }
        if (\array_key_exists('lastName', $data) && $data['lastName'] !== null) {
            $object->setLastName($data['lastName']);
            unset($data['lastName']);
        }
        elseif (\array_key_exists('lastName', $data) && $data['lastName'] === null) {
            $object->setLastName(null);
            unset($data['lastName']);
        }
        if (\array_key_exists('emailAddress', $data)) {
            $object->setEmailAddress($data['emailAddress']);
            unset($data['emailAddress']);
        }
        if (\array_key_exists('isDeleted', $data)) {
            $object->setIsDeleted($data['isDeleted']);
            unset($data['isDeleted']);
        }
        if (\array_key_exists('userRoles', $data) && $data['userRoles'] !== null) {
            $values = [];
            foreach ($data['userRoles'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\UserRoleAssignment::class, 'json', $context);
            }
            $object->setUserRoles($values);
            unset($data['userRoles']);
        }
        elseif (\array_key_exists('userRoles', $data) && $data['userRoles'] === null) {
            $object->setUserRoles(null);
            unset($data['userRoles']);
        }
        if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
            $object->setComment($data['comment']);
            unset($data['comment']);
        }
        elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
            $object->setComment(null);
            unset($data['comment']);
        }
        if (\array_key_exists('languageCode', $data) && $data['languageCode'] !== null) {
            $object->setLanguageCode($data['languageCode']);
            unset($data['languageCode']);
        }
        elseif (\array_key_exists('languageCode', $data) && $data['languageCode'] === null) {
            $object->setLanguageCode(null);
            unset($data['languageCode']);
        }
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $value_1 = $data['address'];
            if (is_array($data['address'])) {
                $value_1 = $this->denormalizer->denormalize($data['address'], \PicturePark\API\Model\UserAddress::class, 'json', $context);
            }
            $object->setAddress($value_1);
            unset($data['address']);
        }
        elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->setAddress(null);
            unset($data['address']);
        }
        if (\array_key_exists('identityProviderId', $data) && $data['identityProviderId'] !== null) {
            $object->setIdentityProviderId($data['identityProviderId']);
            unset($data['identityProviderId']);
        }
        elseif (\array_key_exists('identityProviderId', $data) && $data['identityProviderId'] === null) {
            $object->setIdentityProviderId(null);
            unset($data['identityProviderId']);
        }
        if (\array_key_exists('ownerTokens', $data) && $data['ownerTokens'] !== null) {
            $values_1 = [];
            foreach ($data['ownerTokens'] as $value_2) {
                $values_1[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\OwnerToken::class, 'json', $context);
            }
            $object->setOwnerTokens($values_1);
            unset($data['ownerTokens']);
        }
        elseif (\array_key_exists('ownerTokens', $data) && $data['ownerTokens'] === null) {
            $object->setOwnerTokens(null);
            unset($data['ownerTokens']);
        }
        if (\array_key_exists('authorizationState', $data)) {
            $value_3 = $data['authorizationState'];
            if (is_string($data['authorizationState'])) {
                $value_3 = $data['authorizationState'];
            }
            $object->setAuthorizationState($value_3);
            unset($data['authorizationState']);
        }
        if (\array_key_exists('isLocked', $data)) {
            $object->setIsLocked($data['isLocked']);
            unset($data['isLocked']);
        }
        if (\array_key_exists('lifeCycle', $data)) {
            $value_4 = $data['lifeCycle'];
            if (is_string($data['lifeCycle'])) {
                $value_4 = $data['lifeCycle'];
            }
            $object->setLifeCycle($value_4);
            unset($data['lifeCycle']);
        }
        if (\array_key_exists('isSupportUser', $data)) {
            $object->setIsSupportUser($data['isSupportUser']);
            unset($data['isSupportUser']);
        }
        if (\array_key_exists('isReadOnly', $data)) {
            $object->setIsReadOnly($data['isReadOnly']);
            unset($data['isReadOnly']);
        }
        if (\array_key_exists('isFederated', $data)) {
            $object->setIsFederated($data['isFederated']);
            unset($data['isFederated']);
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $value_5 = $data['audit'];
            if (is_array($data['audit']) and \array_key_exists('creationDate', $data['audit']) and \array_key_exists('modificationDate', $data['audit'])) {
                $value_5 = $this->denormalizer->denormalize($data['audit'], \PicturePark\API\Model\UserAuditDetail::class, 'json', $context);
            }
            $object->setAudit($value_5);
            unset($data['audit']);
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->setAudit(null);
            unset($data['audit']);
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_6;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('firstName') && null !== $data->getFirstName()) {
            $dataArray['firstName'] = $data->getFirstName();
        }
        if ($data->isInitialized('lastName') && null !== $data->getLastName()) {
            $dataArray['lastName'] = $data->getLastName();
        }
        $dataArray['emailAddress'] = $data->getEmailAddress();
        $dataArray['isDeleted'] = $data->getIsDeleted();
        if ($data->isInitialized('userRoles') && null !== $data->getUserRoles()) {
            $values = [];
            foreach ($data->getUserRoles() as $value) {
                $values[] = $value === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['userRoles'] = $values;
        }
        if ($data->isInitialized('comment') && null !== $data->getComment()) {
            $dataArray['comment'] = $data->getComment();
        }
        if ($data->isInitialized('languageCode') && null !== $data->getLanguageCode()) {
            $dataArray['languageCode'] = $data->getLanguageCode();
        }
        if ($data->isInitialized('address') && null !== $data->getAddress()) {
            $value_1 = $data->getAddress();
            if (is_object($data->getAddress())) {
                $value_1 = $data->getAddress() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getAddress(), 'json', $context));
            }
            $dataArray['address'] = $value_1;
        }
        if ($data->isInitialized('identityProviderId') && null !== $data->getIdentityProviderId()) {
            $dataArray['identityProviderId'] = $data->getIdentityProviderId();
        }
        if ($data->isInitialized('ownerTokens') && null !== $data->getOwnerTokens()) {
            $values_1 = [];
            foreach ($data->getOwnerTokens() as $value_2) {
                $values_1[] = $value_2 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['ownerTokens'] = $values_1;
        }
        if ($data->isInitialized('authorizationState') && null !== $data->getAuthorizationState()) {
            $value_3 = $data->getAuthorizationState();
            if (is_string($data->getAuthorizationState())) {
                $value_3 = $data->getAuthorizationState();
            }
            $dataArray['authorizationState'] = $value_3;
        }
        if ($data->isInitialized('isLocked') && null !== $data->getIsLocked()) {
            $dataArray['isLocked'] = $data->getIsLocked();
        }
        if ($data->isInitialized('lifeCycle') && null !== $data->getLifeCycle()) {
            $value_4 = $data->getLifeCycle();
            if (is_string($data->getLifeCycle())) {
                $value_4 = $data->getLifeCycle();
            }
            $dataArray['lifeCycle'] = $value_4;
        }
        if ($data->isInitialized('isSupportUser') && null !== $data->getIsSupportUser()) {
            $dataArray['isSupportUser'] = $data->getIsSupportUser();
        }
        if ($data->isInitialized('isReadOnly') && null !== $data->getIsReadOnly()) {
            $dataArray['isReadOnly'] = $data->getIsReadOnly();
        }
        if ($data->isInitialized('isFederated') && null !== $data->getIsFederated()) {
            $dataArray['isFederated'] = $data->getIsFederated();
        }
        if ($data->isInitialized('audit') && null !== $data->getAudit()) {
            $value_5 = $data->getAudit();
            if (is_object($data->getAudit())) {
                $value_5 = $data->getAudit() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getAudit(), 'json', $context));
            }
            $dataArray['audit'] = $value_5;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_6;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\UserDetail::class => false];
    }
}