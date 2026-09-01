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
class AaaCreateHttp2ServerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaCreateHttp2Server::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaCreateHttp2Server::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaCreateHttp2Server();
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
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('partnerName', $data)) {
            $object->partnerName = $data['partnerName'];
        }
        if (\array_key_exists('token', $data)) {
            $object->token = $data['token'];
        }
        if (\array_key_exists('authenticationApi', $data)) {
            $object->authenticationApi = $data['authenticationApi'];
        }
        if (\array_key_exists('accountingApi', $data)) {
            $object->accountingApi = $data['accountingApi'];
        }
        if (\array_key_exists('coaResponseApi', $data)) {
            $object->coaResponseApi = $data['coaResponseApi'];
        }
        if (\array_key_exists('coaApi', $data)) {
            $object->coaApi = $data['coaApi'];
        }
        if (\array_key_exists('sseTimeout', $data)) {
            $object->sseTimeout = $data['sseTimeout'];
        }
        if (\array_key_exists('mappings', $data)) {
            $values = [];
            foreach ($data['mappings'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaModifyGroupAttrIdentityUserRoleMapping::class, 'json', $context);
            }
            $object->mappings = $values;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('partnerName', get_object_vars($data)) && null !== ($data->partnerName ?? null)) {
            $dataArray['partnerName'] = $data->partnerName ?? null;
        }
        $dataArray['token'] = $data->token ?? null;
        if (array_key_exists('authenticationApi', get_object_vars($data)) && null !== ($data->authenticationApi ?? null)) {
            $dataArray['authenticationApi'] = $data->authenticationApi ?? null;
        }
        if (array_key_exists('accountingApi', get_object_vars($data)) && null !== ($data->accountingApi ?? null)) {
            $dataArray['accountingApi'] = $data->accountingApi ?? null;
        }
        if (array_key_exists('coaResponseApi', get_object_vars($data)) && null !== ($data->coaResponseApi ?? null)) {
            $dataArray['coaResponseApi'] = $data->coaResponseApi ?? null;
        }
        if (array_key_exists('coaApi', get_object_vars($data)) && null !== ($data->coaApi ?? null)) {
            $dataArray['coaApi'] = $data->coaApi ?? null;
        }
        if (array_key_exists('sseTimeout', get_object_vars($data)) && null !== ($data->sseTimeout ?? null)) {
            $dataArray['sseTimeout'] = $data->sseTimeout ?? null;
        }
        if (array_key_exists('mappings', get_object_vars($data)) && null !== ($data->mappings ?? null)) {
            $values = [];
            foreach ($data->mappings ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['mappings'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaCreateHttp2Server::class => false];
    }
}