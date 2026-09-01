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
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationModifyAdminAAAServer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
        }
        if (\array_key_exists('defaultRoleMapping', $data)) {
            $object->defaultRoleMapping = $this->denormalizer->denormalize($data['defaultRoleMapping'], \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationDefaultRoleMapping::class, 'json', $context);
        }
        if (\array_key_exists('radiusServer', $data)) {
            $object->radiusServer = $this->denormalizer->denormalize($data['radiusServer'], \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationRadiusServer::class, 'json', $context);
        }
        if (\array_key_exists('tacacsServer', $data)) {
            $object->tacacsServer = $this->denormalizer->denormalize($data['tacacsServer'], \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationTacacsServer::class, 'json', $context);
        }
        if (\array_key_exists('activeDirectoryServer', $data)) {
            $object->activeDirectoryServer = $this->denormalizer->denormalize($data['activeDirectoryServer'], \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationActiveDirectoryServer::class, 'json', $context);
        }
        if (\array_key_exists('ldapServer', $data)) {
            $object->ldapServer = $this->denormalizer->denormalize($data['ldapServer'], \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationLdapServer::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->name ?? null;
        $dataArray['type'] = $data->type ?? null;
        if (array_key_exists('defaultRoleMapping', get_object_vars($data)) && null !== ($data->defaultRoleMapping ?? null)) {
            $dataArray['defaultRoleMapping'] = ($data->defaultRoleMapping ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->defaultRoleMapping ?? null, 'json', $context));
        }
        if (array_key_exists('radiusServer', get_object_vars($data)) && null !== ($data->radiusServer ?? null)) {
            $dataArray['radiusServer'] = ($data->radiusServer ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->radiusServer ?? null, 'json', $context));
        }
        if (array_key_exists('tacacsServer', get_object_vars($data)) && null !== ($data->tacacsServer ?? null)) {
            $dataArray['tacacsServer'] = ($data->tacacsServer ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->tacacsServer ?? null, 'json', $context));
        }
        if (array_key_exists('activeDirectoryServer', get_object_vars($data)) && null !== ($data->activeDirectoryServer ?? null)) {
            $dataArray['activeDirectoryServer'] = ($data->activeDirectoryServer ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->activeDirectoryServer ?? null, 'json', $context));
        }
        if (array_key_exists('ldapServer', get_object_vars($data)) && null !== ($data->ldapServer ?? null)) {
            $dataArray['ldapServer'] = ($data->ldapServer ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->ldapServer ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationModifyAdminAAAServer::class => false];
    }
}