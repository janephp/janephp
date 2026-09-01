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
class IdentityModifyUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityModifyUser::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityModifyUser::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityModifyUser();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
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
        if (\array_key_exists('isDisabled', $data)) {
            $object->isDisabled = $data['isDisabled'];
        }
        if (\array_key_exists('remark', $data)) {
            $object->remark = $data['remark'];
        }
        if (\array_key_exists('password', $data)) {
            $object->password = $data['password'];
        }
        if (\array_key_exists('subscriberPackage', $data)) {
            $object->subscriberPackage = $this->denormalizer->denormalize($data['subscriberPackage'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        if (array_key_exists('firstName', get_object_vars($data)) && null !== ($data->firstName ?? null)) {
            $dataArray['firstName'] = $data->firstName ?? null;
        }
        if (array_key_exists('lastName', get_object_vars($data)) && null !== ($data->lastName ?? null)) {
            $dataArray['lastName'] = $data->lastName ?? null;
        }
        if (array_key_exists('email', get_object_vars($data)) && null !== ($data->email ?? null)) {
            $dataArray['email'] = $data->email ?? null;
        }
        if (array_key_exists('phone', get_object_vars($data)) && null !== ($data->phone ?? null)) {
            $dataArray['phone'] = $data->phone ?? null;
        }
        if (array_key_exists('address', get_object_vars($data)) && null !== ($data->address ?? null)) {
            $dataArray['address'] = $data->address ?? null;
        }
        if (array_key_exists('city', get_object_vars($data)) && null !== ($data->city ?? null)) {
            $dataArray['city'] = $data->city ?? null;
        }
        if (array_key_exists('state', get_object_vars($data)) && null !== ($data->state ?? null)) {
            $dataArray['state'] = $data->state ?? null;
        }
        if (array_key_exists('zipCode', get_object_vars($data)) && null !== ($data->zipCode ?? null)) {
            $dataArray['zipCode'] = $data->zipCode ?? null;
        }
        if (array_key_exists('countryName', get_object_vars($data)) && null !== ($data->countryName ?? null)) {
            $dataArray['countryName'] = $data->countryName ?? null;
        }
        if (array_key_exists('countryShortName', get_object_vars($data)) && null !== ($data->countryShortName ?? null)) {
            $dataArray['countryShortName'] = $data->countryShortName ?? null;
        }
        if (array_key_exists('isDisabled', get_object_vars($data)) && null !== ($data->isDisabled ?? null)) {
            $dataArray['isDisabled'] = $data->isDisabled ?? null;
        }
        if (array_key_exists('remark', get_object_vars($data)) && null !== ($data->remark ?? null)) {
            $dataArray['remark'] = $data->remark ?? null;
        }
        if (array_key_exists('password', get_object_vars($data)) && null !== ($data->password ?? null)) {
            $dataArray['password'] = $data->password ?? null;
        }
        if (array_key_exists('subscriberPackage', get_object_vars($data)) && null !== ($data->subscriberPackage ?? null)) {
            $dataArray['subscriberPackage'] = ($data->subscriberPackage ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->subscriberPackage ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityModifyUser::class => false];
    }
}