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
class DocumentMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\DocumentMetadata::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\DocumentMetadata::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\DocumentMetadata();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
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
        if (\array_key_exists('applicationName', $data) && $data['applicationName'] !== null) {
            $object->setApplicationName($data['applicationName']);
            unset($data['applicationName']);
        }
        elseif (\array_key_exists('applicationName', $data) && $data['applicationName'] === null) {
            $object->setApplicationName(null);
            unset($data['applicationName']);
        }
        if (\array_key_exists('applicationVersion', $data) && $data['applicationVersion'] !== null) {
            $object->setApplicationVersion($data['applicationVersion']);
            unset($data['applicationVersion']);
        }
        elseif (\array_key_exists('applicationVersion', $data) && $data['applicationVersion'] === null) {
            $object->setApplicationVersion(null);
            unset($data['applicationVersion']);
        }
        if (\array_key_exists('author', $data) && $data['author'] !== null) {
            $object->setAuthor($data['author']);
            unset($data['author']);
        }
        elseif (\array_key_exists('author', $data) && $data['author'] === null) {
            $object->setAuthor(null);
            unset($data['author']);
        }
        if (\array_key_exists('creator', $data) && $data['creator'] !== null) {
            $object->setCreator($data['creator']);
            unset($data['creator']);
        }
        elseif (\array_key_exists('creator', $data) && $data['creator'] === null) {
            $object->setCreator(null);
            unset($data['creator']);
        }
        if (\array_key_exists('publisher', $data) && $data['publisher'] !== null) {
            $object->setPublisher($data['publisher']);
            unset($data['publisher']);
        }
        elseif (\array_key_exists('publisher', $data) && $data['publisher'] === null) {
            $object->setPublisher(null);
            unset($data['publisher']);
        }
        if (\array_key_exists('company', $data) && $data['company'] !== null) {
            $object->setCompany($data['company']);
            unset($data['company']);
        }
        elseif (\array_key_exists('company', $data) && $data['company'] === null) {
            $object->setCompany(null);
            unset($data['company']);
        }
        if (\array_key_exists('documentTitle', $data) && $data['documentTitle'] !== null) {
            $object->setDocumentTitle($data['documentTitle']);
            unset($data['documentTitle']);
        }
        elseif (\array_key_exists('documentTitle', $data) && $data['documentTitle'] === null) {
            $object->setDocumentTitle(null);
            unset($data['documentTitle']);
        }
        if (\array_key_exists('characterCount', $data)) {
            $object->setCharacterCount($data['characterCount']);
            unset($data['characterCount']);
        }
        if (\array_key_exists('characterCountWithSpaces', $data)) {
            $object->setCharacterCountWithSpaces($data['characterCountWithSpaces']);
            unset($data['characterCountWithSpaces']);
        }
        if (\array_key_exists('lineCount', $data)) {
            $object->setLineCount($data['lineCount']);
            unset($data['lineCount']);
        }
        if (\array_key_exists('pageCount', $data)) {
            $object->setPageCount($data['pageCount']);
            unset($data['pageCount']);
        }
        if (\array_key_exists('slideCount', $data)) {
            $object->setSlideCount($data['slideCount']);
            unset($data['slideCount']);
        }
        if (\array_key_exists('paragraphCount', $data)) {
            $object->setParagraphCount($data['paragraphCount']);
            unset($data['paragraphCount']);
        }
        if (\array_key_exists('revisionNumber', $data)) {
            $object->setRevisionNumber($data['revisionNumber']);
            unset($data['revisionNumber']);
        }
        if (\array_key_exists('titles', $data) && $data['titles'] !== null) {
            $values_2 = [];
            foreach ($data['titles'] as $value_4) {
                $values_2[] = $value_4;
            }
            $object->setTitles($values_2);
            unset($data['titles']);
        }
        elseif (\array_key_exists('titles', $data) && $data['titles'] === null) {
            $object->setTitles(null);
            unset($data['titles']);
        }
        if (\array_key_exists('imageTitles', $data) && $data['imageTitles'] !== null) {
            $values_3 = [];
            foreach ($data['imageTitles'] as $value_5) {
                $values_3[] = $value_5;
            }
            $object->setImageTitles($values_3);
            unset($data['imageTitles']);
        }
        elseif (\array_key_exists('imageTitles', $data) && $data['imageTitles'] === null) {
            $object->setImageTitles(null);
            unset($data['imageTitles']);
        }
        if (\array_key_exists('epsInfo', $data) && $data['epsInfo'] !== null) {
            $value_6 = $data['epsInfo'];
            if (is_array($data['epsInfo']) and \array_key_exists('isRasterized', $data['epsInfo']) and \array_key_exists('widthInPoints', $data['epsInfo']) and \array_key_exists('heightInPoints', $data['epsInfo'])) {
                $value_6 = $this->denormalizer->denormalize($data['epsInfo'], \PicturePark\API\Model\EpsMetadata::class, 'json', $context);
            }
            $object->setEpsInfo($value_6);
            unset($data['epsInfo']);
        }
        elseif (\array_key_exists('epsInfo', $data) && $data['epsInfo'] === null) {
            $object->setEpsInfo(null);
            unset($data['epsInfo']);
        }
        foreach ($data as $key_2 => $value_7) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_7;
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
        if ($data->isInitialized('applicationName') && null !== $data->getApplicationName()) {
            $dataArray['applicationName'] = $data->getApplicationName();
        }
        if ($data->isInitialized('applicationVersion') && null !== $data->getApplicationVersion()) {
            $dataArray['applicationVersion'] = $data->getApplicationVersion();
        }
        if ($data->isInitialized('author') && null !== $data->getAuthor()) {
            $dataArray['author'] = $data->getAuthor();
        }
        if ($data->isInitialized('creator') && null !== $data->getCreator()) {
            $dataArray['creator'] = $data->getCreator();
        }
        if ($data->isInitialized('publisher') && null !== $data->getPublisher()) {
            $dataArray['publisher'] = $data->getPublisher();
        }
        if ($data->isInitialized('company') && null !== $data->getCompany()) {
            $dataArray['company'] = $data->getCompany();
        }
        if ($data->isInitialized('documentTitle') && null !== $data->getDocumentTitle()) {
            $dataArray['documentTitle'] = $data->getDocumentTitle();
        }
        if ($data->isInitialized('characterCount') && null !== $data->getCharacterCount()) {
            $dataArray['characterCount'] = $data->getCharacterCount();
        }
        if ($data->isInitialized('characterCountWithSpaces') && null !== $data->getCharacterCountWithSpaces()) {
            $dataArray['characterCountWithSpaces'] = $data->getCharacterCountWithSpaces();
        }
        if ($data->isInitialized('lineCount') && null !== $data->getLineCount()) {
            $dataArray['lineCount'] = $data->getLineCount();
        }
        if ($data->isInitialized('pageCount') && null !== $data->getPageCount()) {
            $dataArray['pageCount'] = $data->getPageCount();
        }
        if ($data->isInitialized('slideCount') && null !== $data->getSlideCount()) {
            $dataArray['slideCount'] = $data->getSlideCount();
        }
        if ($data->isInitialized('paragraphCount') && null !== $data->getParagraphCount()) {
            $dataArray['paragraphCount'] = $data->getParagraphCount();
        }
        if ($data->isInitialized('revisionNumber') && null !== $data->getRevisionNumber()) {
            $dataArray['revisionNumber'] = $data->getRevisionNumber();
        }
        if ($data->isInitialized('titles') && null !== $data->getTitles()) {
            $values_2 = [];
            foreach ($data->getTitles() as $value_4) {
                $values_2[] = $value_4;
            }
            $dataArray['titles'] = $values_2;
        }
        if ($data->isInitialized('imageTitles') && null !== $data->getImageTitles()) {
            $values_3 = [];
            foreach ($data->getImageTitles() as $value_5) {
                $values_3[] = $value_5;
            }
            $dataArray['imageTitles'] = $values_3;
        }
        if ($data->isInitialized('epsInfo') && null !== $data->getEpsInfo()) {
            $value_6 = $data->getEpsInfo();
            if (is_object($data->getEpsInfo())) {
                $value_6 = $data->getEpsInfo() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getEpsInfo(), 'json', $context));
            }
            $dataArray['epsInfo'] = $value_6;
        }
        foreach ($data->additionalPropertyEntries() as $key_2 => $value_7) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_7;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\DocumentMetadata::class => false];
    }
}