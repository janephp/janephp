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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\UserProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
            $object->setAddress($data['address']);
        }
        elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->setAddress(null);
        }
        if (\array_key_exists('authorizationState', $data)) {
            $object->setAuthorizationState($data['authorizationState']);
        }
        if (\array_key_exists('isLocked', $data)) {
            $object->setIsLocked($data['isLocked']);
        }
        if (\array_key_exists('userRights', $data) && $data['userRights'] !== null) {
            $values = [];
            foreach ($data['userRights'] as $value) {
                $values[] = $value;
            }
            $object->setUserRights($values);
        }
        elseif (\array_key_exists('userRights', $data) && $data['userRights'] === null) {
            $object->setUserRights(null);
        }
        if (\array_key_exists('userRoleIds', $data) && $data['userRoleIds'] !== null) {
            $values_1 = [];
            foreach ($data['userRoleIds'] as $value_1) {
                $values_1[] = $value_1;
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
            foreach ($data['systemUserRoles'] as $value_2) {
                $values_2[] = $value_2;
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
            $dataArray['address'] = $data->getAddress();
        }
        $dataArray['authorizationState'] = $data->getAuthorizationState();
        $dataArray['isLocked'] = $data->getIsLocked();
        if ($data->isInitialized('userRights') && null !== $data->getUserRights()) {
            $values = [];
            foreach ($data->getUserRights() as $value) {
                $values[] = $value;
            }
            $dataArray['userRights'] = $values;
        }
        if ($data->isInitialized('userRoleIds') && null !== $data->getUserRoleIds()) {
            $values_1 = [];
            foreach ($data->getUserRoleIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['userRoleIds'] = $values_1;
        }
        $dataArray['termsConsentExpired'] = $data->getTermsConsentExpired();
        if ($data->isInitialized('systemUserRoles') && null !== $data->getSystemUserRoles()) {
            $values_2 = [];
            foreach ($data->getSystemUserRoles() as $value_2) {
                $values_2[] = $value_2;
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