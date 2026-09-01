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
class UserWithRolesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\UserWithRoles::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\UserWithRoles::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\UserWithRoles();
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
        if (\array_key_exists('isSupportUser', $data) && \is_int($data['isSupportUser'])) {
            $data['isSupportUser'] = (bool) $data['isSupportUser'];
        }
        if (\array_key_exists('isReadOnly', $data) && \is_int($data['isReadOnly'])) {
            $data['isReadOnly'] = (bool) $data['isReadOnly'];
        }
        if (\array_key_exists('isFederated', $data) && \is_int($data['isFederated'])) {
            $data['isFederated'] = (bool) $data['isFederated'];
        }
        if (\array_key_exists('userRoleIds', $data) && $data['userRoleIds'] !== null) {
            $values = [];
            foreach ($data['userRoleIds'] as $value) {
                $values[] = $value;
            }
            $object->userRoleIds = $values;
        }
        elseif (\array_key_exists('userRoleIds', $data) && $data['userRoleIds'] === null) {
            $object->userRoleIds = null;
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
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
        if (\array_key_exists('emailAddress', $data)) {
            $object->emailAddress = $data['emailAddress'];
        }
        if (\array_key_exists('authorizationState', $data)) {
            $value_1 = $data['authorizationState'];
            if (is_string($data['authorizationState'])) {
                $value_1 = $data['authorizationState'];
            }
            $object->authorizationState = $value_1;
        }
        if (\array_key_exists('lifeCycle', $data)) {
            $value_2 = $data['lifeCycle'];
            if (is_string($data['lifeCycle'])) {
                $value_2 = $data['lifeCycle'];
            }
            $object->lifeCycle = $value_2;
        }
        if (\array_key_exists('isLocked', $data)) {
            $object->isLocked = $data['isLocked'];
        }
        if (\array_key_exists('isSupportUser', $data)) {
            $object->isSupportUser = $data['isSupportUser'];
        }
        if (\array_key_exists('isReadOnly', $data)) {
            $object->isReadOnly = $data['isReadOnly'];
        }
        if (\array_key_exists('isFederated', $data)) {
            $object->isFederated = $data['isFederated'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('userRoleIds', get_object_vars($data)) && null !== ($data->userRoleIds ?? null)) {
            $values = [];
            foreach ($data->userRoleIds ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['userRoleIds'] = $values;
        }
        $dataArray['id'] = $data->id ?? null;
        if (array_key_exists('firstName', get_object_vars($data)) && null !== ($data->firstName ?? null)) {
            $dataArray['firstName'] = $data->firstName ?? null;
        }
        if (array_key_exists('lastName', get_object_vars($data)) && null !== ($data->lastName ?? null)) {
            $dataArray['lastName'] = $data->lastName ?? null;
        }
        $dataArray['emailAddress'] = $data->emailAddress ?? null;
        $value_1 = $data->authorizationState ?? null;
        if (is_string($data->authorizationState ?? null)) {
            $value_1 = $data->authorizationState ?? null;
        }
        $dataArray['authorizationState'] = $value_1;
        $value_2 = $data->lifeCycle ?? null;
        if (is_string($data->lifeCycle ?? null)) {
            $value_2 = $data->lifeCycle ?? null;
        }
        $dataArray['lifeCycle'] = $value_2;
        $dataArray['isLocked'] = $data->isLocked ?? null;
        $dataArray['isSupportUser'] = $data->isSupportUser ?? null;
        $dataArray['isReadOnly'] = $data->isReadOnly ?? null;
        $dataArray['isFederated'] = $data->isFederated ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\UserWithRoles::class => false];
    }
}