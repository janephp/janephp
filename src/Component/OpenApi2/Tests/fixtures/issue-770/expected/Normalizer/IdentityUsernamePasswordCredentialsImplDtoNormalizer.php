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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUsernamePasswordCredentialsImplDto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('loginName', $data)) {
            $object->setLoginName($data['loginName']);
        }
        if (\array_key_exists('loginPassword', $data)) {
            $object->setLoginPassword($data['loginPassword']);
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
        if (\array_key_exists('authenticationMethod', $data)) {
            $object->setAuthenticationMethod($data['authenticationMethod']);
        }
        if (\array_key_exists('authenticationServerConfig', $data)) {
            $object->setAuthenticationServerConfig($this->denormalizer->denormalize($data['authenticationServerConfig'], \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityAuthenticationServerConfig::class, 'json', $context));
        }
        if (\array_key_exists('passwordCreation', $data)) {
            $object->setPasswordCreation($data['passwordCreation']);
        }
        if (\array_key_exists('passwordExpiration', $data)) {
            $object->setPasswordExpiration($data['passwordExpiration']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('loginName') && null !== $data->getLoginName()) {
            $dataArray['loginName'] = $data->getLoginName();
        }
        if ($data->isInitialized('loginPassword') && null !== $data->getLoginPassword()) {
            $dataArray['loginPassword'] = $data->getLoginPassword();
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
        if ($data->isInitialized('authenticationMethod') && null !== $data->getAuthenticationMethod()) {
            $dataArray['authenticationMethod'] = $data->getAuthenticationMethod();
        }
        if ($data->isInitialized('authenticationServerConfig') && null !== $data->getAuthenticationServerConfig()) {
            $dataArray['authenticationServerConfig'] = $this->normalizer->normalize($data->getAuthenticationServerConfig(), 'json', $context);
        }
        if ($data->isInitialized('passwordCreation') && null !== $data->getPasswordCreation()) {
            $dataArray['passwordCreation'] = $data->getPasswordCreation();
        }
        if ($data->isInitialized('passwordExpiration') && null !== $data->getPasswordExpiration()) {
            $dataArray['passwordExpiration'] = $data->getPasswordExpiration();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUsernamePasswordCredentialsImplDto::class => false];
    }
}