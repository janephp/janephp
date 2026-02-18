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
class SessionManagementRuckusSessionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SessionManagementRuckusSession::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SessionManagementRuckusSession::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SessionManagementRuckusSession();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('lastAccessTime', $data)) {
            $object->setLastAccessTime($data['lastAccessTime']);
        }
        if (\array_key_exists('lastAccessURI', $data)) {
            $object->setLastAccessURI($data['lastAccessURI']);
        }
        if (\array_key_exists('userUUID', $data)) {
            $object->setUserUUID($data['userUUID']);
        }
        if (\array_key_exists('userName', $data)) {
            $object->setUserName($data['userName']);
        }
        if (\array_key_exists('sessionId', $data)) {
            $object->setSessionId($data['sessionId']);
        }
        if (\array_key_exists('sourceIp', $data)) {
            $object->setSourceIp($data['sourceIp']);
        }
        if (\array_key_exists('authType', $data)) {
            $object->setAuthType($data['authType']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('lastAccessTime') && null !== $data->getLastAccessTime()) {
            $dataArray['lastAccessTime'] = $data->getLastAccessTime();
        }
        if ($data->isInitialized('lastAccessURI') && null !== $data->getLastAccessURI()) {
            $dataArray['lastAccessURI'] = $data->getLastAccessURI();
        }
        if ($data->isInitialized('userUUID') && null !== $data->getUserUUID()) {
            $dataArray['userUUID'] = $data->getUserUUID();
        }
        if ($data->isInitialized('userName') && null !== $data->getUserName()) {
            $dataArray['userName'] = $data->getUserName();
        }
        if ($data->isInitialized('sessionId') && null !== $data->getSessionId()) {
            $dataArray['sessionId'] = $data->getSessionId();
        }
        if ($data->isInitialized('sourceIp') && null !== $data->getSourceIp()) {
            $dataArray['sourceIp'] = $data->getSourceIp();
        }
        if ($data->isInitialized('authType') && null !== $data->getAuthType()) {
            $dataArray['authType'] = $data->getAuthType();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SessionManagementRuckusSession::class => false];
    }
}