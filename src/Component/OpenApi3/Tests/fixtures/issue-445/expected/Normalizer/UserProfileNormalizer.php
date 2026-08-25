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
class UserProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\UserProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\UserProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\UserProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isLocked', $data) && \is_int($data['isLocked'])) {
            $data['isLocked'] = (bool) $data['isLocked'];
        }
        if (\array_key_exists('termsConsentExpired', $data) && \is_int($data['termsConsentExpired'])) {
            $data['termsConsentExpired'] = (bool) $data['termsConsentExpired'];
        }
        if (\array_key_exists('isDeveloper', $data) && \is_int($data['isDeveloper'])) {
            $data['isDeveloper'] = (bool) $data['isDeveloper'];
        }
        if (\array_key_exists('isFederated', $data) && \is_int($data['isFederated'])) {
            $data['isFederated'] = (bool) $data['isFederated'];
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('emailAddress', $data) && $data['emailAddress'] !== null) {
            $object->setEmailAddress($data['emailAddress']);
        }
        elseif (\array_key_exists('emailAddress', $data) && $data['emailAddress'] === null) {
            $object->setEmailAddress(null);
        }
        if (\array_key_exists('firstName', $data) && $data['firstName'] !== null) {
            $object->setFirstName($data['firstName']);
        }
        elseif (\array_key_exists('firstName', $data) && $data['firstName'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('lastName', $data) && $data['lastName'] !== null) {
            $object->setLastName($data['lastName']);
        }
        elseif (\array_key_exists('lastName', $data) && $data['lastName'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('languageCode', $data) && $data['languageCode'] !== null) {
            $object->setLanguageCode($data['languageCode']);
        }
        elseif (\array_key_exists('languageCode', $data) && $data['languageCode'] === null) {
            $object->setLanguageCode(null);
        }
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $value = $data['address'];
            if (is_array($data['address'])) {
                $value = $this->denormalizer->denormalize($data['address'], \PicturePark\API\Model\UserAddress::class, 'json', $context);
            }
            $object->setAddress($value);
        }
        elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->setAddress(null);
        }
        if (\array_key_exists('authorizationState', $data)) {
            $value_1 = $data['authorizationState'];
            if (is_string($data['authorizationState'])) {
                $value_1 = $data['authorizationState'];
            }
            $object->setAuthorizationState($value_1);
        }
        if (\array_key_exists('isLocked', $data)) {
            $object->setIsLocked($data['isLocked']);
        }
        if (\array_key_exists('userRights', $data) && $data['userRights'] !== null) {
            $values = [];
            foreach ($data['userRights'] as $value_2) {
                $values[] = $value_2;
            }
            $object->setUserRights($values);
        }
        elseif (\array_key_exists('userRights', $data) && $data['userRights'] === null) {
            $object->setUserRights(null);
        }
        if (\array_key_exists('userRoleIds', $data) && $data['userRoleIds'] !== null) {
            $values_1 = [];
            foreach ($data['userRoleIds'] as $value_3) {
                $values_1[] = $value_3;
            }
            $object->setUserRoleIds($values_1);
        }
        elseif (\array_key_exists('userRoleIds', $data) && $data['userRoleIds'] === null) {
            $object->setUserRoleIds(null);
        }
        if (\array_key_exists('termsConsentExpired', $data)) {
            $object->setTermsConsentExpired($data['termsConsentExpired']);
        }
        if (\array_key_exists('systemUserRoles', $data) && $data['systemUserRoles'] !== null) {
            $values_2 = [];
            foreach ($data['systemUserRoles'] as $value_4) {
                $values_2[] = $value_4;
            }
            $object->setSystemUserRoles($values_2);
        }
        elseif (\array_key_exists('systemUserRoles', $data) && $data['systemUserRoles'] === null) {
            $object->setSystemUserRoles(null);
        }
        if (\array_key_exists('isDeveloper', $data)) {
            $object->setIsDeveloper($data['isDeveloper']);
        }
        if (\array_key_exists('isFederated', $data)) {
            $object->setIsFederated($data['isFederated']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('emailAddress') && null !== $data->getEmailAddress()) {
            $dataArray['emailAddress'] = $data->getEmailAddress();
        }
        if ($data->isInitialized('firstName') && null !== $data->getFirstName()) {
            $dataArray['firstName'] = $data->getFirstName();
        }
        if ($data->isInitialized('lastName') && null !== $data->getLastName()) {
            $dataArray['lastName'] = $data->getLastName();
        }
        if ($data->isInitialized('languageCode') && null !== $data->getLanguageCode()) {
            $dataArray['languageCode'] = $data->getLanguageCode();
        }
        if ($data->isInitialized('address') && null !== $data->getAddress()) {
            $value = $data->getAddress();
            if (is_object($data->getAddress())) {
                $value = $data->getAddress() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getAddress(), 'json', $context));
            }
            $dataArray['address'] = $value;
        }
        $value_1 = $data->getAuthorizationState();
        if (is_string($data->getAuthorizationState())) {
            $value_1 = $data->getAuthorizationState();
        }
        $dataArray['authorizationState'] = $value_1;
        $dataArray['isLocked'] = $data->getIsLocked();
        if ($data->isInitialized('userRights') && null !== $data->getUserRights()) {
            $values = [];
            foreach ($data->getUserRights() as $value_2) {
                $values[] = $value_2;
            }
            $dataArray['userRights'] = $values;
        }
        if ($data->isInitialized('userRoleIds') && null !== $data->getUserRoleIds()) {
            $values_1 = [];
            foreach ($data->getUserRoleIds() as $value_3) {
                $values_1[] = $value_3;
            }
            $dataArray['userRoleIds'] = $values_1;
        }
        $dataArray['termsConsentExpired'] = $data->getTermsConsentExpired();
        if ($data->isInitialized('systemUserRoles') && null !== $data->getSystemUserRoles()) {
            $values_2 = [];
            foreach ($data->getSystemUserRoles() as $value_4) {
                $values_2[] = $value_4;
            }
            $dataArray['systemUserRoles'] = $values_2;
        }
        $dataArray['isDeveloper'] = $data->getIsDeveloper();
        $dataArray['isFederated'] = $data->getIsFederated();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\UserProfile::class => false];
    }
}