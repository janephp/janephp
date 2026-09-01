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
class AdministrationLdapServerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationLdapServer::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationLdapServer::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationLdapServer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('tlsEnabled', $data) && \is_int($data['tlsEnabled'])) {
            $data['tlsEnabled'] = (bool) $data['tlsEnabled'];
        }
        if (\array_key_exists('realm', $data)) {
            $object->realm = $data['realm'];
        }
        if (\array_key_exists('tlsEnabled', $data)) {
            $object->tlsEnabled = $data['tlsEnabled'];
        }
        if (\array_key_exists('cnIdentity', $data)) {
            $object->cnIdentity = $data['cnIdentity'];
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
        if (\array_key_exists('adminPassword', $data)) {
            $object->adminPassword = $data['adminPassword'];
        }
        if (\array_key_exists('keyAttribute', $data)) {
            $object->keyAttribute = $data['keyAttribute'];
        }
        if (\array_key_exists('searchFilter', $data)) {
            $object->searchFilter = $data['searchFilter'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['realm'] = $data->realm ?? null;
        if (array_key_exists('tlsEnabled', get_object_vars($data)) && null !== ($data->tlsEnabled ?? null)) {
            $dataArray['tlsEnabled'] = $data->tlsEnabled ?? null;
        }
        if (array_key_exists('cnIdentity', get_object_vars($data)) && null !== ($data->cnIdentity ?? null)) {
            $dataArray['cnIdentity'] = $data->cnIdentity ?? null;
        }
        $dataArray['ip'] = $data->ip ?? null;
        $dataArray['port'] = $data->port ?? null;
        $dataArray['baseDomainName'] = $data->baseDomainName ?? null;
        $dataArray['adminDomainName'] = $data->adminDomainName ?? null;
        $dataArray['adminPassword'] = $data->adminPassword ?? null;
        $dataArray['keyAttribute'] = $data->keyAttribute ?? null;
        $dataArray['searchFilter'] = $data->searchFilter ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationLdapServer::class => false];
    }
}