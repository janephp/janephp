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
class ImageMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ImageMetadata::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ImageMetadata::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ImageMetadata();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('widthInInch', $data) && \is_int($data['widthInInch'])) {
            $data['widthInInch'] = (float) $data['widthInInch'];
        }
        if (\array_key_exists('heightInInch', $data) && \is_int($data['heightInInch'])) {
            $data['heightInInch'] = (float) $data['heightInInch'];
        }
        if (\array_key_exists('widthInCm', $data) && \is_int($data['widthInCm'])) {
            $data['widthInCm'] = (float) $data['widthInCm'];
        }
        if (\array_key_exists('heightInCm', $data) && \is_int($data['heightInCm'])) {
            $data['heightInCm'] = (float) $data['heightInCm'];
        }
        if (\array_key_exists('horizontalResolution', $data) && \is_int($data['horizontalResolution'])) {
            $data['horizontalResolution'] = (float) $data['horizontalResolution'];
        }
        if (\array_key_exists('verticalResolution', $data) && \is_int($data['verticalResolution'])) {
            $data['verticalResolution'] = (float) $data['verticalResolution'];
        }
        if (\array_key_exists('hasAlpha', $data) && \is_int($data['hasAlpha'])) {
            $data['hasAlpha'] = (bool) $data['hasAlpha'];
        }
        if (\array_key_exists('isIndexed', $data) && \is_int($data['isIndexed'])) {
            $data['isIndexed'] = (bool) $data['isIndexed'];
        }
        if (\array_key_exists('isExtended', $data) && \is_int($data['isExtended'])) {
            $data['isExtended'] = (bool) $data['isExtended'];
        }
        if (\array_key_exists('hasExifData', $data) && \is_int($data['hasExifData'])) {
            $data['hasExifData'] = (bool) $data['hasExifData'];
        }
        if (\array_key_exists('hasIptcData', $data) && \is_int($data['hasIptcData'])) {
            $data['hasIptcData'] = (bool) $data['hasIptcData'];
        }
        if (\array_key_exists('hasAdobeResourceData', $data) && \is_int($data['hasAdobeResourceData'])) {
            $data['hasAdobeResourceData'] = (bool) $data['hasAdobeResourceData'];
        }
        if (\array_key_exists('hasXmpData', $data) && \is_int($data['hasXmpData'])) {
            $data['hasXmpData'] = (bool) $data['hasXmpData'];
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
            $object->names = $value;
            unset($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->names = null;
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
            $object->descriptions = $value_2;
            unset($data['descriptions']);
        }
        elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
            $object->descriptions = null;
            unset($data['descriptions']);
        }
        if (\array_key_exists('fileExtension', $data) && $data['fileExtension'] !== null) {
            $object->fileExtension = $data['fileExtension'];
            unset($data['fileExtension']);
        }
        elseif (\array_key_exists('fileExtension', $data) && $data['fileExtension'] === null) {
            $object->fileExtension = null;
            unset($data['fileExtension']);
        }
        if (\array_key_exists('fileName', $data) && $data['fileName'] !== null) {
            $object->fileName = $data['fileName'];
            unset($data['fileName']);
        }
        elseif (\array_key_exists('fileName', $data) && $data['fileName'] === null) {
            $object->fileName = null;
            unset($data['fileName']);
        }
        if (\array_key_exists('filePath', $data) && $data['filePath'] !== null) {
            $object->filePath = $data['filePath'];
            unset($data['filePath']);
        }
        elseif (\array_key_exists('filePath', $data) && $data['filePath'] === null) {
            $object->filePath = null;
            unset($data['filePath']);
        }
        if (\array_key_exists('fileSizeInBytes', $data) && $data['fileSizeInBytes'] !== null) {
            $object->fileSizeInBytes = $data['fileSizeInBytes'];
            unset($data['fileSizeInBytes']);
        }
        elseif (\array_key_exists('fileSizeInBytes', $data) && $data['fileSizeInBytes'] === null) {
            $object->fileSizeInBytes = null;
            unset($data['fileSizeInBytes']);
        }
        if (\array_key_exists('sha1Hash', $data) && $data['sha1Hash'] !== null) {
            $object->sha1Hash = $data['sha1Hash'];
            unset($data['sha1Hash']);
        }
        elseif (\array_key_exists('sha1Hash', $data) && $data['sha1Hash'] === null) {
            $object->sha1Hash = null;
            unset($data['sha1Hash']);
        }
        if (\array_key_exists('xmpMetadata', $data) && $data['xmpMetadata'] !== null) {
            $object->xmpMetadata = $data['xmpMetadata'];
            unset($data['xmpMetadata']);
        }
        elseif (\array_key_exists('xmpMetadata', $data) && $data['xmpMetadata'] === null) {
            $object->xmpMetadata = null;
            unset($data['xmpMetadata']);
        }
        if (\array_key_exists('exifMetadata', $data) && $data['exifMetadata'] !== null) {
            $object->exifMetadata = $data['exifMetadata'];
            unset($data['exifMetadata']);
        }
        elseif (\array_key_exists('exifMetadata', $data) && $data['exifMetadata'] === null) {
            $object->exifMetadata = null;
            unset($data['exifMetadata']);
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->language = $data['language'];
            unset($data['language']);
        }
        elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->language = null;
            unset($data['language']);
        }
        if (\array_key_exists('width', $data)) {
            $object->width = $data['width'];
            unset($data['width']);
        }
        if (\array_key_exists('height', $data)) {
            $object->height = $data['height'];
            unset($data['height']);
        }
        if (\array_key_exists('widthInInch', $data)) {
            $object->widthInInch = $data['widthInInch'];
            unset($data['widthInInch']);
        }
        if (\array_key_exists('heightInInch', $data)) {
            $object->heightInInch = $data['heightInInch'];
            unset($data['heightInInch']);
        }
        if (\array_key_exists('widthInCm', $data)) {
            $object->widthInCm = $data['widthInCm'];
            unset($data['widthInCm']);
        }
        if (\array_key_exists('heightInCm', $data)) {
            $object->heightInCm = $data['heightInCm'];
            unset($data['heightInCm']);
        }
        if (\array_key_exists('colorSpace', $data) && $data['colorSpace'] !== null) {
            $object->colorSpace = $data['colorSpace'];
            unset($data['colorSpace']);
        }
        elseif (\array_key_exists('colorSpace', $data) && $data['colorSpace'] === null) {
            $object->colorSpace = null;
            unset($data['colorSpace']);
        }
        if (\array_key_exists('colorProfile', $data) && $data['colorProfile'] !== null) {
            $object->colorProfile = $data['colorProfile'];
            unset($data['colorProfile']);
        }
        elseif (\array_key_exists('colorProfile', $data) && $data['colorProfile'] === null) {
            $object->colorProfile = null;
            unset($data['colorProfile']);
        }
        if (\array_key_exists('bitsPerPixel', $data)) {
            $object->bitsPerPixel = $data['bitsPerPixel'];
            unset($data['bitsPerPixel']);
        }
        if (\array_key_exists('bitsPerChannel', $data)) {
            $object->bitsPerChannel = $data['bitsPerChannel'];
            unset($data['bitsPerChannel']);
        }
        if (\array_key_exists('channels', $data) && $data['channels'] !== null) {
            $object->channels = $data['channels'];
            unset($data['channels']);
        }
        elseif (\array_key_exists('channels', $data) && $data['channels'] === null) {
            $object->channels = null;
            unset($data['channels']);
        }
        if (\array_key_exists('pixelFormat', $data) && $data['pixelFormat'] !== null) {
            $object->pixelFormat = $data['pixelFormat'];
            unset($data['pixelFormat']);
        }
        elseif (\array_key_exists('pixelFormat', $data) && $data['pixelFormat'] === null) {
            $object->pixelFormat = null;
            unset($data['pixelFormat']);
        }
        if (\array_key_exists('hasAlpha', $data)) {
            $object->hasAlpha = $data['hasAlpha'];
            unset($data['hasAlpha']);
        }
        if (\array_key_exists('isIndexed', $data)) {
            $object->isIndexed = $data['isIndexed'];
            unset($data['isIndexed']);
        }
        if (\array_key_exists('isExtended', $data)) {
            $object->isExtended = $data['isExtended'];
            unset($data['isExtended']);
        }
        if (\array_key_exists('horizontalResolution', $data)) {
            $object->horizontalResolution = $data['horizontalResolution'];
            unset($data['horizontalResolution']);
        }
        if (\array_key_exists('verticalResolution', $data)) {
            $object->verticalResolution = $data['verticalResolution'];
            unset($data['verticalResolution']);
        }
        if (\array_key_exists('totalFrames', $data)) {
            $object->totalFrames = $data['totalFrames'];
            unset($data['totalFrames']);
        }
        if (\array_key_exists('totalUnspecifiedTiffExtraChannels', $data)) {
            $object->totalUnspecifiedTiffExtraChannels = $data['totalUnspecifiedTiffExtraChannels'];
            unset($data['totalUnspecifiedTiffExtraChannels']);
        }
        if (\array_key_exists('hasExifData', $data)) {
            $object->hasExifData = $data['hasExifData'];
            unset($data['hasExifData']);
        }
        if (\array_key_exists('hasIptcData', $data)) {
            $object->hasIptcData = $data['hasIptcData'];
            unset($data['hasIptcData']);
        }
        if (\array_key_exists('hasAdobeResourceData', $data)) {
            $object->hasAdobeResourceData = $data['hasAdobeResourceData'];
            unset($data['hasAdobeResourceData']);
        }
        if (\array_key_exists('hasXmpData', $data)) {
            $object->hasXmpData = $data['hasXmpData'];
            unset($data['hasXmpData']);
        }
        if (\array_key_exists('uncompressedSizeInBytes', $data)) {
            $object->uncompressedSizeInBytes = $data['uncompressedSizeInBytes'];
            unset($data['uncompressedSizeInBytes']);
        }
        foreach ($data as $key_2 => $value_4) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('names', get_object_vars($data)) && null !== ($data->names ?? null)) {
            $value = $data->names ?? null;
            if (is_object($data->names ?? null)) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->names ?? null as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            }
            $dataArray['names'] = $value;
        }
        if (array_key_exists('descriptions', get_object_vars($data)) && null !== ($data->descriptions ?? null)) {
            $value_2 = $data->descriptions ?? null;
            if (is_object($data->descriptions ?? null)) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->descriptions ?? null as $key_1 => $value_3) {
                    $values_1[$key_1] = $value_3;
                }
                $value_2 = $values_1;
            }
            $dataArray['descriptions'] = $value_2;
        }
        if (array_key_exists('fileExtension', get_object_vars($data)) && null !== ($data->fileExtension ?? null)) {
            $dataArray['fileExtension'] = $data->fileExtension ?? null;
        }
        if (array_key_exists('fileName', get_object_vars($data)) && null !== ($data->fileName ?? null)) {
            $dataArray['fileName'] = $data->fileName ?? null;
        }
        if (array_key_exists('filePath', get_object_vars($data)) && null !== ($data->filePath ?? null)) {
            $dataArray['filePath'] = $data->filePath ?? null;
        }
        if (array_key_exists('fileSizeInBytes', get_object_vars($data)) && null !== ($data->fileSizeInBytes ?? null)) {
            $dataArray['fileSizeInBytes'] = $data->fileSizeInBytes ?? null;
        }
        if (array_key_exists('sha1Hash', get_object_vars($data)) && null !== ($data->sha1Hash ?? null)) {
            $dataArray['sha1Hash'] = $data->sha1Hash ?? null;
        }
        if (array_key_exists('xmpMetadata', get_object_vars($data)) && null !== ($data->xmpMetadata ?? null)) {
            $dataArray['xmpMetadata'] = $data->xmpMetadata ?? null;
        }
        if (array_key_exists('exifMetadata', get_object_vars($data)) && null !== ($data->exifMetadata ?? null)) {
            $dataArray['exifMetadata'] = $data->exifMetadata ?? null;
        }
        if (array_key_exists('language', get_object_vars($data)) && null !== ($data->language ?? null)) {
            $dataArray['language'] = $data->language ?? null;
        }
        if (array_key_exists('width', get_object_vars($data)) && null !== ($data->width ?? null)) {
            $dataArray['width'] = $data->width ?? null;
        }
        if (array_key_exists('height', get_object_vars($data)) && null !== ($data->height ?? null)) {
            $dataArray['height'] = $data->height ?? null;
        }
        if (array_key_exists('widthInInch', get_object_vars($data)) && null !== ($data->widthInInch ?? null)) {
            $dataArray['widthInInch'] = $data->widthInInch ?? null;
        }
        if (array_key_exists('heightInInch', get_object_vars($data)) && null !== ($data->heightInInch ?? null)) {
            $dataArray['heightInInch'] = $data->heightInInch ?? null;
        }
        if (array_key_exists('widthInCm', get_object_vars($data)) && null !== ($data->widthInCm ?? null)) {
            $dataArray['widthInCm'] = $data->widthInCm ?? null;
        }
        if (array_key_exists('heightInCm', get_object_vars($data)) && null !== ($data->heightInCm ?? null)) {
            $dataArray['heightInCm'] = $data->heightInCm ?? null;
        }
        if (array_key_exists('colorSpace', get_object_vars($data)) && null !== ($data->colorSpace ?? null)) {
            $dataArray['colorSpace'] = $data->colorSpace ?? null;
        }
        if (array_key_exists('colorProfile', get_object_vars($data)) && null !== ($data->colorProfile ?? null)) {
            $dataArray['colorProfile'] = $data->colorProfile ?? null;
        }
        if (array_key_exists('bitsPerPixel', get_object_vars($data)) && null !== ($data->bitsPerPixel ?? null)) {
            $dataArray['bitsPerPixel'] = $data->bitsPerPixel ?? null;
        }
        if (array_key_exists('bitsPerChannel', get_object_vars($data)) && null !== ($data->bitsPerChannel ?? null)) {
            $dataArray['bitsPerChannel'] = $data->bitsPerChannel ?? null;
        }
        if (array_key_exists('channels', get_object_vars($data)) && null !== ($data->channels ?? null)) {
            $dataArray['channels'] = $data->channels ?? null;
        }
        if (array_key_exists('pixelFormat', get_object_vars($data)) && null !== ($data->pixelFormat ?? null)) {
            $dataArray['pixelFormat'] = $data->pixelFormat ?? null;
        }
        if (array_key_exists('hasAlpha', get_object_vars($data)) && null !== ($data->hasAlpha ?? null)) {
            $dataArray['hasAlpha'] = $data->hasAlpha ?? null;
        }
        if (array_key_exists('isIndexed', get_object_vars($data)) && null !== ($data->isIndexed ?? null)) {
            $dataArray['isIndexed'] = $data->isIndexed ?? null;
        }
        if (array_key_exists('isExtended', get_object_vars($data)) && null !== ($data->isExtended ?? null)) {
            $dataArray['isExtended'] = $data->isExtended ?? null;
        }
        if (array_key_exists('horizontalResolution', get_object_vars($data)) && null !== ($data->horizontalResolution ?? null)) {
            $dataArray['horizontalResolution'] = $data->horizontalResolution ?? null;
        }
        if (array_key_exists('verticalResolution', get_object_vars($data)) && null !== ($data->verticalResolution ?? null)) {
            $dataArray['verticalResolution'] = $data->verticalResolution ?? null;
        }
        if (array_key_exists('totalFrames', get_object_vars($data)) && null !== ($data->totalFrames ?? null)) {
            $dataArray['totalFrames'] = $data->totalFrames ?? null;
        }
        if (array_key_exists('totalUnspecifiedTiffExtraChannels', get_object_vars($data)) && null !== ($data->totalUnspecifiedTiffExtraChannels ?? null)) {
            $dataArray['totalUnspecifiedTiffExtraChannels'] = $data->totalUnspecifiedTiffExtraChannels ?? null;
        }
        if (array_key_exists('hasExifData', get_object_vars($data)) && null !== ($data->hasExifData ?? null)) {
            $dataArray['hasExifData'] = $data->hasExifData ?? null;
        }
        if (array_key_exists('hasIptcData', get_object_vars($data)) && null !== ($data->hasIptcData ?? null)) {
            $dataArray['hasIptcData'] = $data->hasIptcData ?? null;
        }
        if (array_key_exists('hasAdobeResourceData', get_object_vars($data)) && null !== ($data->hasAdobeResourceData ?? null)) {
            $dataArray['hasAdobeResourceData'] = $data->hasAdobeResourceData ?? null;
        }
        if (array_key_exists('hasXmpData', get_object_vars($data)) && null !== ($data->hasXmpData ?? null)) {
            $dataArray['hasXmpData'] = $data->hasXmpData ?? null;
        }
        if (array_key_exists('uncompressedSizeInBytes', get_object_vars($data)) && null !== ($data->uncompressedSizeInBytes ?? null)) {
            $dataArray['uncompressedSizeInBytes'] = $data->uncompressedSizeInBytes ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key_2 => $value_4) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ImageMetadata::class => false];
    }
}