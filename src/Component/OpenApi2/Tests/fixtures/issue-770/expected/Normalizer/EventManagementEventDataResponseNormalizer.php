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
class EventManagementEventDataResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\EventManagementEventDataResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\EventManagementEventDataResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\EventManagementEventDataResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('success', $data) && \is_int($data['success'])) {
            $data['success'] = (bool) $data['success'];
        }
        if (\array_key_exists('success', $data)) {
            $object->success = $data['success'];
        }
        if (\array_key_exists('error', $data)) {
            $object->error = $data['error'];
        }
        if (\array_key_exists('data', $data)) {
            $object->data = $this->denormalizer->denormalize($data['data'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\EventManagementEventDataList::class, 'json', $context);
        }
        if (\array_key_exists('extra', $data)) {
            $object->extra = $data['extra'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('success', get_object_vars($data)) && null !== ($data->success ?? null)) {
            $dataArray['success'] = $data->success ?? null;
        }
        if (array_key_exists('error', get_object_vars($data)) && null !== ($data->error ?? null)) {
            $dataArray['error'] = $data->error ?? null;
        }
        if (array_key_exists('data', get_object_vars($data)) && null !== ($data->data ?? null)) {
            $dataArray['data'] = ($data->data ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->data ?? null, 'json', $context));
        }
        if (array_key_exists('extra', get_object_vars($data)) && null !== ($data->extra ?? null)) {
            $dataArray['extra'] = $data->extra ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\EventManagementEventDataResponse::class => false];
    }
}