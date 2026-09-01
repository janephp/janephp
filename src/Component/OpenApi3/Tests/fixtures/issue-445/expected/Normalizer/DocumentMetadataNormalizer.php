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
        if (\array_key_exists('applicationName', $data) && $data['applicationName'] !== null) {
            $object->applicationName = $data['applicationName'];
            unset($data['applicationName']);
        }
        elseif (\array_key_exists('applicationName', $data) && $data['applicationName'] === null) {
            $object->applicationName = null;
            unset($data['applicationName']);
        }
        if (\array_key_exists('applicationVersion', $data) && $data['applicationVersion'] !== null) {
            $object->applicationVersion = $data['applicationVersion'];
            unset($data['applicationVersion']);
        }
        elseif (\array_key_exists('applicationVersion', $data) && $data['applicationVersion'] === null) {
            $object->applicationVersion = null;
            unset($data['applicationVersion']);
        }
        if (\array_key_exists('author', $data) && $data['author'] !== null) {
            $object->author = $data['author'];
            unset($data['author']);
        }
        elseif (\array_key_exists('author', $data) && $data['author'] === null) {
            $object->author = null;
            unset($data['author']);
        }
        if (\array_key_exists('creator', $data) && $data['creator'] !== null) {
            $object->creator = $data['creator'];
            unset($data['creator']);
        }
        elseif (\array_key_exists('creator', $data) && $data['creator'] === null) {
            $object->creator = null;
            unset($data['creator']);
        }
        if (\array_key_exists('publisher', $data) && $data['publisher'] !== null) {
            $object->publisher = $data['publisher'];
            unset($data['publisher']);
        }
        elseif (\array_key_exists('publisher', $data) && $data['publisher'] === null) {
            $object->publisher = null;
            unset($data['publisher']);
        }
        if (\array_key_exists('company', $data) && $data['company'] !== null) {
            $object->company = $data['company'];
            unset($data['company']);
        }
        elseif (\array_key_exists('company', $data) && $data['company'] === null) {
            $object->company = null;
            unset($data['company']);
        }
        if (\array_key_exists('documentTitle', $data) && $data['documentTitle'] !== null) {
            $object->documentTitle = $data['documentTitle'];
            unset($data['documentTitle']);
        }
        elseif (\array_key_exists('documentTitle', $data) && $data['documentTitle'] === null) {
            $object->documentTitle = null;
            unset($data['documentTitle']);
        }
        if (\array_key_exists('characterCount', $data)) {
            $object->characterCount = $data['characterCount'];
            unset($data['characterCount']);
        }
        if (\array_key_exists('characterCountWithSpaces', $data)) {
            $object->characterCountWithSpaces = $data['characterCountWithSpaces'];
            unset($data['characterCountWithSpaces']);
        }
        if (\array_key_exists('lineCount', $data)) {
            $object->lineCount = $data['lineCount'];
            unset($data['lineCount']);
        }
        if (\array_key_exists('pageCount', $data)) {
            $object->pageCount = $data['pageCount'];
            unset($data['pageCount']);
        }
        if (\array_key_exists('slideCount', $data)) {
            $object->slideCount = $data['slideCount'];
            unset($data['slideCount']);
        }
        if (\array_key_exists('paragraphCount', $data)) {
            $object->paragraphCount = $data['paragraphCount'];
            unset($data['paragraphCount']);
        }
        if (\array_key_exists('revisionNumber', $data)) {
            $object->revisionNumber = $data['revisionNumber'];
            unset($data['revisionNumber']);
        }
        if (\array_key_exists('titles', $data) && $data['titles'] !== null) {
            $values_2 = [];
            foreach ($data['titles'] as $value_4) {
                $values_2[] = $value_4;
            }
            $object->titles = $values_2;
            unset($data['titles']);
        }
        elseif (\array_key_exists('titles', $data) && $data['titles'] === null) {
            $object->titles = null;
            unset($data['titles']);
        }
        if (\array_key_exists('imageTitles', $data) && $data['imageTitles'] !== null) {
            $values_3 = [];
            foreach ($data['imageTitles'] as $value_5) {
                $values_3[] = $value_5;
            }
            $object->imageTitles = $values_3;
            unset($data['imageTitles']);
        }
        elseif (\array_key_exists('imageTitles', $data) && $data['imageTitles'] === null) {
            $object->imageTitles = null;
            unset($data['imageTitles']);
        }
        if (\array_key_exists('epsInfo', $data) && $data['epsInfo'] !== null) {
            $value_6 = $data['epsInfo'];
            if (is_array($data['epsInfo']) and \array_key_exists('isRasterized', $data['epsInfo']) and \array_key_exists('widthInPoints', $data['epsInfo']) and \array_key_exists('heightInPoints', $data['epsInfo'])) {
                $value_6 = $this->denormalizer->denormalize($data['epsInfo'], \PicturePark\API\Model\EpsMetadata::class, 'json', $context);
            }
            $object->epsInfo = $value_6;
            unset($data['epsInfo']);
        }
        elseif (\array_key_exists('epsInfo', $data) && $data['epsInfo'] === null) {
            $object->epsInfo = null;
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
        if (array_key_exists('applicationName', get_object_vars($data)) && null !== ($data->applicationName ?? null)) {
            $dataArray['applicationName'] = $data->applicationName ?? null;
        }
        if (array_key_exists('applicationVersion', get_object_vars($data)) && null !== ($data->applicationVersion ?? null)) {
            $dataArray['applicationVersion'] = $data->applicationVersion ?? null;
        }
        if (array_key_exists('author', get_object_vars($data)) && null !== ($data->author ?? null)) {
            $dataArray['author'] = $data->author ?? null;
        }
        if (array_key_exists('creator', get_object_vars($data)) && null !== ($data->creator ?? null)) {
            $dataArray['creator'] = $data->creator ?? null;
        }
        if (array_key_exists('publisher', get_object_vars($data)) && null !== ($data->publisher ?? null)) {
            $dataArray['publisher'] = $data->publisher ?? null;
        }
        if (array_key_exists('company', get_object_vars($data)) && null !== ($data->company ?? null)) {
            $dataArray['company'] = $data->company ?? null;
        }
        if (array_key_exists('documentTitle', get_object_vars($data)) && null !== ($data->documentTitle ?? null)) {
            $dataArray['documentTitle'] = $data->documentTitle ?? null;
        }
        if (array_key_exists('characterCount', get_object_vars($data)) && null !== ($data->characterCount ?? null)) {
            $dataArray['characterCount'] = $data->characterCount ?? null;
        }
        if (array_key_exists('characterCountWithSpaces', get_object_vars($data)) && null !== ($data->characterCountWithSpaces ?? null)) {
            $dataArray['characterCountWithSpaces'] = $data->characterCountWithSpaces ?? null;
        }
        if (array_key_exists('lineCount', get_object_vars($data)) && null !== ($data->lineCount ?? null)) {
            $dataArray['lineCount'] = $data->lineCount ?? null;
        }
        if (array_key_exists('pageCount', get_object_vars($data)) && null !== ($data->pageCount ?? null)) {
            $dataArray['pageCount'] = $data->pageCount ?? null;
        }
        if (array_key_exists('slideCount', get_object_vars($data)) && null !== ($data->slideCount ?? null)) {
            $dataArray['slideCount'] = $data->slideCount ?? null;
        }
        if (array_key_exists('paragraphCount', get_object_vars($data)) && null !== ($data->paragraphCount ?? null)) {
            $dataArray['paragraphCount'] = $data->paragraphCount ?? null;
        }
        if (array_key_exists('revisionNumber', get_object_vars($data)) && null !== ($data->revisionNumber ?? null)) {
            $dataArray['revisionNumber'] = $data->revisionNumber ?? null;
        }
        if (array_key_exists('titles', get_object_vars($data)) && null !== ($data->titles ?? null)) {
            $values_2 = [];
            foreach ($data->titles ?? null as $value_4) {
                $values_2[] = $value_4;
            }
            $dataArray['titles'] = $values_2;
        }
        if (array_key_exists('imageTitles', get_object_vars($data)) && null !== ($data->imageTitles ?? null)) {
            $values_3 = [];
            foreach ($data->imageTitles ?? null as $value_5) {
                $values_3[] = $value_5;
            }
            $dataArray['imageTitles'] = $values_3;
        }
        if (array_key_exists('epsInfo', get_object_vars($data)) && null !== ($data->epsInfo ?? null)) {
            $value_6 = $data->epsInfo ?? null;
            if (is_object($data->epsInfo ?? null)) {
                $value_6 = ($data->epsInfo ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->epsInfo ?? null, 'json', $context));
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