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
class IdentityUserConfigurationCredentialsGuestPassDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUserConfigurationCredentialsGuestPassDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUserConfigurationCredentialsGuestPassDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUserConfigurationCredentialsGuestPassDto();
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
            $object->setAuthenticationMethod($data['authenticationMethod']);
        }
        if (\array_key_exists('key', $data)) {
            $object->setKey($data['key']);
        }
        if (\array_key_exists('serviceProviderId', $data)) {
            $object->setServiceProviderId($data['serviceProviderId']);
        }
        if (\array_key_exists('creationDate', $data)) {
            $object->setCreationDate($data['creationDate']);
        }
        if (\array_key_exists('expirationDate', $data)) {
            $object->setExpirationDate($data['expirationDate']);
        }
        if (\array_key_exists('userKey', $data)) {
            $object->setUserKey($data['userKey']);
        }
        if (\array_key_exists('userName', $data)) {
            $object->setUserName($data['userName']);
        }
        if (\array_key_exists('displayName', $data)) {
            $object->setDisplayName($data['displayName']);
        }
        if (\array_key_exists('loginPassword', $data)) {
            $object->setLoginPassword($data['loginPassword']);
        }
        if (\array_key_exists('guestExpiration', $data)) {
            $object->setGuestExpiration($data['guestExpiration']);
        }
        if (\array_key_exists('wlan', $data)) {
            $object->setWlan($data['wlan']);
        }
        if (\array_key_exists('wlanName', $data)) {
            $object->setWlanName($data['wlanName']);
        }
        if (\array_key_exists('maxDevices', $data)) {
            $object->setMaxDevices($data['maxDevices']);
        }
        if (\array_key_exists('expirationValue', $data)) {
            $object->setExpirationValue($data['expirationValue']);
        }
        if (\array_key_exists('expirationUnit', $data)) {
            $object->setExpirationUnit($data['expirationUnit']);
        }
        if (\array_key_exists('sessionUnit', $data)) {
            $object->setSessionUnit($data['sessionUnit']);
        }
        if (\array_key_exists('sessionValue', $data)) {
            $object->setSessionValue($data['sessionValue']);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        if (\array_key_exists('expireAfterIfNotUsed', $data)) {
            $object->setExpireAfterIfNotUsed($data['expireAfterIfNotUsed']);
        }
        if (\array_key_exists('macAddressList', $data)) {
            $values = [];
            foreach ($data['macAddressList'] as $value) {
                $values[] = $value;
            }
            $object->setMacAddressList($values);
        }
        if (\array_key_exists('autoGeneratePassword', $data)) {
            $object->setAutoGeneratePassword($data['autoGeneratePassword']);
        }
        if (\array_key_exists('creatorId', $data)) {
            $object->setCreatorId($data['creatorId']);
        }
        if (\array_key_exists('comment', $data)) {
            $object->setComment($data['comment']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('authenticationMethod') && null !== $data->getAuthenticationMethod()) {
            $dataArray['authenticationMethod'] = $data->getAuthenticationMethod();
        }
        if ($data->isInitialized('key') && null !== $data->getKey()) {
            $dataArray['key'] = $data->getKey();
        }
        if ($data->isInitialized('serviceProviderId') && null !== $data->getServiceProviderId()) {
            $dataArray['serviceProviderId'] = $data->getServiceProviderId();
        }
        if ($data->isInitialized('creationDate') && null !== $data->getCreationDate()) {
            $dataArray['creationDate'] = $data->getCreationDate();
        }
        if ($data->isInitialized('expirationDate') && null !== $data->getExpirationDate()) {
            $dataArray['expirationDate'] = $data->getExpirationDate();
        }
        if ($data->isInitialized('userKey') && null !== $data->getUserKey()) {
            $dataArray['userKey'] = $data->getUserKey();
        }
        if ($data->isInitialized('userName') && null !== $data->getUserName()) {
            $dataArray['userName'] = $data->getUserName();
        }
        if ($data->isInitialized('displayName') && null !== $data->getDisplayName()) {
            $dataArray['displayName'] = $data->getDisplayName();
        }
        if ($data->isInitialized('loginPassword') && null !== $data->getLoginPassword()) {
            $dataArray['loginPassword'] = $data->getLoginPassword();
        }
        if ($data->isInitialized('guestExpiration') && null !== $data->getGuestExpiration()) {
            $dataArray['guestExpiration'] = $data->getGuestExpiration();
        }
        if ($data->isInitialized('wlan') && null !== $data->getWlan()) {
            $dataArray['wlan'] = $data->getWlan();
        }
        if ($data->isInitialized('wlanName') && null !== $data->getWlanName()) {
            $dataArray['wlanName'] = $data->getWlanName();
        }
        if ($data->isInitialized('maxDevices') && null !== $data->getMaxDevices()) {
            $dataArray['maxDevices'] = $data->getMaxDevices();
        }
        if ($data->isInitialized('expirationValue') && null !== $data->getExpirationValue()) {
            $dataArray['expirationValue'] = $data->getExpirationValue();
        }
        if ($data->isInitialized('expirationUnit') && null !== $data->getExpirationUnit()) {
            $dataArray['expirationUnit'] = $data->getExpirationUnit();
        }
        if ($data->isInitialized('sessionUnit') && null !== $data->getSessionUnit()) {
            $dataArray['sessionUnit'] = $data->getSessionUnit();
        }
        if ($data->isInitialized('sessionValue') && null !== $data->getSessionValue()) {
            $dataArray['sessionValue'] = $data->getSessionValue();
        }
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        if ($data->isInitialized('expireAfterIfNotUsed') && null !== $data->getExpireAfterIfNotUsed()) {
            $dataArray['expireAfterIfNotUsed'] = $data->getExpireAfterIfNotUsed();
        }
        if ($data->isInitialized('macAddressList') && null !== $data->getMacAddressList()) {
            $values = [];
            foreach ($data->getMacAddressList() as $value) {
                $values[] = $value;
            }
            $dataArray['macAddressList'] = $values;
        }
        if ($data->isInitialized('autoGeneratePassword') && null !== $data->getAutoGeneratePassword()) {
            $dataArray['autoGeneratePassword'] = $data->getAutoGeneratePassword();
        }
        if ($data->isInitialized('creatorId') && null !== $data->getCreatorId()) {
            $dataArray['creatorId'] = $data->getCreatorId();
        }
        if ($data->isInitialized('comment') && null !== $data->getComment()) {
            $dataArray['comment'] = $data->getComment();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUserConfigurationCredentialsGuestPassDto::class => false];
    }
}