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
class UserUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\UserUpdateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\UserUpdateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\UserUpdateRequest();
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
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\UserRole::class, 'json', $context);
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
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\UserUpdateRequest::class => false];
    }
}