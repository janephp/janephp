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
class AdministrationSecondaryRadiusServerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationSecondaryRadiusServer::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationSecondaryRadiusServer::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationSecondaryRadiusServer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
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
        if (\array_key_exists('requestTimeOut', $data)) {
            $object->requestTimeOut = $data['requestTimeOut'];
        }
        if (\array_key_exists('maxRetries', $data)) {
            $object->maxRetries = $data['maxRetries'];
        }
        if (\array_key_exists('retryPriInvl', $data)) {
            $object->retryPriInvl = $data['retryPriInvl'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('ip', get_object_vars($data)) && null !== ($data->ip ?? null)) {
            $dataArray['ip'] = $data->ip ?? null;
        }
        $dataArray['port'] = $data->port ?? null;
        if (array_key_exists('protocol', get_object_vars($data)) && null !== ($data->protocol ?? null)) {
            $dataArray['protocol'] = $data->protocol ?? null;
        }
        $dataArray['sharedSecret'] = $data->sharedSecret ?? null;
        $dataArray['ipFqdn'] = $data->ipFqdn ?? null;
        $dataArray['requestTimeOut'] = $data->requestTimeOut ?? null;
        $dataArray['maxRetries'] = $data->maxRetries ?? null;
        $dataArray['retryPriInvl'] = $data->retryPriInvl ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationSecondaryRadiusServer::class => false];
    }
}