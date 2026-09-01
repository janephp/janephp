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
class DownloadTrackingInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\DownloadTrackingInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\DownloadTrackingInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\DownloadTrackingInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('contentId', $data) && $data['contentId'] !== null) {
            $object->contentId = $data['contentId'];
        }
        elseif (\array_key_exists('contentId', $data) && $data['contentId'] === null) {
            $object->contentId = null;
        }
        if (\array_key_exists('outputFormatId', $data) && $data['outputFormatId'] !== null) {
            $object->outputFormatId = $data['outputFormatId'];
        }
        elseif (\array_key_exists('outputFormatId', $data) && $data['outputFormatId'] === null) {
            $object->outputFormatId = null;
        }
        if (\array_key_exists('width', $data) && $data['width'] !== null) {
            $object->width = $data['width'];
        }
        elseif (\array_key_exists('width', $data) && $data['width'] === null) {
            $object->width = null;
        }
        if (\array_key_exists('height', $data) && $data['height'] !== null) {
            $object->height = $data['height'];
        }
        elseif (\array_key_exists('height', $data) && $data['height'] === null) {
            $object->height = null;
        }
        if (\array_key_exists('contentDisposition', $data)) {
            $object->contentDisposition = $data['contentDisposition'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('contentId', get_object_vars($data)) && null !== ($data->contentId ?? null)) {
            $dataArray['contentId'] = $data->contentId ?? null;
        }
        if (array_key_exists('outputFormatId', get_object_vars($data)) && null !== ($data->outputFormatId ?? null)) {
            $dataArray['outputFormatId'] = $data->outputFormatId ?? null;
        }
        if (array_key_exists('width', get_object_vars($data)) && null !== ($data->width ?? null)) {
            $dataArray['width'] = $data->width ?? null;
        }
        if (array_key_exists('height', get_object_vars($data)) && null !== ($data->height ?? null)) {
            $dataArray['height'] = $data->height ?? null;
        }
        $dataArray['contentDisposition'] = $data->contentDisposition ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\DownloadTrackingInfo::class => false];
    }
}