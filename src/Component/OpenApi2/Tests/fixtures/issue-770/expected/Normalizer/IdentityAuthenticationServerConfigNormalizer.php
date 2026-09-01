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
class IdentityAuthenticationServerConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityAuthenticationServerConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityAuthenticationServerConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityAuthenticationServerConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('local', $data) && \is_int($data['local'])) {
            $data['local'] = (bool) $data['local'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
        }
        if (\array_key_exists('local', $data)) {
            $object->local = $data['local'];
        }
        if (\array_key_exists('AUTHENTICATION_SERVER_TYPE', $data)) {
            $object->aUTHENTICATIONSERVERTYPE = $data['AUTHENTICATION_SERVER_TYPE'];
        }
        if (\array_key_exists('AUTHENTICATION_SERVER_NAME', $data)) {
            $object->aUTHENTICATIONSERVERNAME = $data['AUTHENTICATION_SERVER_NAME'];
        }
        if (\array_key_exists('AUTHENTICATION_SERVER_ID', $data)) {
            $object->aUTHENTICATIONSERVERID = $data['AUTHENTICATION_SERVER_ID'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type ?? null;
        }
        if (array_key_exists('local', get_object_vars($data)) && null !== ($data->local ?? null)) {
            $dataArray['local'] = $data->local ?? null;
        }
        if (array_key_exists('aUTHENTICATIONSERVERTYPE', get_object_vars($data)) && null !== ($data->aUTHENTICATIONSERVERTYPE ?? null)) {
            $dataArray['AUTHENTICATION_SERVER_TYPE'] = $data->aUTHENTICATIONSERVERTYPE ?? null;
        }
        if (array_key_exists('aUTHENTICATIONSERVERNAME', get_object_vars($data)) && null !== ($data->aUTHENTICATIONSERVERNAME ?? null)) {
            $dataArray['AUTHENTICATION_SERVER_NAME'] = $data->aUTHENTICATIONSERVERNAME ?? null;
        }
        if (array_key_exists('aUTHENTICATIONSERVERID', get_object_vars($data)) && null !== ($data->aUTHENTICATIONSERVERID ?? null)) {
            $dataArray['AUTHENTICATION_SERVER_ID'] = $data->aUTHENTICATIONSERVERID ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\IdentityAuthenticationServerConfig::class => false];
    }
}