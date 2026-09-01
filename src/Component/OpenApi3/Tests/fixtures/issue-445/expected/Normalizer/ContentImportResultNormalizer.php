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
class ContentImportResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ContentImportResult::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ContentImportResult::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ContentImportResult();
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
        if (\array_key_exists('fileTransferId', $data)) {
            $object->fileTransferId = $data['fileTransferId'];
        }
        if (\array_key_exists('contentId', $data) && $data['contentId'] !== null) {
            $object->contentId = $data['contentId'];
        }
        elseif (\array_key_exists('contentId', $data) && $data['contentId'] === null) {
            $object->contentId = null;
        }
        if (\array_key_exists('state', $data) && $data['state'] !== null) {
            $object->state = $data['state'];
        }
        elseif (\array_key_exists('state', $data) && $data['state'] === null) {
            $object->state = null;
        }
        if (\array_key_exists('succeeded', $data)) {
            $object->succeeded = $data['succeeded'];
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
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['fileTransferId'] = $data->fileTransferId ?? null;
        if (array_key_exists('contentId', get_object_vars($data)) && null !== ($data->contentId ?? null)) {
            $dataArray['contentId'] = $data->contentId ?? null;
        }
        if (array_key_exists('state', get_object_vars($data)) && null !== ($data->state ?? null)) {
            $dataArray['state'] = $data->state ?? null;
        }
        $dataArray['succeeded'] = $data->succeeded ?? null;
        if (array_key_exists('error', get_object_vars($data)) && null !== ($data->error ?? null)) {
            $value = $data->error ?? null;
            if (is_object($data->error ?? null)) {
                $value = ($data->error ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->error ?? null, 'json', $context));
            }
            $dataArray['error'] = $value;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ContentImportResult::class => false];
    }
}