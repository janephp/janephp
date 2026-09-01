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
class UserCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\UserCreateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\UserCreateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\UserCreateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
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
        if (\array_key_exists('languageCode', $data) && $data['languageCode'] !== null) {
            $object->languageCode = $data['languageCode'];
        }
        elseif (\array_key_exists('languageCode', $data) && $data['languageCode'] === null) {
            $object->languageCode = null;
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
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $value_1 = $data['address'];
            if (is_array($data['address'])) {
                $value_1 = $this->denormalizer->denormalize($data['address'], \PicturePark\API\Model\UserAddress::class, 'json', $context);
            }
            $object->address = $value_1;
        }
        elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->address = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('firstName', get_object_vars($data)) && null !== ($data->firstName ?? null)) {
            $dataArray['firstName'] = $data->firstName ?? null;
        }
        if (array_key_exists('lastName', get_object_vars($data)) && null !== ($data->lastName ?? null)) {
            $dataArray['lastName'] = $data->lastName ?? null;
        }
        $dataArray['emailAddress'] = $data->emailAddress ?? null;
        if (array_key_exists('languageCode', get_object_vars($data)) && null !== ($data->languageCode ?? null)) {
            $dataArray['languageCode'] = $data->languageCode ?? null;
        }
        if (array_key_exists('userRoleIds', get_object_vars($data)) && null !== ($data->userRoleIds ?? null)) {
            $values = [];
            foreach ($data->userRoleIds ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['userRoleIds'] = $values;
        }
        if (array_key_exists('address', get_object_vars($data)) && null !== ($data->address ?? null)) {
            $value_1 = $data->address ?? null;
            if (is_object($data->address ?? null)) {
                $value_1 = ($data->address ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->address ?? null, 'json', $context));
            }
            $dataArray['address'] = $value_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\UserCreateRequest::class => false];
    }
}