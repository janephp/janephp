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
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SessionManagementRuckusSession();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('lastAccessTime', $data)) {
            $object->lastAccessTime = $data['lastAccessTime'];
        }
        if (\array_key_exists('lastAccessURI', $data)) {
            $object->lastAccessURI = $data['lastAccessURI'];
        }
        if (\array_key_exists('userUUID', $data)) {
            $object->userUUID = $data['userUUID'];
        }
        if (\array_key_exists('userName', $data)) {
            $object->userName = $data['userName'];
        }
        if (\array_key_exists('sessionId', $data)) {
            $object->sessionId = $data['sessionId'];
        }
        if (\array_key_exists('sourceIp', $data)) {
            $object->sourceIp = $data['sourceIp'];
        }
        if (\array_key_exists('authType', $data)) {
            $object->authType = $data['authType'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('lastAccessTime', get_object_vars($data)) && null !== ($data->lastAccessTime ?? null)) {
            $dataArray['lastAccessTime'] = $data->lastAccessTime ?? null;
        }
        if (array_key_exists('lastAccessURI', get_object_vars($data)) && null !== ($data->lastAccessURI ?? null)) {
            $dataArray['lastAccessURI'] = $data->lastAccessURI ?? null;
        }
        if (array_key_exists('userUUID', get_object_vars($data)) && null !== ($data->userUUID ?? null)) {
            $dataArray['userUUID'] = $data->userUUID ?? null;
        }
        if (array_key_exists('userName', get_object_vars($data)) && null !== ($data->userName ?? null)) {
            $dataArray['userName'] = $data->userName ?? null;
        }
        if (array_key_exists('sessionId', get_object_vars($data)) && null !== ($data->sessionId ?? null)) {
            $dataArray['sessionId'] = $data->sessionId ?? null;
        }
        if (array_key_exists('sourceIp', get_object_vars($data)) && null !== ($data->sourceIp ?? null)) {
            $dataArray['sourceIp'] = $data->sourceIp ?? null;
        }
        if (array_key_exists('authType', get_object_vars($data)) && null !== ($data->authType ?? null)) {
            $dataArray['authType'] = $data->authType ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SessionManagementRuckusSession::class => false];
    }
}