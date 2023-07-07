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
class DocumentHistorySearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\DocumentHistorySearchRequest';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\DocumentHistorySearchRequest';
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
        $object = new \PicturePark\API\Model\DocumentHistorySearchRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('from', $data)) {
            $object->setFrom(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['from']));
        }
        if (\array_key_exists('to', $data)) {
            $object->setTo(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['to']));
        }
        if (\array_key_exists('limit', $data)) {
            $object->setLimit($data['limit']);
        }
        if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
            $object->setPageToken($data['pageToken']);
        }
        elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
            $object->setPageToken(null);
        }
        if (\array_key_exists('documentId', $data) && $data['documentId'] !== null) {
            $object->setDocumentId($data['documentId']);
        }
        elseif (\array_key_exists('documentId', $data) && $data['documentId'] === null) {
            $object->setDocumentId(null);
        }
        if (\array_key_exists('documentVersion', $data)) {
            $object->setDocumentVersion($data['documentVersion']);
        }
        if (\array_key_exists('documentType', $data) && $data['documentType'] !== null) {
            $object->setDocumentType($data['documentType']);
        }
        elseif (\array_key_exists('documentType', $data) && $data['documentType'] === null) {
            $object->setDocumentType(null);
        }
        if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
            $values = array();
            foreach ($data['sort'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\SortInfo', 'json', $context);
            }
            $object->setSort($values);
        }
        elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
            $object->setSort(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['from'] = $object->getFrom()->format('Y-m-d\\TH:i:sP');
        $data['to'] = $object->getTo()->format('Y-m-d\\TH:i:sP');
        $data['limit'] = $object->getLimit();
        if ($object->isInitialized('pageToken') && null !== $object->getPageToken()) {
            $data['pageToken'] = $object->getPageToken();
        }
        if ($object->isInitialized('documentId') && null !== $object->getDocumentId()) {
            $data['documentId'] = $object->getDocumentId();
        }
        $data['documentVersion'] = $object->getDocumentVersion();
        if ($object->isInitialized('documentType') && null !== $object->getDocumentType()) {
            $data['documentType'] = $object->getDocumentType();
        }
        if ($object->isInitialized('sort') && null !== $object->getSort()) {
            $values = array();
            foreach ($object->getSort() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['sort'] = $values;
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('PicturePark\\API\\Model\\DocumentHistorySearchRequest' => false);
    }
}