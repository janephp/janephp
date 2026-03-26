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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAuthentication();
        if (\array_key_exists('throughController', $data) && \is_int($data['throughController'])) {
            $data['throughController'] = (bool) $data['throughController'];
        }
        if (\array_key_exists('realmBasedAuth', $data) && \is_int($data['realmBasedAuth'])) {
            $data['realmBasedAuth'] = (bool) $data['realmBasedAuth'];
        }
        if (\array_key_exists('locationDeliveryEnabled', $data) && \is_int($data['locationDeliveryEnabled'])) {
            $data['locationDeliveryEnabled'] = (bool) $data['locationDeliveryEnabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('throughController', $data)) {
            $object->setThroughController($data['throughController']);
        }
        if (\array_key_exists('realmBasedAuth', $data)) {
            $object->setRealmBasedAuth($data['realmBasedAuth']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('authenticationOption', $data)) {
            $object->setAuthenticationOption($data['authenticationOption']);
        }
        if (\array_key_exists('locationDeliveryEnabled', $data)) {
            $object->setLocationDeliveryEnabled($data['locationDeliveryEnabled']);
        }
        if (\array_key_exists('backupAuthenticationId', $data)) {
            $object->setBackupAuthenticationId($data['backupAuthenticationId']);
        }
        if (\array_key_exists('backupAuthenticationName', $data)) {
            $object->setBackupAuthenticationName($data['backupAuthenticationName']);
        }
        if (\array_key_exists('backupAuthenticationOption', $data)) {
            $object->setBackupAuthenticationOption($data['backupAuthenticationOption']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('throughController') && null !== $data->getThroughController()) {
            $dataArray['throughController'] = $data->getThroughController();
        }
        if ($data->isInitialized('realmBasedAuth') && null !== $data->getRealmBasedAuth()) {
            $dataArray['realmBasedAuth'] = $data->getRealmBasedAuth();
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('authenticationOption') && null !== $data->getAuthenticationOption()) {
            $dataArray['authenticationOption'] = $data->getAuthenticationOption();
        }
        if ($data->isInitialized('locationDeliveryEnabled') && null !== $data->getLocationDeliveryEnabled()) {
            $dataArray['locationDeliveryEnabled'] = $data->getLocationDeliveryEnabled();
        }
        if ($data->isInitialized('backupAuthenticationId') && null !== $data->getBackupAuthenticationId()) {
            $dataArray['backupAuthenticationId'] = $data->getBackupAuthenticationId();
        }
        if ($data->isInitialized('backupAuthenticationName') && null !== $data->getBackupAuthenticationName()) {
            $dataArray['backupAuthenticationName'] = $data->getBackupAuthenticationName();
        }
        if ($data->isInitialized('backupAuthenticationOption') && null !== $data->getBackupAuthenticationOption()) {
            $dataArray['backupAuthenticationOption'] = $data->getBackupAuthenticationOption();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAuthentication::class => false];
    }
}