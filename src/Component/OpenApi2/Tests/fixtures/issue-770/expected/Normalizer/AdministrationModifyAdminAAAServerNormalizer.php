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
class AdministrationModifyAdminAAAServerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationModifyAdminAAAServer::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationModifyAdminAAAServer::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationModifyAdminAAAServer();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        $dataArray['name'] = $data->getName();
        $dataArray['type'] = $data->getType();
        if ($data->isInitialized('defaultRoleMapping') && null !== $data->getDefaultRoleMapping()) {
            $dataArray['defaultRoleMapping'] = $this->normalizer->normalize($data->getDefaultRoleMapping(), 'json', $context);
        }
        if ($data->isInitialized('radiusServer') && null !== $data->getRadiusServer()) {
            $dataArray['radiusServer'] = $this->normalizer->normalize($data->getRadiusServer(), 'json', $context);
        }
        if ($data->isInitialized('tacacsServer') && null !== $data->getTacacsServer()) {
            $dataArray['tacacsServer'] = $this->normalizer->normalize($data->getTacacsServer(), 'json', $context);
        }
        if ($data->isInitialized('activeDirectoryServer') && null !== $data->getActiveDirectoryServer()) {
            $dataArray['activeDirectoryServer'] = $this->normalizer->normalize($data->getActiveDirectoryServer(), 'json', $context);
        }
        if ($data->isInitialized('ldapServer') && null !== $data->getLdapServer()) {
            $dataArray['ldapServer'] = $this->normalizer->normalize($data->getLdapServer(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationModifyAdminAAAServer::class => false];
    }
}