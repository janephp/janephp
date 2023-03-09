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
class DocumentHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\DocumentHistory';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\DocumentHistory';
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
        $object = new \PicturePark\API\Model\DocumentHistory();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('documentDate', $data)) {
            $object->setDocumentDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['documentDate']));
        }
        if (\array_key_exists('document', $data) && $data['document'] !== null) {
            $object->setDocument($data['document']);
        }
        elseif (\array_key_exists('document', $data) && $data['document'] === null) {
            $object->setDocument(null);
        }
        if (\array_key_exists('timestamp', $data)) {
            $object->setTimestamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['timestamp']));
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $object->setAudit($data['audit']);
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->setAudit(null);
        }
        if (\array_key_exists('deleted', $data)) {
            $object->setDeleted($data['deleted']);
        }
        if (\array_key_exists('action', $data)) {
            $object->setAction($data['action']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('documentId') && null !== $object->getDocumentId()) {
            $data['documentId'] = $object->getDocumentId();
        }
        $data['documentVersion'] = $object->getDocumentVersion();
        if ($object->isInitialized('documentType') && null !== $object->getDocumentType()) {
            $data['documentType'] = $object->getDocumentType();
        }
        $data['documentDate'] = $object->getDocumentDate()->format('Y-m-d\\TH:i:sP');
        if ($object->isInitialized('document') && null !== $object->getDocument()) {
            $data['document'] = $object->getDocument();
        }
        $data['timestamp'] = $object->getTimestamp()->format('Y-m-d\\TH:i:sP');
        if ($object->isInitialized('audit') && null !== $object->getAudit()) {
            $data['audit'] = $object->getAudit();
        }
        $data['deleted'] = $object->getDeleted();
        $data['action'] = $object->getAction();
        return $data;
    }
}