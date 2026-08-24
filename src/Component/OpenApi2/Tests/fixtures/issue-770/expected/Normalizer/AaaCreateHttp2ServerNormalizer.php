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
class AaaCreateHttp2ServerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AaaCreateHttp2Server::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AaaCreateHttp2Server::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AaaCreateHttp2Server();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('partnerName', $data)) {
            $object->setPartnerName($data['partnerName']);
        }
        if (\array_key_exists('token', $data)) {
            $object->setToken($data['token']);
        }
        if (\array_key_exists('authenticationApi', $data)) {
            $object->setAuthenticationApi($data['authenticationApi']);
        }
        if (\array_key_exists('accountingApi', $data)) {
            $object->setAccountingApi($data['accountingApi']);
        }
        if (\array_key_exists('coaResponseApi', $data)) {
            $object->setCoaResponseApi($data['coaResponseApi']);
        }
        if (\array_key_exists('coaApi', $data)) {
            $object->setCoaApi($data['coaApi']);
        }
        if (\array_key_exists('sseTimeout', $data)) {
            $object->setSseTimeout($data['sseTimeout']);
        }
        if (\array_key_exists('mappings', $data)) {
            $values = [];
            foreach ($data['mappings'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\AaaModifyGroupAttrIdentityUserRoleMapping::class, 'json', $context);
            }
            $object->setMappings($values);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('partnerName') && null !== $data->getPartnerName()) {
            $dataArray['partnerName'] = $data->getPartnerName();
        }
        $dataArray['token'] = $data->getToken();
        if ($data->isInitialized('authenticationApi') && null !== $data->getAuthenticationApi()) {
            $dataArray['authenticationApi'] = $data->getAuthenticationApi();
        }
        if ($data->isInitialized('accountingApi') && null !== $data->getAccountingApi()) {
            $dataArray['accountingApi'] = $data->getAccountingApi();
        }
        if ($data->isInitialized('coaResponseApi') && null !== $data->getCoaResponseApi()) {
            $dataArray['coaResponseApi'] = $data->getCoaResponseApi();
        }
        if ($data->isInitialized('coaApi') && null !== $data->getCoaApi()) {
            $dataArray['coaApi'] = $data->getCoaApi();
        }
        if ($data->isInitialized('sseTimeout') && null !== $data->getSseTimeout()) {
            $dataArray['sseTimeout'] = $data->getSseTimeout();
        }
        if ($data->isInitialized('mappings') && null !== $data->getMappings()) {
            $values = [];
            foreach ($data->getMappings() as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['mappings'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AaaCreateHttp2Server::class => false];
    }
}