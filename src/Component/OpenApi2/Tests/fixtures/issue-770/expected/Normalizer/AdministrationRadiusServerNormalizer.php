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
class AdministrationRadiusServerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationRadiusServer::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationRadiusServer::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationRadiusServer();
        if (\array_key_exists('tlsEnabled', $data) && \is_int($data['tlsEnabled'])) {
            $data['tlsEnabled'] = (bool) $data['tlsEnabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('realm', $data)) {
            $object->setRealm($data['realm']);
        }
        if (\array_key_exists('ip', $data)) {
            $object->setIp($data['ip']);
        }
        if (\array_key_exists('port', $data)) {
            $object->setPort($data['port']);
        }
        if (\array_key_exists('protocol', $data)) {
            $object->setProtocol($data['protocol']);
        }
        if (\array_key_exists('sharedSecret', $data)) {
            $object->setSharedSecret($data['sharedSecret']);
        }
        if (\array_key_exists('ipFqdn', $data)) {
            $object->setIpFqdn($data['ipFqdn']);
        }
        if (\array_key_exists('secondaryRadiusServer', $data)) {
            $object->setSecondaryRadiusServer($this->denormalizer->denormalize($data['secondaryRadiusServer'], \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationSecondaryRadiusServer::class, 'json', $context));
        }
        if (\array_key_exists('tlsEnabled', $data)) {
            $object->setTlsEnabled($data['tlsEnabled']);
        }
        if (\array_key_exists('clientCertId', $data)) {
            $object->setClientCertId($data['clientCertId']);
        }
        if (\array_key_exists('cnSanIdentity', $data)) {
            $object->setCnSanIdentity($data['cnSanIdentity']);
        }
        if (\array_key_exists('ocspUrl', $data)) {
            $object->setOcspUrl($data['ocspUrl']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['realm'] = $data->getRealm();
        if ($data->isInitialized('ip') && null !== $data->getIp()) {
            $dataArray['ip'] = $data->getIp();
        }
        $dataArray['port'] = $data->getPort();
        if ($data->isInitialized('protocol') && null !== $data->getProtocol()) {
            $dataArray['protocol'] = $data->getProtocol();
        }
        if ($data->isInitialized('sharedSecret') && null !== $data->getSharedSecret()) {
            $dataArray['sharedSecret'] = $data->getSharedSecret();
        }
        $dataArray['ipFqdn'] = $data->getIpFqdn();
        if ($data->isInitialized('secondaryRadiusServer') && null !== $data->getSecondaryRadiusServer()) {
            $dataArray['secondaryRadiusServer'] = $this->normalizer->normalize($data->getSecondaryRadiusServer(), 'json', $context);
        }
        if ($data->isInitialized('tlsEnabled') && null !== $data->getTlsEnabled()) {
            $dataArray['tlsEnabled'] = $data->getTlsEnabled();
        }
        if ($data->isInitialized('clientCertId') && null !== $data->getClientCertId()) {
            $dataArray['clientCertId'] = $data->getClientCertId();
        }
        if ($data->isInitialized('cnSanIdentity') && null !== $data->getCnSanIdentity()) {
            $dataArray['cnSanIdentity'] = $data->getCnSanIdentity();
        }
        if ($data->isInitialized('ocspUrl') && null !== $data->getOcspUrl()) {
            $dataArray['ocspUrl'] = $data->getOcspUrl();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationRadiusServer::class => false];
    }
}