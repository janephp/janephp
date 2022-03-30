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
class QueryDebugInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\QueryDebugInformation';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\QueryDebugInformation';
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
        $object = new \PicturePark\API\Model\QueryDebugInformation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('general', $data) && $data['general'] !== null) {
            $object->setGeneral($data['general']);
        }
        elseif (\array_key_exists('general', $data) && $data['general'] === null) {
            $object->setGeneral(null);
        }
        if (\array_key_exists('auditTrail', $data) && $data['auditTrail'] !== null) {
            $object->setAuditTrail($data['auditTrail']);
        }
        elseif (\array_key_exists('auditTrail', $data) && $data['auditTrail'] === null) {
            $object->setAuditTrail(null);
        }
        if (\array_key_exists('request', $data) && $data['request'] !== null) {
            $object->setRequest($data['request']);
        }
        elseif (\array_key_exists('request', $data) && $data['request'] === null) {
            $object->setRequest(null);
        }
        if (\array_key_exists('response', $data) && $data['response'] !== null) {
            $object->setResponse($data['response']);
        }
        elseif (\array_key_exists('response', $data) && $data['response'] === null) {
            $object->setResponse(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGeneral()) {
            $data['general'] = $object->getGeneral();
        }
        if (null !== $object->getAuditTrail()) {
            $data['auditTrail'] = $object->getAuditTrail();
        }
        if (null !== $object->getRequest()) {
            $data['request'] = $object->getRequest();
        }
        if (null !== $object->getResponse()) {
            $data['response'] = $object->getResponse();
        }
        return $data;
    }
}