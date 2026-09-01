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
class UserAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\UserAddress::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\UserAddress::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\UserAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('company', $data) && $data['company'] !== null) {
            $object->company = $data['company'];
        }
        elseif (\array_key_exists('company', $data) && $data['company'] === null) {
            $object->company = null;
        }
        if (\array_key_exists('department', $data) && $data['department'] !== null) {
            $object->department = $data['department'];
        }
        elseif (\array_key_exists('department', $data) && $data['department'] === null) {
            $object->department = null;
        }
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $object->address = $data['address'];
        }
        elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->address = null;
        }
        if (\array_key_exists('alternativeAddress', $data) && $data['alternativeAddress'] !== null) {
            $object->alternativeAddress = $data['alternativeAddress'];
        }
        elseif (\array_key_exists('alternativeAddress', $data) && $data['alternativeAddress'] === null) {
            $object->alternativeAddress = null;
        }
        if (\array_key_exists('zip', $data) && $data['zip'] !== null) {
            $object->zip = $data['zip'];
        }
        elseif (\array_key_exists('zip', $data) && $data['zip'] === null) {
            $object->zip = null;
        }
        if (\array_key_exists('city', $data) && $data['city'] !== null) {
            $object->city = $data['city'];
        }
        elseif (\array_key_exists('city', $data) && $data['city'] === null) {
            $object->city = null;
        }
        if (\array_key_exists('phone', $data) && $data['phone'] !== null) {
            $object->phone = $data['phone'];
        }
        elseif (\array_key_exists('phone', $data) && $data['phone'] === null) {
            $object->phone = null;
        }
        if (\array_key_exists('countryCode', $data) && $data['countryCode'] !== null) {
            $object->countryCode = $data['countryCode'];
        }
        elseif (\array_key_exists('countryCode', $data) && $data['countryCode'] === null) {
            $object->countryCode = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('company', get_object_vars($data)) && null !== ($data->company ?? null)) {
            $dataArray['company'] = $data->company ?? null;
        }
        if (array_key_exists('department', get_object_vars($data)) && null !== ($data->department ?? null)) {
            $dataArray['department'] = $data->department ?? null;
        }
        if (array_key_exists('address', get_object_vars($data)) && null !== ($data->address ?? null)) {
            $dataArray['address'] = $data->address ?? null;
        }
        if (array_key_exists('alternativeAddress', get_object_vars($data)) && null !== ($data->alternativeAddress ?? null)) {
            $dataArray['alternativeAddress'] = $data->alternativeAddress ?? null;
        }
        if (array_key_exists('zip', get_object_vars($data)) && null !== ($data->zip ?? null)) {
            $dataArray['zip'] = $data->zip ?? null;
        }
        if (array_key_exists('city', get_object_vars($data)) && null !== ($data->city ?? null)) {
            $dataArray['city'] = $data->city ?? null;
        }
        if (array_key_exists('phone', get_object_vars($data)) && null !== ($data->phone ?? null)) {
            $dataArray['phone'] = $data->phone ?? null;
        }
        if (array_key_exists('countryCode', get_object_vars($data)) && null !== ($data->countryCode ?? null)) {
            $dataArray['countryCode'] = $data->countryCode ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\UserAddress::class => false];
    }
}