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
            $object->id = $data['id'];
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->id = null;
        }
        if (\array_key_exists('emailAddress', $data) && $data['emailAddress'] !== null) {
            $object->emailAddress = $data['emailAddress'];
        }
        elseif (\array_key_exists('emailAddress', $data) && $data['emailAddress'] === null) {
            $object->emailAddress = null;
        }
        if (\array_key_exists('firstName', $data) && $data['firstName'] !== null) {
            $object->firstName = $data['firstName'];
        }
        elseif (\array_key_exists('firstName', $data) && $data['firstName'] === null) {
            $object->firstName = null;
        }
        if (\array_key_exists('lastName', $data) && $data['lastName'] !== null) {
            $object->lastName = $data['lastName'];
        }
        elseif (\array_key_exists('lastName', $data) && $data['lastName'] === null) {
            $object->lastName = null;
        }
        if (\array_key_exists('languageCode', $data) && $data['languageCode'] !== null) {
            $object->languageCode = $data['languageCode'];
        }
        elseif (\array_key_exists('languageCode', $data) && $data['languageCode'] === null) {
            $object->languageCode = null;
        }
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $value = $data['address'];
            if (is_array($data['address'])) {
                $value = $this->denormalizer->denormalize($data['address'], \PicturePark\API\Model\UserAddress::class, 'json', $context);
            }
            $object->address = $value;
        }
        elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->address = null;
        }
        if (\array_key_exists('authorizationState', $data)) {
            $value_1 = $data['authorizationState'];
            if (is_string($data['authorizationState'])) {
                $value_1 = $data['authorizationState'];
            }
            $object->authorizationState = $value_1;
        }
        if (\array_key_exists('isLocked', $data)) {
            $object->isLocked = $data['isLocked'];
        }
        if (\array_key_exists('userRights', $data) && $data['userRights'] !== null) {
            $values = [];
            foreach ($data['userRights'] as $value_2) {
                $values[] = $value_2;
            }
            $object->userRights = $values;
        }
        elseif (\array_key_exists('userRights', $data) && $data['userRights'] === null) {
            $object->userRights = null;
        }
        if (\array_key_exists('userRoleIds', $data) && $data['userRoleIds'] !== null) {
            $values_1 = [];
            foreach ($data['userRoleIds'] as $value_3) {
                $values_1[] = $value_3;
            }
            $object->userRoleIds = $values_1;
        }
        elseif (\array_key_exists('userRoleIds', $data) && $data['userRoleIds'] === null) {
            $object->userRoleIds = null;
        }
        if (\array_key_exists('termsConsentExpired', $data)) {
            $object->termsConsentExpired = $data['termsConsentExpired'];
        }
        if (\array_key_exists('systemUserRoles', $data) && $data['systemUserRoles'] !== null) {
            $values_2 = [];
            foreach ($data['systemUserRoles'] as $value_4) {
                $values_2[] = $value_4;
            }
            $object->systemUserRoles = $values_2;
        }
        elseif (\array_key_exists('systemUserRoles', $data) && $data['systemUserRoles'] === null) {
            $object->systemUserRoles = null;
        }
        if (\array_key_exists('isDeveloper', $data)) {
            $object->isDeveloper = $data['isDeveloper'];
        }
        if (\array_key_exists('isFederated', $data)) {
            $object->isFederated = $data['isFederated'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('emailAddress', get_object_vars($data)) && null !== ($data->emailAddress ?? null)) {
            $dataArray['emailAddress'] = $data->emailAddress ?? null;
        }
        if (array_key_exists('firstName', get_object_vars($data)) && null !== ($data->firstName ?? null)) {
            $dataArray['firstName'] = $data->firstName ?? null;
        }
        if (array_key_exists('lastName', get_object_vars($data)) && null !== ($data->lastName ?? null)) {
            $dataArray['lastName'] = $data->lastName ?? null;
        }
        if (array_key_exists('languageCode', get_object_vars($data)) && null !== ($data->languageCode ?? null)) {
            $dataArray['languageCode'] = $data->languageCode ?? null;
        }
        if (array_key_exists('address', get_object_vars($data)) && null !== ($data->address ?? null)) {
            $value = $data->address ?? null;
            if (is_object($data->address ?? null)) {
                $value = ($data->address ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->address ?? null, 'json', $context));
            }
            $dataArray['address'] = $value;
        }
        $value_1 = $data->authorizationState ?? null;
        if (is_string($data->authorizationState ?? null)) {
            $value_1 = $data->authorizationState ?? null;
        }
        $dataArray['authorizationState'] = $value_1;
        $dataArray['isLocked'] = $data->isLocked ?? null;
        if (array_key_exists('userRights', get_object_vars($data)) && null !== ($data->userRights ?? null)) {
            $values = [];
            foreach ($data->userRights ?? null as $value_2) {
                $values[] = $value_2;
            }
            $dataArray['userRights'] = $values;
        }
        if (array_key_exists('userRoleIds', get_object_vars($data)) && null !== ($data->userRoleIds ?? null)) {
            $values_1 = [];
            foreach ($data->userRoleIds ?? null as $value_3) {
                $values_1[] = $value_3;
            }
            $dataArray['userRoleIds'] = $values_1;
        }
        $dataArray['termsConsentExpired'] = $data->termsConsentExpired ?? null;
        if (array_key_exists('systemUserRoles', get_object_vars($data)) && null !== ($data->systemUserRoles ?? null)) {
            $values_2 = [];
            foreach ($data->systemUserRoles ?? null as $value_4) {
                $values_2[] = $value_4;
            }
            $dataArray['systemUserRoles'] = $values_2;
        }
        $dataArray['isDeveloper'] = $data->isDeveloper ?? null;
        $dataArray['isFederated'] = $data->isFederated ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\UserProfile::class => false];
    }
}