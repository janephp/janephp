<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AuthConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\AuthConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\AuthConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\AuthConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\AuthConfigConstraint());
        }
        if (\array_key_exists('username', $data)) {
            $object->username = $data['username'];
        }
        if (\array_key_exists('password', $data)) {
            $object->password = $data['password'];
        }
        if (\array_key_exists('email', $data)) {
            $object->email = $data['email'];
        }
        if (\array_key_exists('serveraddress', $data)) {
            $object->serveraddress = $data['serveraddress'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('username', get_object_vars($data)) && null !== ($data->username ?? null)) {
            $dataArray['username'] = $data->username ?? null;
        }
        if (array_key_exists('password', get_object_vars($data)) && null !== ($data->password ?? null)) {
            $dataArray['password'] = $data->password ?? null;
        }
        if (array_key_exists('email', get_object_vars($data)) && null !== ($data->email ?? null)) {
            $dataArray['email'] = $data->email ?? null;
        }
        if (array_key_exists('serveraddress', get_object_vars($data)) && null !== ($data->serveraddress ?? null)) {
            $dataArray['serveraddress'] = $data->serveraddress ?? null;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\AuthConfigConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\AuthConfig::class => false];
    }
}