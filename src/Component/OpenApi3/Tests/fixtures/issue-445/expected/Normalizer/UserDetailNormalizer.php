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
        }
        if (\array_key_exists('firstName', $data) && $data['firstName'] !== null) {
            $object->setFirstName($data['firstName']);
            unset($data['firstName']);
        }
        elseif (\array_key_exists('firstName', $data) && $data['firstName'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('lastName', $data) && $data['lastName'] !== null) {
            $object->setLastName($data['lastName']);
            unset($data['lastName']);
        }
        elseif (\array_key_exists('lastName', $data) && $data['lastName'] === null) {
            $object->setLastName(null);
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
        }
        if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
            $object->setComment($data['comment']);
            unset($data['comment']);
        }
        elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
            $object->setComment(null);
        }
        if (\array_key_exists('languageCode', $data) && $data['languageCode'] !== null) {
            $object->setLanguageCode($data['languageCode']);
            unset($data['languageCode']);
        }
        elseif (\array_key_exists('languageCode', $data) && $data['languageCode'] === null) {
            $object->setLanguageCode(null);
        }
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $object->setAddress($data['address']);
            unset($data['address']);
        }
        elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->setAddress(null);
        }
        if (\array_key_exists('identityProviderId', $data) && $data['identityProviderId'] !== null) {
            $object->setIdentityProviderId($data['identityProviderId']);
            unset($data['identityProviderId']);
        }
        elseif (\array_key_exists('identityProviderId', $data) && $data['identityProviderId'] === null) {
            $object->setIdentityProviderId(null);
        }
        if (\array_key_exists('ownerTokens', $data) && $data['ownerTokens'] !== null) {
            $values_1 = [];
            foreach ($data['ownerTokens'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\OwnerToken::class, 'json', $context);
            }
            $object->setOwnerTokens($values_1);
            unset($data['ownerTokens']);
        }
        elseif (\array_key_exists('ownerTokens', $data) && $data['ownerTokens'] === null) {
            $object->setOwnerTokens(null);
        }
        if (\array_key_exists('authorizationState', $data)) {
            $object->setAuthorizationState($data['authorizationState']);
            unset($data['authorizationState']);
        }
        if (\array_key_exists('isLocked', $data)) {
            $object->setIsLocked($data['isLocked']);
            unset($data['isLocked']);
        }
        if (\array_key_exists('lifeCycle', $data)) {
            $object->setLifeCycle($data['lifeCycle']);
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
            $object->setAudit($data['audit']);
            unset($data['audit']);
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->setAudit(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
            $dataArray['address'] = $data->getAddress();
        }
        if ($data->isInitialized('identityProviderId') && null !== $data->getIdentityProviderId()) {
            $dataArray['identityProviderId'] = $data->getIdentityProviderId();
        }
        if ($data->isInitialized('ownerTokens') && null !== $data->getOwnerTokens()) {
            $values_1 = [];
            foreach ($data->getOwnerTokens() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['ownerTokens'] = $values_1;
        }
        if ($data->isInitialized('authorizationState') && null !== $data->getAuthorizationState()) {
            $dataArray['authorizationState'] = $data->getAuthorizationState();
        }
        if ($data->isInitialized('isLocked') && null !== $data->getIsLocked()) {
            $dataArray['isLocked'] = $data->getIsLocked();
        }
        if ($data->isInitialized('lifeCycle') && null !== $data->getLifeCycle()) {
            $dataArray['lifeCycle'] = $data->getLifeCycle();
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
            $dataArray['audit'] = $data->getAudit();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\UserDetail::class => false];
    }
}