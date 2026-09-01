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
class AaaCreateAuthenticationServerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AaaCreateAuthenticationServer::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AaaCreateAuthenticationServer::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AaaCreateAuthenticationServer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('standbyServerEnabled', $data) && \is_int($data['standbyServerEnabled'])) {
            $data['standbyServerEnabled'] = (bool) $data['standbyServerEnabled'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('primary', $data)) {
            $object->primary = $this->denormalizer->denormalize($data['primary'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonRadiusServer::class, 'json', $context);
        }
        if (\array_key_exists('secondary', $data)) {
            $object->secondary = $this->denormalizer->denormalize($data['secondary'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonRadiusServer::class, 'json', $context);
        }
        if (\array_key_exists('mappings', $data)) {
            $values = [];
            foreach ($data['mappings'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\AaaModifyGroupAttrIdentityUserRoleMapping::class, 'json', $context);
            }
            $object->mappings = $values;
        }
        if (\array_key_exists('standbyPrimary', $data)) {
            $object->standbyPrimary = $this->denormalizer->denormalize($data['standbyPrimary'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonRadiusServer::class, 'json', $context);
        }
        if (\array_key_exists('standbyServerEnabled', $data)) {
            $object->standbyServerEnabled = $data['standbyServerEnabled'];
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
        $dataArray['primary'] = ($data->primary ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->primary ?? null, 'json', $context));
        if (array_key_exists('secondary', get_object_vars($data)) && null !== ($data->secondary ?? null)) {
            $dataArray['secondary'] = ($data->secondary ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->secondary ?? null, 'json', $context));
        }
        if (array_key_exists('mappings', get_object_vars($data)) && null !== ($data->mappings ?? null)) {
            $values = [];
            foreach ($data->mappings ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['mappings'] = $values;
        }
        if (array_key_exists('standbyPrimary', get_object_vars($data)) && null !== ($data->standbyPrimary ?? null)) {
            $dataArray['standbyPrimary'] = ($data->standbyPrimary ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->standbyPrimary ?? null, 'json', $context));
        }
        if (array_key_exists('standbyServerEnabled', get_object_vars($data)) && null !== ($data->standbyServerEnabled ?? null)) {
            $dataArray['standbyServerEnabled'] = $data->standbyServerEnabled ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AaaCreateAuthenticationServer::class => false];
    }
}