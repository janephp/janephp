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
            $object->setCompany($data['company']);
        }
        elseif (\array_key_exists('company', $data) && $data['company'] === null) {
            $object->setCompany(null);
        }
        if (\array_key_exists('department', $data) && $data['department'] !== null) {
            $object->setDepartment($data['department']);
        }
        elseif (\array_key_exists('department', $data) && $data['department'] === null) {
            $object->setDepartment(null);
        }
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $object->setAddress($data['address']);
        }
        elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->setAddress(null);
        }
        if (\array_key_exists('alternativeAddress', $data) && $data['alternativeAddress'] !== null) {
            $object->setAlternativeAddress($data['alternativeAddress']);
        }
        elseif (\array_key_exists('alternativeAddress', $data) && $data['alternativeAddress'] === null) {
            $object->setAlternativeAddress(null);
        }
        if (\array_key_exists('zip', $data) && $data['zip'] !== null) {
            $object->setZip($data['zip']);
        }
        elseif (\array_key_exists('zip', $data) && $data['zip'] === null) {
            $object->setZip(null);
        }
        if (\array_key_exists('city', $data) && $data['city'] !== null) {
            $object->setCity($data['city']);
        }
        elseif (\array_key_exists('city', $data) && $data['city'] === null) {
            $object->setCity(null);
        }
        if (\array_key_exists('phone', $data) && $data['phone'] !== null) {
            $object->setPhone($data['phone']);
        }
        elseif (\array_key_exists('phone', $data) && $data['phone'] === null) {
            $object->setPhone(null);
        }
        if (\array_key_exists('countryCode', $data) && $data['countryCode'] !== null) {
            $object->setCountryCode($data['countryCode']);
        }
        elseif (\array_key_exists('countryCode', $data) && $data['countryCode'] === null) {
            $object->setCountryCode(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('company')) {
            $dataArray['company'] = $data->getCompany();
        }
        if ($data->isInitialized('department')) {
            $dataArray['department'] = $data->getDepartment();
        }
        if ($data->isInitialized('address')) {
            $dataArray['address'] = $data->getAddress();
        }
        if ($data->isInitialized('alternativeAddress')) {
            $dataArray['alternativeAddress'] = $data->getAlternativeAddress();
        }
        if ($data->isInitialized('zip')) {
            $dataArray['zip'] = $data->getZip();
        }
        if ($data->isInitialized('city')) {
            $dataArray['city'] = $data->getCity();
        }
        if ($data->isInitialized('phone')) {
            $dataArray['phone'] = $data->getPhone();
        }
        if ($data->isInitialized('countryCode')) {
            $dataArray['countryCode'] = $data->getCountryCode();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\UserAddress::class => false];
    }
}