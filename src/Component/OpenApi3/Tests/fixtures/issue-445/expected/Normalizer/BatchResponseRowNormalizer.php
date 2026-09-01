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
class BatchResponseRowNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BatchResponseRow::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BatchResponseRow::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BatchResponseRow();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('succeeded', $data) && \is_int($data['succeeded'])) {
            $data['succeeded'] = (bool) $data['succeeded'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('succeeded', $data)) {
            $object->succeeded = $data['succeeded'];
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
        }
        if (\array_key_exists('version', $data)) {
            $object->version = $data['version'];
        }
        if (\array_key_exists('error', $data) && $data['error'] !== null) {
            $value = $data['error'];
            if (is_array($data['error'])) {
                $value = $this->denormalizer->denormalize($data['error'], \PicturePark\API\Model\ErrorResponse::class, 'json', $context);
            }
            $object->error = $value;
        }
        elseif (\array_key_exists('error', $data) && $data['error'] === null) {
            $object->error = null;
        }
        if (\array_key_exists('requestId', $data) && $data['requestId'] !== null) {
            $object->requestId = $data['requestId'];
        }
        elseif (\array_key_exists('requestId', $data) && $data['requestId'] === null) {
            $object->requestId = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->id ?? null;
        $dataArray['succeeded'] = $data->succeeded ?? null;
        $dataArray['status'] = $data->status ?? null;
        $dataArray['version'] = $data->version ?? null;
        if (array_key_exists('error', get_object_vars($data)) && null !== ($data->error ?? null)) {
            $value = $data->error ?? null;
            if (is_object($data->error ?? null)) {
                $value = ($data->error ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->error ?? null, 'json', $context));
            }
            $dataArray['error'] = $value;
        }
        if (array_key_exists('requestId', get_object_vars($data)) && null !== ($data->requestId ?? null)) {
            $dataArray['requestId'] = $data->requestId ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BatchResponseRow::class => false];
    }
}