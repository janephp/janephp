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
            $value = $data['names'];
            if (is_array($data['names']) && $this->isOnlyNumericKeys($data['names'])) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['names'] as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            }
            $object->setNames($value);
            unset($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->setNames(null);
            unset($data['names']);
        }
        if (\array_key_exists('descriptions', $data) && $data['descriptions'] !== null) {
            $value_2 = $data['descriptions'];
            if (is_array($data['descriptions']) && $this->isOnlyNumericKeys($data['descriptions'])) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['descriptions'] as $key_1 => $value_3) {
                    $values_1[$key_1] = $value_3;
                }
                $value_2 = $values_1;
            }
            $object->setDescriptions($value_2);
            unset($data['descriptions']);
        }
        elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
            $object->setDescriptions(null);
            unset($data['descriptions']);
        }
        if (\array_key_exists('fileExtension', $data) && $data['fileExtension'] !== null) {
            $object->setFileExtension($data['fileExtension']);
            unset($data['fileExtension']);
        }
        elseif (\array_key_exists('fileExtension', $data) && $data['fileExtension'] === null) {
            $object->setFileExtension(null);
            unset($data['fileExtension']);
        }
        if (\array_key_exists('fileName', $data) && $data['fileName'] !== null) {
            $object->setFileName($data['fileName']);
            unset($data['fileName']);
        }
        elseif (\array_key_exists('fileName', $data) && $data['fileName'] === null) {
            $object->setFileName(null);
            unset($data['fileName']);
        }
        if (\array_key_exists('filePath', $data) && $data['filePath'] !== null) {
            $object->setFilePath($data['filePath']);
            unset($data['filePath']);
        }
        elseif (\array_key_exists('filePath', $data) && $data['filePath'] === null) {
            $object->setFilePath(null);
            unset($data['filePath']);
        }
        if (\array_key_exists('fileSizeInBytes', $data) && $data['fileSizeInBytes'] !== null) {
            $object->setFileSizeInBytes($data['fileSizeInBytes']);
            unset($data['fileSizeInBytes']);
        }
        elseif (\array_key_exists('fileSizeInBytes', $data) && $data['fileSizeInBytes'] === null) {
            $object->setFileSizeInBytes(null);
            unset($data['fileSizeInBytes']);
        }
        if (\array_key_exists('sha1Hash', $data) && $data['sha1Hash'] !== null) {
            $object->setSha1Hash($data['sha1Hash']);
            unset($data['sha1Hash']);
        }
        elseif (\array_key_exists('sha1Hash', $data) && $data['sha1Hash'] === null) {
            $object->setSha1Hash(null);
            unset($data['sha1Hash']);
        }
        if (\array_key_exists('xmpMetadata', $data) && $data['xmpMetadata'] !== null) {
            $object->setXmpMetadata($data['xmpMetadata']);
            unset($data['xmpMetadata']);
        }
        elseif (\array_key_exists('xmpMetadata', $data) && $data['xmpMetadata'] === null) {
            $object->setXmpMetadata(null);
            unset($data['xmpMetadata']);
        }
        if (\array_key_exists('exifMetadata', $data) && $data['exifMetadata'] !== null) {
            $object->setExifMetadata($data['exifMetadata']);
            unset($data['exifMetadata']);
        }
        elseif (\array_key_exists('exifMetadata', $data) && $data['exifMetadata'] === null) {
            $object->setExifMetadata(null);
            unset($data['exifMetadata']);
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->setLanguage($data['language']);
            unset($data['language']);
        }
        elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->setLanguage(null);
            unset($data['language']);
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
            unset($data['format']);
        }
        if (\array_key_exists('codec', $data) && $data['codec'] !== null) {
            $object->setCodec($data['codec']);
            unset($data['codec']);
        }
        elseif (\array_key_exists('codec', $data) && $data['codec'] === null) {
            $object->setCodec(null);
            unset($data['codec']);
        }
        if (\array_key_exists('overallBitrate', $data) && $data['overallBitrate'] !== null) {
            $object->setOverallBitrate($data['overallBitrate']);
            unset($data['overallBitrate']);
        }
        elseif (\array_key_exists('overallBitrate', $data) && $data['overallBitrate'] === null) {
            $object->setOverallBitrate(null);
            unset($data['overallBitrate']);
        }
        if (\array_key_exists('videoStreams', $data) && $data['videoStreams'] !== null) {
            $values_2 = [];
            foreach ($data['videoStreams'] as $value_4) {
                $values_2[] = $this->denormalizer->denormalize($value_4, \PicturePark\API\Model\VideoStream::class, 'json', $context);
            }
            $object->setVideoStreams($values_2);
            unset($data['videoStreams']);
        }
        elseif (\array_key_exists('videoStreams', $data) && $data['videoStreams'] === null) {
            $object->setVideoStreams(null);
            unset($data['videoStreams']);
        }
        if (\array_key_exists('audioStreams', $data) && $data['audioStreams'] !== null) {
            $values_3 = [];
            foreach ($data['audioStreams'] as $value_5) {
                $values_3[] = $this->denormalizer->denormalize($value_5, \PicturePark\API\Model\AudioStream::class, 'json', $context);
            }
            $object->setAudioStreams($values_3);
            unset($data['audioStreams']);
        }
        elseif (\array_key_exists('audioStreams', $data) && $data['audioStreams'] === null) {
            $object->setAudioStreams(null);
            unset($data['audioStreams']);
        }
        foreach ($data as $key_2 => $value_6) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_6;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('names') && null !== $data->getNames()) {
            $value = $data->getNames();
            if (is_object($data->getNames())) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->getNames() as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            }
            $dataArray['names'] = $value;
        }
        if ($data->isInitialized('descriptions') && null !== $data->getDescriptions()) {
            $value_2 = $data->getDescriptions();
            if (is_object($data->getDescriptions())) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->getDescriptions() as $key_1 => $value_3) {
                    $values_1[$key_1] = $value_3;
                }
                $value_2 = $values_1;
            }
            $dataArray['descriptions'] = $value_2;
        }
        if ($data->isInitialized('fileExtension') && null !== $data->getFileExtension()) {
            $dataArray['fileExtension'] = $data->getFileExtension();
        }
        if ($data->isInitialized('fileName') && null !== $data->getFileName()) {
            $dataArray['fileName'] = $data->getFileName();
        }
        if ($data->isInitialized('filePath') && null !== $data->getFilePath()) {
            $dataArray['filePath'] = $data->getFilePath();
        }
        if ($data->isInitialized('fileSizeInBytes') && null !== $data->getFileSizeInBytes()) {
            $dataArray['fileSizeInBytes'] = $data->getFileSizeInBytes();
        }
        if ($data->isInitialized('sha1Hash') && null !== $data->getSha1Hash()) {
            $dataArray['sha1Hash'] = $data->getSha1Hash();
        }
        if ($data->isInitialized('xmpMetadata') && null !== $data->getXmpMetadata()) {
            $dataArray['xmpMetadata'] = $data->getXmpMetadata();
        }
        if ($data->isInitialized('exifMetadata') && null !== $data->getExifMetadata()) {
            $dataArray['exifMetadata'] = $data->getExifMetadata();
        }
        if ($data->isInitialized('language') && null !== $data->getLanguage()) {
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
        if ($data->isInitialized('format') && null !== $data->getFormat()) {
            $dataArray['format'] = $data->getFormat();
        }
        if ($data->isInitialized('codec') && null !== $data->getCodec()) {
            $dataArray['codec'] = $data->getCodec();
        }
        if ($data->isInitialized('overallBitrate') && null !== $data->getOverallBitrate()) {
            $dataArray['overallBitrate'] = $data->getOverallBitrate();
        }
        if ($data->isInitialized('videoStreams') && null !== $data->getVideoStreams()) {
            $values_2 = [];
            foreach ($data->getVideoStreams() as $value_4) {
                $values_2[] = $value_4 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['videoStreams'] = $values_2;
        }
        if ($data->isInitialized('audioStreams') && null !== $data->getAudioStreams()) {
            $values_3 = [];
            foreach ($data->getAudioStreams() as $value_5) {
                $values_3[] = $value_5 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['audioStreams'] = $values_3;
        }
        foreach ($data->additionalPropertyEntries() as $key_2 => $value_6) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_6;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\VideoMetadata::class => false];
    }
}