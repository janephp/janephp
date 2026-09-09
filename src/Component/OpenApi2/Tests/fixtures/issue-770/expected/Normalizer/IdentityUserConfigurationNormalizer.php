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
class IdentityUserConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityUserConfiguration::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityUserConfiguration::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityUserConfiguration();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('firstName', $data)) {
            $object->firstName = $data['firstName'];
        }
        if (\array_key_exists('lastName', $data)) {
            $object->lastName = $data['lastName'];
        }
        if (\array_key_exists('email', $data)) {
            $object->email = $data['email'];
        }
        if (\array_key_exists('phone', $data)) {
            $object->phone = $data['phone'];
        }
        if (\array_key_exists('address', $data)) {
            $object->address = $data['address'];
        }
        if (\array_key_exists('city', $data)) {
            $object->city = $data['city'];
        }
        if (\array_key_exists('state', $data)) {
            $object->state = $data['state'];
        }
        if (\array_key_exists('zipCode', $data)) {
            $object->zipCode = $data['zipCode'];
        }
        if (\array_key_exists('countryName', $data)) {
            $object->countryName = $data['countryName'];
        }
        if (\array_key_exists('countryShortName', $data)) {
            $object->countryShortName = $data['countryShortName'];
        }
        if (\array_key_exists('remark', $data)) {
            $object->remark = $data['remark'];
        }
        if (\array_key_exists('userName', $data)) {
            $object->userName = $data['userName'];
        }
        if (\array_key_exists('subscriberPackage', $data)) {
            $object->subscriberPackage = $this->denormalizer->denormalize($data['subscriberPackage'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('isDisabled', $data)) {
            $object->isDisabled = $data['isDisabled'];
        }
        if (\array_key_exists('packageStatus', $data)) {
            $object->packageStatus = $data['packageStatus'];
        }
        if (\array_key_exists('packageExpirationInterval', $data)) {
            $object->packageExpirationInterval = $data['packageExpirationInterval'];
        }
        if (\array_key_exists('packageExpirationValue', $data)) {
            $object->packageExpirationValue = $data['packageExpirationValue'];
        }
        if (\array_key_exists('packageExpirationDate', $data)) {
            $object->packageExpirationDate = $data['packageExpirationDate'];
        }
        if (\array_key_exists('createDateTime', $data)) {
            $object->createDateTime = $data['createDateTime'];
        }
        if (\array_key_exists('modifiedDateTime', $data)) {
            $object->modifiedDateTime = $data['modifiedDateTime'];
        }
        if (\array_key_exists('creatorId', $data)) {
            $object->creatorId = $data['creatorId'];
        }
        if (\array_key_exists('modifierId', $data)) {
            $object->modifierId = $data['modifierId'];
        }
        if (\array_key_exists('creatorUsername', $data)) {
            $object->creatorUsername = $data['creatorUsername'];
        }
        if (\array_key_exists('modifierUsername', $data)) {
            $object->modifierUsername = $data['modifierUsername'];
        }
        if (\array_key_exists('usernamePasswordCredentialsImplDto', $data)) {
            $object->usernamePasswordCredentialsImplDto = $this->denormalizer->denormalize($data['usernamePasswordCredentialsImplDto'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityUsernamePasswordCredentialsImplDto::class, 'json', $context);
        }
        if (\array_key_exists('credentialsGuestPassDto', $data)) {
            $object->credentialsGuestPassDto = $this->denormalizer->denormalize($data['credentialsGuestPassDto'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityUserConfigurationCredentialsGuestPassDto::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('firstName', get_object_vars($data)) && null !== ($data->firstName ?? null)) {
            $dataArray['firstName'] = $data->firstName;
        }
        if (array_key_exists('lastName', get_object_vars($data)) && null !== ($data->lastName ?? null)) {
            $dataArray['lastName'] = $data->lastName;
        }
        if (array_key_exists('email', get_object_vars($data)) && null !== ($data->email ?? null)) {
            $dataArray['email'] = $data->email;
        }
        if (array_key_exists('phone', get_object_vars($data)) && null !== ($data->phone ?? null)) {
            $dataArray['phone'] = $data->phone;
        }
        if (array_key_exists('address', get_object_vars($data)) && null !== ($data->address ?? null)) {
            $dataArray['address'] = $data->address;
        }
        if (array_key_exists('city', get_object_vars($data)) && null !== ($data->city ?? null)) {
            $dataArray['city'] = $data->city;
        }
        if (array_key_exists('state', get_object_vars($data)) && null !== ($data->state ?? null)) {
            $dataArray['state'] = $data->state;
        }
        if (array_key_exists('zipCode', get_object_vars($data)) && null !== ($data->zipCode ?? null)) {
            $dataArray['zipCode'] = $data->zipCode;
        }
        if (array_key_exists('countryName', get_object_vars($data)) && null !== ($data->countryName ?? null)) {
            $dataArray['countryName'] = $data->countryName;
        }
        if (array_key_exists('countryShortName', get_object_vars($data)) && null !== ($data->countryShortName ?? null)) {
            $dataArray['countryShortName'] = $data->countryShortName;
        }
        if (array_key_exists('remark', get_object_vars($data)) && null !== ($data->remark ?? null)) {
            $dataArray['remark'] = $data->remark;
        }
        if (array_key_exists('userName', get_object_vars($data)) && null !== ($data->userName ?? null)) {
            $dataArray['userName'] = $data->userName;
        }
        if (array_key_exists('subscriberPackage', get_object_vars($data)) && null !== ($data->subscriberPackage ?? null)) {
            $normalized = $this->normalizer->normalize($data->subscriberPackage, 'json', $context);
            $dataArray['subscriberPackage'] = \is_iterable($normalized) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('isDisabled', get_object_vars($data)) && null !== ($data->isDisabled ?? null)) {
            $dataArray['isDisabled'] = $data->isDisabled;
        }
        if (array_key_exists('packageStatus', get_object_vars($data)) && null !== ($data->packageStatus ?? null)) {
            $dataArray['packageStatus'] = $data->packageStatus;
        }
        if (array_key_exists('packageExpirationInterval', get_object_vars($data)) && null !== ($data->packageExpirationInterval ?? null)) {
            $dataArray['packageExpirationInterval'] = $data->packageExpirationInterval;
        }
        if (array_key_exists('packageExpirationValue', get_object_vars($data)) && null !== ($data->packageExpirationValue ?? null)) {
            $dataArray['packageExpirationValue'] = $data->packageExpirationValue;
        }
        if (array_key_exists('packageExpirationDate', get_object_vars($data)) && null !== ($data->packageExpirationDate ?? null)) {
            $dataArray['packageExpirationDate'] = $data->packageExpirationDate;
        }
        if (array_key_exists('createDateTime', get_object_vars($data)) && null !== ($data->createDateTime ?? null)) {
            $dataArray['createDateTime'] = $data->createDateTime;
        }
        if (array_key_exists('modifiedDateTime', get_object_vars($data)) && null !== ($data->modifiedDateTime ?? null)) {
            $dataArray['modifiedDateTime'] = $data->modifiedDateTime;
        }
        if (array_key_exists('creatorId', get_object_vars($data)) && null !== ($data->creatorId ?? null)) {
            $dataArray['creatorId'] = $data->creatorId;
        }
        if (array_key_exists('modifierId', get_object_vars($data)) && null !== ($data->modifierId ?? null)) {
            $dataArray['modifierId'] = $data->modifierId;
        }
        if (array_key_exists('creatorUsername', get_object_vars($data)) && null !== ($data->creatorUsername ?? null)) {
            $dataArray['creatorUsername'] = $data->creatorUsername;
        }
        if (array_key_exists('modifierUsername', get_object_vars($data)) && null !== ($data->modifierUsername ?? null)) {
            $dataArray['modifierUsername'] = $data->modifierUsername;
        }
        if (array_key_exists('usernamePasswordCredentialsImplDto', get_object_vars($data)) && null !== ($data->usernamePasswordCredentialsImplDto ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->usernamePasswordCredentialsImplDto, 'json', $context);
            $dataArray['usernamePasswordCredentialsImplDto'] = \is_iterable($normalized_1) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('credentialsGuestPassDto', get_object_vars($data)) && null !== ($data->credentialsGuestPassDto ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->credentialsGuestPassDto, 'json', $context);
            $dataArray['credentialsGuestPassDto'] = \is_iterable($normalized_2) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityUserConfiguration::class => false];
    }
}