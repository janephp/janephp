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
            $object->id = $data['id'];
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->id = null;
            unset($data['id']);
        }
        if (\array_key_exists('firstName', $data) && $data['firstName'] !== null) {
            $object->firstName = $data['firstName'];
            unset($data['firstName']);
        }
        elseif (\array_key_exists('firstName', $data) && $data['firstName'] === null) {
            $object->firstName = null;
            unset($data['firstName']);
        }
        if (\array_key_exists('lastName', $data) && $data['lastName'] !== null) {
            $object->lastName = $data['lastName'];
            unset($data['lastName']);
        }
        elseif (\array_key_exists('lastName', $data) && $data['lastName'] === null) {
            $object->lastName = null;
            unset($data['lastName']);
        }
        if (\array_key_exists('emailAddress', $data)) {
            $object->emailAddress = $data['emailAddress'];
            unset($data['emailAddress']);
        }
        if (\array_key_exists('isDeleted', $data)) {
            $object->isDeleted = $data['isDeleted'];
            unset($data['isDeleted']);
        }
        if (\array_key_exists('userRoles', $data) && $data['userRoles'] !== null) {
            $values = [];
            foreach ($data['userRoles'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\UserRoleAssignment::class, 'json', $context);
            }
            $object->userRoles = $values;
            unset($data['userRoles']);
        }
        elseif (\array_key_exists('userRoles', $data) && $data['userRoles'] === null) {
            $object->userRoles = null;
            unset($data['userRoles']);
        }
        if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
            $object->comment = $data['comment'];
            unset($data['comment']);
        }
        elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
            $object->comment = null;
            unset($data['comment']);
        }
        if (\array_key_exists('languageCode', $data) && $data['languageCode'] !== null) {
            $object->languageCode = $data['languageCode'];
            unset($data['languageCode']);
        }
        elseif (\array_key_exists('languageCode', $data) && $data['languageCode'] === null) {
            $object->languageCode = null;
            unset($data['languageCode']);
        }
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $value_1 = $data['address'];
            if (is_array($data['address'])) {
                $value_1 = $this->denormalizer->denormalize($data['address'], \PicturePark\API\Model\UserAddress::class, 'json', $context);
            }
            $object->address = $value_1;
            unset($data['address']);
        }
        elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->address = null;
            unset($data['address']);
        }
        if (\array_key_exists('identityProviderId', $data) && $data['identityProviderId'] !== null) {
            $object->identityProviderId = $data['identityProviderId'];
            unset($data['identityProviderId']);
        }
        elseif (\array_key_exists('identityProviderId', $data) && $data['identityProviderId'] === null) {
            $object->identityProviderId = null;
            unset($data['identityProviderId']);
        }
        if (\array_key_exists('ownerTokens', $data) && $data['ownerTokens'] !== null) {
            $values_1 = [];
            foreach ($data['ownerTokens'] as $value_2) {
                $values_1[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\OwnerToken::class, 'json', $context);
            }
            $object->ownerTokens = $values_1;
            unset($data['ownerTokens']);
        }
        elseif (\array_key_exists('ownerTokens', $data) && $data['ownerTokens'] === null) {
            $object->ownerTokens = null;
            unset($data['ownerTokens']);
        }
        if (\array_key_exists('authorizationState', $data)) {
            $value_3 = $data['authorizationState'];
            if (is_string($data['authorizationState'])) {
                $value_3 = $data['authorizationState'];
            }
            $object->authorizationState = $value_3;
            unset($data['authorizationState']);
        }
        if (\array_key_exists('isLocked', $data)) {
            $object->isLocked = $data['isLocked'];
            unset($data['isLocked']);
        }
        if (\array_key_exists('lifeCycle', $data)) {
            $value_4 = $data['lifeCycle'];
            if (is_string($data['lifeCycle'])) {
                $value_4 = $data['lifeCycle'];
            }
            $object->lifeCycle = $value_4;
            unset($data['lifeCycle']);
        }
        if (\array_key_exists('isSupportUser', $data)) {
            $object->isSupportUser = $data['isSupportUser'];
            unset($data['isSupportUser']);
        }
        if (\array_key_exists('isReadOnly', $data)) {
            $object->isReadOnly = $data['isReadOnly'];
            unset($data['isReadOnly']);
        }
        if (\array_key_exists('isFederated', $data)) {
            $object->isFederated = $data['isFederated'];
            unset($data['isFederated']);
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $value_5 = $data['audit'];
            if (is_array($data['audit']) and \array_key_exists('creationDate', $data['audit']) and \array_key_exists('modificationDate', $data['audit'])) {
                $value_5 = $this->denormalizer->denormalize($data['audit'], \PicturePark\API\Model\UserAuditDetail::class, 'json', $context);
            }
            $object->audit = $value_5;
            unset($data['audit']);
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->audit = null;
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
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('firstName', get_object_vars($data)) && null !== ($data->firstName ?? null)) {
            $dataArray['firstName'] = $data->firstName ?? null;
        }
        if (array_key_exists('lastName', get_object_vars($data)) && null !== ($data->lastName ?? null)) {
            $dataArray['lastName'] = $data->lastName ?? null;
        }
        $dataArray['emailAddress'] = $data->emailAddress ?? null;
        $dataArray['isDeleted'] = $data->isDeleted ?? null;
        if (array_key_exists('userRoles', get_object_vars($data)) && null !== ($data->userRoles ?? null)) {
            $values = [];
            foreach ($data->userRoles ?? null as $value) {
                $values[] = $value === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['userRoles'] = $values;
        }
        if (array_key_exists('comment', get_object_vars($data)) && null !== ($data->comment ?? null)) {
            $dataArray['comment'] = $data->comment ?? null;
        }
        if (array_key_exists('languageCode', get_object_vars($data)) && null !== ($data->languageCode ?? null)) {
            $dataArray['languageCode'] = $data->languageCode ?? null;
        }
        if (array_key_exists('address', get_object_vars($data)) && null !== ($data->address ?? null)) {
            $value_1 = $data->address ?? null;
            if (is_object($data->address ?? null)) {
                $value_1 = ($data->address ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->address ?? null, 'json', $context));
            }
            $dataArray['address'] = $value_1;
        }
        if (array_key_exists('identityProviderId', get_object_vars($data)) && null !== ($data->identityProviderId ?? null)) {
            $dataArray['identityProviderId'] = $data->identityProviderId ?? null;
        }
        if (array_key_exists('ownerTokens', get_object_vars($data)) && null !== ($data->ownerTokens ?? null)) {
            $values_1 = [];
            foreach ($data->ownerTokens ?? null as $value_2) {
                $values_1[] = $value_2 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['ownerTokens'] = $values_1;
        }
        if (array_key_exists('authorizationState', get_object_vars($data)) && null !== ($data->authorizationState ?? null)) {
            $value_3 = $data->authorizationState ?? null;
            if (is_string($data->authorizationState ?? null)) {
                $value_3 = $data->authorizationState ?? null;
            }
            $dataArray['authorizationState'] = $value_3;
        }
        if (array_key_exists('isLocked', get_object_vars($data)) && null !== ($data->isLocked ?? null)) {
            $dataArray['isLocked'] = $data->isLocked ?? null;
        }
        if (array_key_exists('lifeCycle', get_object_vars($data)) && null !== ($data->lifeCycle ?? null)) {
            $value_4 = $data->lifeCycle ?? null;
            if (is_string($data->lifeCycle ?? null)) {
                $value_4 = $data->lifeCycle ?? null;
            }
            $dataArray['lifeCycle'] = $value_4;
        }
        if (array_key_exists('isSupportUser', get_object_vars($data)) && null !== ($data->isSupportUser ?? null)) {
            $dataArray['isSupportUser'] = $data->isSupportUser ?? null;
        }
        if (array_key_exists('isReadOnly', get_object_vars($data)) && null !== ($data->isReadOnly ?? null)) {
            $dataArray['isReadOnly'] = $data->isReadOnly ?? null;
        }
        if (array_key_exists('isFederated', get_object_vars($data)) && null !== ($data->isFederated ?? null)) {
            $dataArray['isFederated'] = $data->isFederated ?? null;
        }
        if (array_key_exists('audit', get_object_vars($data)) && null !== ($data->audit ?? null)) {
            $value_5 = $data->audit ?? null;
            if (is_object($data->audit ?? null)) {
                $value_5 = ($data->audit ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->audit ?? null, 'json', $context));
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