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
class VideoStreamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\VideoStream::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\VideoStream::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\VideoStream();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('durationInSeconds', $data) && \is_int($data['durationInSeconds'])) {
            $data['durationInSeconds'] = (float) $data['durationInSeconds'];
        }
        if (\array_key_exists('frameRate', $data) && \is_int($data['frameRate'])) {
            $data['frameRate'] = (float) $data['frameRate'];
        }
        if (\array_key_exists('pixelAspectRatio', $data) && \is_int($data['pixelAspectRatio'])) {
            $data['pixelAspectRatio'] = (float) $data['pixelAspectRatio'];
        }
        if (\array_key_exists('rotation', $data) && \is_int($data['rotation'])) {
            $data['rotation'] = (float) $data['rotation'];
        }
        if (\array_key_exists('bitRate', $data) && $data['bitRate'] !== null) {
            $object->bitRate = $data['bitRate'];
        }
        elseif (\array_key_exists('bitRate', $data) && $data['bitRate'] === null) {
            $object->bitRate = null;
        }
        if (\array_key_exists('codec', $data) && $data['codec'] !== null) {
            $object->codec = $data['codec'];
        }
        elseif (\array_key_exists('codec', $data) && $data['codec'] === null) {
            $object->codec = null;
        }
        if (\array_key_exists('displayAspectRatio', $data) && $data['displayAspectRatio'] !== null) {
            $object->displayAspectRatio = $data['displayAspectRatio'];
        }
        elseif (\array_key_exists('displayAspectRatio', $data) && $data['displayAspectRatio'] === null) {
            $object->displayAspectRatio = null;
        }
        if (\array_key_exists('durationInSeconds', $data)) {
            $object->durationInSeconds = $data['durationInSeconds'];
        }
        if (\array_key_exists('format', $data) && $data['format'] !== null) {
            $object->format = $data['format'];
        }
        elseif (\array_key_exists('format', $data) && $data['format'] === null) {
            $object->format = null;
        }
        if (\array_key_exists('frameCount', $data) && $data['frameCount'] !== null) {
            $object->frameCount = $data['frameCount'];
        }
        elseif (\array_key_exists('frameCount', $data) && $data['frameCount'] === null) {
            $object->frameCount = null;
        }
        if (\array_key_exists('frameRate', $data) && $data['frameRate'] !== null) {
            $object->frameRate = $data['frameRate'];
        }
        elseif (\array_key_exists('frameRate', $data) && $data['frameRate'] === null) {
            $object->frameRate = null;
        }
        if (\array_key_exists('height', $data) && $data['height'] !== null) {
            $object->height = $data['height'];
        }
        elseif (\array_key_exists('height', $data) && $data['height'] === null) {
            $object->height = null;
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->language = $data['language'];
        }
        elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->language = null;
        }
        if (\array_key_exists('pixelAspectRatio', $data) && $data['pixelAspectRatio'] !== null) {
            $object->pixelAspectRatio = $data['pixelAspectRatio'];
        }
        elseif (\array_key_exists('pixelAspectRatio', $data) && $data['pixelAspectRatio'] === null) {
            $object->pixelAspectRatio = null;
        }
        if (\array_key_exists('resolution', $data) && $data['resolution'] !== null) {
            $object->resolution = $data['resolution'];
        }
        elseif (\array_key_exists('resolution', $data) && $data['resolution'] === null) {
            $object->resolution = null;
        }
        if (\array_key_exists('streamSize', $data) && $data['streamSize'] !== null) {
            $object->streamSize = $data['streamSize'];
        }
        elseif (\array_key_exists('streamSize', $data) && $data['streamSize'] === null) {
            $object->streamSize = null;
        }
        if (\array_key_exists('width', $data) && $data['width'] !== null) {
            $object->width = $data['width'];
        }
        elseif (\array_key_exists('width', $data) && $data['width'] === null) {
            $object->width = null;
        }
        if (\array_key_exists('rotation', $data) && $data['rotation'] !== null) {
            $object->rotation = $data['rotation'];
        }
        elseif (\array_key_exists('rotation', $data) && $data['rotation'] === null) {
            $object->rotation = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('bitRate', get_object_vars($data)) && null !== ($data->bitRate ?? null)) {
            $dataArray['bitRate'] = $data->bitRate ?? null;
        }
        if (array_key_exists('codec', get_object_vars($data)) && null !== ($data->codec ?? null)) {
            $dataArray['codec'] = $data->codec ?? null;
        }
        if (array_key_exists('displayAspectRatio', get_object_vars($data)) && null !== ($data->displayAspectRatio ?? null)) {
            $dataArray['displayAspectRatio'] = $data->displayAspectRatio ?? null;
        }
        $dataArray['durationInSeconds'] = $data->durationInSeconds ?? null;
        if (array_key_exists('format', get_object_vars($data)) && null !== ($data->format ?? null)) {
            $dataArray['format'] = $data->format ?? null;
        }
        if (array_key_exists('frameCount', get_object_vars($data)) && null !== ($data->frameCount ?? null)) {
            $dataArray['frameCount'] = $data->frameCount ?? null;
        }
        if (array_key_exists('frameRate', get_object_vars($data)) && null !== ($data->frameRate ?? null)) {
            $dataArray['frameRate'] = $data->frameRate ?? null;
        }
        if (array_key_exists('height', get_object_vars($data)) && null !== ($data->height ?? null)) {
            $dataArray['height'] = $data->height ?? null;
        }
        if (array_key_exists('language', get_object_vars($data)) && null !== ($data->language ?? null)) {
            $dataArray['language'] = $data->language ?? null;
        }
        if (array_key_exists('pixelAspectRatio', get_object_vars($data)) && null !== ($data->pixelAspectRatio ?? null)) {
            $dataArray['pixelAspectRatio'] = $data->pixelAspectRatio ?? null;
        }
        if (array_key_exists('resolution', get_object_vars($data)) && null !== ($data->resolution ?? null)) {
            $dataArray['resolution'] = $data->resolution ?? null;
        }
        if (array_key_exists('streamSize', get_object_vars($data)) && null !== ($data->streamSize ?? null)) {
            $dataArray['streamSize'] = $data->streamSize ?? null;
        }
        if (array_key_exists('width', get_object_vars($data)) && null !== ($data->width ?? null)) {
            $dataArray['width'] = $data->width ?? null;
        }
        if (array_key_exists('rotation', get_object_vars($data)) && null !== ($data->rotation ?? null)) {
            $dataArray['rotation'] = $data->rotation ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\VideoStream::class => false];
    }
}