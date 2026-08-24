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
            $object->setBitRate($data['bitRate']);
        }
        elseif (\array_key_exists('bitRate', $data) && $data['bitRate'] === null) {
            $object->setBitRate(null);
        }
        if (\array_key_exists('bitRateMode', $data) && $data['bitRateMode'] !== null) {
            $object->setBitRateMode($data['bitRateMode']);
        }
        elseif (\array_key_exists('bitRateMode', $data) && $data['bitRateMode'] === null) {
            $object->setBitRateMode(null);
        }
        if (\array_key_exists('channels', $data) && $data['channels'] !== null) {
            $object->setChannels($data['channels']);
        }
        elseif (\array_key_exists('channels', $data) && $data['channels'] === null) {
            $object->setChannels(null);
        }
        if (\array_key_exists('channelPositions', $data) && $data['channelPositions'] !== null) {
            $object->setChannelPositions($data['channelPositions']);
        }
        elseif (\array_key_exists('channelPositions', $data) && $data['channelPositions'] === null) {
            $object->setChannelPositions(null);
        }
        if (\array_key_exists('codec', $data) && $data['codec'] !== null) {
            $object->setCodec($data['codec']);
        }
        elseif (\array_key_exists('codec', $data) && $data['codec'] === null) {
            $object->setCodec(null);
        }
        if (\array_key_exists('durationInSeconds', $data) && $data['durationInSeconds'] !== null) {
            $object->setDurationInSeconds($data['durationInSeconds']);
        }
        elseif (\array_key_exists('durationInSeconds', $data) && $data['durationInSeconds'] === null) {
            $object->setDurationInSeconds(null);
        }
        if (\array_key_exists('format', $data) && $data['format'] !== null) {
            $object->setFormat($data['format']);
        }
        elseif (\array_key_exists('format', $data) && $data['format'] === null) {
            $object->setFormat(null);
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->setLanguage($data['language']);
        }
        elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->setLanguage(null);
        }
        if (\array_key_exists('resolution', $data) && $data['resolution'] !== null) {
            $object->setResolution($data['resolution']);
        }
        elseif (\array_key_exists('resolution', $data) && $data['resolution'] === null) {
            $object->setResolution(null);
        }
        if (\array_key_exists('samplingRate', $data) && $data['samplingRate'] !== null) {
            $object->setSamplingRate($data['samplingRate']);
        }
        elseif (\array_key_exists('samplingRate', $data) && $data['samplingRate'] === null) {
            $object->setSamplingRate(null);
        }
        if (\array_key_exists('streamSize', $data) && $data['streamSize'] !== null) {
            $object->setStreamSize($data['streamSize']);
        }
        elseif (\array_key_exists('streamSize', $data) && $data['streamSize'] === null) {
            $object->setStreamSize(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('bitRate') && null !== $data->getBitRate()) {
            $dataArray['bitRate'] = $data->getBitRate();
        }
        if ($data->isInitialized('bitRateMode') && null !== $data->getBitRateMode()) {
            $dataArray['bitRateMode'] = $data->getBitRateMode();
        }
        if ($data->isInitialized('channels') && null !== $data->getChannels()) {
            $dataArray['channels'] = $data->getChannels();
        }
        if ($data->isInitialized('channelPositions') && null !== $data->getChannelPositions()) {
            $dataArray['channelPositions'] = $data->getChannelPositions();
        }
        if ($data->isInitialized('codec') && null !== $data->getCodec()) {
            $dataArray['codec'] = $data->getCodec();
        }
        if ($data->isInitialized('durationInSeconds') && null !== $data->getDurationInSeconds()) {
            $dataArray['durationInSeconds'] = $data->getDurationInSeconds();
        }
        if ($data->isInitialized('format') && null !== $data->getFormat()) {
            $dataArray['format'] = $data->getFormat();
        }
        if ($data->isInitialized('language') && null !== $data->getLanguage()) {
            $dataArray['language'] = $data->getLanguage();
        }
        if ($data->isInitialized('resolution') && null !== $data->getResolution()) {
            $dataArray['resolution'] = $data->getResolution();
        }
        if ($data->isInitialized('samplingRate') && null !== $data->getSamplingRate()) {
            $dataArray['samplingRate'] = $data->getSamplingRate();
        }
        if ($data->isInitialized('streamSize') && null !== $data->getStreamSize()) {
            $dataArray['streamSize'] = $data->getStreamSize();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\AudioStream::class => false];
    }
}