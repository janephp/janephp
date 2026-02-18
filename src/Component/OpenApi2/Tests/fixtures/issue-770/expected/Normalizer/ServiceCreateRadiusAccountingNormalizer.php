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
class ServiceCreateRadiusAccountingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceCreateRadiusAccounting::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceCreateRadiusAccounting::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceCreateRadiusAccounting();
        if (\array_key_exists('standbyServerEnabled', $data) && \is_int($data['standbyServerEnabled'])) {
            $data['standbyServerEnabled'] = (bool) $data['standbyServerEnabled'];
        }
        if (\array_key_exists('tlsEnabled', $data) && \is_int($data['tlsEnabled'])) {
            $data['tlsEnabled'] = (bool) $data['tlsEnabled'];
        }
        if (\array_key_exists('standbyTlsEnabled', $data) && \is_int($data['standbyTlsEnabled'])) {
            $data['standbyTlsEnabled'] = (bool) $data['standbyTlsEnabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        if (\array_key_exists('protocol', $data)) {
            $object->setProtocol($data['protocol']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('primary', $data)) {
            $object->setPrimary($this->denormalizer->denormalize($data['primary'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonRadiusServerWhenTlsEnabled::class, 'json', $context));
        }
        if (\array_key_exists('secondary', $data)) {
            $object->setSecondary($this->denormalizer->denormalize($data['secondary'], \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceSecondaryRadiusServer::class, 'json', $context));
        }
        if (\array_key_exists('healthCheckPolicy', $data)) {
            $object->setHealthCheckPolicy($this->denormalizer->denormalize($data['healthCheckPolicy'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonHealthCheckPolicy::class, 'json', $context));
        }
        if (\array_key_exists('rateLimiting', $data)) {
            $object->setRateLimiting($this->denormalizer->denormalize($data['rateLimiting'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonRateLimiting::class, 'json', $context));
        }
        if (\array_key_exists('standbyPrimary', $data)) {
            $object->setStandbyPrimary($this->denormalizer->denormalize($data['standbyPrimary'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonRadiusServerWhenTlsEnabled::class, 'json', $context));
        }
        if (\array_key_exists('standbyServerEnabled', $data)) {
            $object->setStandbyServerEnabled($data['standbyServerEnabled']);
        }
        if (\array_key_exists('tlsEnabled', $data)) {
            $object->setTlsEnabled($data['tlsEnabled']);
        }
        if (\array_key_exists('ocspUrl', $data)) {
            $object->setOcspUrl($data['ocspUrl']);
        }
        if (\array_key_exists('cnSanIdentity', $data)) {
            $object->setCnSanIdentity($data['cnSanIdentity']);
        }
        if (\array_key_exists('clientCertId', $data)) {
            $object->setClientCertId($data['clientCertId']);
        }
        if (\array_key_exists('serverCertId', $data)) {
            $object->setServerCertId($data['serverCertId']);
        }
        if (\array_key_exists('standbyTlsEnabled', $data)) {
            $object->setStandbyTlsEnabled($data['standbyTlsEnabled']);
        }
        if (\array_key_exists('standbyOcspUrl', $data)) {
            $object->setStandbyOcspUrl($data['standbyOcspUrl']);
        }
        if (\array_key_exists('standbyCnSanIdentity', $data)) {
            $object->setStandbyCnSanIdentity($data['standbyCnSanIdentity']);
        }
        if (\array_key_exists('standbyClientCertId', $data)) {
            $object->setStandbyClientCertId($data['standbyClientCertId']);
        }
        if (\array_key_exists('standbyServerCertId', $data)) {
            $object->setStandbyServerCertId($data['standbyServerCertId']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        if ($data->isInitialized('protocol') && null !== $data->getProtocol()) {
            $dataArray['protocol'] = $data->getProtocol();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        $dataArray['primary'] = $this->normalizer->normalize($data->getPrimary(), 'json', $context);
        if ($data->isInitialized('secondary') && null !== $data->getSecondary()) {
            $dataArray['secondary'] = $this->normalizer->normalize($data->getSecondary(), 'json', $context);
        }
        if ($data->isInitialized('healthCheckPolicy') && null !== $data->getHealthCheckPolicy()) {
            $dataArray['healthCheckPolicy'] = $this->normalizer->normalize($data->getHealthCheckPolicy(), 'json', $context);
        }
        if ($data->isInitialized('rateLimiting') && null !== $data->getRateLimiting()) {
            $dataArray['rateLimiting'] = $this->normalizer->normalize($data->getRateLimiting(), 'json', $context);
        }
        if ($data->isInitialized('standbyPrimary') && null !== $data->getStandbyPrimary()) {
            $dataArray['standbyPrimary'] = $this->normalizer->normalize($data->getStandbyPrimary(), 'json', $context);
        }
        if ($data->isInitialized('standbyServerEnabled') && null !== $data->getStandbyServerEnabled()) {
            $dataArray['standbyServerEnabled'] = $data->getStandbyServerEnabled();
        }
        if ($data->isInitialized('tlsEnabled') && null !== $data->getTlsEnabled()) {
            $dataArray['tlsEnabled'] = $data->getTlsEnabled();
        }
        if ($data->isInitialized('ocspUrl') && null !== $data->getOcspUrl()) {
            $dataArray['ocspUrl'] = $data->getOcspUrl();
        }
        if ($data->isInitialized('cnSanIdentity') && null !== $data->getCnSanIdentity()) {
            $dataArray['cnSanIdentity'] = $data->getCnSanIdentity();
        }
        if ($data->isInitialized('clientCertId') && null !== $data->getClientCertId()) {
            $dataArray['clientCertId'] = $data->getClientCertId();
        }
        if ($data->isInitialized('serverCertId') && null !== $data->getServerCertId()) {
            $dataArray['serverCertId'] = $data->getServerCertId();
        }
        if ($data->isInitialized('standbyTlsEnabled') && null !== $data->getStandbyTlsEnabled()) {
            $dataArray['standbyTlsEnabled'] = $data->getStandbyTlsEnabled();
        }
        if ($data->isInitialized('standbyOcspUrl') && null !== $data->getStandbyOcspUrl()) {
            $dataArray['standbyOcspUrl'] = $data->getStandbyOcspUrl();
        }
        if ($data->isInitialized('standbyCnSanIdentity') && null !== $data->getStandbyCnSanIdentity()) {
            $dataArray['standbyCnSanIdentity'] = $data->getStandbyCnSanIdentity();
        }
        if ($data->isInitialized('standbyClientCertId') && null !== $data->getStandbyClientCertId()) {
            $dataArray['standbyClientCertId'] = $data->getStandbyClientCertId();
        }
        if ($data->isInitialized('standbyServerCertId') && null !== $data->getStandbyServerCertId()) {
            $dataArray['standbyServerCertId'] = $data->getStandbyServerCertId();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ServiceCreateRadiusAccounting::class => false];
    }
}