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
class PdfFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\PdfFormat';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\PdfFormat';
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
        $object = new \PicturePark\API\Model\PdfFormat();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['kind'] = $object->getKind();
        if ($object->isInitialized('jpegQuality') && null !== $object->getJpegQuality()) {
            $data['jpegQuality'] = $object->getJpegQuality();
        }
        if ($object->isInitialized('fastWebView') && null !== $object->getFastWebView()) {
            $data['fastWebView'] = $object->getFastWebView();
        }
        if ($object->isInitialized('reduceFileSize') && null !== $object->getReduceFileSize()) {
            $data['reduceFileSize'] = $object->getReduceFileSize();
        }
        if ($object->isInitialized('extension') && null !== $object->getExtension()) {
            $data['extension'] = $object->getExtension();
        }
        if ($object->isInitialized('extractFullText') && null !== $object->getExtractFullText()) {
            $data['extractFullText'] = $object->getExtractFullText();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}