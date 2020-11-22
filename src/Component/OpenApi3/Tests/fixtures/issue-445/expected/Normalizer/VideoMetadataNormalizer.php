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
class VideoMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\VideoMetadata';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\VideoMetadata';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\VideoMetadata();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('names', $data) && $data['names'] !== null) {
            $object->setNames($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->setNames(null);
        }
        if (\array_key_exists('descriptions', $data) && $data['descriptions'] !== null) {
            $object->setDescriptions($data['descriptions']);
        }
        elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
            $object->setDescriptions(null);
        }
        if (\array_key_exists('fileExtension', $data) && $data['fileExtension'] !== null) {
            $object->setFileExtension($data['fileExtension']);
        }
        elseif (\array_key_exists('fileExtension', $data) && $data['fileExtension'] === null) {
            $object->setFileExtension(null);
        }
        if (\array_key_exists('fileName', $data) && $data['fileName'] !== null) {
            $object->setFileName($data['fileName']);
        }
        elseif (\array_key_exists('fileName', $data) && $data['fileName'] === null) {
            $object->setFileName(null);
        }
        if (\array_key_exists('filePath', $data) && $data['filePath'] !== null) {
            $object->setFilePath($data['filePath']);
        }
        elseif (\array_key_exists('filePath', $data) && $data['filePath'] === null) {
            $object->setFilePath(null);
        }
        if (\array_key_exists('fileSizeInBytes', $data) && $data['fileSizeInBytes'] !== null) {
            $object->setFileSizeInBytes($data['fileSizeInBytes']);
        }
        elseif (\array_key_exists('fileSizeInBytes', $data) && $data['fileSizeInBytes'] === null) {
            $object->setFileSizeInBytes(null);
        }
        if (\array_key_exists('sha1Hash', $data) && $data['sha1Hash'] !== null) {
            $object->setSha1Hash($data['sha1Hash']);
        }
        elseif (\array_key_exists('sha1Hash', $data) && $data['sha1Hash'] === null) {
            $object->setSha1Hash(null);
        }
        if (\array_key_exists('xmpMetadata', $data) && $data['xmpMetadata'] !== null) {
            $object->setXmpMetadata($data['xmpMetadata']);
        }
        elseif (\array_key_exists('xmpMetadata', $data) && $data['xmpMetadata'] === null) {
            $object->setXmpMetadata(null);
        }
        if (\array_key_exists('exifMetadata', $data) && $data['exifMetadata'] !== null) {
            $object->setExifMetadata($data['exifMetadata']);
        }
        elseif (\array_key_exists('exifMetadata', $data) && $data['exifMetadata'] === null) {
            $object->setExifMetadata(null);
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->setLanguage($data['language']);
        }
        elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->setLanguage(null);
        }
        if (\array_key_exists('width', $data)) {
            $object->setWidth($data['width']);
        }
        if (\array_key_exists('height', $data)) {
            $object->setHeight($data['height']);
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
        if (\array_key_exists('codec', $data) && $data['codec'] !== null) {
            $object->setCodec($data['codec']);
        }
        elseif (\array_key_exists('codec', $data) && $data['codec'] === null) {
            $object->setCodec(null);
        }
        if (\array_key_exists('overallBitrate', $data) && $data['overallBitrate'] !== null) {
            $object->setOverallBitrate($data['overallBitrate']);
        }
        elseif (\array_key_exists('overallBitrate', $data) && $data['overallBitrate'] === null) {
            $object->setOverallBitrate(null);
        }
        if (\array_key_exists('videoStreams', $data) && $data['videoStreams'] !== null) {
            $values = array();
            foreach ($data['videoStreams'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\VideoStream', 'json', $context);
            }
            $object->setVideoStreams($values);
        }
        elseif (\array_key_exists('videoStreams', $data) && $data['videoStreams'] === null) {
            $object->setVideoStreams(null);
        }
        if (\array_key_exists('audioStreams', $data) && $data['audioStreams'] !== null) {
            $values_1 = array();
            foreach ($data['audioStreams'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\AudioStream', 'json', $context);
            }
            $object->setAudioStreams($values_1);
        }
        elseif (\array_key_exists('audioStreams', $data) && $data['audioStreams'] === null) {
            $object->setAudioStreams(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getNames()) {
            $data['names'] = $object->getNames();
        }
        if (null !== $object->getDescriptions()) {
            $data['descriptions'] = $object->getDescriptions();
        }
        if (null !== $object->getFileExtension()) {
            $data['fileExtension'] = $object->getFileExtension();
        }
        if (null !== $object->getFileName()) {
            $data['fileName'] = $object->getFileName();
        }
        if (null !== $object->getFilePath()) {
            $data['filePath'] = $object->getFilePath();
        }
        if (null !== $object->getFileSizeInBytes()) {
            $data['fileSizeInBytes'] = $object->getFileSizeInBytes();
        }
        if (null !== $object->getSha1Hash()) {
            $data['sha1Hash'] = $object->getSha1Hash();
        }
        if (null !== $object->getXmpMetadata()) {
            $data['xmpMetadata'] = $object->getXmpMetadata();
        }
        if (null !== $object->getExifMetadata()) {
            $data['exifMetadata'] = $object->getExifMetadata();
        }
        if (null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }
        if (null !== $object->getWidth()) {
            $data['width'] = $object->getWidth();
        }
        if (null !== $object->getHeight()) {
            $data['height'] = $object->getHeight();
        }
        if (null !== $object->getDurationInSeconds()) {
            $data['durationInSeconds'] = $object->getDurationInSeconds();
        }
        if (null !== $object->getFormat()) {
            $data['format'] = $object->getFormat();
        }
        if (null !== $object->getCodec()) {
            $data['codec'] = $object->getCodec();
        }
        if (null !== $object->getOverallBitrate()) {
            $data['overallBitrate'] = $object->getOverallBitrate();
        }
        if (null !== $object->getVideoStreams()) {
            $values = array();
            foreach ($object->getVideoStreams() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['videoStreams'] = $values;
        }
        if (null !== $object->getAudioStreams()) {
            $values_1 = array();
            foreach ($object->getAudioStreams() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['audioStreams'] = $values_1;
        }
        return $data;
    }
}