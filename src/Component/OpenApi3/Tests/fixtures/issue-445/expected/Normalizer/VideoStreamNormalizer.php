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
            $object->setBitRate($data['bitRate']);
        }
        elseif (\array_key_exists('bitRate', $data) && $data['bitRate'] === null) {
            $object->setBitRate(null);
        }
        if (\array_key_exists('codec', $data) && $data['codec'] !== null) {
            $object->setCodec($data['codec']);
        }
        elseif (\array_key_exists('codec', $data) && $data['codec'] === null) {
            $object->setCodec(null);
        }
        if (\array_key_exists('displayAspectRatio', $data) && $data['displayAspectRatio'] !== null) {
            $object->setDisplayAspectRatio($data['displayAspectRatio']);
        }
        elseif (\array_key_exists('displayAspectRatio', $data) && $data['displayAspectRatio'] === null) {
            $object->setDisplayAspectRatio(null);
        }
        if (\array_key_exists('durationInSeconds', $data)) {
            $object->setDurationInSeconds($data['durationInSeconds']);
        }
        if (\array_key_exists('format', $data) && $data['format'] !== null) {
            $object->setFormat($data['format']);
        }
        elseif (\array_key_exists('format', $data) && $data['format'] === null) {
            $object->setFormat(null);
        }
        if (\array_key_exists('frameCount', $data) && $data['frameCount'] !== null) {
            $object->setFrameCount($data['frameCount']);
        }
        elseif (\array_key_exists('frameCount', $data) && $data['frameCount'] === null) {
            $object->setFrameCount(null);
        }
        if (\array_key_exists('frameRate', $data) && $data['frameRate'] !== null) {
            $object->setFrameRate($data['frameRate']);
        }
        elseif (\array_key_exists('frameRate', $data) && $data['frameRate'] === null) {
            $object->setFrameRate(null);
        }
        if (\array_key_exists('height', $data) && $data['height'] !== null) {
            $object->setHeight($data['height']);
        }
        elseif (\array_key_exists('height', $data) && $data['height'] === null) {
            $object->setHeight(null);
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->setLanguage($data['language']);
        }
        elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->setLanguage(null);
        }
        if (\array_key_exists('pixelAspectRatio', $data) && $data['pixelAspectRatio'] !== null) {
            $object->setPixelAspectRatio($data['pixelAspectRatio']);
        }
        elseif (\array_key_exists('pixelAspectRatio', $data) && $data['pixelAspectRatio'] === null) {
            $object->setPixelAspectRatio(null);
        }
        if (\array_key_exists('resolution', $data) && $data['resolution'] !== null) {
            $object->setResolution($data['resolution']);
        }
        elseif (\array_key_exists('resolution', $data) && $data['resolution'] === null) {
            $object->setResolution(null);
        }
        if (\array_key_exists('streamSize', $data) && $data['streamSize'] !== null) {
            $object->setStreamSize($data['streamSize']);
        }
        elseif (\array_key_exists('streamSize', $data) && $data['streamSize'] === null) {
            $object->setStreamSize(null);
        }
        if (\array_key_exists('width', $data) && $data['width'] !== null) {
            $object->setWidth($data['width']);
        }
        elseif (\array_key_exists('width', $data) && $data['width'] === null) {
            $object->setWidth(null);
        }
        if (\array_key_exists('rotation', $data) && $data['rotation'] !== null) {
            $object->setRotation($data['rotation']);
        }
        elseif (\array_key_exists('rotation', $data) && $data['rotation'] === null) {
            $object->setRotation(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('bitRate')) {
            $dataArray['bitRate'] = $data->getBitRate();
        }
        if ($data->isInitialized('codec')) {
            $dataArray['codec'] = $data->getCodec();
        }
        if ($data->isInitialized('displayAspectRatio')) {
            $dataArray['displayAspectRatio'] = $data->getDisplayAspectRatio();
        }
        $dataArray['durationInSeconds'] = $data->getDurationInSeconds();
        if ($data->isInitialized('format')) {
            $dataArray['format'] = $data->getFormat();
        }
        if ($data->isInitialized('frameCount')) {
            $dataArray['frameCount'] = $data->getFrameCount();
        }
        if ($data->isInitialized('frameRate')) {
            $dataArray['frameRate'] = $data->getFrameRate();
        }
        if ($data->isInitialized('height')) {
            $dataArray['height'] = $data->getHeight();
        }
        if ($data->isInitialized('language')) {
            $dataArray['language'] = $data->getLanguage();
        }
        if ($data->isInitialized('pixelAspectRatio')) {
            $dataArray['pixelAspectRatio'] = $data->getPixelAspectRatio();
        }
        if ($data->isInitialized('resolution')) {
            $dataArray['resolution'] = $data->getResolution();
        }
        if ($data->isInitialized('streamSize')) {
            $dataArray['streamSize'] = $data->getStreamSize();
        }
        if ($data->isInitialized('width')) {
            $dataArray['width'] = $data->getWidth();
        }
        if ($data->isInitialized('rotation')) {
            $dataArray['rotation'] = $data->getRotation();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\VideoStream::class => false];
    }
}