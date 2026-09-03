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
class AvcModifyApplicationPolicyProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcModifyApplicationPolicyProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcModifyApplicationPolicyProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcModifyApplicationPolicyProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('avcLogEnable', $data) && \is_int($data['avcLogEnable'])) {
            $data['avcLogEnable'] = (bool) $data['avcLogEnable'];
        }
        if (\array_key_exists('avcEventEnable', $data) && \is_int($data['avcEventEnable'])) {
            $data['avcEventEnable'] = (bool) $data['avcEventEnable'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('applicationRules', $data)) {
            $values = [];
            foreach ($data['applicationRules'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcApplicationRule::class, 'json', $context);
            }
            $object->applicationRules = $values;
        }
        if (\array_key_exists('avcLogEnable', $data)) {
            $object->avcLogEnable = $data['avcLogEnable'];
        }
        if (\array_key_exists('avcEventEnable', $data)) {
            $object->avcEventEnable = $data['avcEventEnable'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('applicationRules', get_object_vars($data)) && null !== ($data->applicationRules ?? null)) {
            $values = [];
            foreach ($data->applicationRules ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['applicationRules'] = $values;
        }
        if (array_key_exists('avcLogEnable', get_object_vars($data)) && null !== ($data->avcLogEnable ?? null)) {
            $dataArray['avcLogEnable'] = $data->avcLogEnable ?? null;
        }
        if (array_key_exists('avcEventEnable', get_object_vars($data)) && null !== ($data->avcEventEnable ?? null)) {
            $dataArray['avcEventEnable'] = $data->avcEventEnable ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcModifyApplicationPolicyProfile::class => false];
    }
}