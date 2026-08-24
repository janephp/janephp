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
        if (\array_key_exists('widthInInch', $data)) {
            $object->setWidthInInch($data['widthInInch']);
            unset($data['widthInInch']);
        }
        if (\array_key_exists('heightInInch', $data)) {
            $object->setHeightInInch($data['heightInInch']);
            unset($data['heightInInch']);
        }
        if (\array_key_exists('widthInCm', $data)) {
            $object->setWidthInCm($data['widthInCm']);
            unset($data['widthInCm']);
        }
        if (\array_key_exists('heightInCm', $data)) {
            $object->setHeightInCm($data['heightInCm']);
            unset($data['heightInCm']);
        }
        if (\array_key_exists('colorSpace', $data) && $data['colorSpace'] !== null) {
            $object->setColorSpace($data['colorSpace']);
            unset($data['colorSpace']);
        }
        elseif (\array_key_exists('colorSpace', $data) && $data['colorSpace'] === null) {
            $object->setColorSpace(null);
        }
        if (\array_key_exists('colorProfile', $data) && $data['colorProfile'] !== null) {
            $object->setColorProfile($data['colorProfile']);
            unset($data['colorProfile']);
        }
        elseif (\array_key_exists('colorProfile', $data) && $data['colorProfile'] === null) {
            $object->setColorProfile(null);
        }
        if (\array_key_exists('bitsPerPixel', $data)) {
            $object->setBitsPerPixel($data['bitsPerPixel']);
            unset($data['bitsPerPixel']);
        }
        if (\array_key_exists('bitsPerChannel', $data)) {
            $object->setBitsPerChannel($data['bitsPerChannel']);
            unset($data['bitsPerChannel']);
        }
        if (\array_key_exists('channels', $data) && $data['channels'] !== null) {
            $object->setChannels($data['channels']);
            unset($data['channels']);
        }
        elseif (\array_key_exists('channels', $data) && $data['channels'] === null) {
            $object->setChannels(null);
        }
        if (\array_key_exists('pixelFormat', $data) && $data['pixelFormat'] !== null) {
            $object->setPixelFormat($data['pixelFormat']);
            unset($data['pixelFormat']);
        }
        elseif (\array_key_exists('pixelFormat', $data) && $data['pixelFormat'] === null) {
            $object->setPixelFormat(null);
        }
        if (\array_key_exists('hasAlpha', $data)) {
            $object->setHasAlpha($data['hasAlpha']);
            unset($data['hasAlpha']);
        }
        if (\array_key_exists('isIndexed', $data)) {
            $object->setIsIndexed($data['isIndexed']);
            unset($data['isIndexed']);
        }
        if (\array_key_exists('isExtended', $data)) {
            $object->setIsExtended($data['isExtended']);
            unset($data['isExtended']);
        }
        if (\array_key_exists('horizontalResolution', $data)) {
            $object->setHorizontalResolution($data['horizontalResolution']);
            unset($data['horizontalResolution']);
        }
        if (\array_key_exists('verticalResolution', $data)) {
            $object->setVerticalResolution($data['verticalResolution']);
            unset($data['verticalResolution']);
        }
        if (\array_key_exists('totalFrames', $data)) {
            $object->setTotalFrames($data['totalFrames']);
            unset($data['totalFrames']);
        }
        if (\array_key_exists('totalUnspecifiedTiffExtraChannels', $data)) {
            $object->setTotalUnspecifiedTiffExtraChannels($data['totalUnspecifiedTiffExtraChannels']);
            unset($data['totalUnspecifiedTiffExtraChannels']);
        }
        if (\array_key_exists('hasExifData', $data)) {
            $object->setHasExifData($data['hasExifData']);
            unset($data['hasExifData']);
        }
        if (\array_key_exists('hasIptcData', $data)) {
            $object->setHasIptcData($data['hasIptcData']);
            unset($data['hasIptcData']);
        }
        if (\array_key_exists('hasAdobeResourceData', $data)) {
            $object->setHasAdobeResourceData($data['hasAdobeResourceData']);
            unset($data['hasAdobeResourceData']);
        }
        if (\array_key_exists('hasXmpData', $data)) {
            $object->setHasXmpData($data['hasXmpData']);
            unset($data['hasXmpData']);
        }
        if (\array_key_exists('uncompressedSizeInBytes', $data)) {
            $object->setUncompressedSizeInBytes($data['uncompressedSizeInBytes']);
            unset($data['uncompressedSizeInBytes']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('names') && null !== $data->getNames()) {
            $dataArray['names'] = $data->getNames();
        }
        if ($data->isInitialized('descriptions') && null !== $data->getDescriptions()) {
            $dataArray['descriptions'] = $data->getDescriptions();
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
        if ($data->isInitialized('widthInInch') && null !== $data->getWidthInInch()) {
            $dataArray['widthInInch'] = $data->getWidthInInch();
        }
        if ($data->isInitialized('heightInInch') && null !== $data->getHeightInInch()) {
            $dataArray['heightInInch'] = $data->getHeightInInch();
        }
        if ($data->isInitialized('widthInCm') && null !== $data->getWidthInCm()) {
            $dataArray['widthInCm'] = $data->getWidthInCm();
        }
        if ($data->isInitialized('heightInCm') && null !== $data->getHeightInCm()) {
            $dataArray['heightInCm'] = $data->getHeightInCm();
        }
        if ($data->isInitialized('colorSpace') && null !== $data->getColorSpace()) {
            $dataArray['colorSpace'] = $data->getColorSpace();
        }
        if ($data->isInitialized('colorProfile') && null !== $data->getColorProfile()) {
            $dataArray['colorProfile'] = $data->getColorProfile();
        }
        if ($data->isInitialized('bitsPerPixel') && null !== $data->getBitsPerPixel()) {
            $dataArray['bitsPerPixel'] = $data->getBitsPerPixel();
        }
        if ($data->isInitialized('bitsPerChannel') && null !== $data->getBitsPerChannel()) {
            $dataArray['bitsPerChannel'] = $data->getBitsPerChannel();
        }
        if ($data->isInitialized('channels') && null !== $data->getChannels()) {
            $dataArray['channels'] = $data->getChannels();
        }
        if ($data->isInitialized('pixelFormat') && null !== $data->getPixelFormat()) {
            $dataArray['pixelFormat'] = $data->getPixelFormat();
        }
        if ($data->isInitialized('hasAlpha') && null !== $data->getHasAlpha()) {
            $dataArray['hasAlpha'] = $data->getHasAlpha();
        }
        if ($data->isInitialized('isIndexed') && null !== $data->getIsIndexed()) {
            $dataArray['isIndexed'] = $data->getIsIndexed();
        }
        if ($data->isInitialized('isExtended') && null !== $data->getIsExtended()) {
            $dataArray['isExtended'] = $data->getIsExtended();
        }
        if ($data->isInitialized('horizontalResolution') && null !== $data->getHorizontalResolution()) {
            $dataArray['horizontalResolution'] = $data->getHorizontalResolution();
        }
        if ($data->isInitialized('verticalResolution') && null !== $data->getVerticalResolution()) {
            $dataArray['verticalResolution'] = $data->getVerticalResolution();
        }
        if ($data->isInitialized('totalFrames') && null !== $data->getTotalFrames()) {
            $dataArray['totalFrames'] = $data->getTotalFrames();
        }
        if ($data->isInitialized('totalUnspecifiedTiffExtraChannels') && null !== $data->getTotalUnspecifiedTiffExtraChannels()) {
            $dataArray['totalUnspecifiedTiffExtraChannels'] = $data->getTotalUnspecifiedTiffExtraChannels();
        }
        if ($data->isInitialized('hasExifData') && null !== $data->getHasExifData()) {
            $dataArray['hasExifData'] = $data->getHasExifData();
        }
        if ($data->isInitialized('hasIptcData') && null !== $data->getHasIptcData()) {
            $dataArray['hasIptcData'] = $data->getHasIptcData();
        }
        if ($data->isInitialized('hasAdobeResourceData') && null !== $data->getHasAdobeResourceData()) {
            $dataArray['hasAdobeResourceData'] = $data->getHasAdobeResourceData();
        }
        if ($data->isInitialized('hasXmpData') && null !== $data->getHasXmpData()) {
            $dataArray['hasXmpData'] = $data->getHasXmpData();
        }
        if ($data->isInitialized('uncompressedSizeInBytes') && null !== $data->getUncompressedSizeInBytes()) {
            $dataArray['uncompressedSizeInBytes'] = $data->getUncompressedSizeInBytes();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ImageMetadata::class => false];
    }
}