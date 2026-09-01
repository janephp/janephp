<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class LiveStreamTraceJobNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\LiveStreamTraceJob::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\LiveStreamTraceJob::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\LiveStreamTraceJob();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('traceJobId', $data) && $data['traceJobId'] !== null) {
            $object->traceJobId = $data['traceJobId'];
        }
        elseif (\array_key_exists('traceJobId', $data) && $data['traceJobId'] === null) {
            $object->traceJobId = null;
        }
        if (\array_key_exists('ipAddress', $data) && $data['ipAddress'] !== null) {
            $object->ipAddress = $data['ipAddress'];
        }
        elseif (\array_key_exists('ipAddress', $data) && $data['ipAddress'] === null) {
            $object->ipAddress = null;
        }
        if (\array_key_exists('userId', $data) && $data['userId'] !== null) {
            $object->userId = $data['userId'];
        }
        elseif (\array_key_exists('userId', $data) && $data['userId'] === null) {
            $object->userId = null;
        }
        if (\array_key_exists('apiClientId', $data) && $data['apiClientId'] !== null) {
            $object->apiClientId = $data['apiClientId'];
        }
        elseif (\array_key_exists('apiClientId', $data) && $data['apiClientId'] === null) {
            $object->apiClientId = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('traceJobId', get_object_vars($data)) && null !== ($data->traceJobId ?? null)) {
            $dataArray['traceJobId'] = $data->traceJobId ?? null;
        }
        if (array_key_exists('ipAddress', get_object_vars($data)) && null !== ($data->ipAddress ?? null)) {
            $dataArray['ipAddress'] = $data->ipAddress ?? null;
        }
        if (array_key_exists('userId', get_object_vars($data)) && null !== ($data->userId ?? null)) {
            $dataArray['userId'] = $data->userId ?? null;
        }
        if (array_key_exists('apiClientId', get_object_vars($data)) && null !== ($data->apiClientId ?? null)) {
            $dataArray['apiClientId'] = $data->apiClientId ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\LiveStreamTraceJob::class => false];
    }
}