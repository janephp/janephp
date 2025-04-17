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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\DocumentMetadata();
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
        if (\array_key_exists('applicationName', $data) && $data['applicationName'] !== null) {
            $object->setApplicationName($data['applicationName']);
            unset($data['applicationName']);
        }
        elseif (\array_key_exists('applicationName', $data) && $data['applicationName'] === null) {
            $object->setApplicationName(null);
        }
        if (\array_key_exists('applicationVersion', $data) && $data['applicationVersion'] !== null) {
            $object->setApplicationVersion($data['applicationVersion']);
            unset($data['applicationVersion']);
        }
        elseif (\array_key_exists('applicationVersion', $data) && $data['applicationVersion'] === null) {
            $object->setApplicationVersion(null);
        }
        if (\array_key_exists('author', $data) && $data['author'] !== null) {
            $object->setAuthor($data['author']);
            unset($data['author']);
        }
        elseif (\array_key_exists('author', $data) && $data['author'] === null) {
            $object->setAuthor(null);
        }
        if (\array_key_exists('creator', $data) && $data['creator'] !== null) {
            $object->setCreator($data['creator']);
            unset($data['creator']);
        }
        elseif (\array_key_exists('creator', $data) && $data['creator'] === null) {
            $object->setCreator(null);
        }
        if (\array_key_exists('publisher', $data) && $data['publisher'] !== null) {
            $object->setPublisher($data['publisher']);
            unset($data['publisher']);
        }
        elseif (\array_key_exists('publisher', $data) && $data['publisher'] === null) {
            $object->setPublisher(null);
        }
        if (\array_key_exists('company', $data) && $data['company'] !== null) {
            $object->setCompany($data['company']);
            unset($data['company']);
        }
        elseif (\array_key_exists('company', $data) && $data['company'] === null) {
            $object->setCompany(null);
        }
        if (\array_key_exists('documentTitle', $data) && $data['documentTitle'] !== null) {
            $object->setDocumentTitle($data['documentTitle']);
            unset($data['documentTitle']);
        }
        elseif (\array_key_exists('documentTitle', $data) && $data['documentTitle'] === null) {
            $object->setDocumentTitle(null);
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
            $values = [];
            foreach ($data['titles'] as $value) {
                $values[] = $value;
            }
            $object->setTitles($values);
            unset($data['titles']);
        }
        elseif (\array_key_exists('titles', $data) && $data['titles'] === null) {
            $object->setTitles(null);
        }
        if (\array_key_exists('imageTitles', $data) && $data['imageTitles'] !== null) {
            $values_1 = [];
            foreach ($data['imageTitles'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setImageTitles($values_1);
            unset($data['imageTitles']);
        }
        elseif (\array_key_exists('imageTitles', $data) && $data['imageTitles'] === null) {
            $object->setImageTitles(null);
        }
        if (\array_key_exists('epsInfo', $data) && $data['epsInfo'] !== null) {
            $object->setEpsInfo($data['epsInfo']);
            unset($data['epsInfo']);
        }
        elseif (\array_key_exists('epsInfo', $data) && $data['epsInfo'] === null) {
            $object->setEpsInfo(null);
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
            $values = [];
            foreach ($data->getTitles() as $value) {
                $values[] = $value;
            }
            $dataArray['titles'] = $values;
        }
        if ($data->isInitialized('imageTitles') && null !== $data->getImageTitles()) {
            $values_1 = [];
            foreach ($data->getImageTitles() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['imageTitles'] = $values_1;
        }
        if ($data->isInitialized('epsInfo') && null !== $data->getEpsInfo()) {
            $dataArray['epsInfo'] = $data->getEpsInfo();
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
        return [\PicturePark\API\Model\DocumentMetadata::class => false];
    }
}