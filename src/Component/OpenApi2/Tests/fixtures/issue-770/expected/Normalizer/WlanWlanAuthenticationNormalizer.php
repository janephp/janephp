<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class WlanWlanAuthenticationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAuthentication::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAuthentication::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAuthentication();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('throughController', $data) && \is_int($data['throughController'])) {
            $data['throughController'] = (bool) $data['throughController'];
        }
        if (\array_key_exists('realmBasedAuth', $data) && \is_int($data['realmBasedAuth'])) {
            $data['realmBasedAuth'] = (bool) $data['realmBasedAuth'];
        }
        if (\array_key_exists('locationDeliveryEnabled', $data) && \is_int($data['locationDeliveryEnabled'])) {
            $data['locationDeliveryEnabled'] = (bool) $data['locationDeliveryEnabled'];
        }
        if (\array_key_exists('throughController', $data)) {
            $object->throughController = $data['throughController'];
        }
        if (\array_key_exists('realmBasedAuth', $data)) {
            $object->realmBasedAuth = $data['realmBasedAuth'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('authenticationOption', $data)) {
            $object->authenticationOption = $data['authenticationOption'];
        }
        if (\array_key_exists('locationDeliveryEnabled', $data)) {
            $object->locationDeliveryEnabled = $data['locationDeliveryEnabled'];
        }
        if (\array_key_exists('backupAuthenticationId', $data)) {
            $object->backupAuthenticationId = $data['backupAuthenticationId'];
        }
        if (\array_key_exists('backupAuthenticationName', $data)) {
            $object->backupAuthenticationName = $data['backupAuthenticationName'];
        }
        if (\array_key_exists('backupAuthenticationOption', $data)) {
            $object->backupAuthenticationOption = $data['backupAuthenticationOption'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('throughController', get_object_vars($data)) && null !== ($data->throughController ?? null)) {
            $dataArray['throughController'] = $data->throughController ?? null;
        }
        if (array_key_exists('realmBasedAuth', get_object_vars($data)) && null !== ($data->realmBasedAuth ?? null)) {
            $dataArray['realmBasedAuth'] = $data->realmBasedAuth ?? null;
        }
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('authenticationOption', get_object_vars($data)) && null !== ($data->authenticationOption ?? null)) {
            $dataArray['authenticationOption'] = $data->authenticationOption ?? null;
        }
        if (array_key_exists('locationDeliveryEnabled', get_object_vars($data)) && null !== ($data->locationDeliveryEnabled ?? null)) {
            $dataArray['locationDeliveryEnabled'] = $data->locationDeliveryEnabled ?? null;
        }
        if (array_key_exists('backupAuthenticationId', get_object_vars($data)) && null !== ($data->backupAuthenticationId ?? null)) {
            $dataArray['backupAuthenticationId'] = $data->backupAuthenticationId ?? null;
        }
        if (array_key_exists('backupAuthenticationName', get_object_vars($data)) && null !== ($data->backupAuthenticationName ?? null)) {
            $dataArray['backupAuthenticationName'] = $data->backupAuthenticationName ?? null;
        }
        if (array_key_exists('backupAuthenticationOption', get_object_vars($data)) && null !== ($data->backupAuthenticationOption ?? null)) {
            $dataArray['backupAuthenticationOption'] = $data->backupAuthenticationOption ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAuthentication::class => false];
    }
}