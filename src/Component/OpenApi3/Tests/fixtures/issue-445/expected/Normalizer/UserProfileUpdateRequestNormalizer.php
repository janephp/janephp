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
class UserProfileUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\UserProfileUpdateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\UserProfileUpdateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\UserProfileUpdateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
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
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\UserProfileUpdateRequest::class => false];
    }
}