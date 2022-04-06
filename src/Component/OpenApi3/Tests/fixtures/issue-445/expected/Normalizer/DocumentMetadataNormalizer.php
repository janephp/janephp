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
class DocumentMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\DocumentMetadata';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\DocumentMetadata';
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
        $object = new \PicturePark\API\Model\DocumentMetadata();
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
        if (\array_key_exists('applicationName', $data) && $data['applicationName'] !== null) {
            $object->setApplicationName($data['applicationName']);
        }
        elseif (\array_key_exists('applicationName', $data) && $data['applicationName'] === null) {
            $object->setApplicationName(null);
        }
        if (\array_key_exists('applicationVersion', $data) && $data['applicationVersion'] !== null) {
            $object->setApplicationVersion($data['applicationVersion']);
        }
        elseif (\array_key_exists('applicationVersion', $data) && $data['applicationVersion'] === null) {
            $object->setApplicationVersion(null);
        }
        if (\array_key_exists('author', $data) && $data['author'] !== null) {
            $object->setAuthor($data['author']);
        }
        elseif (\array_key_exists('author', $data) && $data['author'] === null) {
            $object->setAuthor(null);
        }
        if (\array_key_exists('creator', $data) && $data['creator'] !== null) {
            $object->setCreator($data['creator']);
        }
        elseif (\array_key_exists('creator', $data) && $data['creator'] === null) {
            $object->setCreator(null);
        }
        if (\array_key_exists('publisher', $data) && $data['publisher'] !== null) {
            $object->setPublisher($data['publisher']);
        }
        elseif (\array_key_exists('publisher', $data) && $data['publisher'] === null) {
            $object->setPublisher(null);
        }
        if (\array_key_exists('company', $data) && $data['company'] !== null) {
            $object->setCompany($data['company']);
        }
        elseif (\array_key_exists('company', $data) && $data['company'] === null) {
            $object->setCompany(null);
        }
        if (\array_key_exists('documentTitle', $data) && $data['documentTitle'] !== null) {
            $object->setDocumentTitle($data['documentTitle']);
        }
        elseif (\array_key_exists('documentTitle', $data) && $data['documentTitle'] === null) {
            $object->setDocumentTitle(null);
        }
        if (\array_key_exists('characterCount', $data)) {
            $object->setCharacterCount($data['characterCount']);
        }
        if (\array_key_exists('characterCountWithSpaces', $data)) {
            $object->setCharacterCountWithSpaces($data['characterCountWithSpaces']);
        }
        if (\array_key_exists('lineCount', $data)) {
            $object->setLineCount($data['lineCount']);
        }
        if (\array_key_exists('pageCount', $data)) {
            $object->setPageCount($data['pageCount']);
        }
        if (\array_key_exists('slideCount', $data)) {
            $object->setSlideCount($data['slideCount']);
        }
        if (\array_key_exists('paragraphCount', $data)) {
            $object->setParagraphCount($data['paragraphCount']);
        }
        if (\array_key_exists('revisionNumber', $data)) {
            $object->setRevisionNumber($data['revisionNumber']);
        }
        if (\array_key_exists('titles', $data) && $data['titles'] !== null) {
            $values = array();
            foreach ($data['titles'] as $value) {
                $values[] = $value;
            }
            $object->setTitles($values);
        }
        elseif (\array_key_exists('titles', $data) && $data['titles'] === null) {
            $object->setTitles(null);
        }
        if (\array_key_exists('imageTitles', $data) && $data['imageTitles'] !== null) {
            $values_1 = array();
            foreach ($data['imageTitles'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setImageTitles($values_1);
        }
        elseif (\array_key_exists('imageTitles', $data) && $data['imageTitles'] === null) {
            $object->setImageTitles(null);
        }
        if (\array_key_exists('epsInfo', $data) && $data['epsInfo'] !== null) {
            $object->setEpsInfo($data['epsInfo']);
        }
        elseif (\array_key_exists('epsInfo', $data) && $data['epsInfo'] === null) {
            $object->setEpsInfo(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
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
        if (null !== $object->getApplicationName()) {
            $data['applicationName'] = $object->getApplicationName();
        }
        if (null !== $object->getApplicationVersion()) {
            $data['applicationVersion'] = $object->getApplicationVersion();
        }
        if (null !== $object->getAuthor()) {
            $data['author'] = $object->getAuthor();
        }
        if (null !== $object->getCreator()) {
            $data['creator'] = $object->getCreator();
        }
        if (null !== $object->getPublisher()) {
            $data['publisher'] = $object->getPublisher();
        }
        if (null !== $object->getCompany()) {
            $data['company'] = $object->getCompany();
        }
        if (null !== $object->getDocumentTitle()) {
            $data['documentTitle'] = $object->getDocumentTitle();
        }
        if (null !== $object->getCharacterCount()) {
            $data['characterCount'] = $object->getCharacterCount();
        }
        if (null !== $object->getCharacterCountWithSpaces()) {
            $data['characterCountWithSpaces'] = $object->getCharacterCountWithSpaces();
        }
        if (null !== $object->getLineCount()) {
            $data['lineCount'] = $object->getLineCount();
        }
        if (null !== $object->getPageCount()) {
            $data['pageCount'] = $object->getPageCount();
        }
        if (null !== $object->getSlideCount()) {
            $data['slideCount'] = $object->getSlideCount();
        }
        if (null !== $object->getParagraphCount()) {
            $data['paragraphCount'] = $object->getParagraphCount();
        }
        if (null !== $object->getRevisionNumber()) {
            $data['revisionNumber'] = $object->getRevisionNumber();
        }
        if (null !== $object->getTitles()) {
            $values = array();
            foreach ($object->getTitles() as $value) {
                $values[] = $value;
            }
            $data['titles'] = $values;
        }
        if (null !== $object->getImageTitles()) {
            $values_1 = array();
            foreach ($object->getImageTitles() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['imageTitles'] = $values_1;
        }
        if (null !== $object->getEpsInfo()) {
            $data['epsInfo'] = $object->getEpsInfo();
        }
        return $data;
    }
}