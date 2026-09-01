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
            $object->kind = $data['kind'];
            unset($data['kind']);
        }
        if (\array_key_exists('jpegQuality', $data)) {
            $object->jpegQuality = $data['jpegQuality'];
            unset($data['jpegQuality']);
        }
        if (\array_key_exists('fastWebView', $data)) {
            $object->fastWebView = $data['fastWebView'];
            unset($data['fastWebView']);
        }
        if (\array_key_exists('reduceFileSize', $data)) {
            $object->reduceFileSize = $data['reduceFileSize'];
            unset($data['reduceFileSize']);
        }
        if (\array_key_exists('extension', $data) && $data['extension'] !== null) {
            $object->extension = $data['extension'];
            unset($data['extension']);
        }
        elseif (\array_key_exists('extension', $data) && $data['extension'] === null) {
            $object->extension = null;
            unset($data['extension']);
        }
        if (\array_key_exists('extractFullText', $data)) {
            $object->extractFullText = $data['extractFullText'];
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
        $dataArray['kind'] = $data->kind ?? null;
        if (array_key_exists('jpegQuality', get_object_vars($data)) && null !== ($data->jpegQuality ?? null)) {
            $dataArray['jpegQuality'] = $data->jpegQuality ?? null;
        }
        if (array_key_exists('fastWebView', get_object_vars($data)) && null !== ($data->fastWebView ?? null)) {
            $dataArray['fastWebView'] = $data->fastWebView ?? null;
        }
        if (array_key_exists('reduceFileSize', get_object_vars($data)) && null !== ($data->reduceFileSize ?? null)) {
            $dataArray['reduceFileSize'] = $data->reduceFileSize ?? null;
        }
        if (array_key_exists('extension', get_object_vars($data)) && null !== ($data->extension ?? null)) {
            $dataArray['extension'] = $data->extension ?? null;
        }
        if (array_key_exists('extractFullText', get_object_vars($data)) && null !== ($data->extractFullText ?? null)) {
            $dataArray['extractFullText'] = $data->extractFullText ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
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