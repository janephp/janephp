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
class MetadataErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\MetadataError::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\MetadataError::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\MetadataError();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('errorType', $data) && $data['errorType'] !== null) {
            $object->errorType = $data['errorType'];
        }
        elseif (\array_key_exists('errorType', $data) && $data['errorType'] === null) {
            $object->errorType = null;
        }
        if (\array_key_exists('lineNumber', $data)) {
            $object->lineNumber = $data['lineNumber'];
        }
        if (\array_key_exists('linePosition', $data)) {
            $object->linePosition = $data['linePosition'];
        }
        if (\array_key_exists('path', $data) && $data['path'] !== null) {
            $object->path = $data['path'];
        }
        elseif (\array_key_exists('path', $data) && $data['path'] === null) {
            $object->path = null;
        }
        if (\array_key_exists('message', $data) && $data['message'] !== null) {
            $object->message = $data['message'];
        }
        elseif (\array_key_exists('message', $data) && $data['message'] === null) {
            $object->message = null;
        }
        if (\array_key_exists('schemaId', $data) && $data['schemaId'] !== null) {
            $object->schemaId = $data['schemaId'];
        }
        elseif (\array_key_exists('schemaId', $data) && $data['schemaId'] === null) {
            $object->schemaId = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('errorType', get_object_vars($data)) && null !== ($data->errorType ?? null)) {
            $dataArray['errorType'] = $data->errorType ?? null;
        }
        $dataArray['lineNumber'] = $data->lineNumber ?? null;
        $dataArray['linePosition'] = $data->linePosition ?? null;
        if (array_key_exists('path', get_object_vars($data)) && null !== ($data->path ?? null)) {
            $dataArray['path'] = $data->path ?? null;
        }
        if (array_key_exists('message', get_object_vars($data)) && null !== ($data->message ?? null)) {
            $dataArray['message'] = $data->message ?? null;
        }
        if (array_key_exists('schemaId', get_object_vars($data)) && null !== ($data->schemaId ?? null)) {
            $dataArray['schemaId'] = $data->schemaId ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\MetadataError::class => false];
    }
}