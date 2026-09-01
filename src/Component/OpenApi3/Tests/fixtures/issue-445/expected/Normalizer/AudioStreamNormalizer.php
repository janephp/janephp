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
class AudioStreamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\AudioStream::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\AudioStream::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\AudioStream();
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
        if (\array_key_exists('bitRate', $data) && $data['bitRate'] !== null) {
            $object->bitRate = $data['bitRate'];
        }
        elseif (\array_key_exists('bitRate', $data) && $data['bitRate'] === null) {
            $object->bitRate = null;
        }
        if (\array_key_exists('bitRateMode', $data) && $data['bitRateMode'] !== null) {
            $object->bitRateMode = $data['bitRateMode'];
        }
        elseif (\array_key_exists('bitRateMode', $data) && $data['bitRateMode'] === null) {
            $object->bitRateMode = null;
        }
        if (\array_key_exists('channels', $data) && $data['channels'] !== null) {
            $object->channels = $data['channels'];
        }
        elseif (\array_key_exists('channels', $data) && $data['channels'] === null) {
            $object->channels = null;
        }
        if (\array_key_exists('channelPositions', $data) && $data['channelPositions'] !== null) {
            $object->channelPositions = $data['channelPositions'];
        }
        elseif (\array_key_exists('channelPositions', $data) && $data['channelPositions'] === null) {
            $object->channelPositions = null;
        }
        if (\array_key_exists('codec', $data) && $data['codec'] !== null) {
            $object->codec = $data['codec'];
        }
        elseif (\array_key_exists('codec', $data) && $data['codec'] === null) {
            $object->codec = null;
        }
        if (\array_key_exists('durationInSeconds', $data) && $data['durationInSeconds'] !== null) {
            $object->durationInSeconds = $data['durationInSeconds'];
        }
        elseif (\array_key_exists('durationInSeconds', $data) && $data['durationInSeconds'] === null) {
            $object->durationInSeconds = null;
        }
        if (\array_key_exists('format', $data) && $data['format'] !== null) {
            $object->format = $data['format'];
        }
        elseif (\array_key_exists('format', $data) && $data['format'] === null) {
            $object->format = null;
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->language = $data['language'];
        }
        elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->language = null;
        }
        if (\array_key_exists('resolution', $data) && $data['resolution'] !== null) {
            $object->resolution = $data['resolution'];
        }
        elseif (\array_key_exists('resolution', $data) && $data['resolution'] === null) {
            $object->resolution = null;
        }
        if (\array_key_exists('samplingRate', $data) && $data['samplingRate'] !== null) {
            $object->samplingRate = $data['samplingRate'];
        }
        elseif (\array_key_exists('samplingRate', $data) && $data['samplingRate'] === null) {
            $object->samplingRate = null;
        }
        if (\array_key_exists('streamSize', $data) && $data['streamSize'] !== null) {
            $object->streamSize = $data['streamSize'];
        }
        elseif (\array_key_exists('streamSize', $data) && $data['streamSize'] === null) {
            $object->streamSize = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('bitRate', get_object_vars($data)) && null !== ($data->bitRate ?? null)) {
            $dataArray['bitRate'] = $data->bitRate ?? null;
        }
        if (array_key_exists('bitRateMode', get_object_vars($data)) && null !== ($data->bitRateMode ?? null)) {
            $dataArray['bitRateMode'] = $data->bitRateMode ?? null;
        }
        if (array_key_exists('channels', get_object_vars($data)) && null !== ($data->channels ?? null)) {
            $dataArray['channels'] = $data->channels ?? null;
        }
        if (array_key_exists('channelPositions', get_object_vars($data)) && null !== ($data->channelPositions ?? null)) {
            $dataArray['channelPositions'] = $data->channelPositions ?? null;
        }
        if (array_key_exists('codec', get_object_vars($data)) && null !== ($data->codec ?? null)) {
            $dataArray['codec'] = $data->codec ?? null;
        }
        if (array_key_exists('durationInSeconds', get_object_vars($data)) && null !== ($data->durationInSeconds ?? null)) {
            $dataArray['durationInSeconds'] = $data->durationInSeconds ?? null;
        }
        if (array_key_exists('format', get_object_vars($data)) && null !== ($data->format ?? null)) {
            $dataArray['format'] = $data->format ?? null;
        }
        if (array_key_exists('language', get_object_vars($data)) && null !== ($data->language ?? null)) {
            $dataArray['language'] = $data->language ?? null;
        }
        if (array_key_exists('resolution', get_object_vars($data)) && null !== ($data->resolution ?? null)) {
            $dataArray['resolution'] = $data->resolution ?? null;
        }
        if (array_key_exists('samplingRate', get_object_vars($data)) && null !== ($data->samplingRate ?? null)) {
            $dataArray['samplingRate'] = $data->samplingRate ?? null;
        }
        if (array_key_exists('streamSize', get_object_vars($data)) && null !== ($data->streamSize ?? null)) {
            $dataArray['streamSize'] = $data->streamSize ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\AudioStream::class => false];
    }
}