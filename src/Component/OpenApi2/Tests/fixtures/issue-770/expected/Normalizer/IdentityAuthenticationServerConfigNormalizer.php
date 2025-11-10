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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityAuthenticationServerConfig();
        if (\array_key_exists('local', $data) && \is_int($data['local'])) {
            $data['local'] = (bool) $data['local'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('local', $data)) {
            $object->setLocal($data['local']);
        }
        if (\array_key_exists('AUTHENTICATION_SERVER_TYPE', $data)) {
            $object->setAUTHENTICATIONSERVERTYPE($data['AUTHENTICATION_SERVER_TYPE']);
        }
        if (\array_key_exists('AUTHENTICATION_SERVER_NAME', $data)) {
            $object->setAUTHENTICATIONSERVERNAME($data['AUTHENTICATION_SERVER_NAME']);
        }
        if (\array_key_exists('AUTHENTICATION_SERVER_ID', $data)) {
            $object->setAUTHENTICATIONSERVERID($data['AUTHENTICATION_SERVER_ID']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('local') && null !== $data->getLocal()) {
            $dataArray['local'] = $data->getLocal();
        }
        if ($data->isInitialized('aUTHENTICATIONSERVERTYPE') && null !== $data->getAUTHENTICATIONSERVERTYPE()) {
            $dataArray['AUTHENTICATION_SERVER_TYPE'] = $data->getAUTHENTICATIONSERVERTYPE();
        }
        if ($data->isInitialized('aUTHENTICATIONSERVERNAME') && null !== $data->getAUTHENTICATIONSERVERNAME()) {
            $dataArray['AUTHENTICATION_SERVER_NAME'] = $data->getAUTHENTICATIONSERVERNAME();
        }
        if ($data->isInitialized('aUTHENTICATIONSERVERID') && null !== $data->getAUTHENTICATIONSERVERID()) {
            $dataArray['AUTHENTICATION_SERVER_ID'] = $data->getAUTHENTICATIONSERVERID();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\IdentityAuthenticationServerConfig::class => false];
    }
}