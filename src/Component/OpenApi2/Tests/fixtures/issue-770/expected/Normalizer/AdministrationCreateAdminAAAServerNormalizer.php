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
class AdministrationCreateAdminAAAServerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationCreateAdminAAAServer::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationCreateAdminAAAServer::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationCreateAdminAAAServer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('defaultRoleMapping', $data)) {
            $object->setDefaultRoleMapping($this->denormalizer->denormalize($data['defaultRoleMapping'], \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationDefaultRoleMapping::class, 'json', $context));
        }
        if (\array_key_exists('radiusServer', $data)) {
            $object->setRadiusServer($this->denormalizer->denormalize($data['radiusServer'], \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationRadiusServer::class, 'json', $context));
        }
        if (\array_key_exists('tacacsServer', $data)) {
            $object->setTacacsServer($this->denormalizer->denormalize($data['tacacsServer'], \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationTacacsServer::class, 'json', $context));
        }
        if (\array_key_exists('activeDirectoryServer', $data)) {
            $object->setActiveDirectoryServer($this->denormalizer->denormalize($data['activeDirectoryServer'], \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationActiveDirectoryServer::class, 'json', $context));
        }
        if (\array_key_exists('ldapServer', $data)) {
            $object->setLdapServer($this->denormalizer->denormalize($data['ldapServer'], \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationLdapServer::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        $dataArray['name'] = $data->getName();
        $dataArray['type'] = $data->getType();
        if ($data->isInitialized('defaultRoleMapping') && null !== $data->getDefaultRoleMapping()) {
            $dataArray['defaultRoleMapping'] = $data->getDefaultRoleMapping() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getDefaultRoleMapping(), 'json', $context));
        }
        if ($data->isInitialized('radiusServer') && null !== $data->getRadiusServer()) {
            $dataArray['radiusServer'] = $data->getRadiusServer() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getRadiusServer(), 'json', $context));
        }
        if ($data->isInitialized('tacacsServer') && null !== $data->getTacacsServer()) {
            $dataArray['tacacsServer'] = $data->getTacacsServer() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getTacacsServer(), 'json', $context));
        }
        if ($data->isInitialized('activeDirectoryServer') && null !== $data->getActiveDirectoryServer()) {
            $dataArray['activeDirectoryServer'] = $data->getActiveDirectoryServer() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getActiveDirectoryServer(), 'json', $context));
        }
        if ($data->isInitialized('ldapServer') && null !== $data->getLdapServer()) {
            $dataArray['ldapServer'] = $data->getLdapServer() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getLdapServer(), 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationCreateAdminAAAServer::class => false];
    }
}