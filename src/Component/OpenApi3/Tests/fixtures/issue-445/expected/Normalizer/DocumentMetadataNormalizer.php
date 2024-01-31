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
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class DocumentMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\DocumentMetadata';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\DocumentMetadata';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
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
            if ($object->isInitialized('applicationName') && null !== $object->getApplicationName()) {
                $data['applicationName'] = $object->getApplicationName();
            }
            if ($object->isInitialized('applicationVersion') && null !== $object->getApplicationVersion()) {
                $data['applicationVersion'] = $object->getApplicationVersion();
            }
            if ($object->isInitialized('author') && null !== $object->getAuthor()) {
                $data['author'] = $object->getAuthor();
            }
            if ($object->isInitialized('creator') && null !== $object->getCreator()) {
                $data['creator'] = $object->getCreator();
            }
            if ($object->isInitialized('publisher') && null !== $object->getPublisher()) {
                $data['publisher'] = $object->getPublisher();
            }
            if ($object->isInitialized('company') && null !== $object->getCompany()) {
                $data['company'] = $object->getCompany();
            }
            if ($object->isInitialized('documentTitle') && null !== $object->getDocumentTitle()) {
                $data['documentTitle'] = $object->getDocumentTitle();
            }
            if ($object->isInitialized('characterCount') && null !== $object->getCharacterCount()) {
                $data['characterCount'] = $object->getCharacterCount();
            }
            if ($object->isInitialized('characterCountWithSpaces') && null !== $object->getCharacterCountWithSpaces()) {
                $data['characterCountWithSpaces'] = $object->getCharacterCountWithSpaces();
            }
            if ($object->isInitialized('lineCount') && null !== $object->getLineCount()) {
                $data['lineCount'] = $object->getLineCount();
            }
            if ($object->isInitialized('pageCount') && null !== $object->getPageCount()) {
                $data['pageCount'] = $object->getPageCount();
            }
            if ($object->isInitialized('slideCount') && null !== $object->getSlideCount()) {
                $data['slideCount'] = $object->getSlideCount();
            }
            if ($object->isInitialized('paragraphCount') && null !== $object->getParagraphCount()) {
                $data['paragraphCount'] = $object->getParagraphCount();
            }
            if ($object->isInitialized('revisionNumber') && null !== $object->getRevisionNumber()) {
                $data['revisionNumber'] = $object->getRevisionNumber();
            }
            if ($object->isInitialized('titles') && null !== $object->getTitles()) {
                $values = [];
                foreach ($object->getTitles() as $value) {
                    $values[] = $value;
                }
                $data['titles'] = $values;
            }
            if ($object->isInitialized('imageTitles') && null !== $object->getImageTitles()) {
                $values_1 = [];
                foreach ($object->getImageTitles() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['imageTitles'] = $values_1;
            }
            if ($object->isInitialized('epsInfo') && null !== $object->getEpsInfo()) {
                $data['epsInfo'] = $object->getEpsInfo();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\DocumentMetadata' => false];
        }
    }
} else {
    class DocumentMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\DocumentMetadata';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\DocumentMetadata';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
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
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
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
            if ($object->isInitialized('applicationName') && null !== $object->getApplicationName()) {
                $data['applicationName'] = $object->getApplicationName();
            }
            if ($object->isInitialized('applicationVersion') && null !== $object->getApplicationVersion()) {
                $data['applicationVersion'] = $object->getApplicationVersion();
            }
            if ($object->isInitialized('author') && null !== $object->getAuthor()) {
                $data['author'] = $object->getAuthor();
            }
            if ($object->isInitialized('creator') && null !== $object->getCreator()) {
                $data['creator'] = $object->getCreator();
            }
            if ($object->isInitialized('publisher') && null !== $object->getPublisher()) {
                $data['publisher'] = $object->getPublisher();
            }
            if ($object->isInitialized('company') && null !== $object->getCompany()) {
                $data['company'] = $object->getCompany();
            }
            if ($object->isInitialized('documentTitle') && null !== $object->getDocumentTitle()) {
                $data['documentTitle'] = $object->getDocumentTitle();
            }
            if ($object->isInitialized('characterCount') && null !== $object->getCharacterCount()) {
                $data['characterCount'] = $object->getCharacterCount();
            }
            if ($object->isInitialized('characterCountWithSpaces') && null !== $object->getCharacterCountWithSpaces()) {
                $data['characterCountWithSpaces'] = $object->getCharacterCountWithSpaces();
            }
            if ($object->isInitialized('lineCount') && null !== $object->getLineCount()) {
                $data['lineCount'] = $object->getLineCount();
            }
            if ($object->isInitialized('pageCount') && null !== $object->getPageCount()) {
                $data['pageCount'] = $object->getPageCount();
            }
            if ($object->isInitialized('slideCount') && null !== $object->getSlideCount()) {
                $data['slideCount'] = $object->getSlideCount();
            }
            if ($object->isInitialized('paragraphCount') && null !== $object->getParagraphCount()) {
                $data['paragraphCount'] = $object->getParagraphCount();
            }
            if ($object->isInitialized('revisionNumber') && null !== $object->getRevisionNumber()) {
                $data['revisionNumber'] = $object->getRevisionNumber();
            }
            if ($object->isInitialized('titles') && null !== $object->getTitles()) {
                $values = [];
                foreach ($object->getTitles() as $value) {
                    $values[] = $value;
                }
                $data['titles'] = $values;
            }
            if ($object->isInitialized('imageTitles') && null !== $object->getImageTitles()) {
                $values_1 = [];
                foreach ($object->getImageTitles() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['imageTitles'] = $values_1;
            }
            if ($object->isInitialized('epsInfo') && null !== $object->getEpsInfo()) {
                $data['epsInfo'] = $object->getEpsInfo();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\DocumentMetadata' => false];
        }
    }
}