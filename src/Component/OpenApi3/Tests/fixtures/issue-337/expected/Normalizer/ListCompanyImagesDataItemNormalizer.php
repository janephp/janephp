<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
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
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\ListCompanyImagesDataItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ListCompanyImagesDataItem';
    }
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
        }
        if (\array_key_exists('company', $data)) {
            $object->setCompany($this->denormalizer->denormalize($data['company'], 'CreditSafe\\API\\Model\\ListCompanyImagesDataItemCompany', 'json', $context));
        }
        if (\array_key_exists('document', $data)) {
            $object->setDocument($this->denormalizer->denormalize($data['document'], 'CreditSafe\\API\\Model\\ListCompanyImagesDataItemDocument', 'json', $context));
        }
        if (\array_key_exists('format', $data)) {
            $object->setFormat($data['format']);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
        }
        if (\array_key_exists('filingDate', $data)) {
            $object->setFilingDate($data['filingDate']);
        }
        if (\array_key_exists('uploadDate', $data)) {
            $object->setUploadDate($data['uploadDate']);
        }
        if (\array_key_exists('accountingDate', $data)) {
            $object->setAccountingDate($data['accountingDate']);
        }
        if (\array_key_exists('language', $data)) {
            $object->setLanguage($data['language']);
        }
        if (\array_key_exists('comments', $data)) {
            $object->setComments($data['comments']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('localProperties', $data)) {
            $object->setLocalProperties($this->denormalizer->denormalize($data['localProperties'], 'CreditSafe\\API\\Model\\ListCompanyImagesDataItemLocalProperties', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getImageId()) {
            $data['imageId'] = $object->getImageId();
        }
        if (null !== $object->getCompany()) {
            $data['company'] = $this->normalizer->normalize($object->getCompany(), 'json', $context);
        }
        if (null !== $object->getDocument()) {
            $data['document'] = $this->normalizer->normalize($object->getDocument(), 'json', $context);
        }
        if (null !== $object->getFormat()) {
            $data['format'] = $object->getFormat();
        }
        if (null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        if (null !== $object->getFilingDate()) {
            $data['filingDate'] = $object->getFilingDate();
        }
        if (null !== $object->getUploadDate()) {
            $data['uploadDate'] = $object->getUploadDate();
        }
        if (null !== $object->getAccountingDate()) {
            $data['accountingDate'] = $object->getAccountingDate();
        }
        if (null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }
        if (null !== $object->getComments()) {
            $data['comments'] = $object->getComments();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getLocalProperties()) {
            $data['localProperties'] = $this->normalizer->normalize($object->getLocalProperties(), 'json', $context);
        }
        return $data;
    }
}