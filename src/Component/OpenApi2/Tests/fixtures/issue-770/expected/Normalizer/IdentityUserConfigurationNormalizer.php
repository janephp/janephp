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
class IdentityUserConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUserConfiguration::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUserConfiguration::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUserConfiguration();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('firstName', $data)) {
            $object->setFirstName($data['firstName']);
        }
        if (\array_key_exists('lastName', $data)) {
            $object->setLastName($data['lastName']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($data['address']);
        }
        if (\array_key_exists('city', $data)) {
            $object->setCity($data['city']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
        }
        if (\array_key_exists('zipCode', $data)) {
            $object->setZipCode($data['zipCode']);
        }
        if (\array_key_exists('countryName', $data)) {
            $object->setCountryName($data['countryName']);
        }
        if (\array_key_exists('countryShortName', $data)) {
            $object->setCountryShortName($data['countryShortName']);
        }
        if (\array_key_exists('remark', $data)) {
            $object->setRemark($data['remark']);
        }
        if (\array_key_exists('userName', $data)) {
            $object->setUserName($data['userName']);
        }
        if (\array_key_exists('subscriberPackage', $data)) {
            $object->setSubscriberPackage($this->denormalizer->denormalize($data['subscriberPackage'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('isDisabled', $data)) {
            $object->setIsDisabled($data['isDisabled']);
        }
        if (\array_key_exists('packageStatus', $data)) {
            $object->setPackageStatus($data['packageStatus']);
        }
        if (\array_key_exists('packageExpirationInterval', $data)) {
            $object->setPackageExpirationInterval($data['packageExpirationInterval']);
        }
        if (\array_key_exists('packageExpirationValue', $data)) {
            $object->setPackageExpirationValue($data['packageExpirationValue']);
        }
        if (\array_key_exists('packageExpirationDate', $data)) {
            $object->setPackageExpirationDate($data['packageExpirationDate']);
        }
        if (\array_key_exists('createDateTime', $data)) {
            $object->setCreateDateTime($data['createDateTime']);
        }
        if (\array_key_exists('modifiedDateTime', $data)) {
            $object->setModifiedDateTime($data['modifiedDateTime']);
        }
        if (\array_key_exists('creatorId', $data)) {
            $object->setCreatorId($data['creatorId']);
        }
        if (\array_key_exists('modifierId', $data)) {
            $object->setModifierId($data['modifierId']);
        }
        if (\array_key_exists('creatorUsername', $data)) {
            $object->setCreatorUsername($data['creatorUsername']);
        }
        if (\array_key_exists('modifierUsername', $data)) {
            $object->setModifierUsername($data['modifierUsername']);
        }
        if (\array_key_exists('usernamePasswordCredentialsImplDto', $data)) {
            $object->setUsernamePasswordCredentialsImplDto($this->denormalizer->denormalize($data['usernamePasswordCredentialsImplDto'], \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUsernamePasswordCredentialsImplDto::class, 'json', $context));
        }
        if (\array_key_exists('credentialsGuestPassDto', $data)) {
            $object->setCredentialsGuestPassDto($this->denormalizer->denormalize($data['credentialsGuestPassDto'], \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUserConfigurationCredentialsGuestPassDto::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('firstName') && null !== $data->getFirstName()) {
            $dataArray['firstName'] = $data->getFirstName();
        }
        if ($data->isInitialized('lastName') && null !== $data->getLastName()) {
            $dataArray['lastName'] = $data->getLastName();
        }
        if ($data->isInitialized('email') && null !== $data->getEmail()) {
            $dataArray['email'] = $data->getEmail();
        }
        if ($data->isInitialized('phone') && null !== $data->getPhone()) {
            $dataArray['phone'] = $data->getPhone();
        }
        if ($data->isInitialized('address') && null !== $data->getAddress()) {
            $dataArray['address'] = $data->getAddress();
        }
        if ($data->isInitialized('city') && null !== $data->getCity()) {
            $dataArray['city'] = $data->getCity();
        }
        if ($data->isInitialized('state') && null !== $data->getState()) {
            $dataArray['state'] = $data->getState();
        }
        if ($data->isInitialized('zipCode') && null !== $data->getZipCode()) {
            $dataArray['zipCode'] = $data->getZipCode();
        }
        if ($data->isInitialized('countryName') && null !== $data->getCountryName()) {
            $dataArray['countryName'] = $data->getCountryName();
        }
        if ($data->isInitialized('countryShortName') && null !== $data->getCountryShortName()) {
            $dataArray['countryShortName'] = $data->getCountryShortName();
        }
        if ($data->isInitialized('remark') && null !== $data->getRemark()) {
            $dataArray['remark'] = $data->getRemark();
        }
        if ($data->isInitialized('userName') && null !== $data->getUserName()) {
            $dataArray['userName'] = $data->getUserName();
        }
        if ($data->isInitialized('subscriberPackage') && null !== $data->getSubscriberPackage()) {
            $dataArray['subscriberPackage'] = $this->normalizer->normalize($data->getSubscriberPackage(), 'json', $context);
        }
        if ($data->isInitialized('isDisabled') && null !== $data->getIsDisabled()) {
            $dataArray['isDisabled'] = $data->getIsDisabled();
        }
        if ($data->isInitialized('packageStatus') && null !== $data->getPackageStatus()) {
            $dataArray['packageStatus'] = $data->getPackageStatus();
        }
        if ($data->isInitialized('packageExpirationInterval') && null !== $data->getPackageExpirationInterval()) {
            $dataArray['packageExpirationInterval'] = $data->getPackageExpirationInterval();
        }
        if ($data->isInitialized('packageExpirationValue') && null !== $data->getPackageExpirationValue()) {
            $dataArray['packageExpirationValue'] = $data->getPackageExpirationValue();
        }
        if ($data->isInitialized('packageExpirationDate') && null !== $data->getPackageExpirationDate()) {
            $dataArray['packageExpirationDate'] = $data->getPackageExpirationDate();
        }
        if ($data->isInitialized('createDateTime') && null !== $data->getCreateDateTime()) {
            $dataArray['createDateTime'] = $data->getCreateDateTime();
        }
        if ($data->isInitialized('modifiedDateTime') && null !== $data->getModifiedDateTime()) {
            $dataArray['modifiedDateTime'] = $data->getModifiedDateTime();
        }
        if ($data->isInitialized('creatorId') && null !== $data->getCreatorId()) {
            $dataArray['creatorId'] = $data->getCreatorId();
        }
        if ($data->isInitialized('modifierId') && null !== $data->getModifierId()) {
            $dataArray['modifierId'] = $data->getModifierId();
        }
        if ($data->isInitialized('creatorUsername') && null !== $data->getCreatorUsername()) {
            $dataArray['creatorUsername'] = $data->getCreatorUsername();
        }
        if ($data->isInitialized('modifierUsername') && null !== $data->getModifierUsername()) {
            $dataArray['modifierUsername'] = $data->getModifierUsername();
        }
        if ($data->isInitialized('usernamePasswordCredentialsImplDto') && null !== $data->getUsernamePasswordCredentialsImplDto()) {
            $dataArray['usernamePasswordCredentialsImplDto'] = $this->normalizer->normalize($data->getUsernamePasswordCredentialsImplDto(), 'json', $context);
        }
        if ($data->isInitialized('credentialsGuestPassDto') && null !== $data->getCredentialsGuestPassDto()) {
            $dataArray['credentialsGuestPassDto'] = $this->normalizer->normalize($data->getCredentialsGuestPassDto(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUserConfiguration::class => false];
    }
}