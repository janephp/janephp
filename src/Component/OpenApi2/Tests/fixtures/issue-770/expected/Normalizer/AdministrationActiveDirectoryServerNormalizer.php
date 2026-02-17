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
class AdministrationActiveDirectoryServerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationActiveDirectoryServer::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationActiveDirectoryServer::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationActiveDirectoryServer();
        if (\array_key_exists('tlsEnabled', $data) && \is_int($data['tlsEnabled'])) {
            $data['tlsEnabled'] = (bool) $data['tlsEnabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('realm', $data)) {
            $object->setRealm($data['realm']);
        }
        if (\array_key_exists('tlsEnabled', $data)) {
            $object->setTlsEnabled($data['tlsEnabled']);
        }
        if (\array_key_exists('cnIdentity', $data)) {
            $object->setCnIdentity($data['cnIdentity']);
        }
        if (\array_key_exists('ip', $data)) {
            $object->setIp($data['ip']);
        }
        if (\array_key_exists('port', $data)) {
            $object->setPort($data['port']);
        }
        if (\array_key_exists('windowsDomainName', $data)) {
            $object->setWindowsDomainName($data['windowsDomainName']);
        }
        if (\array_key_exists('proxyUserPrincipalName', $data)) {
            $object->setProxyUserPrincipalName($data['proxyUserPrincipalName']);
        }
        if (\array_key_exists('proxyUserPassword', $data)) {
            $object->setProxyUserPassword($data['proxyUserPassword']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['realm'] = $data->getRealm();
        if ($data->isInitialized('tlsEnabled') && null !== $data->getTlsEnabled()) {
            $dataArray['tlsEnabled'] = $data->getTlsEnabled();
        }
        if ($data->isInitialized('cnIdentity') && null !== $data->getCnIdentity()) {
            $dataArray['cnIdentity'] = $data->getCnIdentity();
        }
        $dataArray['ip'] = $data->getIp();
        $dataArray['port'] = $data->getPort();
        $dataArray['windowsDomainName'] = $data->getWindowsDomainName();
        if ($data->isInitialized('proxyUserPrincipalName') && null !== $data->getProxyUserPrincipalName()) {
            $dataArray['proxyUserPrincipalName'] = $data->getProxyUserPrincipalName();
        }
        if ($data->isInitialized('proxyUserPassword') && null !== $data->getProxyUserPassword()) {
            $dataArray['proxyUserPassword'] = $data->getProxyUserPassword();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationActiveDirectoryServer::class => false];
    }
}