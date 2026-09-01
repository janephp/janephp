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
class AaaCreateActiveDirectoryServerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaCreateActiveDirectoryServer::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaCreateActiveDirectoryServer::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaCreateActiveDirectoryServer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('globalCatalogEnabled', $data) && \is_int($data['globalCatalogEnabled'])) {
            $data['globalCatalogEnabled'] = (bool) $data['globalCatalogEnabled'];
        }
        if (\array_key_exists('standbyServerEnabled', $data) && \is_int($data['standbyServerEnabled'])) {
            $data['standbyServerEnabled'] = (bool) $data['standbyServerEnabled'];
        }
        if (\array_key_exists('standbyGlobalCatalogEnabled', $data) && \is_int($data['standbyGlobalCatalogEnabled'])) {
            $data['standbyGlobalCatalogEnabled'] = (bool) $data['standbyGlobalCatalogEnabled'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('ip', $data)) {
            $object->ip = $data['ip'];
        }
        if (\array_key_exists('port', $data)) {
            $object->port = $data['port'];
        }
        if (\array_key_exists('windowsDomainName', $data)) {
            $object->windowsDomainName = $data['windowsDomainName'];
        }
        if (\array_key_exists('adminDomainName', $data)) {
            $object->adminDomainName = $data['adminDomainName'];
        }
        if (\array_key_exists('password', $data)) {
            $object->password = $data['password'];
        }
        if (\array_key_exists('globalCatalogEnabled', $data)) {
            $object->globalCatalogEnabled = $data['globalCatalogEnabled'];
        }
        if (\array_key_exists('mappings', $data)) {
            $values = [];
            foreach ($data['mappings'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaModifyGroupAttrIdentityUserRoleMapping::class, 'json', $context);
            }
            $object->mappings = $values;
        }
        if (\array_key_exists('standbyServerEnabled', $data)) {
            $object->standbyServerEnabled = $data['standbyServerEnabled'];
        }
        if (\array_key_exists('standbyIp', $data)) {
            $object->standbyIp = $data['standbyIp'];
        }
        if (\array_key_exists('standbyPort', $data)) {
            $object->standbyPort = $data['standbyPort'];
        }
        if (\array_key_exists('standbyWindowsDomainName', $data)) {
            $object->standbyWindowsDomainName = $data['standbyWindowsDomainName'];
        }
        if (\array_key_exists('standbyAdminDomainName', $data)) {
            $object->standbyAdminDomainName = $data['standbyAdminDomainName'];
        }
        if (\array_key_exists('standbyPassword', $data)) {
            $object->standbyPassword = $data['standbyPassword'];
        }
        if (\array_key_exists('standbyGlobalCatalogEnabled', $data)) {
            $object->standbyGlobalCatalogEnabled = $data['standbyGlobalCatalogEnabled'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        $dataArray['ip'] = $data->ip ?? null;
        $dataArray['port'] = $data->port ?? null;
        if (array_key_exists('windowsDomainName', get_object_vars($data)) && null !== ($data->windowsDomainName ?? null)) {
            $dataArray['windowsDomainName'] = $data->windowsDomainName ?? null;
        }
        if (array_key_exists('adminDomainName', get_object_vars($data)) && null !== ($data->adminDomainName ?? null)) {
            $dataArray['adminDomainName'] = $data->adminDomainName ?? null;
        }
        if (array_key_exists('password', get_object_vars($data)) && null !== ($data->password ?? null)) {
            $dataArray['password'] = $data->password ?? null;
        }
        $dataArray['globalCatalogEnabled'] = $data->globalCatalogEnabled ?? null;
        if (array_key_exists('mappings', get_object_vars($data)) && null !== ($data->mappings ?? null)) {
            $values = [];
            foreach ($data->mappings ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['mappings'] = $values;
        }
        if (array_key_exists('standbyServerEnabled', get_object_vars($data)) && null !== ($data->standbyServerEnabled ?? null)) {
            $dataArray['standbyServerEnabled'] = $data->standbyServerEnabled ?? null;
        }
        if (array_key_exists('standbyIp', get_object_vars($data)) && null !== ($data->standbyIp ?? null)) {
            $dataArray['standbyIp'] = $data->standbyIp ?? null;
        }
        if (array_key_exists('standbyPort', get_object_vars($data)) && null !== ($data->standbyPort ?? null)) {
            $dataArray['standbyPort'] = $data->standbyPort ?? null;
        }
        if (array_key_exists('standbyWindowsDomainName', get_object_vars($data)) && null !== ($data->standbyWindowsDomainName ?? null)) {
            $dataArray['standbyWindowsDomainName'] = $data->standbyWindowsDomainName ?? null;
        }
        if (array_key_exists('standbyAdminDomainName', get_object_vars($data)) && null !== ($data->standbyAdminDomainName ?? null)) {
            $dataArray['standbyAdminDomainName'] = $data->standbyAdminDomainName ?? null;
        }
        if (array_key_exists('standbyPassword', get_object_vars($data)) && null !== ($data->standbyPassword ?? null)) {
            $dataArray['standbyPassword'] = $data->standbyPassword ?? null;
        }
        if (array_key_exists('standbyGlobalCatalogEnabled', get_object_vars($data)) && null !== ($data->standbyGlobalCatalogEnabled ?? null)) {
            $dataArray['standbyGlobalCatalogEnabled'] = $data->standbyGlobalCatalogEnabled ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaCreateActiveDirectoryServer::class => false];
    }
}