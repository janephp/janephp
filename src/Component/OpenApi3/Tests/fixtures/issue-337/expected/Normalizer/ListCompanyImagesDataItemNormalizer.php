<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ListCompanyImagesDataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\ListCompanyImagesDataItem';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ListCompanyImagesDataItem';
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
        $object = new \CreditSafe\API\Model\ListCompanyImagesDataItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('imageId', $data)) {
            $object->setImageId($data['imageId']);
            unset($data['imageId']);
        }
        if (\array_key_exists('company', $data)) {
            $object->setCompany($this->denormalizer->denormalize($data['company'], 'CreditSafe\\API\\Model\\ListCompanyImagesDataItemCompany', 'json', $context));
            unset($data['company']);
        }
        if (\array_key_exists('document', $data)) {
            $object->setDocument($this->denormalizer->denormalize($data['document'], 'CreditSafe\\API\\Model\\ListCompanyImagesDataItemDocument', 'json', $context));
            unset($data['document']);
        }
        if (\array_key_exists('format', $data)) {
            $object->setFormat($data['format']);
            unset($data['format']);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
            unset($data['source']);
        }
        if (\array_key_exists('filingDate', $data)) {
            $object->setFilingDate($data['filingDate']);
            unset($data['filingDate']);
        }
        if (\array_key_exists('uploadDate', $data)) {
            $object->setUploadDate($data['uploadDate']);
            unset($data['uploadDate']);
        }
        if (\array_key_exists('accountingDate', $data)) {
            $object->setAccountingDate($data['accountingDate']);
            unset($data['accountingDate']);
        }
        if (\array_key_exists('language', $data)) {
            $object->setLanguage($data['language']);
            unset($data['language']);
        }
        if (\array_key_exists('comments', $data)) {
            $object->setComments($data['comments']);
            unset($data['comments']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('localProperties', $data)) {
            $object->setLocalProperties($this->denormalizer->denormalize($data['localProperties'], 'CreditSafe\\API\\Model\\ListCompanyImagesDataItemLocalProperties', 'json', $context));
            unset($data['localProperties']);
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
        if ($object->isInitialized('imageId') && null !== $object->getImageId()) {
            $data['imageId'] = $object->getImageId();
        }
        if ($object->isInitialized('company') && null !== $object->getCompany()) {
            $data['company'] = $this->normalizer->normalize($object->getCompany(), 'json', $context);
        }
        if ($object->isInitialized('document') && null !== $object->getDocument()) {
            $data['document'] = $this->normalizer->normalize($object->getDocument(), 'json', $context);
        }
        if ($object->isInitialized('format') && null !== $object->getFormat()) {
            $data['format'] = $object->getFormat();
        }
        if ($object->isInitialized('source') && null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        if ($object->isInitialized('filingDate') && null !== $object->getFilingDate()) {
            $data['filingDate'] = $object->getFilingDate();
        }
        if ($object->isInitialized('uploadDate') && null !== $object->getUploadDate()) {
            $data['uploadDate'] = $object->getUploadDate();
        }
        if ($object->isInitialized('accountingDate') && null !== $object->getAccountingDate()) {
            $data['accountingDate'] = $object->getAccountingDate();
        }
        if ($object->isInitialized('language') && null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }
        if ($object->isInitialized('comments') && null !== $object->getComments()) {
            $data['comments'] = $object->getComments();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('localProperties') && null !== $object->getLocalProperties()) {
            $data['localProperties'] = $this->normalizer->normalize($object->getLocalProperties(), 'json', $context);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}