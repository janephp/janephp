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
class AaaModifyLDAPServerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaModifyLDAPServer::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaModifyLDAPServer::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaModifyLDAPServer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('standbyServerEnabled', $data) && \is_int($data['standbyServerEnabled'])) {
            $data['standbyServerEnabled'] = (bool) $data['standbyServerEnabled'];
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
        if (\array_key_exists('baseDomainName', $data)) {
            $object->baseDomainName = $data['baseDomainName'];
        }
        if (\array_key_exists('adminDomainName', $data)) {
            $object->adminDomainName = $data['adminDomainName'];
        }
        if (\array_key_exists('password', $data)) {
            $object->password = $data['password'];
        }
        if (\array_key_exists('keyAttribute', $data)) {
            $object->keyAttribute = $data['keyAttribute'];
        }
        if (\array_key_exists('searchFilter', $data)) {
            $object->searchFilter = $data['searchFilter'];
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
        if (\array_key_exists('standbyBaseDomainName', $data)) {
            $object->standbyBaseDomainName = $data['standbyBaseDomainName'];
        }
        if (\array_key_exists('standbyAdminDomainName', $data)) {
            $object->standbyAdminDomainName = $data['standbyAdminDomainName'];
        }
        if (\array_key_exists('standbyPassword', $data)) {
            $object->standbyPassword = $data['standbyPassword'];
        }
        if (\array_key_exists('standbyKeyAttribute', $data)) {
            $object->standbyKeyAttribute = $data['standbyKeyAttribute'];
        }
        if (\array_key_exists('standbySearchFilter', $data)) {
            $object->standbySearchFilter = $data['standbySearchFilter'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('ip', get_object_vars($data)) && null !== ($data->ip ?? null)) {
            $dataArray['ip'] = $data->ip ?? null;
        }
        if (array_key_exists('port', get_object_vars($data)) && null !== ($data->port ?? null)) {
            $dataArray['port'] = $data->port ?? null;
        }
        if (array_key_exists('baseDomainName', get_object_vars($data)) && null !== ($data->baseDomainName ?? null)) {
            $dataArray['baseDomainName'] = $data->baseDomainName ?? null;
        }
        if (array_key_exists('adminDomainName', get_object_vars($data)) && null !== ($data->adminDomainName ?? null)) {
            $dataArray['adminDomainName'] = $data->adminDomainName ?? null;
        }
        if (array_key_exists('password', get_object_vars($data)) && null !== ($data->password ?? null)) {
            $dataArray['password'] = $data->password ?? null;
        }
        if (array_key_exists('keyAttribute', get_object_vars($data)) && null !== ($data->keyAttribute ?? null)) {
            $dataArray['keyAttribute'] = $data->keyAttribute ?? null;
        }
        if (array_key_exists('searchFilter', get_object_vars($data)) && null !== ($data->searchFilter ?? null)) {
            $dataArray['searchFilter'] = $data->searchFilter ?? null;
        }
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
        if (array_key_exists('standbyBaseDomainName', get_object_vars($data)) && null !== ($data->standbyBaseDomainName ?? null)) {
            $dataArray['standbyBaseDomainName'] = $data->standbyBaseDomainName ?? null;
        }
        if (array_key_exists('standbyAdminDomainName', get_object_vars($data)) && null !== ($data->standbyAdminDomainName ?? null)) {
            $dataArray['standbyAdminDomainName'] = $data->standbyAdminDomainName ?? null;
        }
        if (array_key_exists('standbyPassword', get_object_vars($data)) && null !== ($data->standbyPassword ?? null)) {
            $dataArray['standbyPassword'] = $data->standbyPassword ?? null;
        }
        if (array_key_exists('standbyKeyAttribute', get_object_vars($data)) && null !== ($data->standbyKeyAttribute ?? null)) {
            $dataArray['standbyKeyAttribute'] = $data->standbyKeyAttribute ?? null;
        }
        if (array_key_exists('standbySearchFilter', get_object_vars($data)) && null !== ($data->standbySearchFilter ?? null)) {
            $dataArray['standbySearchFilter'] = $data->standbySearchFilter ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaModifyLDAPServer::class => false];
    }
}