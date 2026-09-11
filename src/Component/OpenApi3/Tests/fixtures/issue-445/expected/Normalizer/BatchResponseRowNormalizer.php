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
        elseif (\array_key_exists('error', $data)) {
            $object->error = null;
        }
        if (\array_key_exists('requestId', $data) && $data['requestId'] !== null) {
            $object->requestId = $data['requestId'];
        }
        elseif (\array_key_exists('requestId', $data)) {
            $object->requestId = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->id;
        $dataArray['succeeded'] = $data->succeeded;
        $dataArray['status'] = $data->status;
        $dataArray['version'] = $data->version;
        if (array_key_exists('error', get_object_vars($data)) && null !== ($data->error ?? null)) {
            $value = $data->error;
            if (is_object($data->error)) {
                $normalized = $this->normalizer->normalize($data->error, 'json', $context);
                $value = \is_iterable($normalized) ? new \PicturePark\API\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['error'] = $value;
        }
        if (array_key_exists('requestId', get_object_vars($data)) && null !== ($data->requestId ?? null)) {
            $dataArray['requestId'] = $data->requestId;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BatchResponseRow::class => false];
    }
}