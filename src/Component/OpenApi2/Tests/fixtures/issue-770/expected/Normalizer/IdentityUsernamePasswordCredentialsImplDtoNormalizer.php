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
class IdentityUsernamePasswordCredentialsImplDtoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUsernamePasswordCredentialsImplDto::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUsernamePasswordCredentialsImplDto::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUsernamePasswordCredentialsImplDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('loginName', $data)) {
            $object->loginName = $data['loginName'];
        }
        if (\array_key_exists('loginPassword', $data)) {
            $object->loginPassword = $data['loginPassword'];
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
        if (\array_key_exists('authenticationMethod', $data)) {
            $object->authenticationMethod = $data['authenticationMethod'];
        }
        if (\array_key_exists('authenticationServerConfig', $data)) {
            $object->authenticationServerConfig = $this->denormalizer->denormalize($data['authenticationServerConfig'], \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityAuthenticationServerConfig::class, 'json', $context);
        }
        if (\array_key_exists('passwordCreation', $data)) {
            $object->passwordCreation = $data['passwordCreation'];
        }
        if (\array_key_exists('passwordExpiration', $data)) {
            $object->passwordExpiration = $data['passwordExpiration'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('loginName', get_object_vars($data)) && null !== ($data->loginName ?? null)) {
            $dataArray['loginName'] = $data->loginName ?? null;
        }
        if (array_key_exists('loginPassword', get_object_vars($data)) && null !== ($data->loginPassword ?? null)) {
            $dataArray['loginPassword'] = $data->loginPassword ?? null;
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
        if (array_key_exists('authenticationMethod', get_object_vars($data)) && null !== ($data->authenticationMethod ?? null)) {
            $dataArray['authenticationMethod'] = $data->authenticationMethod ?? null;
        }
        if (array_key_exists('authenticationServerConfig', get_object_vars($data)) && null !== ($data->authenticationServerConfig ?? null)) {
            $dataArray['authenticationServerConfig'] = ($data->authenticationServerConfig ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->authenticationServerConfig ?? null, 'json', $context));
        }
        if (array_key_exists('passwordCreation', get_object_vars($data)) && null !== ($data->passwordCreation ?? null)) {
            $dataArray['passwordCreation'] = $data->passwordCreation ?? null;
        }
        if (array_key_exists('passwordExpiration', get_object_vars($data)) && null !== ($data->passwordExpiration ?? null)) {
            $dataArray['passwordExpiration'] = $data->passwordExpiration ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUsernamePasswordCredentialsImplDto::class => false];
    }
}