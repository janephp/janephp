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
class PdfFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\PdfFormat::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\PdfFormat::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\PdfFormat();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('fastWebView', $data) && \is_int($data['fastWebView'])) {
            $data['fastWebView'] = (bool) $data['fastWebView'];
        }
        if (\array_key_exists('reduceFileSize', $data) && \is_int($data['reduceFileSize'])) {
            $data['reduceFileSize'] = (bool) $data['reduceFileSize'];
        }
        if (\array_key_exists('extractFullText', $data) && \is_int($data['extractFullText'])) {
            $data['extractFullText'] = (bool) $data['extractFullText'];
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('jpegQuality', $data)) {
            $object->setJpegQuality($data['jpegQuality']);
            unset($data['jpegQuality']);
        }
        if (\array_key_exists('fastWebView', $data)) {
            $object->setFastWebView($data['fastWebView']);
            unset($data['fastWebView']);
        }
        if (\array_key_exists('reduceFileSize', $data)) {
            $object->setReduceFileSize($data['reduceFileSize']);
            unset($data['reduceFileSize']);
        }
        if (\array_key_exists('extension', $data) && $data['extension'] !== null) {
            $object->setExtension($data['extension']);
            unset($data['extension']);
        }
        elseif (\array_key_exists('extension', $data) && $data['extension'] === null) {
            $object->setExtension(null);
        }
        if (\array_key_exists('extractFullText', $data)) {
            $object->setExtractFullText($data['extractFullText']);
            unset($data['extractFullText']);
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
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('jpegQuality') && null !== $data->getJpegQuality()) {
            $dataArray['jpegQuality'] = $data->getJpegQuality();
        }
        if ($data->isInitialized('fastWebView') && null !== $data->getFastWebView()) {
            $dataArray['fastWebView'] = $data->getFastWebView();
        }
        if ($data->isInitialized('reduceFileSize') && null !== $data->getReduceFileSize()) {
            $dataArray['reduceFileSize'] = $data->getReduceFileSize();
        }
        if ($data->isInitialized('extension')) {
            $dataArray['extension'] = $data->getExtension();
        }
        if ($data->isInitialized('extractFullText') && null !== $data->getExtractFullText()) {
            $dataArray['extractFullText'] = $data->getExtractFullText();
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
        return [\PicturePark\API\Model\PdfFormat::class => false];
    }
}