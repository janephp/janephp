<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\AudioStream';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\AudioStream';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\AudioStream();
        if (\array_key_exists('durationInSeconds', $data) && \is_int($data['durationInSeconds'])) {
            $data['durationInSeconds'] = (double) $data['durationInSeconds'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBitRate()) {
            $data['bitRate'] = $object->getBitRate();
        }
        if (null !== $object->getBitRateMode()) {
            $data['bitRateMode'] = $object->getBitRateMode();
        }
        if (null !== $object->getChannels()) {
            $data['channels'] = $object->getChannels();
        }
        if (null !== $object->getChannelPositions()) {
            $data['channelPositions'] = $object->getChannelPositions();
        }
        if (null !== $object->getCodec()) {
            $data['codec'] = $object->getCodec();
        }
        if (null !== $object->getDurationInSeconds()) {
            $data['durationInSeconds'] = $object->getDurationInSeconds();
        }
        if (null !== $object->getFormat()) {
            $data['format'] = $object->getFormat();
        }
        if (null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }
        if (null !== $object->getResolution()) {
            $data['resolution'] = $object->getResolution();
        }
        if (null !== $object->getSamplingRate()) {
            $data['samplingRate'] = $object->getSamplingRate();
        }
        if (null !== $object->getStreamSize()) {
            $data['streamSize'] = $object->getStreamSize();
        }
        return $data;
    }
}