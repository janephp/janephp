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
class ProfileModifyAuthenticationProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyAuthenticationProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyAuthenticationProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyAuthenticationProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('gppSuppportEnabled', $data) && \is_int($data['gppSuppportEnabled'])) {
            $data['gppSuppportEnabled'] = (bool) $data['gppSuppportEnabled'];
        }
        if (\array_key_exists('h20SuppportEnabled', $data) && \is_int($data['h20SuppportEnabled'])) {
            $data['h20SuppportEnabled'] = (bool) $data['h20SuppportEnabled'];
        }
        if (\array_key_exists('mvnoId', $data)) {
            $object->mvnoId = $data['mvnoId'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('ttgCommonSetting', $data)) {
            $object->ttgCommonSetting = $this->denormalizer->denormalize($data['ttgCommonSetting'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileTtgCommonSetting::class, 'json', $context);
        }
        if (\array_key_exists('realmMappings', $data)) {
            $values = [];
            foreach ($data['realmMappings'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileRealmAuthServiceMapping::class, 'json', $context);
            }
            $object->realmMappings = $values;
        }
        if (\array_key_exists('gppSuppportEnabled', $data)) {
            $object->gppSuppportEnabled = $data['gppSuppportEnabled'];
        }
        if (\array_key_exists('h20SuppportEnabled', $data)) {
            $object->h20SuppportEnabled = $data['h20SuppportEnabled'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('mvnoId', get_object_vars($data)) && null !== ($data->mvnoId ?? null)) {
            $dataArray['mvnoId'] = $data->mvnoId;
        }
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description;
        }
        if (array_key_exists('ttgCommonSetting', get_object_vars($data)) && null !== ($data->ttgCommonSetting ?? null)) {
            $normalized = $this->normalizer->normalize($data->ttgCommonSetting, 'json', $context);
            $dataArray['ttgCommonSetting'] = \is_iterable($normalized) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('realmMappings', get_object_vars($data)) && null !== ($data->realmMappings ?? null)) {
            $values = [];
            foreach ($data->realmMappings as $value) {
                $normalized_1 = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized_1) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['realmMappings'] = $values;
        }
        if (array_key_exists('gppSuppportEnabled', get_object_vars($data)) && null !== ($data->gppSuppportEnabled ?? null)) {
            $dataArray['gppSuppportEnabled'] = $data->gppSuppportEnabled;
        }
        if (array_key_exists('h20SuppportEnabled', get_object_vars($data)) && null !== ($data->h20SuppportEnabled ?? null)) {
            $dataArray['h20SuppportEnabled'] = $data->h20SuppportEnabled;
        }
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyAuthenticationProfile::class => false];
    }
}