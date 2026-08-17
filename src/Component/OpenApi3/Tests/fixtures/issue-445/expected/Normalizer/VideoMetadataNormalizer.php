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
class VideoMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\VideoMetadata::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\VideoMetadata::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\VideoMetadata();
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
            $values = [];
            foreach ($data['videoStreams'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\VideoStream::class, 'json', $context);
            }
            $object->setVideoStreams($values);
            unset($data['videoStreams']);
        }
        elseif (\array_key_exists('videoStreams', $data) && $data['videoStreams'] === null) {
            $object->setVideoStreams(null);
        }
        if (\array_key_exists('audioStreams', $data) && $data['audioStreams'] !== null) {
            $values_1 = [];
            foreach ($data['audioStreams'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\AudioStream::class, 'json', $context);
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
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('names')) {
            $dataArray['names'] = $data->getNames();
        }
        if ($data->isInitialized('descriptions')) {
            $dataArray['descriptions'] = $data->getDescriptions();
        }
        if ($data->isInitialized('fileExtension')) {
            $dataArray['fileExtension'] = $data->getFileExtension();
        }
        if ($data->isInitialized('fileName')) {
            $dataArray['fileName'] = $data->getFileName();
        }
        if ($data->isInitialized('filePath')) {
            $dataArray['filePath'] = $data->getFilePath();
        }
        if ($data->isInitialized('fileSizeInBytes')) {
            $dataArray['fileSizeInBytes'] = $data->getFileSizeInBytes();
        }
        if ($data->isInitialized('sha1Hash')) {
            $dataArray['sha1Hash'] = $data->getSha1Hash();
        }
        if ($data->isInitialized('xmpMetadata')) {
            $dataArray['xmpMetadata'] = $data->getXmpMetadata();
        }
        if ($data->isInitialized('exifMetadata')) {
            $dataArray['exifMetadata'] = $data->getExifMetadata();
        }
        if ($data->isInitialized('language')) {
            $dataArray['language'] = $data->getLanguage();
        }
        if ($data->isInitialized('width') && null !== $data->getWidth()) {
            $dataArray['width'] = $data->getWidth();
        }
        if ($data->isInitialized('height') && null !== $data->getHeight()) {
            $dataArray['height'] = $data->getHeight();
        }
        if ($data->isInitialized('durationInSeconds') && null !== $data->getDurationInSeconds()) {
            $dataArray['durationInSeconds'] = $data->getDurationInSeconds();
        }
        if ($data->isInitialized('format')) {
            $dataArray['format'] = $data->getFormat();
        }
        if ($data->isInitialized('codec')) {
            $dataArray['codec'] = $data->getCodec();
        }
        if ($data->isInitialized('overallBitrate')) {
            $dataArray['overallBitrate'] = $data->getOverallBitrate();
        }
        if ($data->isInitialized('videoStreams')) {
            $values = [];
            foreach ($data->getVideoStreams() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['videoStreams'] = $values;
        }
        if ($data->isInitialized('audioStreams')) {
            $values_1 = [];
            foreach ($data->getAudioStreams() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['audioStreams'] = $values_1;
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\VideoMetadata::class => false];
    }
}