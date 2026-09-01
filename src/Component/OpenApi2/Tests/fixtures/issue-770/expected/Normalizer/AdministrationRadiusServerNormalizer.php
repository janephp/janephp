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
class AdministrationRadiusServerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationRadiusServer::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationRadiusServer::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationRadiusServer();
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
        if (\array_key_exists('ip', $data)) {
            $object->ip = $data['ip'];
        }
        if (\array_key_exists('port', $data)) {
            $object->port = $data['port'];
        }
        if (\array_key_exists('protocol', $data)) {
            $object->protocol = $data['protocol'];
        }
        if (\array_key_exists('sharedSecret', $data)) {
            $object->sharedSecret = $data['sharedSecret'];
        }
        if (\array_key_exists('ipFqdn', $data)) {
            $object->ipFqdn = $data['ipFqdn'];
        }
        if (\array_key_exists('secondaryRadiusServer', $data)) {
            $object->secondaryRadiusServer = $this->denormalizer->denormalize($data['secondaryRadiusServer'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationSecondaryRadiusServer::class, 'json', $context);
        }
        if (\array_key_exists('tlsEnabled', $data)) {
            $object->tlsEnabled = $data['tlsEnabled'];
        }
        if (\array_key_exists('clientCertId', $data)) {
            $object->clientCertId = $data['clientCertId'];
        }
        if (\array_key_exists('cnSanIdentity', $data)) {
            $object->cnSanIdentity = $data['cnSanIdentity'];
        }
        if (\array_key_exists('ocspUrl', $data)) {
            $object->ocspUrl = $data['ocspUrl'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['realm'] = $data->realm ?? null;
        if (array_key_exists('ip', get_object_vars($data)) && null !== ($data->ip ?? null)) {
            $dataArray['ip'] = $data->ip ?? null;
        }
        $dataArray['port'] = $data->port ?? null;
        if (array_key_exists('protocol', get_object_vars($data)) && null !== ($data->protocol ?? null)) {
            $dataArray['protocol'] = $data->protocol ?? null;
        }
        if (array_key_exists('sharedSecret', get_object_vars($data)) && null !== ($data->sharedSecret ?? null)) {
            $dataArray['sharedSecret'] = $data->sharedSecret ?? null;
        }
        $dataArray['ipFqdn'] = $data->ipFqdn ?? null;
        if (array_key_exists('secondaryRadiusServer', get_object_vars($data)) && null !== ($data->secondaryRadiusServer ?? null)) {
            $dataArray['secondaryRadiusServer'] = ($data->secondaryRadiusServer ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->secondaryRadiusServer ?? null, 'json', $context));
        }
        if (array_key_exists('tlsEnabled', get_object_vars($data)) && null !== ($data->tlsEnabled ?? null)) {
            $dataArray['tlsEnabled'] = $data->tlsEnabled ?? null;
        }
        if (array_key_exists('clientCertId', get_object_vars($data)) && null !== ($data->clientCertId ?? null)) {
            $dataArray['clientCertId'] = $data->clientCertId ?? null;
        }
        if (array_key_exists('cnSanIdentity', get_object_vars($data)) && null !== ($data->cnSanIdentity ?? null)) {
            $dataArray['cnSanIdentity'] = $data->cnSanIdentity ?? null;
        }
        if (array_key_exists('ocspUrl', get_object_vars($data)) && null !== ($data->ocspUrl ?? null)) {
            $dataArray['ocspUrl'] = $data->ocspUrl ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationRadiusServer::class => false];
    }
}