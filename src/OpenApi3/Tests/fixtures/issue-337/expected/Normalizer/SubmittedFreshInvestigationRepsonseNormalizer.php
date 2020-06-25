<?php

namespace CreditSafe\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SubmittedFreshInvestigationRepsonseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\SubmittedFreshInvestigationRepsonse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\SubmittedFreshInvestigationRepsonse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\SubmittedFreshInvestigationRepsonse();
        if (\array_key_exists('correlationId', $data)) {
            $object->setCorrelationId($data['correlationId']);
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
        }
        if (\array_key_exists('orderID', $data)) {
            $object->setOrderID($data['orderID']);
        }
        if (\array_key_exists('transactionID', $data)) {
            $object->setTransactionID($data['transactionID']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCorrelationId()) {
            $data['correlationId'] = $object->getCorrelationId();
        }
        if (null !== $object->getMessage()) {
            $data['message'] = $object->getMessage();
        }
        if (null !== $object->getOrderID()) {
            $data['orderID'] = $object->getOrderID();
        }
        if (null !== $object->getTransactionID()) {
            $data['transactionID'] = $object->getTransactionID();
        }
        return $data;
    }
}