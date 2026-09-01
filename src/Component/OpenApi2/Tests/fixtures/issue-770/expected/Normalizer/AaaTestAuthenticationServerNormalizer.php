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
class AaaTestAuthenticationServerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AaaTestAuthenticationServer::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AaaTestAuthenticationServer::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AaaTestAuthenticationServer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('serverType', $data)) {
            $object->serverType = $data['serverType'];
        }
        if (\array_key_exists('aaaType', $data)) {
            $object->aaaType = $data['aaaType'];
        }
        if (\array_key_exists('aaaServer', $data)) {
            $object->aaaServer = $this->denormalizer->denormalize($data['aaaServer'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('userName', $data)) {
            $object->userName = $data['userName'];
        }
        if (\array_key_exists('password', $data)) {
            $object->password = $data['password'];
        }
        if (\array_key_exists('authProtocol', $data)) {
            $object->authProtocol = $data['authProtocol'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('serverType', get_object_vars($data)) && null !== ($data->serverType ?? null)) {
            $dataArray['serverType'] = $data->serverType ?? null;
        }
        if (array_key_exists('aaaType', get_object_vars($data)) && null !== ($data->aaaType ?? null)) {
            $dataArray['aaaType'] = $data->aaaType ?? null;
        }
        $dataArray['aaaServer'] = ($data->aaaServer ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->aaaServer ?? null, 'json', $context));
        if (array_key_exists('userName', get_object_vars($data)) && null !== ($data->userName ?? null)) {
            $dataArray['userName'] = $data->userName ?? null;
        }
        if (array_key_exists('password', get_object_vars($data)) && null !== ($data->password ?? null)) {
            $dataArray['password'] = $data->password ?? null;
        }
        if (array_key_exists('authProtocol', get_object_vars($data)) && null !== ($data->authProtocol ?? null)) {
            $dataArray['authProtocol'] = $data->authProtocol ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AaaTestAuthenticationServer::class => false];
    }
}