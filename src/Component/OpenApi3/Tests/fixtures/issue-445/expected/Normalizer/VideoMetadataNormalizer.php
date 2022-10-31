<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
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
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\VideoMetadata';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\VideoMetadata';
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
        $object = new \PicturePark\API\Model\VideoMetadata();
        if (\array_key_exists('durationInSeconds', $data) && \is_int($data['durationInSeconds'])) {
            $data['durationInSeconds'] = (double) $data['durationInSeconds'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('names', $data) && $data['names'] !== null) {
            $object->setNames($data['names']);
            unset($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->setNames(null);
        }
        if (\array_key_exists('descriptions', $data) && $data['descriptions'] !== null) {
            $object->setDescriptions($data['descriptions']);
            unset($data['descriptions']);
        }
        elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
            $object->setDescriptions(null);
        }
        if (\array_key_exists('fileExtension', $data) && $data['fileExtension'] !== null) {
            $object->setFileExtension($data['fileExtension']);
            unset($data['fileExtension']);
        }
        elseif (\array_key_exists('fileExtension', $data) && $data['fileExtension'] === null) {
            $object->setFileExtension(null);
        }
        if (\array_key_exists('fileName', $data) && $data['fileName'] !== null) {
            $object->setFileName($data['fileName']);
            unset($data['fileName']);
        }
        elseif (\array_key_exists('fileName', $data) && $data['fileName'] === null) {
            $object->setFileName(null);
        }
        if (\array_key_exists('filePath', $data) && $data['filePath'] !== null) {
            $object->setFilePath($data['filePath']);
            unset($data['filePath']);
        }
        elseif (\array_key_exists('filePath', $data) && $data['filePath'] === null) {
            $object->setFilePath(null);
        }
        if (\array_key_exists('fileSizeInBytes', $data) && $data['fileSizeInBytes'] !== null) {
            $object->setFileSizeInBytes($data['fileSizeInBytes']);
            unset($data['fileSizeInBytes']);
        }
        elseif (\array_key_exists('fileSizeInBytes', $data) && $data['fileSizeInBytes'] === null) {
            $object->setFileSizeInBytes(null);
        }
        if (\array_key_exists('sha1Hash', $data) && $data['sha1Hash'] !== null) {
            $object->setSha1Hash($data['sha1Hash']);
            unset($data['sha1Hash']);
        }
        elseif (\array_key_exists('sha1Hash', $data) && $data['sha1Hash'] === null) {
            $object->setSha1Hash(null);
        }
        if (\array_key_exists('xmpMetadata', $data) && $data['xmpMetadata'] !== null) {
            $object->setXmpMetadata($data['xmpMetadata']);
            unset($data['xmpMetadata']);
        }
        elseif (\array_key_exists('xmpMetadata', $data) && $data['xmpMetadata'] === null) {
            $object->setXmpMetadata(null);
        }
        if (\array_key_exists('exifMetadata', $data) && $data['exifMetadata'] !== null) {
            $object->setExifMetadata($data['exifMetadata']);
            unset($data['exifMetadata']);
        }
        elseif (\array_key_exists('exifMetadata', $data) && $data['exifMetadata'] === null) {
            $object->setExifMetadata(null);
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->setLanguage($data['language']);
            unset($data['language']);
        }
        elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->setLanguage(null);
        }
        if (\array_key_exists('width', $data)) {
            $object->setWidth($data['width']);
            unset($data['width']);
        }
        if (\array_key_exists('height', $data)) {
            $object->setHeight($data['height']);
            unset($data['height']);
        }
        if (\array_key_exists('durationInSeconds', $data)) {
            $object->setDurationInSeconds($data['durationInSeconds']);
            unset($data['durationInSeconds']);
        }
        if (\array_key_exists('format', $data) && $data['format'] !== null) {
            $object->setFormat($data['format']);
            unset($data['format']);
        }
        elseif (\array_key_exists('format', $data) && $data['format'] === null) {
            $object->setFormat(null);
        }
        if (\array_key_exists('codec', $data) && $data['codec'] !== null) {
            $object->setCodec($data['codec']);
            unset($data['codec']);
        }
        elseif (\array_key_exists('codec', $data) && $data['codec'] === null) {
            $object->setCodec(null);
        }
        if (\array_key_exists('overallBitrate', $data) && $data['overallBitrate'] !== null) {
            $object->setOverallBitrate($data['overallBitrate']);
            unset($data['overallBitrate']);
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
            unset($data['videoStreams']);
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
            unset($data['audioStreams']);
        }
        elseif (\array_key_exists('audioStreams', $data) && $data['audioStreams'] === null) {
            $object->setAudioStreams(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('names') && null !== $object->getNames()) {
            $data['names'] = $object->getNames();
        }
        if ($object->isInitialized('descriptions') && null !== $object->getDescriptions()) {
            $data['descriptions'] = $object->getDescriptions();
        }
        if ($object->isInitialized('fileExtension') && null !== $object->getFileExtension()) {
            $data['fileExtension'] = $object->getFileExtension();
        }
        if ($object->isInitialized('fileName') && null !== $object->getFileName()) {
            $data['fileName'] = $object->getFileName();
        }
        if ($object->isInitialized('filePath') && null !== $object->getFilePath()) {
            $data['filePath'] = $object->getFilePath();
        }
        if ($object->isInitialized('fileSizeInBytes') && null !== $object->getFileSizeInBytes()) {
            $data['fileSizeInBytes'] = $object->getFileSizeInBytes();
        }
        if ($object->isInitialized('sha1Hash') && null !== $object->getSha1Hash()) {
            $data['sha1Hash'] = $object->getSha1Hash();
        }
        if ($object->isInitialized('xmpMetadata') && null !== $object->getXmpMetadata()) {
            $data['xmpMetadata'] = $object->getXmpMetadata();
        }
        if ($object->isInitialized('exifMetadata') && null !== $object->getExifMetadata()) {
            $data['exifMetadata'] = $object->getExifMetadata();
        }
        if ($object->isInitialized('language') && null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }
        if ($object->isInitialized('width') && null !== $object->getWidth()) {
            $data['width'] = $object->getWidth();
        }
        if ($object->isInitialized('height') && null !== $object->getHeight()) {
            $data['height'] = $object->getHeight();
        }
        if ($object->isInitialized('durationInSeconds') && null !== $object->getDurationInSeconds()) {
            $data['durationInSeconds'] = $object->getDurationInSeconds();
        }
        if ($object->isInitialized('format') && null !== $object->getFormat()) {
            $data['format'] = $object->getFormat();
        }
        if ($object->isInitialized('codec') && null !== $object->getCodec()) {
            $data['codec'] = $object->getCodec();
        }
        if ($object->isInitialized('overallBitrate') && null !== $object->getOverallBitrate()) {
            $data['overallBitrate'] = $object->getOverallBitrate();
        }
        if ($object->isInitialized('videoStreams') && null !== $object->getVideoStreams()) {
            $values = array();
            foreach ($object->getVideoStreams() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['videoStreams'] = $values;
        }
        if ($object->isInitialized('audioStreams') && null !== $object->getAudioStreams()) {
            $values_1 = array();
            foreach ($object->getAudioStreams() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['audioStreams'] = $values_1;
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }
        return $data;
    }
}