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
class ImageMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\ImageMetadata';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ImageMetadata';
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
        $object = new \PicturePark\API\Model\ImageMetadata();
        if (\array_key_exists('widthInInch', $data) && \is_int($data['widthInInch'])) {
            $data['widthInInch'] = (double) $data['widthInInch'];
        }
        if (\array_key_exists('heightInInch', $data) && \is_int($data['heightInInch'])) {
            $data['heightInInch'] = (double) $data['heightInInch'];
        }
        if (\array_key_exists('widthInCm', $data) && \is_int($data['widthInCm'])) {
            $data['widthInCm'] = (double) $data['widthInCm'];
        }
        if (\array_key_exists('heightInCm', $data) && \is_int($data['heightInCm'])) {
            $data['heightInCm'] = (double) $data['heightInCm'];
        }
        if (\array_key_exists('horizontalResolution', $data) && \is_int($data['horizontalResolution'])) {
            $data['horizontalResolution'] = (double) $data['horizontalResolution'];
        }
        if (\array_key_exists('verticalResolution', $data) && \is_int($data['verticalResolution'])) {
            $data['verticalResolution'] = (double) $data['verticalResolution'];
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
        if ($object->isInitialized('widthInInch') && null !== $object->getWidthInInch()) {
            $data['widthInInch'] = $object->getWidthInInch();
        }
        if ($object->isInitialized('heightInInch') && null !== $object->getHeightInInch()) {
            $data['heightInInch'] = $object->getHeightInInch();
        }
        if ($object->isInitialized('widthInCm') && null !== $object->getWidthInCm()) {
            $data['widthInCm'] = $object->getWidthInCm();
        }
        if ($object->isInitialized('heightInCm') && null !== $object->getHeightInCm()) {
            $data['heightInCm'] = $object->getHeightInCm();
        }
        if ($object->isInitialized('colorSpace') && null !== $object->getColorSpace()) {
            $data['colorSpace'] = $object->getColorSpace();
        }
        if ($object->isInitialized('colorProfile') && null !== $object->getColorProfile()) {
            $data['colorProfile'] = $object->getColorProfile();
        }
        if ($object->isInitialized('bitsPerPixel') && null !== $object->getBitsPerPixel()) {
            $data['bitsPerPixel'] = $object->getBitsPerPixel();
        }
        if ($object->isInitialized('bitsPerChannel') && null !== $object->getBitsPerChannel()) {
            $data['bitsPerChannel'] = $object->getBitsPerChannel();
        }
        if ($object->isInitialized('channels') && null !== $object->getChannels()) {
            $data['channels'] = $object->getChannels();
        }
        if ($object->isInitialized('pixelFormat') && null !== $object->getPixelFormat()) {
            $data['pixelFormat'] = $object->getPixelFormat();
        }
        if ($object->isInitialized('hasAlpha') && null !== $object->getHasAlpha()) {
            $data['hasAlpha'] = $object->getHasAlpha();
        }
        if ($object->isInitialized('isIndexed') && null !== $object->getIsIndexed()) {
            $data['isIndexed'] = $object->getIsIndexed();
        }
        if ($object->isInitialized('isExtended') && null !== $object->getIsExtended()) {
            $data['isExtended'] = $object->getIsExtended();
        }
        if ($object->isInitialized('horizontalResolution') && null !== $object->getHorizontalResolution()) {
            $data['horizontalResolution'] = $object->getHorizontalResolution();
        }
        if ($object->isInitialized('verticalResolution') && null !== $object->getVerticalResolution()) {
            $data['verticalResolution'] = $object->getVerticalResolution();
        }
        if ($object->isInitialized('totalFrames') && null !== $object->getTotalFrames()) {
            $data['totalFrames'] = $object->getTotalFrames();
        }
        if ($object->isInitialized('totalUnspecifiedTiffExtraChannels') && null !== $object->getTotalUnspecifiedTiffExtraChannels()) {
            $data['totalUnspecifiedTiffExtraChannels'] = $object->getTotalUnspecifiedTiffExtraChannels();
        }
        if ($object->isInitialized('hasExifData') && null !== $object->getHasExifData()) {
            $data['hasExifData'] = $object->getHasExifData();
        }
        if ($object->isInitialized('hasIptcData') && null !== $object->getHasIptcData()) {
            $data['hasIptcData'] = $object->getHasIptcData();
        }
        if ($object->isInitialized('hasAdobeResourceData') && null !== $object->getHasAdobeResourceData()) {
            $data['hasAdobeResourceData'] = $object->getHasAdobeResourceData();
        }
        if ($object->isInitialized('hasXmpData') && null !== $object->getHasXmpData()) {
            $data['hasXmpData'] = $object->getHasXmpData();
        }
        if ($object->isInitialized('uncompressedSizeInBytes') && null !== $object->getUncompressedSizeInBytes()) {
            $data['uncompressedSizeInBytes'] = $object->getUncompressedSizeInBytes();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('PicturePark\\API\\Model\\ImageMetadata' => false);
    }
}