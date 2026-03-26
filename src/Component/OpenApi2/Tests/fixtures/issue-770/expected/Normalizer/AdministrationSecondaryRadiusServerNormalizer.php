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
class AdministrationSecondaryRadiusServerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationSecondaryRadiusServer::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationSecondaryRadiusServer::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationSecondaryRadiusServer();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('requestTimeOut', $data)) {
            $object->setRequestTimeOut($data['requestTimeOut']);
        }
        if (\array_key_exists('maxRetries', $data)) {
            $object->setMaxRetries($data['maxRetries']);
        }
        if (\array_key_exists('retryPriInvl', $data)) {
            $object->setRetryPriInvl($data['retryPriInvl']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('ip') && null !== $data->getIp()) {
            $dataArray['ip'] = $data->getIp();
        }
        $dataArray['port'] = $data->getPort();
        if ($data->isInitialized('protocol') && null !== $data->getProtocol()) {
            $dataArray['protocol'] = $data->getProtocol();
        }
        $dataArray['sharedSecret'] = $data->getSharedSecret();
        $dataArray['ipFqdn'] = $data->getIpFqdn();
        $dataArray['requestTimeOut'] = $data->getRequestTimeOut();
        $dataArray['maxRetries'] = $data->getMaxRetries();
        $dataArray['retryPriInvl'] = $data->getRetryPriInvl();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationSecondaryRadiusServer::class => false];
    }
}