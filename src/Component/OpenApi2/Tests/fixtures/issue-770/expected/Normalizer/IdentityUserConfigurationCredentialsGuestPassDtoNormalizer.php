<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class IdentityUserConfigurationCredentialsGuestPassDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityUserConfigurationCredentialsGuestPassDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityUserConfigurationCredentialsGuestPassDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityUserConfigurationCredentialsGuestPassDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('autoGeneratePassword', $data) && \is_int($data['autoGeneratePassword'])) {
            $data['autoGeneratePassword'] = (bool) $data['autoGeneratePassword'];
        }
        if (\array_key_exists('authenticationMethod', $data)) {
            $object->authenticationMethod = $data['authenticationMethod'];
        }
        if (\array_key_exists('key', $data)) {
            $object->key = $data['key'];
        }
        if (\array_key_exists('serviceProviderId', $data)) {
            $object->serviceProviderId = $data['serviceProviderId'];
        }
        if (\array_key_exists('creationDate', $data)) {
            $object->creationDate = $data['creationDate'];
        }
        if (\array_key_exists('expirationDate', $data)) {
            $object->expirationDate = $data['expirationDate'];
        }
        if (\array_key_exists('userKey', $data)) {
            $object->userKey = $data['userKey'];
        }
        if (\array_key_exists('userName', $data)) {
            $object->userName = $data['userName'];
        }
        if (\array_key_exists('displayName', $data)) {
            $object->displayName = $data['displayName'];
        }
        if (\array_key_exists('loginPassword', $data)) {
            $object->loginPassword = $data['loginPassword'];
        }
        if (\array_key_exists('guestExpiration', $data)) {
            $object->guestExpiration = $data['guestExpiration'];
        }
        if (\array_key_exists('wlan', $data)) {
            $object->wlan = $data['wlan'];
        }
        if (\array_key_exists('wlanName', $data)) {
            $object->wlanName = $data['wlanName'];
        }
        if (\array_key_exists('maxDevices', $data)) {
            $object->maxDevices = $data['maxDevices'];
        }
        if (\array_key_exists('expirationValue', $data)) {
            $object->expirationValue = $data['expirationValue'];
        }
        if (\array_key_exists('expirationUnit', $data)) {
            $object->expirationUnit = $data['expirationUnit'];
        }
        if (\array_key_exists('sessionUnit', $data)) {
            $object->sessionUnit = $data['sessionUnit'];
        }
        if (\array_key_exists('sessionValue', $data)) {
            $object->sessionValue = $data['sessionValue'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        if (\array_key_exists('expireAfterIfNotUsed', $data)) {
            $object->expireAfterIfNotUsed = $data['expireAfterIfNotUsed'];
        }
        if (\array_key_exists('macAddressList', $data)) {
            $values = [];
            foreach ($data['macAddressList'] as $value) {
                $values[] = $value;
            }
            $object->macAddressList = $values;
        }
        if (\array_key_exists('autoGeneratePassword', $data)) {
            $object->autoGeneratePassword = $data['autoGeneratePassword'];
        }
        if (\array_key_exists('creatorId', $data)) {
            $object->creatorId = $data['creatorId'];
        }
        if (\array_key_exists('comment', $data)) {
            $object->comment = $data['comment'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('authenticationMethod', get_object_vars($data)) && null !== ($data->authenticationMethod ?? null)) {
            $dataArray['authenticationMethod'] = $data->authenticationMethod ?? null;
        }
        if (array_key_exists('key', get_object_vars($data)) && null !== ($data->key ?? null)) {
            $dataArray['key'] = $data->key ?? null;
        }
        if (array_key_exists('serviceProviderId', get_object_vars($data)) && null !== ($data->serviceProviderId ?? null)) {
            $dataArray['serviceProviderId'] = $data->serviceProviderId ?? null;
        }
        if (array_key_exists('creationDate', get_object_vars($data)) && null !== ($data->creationDate ?? null)) {
            $dataArray['creationDate'] = $data->creationDate ?? null;
        }
        if (array_key_exists('expirationDate', get_object_vars($data)) && null !== ($data->expirationDate ?? null)) {
            $dataArray['expirationDate'] = $data->expirationDate ?? null;
        }
        if (array_key_exists('userKey', get_object_vars($data)) && null !== ($data->userKey ?? null)) {
            $dataArray['userKey'] = $data->userKey ?? null;
        }
        if (array_key_exists('userName', get_object_vars($data)) && null !== ($data->userName ?? null)) {
            $dataArray['userName'] = $data->userName ?? null;
        }
        if (array_key_exists('displayName', get_object_vars($data)) && null !== ($data->displayName ?? null)) {
            $dataArray['displayName'] = $data->displayName ?? null;
        }
        if (array_key_exists('loginPassword', get_object_vars($data)) && null !== ($data->loginPassword ?? null)) {
            $dataArray['loginPassword'] = $data->loginPassword ?? null;
        }
        if (array_key_exists('guestExpiration', get_object_vars($data)) && null !== ($data->guestExpiration ?? null)) {
            $dataArray['guestExpiration'] = $data->guestExpiration ?? null;
        }
        if (array_key_exists('wlan', get_object_vars($data)) && null !== ($data->wlan ?? null)) {
            $dataArray['wlan'] = $data->wlan ?? null;
        }
        if (array_key_exists('wlanName', get_object_vars($data)) && null !== ($data->wlanName ?? null)) {
            $dataArray['wlanName'] = $data->wlanName ?? null;
        }
        if (array_key_exists('maxDevices', get_object_vars($data)) && null !== ($data->maxDevices ?? null)) {
            $dataArray['maxDevices'] = $data->maxDevices ?? null;
        }
        if (array_key_exists('expirationValue', get_object_vars($data)) && null !== ($data->expirationValue ?? null)) {
            $dataArray['expirationValue'] = $data->expirationValue ?? null;
        }
        if (array_key_exists('expirationUnit', get_object_vars($data)) && null !== ($data->expirationUnit ?? null)) {
            $dataArray['expirationUnit'] = $data->expirationUnit ?? null;
        }
        if (array_key_exists('sessionUnit', get_object_vars($data)) && null !== ($data->sessionUnit ?? null)) {
            $dataArray['sessionUnit'] = $data->sessionUnit ?? null;
        }
        if (array_key_exists('sessionValue', get_object_vars($data)) && null !== ($data->sessionValue ?? null)) {
            $dataArray['sessionValue'] = $data->sessionValue ?? null;
        }
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        if (array_key_exists('expireAfterIfNotUsed', get_object_vars($data)) && null !== ($data->expireAfterIfNotUsed ?? null)) {
            $dataArray['expireAfterIfNotUsed'] = $data->expireAfterIfNotUsed ?? null;
        }
        if (array_key_exists('macAddressList', get_object_vars($data)) && null !== ($data->macAddressList ?? null)) {
            $values = [];
            foreach ($data->macAddressList ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['macAddressList'] = $values;
        }
        if (array_key_exists('autoGeneratePassword', get_object_vars($data)) && null !== ($data->autoGeneratePassword ?? null)) {
            $dataArray['autoGeneratePassword'] = $data->autoGeneratePassword ?? null;
        }
        if (array_key_exists('creatorId', get_object_vars($data)) && null !== ($data->creatorId ?? null)) {
            $dataArray['creatorId'] = $data->creatorId ?? null;
        }
        if (array_key_exists('comment', get_object_vars($data)) && null !== ($data->comment ?? null)) {
            $dataArray['comment'] = $data->comment ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityUserConfigurationCredentialsGuestPassDto::class => false];
    }
}